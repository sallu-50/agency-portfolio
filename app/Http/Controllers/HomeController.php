<?php

namespace App\Http\Controllers;

use App\Models\HeroVideo;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $heroVideo = HeroVideo::where('is_active', true)->latest('id')->first();

        return view('home', compact('services', 'heroVideo'));
    }
}
