@extends('layouts.app')

@section('title', 'Data Annotation & AI Solutions - Marveit AI')
@section('meta_description', 'Power your machine learning models with pixel-perfect, human-in-the-loop datasets for Computer Vision, NLP, Audio, and Video.')

@section('main_class', 'pt-20 md:pt-24 pb-16')

@push('styles')
    <style>
        .home-section {
            background-color: #f8fafc;
            border-radius: 1.25rem;
            border: 1px solid rgba(226, 232, 240, 0.6);
            box-shadow: 0 1px 3px 0 rgba(15, 23, 42, 0.02);
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            transition: box-shadow 0.3s ease;
        }
        @media (min-width: 768px) {
            .home-section {
                border-radius: 1.75rem;
                margin-top: 2rem;
                margin-bottom: 2rem;
                box-shadow: 0 2px 6px -1px rgba(15, 23, 42, 0.02);
            }
        }
        .home-hero-section {
            padding-top: 4.5rem;
            padding-bottom: 4.5rem;
        }
        @media (min-width: 768px) {
            .home-hero-section {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }
        }
        @media (min-width: 1024px) {
            .home-hero-section {
                padding-top: 7rem;
                padding-bottom: 7rem;
            }
        }
        .home-section .rounded-2xl.bg-white {
            box-shadow: 0 1px 2px 0 rgba(15, 23, 42, 0.04), 0 0 1px 0 rgba(15, 23, 42, 0.03) !important;
            transition: all 0.25s ease;
        }
        .home-section .rounded-2xl.bg-white:hover {
            box-shadow: 0 3px 8px -1px rgba(15, 23, 42, 0.06), 0 1px 2px 0 rgba(15, 23, 42, 0.03) !important;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="home-section home-hero-section w-[calc(100%-1.5rem)] sm:w-auto container mx-auto px-6">
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
                        class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-sm sm:text-base font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200">
                        <span>Start Free Trial</span>
                        <i data-feather="arrow-right" class="w-4 h-4"></i>
                    </a>
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
    <section class="home-section w-[calc(100%-1.5rem)] sm:w-auto container mx-auto px-6 py-10 md:py-14 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-gray-100">
            <div class="pt-2 md:pt-0">
                <div class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-1">99%</div>
                <p class="text-xs md:text-sm text-gray-500 font-medium">Target Accuracy</p>
            </div>
            <div class="pt-4 md:pt-0">
                <div class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-1">100K+</div>
                <p class="text-xs md:text-sm text-gray-500 font-medium">Annotations Delivered</p>
            </div>
            <div class="pt-4 md:pt-0">
                <div class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-1">24/7</div>
                <p class="text-xs md:text-sm text-gray-500 font-medium">Fast Turnaround</p>
            </div>
            <div class="pt-4 md:pt-0">
                <div class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-1">100%</div>
                <p class="text-xs md:text-sm text-gray-500 font-medium">NDA-Protected</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="home-section w-[calc(100%-1.5rem)] sm:w-auto container mx-auto px-6 py-20 md:py-28 relative z-10">
        <div class="max-w-2xl mx-auto text-center mb-14">

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
                    class="p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between bg-white group text-left h-full">
                        <div class="flex-grow flex flex-col">
                            <div class="flex items-center justify-between mb-6">
                                <div
                                    class="flex items-center justify-center h-14 w-14 p-3.5 rounded-xl bg-blue-100 text-blue-600 transition-transform group-hover:scale-105">
                                    <i data-feather="{{ $service->icon ?: 'database' }}" class="w-6 h-6"></i>
                                </div>
                            </div>

                            <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors leading-snug"
                                style="min-height: 56px;">
                                {{ $service->title }}
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4" style="min-height: 48px;">
                                {{ $service->short_description ?: Str::limit($service->description, 100) }}
                            </p>

                            @if (!empty($service->features))
                                <ul class="space-y-1.5 mb-6 text-xs text-gray-500" style="min-height: 76px;">
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
                            class="mt-auto self-start inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white border border-blue-100 hover:border-blue-600 transition-all duration-200 hover:-translate-y-0.5">
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
                    class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full text-xs sm:text-sm font-medium bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white border border-blue-100 hover:border-blue-600 transition-all duration-200 hover:-translate-y-0.5">
                    <span>View All Data Annotation Services</span>
                    <i data-feather="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us / Quality Pillars -->
    <section id="about" class="home-section w-[calc(100%-1.5rem)] sm:w-auto container mx-auto px-6 py-20 md:py-28 relative z-10">
        <div class="max-w-3xl mx-auto text-center mb-14">
            <h2 class="text-2xl font-bold text-gray-900 tracking-tight mb-4"
                style="font-size: 24px; line-height: 1.33;">Why AI Teams Choose Marveit for Data Annotation
            </h2>
            <p class="text-base md:text-lg text-gray-600 leading-relaxed">Accurate labels, predictable delivery and careful data handling, backed by a process you can audit, not just promises.</p>
        </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 1. Multi-Stage Quality Control -->
                <div
                    class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left h-full">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="check-circle" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors leading-snug"
                        style="min-height: 56px;">
                        Multi-Stage Quality Control
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed" style="min-height: 72px;">
                        Every batch goes through annotator work, peer review and senior QA sign-off. We audit random samples
                        against your guidelines and send an accuracy report with each delivery.
                    </p>
                </div>

                <!-- 2. Pilot First, Then Scale -->
                <div
                    class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left h-full">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="trending-up" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors leading-snug"
                        style="min-height: 56px;">
                        Pilot First, Then Scale
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed" style="min-height: 72px;">
                        We start with a small pilot on your own data. We refine the guidelines with you and calibrate
                        annotators on gold-standard samples before scaling to full production.
                    </p>
                </div>

                <!-- 3. Teams That Scale With Your Roadmap -->
                <div
                    class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left h-full">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="users" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors leading-snug"
                        style="min-height: 56px;">
                        Teams That Scale With Your Roadmap
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed" style="min-height: 72px;">
                        Go from a few hundred files to millions without losing consistency. Trained annotator teams ramp up
                        in 3 days, with the same QA process at every volume.
                    </p>
                </div>

                <!-- 4. Secure Data Handling -->
                <div
                    class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left h-full">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="shield" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors leading-snug"
                        style="min-height: 56px;">
                        Secure Data Handling
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed" style="min-height: 72px;">
                        NDA signed before any data is shared. Encrypted transfers, role-based access and PII anonymization
                        where required. We can also work inside your VPN or environment.
                    </p>
                </div>

                <!-- 5. Works in Your Tools -->
                <div
                    class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left h-full">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="sliders" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors leading-snug"
                        style="min-height: 56px;">
                        Works in Your Tools
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed" style="min-height: 72px;">
                        We label in CVAT, Label Studio, Labelbox, V7, SuperAnnotate, Scale AI, Supervisely, Audacity, Praat,
                        Prodigy, Doccano or in your own platform, so your pipeline and formats stay unchanged.
                    </p>
                </div>

                <!-- 6. Clear Communication -->
                <div
                    class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-md transition-all duration-300 flex flex-col text-left h-full">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="message-square" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-600 mb-3 hover:text-blue-700 transition-colors leading-snug"
                        style="min-height: 56px;">
                        Clear Communication
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed" style="min-height: 72px;">
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
                        class="inline-flex items-center justify-center gap-1.5 px-5 py-2.5 rounded-full text-xs md:text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                        <span>Start Free Trial</span>
                        <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center gap-1.5 px-5 py-2.5 rounded-full text-xs md:text-sm font-medium bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white border border-blue-100 hover:border-blue-600 transition-all duration-200 hover:-translate-y-0.5">
                        <span>Talk to an Expert</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section id="industries" class="home-section w-[calc(100%-1.5rem)] sm:w-auto container mx-auto px-6 py-20 md:py-28 relative z-10">
        <div class="max-w-3xl mx-auto text-center mb-14">
            <h2 class="text-2xl font-bold text-gray-900 tracking-tight mb-4"
                style="font-size: 24px; line-height: 1.33;">Data Annotation Services for Every AI Industry</h2>
            <p class="text-base md:text-lg text-gray-600 leading-relaxed">From self-driving perception to medical imaging and voice AI, we label your data to your guidelines and your industry’s formats.</p>
        </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1: Automotive & Autonomous Driving -->
                <div id="automotive"
                    class="scroll-mt-28 bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between text-left group h-full">
                    <div class="flex-grow flex flex-col">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="truck" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3 leading-snug"
                            style="min-height: 56px;">
                            Automotive &amp; Autonomous Driving
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6" style="min-height: 48px;">
                            Training data for perception and driver-assistance models.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6 flex-grow flex flex-col">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed" style="min-height: 72px;">
                                LiDAR 3D cuboids, lane and road markings, pedestrian and vehicle tracking, camera-LiDAR
                                sensor fusion.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4 mt-auto" style="min-height: 70px; align-content: flex-start;">
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
                    class="scroll-mt-28 bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between text-left group h-full">
                    <div class="flex-grow flex flex-col">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="activity" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3 leading-snug"
                            style="min-height: 56px;">
                            Healthcare &amp; Medical AI
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6" style="min-height: 48px;">
                            Careful labeling for diagnostic and clinical models.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6 flex-grow flex flex-col">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed" style="min-height: 72px;">
                                CT and MRI segmentation, medical image classification, clinical note tagging, on
                                de-identified data with strict access control.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4 mt-auto" style="min-height: 70px; align-content: flex-start;">
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
                    class="scroll-mt-28 bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between text-left group h-full">
                    <div class="flex-grow flex flex-col">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="shopping-bag" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3 leading-snug"
                            style="min-height: 56px;">
                            Retail &amp; E-Commerce
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6" style="min-height: 48px;">
                            Cleaner catalogs and smarter product search.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6 flex-grow flex flex-col">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed" style="min-height: 72px;">
                                Product attributes, category mapping, shelf and SKU detection, review sentiment.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4 mt-auto" style="min-height: 70px; align-content: flex-start;">
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
                    class="scroll-mt-28 bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between text-left group h-full">
                    <div class="flex-grow flex flex-col">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="sun" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3 leading-snug"
                            style="min-height: 56px;">
                            Agriculture &amp; Drone Imagery
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6" style="min-height: 48px;">
                            Aerial and field data for crop-monitoring models.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6 flex-grow flex flex-col">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed" style="min-height: 72px;">
                                Crop and weed segmentation, plant health classification from multispectral images, field
                                boundary mapping.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4 mt-auto" style="min-height: 70px; align-content: flex-start;">
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
                    class="scroll-mt-28 bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between text-left group h-full">
                    <div class="flex-grow flex flex-col">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="mic" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3 leading-snug"
                            style="min-height: 56px;">
                            Voice AI &amp; Conversational Systems
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6" style="min-height: 48px;">
                            Speech and language data for assistants and chatbots.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6 flex-grow flex flex-col">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed" style="min-height: 72px;">
                                Multi-language transcription, speaker diarization, sound event tagging, intent and entity
                                labeling.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4 mt-auto" style="min-height: 70px; align-content: flex-start;">
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
                    class="scroll-mt-28 bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between text-left group h-full">
                    <div class="flex-grow flex flex-col">
                        <div
                            class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform">
                            <i data-feather="cpu" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-3 leading-snug"
                            style="min-height: 56px;">
                            LLM &amp; Generative AI
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6" style="min-height: 48px;">
                            Human feedback data for model training and evaluation.
                        </p>
                        <div class="pt-4 border-t border-gray-100 mb-6 flex-grow flex flex-col">
                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 block mb-2">What we
                                label:</span>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed" style="min-height: 72px;">
                                RLHF preference ranking, prompt and response evaluation, instruction data creation, safety
                                and quality review.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 pt-4 mt-auto" style="min-height: 70px; align-content: flex-start;">
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
                        class="inline-flex items-center justify-center gap-1.5 px-5 py-2.5 rounded-full text-xs md:text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                        <span>Start Free Trial</span>
                        <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                    </a>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center gap-1.5 px-5 py-2.5 rounded-full text-xs md:text-sm font-medium bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white border border-blue-100 hover:border-blue-600 transition-all duration-200 hover:-translate-y-0.5">
                        <span>Talk to an Expert</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Annotation Tools and Platforms We Work With -->
    @include('partials.annotation-tools')

    <!-- Sample Data CTA -->
    <section id="sample-data-cta" class="home-section w-[calc(100%-1.5rem)] sm:w-auto container mx-auto px-6 text-center relative z-10"
             style="padding: clamp(64px, 8vw, 110px) 24px;">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 tracking-tight"
                style="font-size: 28px; line-height: 1.3; margin-bottom: 20px;">
                Let’s Label a Sample of Your Data
            </h2>
            <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed"
               style="margin-bottom: 36px; line-height: 1.7;">Send us a small sample and see our annotation quality before you commit. We follow your guidelines, sign an NDA first, and share an accuracy report with every delivery.</p>
            <div class="inline-flex items-center justify-center pt-2">
                <a href="{{ route('free-trial') }}"
                    class="inline-flex items-center justify-center gap-2.5 px-8 py-3.5 rounded-full text-base font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200"
                    style="padding: 14px 38px;">
                    <span>Start Free Trial</span>
                    <i data-feather="arrow-right" class="w-4 h-4"></i>
                </a>
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