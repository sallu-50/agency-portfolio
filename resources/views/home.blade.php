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
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight mb-6 tracking-tight">
                    Data Annotation Services <span class="text-blue-600">for AI</span> Machine Learning Teams
                </h1>

                <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-lg leading-relaxed">
                   Marveit AI delivers human-verified image, text, audio, video and LiDAR annotation for computer vision and NLP teams. Every dataset passes multi-step quality checks and is handled under NDA.
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
                        <video id="hero-native-video"
                            class="w-full h-full object-cover select-none"
                            poster="{{ $heroVideo->poster_url ?? '' }}"
                            preload="metadata"
                            playsinline>
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
                            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-blue-950 to-gray-900 opacity-95 -z-10"></div>
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
    <section class="border-y border-gray-100 bg-gray-50/50 py-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-1">99%</div>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">Target Accuracy</p>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-1">100k+</div>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">Annotations Delivered</p>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-1">24/7</div>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">Fast Turnaround</p>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-1">100%</div>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">NDA-Protected</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-2xl mx-auto text-center mb-16">

                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight mb-4">Data Annotation Services for AI Teams</h2>
                <p class="text-base md:text-lg text-gray-600">
                   Human-verified annotation across image, video, text, audio and LiDAR data, built to train and evaluate production AI models.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $service)
                    @php
                        $colorClasses = match ($service->badge_color) {
                            'green' => ['bg' => 'bg-green-100', 'text' => 'text-green-600', 'btn_bg' => 'bg-green-50 hover:bg-green-100', 'btn_text' => 'text-green-600'],
                            'purple' => ['bg' => 'bg-purple-100', 'text' => 'text-purple-600', 'btn_bg' => 'bg-purple-50 hover:bg-purple-100', 'btn_text' => 'text-purple-600'],
                            'yellow' => ['bg' => 'bg-yellow-100', 'text' => 'text-yellow-600', 'btn_bg' => 'bg-yellow-50 hover:bg-yellow-100', 'btn_text' => 'text-yellow-600'],
                            'red' => ['bg' => 'bg-red-100', 'text' => 'text-red-600', 'btn_bg' => 'bg-red-50 hover:bg-red-100', 'btn_text' => 'text-red-600'],
                            default => ['bg' => 'bg-blue-100', 'text' => 'text-blue-600', 'btn_bg' => 'bg-blue-50 hover:bg-blue-100', 'btn_text' => 'text-blue-600'],
                        };
                    @endphp
                    <div
                        class="p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col bg-white border border-gray-100 group">
                        <div class="flex-grow">
                            <div class="flex items-center justify-between mb-6">
                                <div
                                    class="flex items-center justify-center h-14 w-14 rounded-xl {{ $colorClasses['bg'] }} {{ $colorClasses['text'] }} transition-transform group-hover:scale-105">
                                    <i data-feather="{{ $service->icon ?: 'database' }}" class="w-6 h-6"></i>
                                </div>
                                <!-- <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-gray-100 text-gray-600">
                                                                            {{ $service->category }}
                                                                        </span> -->
                            </div>

                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                {{ $service->title }}
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                {{ $service->short_description ?: Str::limit($service->description, 100) }}
                            </p>

                            @if (!empty($service->features))
                                <ul class="space-y-1.5 mb-6 text-xs text-gray-500">
                                    @foreach (array_slice($service->features, 0, 3) as $feature)
                                        <li class="flex items-center gap-2">
                                            <i data-feather="check" class="w-3.5 h-3.5 text-blue-500 flex-shrink-0"></i>
                                            <span>{{ $feature }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <a href="{{ route('services.show', $service->slug) }}"
                            class="mt-4 self-start {{ $colorClasses['btn_text'] }} font-semibold text-xs py-2.5 px-4 rounded-full transition duration-300 {{ $colorClasses['btn_bg'] }} inline-flex items-center gap-1.5">
                            <span>Explore Details</span>
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
    <section id="about" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <!-- <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-600 mb-3">
                                    <i data-feather="award" class="w-3.5 h-3.5"></i> Enterprise Quality
                                </span> -->
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight mb-4">Why Choose Marveit AI?
                </h2>
                <p class="text-base md:text-lg text-gray-600 leading-relaxed">
                    We combine advanced tools with a dedicated workforce to deliver pixel-perfect annotations with speed and
                    accuracy, ensuring your AI projects succeed.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-2xl bg-gray-50 border border-gray-100 flex flex-col items-start">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6">
                        <i data-feather="shield-check" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Multi-Tier Consensus QA</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Every dataset undergoes two-tier annotator agreement checks, random statistical sampling, and senior
                        QA signoff to guarantee 99.8%+ benchmark compliance.
                    </p>
                </div>

                <div class="p-8 rounded-2xl bg-gray-50 border border-gray-100 flex flex-col items-start">
                    <div class="w-12 h-12 rounded-xl bg-green-100 text-green-600 flex items-center justify-center mb-6">
                        <i data-feather="zap" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Rapid Elastic Scaling</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Scale your labeling pipeline from hundreds of frames to millions of multi-modal files in days,
                        without sacrificing precision or data cleanliness.
                    </p>
                </div>

                <div class="p-8 rounded-2xl bg-gray-50 border border-gray-100 flex flex-col items-start">
                    <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center mb-6">
                        <i data-feather="lock" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">SOC 2 & GDPR Compliance</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Encrypted vault transfers, on-premise or cloud VPN gateways, bilateral non-disclosure agreements,
                        and strict PII anonymization procedures.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section id="industries" class="py-20 bg-gray-50 border-t border-gray-100">
        <div class="container mx-auto px-6">
            <div class="max-w-2xl mx-auto text-center mb-16">
                <!-- <span
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-gray-200 text-gray-700 mb-3">
                                <i data-feather="briefcase" class="w-3.5 h-3.5"></i> Sectors We Empower
                            </span> -->
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight mb-4">Industries Served</h2>
                <p class="text-base text-gray-600">Tailored data collection and annotation pipelines built for
                    domain-specific models.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center mb-4">
                        <i data-feather="truck" class="w-5 h-5"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Automotive & ADAS</h3>
                    <p class="text-xs text-gray-500 leading-relaxed">3D point clouds, LiDAR cuboids, lane detection, and
                        pedestrian kinematics for autonomous driving systems.</p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-lg bg-green-100 text-green-600 flex items-center justify-center mb-4">
                        <i data-feather="activity" class="w-5 h-5"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Healthcare & Bio</h3>
                    <p class="text-xs text-gray-500 leading-relaxed">Medical imaging, CT/MRI segmentation, clinical record
                        text tagging, and privacy-shielded HIPAA protocols.</p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center mb-4">
                        <i data-feather="shopping-bag" class="w-5 h-5"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Retail & E-Commerce</h3>
                    <p class="text-xs text-gray-500 leading-relaxed">SKU attribute tagging, visual search indexing, product
                        categorization, and customer sentiment evaluation.</p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-lg bg-yellow-100 text-yellow-600 flex items-center justify-center mb-4">
                        <i data-feather="sun" class="w-5 h-5"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Smart Agriculture</h3>
                    <p class="text-xs text-gray-500 leading-relaxed">Aerial drone imagery, multispectral crop health
                        classification, weed identification, and yield forecasting.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Ready to Start CTA -->
    <section id="speak-to-expert" class="py-20 bg-gray-50 border-t border-gray-100">
        <div class="container mx-auto px-6 text-center max-w-3xl">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">Ready to Start Your Project?</h2>
            <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                Let's discuss how our data annotation services can help you achieve your AI goals with speed, security, and
                precision.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact') }}"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3.5 px-8 rounded-full shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5">
                    Speak to an Expert
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