<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TermsOfServiceController extends Controller
{
    public function index(): View
    {
        return view('terms-of-service');
    }
}
