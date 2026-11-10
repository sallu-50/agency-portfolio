<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CareersController extends Controller
{
    public function index(): View
    {
        return view('careers');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'location' => 'nullable|string|max:120',
            'position' => 'required|string|max:255',
            'portfolio_url' => 'nullable|string|max:500',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:20480',
            'message' => 'required|string|max:5000',
            'privacy_consent' => 'nullable|boolean',
        ]);

        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('careers-resumes', 'public');
        }

        ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'country' => $validated['location'] ?? 'Bangladesh',
            'company' => $validated['portfolio_url'] ?? null,
            'service' => $validated['position'],
            'message' => $validated['message'],
            'guideline_file' => $resumePath,
            'type' => 'career',
            'is_read' => false,
        ]);

        return redirect()->route('careers')
            ->with('success', 'Your application has been submitted successfully! Our leadership and hiring team will review your resume and reply within 24 hours.');
    }
}
