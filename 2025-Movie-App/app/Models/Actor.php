<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'image', 'age', 'story'];

    // Actor can be in many movies
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }

}
