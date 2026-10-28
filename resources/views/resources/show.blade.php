@extends('layouts.app')

@section('title', $article->title . ' - Marveit AI Resources')
@section('meta_description', $article->excerpt ?? Str::limit(strip_tags($article->content), 150))

@section('content')
    <div class="bg-gray-50/50 pt-24 md:pt-28 pb-24" style="padding-top: 7rem;">
        <!-- Article Header & Breadcrumbs -->
        <article class="container mx-auto px-6 max-w-4xl">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-gray-500 mb-8" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Home</a>
                <i data-feather="chevron-right" class="w-3.5 h-3.5"></i>
                <a href="{{ route('resources.index') }}" class="hover:text-blue-600 transition">Resources</a>
                <i data-feather="chevron-right" class="w-3.5 h-3.5"></i>
                <span class="text-gray-800 font-semibold truncate max-w-xs">{{ $article->title }}</span>
            </nav>

            <!-- Meta & Title -->
            <div class="mb-8">
                <div class="flex flex-wrap items-center gap-3 mb-4">
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-blue-700 border border-blue-100">
                        {{ $article->category ?? 'AI Insights' }}
                    </span>
                    <span class="text-xs text-gray-400">•</span>
                    <span class="text-xs text-gray-500 flex items-center gap-1">
                        <i data-feather="clock" class="w-3.5 h-3.5"></i>
                        {{ $article->read_time }}
                    </span>
                    <span class="text-xs text-gray-400">•</span>
                    <span class="text-xs text-gray-500 flex items-center gap-1">
                        <i data-feather="calendar" class="w-3.5 h-3.5"></i>
                        {{ $article->formatted_date }}
                    </span>
                </div>

                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight mb-6">
                    {{ $article->title }}
                </h1>

                <!-- Author Row -->
                <div class="flex items-center justify-between py-4 border-y border-gray-100">
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-full bg-gradient-to-br from-blue-600 to-indigo-600 text-white flex items-center justify-center font-bold text-sm shadow-md">
                            {{ substr($article->author_name ?? 'M', 0, 1) }}
                        </div>
                        <div>
                            <div class="text-sm font-bold text-gray-900">{{ $article->author_name }}</div>
                            <div class="text-xs text-gray-500">{{ $article->author_role ?? 'AI Research Specialist' }}</div>
                        </div>
                    </div>

                    <a href="{{ route('resources.index') }}"
                        class="hidden sm:inline-flex items-center gap-1.5 text-xs font-semibold text-gray-500 hover:text-blue-600 bg-white border border-gray-200 px-3.5 py-1.5 rounded-xl shadow-xs transition">
                        <i data-feather="arrow-left" class="w-3.5 h-3.5"></i>
                        <span>All Articles</span>
                    </a>
                </div>
            </div>

            <!-- Featured Image -->
            @if ($article->image)
                <div class="mb-12 rounded-3xl overflow-hidden shadow-xl border border-gray-100 bg-gray-950 aspect-video max-h-[500px]">
                    <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                </div>
            @endif

            <!-- Excerpt Callout (if present) -->
            @if ($article->excerpt)
                <div class="p-6 sm:p-8 bg-blue-50/70 border-l-4 border-blue-600 rounded-2xl mb-10 text-gray-700 text-base sm:text-lg leading-relaxed font-medium">
                    {{ $article->excerpt }}
                </div>
            @endif

            <!-- Article Body Content -->
            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-gray-100 shadow-sm mb-12">
                <style>
                    .article-prose {
                        color: #374151;
                        font-size: 1.05rem;
                        line-height: 1.85;
                    }
                    .article-prose p {
                        margin-bottom: 1.5rem;
                    }
                    .article-prose h2 {
                        color: #111827;
                        font-size: 1.65rem;
                        font-weight: 800;
                        letter-spacing: -0.02em;
                        margin-top: 2.5rem;
                        margin-bottom: 1rem;
                        line-height: 1.3;
                    }
                    .article-prose h3 {
                        color: #1f2937;
                        font-size: 1.3rem;
                        font-weight: 700;
                        margin-top: 2rem;
                        margin-bottom: 0.75rem;
                        line-height: 1.35;
                    }
                    .article-prose ul, .article-prose ol {
                        margin-bottom: 1.5rem;
                        padding-left: 1.5rem;
                    }
                    .article-prose ul {
                        list-style-type: disc;
                    }
                    .article-prose ol {
                        list-style-type: decimal;
                    }
                    .article-prose li {
                        margin-bottom: 0.5rem;
                    }
                    .article-prose blockquote {
                        border-left: 4px solid #3b82f6;
                        padding: 1rem 1.5rem;
                        background-color: #f8fafc;
                        border-radius: 0 1rem 1rem 0;
                        font-style: italic;
                        color: #1e293b;
                        margin: 2rem 0;
                    }
                    .article-prose img {
                        border-radius: 1rem;
                        margin: 2rem 0;
                        box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
                    }
                    .article-prose a {
                        color: #2563eb;
                        text-decoration: underline;
                        font-weight: 600;
                    }
                    .article-prose code {
                        background: #f1f5f9;
                        padding: 0.2rem 0.4rem;
                        border-radius: 0.35rem;
                        font-size: 0.9em;
                        color: #0f172a;
                    }
                </style>
                <div class="article-prose">
                    {!! $article->content !!}
                </div>

                <!-- Tags -->
                @if ($article->tags)
                    @php
                        $tagsArray = is_array($article->tags) ? $article->tags : explode(',', (string) $article->tags);
                    @endphp
                    <div class="pt-8 mt-10 border-t border-gray-100 flex flex-wrap items-center gap-2">
                        <span class="text-xs font-bold text-gray-400 mr-2 uppercase tracking-wider">Related Topics:</span>
                        @foreach ($tagsArray as $tag)
                            @if (trim($tag) !== '')
                                <span class="px-3 py-1 rounded-lg bg-gray-50 border border-gray-200 text-xs text-gray-600 font-medium">
                                    #{{ trim($tag) }}
                                </span>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Author Bio Box -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-gray-100 shadow-sm mb-16 flex flex-col sm:flex-row items-center sm:items-start gap-5 text-center sm:text-left">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-blue-600 to-indigo-600 text-white flex items-center justify-center font-extrabold text-2xl shadow-lg shrink-0">
                    {{ substr($article->author_name ?? 'M', 0, 1) }}
                </div>
                <div>
                    <h3 class="text-base font-bold text-gray-900 mb-1">Written by {{ $article->author_name }}</h3>
                    <p class="text-xs text-blue-600 font-semibold mb-2">{{ $article->author_role ?? 'Marveit AI Annotation & Engineering Team' }}</p>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        Specializing in computer vision benchmarks, active learning loops, multi-modal sensor fusion, and verified human-in-the-loop workflows for deep learning production models.
                    </p>
                </div>
            </div>

            <!-- Related Articles -->
            @if ($relatedArticles->isNotEmpty())
                <div class="mb-16">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-xl sm:text-2xl font-bold text-gray-900">Related Articles</h3>
                        <a href="{{ route('resources.index') }}" class="text-xs font-bold text-blue-600 hover:underline">View All Resources →</a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach ($relatedArticles as $related)
                            <a href="{{ route('resources.show', $related->slug) }}"
                                class="bg-white rounded-2xl border border-gray-100 p-5 shadow-xs hover:shadow-lg transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                                <div>
                                    <span class="text-[10px] font-bold text-blue-600 uppercase tracking-wider mb-2 block">
                                        {{ $related->category ?? 'AI' }}
                                    </span>
                                    <h4 class="text-sm font-bold text-gray-900 group-hover:text-blue-600 transition line-clamp-2 mb-2 leading-snug">
                                        {{ $related->title }}
                                    </h4>
                                    <p class="text-xs text-gray-500 line-clamp-2 leading-relaxed mb-4">
                                        {{ $related->excerpt }}
                                    </p>
                                </div>
                                <div class="text-[11px] text-gray-400 font-medium pt-3 border-t border-gray-50 flex items-center justify-between">
                                    <span>{{ $related->read_time }}</span>
                                    <span class="text-blue-600 font-bold group-hover:translate-x-0.5 transition-transform">Read →</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Bottom CTA Box -->
            <div class="bg-gradient-to-r from-blue-900 to-indigo-900 rounded-3xl p-8 sm:p-10 text-white text-center shadow-xl">
                <h3 class="text-2xl font-extrabold mb-2">Ready to Power Your Models with Precision Data?</h3>
                <p class="text-blue-100 text-sm max-w-lg mx-auto mb-6">
                    Run a complimentary pilot with Marveit AI. Benchmark our accuracy, speed, and strict NDA compliance on your dataset.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('free-trial') }}"
                        class="bg-white text-blue-700 hover:bg-blue-50 font-bold text-xs sm:text-sm px-6 py-3 rounded-xl transition shadow">
                        Start Free Trial Pilot
                    </a>
                    <a href="{{ route('contact') }}"
                        class="bg-blue-800 hover:bg-blue-700 text-white font-semibold text-xs sm:text-sm px-6 py-3 rounded-xl transition border border-blue-400/30">
                        Contact Sales
                    </a>
                </div>
            </div>
        </article>
    </div>
@endsection
