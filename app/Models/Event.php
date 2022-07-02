<?php

namespace App\Models;

use App\Models\EventGallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'date', 'location', 'description', 'slug', 'year'
    ];

    public function eventgallery()
    {
        return $this->hasMany(EventGallery::class, 'events_id', 'id');
    }
}
