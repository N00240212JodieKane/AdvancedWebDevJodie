<?php

namespace App\Models;

use App\Models\Award;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    // Allow mass assignment for these attributes
    protected $fillable = [
        'title',
        'description',
        'release_date',
        'movie_url',
        'trailer_link',
    ];

    // Relationship: One Movie has many Awards
    public function awards()
    {
        return $this->hasMany(Award::class); //The relationship between the two models/databases
    }


    //Use both sides can have many of each other, connected through the pivot class
    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}

