<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        if (Service::where('slug', 'lidar-3d')->doesntExist()) {
            Service::updateOrCreate(['slug' => 'lidar-3d'], [
                'title' => 'LiDAR & 3D Annotation',
                'category' => 'Specialized',
                'icon' => 'box',
                'badge_color' => 'blue',
                'short_description' => 'Point cloud labeling for autonomous driving and robotics.',
                'description' => 'Point cloud labeling for autonomous driving and robotics. High-precision 3D point cloud and LiDAR annotation services for autonomous systems, robotics, and spatial AI.',
                'features' => [
                    '3D cuboid labeling',
                    'Point cloud segmentation',
                    'Sensor-fusion (camera + LiDAR) labeling',
                ],
                'button_text' => 'Explore LiDAR annotation',
                'sort_order' => 3,
                'is_active' => true,
            ]);
        }

        $services = Service::where('is_active', true)->orderBy('sort_order')->get();

        return view('services.index', compact('services'));
    }

    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $otherServices = Service::where('slug', '!=', $slug)->where('is_active', true)->orderBy('sort_order')->get();

        return view('services.show', compact('service', 'otherServices'));
    }
}
