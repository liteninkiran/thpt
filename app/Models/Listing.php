<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = [
        'date_posted',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function create_user() {
        return $this->belongsTo('App\Models\User', 'created_by');
    }

    public function update_user() {
        return $this->belongsTo('App\Models\User', 'updated_by');
    }

}
