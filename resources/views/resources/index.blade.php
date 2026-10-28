@extends('layouts.app')

@section('title', 'Resources, Articles & AI Insights - Marveit AI')
@section('meta_description', 'Discover technical articles, data annotation benchmarks, computer vision methodologies, and RLHF alignment guides curated by Marveit AI engineers.')

@section('content')
    <div class="bg-gray-50/60 pt-28 md:pt-36 pb-20">
        <!-- Hero Header -->
        <section class="container mx-auto px-6 mb-12">
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 text-blue-600 border border-blue-100 text-xs font-semibold mb-4">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                    <span>Knowledge Hub & Engineering Insights</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-4">
                    Resources & <span class="text-blue-600">Articles</span>
                </h1>
                <p class="text-base sm:text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto">
                    In-depth technical guides, dataset curation standards, and enterprise AI benchmarks from our data annotation specialists.
                </p>

                <!-- Search Input Form -->
                <form action="{{ route('resources.index') }}" method="GET" class="mt-8 max-w-xl mx-auto">
                    @if ($activeCategory !== 'all')
                        <input type="hidden" name="category" value="{{ $activeCategory }}">
                    @endif
                    <div class="relative flex items-center">
                        <i data-feather="search" class="w-5 h-5 text-gray-400 absolute left-4 pointer-events-none"></i>
                        <input type="text" name="q" value="{{ $search }}"
                            placeholder="Search articles by topic, keyword, or technology..."
                            class="w-full pl-12 pr-28 py-3.5 bg-white rounded-2xl border border-gray-200 text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm">
                        <button type="submit"
                            class="absolute right-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-4 py-2 rounded-xl transition shadow-sm">
                            Search
                        </button>
                    </div>
                    @if ($search !== '')
                        <div class="mt-3 text-xs text-gray-500 text-left flex items-center justify-between px-2">
                            <span>Showing results for "<strong>{{ $search }}</strong>"</span>
                            <a href="{{ route('resources.index', ['category' => $activeCategory]) }}" class="text-blue-600 hover:underline">Clear search</a>
                        </div>
                    @endif
                </form>
            </div>
        </section>

        <!-- Category Filter Pills -->
        <section class="container mx-auto px-6 mb-12">
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3">
                <a href="{{ route('resources.index', array_filter(['q' => $search])) }}"
                    class="px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all duration-200 {{ $activeCategory === 'all' ? 'bg-blue-600 text-white shadow-md' : 'bg-white text-gray-600 hover:text-blue-600 hover:bg-blue-50/50 border border-gray-200' }}">
                    All Articles ({{ $categories['all'] ?? 0 }})
                </a>
                @foreach ($categories as $catName => $count)
                    @if ($catName !== 'all')
                        <a href="{{ route('resources.index', array_filter(['category' => $catName, 'q' => $search])) }}"
                            class="px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all duration-200 {{ $activeCategory === $catName ? 'bg-blue-600 text-white shadow-md' : 'bg-white text-gray-600 hover:text-blue-600 hover:bg-blue-50/50 border border-gray-200' }}">
                            {{ $catName }} ({{ $count }})
                        </a>
                    @endif
                @endforeach
            </div>
        </section>

        <!-- Featured Hero Article (Shown on first page when not filtering by search) -->
        @if ($activeCategory === 'all' && empty($search) && $featuredArticle && $articles->currentPage() === 1)
            <section class="container mx-auto px-6 mb-16 max-w-6xl">
                <div class="bg-white rounded-3xl border border-gray-100 shadow-xl overflow-hidden hover:shadow-2xl transition duration-300">
                    <div class="grid grid-cols-1 lg:grid-cols-12">
                        <div class="lg:col-span-7 relative aspect-video lg:aspect-auto overflow-hidden bg-gray-900 min-h-[300px]">
                            <img src="{{ $featuredArticle->image_url }}" alt="{{ $featuredArticle->title }}"
                                class="w-full h-full object-cover transform hover:scale-105 transition duration-500">
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider bg-blue-600 text-white shadow-md">
                                    ★ Featured Insight
                                </span>
                            </div>
                        </div>
                        <div class="lg:col-span-5 p-6 sm:p-8 md:p-10 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                                    <span class="px-2.5 py-1 rounded-md bg-blue-50 text-blue-700 font-bold">
                                        {{ $featuredArticle->category ?? 'AI Research' }}
                                    </span>
                                    <span>•</span>
                                    <span>{{ $featuredArticle->read_time }}</span>
                                </div>
                                <h2 class="text-xl sm:text-2xl font-extrabold text-gray-900 leading-snug mb-3 hover:text-blue-600 transition">
                                    <a href="{{ route('resources.show', $featuredArticle->slug) }}">
                                        {{ $featuredArticle->title }}
                                    </a>
                                </h2>
                                <p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-6">
                                    {{ $featuredArticle->excerpt }}
                                </p>
                            </div>

                            <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xs">
                                        {{ substr($featuredArticle->author_name ?? 'M', 0, 1) }}
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-gray-900">{{ $featuredArticle->author_name }}</div>
                                        <div class="text-[11px] text-gray-400">{{ $featuredArticle->formatted_date }}</div>
                                    </div>
                                </div>
                                <a href="{{ route('resources.show', $featuredArticle->slug) }}"
                                    class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-600 hover:text-blue-700 transition">
                                    <span>Read Article</span>
                                    <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Articles Grid Section -->
        <section class="container mx-auto px-6 max-w-6xl">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-xl sm:text-2xl font-bold text-gray-900">
                    @if ($activeCategory !== 'all')
                        {{ $activeCategory }} Articles
                    @else
                        Latest Publications
                    @endif
                </h3>
                <span class="text-xs text-gray-500 font-medium">{{ $articles->total() }} total articles</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($articles as $article)
                    @php
                        $badgeStyle = match ($article->category) {
                            'Computer Vision' => 'bg-green-50 text-green-700 border-green-200',
                            'NLP & LLMs' => 'bg-purple-50 text-purple-700 border-purple-200',
                            'Annotation Standards' => 'bg-yellow-50 text-yellow-700 border-yellow-200',
                            'AI Research' => 'bg-blue-50 text-blue-700 border-blue-200',
                            default => 'bg-gray-50 text-gray-700 border-gray-200',
                        };
                    @endphp
                    <article class="bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1 overflow-hidden flex flex-col group">
                        <!-- Card Media -->
                        <div class="relative aspect-video overflow-hidden bg-gray-950">
                            <img src="{{ $article->image_url }}" alt="{{ $article->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-60"></div>
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 rounded-full text-[11px] font-bold border backdrop-blur-md bg-white/95 text-gray-800 shadow-xs">
                                    {{ $article->category ?? 'AI' }}
                                </span>
                            </div>
                            <div class="absolute bottom-3 right-4">
                                <span class="text-[11px] font-semibold text-white/90 bg-black/50 backdrop-blur-md px-2.5 py-1 rounded-lg">
                                    {{ $article->read_time }}
                                </span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 sm:p-7 flex flex-col flex-grow justify-between">
                            <div>
                                <div class="text-[11px] text-gray-400 font-medium mb-2">
                                    {{ $article->formatted_date }}
                                </div>
                                <h4 class="text-base sm:text-lg font-bold text-gray-900 mb-2.5 leading-snug group-hover:text-blue-600 transition-colors">
                                    <a href="{{ route('resources.show', $article->slug) }}">
                                        {{ $article->title }}
                                    </a>
                                </h4>
                                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed mb-4 line-clamp-3">
                                    {{ $article->excerpt }}
                                </p>
                            </div>

                            <div class="pt-4 border-t border-gray-100 flex items-center justify-between mt-auto">
                                <div class="flex items-center gap-2">
                                    <div class="w-7 h-7 rounded-full bg-blue-100 text-blue-600 font-bold text-[11px] flex items-center justify-center">
                                        {{ substr($article->author_name ?? 'M', 0, 1) }}
                                    </div>
                                    <span class="text-xs font-semibold text-gray-700 truncate max-w-[130px]">{{ $article->author_name }}</span>
                                </div>
                                <a href="{{ route('resources.show', $article->slug) }}"
                                    class="inline-flex items-center gap-1 text-xs font-bold text-blue-600 hover:text-blue-700 group/link">
                                    <span>Read</span>
                                    <i data-feather="arrow-right" class="w-3.5 h-3.5 group-hover/link:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full py-16 text-center bg-white rounded-3xl border border-gray-100 p-8">
                        <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-feather="book-open" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">No articles found</h4>
                        <p class="text-sm text-gray-500 mb-6">No published articles match your current category or search criteria.</p>
                        <a href="{{ route('resources.index') }}"
                            class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl transition shadow">
                            <span>Browse All Articles</span>
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if ($articles->hasPages())
                <div class="mt-12 flex justify-center">
                    {{ $articles->links() }}
                </div>
            @endif
        </section>

        <!-- CTA Callout Banner -->
        <section class="container mx-auto px-6 max-w-6xl mt-20">
            <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-indigo-900 rounded-3xl p-8 sm:p-12 text-white relative overflow-hidden shadow-2xl">
                <div class="relative z-10 max-w-2xl">
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-blue-500/20 text-blue-200 border border-blue-400/30 mb-4">
                        Tailored Machine Learning Pipelines
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-extrabold mb-3 leading-tight">
                        Need Custom Datasets Engineered to Your Precise Spec?
                    </h3>
                    <p class="text-blue-100 text-sm sm:text-base leading-relaxed mb-6">
                        Accelerate model convergence with pixel-accurate 2D/3D annotation, rigorous QA SLAs, and guaranteed security compliance.
                    </p>
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="{{ route('free-trial') }}"
                            class="bg-white text-blue-700 hover:bg-blue-50 font-bold px-6 py-3 rounded-xl transition shadow-lg text-sm inline-flex items-center gap-2">
                            <span>Start Free Pilot</span>
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="{{ route('contact') }}"
                            class="bg-blue-700/60 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-xl transition border border-blue-400/30 text-sm">
                            Speak to an AI Specialist
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
