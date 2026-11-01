<?php

namespace App\Http\Controllers;

use App\Models\HeroVideo;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        if (Service::where('slug', 'lidar-3d')->doesntExist()) {
            Service::updateOrCreate(['slug' => 'lidar-3d'], [
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
            ]);
        }

        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $heroVideo = HeroVideo::where('is_active', true)->latest('id')->first();

        return view('home', compact('services', 'heroVideo'));
    }
}
