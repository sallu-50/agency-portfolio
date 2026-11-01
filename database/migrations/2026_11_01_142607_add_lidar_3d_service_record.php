<?php

use App\Models\Service;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Service::updateOrCreate(
            ['slug' => 'lidar-3d'],
            [
                'title' => 'LiDAR & 3D Point Cloud',
                'category' => 'Specialized',
                'icon' => 'box',
                'badge_color' => 'blue',
                'short_description' => 'Point clouds, 3D cuboids & sensor fusion.',
                'description' => 'High-precision 3D point cloud and LiDAR annotation services for autonomous systems, robotics, and spatial AI. We support multi-sensor fusion, continuous 3D cuboids, and point-level segmentation.',
                'features' => [
                    '3D Bounding Cuboids & Multi-Sensor Fusion',
                    'Dense Point Cloud Semantic Segmentation',
                    'LiDAR Tracking & Kinematic Trajectory Mapping',
                    'Sub-Centimeter Spatial Alignment & Edge Case QA',
                    'Multi-Frame Sensor Synchronization (LiDAR + Camera)',
                ],
                'sort_order' => 6,
                'is_active' => true,
            ]
        );

        Service::whereIn('slug', [
            'data-collection',
            'computer-vision',
            'nlp',
            'audio-annotation',
            'video-annotation',
            'lidar-3d',
        ])->update(['badge_color' => 'blue']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Service::where('slug', 'lidar-3d')->delete();
    }
};
