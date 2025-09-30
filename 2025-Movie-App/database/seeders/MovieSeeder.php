<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Movie::insert([
        [
        'title' => 'The Avengers',
        'release_date' => '2012-04-21',
        'movie_url' => 'The_Avengers_(2012_film)_poster',
        'description' => 'Founded by S.H.I.E.L.D. director Nick Fury, the team is a United States based organization composed primarily of superpowered and gifted individuals, described as "Earths Mightiest Heroes, who are committed to the worlds protection from a variety of threats'
        ],
    
    
      [
        'title' => 'The Shawshank Redemption',
        'release_date' => '1994-09-23',
        'movie_url' => 'ShawshankRedemptionMoviePoster',
        'description' => 'Two imprisoned men bond over several years, finding solace and eventual redemption through acts of common decency.'
      ],

          [
        'title' => 'The Lion King',
        'release_date' => '1994-06-24',
        'movie_url' => 'lionking',
        'description' => 'A young lion prince flees his kingdom after the murder of his father, only to learn the true meaning of responsibility and bravery'
      ],


          [
        'title' => 'The Super Mario Bros Movie',
        'release_date' => '2023-04-05',
        'movie_url' => 'The_Super_Mario_Bros._Movie_poster',
        'description' => 'The Super Mario Bros. Movie (2023) follows Brooklyn plumbers Mario and Luigi, who are transported to the magical Mushroom Kingdom. Mario teams up with Princess Peach, Toad, and Donkey Kong to rescue Luigi from the evil Bowser.'
      ],


          [
        'title' => 'Spirted Away',
        'release_date' => '2003-03-28',
        'movie_url' => 'Spirited_Away_Japanese_poster',
        'description' => 'During her familys move to the suburbs, a sullen 10-year-old girl wanders into a world ruled by gods, witches and spirits, and where humans are changed into beasts.'
      ],
    ]);
    }
}
