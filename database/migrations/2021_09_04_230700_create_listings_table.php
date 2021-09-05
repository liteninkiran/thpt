<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->string('name');
            $table->string('guide_price');
            $table->string('key_count');
            $table->text('opportunity');
            $table->string('cover_image')->nullable();
            $table->string('cover_image_title')->nullable();
            $table->string('current_owner');
            $table->string('flag_management');
            $table->string('financials');
            $table->string('tenure');
            $table->timestamp('date_posted')->useCurrent();
            $table->text('comment');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();;
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
