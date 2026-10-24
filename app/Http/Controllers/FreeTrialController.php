<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FreeTrialController extends Controller
{
    public function index(): View
    {
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();

        return view('free-trial', compact('services'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:100',
            'phone' => 'nullable|string|max:50',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
            'project_guideline' => 'nullable|file|mimes:pdf,doc,docx,txt,odt|max:51200',
            'sample_data' => 'nullable|file|mimes:zip,rar,tar,gz,7z,jpg,jpeg,png,webp,mp4,mov,avi|max:102400',
        ]);

        $guidelinePath = null;
        if ($request->hasFile('project_guideline')) {
            $guidelinePath = $request->file('project_guideline')->store('trial-guidelines', 'public');
        }

        $samplePath = null;
        if ($request->hasFile('sample_data')) {
            $samplePath = $request->file('sample_data')->store('trial-samples', 'public');
        }

        ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'country' => $validated['country'],
            'phone' => $validated['phone'] ?? null,
            'service' => $validated['service'] ?? null,
            'message' => $validated['message'],
            'guideline_file' => $guidelinePath,
            'sample_file' => $samplePath,
            'type' => 'free_trial',
            'is_read' => false,
        ]);

        return redirect()->route('free-trial')
            ->with('success', 'Your Free Trial Pilot request has been submitted successfully! Our engineering team will review your project guidelines and sample data and contact you within 24 hours.');
    }
}
