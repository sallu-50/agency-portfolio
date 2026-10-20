<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(Request $request): View
    {
        $query = PortfolioItem::query()->orderBy('sort_order')->orderByDesc('id');

        if ($request->filled('search')) {
            $search = $request->query('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('client_name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($request->filled('category') && $request->query('category') !== 'all') {
            $query->where('category', $request->query('category'));
        }

        $items = $query->paginate(15)->withQueryString();

        $categories = ['Computer Vision', 'NLP & LLM', 'Audio & Speech', 'Data Collection', 'LiDAR & 3D'];

        return view('admin.portfolio.index', compact('items', 'categories'));
    }

    public function create(): View
    {
        $categories = ['Computer Vision', 'NLP & LLM', 'Audio & Speech', 'Data Collection', 'LiDAR & 3D'];

        return view('admin.portfolio.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:portfolio_items,slug',
            'category' => 'required|string|max:100',
            'client_name' => 'nullable|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:10240',
            'image_url' => 'nullable|string|max:500',
            'before_image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:10240',
            'after_image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:10240',
            'before_label' => 'nullable|string|max:50',
            'after_label' => 'nullable|string|max:50',
            'short_description' => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'metrics' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'case_study_url' => 'nullable|string|max:500',
            'sort_order' => 'nullable|integer',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
        ]);

        $slug = ! empty($validated['slug'])
            ? Str::slug($validated['slug'])
            : Str::slug($validated['title']);

        // Ensure unique slug
        $originalSlug = $slug;
        $counter = 1;
        while (PortfolioItem::where('slug', $slug)->exists()) {
            $slug = $originalSlug.'-'.$counter;
            $counter++;
        }

        $imagePath = null;
        if ($request->hasFile('image_file')) {
            $imagePath = $request->file('image_file')->store('portfolio', 'public');
        } elseif (! empty($validated['image_url'])) {
            $imagePath = $validated['image_url'];
        } else {
            $imagePath = 'image/team-2.jpg';
        }

        $beforeImagePath = null;
        if ($request->hasFile('before_image_file')) {
            $beforeImagePath = $request->file('before_image_file')->store('portfolio/before-after', 'public');
        }

        $afterImagePath = null;
        if ($request->hasFile('after_image_file')) {
            $afterImagePath = $request->file('after_image_file')->store('portfolio/before-after', 'public');
        }

        $tagsArray = [];
        if (! empty($validated['tags'])) {
            $tagsArray = array_values(array_filter(array_map('trim', explode(',', $validated['tags']))));
        }

        PortfolioItem::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'client_name' => $validated['client_name'] ?? null,
            'image' => $imagePath,
            'before_image' => $beforeImagePath,
            'after_image' => $afterImagePath,
            'before_label' => $validated['before_label'] ?: 'Before',
            'after_label' => $validated['after_label'] ?: 'After',
            'short_description' => $validated['short_description'] ?? null,
            'description' => $validated['description'] ?? null,
            'metrics' => $validated['metrics'] ?? null,
            'tags' => $tagsArray,
            'case_study_url' => $validated['case_study_url'] ?? null,
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
            'is_featured' => $request->boolean('is_featured'),
            'is_active' => $request->has('is_active') ? $request->boolean('is_active') : true,
        ]);

        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Project created successfully and published!');
    }

    public function edit(PortfolioItem $portfolio): View
    {
        $categories = ['Computer Vision', 'NLP & LLM', 'Audio & Speech', 'Data Collection', 'LiDAR & 3D'];

        return view('admin.portfolio.edit', ['item' => $portfolio, 'categories' => $categories]);
    }

    public function update(Request $request, PortfolioItem $portfolio): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:portfolio_items,slug,'.$portfolio->id,
            'category' => 'required|string|max:100',
            'client_name' => 'nullable|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:10240',
            'image_url' => 'nullable|string|max:500',
            'before_image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:10240',
            'after_image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:10240',
            'before_label' => 'nullable|string|max:50',
            'after_label' => 'nullable|string|max:50',
            'short_description' => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'metrics' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'case_study_url' => 'nullable|string|max:500',
            'sort_order' => 'nullable|integer',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
        ]);

        $slug = ! empty($validated['slug'])
            ? Str::slug($validated['slug'])
            : $portfolio->slug;

        $imagePath = $portfolio->image;
        if ($request->hasFile('image_file')) {
            // Delete old file if stored in public storage
            if ($portfolio->image && Storage::disk('public')->exists($portfolio->image)) {
                Storage::disk('public')->delete($portfolio->image);
            }
            $imagePath = $request->file('image_file')->store('portfolio', 'public');
        } elseif (! empty($validated['image_url'])) {
            $imagePath = $validated['image_url'];
        }

        $beforeImagePath = $portfolio->before_image;
        if ($request->hasFile('before_image_file')) {
            if ($portfolio->before_image && Storage::disk('public')->exists($portfolio->before_image)) {
                Storage::disk('public')->delete($portfolio->before_image);
            }
            $beforeImagePath = $request->file('before_image_file')->store('portfolio/before-after', 'public');
        }

        $afterImagePath = $portfolio->after_image;
        if ($request->hasFile('after_image_file')) {
            if ($portfolio->after_image && Storage::disk('public')->exists($portfolio->after_image)) {
                Storage::disk('public')->delete($portfolio->after_image);
            }
            $afterImagePath = $request->file('after_image_file')->store('portfolio/before-after', 'public');
        }

        $tagsArray = $portfolio->tags ?? [];
        if (isset($validated['tags'])) {
            $tagsArray = array_values(array_filter(array_map('trim', explode(',', $validated['tags']))));
        }

        $portfolio->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'client_name' => $validated['client_name'] ?? null,
            'image' => $imagePath,
            'before_image' => $beforeImagePath,
            'after_image' => $afterImagePath,
            'before_label' => $validated['before_label'] ?: ($portfolio->before_label ?: 'Before'),
            'after_label' => $validated['after_label'] ?: ($portfolio->after_label ?: 'After'),
            'short_description' => $validated['short_description'] ?? null,
            'description' => $validated['description'] ?? null,
            'metrics' => $validated['metrics'] ?? null,
            'tags' => $tagsArray,
            'case_study_url' => $validated['case_study_url'] ?? null,
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
            'is_featured' => $request->boolean('is_featured'),
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Project updated successfully!');
    }

    public function destroy(PortfolioItem $portfolio): RedirectResponse
    {
        if ($portfolio->image && Storage::disk('public')->exists($portfolio->image)) {
            Storage::disk('public')->delete($portfolio->image);
        }

        if ($portfolio->before_image && Storage::disk('public')->exists($portfolio->before_image)) {
            Storage::disk('public')->delete($portfolio->before_image);
        }

        if ($portfolio->after_image && Storage::disk('public')->exists($portfolio->after_image)) {
            Storage::disk('public')->delete($portfolio->after_image);
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Project deleted successfully.');
    }
}
