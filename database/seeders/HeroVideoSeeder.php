<?php

namespace Database\Seeders;

use App\Models\HeroVideo;
use Illuminate\Database\Seeder;

class HeroVideoSeeder extends Seeder
{
    public function run(): void
    {
        HeroVideo::updateOrCreate(
            ['id' => 1],
            [
                'title' => 'Watch our workflow',
                'sub_caption' => 'See how we label data with precision & strict SLAs',
                'badge_text' => '99.8% Precision',
                'video_path' => 'https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4',
                'poster_image' => 'image/team-1.jpg',
                'is_active' => true,
            ]
        );
    }
}
