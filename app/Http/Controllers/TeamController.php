<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $department = $request->query('dept', 'all');

        $query = TeamMember::where('is_active', true)->inHierarchyOrder();

        if ($department !== 'all') {
            $query->where('category', 'like', "%{$department}%");
        }

        $teamMembers = $query->get();
        $allMembers = TeamMember::where('is_active', true)->inHierarchyOrder()->get();

        $leadership = $allMembers->filter(fn ($m) => in_array($m->designation_rank, [1, 2, 3]) || preg_match('/(ceo|founder|director|manager|head|executive)/i', (string) $m->role))->count();
        $teamLeads = $allMembers->filter(fn ($m) => $m->designation_rank === 4 || (preg_match('/team\s*lead/i', (string) $m->role) && !preg_match('/qa/i', (string) $m->role)))->count();
        $qaLeads = $allMembers->filter(fn ($m) => $m->designation_rank === 5 || preg_match('/(qa|quality)/i', (string) $m->role))->count();
        $annotators = $allMembers->filter(fn ($m) => in_array($m->designation_rank, [6, 7]) || preg_match('/(annotat|label|specialist)/i', (string) $m->role))->count();

        $counts = [
            'all' => $allMembers->count(),
            'total' => $allMembers->count(),
            'leadership' => $leadership,
            'team_leads' => $teamLeads,
            'qa_leads' => $qaLeads,
            'leads' => $teamLeads + $qaLeads,
            'annotators' => $annotators,
            'specialists' => $annotators,
            'cv' => $allMembers->filter(fn ($m) => str_contains($m->category, 'cv'))->count(),
            'nlp' => $allMembers->filter(fn ($m) => str_contains($m->category, 'nlp'))->count(),
            'audio' => $allMembers->filter(fn ($m) => str_contains($m->category, 'audio'))->count(),
            'qa' => $allMembers->filter(fn ($m) => str_contains($m->category, 'qa'))->count(),
        ];

        return view('team', compact('teamMembers', 'allMembers', 'counts', 'department'));
    }
}
