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
        'movie_url' => 'The_Avengers_(2012_film)_poster', // image file name
        'trailer_link'=> 'eOrNdBpGMv8', //only the youtube id at the end
        'description' => 'Earths mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity. Loki, the adopted brother of Thor, teams-up with the Chitauri Army and uses the Tesseracts power to travel from Asgard to Midgard to plot the invasion of Earth and become a king. The director of the agency S.H.I.E.L.D., Nick Fury, sets in motion project Avengers, joining Tony Stark a.k.a. the Iron Man; Steve Rogers, a.k.a. Captain America; Bruce Banner, a.k.a. The Hulk; Thor; Natasha Romanoff, a.k.a. Black Widow; and Clint Barton, a.k.a. Hawkeye, to save the world from the powerful Loki and the alien invasion. (IMDB)'
        ],
    
    
      [
        'title' => 'The Shawshank Redemption',
        'release_date' => '1994-09-23',
        'movie_url' => 'ShawshankRedemptionMoviePoster', // image file name
        'trailer_link'=> 'PLl99DlL6b4',  //only the youtube id at the end
        'description' => 'The Shawshank Redemption is a powerful drama that follows the story of Andy Dufresne, a banker who is wrongfully convicted of murdering his wife and her lover. Sentenced to life at the Shawshank State Penitentiary, Andy forms a deep friendship with fellow inmate Ellis Red Redding. Over the course of two decades, Andy maintains his quiet dignity and hope, using his intelligence and patience to improve life inside the prison — and ultimately to plan an incredible escape. The film explores themes of hope, justice, friendship, and redemption, making it one of the most beloved films of all time. (IMDB)'
      ],

     [
        'title' => 'The Lion King',
        'release_date' => '1994-06-24',
        'movie_url' => 'lionking', // image file name
        'trailer_link'=> 'lFzVJEksoDY',  //only the youtube id at the end
        'description' => 'Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.A young lion prince is cast out of his pride by his cruel uncle, who claims he killed his father. While the uncle rules with an iron paw, the prince grows up beyond the Savannah, living by a philosophy: No worries for the rest of your days. But when his past comes to haunt him, the young prince must decide his fate: Will he remain an outcast or face his demons and become what he needs to be. (IMDB)'
    ],


      [
        'title' => 'The Super Mario Bros Movie',
        'release_date' => '2023-04-05',
        'movie_url' => 'The_Super_Mario_Bros._Movie_poster', // image file name
        'trailer_link'=> 'TnGl01FkMMo',  //only the youtube id at the end
        'description' => 'Mario (Chris Pratt) and Luigi (Charlie Day) are struggling Brooklyn brother plumbers. When the city s sewer goes haywire, Mario sees an opportunity for heroic fame. Instead, they get sucked into an alternate world. The brothers get separated. Mario joins Princess Peach (Anya Taylor-Joy) to recruit the Kong army in their fight against the evil turtle Bowser (Jack Black). Luigi gets captured. (IMDB)'
      ],


      [
        'title' => 'Spirted Away',
        'release_date' => '2003-03-28',
        'movie_url' => 'Spirited_Away', // image file name
        'trailer_link'=> 'fDUFP7EeXLE',  //only the youtube id at the end
        'description' => 'During her familys move to the suburbs, a sullen 10-year-old girl wanders into a world ruled by gods, witches and spirits, and where humans are changed into beasts. The fanciful adventures of a ten-year-old girl named Chihiro, who discovers a secret world when she and her family get lost and venture through a hillside tunnel. When her parents undergo a mysterious transformation, Chihiro must fend for herself as she encounters strange spirits, assorted creatures and a grumpy sorceress who seeks to prevent her from returning to the human world. (IMDB)'
      ],

        [
        'title' => 'Everything Everywhere All at Once (2022)',
        'release_date' => '2022-04-08',
        'movie_url' => 'everything at once', // image file name
        'trailer_link'=> 'wxN1T1uxQ2g',  //only the youtube id at the end
        'description' => 'The story focuses on Evelyn Quan Wang, an aging, weary and frustrated Chinese-American immigrant woman who struggles to keep herself, her naive husband, her troubled daughter Joy, her ill father up and try thrive on her business, a laundromat. On the day she goes to the IRS to avoid of being audited, an interdimensional severance mess up with the reality and all hell breaks loose. Now, she discovers to be an unexpected heroine who must navigate throughout multiple parallel versions of herself from other life paths and acquire the special skills of her other Is to fight and prevent an ubiquitous, chaotic and powerful evil being from causing the annihilation of the infinite multiverse. (Fandom)'
      ],

        [
        'title' => 'La La Land',
        'release_date' => '2017-01-13',
        'movie_url' => 'lala', // image file name
        'trailer_link'=> '0pdqf4P9MB8',  //only the youtube id at the end
        'description' => 'When Sebastian, a pianist, and Mia, an actress, follow their passion and achieve success in their respective fields, they find themselves torn between their love for each other and their careers. Aspiring actress serves lattes to movie stars in between auditions and jazz musician Sebastian scrapes by playing cocktail-party gigs in dingy bars. But as success mounts, they are faced with decisions that fray the fragile fabric of their love affair, and the dreams they worked so hard to maintain in each other threaten to rip them apart. (IMDB)'
      ],

        [
        'title' => 'The Social Network (2010)',
        'release_date' => '2010-10-01',
        'movie_url' => 'social', // image file name
        'trailer_link'=> 'lB95KLmpLR4',  //only the youtube id at the end
        'description' => '"On a fall night in 2003, Harvard undergrad and computer programming genius Mark Zuckerberg sits down at his computer and heatedly begins working on a new idea. In a fury of blogging and programming, what begins in his dorm room soon becomes a global social network and a revolution in communication. A mere six years and 500 million friends later, Mark Zuckerberg is the youngest billionaire in history... but for this entrepreneur, success leads to both personal and legal complications. (IMDB)'
      ],


        [
        'title' => 'The Matrix',
        'release_date' => '1999-03-31',
        'movie_url' => 'matrix', // image file name
        'trailer_link'=> 'vKQi3bBA1y8',  //only the youtube id at the end
        'description' => 'Thomas A. Anderson is a man living two lives. By day he is an average computer programmer and by night a hacker known as Neo. Neo has always questioned his reality, but the truth is far beyond his imagination. Neo finds himself targeted by the police when he is contacted by Morpheus, a legendary computer hacker branded a terrorist by the government. As a rebel against the machines, Neo must confront the agents: super-powerful computer programs devoted to stopping Neo and the entire human rebellion.'
        ],

          [
        'title' => 'The Burbs',
        'release_date' => '1989-02-17',
        'movie_url' => 'the burbs', // image file name
        'trailer_link'=> 'pyRUijyrXr4',  //only the youtube id at the end
        'description' => 'The film pokes fun at suburban environments and their sometimes eccentric dwellers, featuring a family man who suspects the "eccentric" new neighbors are hiding a dark secret. Hes a man of peace in a savage land: Suburbia. When secretive new neighbors move in next door, suburbanite Ray Peterson and his friends let their paranoia get the best of them as they start to suspect the newcomers of evil doings and commence an investigation.But its hardly how Ray, who much prefers to drink beer, read his newspaper, and watch a ballgame on the tube, expected to spend his vacation. '
      ]
    ]);
    }
}
