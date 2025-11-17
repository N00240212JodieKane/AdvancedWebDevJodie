<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actor::insert([
              [
                'first_name' => 'Robert',
                'last_name' => 'Downey Jr',
                'image' => 'robertdowneyjr.jpg',
                'age' => '60',
                'story' => 'Robert John Downey Jr. (born April 4, 1965) is an American actor. Known for portraying charismatic and intelligent characters over a versatile range of films, he was named one of the greatest actors of the 21st century by The Independent. He was the highest-paid actor in Hollywood annually from 2013 to 2015, and is one of the highest-grossing actors of all time; his films as a leading actor have grossed over $14.3 billion worldwide.',
                'interview_link' => 'EWpvF9GTKhU'
            ],
            [
                'first_name' => 'Morgan',
                'last_name' => 'Freeman',
                'image' => 'morganfreeman.jpg',
                'age' => '88',
                'story' => 'Morgan Freeman (born June 1, 1937) is an American actor, producer, and narrator. In a career spanning six decades, he has received numerous accolades, including an Academy Award and a Golden Globe Award, as well as a nomination for a Grammy Award and a Tony Award. He was honored with the Kennedy Center Honor in 2008, an AFI Life Achievement Award in 2011, the Cecil B. DeMille Award in 2012, and Screen Actors Guild Life Achievement Award in 2018. In a 2022 readers poll by Empire, he was voted one of the 50 greatest actors of all time.',
                'interview_link' => 'IPXeiS1tzr4'
                
            ],
            [
                'first_name' => 'James',
                'last_name' => 'Earl Jones',
                'image' => 'jamesearljones.jpg',
                'age' => '94',
                'story' => 'James Earl Jones (January 17, 1931 – September 9, 2024) was an American actor. A pioneer for black actors in the entertainment industry, Jones is known for his extensive and acclaimed roles on stage and screen. Jones is one of the few performers to achieve the EGOT (Emmy, Grammy, Oscar, and Tony). He was inducted into the American Theater Hall of Fame in 1985, and was honored with the National Medal of Arts in 1992, the Kennedy Center Honor in 2002, the Screen Actors Guild Life Achievement Award in 2009, and the Academy Honorary Award in 2011.',
                'interview_link' => 'iKroR2dpCKc'
                
            ],
            [
                'first_name' => 'Anya',
                'last_name' => 'Taylor-Joy',
                'image' => 'anyataylorjoy.jpg',
                'age' => '29',
                'story' => 'Anya-Josephine Marie Taylor-Joy (/ˈænjə/;[1] born 16 April 1996) is an actress. Born in Miami and raised in Buenos Aires and London, she left school at the age of 16, following which she pursued an acting career. After a series of small television roles, her breakthrough came with a leading role in the horror film The Witch (2015). Her career progressed with roles in the horror film Split (2016) and its sequel Glass (2019), the black comedy film Thoroughbreds (2017), and for playing Emma Woodhouse in the period drama Emma (2020).',
                'interview_link' => '1oxNTduSaXM'
            ],
            [
                'first_name' => 'Rumi',
                'last_name' => 'Hiiragi',
                'image' => 'rumi.jpg',
                'age' => '38',
                'story' => 'Hiiragi first appeared in numerous commercials. She starred in the NHK asadora Suzuran and voiced Chihiro in Hayao Miyazakis award-winning anime film Spirited Away. In 2002, she appeared in the high school baseball television program Netto Koshien as a field reporter. In 2005, she appeared in the NTV program Nobuta o Produce, portraying the character Kasumi Aoi.',
                'interview_link' => '4cGhrILaPC4'

            ],
                     [
                'first_name' => 'Michelle',
                'last_name' => 'Yeoh',
                'image' => 'michelle.jpg',
                'age' => '63',
                'story' => 'Michelle Yeoh Choo Kheng Todt (née Yeoh Choo Kheng, Chinese: 楊紫瓊; born 6 August 1962), known professionally as Michelle Yeoh (/joʊ/ YOH), is a Malaysian actress. In a career spanning over four decades, she has acted in film and television productions covering a wide range of genres and received various accolades, including an Academy Award and a Golden Globe Award, along with nominations for two British Academy Film Awards. Credited as Michelle Khan in her early films, she rose to fame in the 1980s and 1990s after starring in Hong Kong action and martial arts films where she performed her own stunts. These roles included Yes, Madam (1985); Magnificent Warriors (1987); Police Story 3: Super Cop (1992); The Heroic Trio and Tai Chi Master (both 1993); and Wing Chun (1994).',
                'interview_link' => '5OXHQ_5TbPw'
            ],

                         [
                'first_name' => 'Emma',
                'last_name' => 'Stone',
                'image' => 'emma.jpg',
                'age' => '37',
                'story' => 'Emily Jean Stone (born November 6, 1988), known professionally as Emma Stone, is an American actress and film producer. Her accolades include two Academy Awards, two British Academy Film Awards, and two Golden Globe Awards. In 2017, she was the worlds highest-paid actress and named by Time magazine as one of the 100 most influential people in the world.',
                'interview_link' => 'KBjLj5B95J8'
            ],
            [
                'first_name' => 'Andrew',
                'last_name' => 'Garfield',
                'image' => 'andrew.jpg',
                'age' => '42',
                'story' => 'Andrew Russell Garfield (born 20 August 1983) is an English and American actor.[2][3][4] Known for his work in a variety of genres, from superhero to musicals in independent films. His accolades include a Golden Globe Award, in addition to nominations for two Academy Awards and three British Academy Film Awards. Time magazine named him one of the 100 most influential people in the world in 2022.',
                'interview_link' => 'Fk2ZB06vPjE'
            ],
            [
                'first_name' => 'Keanu',
                'last_name' => 'Reeves',
                 'image' => 'keanu.jpg',
                'age' => '61',
                'story' => 'Keanu Charles Reeves (/kiˈɑːnuː/ kee-AH-noo;[7] born September 2, 1964) is a Canadian[c] actor and musician. The recipient of numerous accolades in a career on screen spanning four decades, he is known for his leading roles in action films, his amiable public image, and his philanthropic efforts. In 2020, The New York Times ranked him as the fourth-greatest actor of the 21st century, and in 2022, Time magazine named him one of the 100 most influential people in the world.',
                'interview_link' => 'k4Bl4TXEm1w'
            ],
            [
                'first_name' => 'Carrie',
                'last_name' => 'Fisher',
                 'image' => 'carrie.jpg',
                'age' => '69',
                'story' => 'Carrie Frances Fisher (October 21, 1956 – December 27, 2016) was an American actress and writer. She played Princess Leia in the original Star Wars films (1977–1983) and reprised the role in The Force Awakens (2015), The Last Jedi (2017)—a posthumous release that was dedicated to her[2][3]—and The Rise of Skywalker (2019), the latter using unreleased footage from The Force Awakens.[4][5] Her other film credits include Shampoo (1975), The Blues Brothers (1980), Hannah and Her Sisters (1986), The Burbs (1989), When Harry Met Sally... (1989), Soapdish (1991), and The Women (2008).[6] She was nominated twice for the Primetime Emmy Award for Outstanding Guest Actress in a Comedy Series for her performances in the NBC sitcom 30 Rock (2007) and the Channel 4 series Catastrophe (2017).',
                'interview_link' => 'R1E6IexeSrQ'
            ],
        ]);
    }
}
