<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'facilitys_id', 'url'
    ];
}
