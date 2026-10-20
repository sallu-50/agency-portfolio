@extends('layouts.app')

@section('title', $project->title . ' - Marveit AI Case Study')
@section('meta_description', $project->short_description ?: Str::limit($project->description, 150))

@section('content')
    <div class="pt-24 md:pt-28">
        <!-- Breadcrumb & Header -->
        <section class="py-12 md:py-16 bg-gradient-to-b from-gray-50 via-white to-white border-b border-gray-100">
            <div class="container mx-auto px-6">
                <!-- Breadcrumb -->
                <nav class="flex items-center gap-2 text-xs text-gray-500 mb-6" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Home</a>
                    <i data-feather="chevron-right" class="w-3.5 h-3.5"></i>
                    <a href="{{ route('portfolio') }}" class="hover:text-blue-600 transition">Portfolio</a>
                    <i data-feather="chevron-right" class="w-3.5 h-3.5"></i>
                    <span class="text-gray-900 font-semibold truncate max-w-xs">{{ $project->title }}</span>
                </nav>

                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                    <div>
                        <div class="flex flex-wrap items-center gap-3 mb-3">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-blue-700 border border-blue-200">
                                {{ $project->category }}
                            </span>
                            @if ($project->client_name)
                                <span class="text-xs text-gray-500 font-medium">Client: {{ $project->client_name }}</span>
                            @endif
                            @if ($project->is_featured)
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-extrabold uppercase tracking-wider bg-blue-600 text-white">
                                    <i data-feather="star" class="w-3 h-3 fill-current"></i> Featured Case Study
                                </span>
                            @endif
                        </div>
                        <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight max-w-4xl">
                            {{ $project->title }}
                        </h1>
                    </div>

                    <div>
                        <a href="{{ route('contact', ['service' => $project->category]) }}"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 px-6 rounded-2xl shadow-md hover:shadow-lg transition inline-flex items-center gap-2 text-sm">
                            <span>Request Similar Dataset</span>
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Media & Details -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    <!-- Left: Content Body -->
                    <div class="lg:col-span-8 space-y-10">
                        <!-- Project Visual Banner (Before/After Slider or Static Image) -->
                        @if ($project->has_before_after)
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold text-blue-700 bg-blue-50 border border-blue-200">
                                        <i data-feather="sliders" class="w-3.5 h-3.5 text-blue-600"></i> Interactive Data Comparison
                                    </span>
                                    <span class="text-xs text-gray-500 hidden sm:inline">Drag the center slider left/right</span>
                                </div>

                                @include('partials.before-after-slider', [
                                    'beforeImage' => $project->before_image_url,
                                    'afterImage' => $project->after_image_url,
                                    'beforeLabel' => $project->before_label ?: 'Raw Frame',
                                    'afterLabel' => $project->after_label ?: 'Annotated',
                                    'alt' => $project->title . ' - Comparison',
                                ])

                                @if ($project->metrics)
                                    <div class="p-4 rounded-2xl bg-gray-900 text-white flex items-center justify-between border border-gray-800 shadow-md">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-xl bg-blue-600/30 text-blue-400 flex items-center justify-center flex-shrink-0">
                                                <i data-feather="check-circle" class="w-5 h-5"></i>
                                            </div>
                                            <div>
                                                <div class="text-[11px] uppercase tracking-wider text-blue-300 font-bold">Benchmark Results</div>
                                                <div class="text-sm font-bold text-white">{{ $project->metrics }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @else
                            <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-video bg-gray-950 border border-gray-100 group">
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover">
                                
                                @if ($project->metrics)
                                    <div class="absolute bottom-6 left-6 right-6">
                                        <div class="p-4 rounded-2xl bg-black/70 backdrop-blur-md border border-white/15 text-white flex items-center justify-between">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 rounded-xl bg-blue-600/40 text-blue-300 flex items-center justify-center flex-shrink-0">
                                                    <i data-feather="check-circle" class="w-5 h-5"></i>
                                                </div>
                                                <div>
                                                    <div class="text-[11px] uppercase tracking-wider text-blue-200 font-bold">Benchmark Results</div>
                                                    <div class="text-sm font-bold">{{ $project->metrics }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif

                        <!-- Project Case Study Details -->
                        <div class="p-8 rounded-3xl bg-gray-50/70 border border-gray-100">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Project Overview & Background</h2>
                            <p class="text-base text-gray-700 leading-relaxed mb-6">
                                {{ $project->description ?: $project->short_description }}
                            </p>

                            @if ($project->short_description && $project->description && $project->short_description !== $project->description)
                                <div class="p-4 rounded-2xl bg-white border border-gray-100 text-sm text-gray-600 italic">
                                    "{{ $project->short_description }}"
                                </div>
                            @endif
                        </div>

                        <!-- Technical Modality Tags -->
                        @if (!empty($project->tags))
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-4">Keywords & Annotation Formats</h3>
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($project->tags as $tag)
                                        <span class="px-3.5 py-1.5 rounded-xl bg-gray-100 text-xs font-semibold text-gray-700 border border-gray-200">
                                            #{{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Quality Assurance Assurance -->
                        <div class="p-8 rounded-3xl bg-blue-900 text-white">
                            <h3 class="text-xl font-bold mb-3 flex items-center gap-2">
                                <i data-feather="shield" class="w-5 h-5 text-blue-300"></i>
                                SLA Standards & Security
                            </h3>
                            <p class="text-xs md:text-sm text-blue-100/90 leading-relaxed">
                                Executed under strict bilateral non-disclosure agreements, HIPAA/GDPR data masking pipelines, and automated validator checks.
                            </p>
                        </div>

                        <!-- Navigation Back Link -->
                        <div class="pt-4">
                            <a href="{{ route('portfolio') }}"
                                class="inline-flex items-center gap-2 text-sm font-semibold text-gray-600 hover:text-blue-600 transition">
                                <i data-feather="arrow-left" class="w-4 h-4"></i>
                                <span>Back to All Portfolio Projects</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Sidebar -->
                    <div class="lg:col-span-4 space-y-8">
                        <!-- Direct Inquiry Card -->
                        <div class="p-8 rounded-3xl bg-gradient-to-br from-gray-900 to-blue-950 text-white shadow-xl">
                            <span class="inline-block px-3 py-1 rounded-full text-[11px] font-bold bg-blue-500/30 text-blue-200 border border-blue-400/30 mb-4">
                                Pilot Benchmark
                            </span>
                            <h3 class="text-xl font-bold mb-3">
                                Require Similar Labeling Specifications?
                            </h3>
                            <p class="text-xs text-blue-100/80 leading-relaxed mb-6">
                                Upload your guidelines or discuss volume requirements with our technical lead. Turnaround within 24 to 48 hours.
                            </p>

                            <a href="{{ route('contact', ['service' => $project->category]) }}"
                                class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-3.5 px-4 rounded-xl text-center text-xs transition inline-flex items-center justify-center gap-2 shadow-md">
                                <span>Get a Free Pilot Estimate</span>
                                <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>

                            <div class="mt-4 text-center">
                                <a href="https://wa.me/8801753499696?text={{ urlencode('Hello! I am inquiring about the case study: ' . $project->title) }}"
                                    target="_blank" rel="noopener noreferrer"
                                    class="text-xs text-emerald-300 hover:text-white transition inline-flex items-center gap-1.5 underline underline-offset-4">
                                    <i data-feather="message-circle" class="w-3.5 h-3.5"></i>
                                    <span>Discuss via WhatsApp</span>
                                </a>
                            </div>
                        </div>

                        <!-- Related Projects -->
                        @if ($relatedProjects->isNotEmpty())
                            <div class="p-6 rounded-3xl bg-gray-50 border border-gray-100">
                                <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4">Related Case Studies</h4>
                                <div class="space-y-4">
                                    @foreach ($relatedProjects as $related)
                                        <a href="{{ route('portfolio.show', $related->slug) }}"
                                            class="p-3.5 rounded-2xl bg-white border border-gray-100 hover:border-blue-200 hover:bg-blue-50/30 transition-all flex items-center gap-3 group">
                                            <div class="w-14 h-14 rounded-xl overflow-hidden bg-gray-900 flex-shrink-0">
                                                <img src="{{ $related->image_url }}" alt="{{ $related->title }}"
                                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                                            </div>
                                            <div class="flex-grow min-w-0">
                                                <span class="text-[10px] font-bold text-blue-600">{{ $related->category }}</span>
                                                <h5 class="text-xs font-bold text-gray-800 group-hover:text-blue-600 transition truncate">{{ $related->title }}</h5>
                                                <p class="text-[11px] text-gray-400 truncate">{{ $related->metrics ?: $related->client_name }}</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/before-after-slider.js') }}"></script>
@endpush
