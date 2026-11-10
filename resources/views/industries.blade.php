@extends('layouts.app')

@section('title', 'Industries We Serve - Marveit AI | Domain-Specific Data Annotation')
@section('meta_description', 'Domain-specific data annotation services for Automotive & Autonomous Driving, Healthcare & Medical AI, Retail & E-Commerce, Agriculture & Drone Imagery, Voice AI, and LLM & Generative AI.')

@push('styles')
    <style>
        .ind-page-bg {
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
        }

        .ind-card {
            background-color: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 1.25rem;
            box-shadow: 0 2px 10px -2px rgba(15, 23, 42, 0.04), 0 1px 3px 0 rgba(15, 23, 42, 0.02);
            transition: all 0.25s ease;
        }

        .ind-card:hover {
            background-color: #ffffff;
            border-color: rgba(147, 197, 253, 0.9);
            box-shadow: 0 12px 28px -6px rgba(15, 23, 42, 0.08), 0 4px 10px -2px rgba(15, 23, 42, 0.03);
            transform: translateY(-3px);
        }

        .ind-icon-box {
            width: 3rem;
            height: 3rem;
            padding: 0.75rem;
            border-radius: 0.875rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .ind-hero-pad {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        @media (min-width: 768px) {
            .ind-hero-pad {
                padding-top: 4.5rem;
                padding-bottom: 4rem;
            }
        }
    </style>
@endpush

@section('content')
    <div class="ind-page-bg pt-24 md:pt-28">
        <!-- Hero Section -->
        <section class="ind-hero-pad border-b border-gray-200/60">
            <div class="container mx-auto px-6">
                <div class="max-w-3xl mx-auto text-center">
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-600 border border-blue-100 mb-5">
                        <i data-feather="layers" class="w-3.5 h-3.5"></i>
                        <span>Domain-Calibrated Annotation Teams</span>
                    </span>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight mb-5 leading-tight">
                        Data Annotation Services for <span class="text-blue-600">Every AI Industry</span>
                    </h1>

                    <p class="text-base md:text-lg text-gray-600 leading-relaxed mb-8">
                        From self-driving perception and clinical imaging to retail catalogs, drone agriculture, voice AI, and LLM alignment, we label your data strictly to your guidelines and production formats.
                    </p>

                    <!-- Quick Jump Pills -->
                    <div class="flex flex-wrap justify-center gap-2.5 mb-8">
                        <a href="#automotive" class="px-4 py-2 rounded-full text-xs font-semibold bg-white border border-gray-200 text-gray-700 hover:border-blue-500 hover:text-blue-600 transition shadow-xs">Automotive</a>
                        <a href="#healthcare" class="px-4 py-2 rounded-full text-xs font-semibold bg-white border border-gray-200 text-gray-700 hover:border-blue-500 hover:text-blue-600 transition shadow-xs">Healthcare</a>
                        <a href="#retail" class="px-4 py-2 rounded-full text-xs font-semibold bg-white border border-gray-200 text-gray-700 hover:border-blue-500 hover:text-blue-600 transition shadow-xs">Retail &amp; E-Commerce</a>
                        <a href="#agriculture" class="px-4 py-2 rounded-full text-xs font-semibold bg-white border border-gray-200 text-gray-700 hover:border-blue-500 hover:text-blue-600 transition shadow-xs">Agriculture</a>
                        <a href="#voice-ai" class="px-4 py-2 rounded-full text-xs font-semibold bg-white border border-gray-200 text-gray-700 hover:border-blue-500 hover:text-blue-600 transition shadow-xs">Voice AI</a>
                        <a href="#llm" class="px-4 py-2 rounded-full text-xs font-semibold bg-white border border-gray-200 text-gray-700 hover:border-blue-500 hover:text-blue-600 transition shadow-xs">LLM &amp; Generative AI</a>
                    </div>

                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="{{ route('free-trial') }}"
                            class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-md hover:shadow-lg transition">
                            <span>Start Free Pilot</span>
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full text-sm font-semibold text-gray-700 bg-white border border-gray-200 hover:border-blue-300 hover:text-blue-600 shadow-xs transition">
                            <span>Discuss Your Domain</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Industries 6-Card Grid -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- 1. Automotive & Autonomous Driving -->
                    <div id="automotive" class="ind-card scroll-mt-28 p-8 flex flex-col justify-between h-full">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="ind-icon-box bg-blue-100 text-blue-600">
                                    <i data-feather="truck" class="w-6 h-6"></i>
                                </div>
                                <span class="px-3 py-1 rounded-full text-[11px] font-semibold bg-blue-50 text-blue-700 border border-blue-100">
                                    Perception &amp; ADAS
                                </span>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                Automotive &amp; Autonomous Driving
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                High-precision sensor fusion and spatial ground truth for L2–L5 autonomous perception and driver-assistance models.
                            </p>

                            <div class="pt-4 border-t border-gray-100 mb-6">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2 text-xs text-gray-600">
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>LiDAR 3D cuboids &amp; point cloud segmentation</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Lane markings, drivable area &amp; traffic sign tagging</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Multi-frame pedestrian, cyclist &amp; vehicle tracking</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] font-semibold text-gray-500">Formats: KITTI, PCD, COCO</span>
                            <a href="{{ route('free-trial') }}" class="text-xs font-bold text-blue-600 hover:underline inline-flex items-center gap-1">
                                <span>Start Pilot</span>
                                <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- 2. Healthcare & Medical AI -->
                    <div id="healthcare" class="ind-card scroll-mt-28 p-8 flex flex-col justify-between h-full">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="ind-icon-box bg-emerald-100 text-emerald-600">
                                    <i data-feather="activity" class="w-6 h-6"></i>
                                </div>
                                <span class="px-3 py-1 rounded-full text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100">
                                    HIPAA / GDPR Aligned
                                </span>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                Healthcare &amp; Medical AI
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                Carefully verified diagnostic and clinical labeling executed on de-identified datasets under strict role-based access.
                            </p>

                            <div class="pt-4 border-t border-gray-100 mb-6">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2 text-xs text-gray-600">
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                                        <span>CT, MRI &amp; X-ray volumetric organ segmentation</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Pathology &amp; histology lesion polygon masks</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Clinical note entity recognition &amp; PII redaction</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] font-semibold text-gray-500">Formats: DICOM, NIfTI, JSON</span>
                            <a href="{{ route('free-trial') }}" class="text-xs font-bold text-blue-600 hover:underline inline-flex items-center gap-1">
                                <span>Start Pilot</span>
                                <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- 3. Retail & E-Commerce -->
                    <div id="retail" class="ind-card scroll-mt-28 p-8 flex flex-col justify-between h-full">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="ind-icon-box bg-purple-100 text-purple-600">
                                    <i data-feather="shopping-bag" class="w-6 h-6"></i>
                                </div>
                                <span class="px-3 py-1 rounded-full text-[11px] font-semibold bg-purple-50 text-purple-700 border border-purple-100">
                                    Catalog &amp; Visual Search
                                </span>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                Retail &amp; E-Commerce
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                Cleaner product taxonomies, sharper visual search, and accurate in-store shelf analytics for modern commerce AI.
                            </p>

                            <div class="pt-4 border-t border-gray-100 mb-6">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2 text-xs text-gray-600">
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-purple-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Shelf &amp; SKU bounding boxes for planogram audits</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-purple-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Apparel, furniture &amp; attribute taxonomy tagging</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-purple-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Search relevance ranking &amp; customer sentiment</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] font-semibold text-gray-500">Formats: COCO, YOLO, CSV</span>
                            <a href="{{ route('free-trial') }}" class="text-xs font-bold text-blue-600 hover:underline inline-flex items-center gap-1">
                                <span>Start Pilot</span>
                                <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- 4. Agriculture & Drone Imagery -->
                    <div id="agriculture" class="ind-card scroll-mt-28 p-8 flex flex-col justify-between h-full">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="ind-icon-box bg-yellow-100 text-yellow-700">
                                    <i data-feather="sun" class="w-6 h-6"></i>
                                </div>
                                <span class="px-3 py-1 rounded-full text-[11px] font-semibold bg-yellow-50 text-yellow-700 border border-yellow-200">
                                    AgTech &amp; Geospatial
                                </span>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                Agriculture &amp; Drone Imagery
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                Pixel-accurate aerial, satellite, and field-level image annotation for autonomous farming and crop-health models.
                            </p>

                            <div class="pt-4 border-t border-gray-100 mb-6">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2 text-xs text-gray-600">
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-yellow-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Crop vs. weed semantic segmentation masks</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-yellow-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Multispectral plant stress &amp; disease detection</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-yellow-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Orchard canopy counting &amp; field boundary polygons</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] font-semibold text-gray-500">Formats: GeoJSON, GeoTIFF, VOC</span>
                            <a href="{{ route('free-trial') }}" class="text-xs font-bold text-blue-600 hover:underline inline-flex items-center gap-1">
                                <span>Start Pilot</span>
                                <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- 5. Voice AI & Conversational Systems -->
                    <div id="voice-ai" class="ind-card scroll-mt-28 p-8 flex flex-col justify-between h-full">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="ind-icon-box bg-indigo-100 text-indigo-600">
                                    <i data-feather="mic" class="w-6 h-6"></i>
                                </div>
                                <span class="px-3 py-1 rounded-full text-[11px] font-semibold bg-indigo-50 text-indigo-700 border border-indigo-100">
                                    Speech &amp; Audio AI
                                </span>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                Voice AI &amp; Conversational Systems
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                Verbatim speech transcription, acoustic event tagging, and conversational intent annotation for voice assistants.
                            </p>

                            <div class="pt-4 border-t border-gray-100 mb-6">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2 text-xs text-gray-600">
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-indigo-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Multi-language timestamped audio transcription</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-indigo-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Speaker diarization &amp; overlap boundary markers</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-indigo-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Noise tagging, prosody &amp; intent slot classification</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] font-semibold text-gray-500">Formats: RTTM, SRT, JSON</span>
                            <a href="{{ route('free-trial') }}" class="text-xs font-bold text-blue-600 hover:underline inline-flex items-center gap-1">
                                <span>Start Pilot</span>
                                <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- 6. LLM & Generative AI -->
                    <div id="llm" class="ind-card scroll-mt-28 p-8 flex flex-col justify-between h-full">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="ind-icon-box bg-blue-100 text-blue-600">
                                    <i data-feather="cpu" class="w-6 h-6"></i>
                                </div>
                                <span class="px-3 py-1 rounded-full text-[11px] font-semibold bg-blue-50 text-blue-700 border border-blue-100">
                                    RLHF &amp; Alignment
                                </span>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                LLM &amp; Generative AI
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                Human feedback, structured rubric evaluation, and domain reasoning datasets for foundation models and agents.
                            </p>

                            <div class="pt-4 border-t border-gray-100 mb-6">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2 text-xs text-gray-600">
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>RLHF pairwise response preference &amp; ranking</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Supervised fine-tuning (SFT) prompt-response writing</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Safety red-teaming, hallucination &amp; fact-checking</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] font-semibold text-gray-500">Formats: JSONL, Parquet</span>
                            <a href="{{ route('free-trial') }}" class="text-xs font-bold text-blue-600 hover:underline inline-flex items-center gap-1">
                                <span>Start Pilot</span>
                                <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Custom Guideline & Delivery Guarantee Banner -->
        <section class="py-12 pb-20">
            <div class="container mx-auto px-6">
                <div class="bg-white rounded-3xl border border-gray-200/80 p-8 md:p-12 shadow-sm text-center max-w-4xl mx-auto">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 mb-4">
                        <i data-feather="clock" class="w-3.5 h-3.5"></i>
                        <span>Pilot Turnaround &amp; Response Within 24 Hours</span>
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-4">
                        Don’t See Your Exact Industry?
                    </h2>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed max-w-2xl mx-auto mb-8">
                        We draft custom annotation guidelines and calibrate dedicated annotation pods for robotics, security, sports analytics, fintech documents, and niche computer vision domains—backed by bilateral NDAs and 99.8% QA accuracy.
                    </p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="{{ route('free-trial') }}"
                            class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-md hover:shadow-lg transition">
                            <span>Start Free Pilot</span>
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition">
                            <span>Talk to an Expert</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
