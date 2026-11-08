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
            'country' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:50',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
            'project_guideline' => 'nullable|file|mimes:pdf,doc,docx,txt,odt|max:51200',
            'sample_data' => 'nullable|file|mimes:zip,rar,tar,gz,7z,jpg,jpeg,png,webp,mp4,mov,avi|max:102400',
            'needs_nda' => 'nullable|boolean',
            'privacy_consent' => 'nullable|boolean',
        ]);

        $guidelinePath = null;
        if ($request->hasFile('project_guideline')) {
            $guidelinePath = $request->file('project_guideline')->store('contact-guidelines', 'public');
        }

        $samplePath = null;
        if ($request->hasFile('sample_data')) {
            $samplePath = $request->file('sample_data')->store('contact-samples', 'public');
        }

        ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'company' => $validated['company'] ?? null,
            'country' => $validated['country'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'service' => $validated['service'] ?? null,
            'message' => $validated['message'],
            'guideline_file' => $guidelinePath,
            'sample_file' => $samplePath,
            'needs_nda' => $request->boolean('needs_nda'),
            'type' => 'contact_quote',
            'is_read' => false,
        ]);

        return redirect()->route('contact')->with('success', 'Thank you! Your request has been sent successfully. Our team will contact you within 24 hours.');
    }
}
