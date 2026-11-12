@extends('layouts.app')

@section('title', 'Industries We Serve - Marveit AI | Domain-Specific Data Annotation')
@section('meta_description', 'Domain-specific data annotation services for Automotive & Autonomous Driving, Healthcare & Medical AI, Retail & E-Commerce, Agriculture & Drone Imagery, Voice AI, and LLM & Generative AI.')

@push('styles')
    <style>
        .ind-page-bg {
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
            padding-top: 6rem;
        }

        @media (min-width: 768px) {
            .ind-page-bg {
                padding-top: 7rem;
            }
        }

        .ind-hero-section {
            padding-top: 4rem;
            padding-bottom: 3.5rem;
        }

        @media (min-width: 768px) {
            .ind-hero-section {
                padding-top: 5rem;
                padding-bottom: 4.5rem;
            }
        }

        .ind-grid-section {
            padding-top: 3.5rem;
            padding-bottom: 4rem;
        }

        @media (min-width: 768px) {
            .ind-grid-section {
                padding-top: 4.5rem;
                padding-bottom: 5rem;
            }
        }

        .ind-cta-section {
            padding-top: 1.5rem;
            padding-bottom: 5rem;
        }

        .ind-card {
            background-color: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 1.25rem;
            padding: 2rem;
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
            width: 3.25rem;
            height: 3.25rem;
            padding: 0.75rem;
            border-radius: 0.875rem;
            background-color: #dbeafe;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-bottom: 1.5rem;
        }

        .ind-cta-card {
            background-color: #ffffff;
            border: 1px solid rgba(226, 232, 240, 0.85);
            border-radius: 1.5rem;
            padding: 3rem 1.75rem;
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.04);
        }

        @media (min-width: 768px) {
            .ind-cta-card {
                padding: 4rem 3rem;
            }
        }

        .ind-cta-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.875rem 2.25rem;
            border-radius: 9999px;
            font-size: 0.9375rem;
            font-weight: 600;
            color: #ffffff;
            background-color: #2563eb;
            box-shadow: 0 6px 18px rgba(37, 99, 235, 0.25);
            transition: all 0.2s ease;
        }

        .ind-cta-btn:hover {
            background-color: #1d4ed8;
            transform: translateY(-2px);
            box-shadow: 0 10px 24px rgba(37, 99, 235, 0.32);
        }
    </style>
@endpush

@section('content')
    <div class="ind-page-bg">
        <!-- Hero Section -->
        <section class="ind-hero-section">
            <div class="container mx-auto px-6">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight mb-5 leading-tight">
                        Data Annotation Services for <span class="text-blue-600">Every AI Industry</span>
                    </h1>

                    <p class="text-base md:text-lg text-gray-600 leading-relaxed">
                        From self-driving perception and clinical imaging to retail catalogs, drone agriculture, voice AI, and LLM alignment, we label your data strictly to your guidelines and production formats.
                    </p>
                </div>
            </div>
        </section>

        <!-- Industries 6-Card Grid -->
        <section class="ind-grid-section">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- 1. Automotive & Autonomous Driving -->
                    <div id="automotive" class="ind-card scroll-mt-28 flex flex-col justify-between h-full">
                        <div>
                            <div class="ind-icon-box">
                                <i data-feather="truck" class="w-6 h-6"></i>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                Automotive &amp; Autonomous Driving
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                High-precision sensor fusion and spatial ground truth for L2–L5 autonomous perception and driver-assistance models.
                            </p>

                            <div class="pt-4 border-t border-gray-100">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2.5 text-xs text-gray-600">
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
                    </div>

                    <!-- 2. Healthcare & Medical AI -->
                    <div id="healthcare" class="ind-card scroll-mt-28 flex flex-col justify-between h-full">
                        <div>
                            <div class="ind-icon-box">
                                <i data-feather="activity" class="w-6 h-6"></i>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                Healthcare &amp; Medical AI
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                Carefully verified diagnostic and clinical labeling executed on de-identified datasets under strict role-based access.
                            </p>

                            <div class="pt-4 border-t border-gray-100">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2.5 text-xs text-gray-600">
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>CT, MRI &amp; X-ray volumetric organ segmentation</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Pathology &amp; histology lesion polygon masks</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Clinical note entity recognition &amp; PII redaction</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Retail & E-Commerce -->
                    <div id="retail" class="ind-card scroll-mt-28 flex flex-col justify-between h-full">
                        <div>
                            <div class="ind-icon-box">
                                <i data-feather="shopping-bag" class="w-6 h-6"></i>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                Retail &amp; E-Commerce
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                Cleaner product taxonomies, sharper visual search, and accurate in-store shelf analytics for modern commerce AI.
                            </p>

                            <div class="pt-4 border-t border-gray-100">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2.5 text-xs text-gray-600">
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Shelf &amp; SKU bounding boxes for planogram audits</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Apparel, furniture &amp; attribute taxonomy tagging</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Search relevance ranking &amp; customer sentiment</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Agriculture & Drone Imagery -->
                    <div id="agriculture" class="ind-card scroll-mt-28 flex flex-col justify-between h-full">
                        <div>
                            <div class="ind-icon-box">
                                <i data-feather="sun" class="w-6 h-6"></i>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                Agriculture &amp; Drone Imagery
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                Pixel-accurate aerial, satellite, and field-level image annotation for autonomous farming and crop-health models.
                            </p>

                            <div class="pt-4 border-t border-gray-100">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2.5 text-xs text-gray-600">
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Crop vs. weed semantic segmentation masks</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Multispectral plant stress &amp; disease detection</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Orchard canopy counting &amp; field boundary polygons</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Voice AI & Conversational Systems -->
                    <div id="voice-ai" class="ind-card scroll-mt-28 flex flex-col justify-between h-full">
                        <div>
                            <div class="ind-icon-box">
                                <i data-feather="mic" class="w-6 h-6"></i>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                Voice AI &amp; Conversational Systems
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                Verbatim speech transcription, acoustic event tagging, and conversational intent annotation for voice assistants.
                            </p>

                            <div class="pt-4 border-t border-gray-100">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2.5 text-xs text-gray-600">
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Multi-language timestamped audio transcription</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Speaker diarization &amp; overlap boundary markers</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i data-feather="check" class="w-3.5 h-3.5 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span>Noise tagging, prosody &amp; intent slot classification</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 6. LLM & Generative AI -->
                    <div id="llm" class="ind-card scroll-mt-28 flex flex-col justify-between h-full">
                        <div>
                            <div class="ind-icon-box">
                                <i data-feather="cpu" class="w-6 h-6"></i>
                            </div>

                            <h2 class="text-xl font-bold text-gray-900 mb-3">
                                LLM &amp; Generative AI
                            </h2>
                            <p class="text-sm text-gray-600 leading-relaxed mb-6">
                                Human feedback, structured rubric evaluation, and domain reasoning datasets for foundation models and agents.
                            </p>

                            <div class="pt-4 border-t border-gray-100">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What We Label</h3>
                                <ul class="space-y-2.5 text-xs text-gray-600">
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
                    </div>

                </div>
            </div>
        </section>

        <!-- Custom Guideline & Delivery Guarantee Banner -->
        <section class="ind-cta-section">
            <div class="container mx-auto px-6">
                <div class="ind-cta-card text-center max-w-4xl mx-auto">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-4">
                        Don’t See Your Exact Industry?
                    </h2>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed max-w-2xl mx-auto mb-8">
                        We draft custom annotation guidelines for any domain—backed by bilateral NDAs, 99.8% QA accuracy, and pilot turnaround Within 24 Hours.
                    </p>
                    <div>
                        <a href="{{ route('free-trial') }}" class="ind-cta-btn">
                            <span>Start Free Trial</span>
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
