<?php

namespace App\Http\Controllers;

use App\Models\AnnotationTool;
use App\Models\HeroVideo;
use App\Models\Industry;
use App\Models\QualityPillar;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Auto-seed Services if empty or lidar-3d missing
        if (Service::count() === 0) {
            (new \Database\Seeders\DatabaseSeeder())->run();
        } elseif (Service::where('slug', 'lidar-3d')->doesntExist()) {
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

        // 2. Auto-seed Quality Pillars if empty
        if (QualityPillar::count() === 0) {
            (new \Database\Seeders\QualityPillarSeeder())->run();
        }

        // 3. Auto-seed Industries if empty
        if (Industry::count() === 0) {
            (new \Database\Seeders\IndustrySeeder())->run();
        }

        // 4. Auto-seed Annotation Tools if empty
        if (AnnotationTool::count() === 0) {
            (new \Database\Seeders\AnnotationToolSeeder())->run();
        }

        // 5. Auto-seed Hero Video if empty
        if (HeroVideo::count() === 0) {
            (new \Database\Seeders\HeroVideoSeeder())->run();
        }

        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        if ($services->isEmpty()) {
            $services = Service::orderBy('sort_order')->get();
        }

        $heroVideo = HeroVideo::where('is_active', true)->latest('id')->first() ?: HeroVideo::latest('id')->first();

        $industries = Industry::where('is_active', true)->orderBy('sort_order')->get();
        if ($industries->isEmpty()) {
            $industries = Industry::orderBy('sort_order')->get();
        }

        $qualityPillars = QualityPillar::where('is_active', true)
            ->whereIn('target_page', ['home', 'both'])
            ->orderBy('sort_order')
            ->get();
        if ($qualityPillars->isEmpty()) {
            $qualityPillars = QualityPillar::whereIn('target_page', ['home', 'both'])->orderBy('sort_order')->get();
            if ($qualityPillars->isEmpty()) {
                $qualityPillars = QualityPillar::orderBy('sort_order')->get();
            }
        }

        $annotationTools = AnnotationTool::where('is_active', true)->orderBy('sort_order')->get();
        if ($annotationTools->isEmpty()) {
            $annotationTools = AnnotationTool::orderBy('sort_order')->get();
        }

        return view('home', compact('services', 'heroVideo', 'industries', 'qualityPillars', 'annotationTools'));
    }
}
