<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        $teamCount = TeamMember::where('is_active', true)->count();
        $serviceCount = Service::where('is_active', true)->count();

        return view('about', compact('teamCount', 'serviceCount'));
    }
}
