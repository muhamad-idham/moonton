<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shawshank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
                'thumbnail' => 'https://m.media-amazon.com/images/I/61-vQDr7ecL._AC_UF1000,1000_QL80_.jpg',
                'rating' => 4.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'the-godfather',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=sY1S34973zA',
                'thumbnail' => 'https://cdn.entries.clios.com/styles/clio_aotw_ems_image_details_retina/s3/entry_attachments/image/72/2314/22597/127916/xdKvxDWh0uJ9pJPTwvqGsSiKPXD0nApkrWvUf4ySjQs.jpg',
                'rating' => 4.2,
                'is_featured' => 0,
            ],
            [
                'name' => 'The Godfather: Part II',
                'slug' => 'the-godfather-part-ii',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=sY1S34973zA',
                'thumbnail' => 'https://wallpapercave.com/wp/wp4119161.jpg',
                'rating' => 4.0,
                'is_featured' => 0,
            ],
        ];

        Movie::insert($movies);
    }
}
