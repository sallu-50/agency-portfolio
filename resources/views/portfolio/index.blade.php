@extends('layouts.app')

@section('title', 'Portfolio & Case Studies - Marveit AI')
@section('meta_description', 'Explore Marveit AI portfolio of enterprise dataset annotation case studies: Computer Vision, LiDAR 3D, LLM alignment, and speech transcription.')

@section('content')
    <div class="pt-20 md:pt-24">
        <!-- Category Filter Tabs (Project Line) -->
        <section class="sticky top-20 z-30 bg-white/95 backdrop-blur-md border-b border-gray-100 py-3.5 shadow-xs">
            <div class="container mx-auto px-6">
                <div class="flex items-center justify-start md:justify-center gap-2 overflow-x-auto pb-1 md:pb-0 scrollbar-none">
                    <a href="{{ route('portfolio', ['category' => 'all']) }}"
                        class="px-4 py-2 rounded-full text-xs md:text-sm font-semibold border transition-all flex items-center gap-1.5 flex-shrink-0 {{ $activeCategory === 'all' ? 'bg-blue-600 text-white border-blue-600 shadow-md shadow-blue-500/20' : 'border-gray-200 text-gray-600 hover:border-blue-600 hover:text-blue-600 bg-white' }}">
                        <span>All Projects</span>
                        <span class="text-[11px] px-1.5 py-0.5 rounded-full {{ $activeCategory === 'all' ? 'bg-white/20 text-white' : 'bg-gray-100 text-gray-500' }}">
                            {{ $categories['all'] ?? 0 }}
                        </span>
                    </a>

                    @foreach (['Computer Vision', 'NLP & LLM', 'Audio & Speech', 'Data Collection'] as $cat)
                        @if (isset($categories[$cat]))
                            <a href="{{ route('portfolio', ['category' => $cat]) }}"
                                class="px-4 py-2 rounded-full text-xs md:text-sm font-semibold border transition-all flex items-center gap-1.5 flex-shrink-0 {{ $activeCategory === $cat ? 'bg-blue-600 text-white border-blue-600 shadow-md shadow-blue-500/20' : 'border-gray-200 text-gray-600 hover:border-blue-600 hover:text-blue-600 bg-white' }}">
                                <span>{{ $cat }}</span>
                                <span class="text-[11px] px-1.5 py-0.5 rounded-full {{ $activeCategory === $cat ? 'bg-white/20 text-white' : 'bg-gray-100 text-gray-500' }}">
                                    {{ $categories[$cat] }}
                                </span>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        @if (isset($comparisons) && $comparisons->isNotEmpty())
            <!-- Dedicated Before & After Image Comparison Section -->
            <section id="comparisons-showcase" class="py-8 md:py-12 bg-gray-950 text-white border-b border-gray-800 relative overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-blue-900/15 via-transparent to-transparent pointer-events-none"></div>

                <div class="container mx-auto px-6 relative z-10">
                    <!-- Comparison Items Container -->
                    <div class="max-w-4xl mx-auto">
                        @if ($comparisons->count() > 1)
                            <!-- Smart Switcher Pills -->
                            <div class="mb-4 flex items-center justify-between gap-3 flex-wrap">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                                    <span class="text-xs font-bold uppercase tracking-wider text-gray-400">Interactive Comparisons:</span>
                                </div>
                                <div class="flex items-center gap-1.5 overflow-x-auto pb-1 scrollbar-none">
                                    @foreach ($comparisons as $index => $item)
                                        <button type="button"
                                                class="comparison-tab-btn px-3.5 py-1.5 rounded-xl text-xs font-bold transition-all border cursor-pointer {{ $index === 0 ? 'bg-blue-600 text-white border-blue-500 shadow-sm shadow-blue-500/30' : 'bg-gray-900/90 text-gray-400 border-gray-800 hover:text-white hover:border-gray-700' }}"
                                                data-target="comparison-item-{{ $item->id }}">
                                            {{ $item->title }}
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        @foreach ($comparisons as $index => $item)
                            <div class="comparison-display-item {{ $index === 0 ? 'block' : 'hidden' }}"
                                 id="comparison-item-{{ $item->id }}">
                                <div class="bg-gray-900/95 rounded-3xl p-4 md:p-6 border border-gray-800/80 shadow-2xl backdrop-blur-xl ring-1 ring-white/10">
                                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-4 px-1">
                                        <div class="flex items-center gap-2.5">
                                            <span class="inline-block px-2.5 py-0.5 rounded-full text-[10px] font-extrabold uppercase tracking-wider bg-blue-500/20 text-blue-300 border border-blue-400/30">
                                                {{ $item->category ?: 'Showcase' }}
                                            </span>
                                            <h3 class="text-base md:text-lg font-bold text-white">
                                                {{ $item->title }}
                                            </h3>
                                        </div>
                                        <div class="text-[11px] text-gray-400 bg-white/5 px-3 py-1 rounded-full border border-white/10 flex items-center gap-1.5 self-start sm:self-auto flex-shrink-0">
                                            <i data-feather="move" class="w-3 h-3 text-blue-400"></i>
                                            <span>Drag slider to compare</span>
                                        </div>
                                    </div>

                                    @include('partials.before-after-slider', [
                                        'id' => 'slider-comparison-' . $item->id,
                                        'beforeImage' => $item->before_image_url,
                                        'afterImage' => $item->after_image_url,
                                        'beforeLabel' => $item->before_label ?: 'Before',
                                        'afterLabel' => $item->after_label ?: 'After',
                                        'alt' => $item->title,
                                    ])
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        {{-- 
        <!-- Projects Grid Section (Temporarily commented out) -->
        <section class="py-16 md:py-24 bg-gray-50/50">
            <div class="container mx-auto px-6">
                <div class="max-w-2xl mb-12">
                    <span class="text-xs font-bold text-blue-600 uppercase tracking-wider block mb-2">Our Portfolio Case Studies</span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 tracking-tight">Verified Production Datasets</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($projects as $project)
                        @php
                            $catBadge = match ($project->category) {
                                'Computer Vision' => 'bg-green-50 text-green-700 border-green-200',
                                'NLP & LLM' => 'bg-purple-50 text-purple-700 border-purple-200',
                                'Audio & Speech' => 'bg-yellow-50 text-yellow-700 border-yellow-200',
                                'Data Collection' => 'bg-blue-50 text-blue-700 border-blue-200',
                                default => 'bg-indigo-50 text-indigo-700 border-indigo-200',
                            };
                        @endphp
                        <div class="bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 overflow-hidden flex flex-col group">
                            <!-- Image Container -->
                            <div class="relative aspect-video overflow-hidden bg-gray-900">
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-80"></div>

                                <!-- Category Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="inline-block px-3 py-1 rounded-full text-[11px] font-bold border backdrop-blur-md bg-white/90 text-gray-800 shadow-xs">
                                        {{ $project->category }}
                                    </span>
                                </div>

                                @if ($project->is_featured)
                                    <div class="absolute top-4 right-4">
                                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider bg-blue-600 text-white shadow-sm">
                                            <i data-feather="star" class="w-3 h-3 fill-current"></i> Featured
                                        </span>
                                    </div>
                                @endif

                                @if ($project->has_before_after)
                                    <div class="absolute top-4 {{ $project->is_featured ? 'right-28' : 'right-4' }}">
                                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider bg-indigo-600/90 text-white shadow-sm border border-indigo-400/30 backdrop-blur-md">
                                            <i data-feather="sliders" class="w-3 h-3"></i> Slider
                                        </span>
                                    </div>
                                @endif

                                @if ($project->metrics)
                                    <div class="absolute bottom-3 left-4 right-4">
                                        <p class="text-xs font-semibold text-blue-200 bg-black/40 backdrop-blur-md px-3 py-1.5 rounded-xl border border-white/10 truncate">
                                            {{ $project->metrics }}
                                        </p>
                                    </div>
                                @endif
                            </div>

                            <!-- Card Body -->
                            <div class="p-6 md:p-8 flex flex-col flex-grow justify-between">
                                <div>
                                    @if ($project->client_name)
                                        <div class="flex items-center gap-1.5 text-xs text-gray-400 font-medium mb-2">
                                            <i data-feather="briefcase" class="w-3.5 h-3.5"></i>
                                            <span>{{ $project->client_name }}</span>
                                        </div>
                                    @endif

                                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors leading-snug">
                                        <a href="{{ route('portfolio.show', $project->slug) }}">
                                            {{ $project->title }}
                                        </a>
                                    </h3>

                                    <p class="text-xs md:text-sm text-gray-600 leading-relaxed mb-6">
                                        {{ $project->short_description ?: Str::limit($project->description, 130) }}
                                    </p>

                                    @if (!empty($project->tags))
                                        <div class="flex flex-wrap gap-1.5 mb-6">
                                            @foreach (array_slice($project->tags, 0, 4) as $tag)
                                                <span class="px-2.5 py-1 rounded-lg bg-gray-50 border border-gray-100 text-[11px] font-medium text-gray-600">
                                                    #{{ $tag }}
                                                </span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>

                                <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                                    <a href="{{ route('portfolio.show', $project->slug) }}"
                                        class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-600 hover:text-blue-700 transition">
                                        <span>Read Case Study</span>
                                        <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                                    </a>

                                    <a href="{{ route('contact', ['service' => $project->category]) }}"
                                        class="text-xs bg-gray-50 hover:bg-blue-50 text-gray-700 hover:text-blue-600 font-semibold px-3 py-1.5 rounded-lg border border-gray-200 hover:border-blue-200 transition">
                                        Request Similar
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-20 bg-white rounded-3xl border border-gray-100 p-8">
                            <i data-feather="inbox" class="w-12 h-12 text-gray-300 mx-auto mb-3"></i>
                            <h4 class="text-lg font-bold text-gray-700 mb-1">No Projects Found</h4>
                            <p class="text-xs text-gray-500 mb-4">No portfolio items found for this category at the moment.</p>
                            <a href="{{ route('portfolio', ['category' => 'all']) }}" class="text-xs font-bold text-blue-600 hover:underline">
                                View all projects
                            </a>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if ($projects->hasPages())
                    <div class="mt-12 flex justify-center">
                        {{ $projects->links() }}
                    </div>
                @endif
            </div>
        </section>
        --}}

        <!-- CTA Section -->
        <section class="py-20 bg-white border-t border-gray-100">
            <div class="container mx-auto px-6 text-center max-w-3xl">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 mb-4">
                    <i data-feather="check-circle" class="w-3.5 h-3.5"></i> 99.8% Precision SLA Guaranteed
                </span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight mb-4">
                    Ready to Scale Your Dataset Annotation?
                </h2>
                <p class="text-base text-gray-600 mb-8 leading-relaxed">
                    Discuss your volume, guidelines, and deadlines with our technical architects for a fast 24-hour turnaround pilot.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3.5 px-8 rounded-full shadow-md hover:shadow-lg transition">
                        Speak to an Expert
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/before-after-slider.js') }}"></script>
@endpush
