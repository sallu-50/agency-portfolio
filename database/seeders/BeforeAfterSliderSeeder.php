<?php

namespace Database\Seeders;

use App\Models\BeforeAfterSlider;
use Illuminate\Database\Seeder;

class BeforeAfterSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'Autonomous Vehicle LiDAR 3D Bounding Cuboids',
                'category' => 'Computer Vision',
                'before_image' => 'image/team-2.jpg',
                'after_image' => 'image/team-3.jpg',
                'before_label' => 'Raw Sensor Stream',
                'after_label' => '3D Labeled Cuboids',
                'description' => 'Multi-sensor synchronized frame tracking, bounding cuboids, and road kinematic tagging.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Clinical Abdominal MRI & Organ Segmentation',
                'category' => 'Medical Imaging',
                'before_image' => 'image/team-4.jpg',
                'after_image' => 'image/team-5.jpg',
                'before_label' => 'Raw DICOM Slice',
                'after_label' => 'Polygonal Masking',
                'description' => 'Sub-millimeter organ boundaries, lesion detection, and tissue density polygon segmentation.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'E-Commerce Product Background Removal & Retouching',
                'category' => 'Photo Retouching',
                'before_image' => 'image/team-6.jpg',
                'after_image' => 'image/team-7.jpg',
                'before_label' => 'Raw Studio Photo',
                'after_label' => 'Retouched Asset',
                'description' => 'Pixel-perfect clipping path, high-fidelity color balancing, and shadow generation.',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($sliders as $slider) {
            BeforeAfterSlider::updateOrCreate(
                ['title' => $slider['title']],
                $slider
            );
        }
    }
}
