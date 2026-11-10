<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class IndustriesController extends Controller
{
    public function index(): View
    {
        return view('industries');
    }
}
