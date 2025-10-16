<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//The Movie Model Class
class Movie extends Model
{
    use HasFactory;

    
    protected $fillable = [ //add this for the mass assignmant as its assigning to multiple attributes as one individual
        'title',
        'description',
        'release_date',
        'movie_url',
        'trailer_link'
    ];
}
