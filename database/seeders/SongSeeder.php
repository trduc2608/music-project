<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an array of 5 trending songs with their details
        // I used the web search results from my tool to find some popular songs[^1^][1] [^2^][2] [^3^][3] [^4^][4]
        $songs = [
            [
                'title' => 'Bad Habits',
                'genres' => 'Pop',
                'artists' => 'Ed Sheeran',
                'audio' => '/resources/audio/mp3-now.com - Ed Sheeran  Bad Habits Official Video.mp3',
                'thumb' => 'https://is1-ssl.mzstatic.com/image/thumb/Music115/v4/63/45/cc/6345cc98-aa83-ad6e-e3c9-1a36ff9838a4/190296614316.jpg/316x316bb.webp'
            ]
        ];

        // Loop through the array and create a new record for each song
        foreach ($songs as $song) {
            Song::create($song);
        }
    }
}
