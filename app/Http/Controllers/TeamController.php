<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $department = $request->query('dept', 'all');

        $query = TeamMember::where('is_active', true)->orderBy('sort_order');

        if ($department !== 'all') {
            $query->where('category', 'like', "%{$department}%");
        }

        $teamMembers = $query->get();
        $allMembers = TeamMember::where('is_active', true)->orderBy('sort_order')->get();

        $counts = [
            'all' => $allMembers->count(),
            'leadership' => $allMembers->filter(fn ($m) => str_contains($m->category, 'leadership'))->count(),
            'cv' => $allMembers->filter(fn ($m) => str_contains($m->category, 'cv'))->count(),
            'nlp' => $allMembers->filter(fn ($m) => str_contains($m->category, 'nlp'))->count(),
            'audio' => $allMembers->filter(fn ($m) => str_contains($m->category, 'audio'))->count(),
            'qa' => $allMembers->filter(fn ($m) => str_contains($m->category, 'qa'))->count(),
        ];

        return view('team', compact('teamMembers', 'allMembers', 'counts', 'department'));
    }
}
