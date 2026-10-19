<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(Request $request): View
    {
        $activeCategory = $request->query('category', 'all');

        $query = PortfolioItem::where('is_active', true)->orderBy('sort_order')->orderByDesc('id');

        if ($activeCategory !== 'all') {
            $query->where('category', $activeCategory);
        }

        $projects = $query->paginate(12)->withQueryString();

        $allProjects = PortfolioItem::where('is_active', true)->get();

        $categories = [
            'all' => $allProjects->count(),
            'Computer Vision' => $allProjects->where('category', 'Computer Vision')->count(),
            'NLP & LLM' => $allProjects->where('category', 'NLP & LLM')->count(),
            'Audio & Speech' => $allProjects->where('category', 'Audio & Speech')->count(),
            'Data Collection' => $allProjects->where('category', 'Data Collection')->count(),
        ];

        $featuredProjects = $allProjects->where('is_featured', true)->take(3);

        return view('portfolio.index', compact('projects', 'categories', 'activeCategory', 'featuredProjects'));
    }

    public function show(string $slug): View
    {
        $project = PortfolioItem::where('slug', $slug)->where('is_active', true)->firstOrFail();

        $relatedProjects = PortfolioItem::where('id', '!=', $project->id)
            ->where('is_active', true)
            ->where('category', $project->category)
            ->take(3)
            ->get();

        if ($relatedProjects->isEmpty()) {
            $relatedProjects = PortfolioItem::where('id', '!=', $project->id)
                ->where('is_active', true)
                ->take(3)
                ->get();
        }

        return view('portfolio.show', compact('project', 'relatedProjects'));
    }
}
