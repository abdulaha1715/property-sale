<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    // public function featured() {
    //     $this->belongsTo( Media::class, 'freatured_image_id');
    // }

    public function location() {
        $this->belongsTo( Location::class, 'location_id');
    }

    public function gallery() {
        $this->hasMany( Media::class, 'property_id');
    }
}
