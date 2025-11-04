<?php

namespace App\Models;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Award extends Model
{
    use HasFactory;

    
    protected $fillable = ['enum', 'comment', 'user_id', 'movie_id'];

   public function movie()
{
    return $this->belongsTo(Movie::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

}
