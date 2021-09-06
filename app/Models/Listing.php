<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use HasFactory, SoftDeletes;


    /* Values for these fields should never be programmatically changed. */
    protected $guarded = ['id', 'created_at', 'modified_at'];

    /* Default values for object creation */
    protected $attributes = [
    ];

    protected $dates = [
        'date_posted',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static $validationRules = [
        'title' => 'required|max:255',
        'location' => 'required|max:255',
        'name' => 'required|max:255',
        'guide_price' => 'required|max:255',
        'key_count' => 'required|max:255',
        'opportunity' => 'required|string',
        'cover_image' => 'nullable|max:255',
        'cover_image_title' => 'nullable|max:255',
        'current_owner' => 'required|max:255',
        'flag_management' => 'required|max:255',
        'financials' => 'required|max:255',
        'tenure' => 'required|max:255',
        'date_posted' => 'required|date',
        'comment' => 'required|string',
    ];

    public static $messages = array(
        'title.required' => 'Please enter a value for Title',
        'location.required' => 'Please enter a value for Location',
        'name.required' => 'Please enter a value for Name',
        'guide_price.required' => 'Please enter a value for Guide Price',
        'key_count.required' => 'Please enter a value for Key Count',
        'opportunity.required' => 'Please enter a value for Opportunity',
        'current_owner.required' => 'Please enter a value for Current Owner',
        'flag_management.required' => 'Please enter a value for Flag Management',
        'current_owner.required' => 'Please enter a value for Current Owner',
        'financials.required' => 'Please enter a value for Financials',
        'tenure.required' => 'Please enter a value for Tenure',
        'date_posted.required' => 'Please enter a value for Date Posted',
        'comment.required' => 'Please enter a value for Comment',
    );

    public function create_user() {
        return $this->belongsTo('App\Models\User', 'created_by');
    }

    public function update_user() {
        return $this->belongsTo('App\Models\User', 'updated_by');
    }

}
