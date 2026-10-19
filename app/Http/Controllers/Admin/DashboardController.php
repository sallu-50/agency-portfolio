<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\PortfolioItem;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'total_portfolio' => PortfolioItem::count(),
            'active_portfolio' => PortfolioItem::where('is_active', true)->count(),
            'featured_portfolio' => PortfolioItem::where('is_featured', true)->count(),
            'total_services' => Service::count(),
            'total_team' => TeamMember::count(),
            'total_messages' => ContactMessage::count(),
            'unread_messages' => ContactMessage::where('is_read', false)->count(),
        ];

        $recentProjects = PortfolioItem::latest()->take(5)->get();
        $recentMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentProjects', 'recentMessages'));
    }
}
