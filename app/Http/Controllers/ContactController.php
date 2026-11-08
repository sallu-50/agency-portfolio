<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Service;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();

        return view('contact', compact('services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|max:3000',
            'needs_nda' => 'nullable|boolean',
        ]);

        $validated['needs_nda'] = $request->boolean('needs_nda');

        ContactMessage::create($validated);

        return redirect()->route('contact')->with('success', 'Thank you! Your request has been sent successfully. Our team will contact you within 24 hours.');
    }
}
