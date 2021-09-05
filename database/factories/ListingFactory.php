<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Listing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Key Count
        $minKeys = $this->faker->numberBetween(10, 30);
        $maxKeys = $this->faker->numberBetween($minKeys + 10, $minKeys + 30);

        // Guide Price
        $cc = $this->faker->currencyCode();
        $price = $this->faker->numberBetween(10, 100) * 1000000;

        // Current Owner
        $rnd = $this->faker->numberBetween(1, 100);
        $owner = $rnd <= 50 ? $this->faker->company() : $this->faker->name();

        // Created By
        $user = User::inRandomOrder()->first();

        return [
            'title' => $this->faker->realText(150, 5),
            'location' => $this->faker->country(),
            'name' => $this->faker->company(),
            'guide_price' => $cc . ' ' . $price,
            'key_count' => 'Between ' . $minKeys . ' and ' . $maxKeys,
            'opportunity' => $this->faker->realText(2000, 1),
            'current_owner' => $owner,
            'flag_management' => 'Free to new owner',
            'financials' => 'Full details available upon LOI/EOI',
            'tenure' => 'Freehold',
            'date_posted' => $this->faker->dateTime(),
            'comment' => $this->faker->realText(1000, 3),
            'created_by' => $user->id,
            'updated_by' => $user->id,
            'deleted_at' => $rnd <= 85 ? null : $this->faker->dateTime(),
        ];
    }
}


