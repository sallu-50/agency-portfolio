<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TeamMember;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $teamMembers = TeamMember::where('is_active', true)->orderBy('sort_order')->take(4)->get();

        return view('home', compact('services', 'teamMembers'));
    }
}
