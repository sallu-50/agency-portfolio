<?php

namespace App\Http\Controllers;

use App\Models\QualityPillar;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        $teamCount = TeamMember::where('is_active', true)->count();
        $serviceCount = Service::where('is_active', true)->count();
        $qualityPillars = QualityPillar::where('is_active', true)
            ->whereIn('target_page', ['about', 'both'])
            ->orderBy('sort_order')
            ->get();

        return view('about', compact('teamCount', 'serviceCount', 'qualityPillars'));
    }
}
