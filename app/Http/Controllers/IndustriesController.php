<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\View\View;

class IndustriesController extends Controller
{
    public function index(): View
    {
        $industries = Industry::where('is_active', true)->orderBy('sort_order')->get();

        return view('industries', compact('industries'));
    }
}
