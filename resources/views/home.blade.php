@extends('layouts.app')

@section('title', 'Data Annotation & AI Solutions - Marveit AI')
@section('meta_description', 'Power your machine learning models with pixel-perfect, human-in-the-loop datasets for Computer Vision, NLP, Audio, and Video.')

@section('content')
    <!-- Hero Section -->
    <section class="container mx-auto px-6 py-20 md:py-32 mt-8">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2 text-left">
                <!-- <div
                                                                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 text-blue-600 border border-blue-100 text-xs font-semibold mb-6">
                                                                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                                                                    <span>High-Quality Data Annotation</span>
                                                                </div> -->
                <h1 class="font-bold text-gray-900 leading-tight mb-6 tracking-tight"
                    style="font-size: 32px; line-height: 1.25;">
                    Data Annotation Services for<span class="text-blue-600"> Computer Vision and Machine Learning</span>
                </h1>



                <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-lg leading-relaxed">
                    Marveit AI delivers human-verified image, text, audio, video and LiDAR annotation for computer vision
                    and NLP teams. Every dataset passes multi-step quality checks and is handled under NDA.
                </p>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ route('free-trial') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3.5 px-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300 inline-flex items-center">
                        <span>Start Free Trial</span>
                        <i data-feather="arrow-right" class="ml-2 w-4 h-4"></i>
                    </a>
                    <!-- <a href="{{ route('services.index') }}"
                                                                            class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold py-3.5 px-6 rounded-lg transition duration-300 inline-flex items-center">
                                                                            <span>Explore Services</span>
                                                                        </a> -->
                </div>
            </div>

            <!-- Video / Visual Section -->
            <div class="w-full md:w-1/2">
                <div id="hero-video-wrapper"
                    class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white bg-gray-950 aspect-video group cursor-pointer hover:shadow-3xl transition duration-300">

                    @if ($heroVideo && $heroVideo->video_url)
                        <!-- Native HTML5 Video Element -->
                        <video id="hero-native-video" class="w-full h-full object-cover select-none"
                            poster="{{ $heroVideo->poster_url ?? '' }}" preload="metadata" playsinline>
                            <source src="{{ $heroVideo->video_url }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif

                    <!-- Cover Overlay: Fades out smoothly when video plays -->
                    <div id="hero-video-overlay"
                        class="absolute inset-0 z-10 flex flex-col justify-between transition-opacity duration-500">
                        <!-- Background Gradient & Poster Layer -->
                        @if ($heroVideo && $heroVideo->poster_url)
                            <div class="absolute inset-0 bg-cover bg-center -z-10"
                                style="background-image: url('{{ $heroVideo->poster_url }}');"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-black/30 -z-10"></div>
                        @else
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-gray-900 via-blue-950 to-gray-900 opacity-95 -z-10">
                            </div>
                            <div class="absolute inset-0 opacity-15 -z-10"
                                style="background-image: radial-gradient(circle at 1px 1px, #3b82f6 1px, transparent 0); background-size: 24px 24px;">
                            </div>
                        @endif

                        <div class="p-6"></div>

                        <!-- Center Play Button -->
                        <div class="flex items-center justify-center my-auto">
                            <button type="button" aria-label="Play video"
                                class="w-20 h-20 bg-blue-600/90 hover:bg-blue-600 backdrop-blur rounded-full flex items-center justify-center group-hover:scale-110 transition duration-300 shadow-xl ring-8 ring-blue-500/20 focus:outline-none cursor-pointer">
                                <i data-feather="play" class="text-white fill-current ml-1 w-8 h-8"></i>
                            </button>
                        </div>

                        <!-- Overlay Caption -->
                        <div class="p-6 bg-gradient-to-t from-black/90 via-black/60 to-transparent">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <p class="text-white font-bold text-base">
                                        {{ $heroVideo->title ?? 'Watch our workflow' }}
                                    </p>
                                    <p class="text-gray-300 text-xs">
                                        {{ $heroVideo->sub_caption ?? 'See how we label data with precision & strict SLAs' }}
                                    </p>
                                </div>
                                @if (filled($heroVideo->badge_text ?? '99.8% Precision'))
                                    <span
                                        class="text-xs bg-blue-500/30 text-blue-200 px-2.5 py-1 rounded-md border border-blue-400/30 font-medium shrink-0">
                                        {{ $heroVideo->badge_text ?? '99.8% Precision' }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Metrics Strip -->
    <section class="border-t border-gray-100 bg-white py-10 shadow-sm relative z-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-1">99%</div>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">Target Accuracy</p>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-1">100K+</div>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">Annotations Delivered</p>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-1">24/7</div>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">Fast Turnaround</p>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-1">100%</div>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">NDA-Protected</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Annotation Tools and Platforms Section (Temporarily commented out)
    <section class="py-16 md:py-24 bg-gray-50/70 mt-16">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center mb-10 md:mb-14">
                <h2 class="text-xl md:text-2xl font-bold text-gray-900 tracking-tight mb-3 md:mb-4"
                    style="font-size: 22px; line-height: 1.33;">
                    Annotation Tools and Platforms We Work With
                </h2>
                <p class="text-xs md:text-sm text-gray-500 max-w-2xl mx-auto leading-relaxed">
                    We work inside industry-standard annotation platforms, or on your own, so your data stays in your existing workflow.
                </p>
            </div>

            <!-- Single White Rounded Card - 100% Borderless with All-around (Top, Bottom, Left, Right) Soft Shadow -->
            <div
                class="max-w-5xl mx-auto bg-white rounded-2xl shadow-[0_0_35px_rgba(0,0,0,0.08),0_4px_16px_rgba(0,0,0,0.04)] px-6 py-9 md:px-12 md:py-12">
                <div class="flex flex-col gap-y-7 md:gap-y-9">
                    <!-- Row 1: 6 Platforms -->
                    <div class="flex flex-wrap items-center justify-center gap-x-10 md:gap-x-12 lg:gap-x-16 gap-y-5">
                        <!-- 1. CVAT -->
                        <div class="inline-flex items-center gap-2.5 group cursor-default transition-transform hover:scale-105">
                            <svg class="h-6 w-6 text-blue-600 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="3" stroke="#0284c7" stroke-width="2.2"
                                    stroke-dasharray="3 3" />
                                <circle cx="12" cy="12" r="3" fill="#0284c7" />
                            </svg>
                            <span
                                class="font-extrabold text-sm md:text-base tracking-tight text-gray-800 group-hover:text-blue-600 transition-colors">CVAT</span>
                        </div>

                        <!-- 2. Label Studio -->
                        <div class="inline-flex items-center gap-2.5 group cursor-default transition-transform hover:scale-105">
                            <svg class="h-6 w-6 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                <rect x="3" y="3" width="12" height="12" rx="2.5" fill="#0284c7" fill-opacity="0.2" stroke="#0284c7"
                                    stroke-width="2" />
                                <rect x="9" y="9" width="12" height="12" rx="2.5" fill="#f97316" fill-opacity="0.9" stroke="#ea580c"
                                    stroke-width="1.5" />
                            </svg>
                            <span
                                class="font-bold text-sm md:text-base tracking-tight text-gray-800 group-hover:text-blue-600 transition-colors">Label
                                <span class="text-blue-600">Studio</span></span>
                        </div>

                        <!-- 3. Labelbox -->
                        <div class="inline-flex items-center gap-2.5 group cursor-default transition-transform hover:scale-105">
                            <svg class="h-6 w-6 text-indigo-600 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                            </svg>
                            <span
                                class="font-bold text-sm md:text-base tracking-tight text-gray-800 group-hover:text-blue-600 transition-colors">labelbox</span>
                        </div>

                        <!-- 4. V7 -->
                        <div class="inline-flex items-center gap-2 group cursor-default transition-transform hover:scale-105">
                            <svg class="h-6 w-6 text-emerald-600 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                <path d="M4 4l6 14 3-7 7-7" stroke="#059669" stroke-width="2.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span
                                class="font-black text-sm md:text-base tracking-tight text-gray-800 group-hover:text-blue-600 transition-colors">V7</span>
                        </div>

                        <!-- 5. SuperAnnotate -->
                        <div class="inline-flex items-center gap-2.5 group cursor-default transition-transform hover:scale-105">
                            <svg class="h-6 w-6 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M18 7c0-2-1.8-3.5-4-3.5H9C6.8 3.5 5 5.3 5 7.5S6.8 11.5 9 11.5h6c2.2 0 4 1.8 4 4s-1.8 4-4 4H8"
                                    stroke="#9333ea" stroke-width="2.5" stroke-linecap="round" />
                                <circle cx="18" cy="7" r="2" fill="#c026d3" />
                                <circle cx="8" cy="19.5" r="2" fill="#9333ea" />
                            </svg>
                            <span
                                class="font-bold text-sm md:text-base tracking-tight text-gray-800 group-hover:text-purple-600 transition-colors">SuperAnnotate</span>
                        </div>

                        <!-- 6. Scale AI -->
                        <div class="inline-flex items-center gap-2.5 group cursor-default transition-transform hover:scale-105">
                            <svg class="h-5 w-5 text-gray-900 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <rect x="3" y="14" width="7" height="7" rx="1.5" />
                                <rect x="14" y="14" width="7" height="7" rx="1.5" />
                                <rect x="8.5" y="3" width="7" height="7" rx="1.5" />
                            </svg>
                            <span
                                class="font-bold text-sm md:text-base tracking-tight text-gray-900 group-hover:text-blue-600 transition-colors">scale
                                <span class="text-blue-600 font-extrabold text-xs">AI</span></span>
                        </div>
                    </div>

                    <!-- Row 2: 6 Platforms -->
                    <div class="flex flex-wrap items-center justify-center gap-x-10 md:gap-x-12 lg:gap-x-16 gap-y-5">
                        <!-- 7. Supervisely -->
                        <div class="inline-flex items-center gap-2.5 group cursor-default transition-transform hover:scale-105">
                            <svg class="h-6 w-6 text-teal-600 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                <polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5" stroke="#0d9488" stroke-width="2" />
                                <circle cx="12" cy="12" r="3" fill="#0d9488" />
                            </svg>
                            <span
                                class="font-bold text-sm md:text-base tracking-tight text-gray-800 group-hover:text-teal-600 transition-colors">supervisely</span>
                        </div>

                        <!-- 8. Audacity -->
                        <div class="inline-flex items-center gap-2.5 group cursor-default transition-transform hover:scale-105">
                            <svg class="h-6 w-6 text-amber-600 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 18v-6a9 9 0 0 1 18 0v6" />
                                <path
                                    d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z" />
                                <path d="M10 11v2m4-3v4" stroke="#d97706" />
                            </svg>
                            <span
                                class="font-bold text-sm md:text-base tracking-tight text-gray-800 group-hover:text-amber-600 transition-colors">Audacity</span>
                        </div>

                        <!-- 9. Praat -->
                        <div class="inline-flex items-center gap-2.5 group cursor-default transition-transform hover:scale-105">
                            <svg class="h-6 w-6 text-rose-600 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 10v4m4-8v12m4-10v8m4-12v16m4-10v4m4-2v0" stroke="#e11d48" stroke-width="2.5" />
                            </svg>
                            <span
                                class="font-bold text-sm md:text-base tracking-tight text-gray-800 group-hover:text-rose-600 transition-colors">Praat</span>
                        </div>

                        <!-- 10. Prodigy -->
                        <div class="inline-flex items-center gap-2.5 group cursor-default transition-transform hover:scale-105">
                            <svg class="h-6 w-6 text-violet-700 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                <polygon points="12 2 20 8 16 20 8 20 4 8" fill="#7c3aed" fill-opacity="0.15" stroke="#7c3aed"
                                    stroke-width="2" />
                                <path d="M12 7v10M8 12h8" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" />
                            </svg>
                            <span
                                class="font-mono font-bold text-sm md:text-base tracking-tight text-gray-800 group-hover:text-purple-600 transition-colors">prodigy</span>
                        </div>

                        <!-- 11. Doccano -->
                        <div class="inline-flex items-center gap-2.5 group cursor-default transition-transform hover:scale-105">
                            <svg class="h-6 w-6 text-blue-600 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                                <line x1="8" y1="13" x2="16" y2="13" stroke="#2563eb" stroke-width="2" />
                            </svg>
                            <span
                                class="font-bold text-sm md:text-base tracking-tight text-gray-800 group-hover:text-blue-600 transition-colors">doccano</span>
                        </div>

                        <!-- 12. Custom / Client Platforms -->
                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold tracking-tight hover:bg-blue-100 transition-all cursor-default">
                            <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                            <span>Custom / Client Platforms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}

    <!-- Services Section -->
    <section id="services" class="py-24 bg-white border-b border-gray-100 shadow-sm relative z-10">
        <div class="container mx-auto px-6">
            <div class="max-w-2xl mx-auto text-center mb-16">

                <h2 class="text-2xl font-bold text-gray-900 tracking-tight mb-4"
                    style="font-size: 24px; line-height: 1.33;">Data Annotation Services
                    for AI Teams</h2>
                <p class="text-base md:text-lg text-gray-600">
                    Human-verified annotation across image, video, text, audio and LiDAR data, built to train and evaluate
                    production AI models.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $service)
                    <div
                        class="p-8 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 flex flex-col bg-white border border-gray-100 group text-left">
                        <div class="flex-grow">
                            <div class="flex items-center justify-between mb-6">
                                <div
                                    class="flex items-center justify-center h-14 w-14 p-3.5 rounded-xl bg-blue-100 text-blue-600 transition-transform group-hover:scale-105">
                                    <i data-feather="{{ $service->icon ?: 'database' }}" class="w-6 h-6"></i>
                                </div>
                            </div>

                            <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors">
                                {{ $service->title }}
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                {{ $service->short_description ?: Str::limit($service->description, 100) }}
                            </p>

                            @if (!empty($service->features))
                                <ul class="space-y-1.5 mb-6 text-xs text-gray-500">
                                    @foreach (array_slice($service->features, 0, 3) as $feature)
                                        <li class="flex items-start gap-2">
                                            <i data-feather="check" class="w-3.5 h-3.5 text-blue-500 flex-shrink-0 mt-0.5"></i>
                                            <span>{{ $feature }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <a href="{{ route('services.show', $service->slug) }}"
                            class="mt-4 self-start text-blue-600 font-semibold text-xs py-2.5 px-4 rounded-full transition duration-300 bg-blue-50 hover:bg-blue-600 hover:text-white border border-blue-100 inline-flex items-center gap-1.5">
                            <span>{{ $service->button_text }}</span>
                            <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 text-gray-500">
                        No services configured yet.
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services.index') }}"
                    class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600 hover:text-blue-700 bg-white border border-blue-200 hover:border-blue-300 px-6 py-3 rounded-full shadow-sm hover:shadow transition-all">
                    <span>View All Data Annotation Services</span>
                    <i data-feather="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us / Quality Pillars -->
    <section id="about" class="py-24 bg-gray-50/60 border-b border-gray-100 relative">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-2xl font-bold text-gray-900 tracking-tight mb-4"
                    style="font-size: 24px; line-height: 1.33;">Why AI Teams Choose Marveit for Data Annotation
                </h2>
                <p class="text-base md:text-lg text-gray-600 leading-relaxed">Accurate labels, predictable delivery and careful data handling, backed by a process you can audit, not just promises.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 1. Multi-Stage Quality Control -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="check-circle" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors">
                        Multi-Stage Quality Control
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Every batch goes through annotator work, peer review and senior QA sign-off. We audit random samples
                        against your guidelines and send an accuracy report with each delivery.
                    </p>
                </div>

                <!-- 2. Pilot First, Then Scale -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="trending-up" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors">
                        Pilot First, Then Scale
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        We start with a small pilot on your own data. We refine the guidelines with you and calibrate
                        annotators on gold-standard samples before scaling to full production.
                    </p>
                </div>

                <!-- 3. Teams That Scale With Your Roadmap -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="users" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors">
                        Teams That Scale With Your Roadmap
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Go from a few hundred files to millions without losing consistency. Trained annotator teams ramp up
                        in 3 days, with the same QA process at every volume.
                    </p>
                </div>

                <!-- 4. Secure Data Handling -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="shield" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors">
                        Secure Data Handling
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        NDA signed before any data is shared. Encrypted transfers, role-based access and PII anonymization
                        where required. We can also work inside your VPN or environment.
                    </p>
                </div>

                <!-- 5. Works in Your Tools -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="sliders" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors">
                        Works in Your Tools
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        We label in CVAT, Label Studio, Labelbox, V7, SuperAnnotate, Scale AI, Supervisely, Audacity, Praat,
                        Prodigy, Doccano or in your own platform, so your pipeline and formats stay unchanged.
                    </p>
                </div>

                <!-- 6. Clear Communication -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="message-square" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors">
                        Clear Communication
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        A dedicated project manager, regular progress reports and a fast feedback loop. If a batch misses
                        your accuracy target, we correct it at no extra cost.
                    </p>
                </div>
            </div>

            <!-- Bottom CTA Sub-block -->
            <div class="mt-12 text-center max-w-xl mx-auto">
                <p class="text-sm md:text-base font-semibold text-gray-800 mb-4">
                    See our quality process on your own data.
                </p>
                <div class="inline-flex flex-wrap items-center justify-center gap-3">
                    <a href="{{ route('free-trial') }}"
                        class="inline-flex items-center justify-center gap-1.5 px-5 py-2.5 rounded-full text-xs md:text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-sm hover:shadow transition-all duration-200">
                        <span>Start Free Trial</span>
                        <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center px-5 py-2.5 rounded-full text-xs md:text-sm font-semibold text-gray-700 bg-white border border-gray-200 hover:border-gray-300 hover:bg-gray-50 shadow-sm transition-all duration-200">
                        Talk to an Expert
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section id="industries" class="py-24 bg-white border-y border-gray-100 shadow-sm relative z-10">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-2xl font-bold text-gray-900 tracking-tight mb-4"
                    style="font-size: 24px; line-height: 1.33;">Data Annotation Services for Every AI Industry</h2>
                <p class="text-base md:text-lg text-gray-600 leading-relaxed">From self-driving perception to medical imaging and voice AI, we label your data to your guidelines and your industry’s formats.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1: Automotive & Autonomous Driving -->
                <div id="automotive"
                    class="scroll-mt-28 bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between text-left group">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="truck" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3">
                            Automotive &amp; Autonomous Driving
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Training data for perception and driver-assistance models.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                LiDAR 3D cuboids, lane and road markings, pedestrian and vehicle tracking, camera-LiDAR
                                sensor fusion.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4">
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">LiDAR
                            Annotation</span>
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Video
                            Annotation</span>
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Image
                            Annotation</span>
                    </div>
                </div>

                <!-- Card 2: Healthcare & Medical AI -->
                <div id="healthcare"
                    class="scroll-mt-28 bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between text-left group">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="activity" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3">
                            Healthcare &amp; Medical AI
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Careful labeling for diagnostic and clinical models.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                CT and MRI segmentation, medical image classification, clinical note tagging, on
                                de-identified data with strict access control.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4">
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Image
                            Segmentation</span>
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Text
                            Annotation</span>
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Data
                            Collection</span>
                    </div>
                </div>

                <!-- Card 3: Retail & E-Commerce -->
                <div id="retail"
                    class="scroll-mt-28 bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between text-left group">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="shopping-bag" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3">
                            Retail &amp; E-Commerce
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Cleaner catalogs and smarter product search.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                Product attributes, category mapping, shelf and SKU detection, review sentiment.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4">
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Image
                            Annotation</span>
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">NLP
                            Annotation</span>
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Data
                            Collection</span>
                    </div>
                </div>

                <!-- Card 4: Agriculture & Drone Imagery -->
                <div id="agriculture"
                    class="scroll-mt-28 bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between text-left group">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="sun" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3">
                            Agriculture &amp; Drone Imagery
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Aerial and field data for crop-monitoring models.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                Crop and weed segmentation, plant health classification from multispectral images, field
                                boundary mapping.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4">
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Image
                            Segmentation</span>
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Polygon
                            Annotation</span>
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Video
                            Annotation</span>
                    </div>
                </div>

                <!-- Card 5: Voice AI & Conversational Systems -->
                <div id="voice-ai"
                    class="scroll-mt-28 bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between text-left group">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="mic" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3">
                            Voice AI &amp; Conversational Systems
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Speech and language data for assistants and chatbots.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                Multi-language transcription, speaker diarization, sound event tagging, intent and entity
                                labeling.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4">
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Audio
                            Transcription</span>
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">NLP
                            Annotation</span>
                    </div>
                </div>

                <!-- Card 6: LLM & Generative AI -->
                <div id="llm"
                    class="scroll-mt-28 bg-white p-8 rounded-2xl border border-gray-100 shadow-md hover:shadow-lg transition-all duration-300 flex flex-col justify-between text-left group">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="cpu" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3">
                            LLM &amp; Generative AI
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Human feedback data for model training and evaluation.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed">
                                RLHF preference ranking, prompt and response evaluation, instruction data creation, safety
                                and quality review.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4">
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">RLHF</span>
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Text
                            Annotation</span>
                        <span
                            class="inline-flex items-center px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">Data
                            Collection</span>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA Sub-block -->
            <div class="mt-16 text-center max-w-xl mx-auto">
                <p class="text-sm md:text-base font-semibold text-gray-800 mb-5">
                    Don’t see your industry? We write custom annotation guidelines for any domain.
                </p>
                <div class="inline-flex flex-wrap items-center justify-center gap-3">
                    <a href="{{ route('free-trial') }}"
                        class="inline-flex items-center justify-center gap-1.5 px-5 py-2.5 rounded-full text-xs md:text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-sm hover:shadow transition-all duration-200">
                        <span>Start Free Trial</span>
                        <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center px-5 py-2.5 rounded-full text-xs md:text-sm font-semibold text-gray-700 bg-white border border-gray-200 hover:border-gray-300 hover:bg-gray-50 shadow-sm transition-all duration-200">
                        Talk to an Expert
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Sample Data CTA -->
    <section id="sample-data-cta" class="py-20 bg-gray-50/70 border-t border-gray-100 relative">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto bg-white rounded-3xl p-10 md:p-14 border border-gray-100 shadow-md text-center"
                 style="padding: clamp(36px, 6vw, 64px) clamp(20px, 5vw, 48px);">
                <h2 class="text-2xl font-bold text-gray-900 tracking-tight"
                    style="font-size: 24px; line-height: 1.33; margin-bottom: 20px;">
                    Let’s Label a Sample of Your Data
                </h2>
                <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed"
                   style="margin-bottom: 36px; line-height: 1.7;">Send us a small sample and see our annotation quality before you commit. We follow your guidelines, sign an NDA first, and share an accuracy report with every delivery.</p>
                <div class="inline-flex items-center justify-center">
                    <a href="{{ route('free-trial') }}"
                        class="inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-md hover:shadow-lg transition-all duration-200">
                        <span>Start Free Trial</span>
                        <i data-feather="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const videoWrapper = document.getElementById('hero-video-wrapper');
            const video = document.getElementById('hero-native-video');
            const overlay = document.getElementById('hero-video-overlay');

            if (videoWrapper && video && overlay) {
                const playVideo = function () {
                    overlay.style.opacity = '0';
                    overlay.style.pointerEvents = 'none';
                    video.setAttribute('controls', 'controls');
                    video.play().catch(function (err) {
                        console.log('Video playback error:', err);
                    });
                };

                videoWrapper.addEventListener('click', function (e) {
                    if (video.paused) {
                        playVideo();
                    }
                });

                video.addEventListener('pause', function () {
                    if (video.currentTime === 0 || video.ended) {
                        overlay.style.opacity = '1';
                        overlay.style.pointerEvents = 'auto';
                        video.removeAttribute('controls');
                    }
                });

                video.addEventListener('ended', function () {
                    overlay.style.opacity = '1';
                    overlay.style.pointerEvents = 'auto';
                    video.removeAttribute('controls');
                });
            }
        });
    </script>
@endpush