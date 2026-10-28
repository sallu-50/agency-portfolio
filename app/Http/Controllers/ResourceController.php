<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ResourceController extends Controller
{
    public function index(Request $request): View
    {
        $activeCategory = $request->query('category', 'all');
        $search = trim((string) $request->query('q', ''));

        $query = Article::published()->orderBy('sort_order')->orderByDesc('id');

        if ($activeCategory !== 'all') {
            $query->where('category', $activeCategory);
        }

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('excerpt', 'like', "%{$search}%")
                    ->orWhere('tags', 'like', "%{$search}%")
                    ->orWhere('category', 'like', "%{$search}%");
            });
        }

        $allPublished = Article::published()->get();

        $featuredArticle = $allPublished->firstWhere('is_featured', true) ?? $allPublished->first();

        $categories = [
            'all' => $allPublished->count(),
            'AI Research' => $allPublished->where('category', 'AI Research')->count(),
            'Computer Vision' => $allPublished->where('category', 'Computer Vision')->count(),
            'NLP & LLMs' => $allPublished->where('category', 'NLP & LLMs')->count(),
            'Annotation Standards' => $allPublished->where('category', 'Annotation Standards')->count(),
        ];

        $articles = $query->paginate(9)->withQueryString();

        return view('resources.index', compact('articles', 'categories', 'activeCategory', 'featuredArticle', 'search'));
    }

    public function show(string $slug): View
    {
        $article = Article::published()->where('slug', $slug)->firstOrFail();

        $article->increment('views_count');

        $relatedArticles = Article::published()
            ->where('id', '!=', $article->id)
            ->where('category', $article->category)
            ->take(3)
            ->get();

        if ($relatedArticles->isEmpty()) {
            $relatedArticles = Article::published()
                ->where('id', '!=', $article->id)
                ->take(3)
                ->get();
        }

        return view('resources.show', compact('article', 'relatedArticles'));
    }
}
