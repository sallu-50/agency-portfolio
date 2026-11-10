@extends('layouts.app')

@section('title', 'About Us - Marveit AI | Human-in-the-Loop Data Annotation Company')
@section('meta_description', 'Learn about Marveit AI—our mission, multi-stage quality assurance process, NDA-protected operations in Mymensingh, Bangladesh, and our commitment to within 24 hours turnaround.')

@push('styles')
    <style>
        .about-page-bg {
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
        }

        .about-card {
            background-color: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 1.25rem;
            box-shadow: 0 2px 10px -2px rgba(15, 23, 42, 0.04), 0 1px 3px 0 rgba(15, 23, 42, 0.02);
            transition: all 0.25s ease;
        }

        .about-card:hover {
            background-color: #ffffff;
            border-color: rgba(147, 197, 253, 0.9);
            box-shadow: 0 12px 28px -6px rgba(15, 23, 42, 0.08), 0 4px 10px -2px rgba(15, 23, 42, 0.03);
            transform: translateY(-3px);
        }

        .about-icon-box {
            width: 3rem;
            height: 3rem;
            padding: 0.75rem;
            border-radius: 0.875rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .about-hero-pad {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        @media (min-width: 768px) {
            .about-hero-pad {
                padding-top: 4.5rem;
                padding-bottom: 4rem;
            }
        }
    </style>
@endpush

@section('content')
    <div class="about-page-bg pt-24 md:pt-28">
        <!-- Hero Section -->
        <section class="about-hero-pad border-b border-gray-200/60">
            <div class="container mx-auto px-6">
                <div class="max-w-3xl mx-auto text-center">
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-600 border border-blue-100 mb-5">
                        <i data-feather="compass" class="w-3.5 h-3.5"></i>
                        <span>About Marveit AI</span>
                    </span>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight mb-5 leading-tight">
                        Human-in-the-Loop Precision for <span class="text-blue-600">Production AI</span>
                    </h1>

                    <p class="text-base md:text-lg text-gray-600 leading-relaxed mb-10">
                        Operating from Mymensingh, Bangladesh and partnering with machine learning teams worldwide, Marveit AI builds auditable, high-accuracy training datasets across computer vision, NLP, audio, video, and LiDAR.
                    </p>

                    <!-- Key Metrics Strip -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 max-w-3xl mx-auto">
                        <div class="bg-white rounded-2xl p-4 sm:p-5 border border-gray-200/70 shadow-xs">
                            <div class="text-2xl md:text-3xl font-extrabold text-blue-600">99.8%</div>
                            <div class="text-xs text-gray-500 font-medium mt-1">Precision Quality SLA</div>
                        </div>
                        <div class="bg-white rounded-2xl p-4 sm:p-5 border border-gray-200/70 shadow-xs">
                            <div class="text-2xl md:text-3xl font-extrabold text-gray-900">24h</div>
                            <div class="text-xs text-gray-500 font-medium mt-1">Within 24 Hours Turnaround</div>
                        </div>
                        <div class="bg-white rounded-2xl p-4 sm:p-5 border border-gray-200/70 shadow-xs">
                            <div class="text-2xl md:text-3xl font-extrabold text-blue-600">{{ $teamCount }}</div>
                            <div class="text-xs text-gray-500 font-medium mt-1">Core Specialists &amp; Leads</div>
                        </div>
                        <div class="bg-white rounded-2xl p-4 sm:p-5 border border-gray-200/70 shadow-xs">
                            <div class="text-2xl md:text-3xl font-extrabold text-gray-900">100%</div>
                            <div class="text-xs text-gray-500 font-medium mt-1">NDA &amp; Client IP Ownership</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Operational Overview -->
        <section class="py-16 md:py-20">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-7 space-y-5">
                        <span class="text-xs font-bold uppercase tracking-wider text-blue-600">Our Mission &amp; Standards</span>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 leading-snug">
                            Why AI Teams Choose Marveit for Mission-Critical Ground Truth
                        </h2>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            Machine learning models are only as reliable as the labels they train on. Instead of crowdsourcing to unverified workers, Marveit AI organizes dedicated, calibrated annotation pods led by experienced team leads and senior QA engineers.
                        </p>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            Whether you need {{ $serviceCount }} specialized annotation workflows or a custom multi-modal labeling schema, every batch moves through annotator execution, peer review, and senior QA verification—delivered with an accuracy report and backed by a signed mutual NDA.
                        </p>
                        <div class="pt-2 flex flex-wrap gap-3">
                            <a href="{{ route('team') }}"
                                class="inline-flex items-center gap-2 px-6 py-3 rounded-full text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-md transition">
                                <span>Meet Our Leadership Team</span>
                                <i data-feather="arrow-right" class="w-4 h-4"></i>
                            </a>
                            <a href="{{ route('services.index') }}"
                                class="inline-flex items-center gap-2 px-6 py-3 rounded-full text-sm font-semibold text-gray-700 bg-white border border-gray-200 hover:border-blue-300 hover:text-blue-600 transition">
                                <span>Explore Our Services</span>
                            </a>
                        </div>
                    </div>

                    <!-- Company Snapshot Card -->
                    <div class="lg:col-span-5">
                        <div class="bg-white rounded-3xl border border-gray-200/80 p-7 sm:p-8 shadow-sm space-y-5">
                            <h3 class="text-lg font-bold text-gray-900 border-b border-gray-100 pb-4">
                                Company &amp; Operations Profile
                            </h3>
                            <div class="space-y-4 text-sm">
                                <div class="flex items-start gap-3">
                                    <div class="w-9 h-9 p-2 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0">
                                        <i data-feather="map-pin" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Office Address</div>
                                        <div class="font-semibold text-gray-900 mt-0.5">Mymensingh, Bangladesh</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="w-9 h-9 p-2 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0">
                                        <i data-feather="clock" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Response &amp; Pilot SLA</div>
                                        <div class="font-semibold text-gray-900 mt-0.5">Within 24 hours</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="w-9 h-9 p-2 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center flex-shrink-0">
                                        <i data-feather="shield" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Security &amp; Confidentiality</div>
                                        <div class="font-semibold text-gray-900 mt-0.5">Mutual NDA, RBAC &amp; Zero Public Model Training</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="w-9 h-9 p-2 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0">
                                        <i data-feather="mail" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Direct Contact</div>
                                        <a href="mailto:ebrahim@marveit.com" class="font-semibold text-blue-600 hover:underline mt-0.5 inline-block">ebrahim@marveit.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6 Operational Pillars -->
        <section class="py-12 md:py-16">
            <div class="container mx-auto px-6">
                <div class="max-w-2xl mx-auto text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-3">
                        How We Guarantee Reliable Labels
                    </h2>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                        Accurate labels, predictable delivery, and careful data handling—backed by an auditable process from pilot to full scale.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="about-card p-8 flex flex-col">
                        <div class="about-icon-box bg-blue-100 text-blue-600 mb-6">
                            <i data-feather="check-circle" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Multi-Stage Quality Control</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Every batch undergoes primary annotation, peer consensus review, and senior QA sign-off against your exact edge-case guidelines.
                        </p>
                    </div>

                    <div class="about-card p-8 flex flex-col">
                        <div class="about-icon-box bg-blue-100 text-blue-600 mb-6">
                            <i data-feather="trending-up" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Pilot First, Then Scale</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            We deliver a labeled pilot sample within 24 hours so you can audit our precision on gold-standard examples before committing.
                        </p>
                    </div>

                    <div class="about-card p-8 flex flex-col">
                        <div class="about-icon-box bg-blue-100 text-blue-600 mb-6">
                            <i data-feather="users" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Dedicated Domain Pods</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Scale from hundreds of validation frames to millions of production annotations with calibrated teams trained specifically on your ontology.
                        </p>
                    </div>

                    <div class="about-card p-8 flex flex-col">
                        <div class="about-icon-box bg-blue-100 text-blue-600 mb-6">
                            <i data-feather="lock" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Enterprise Data Isolation</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Bilateral NDA signed upfront, encrypted transfers, strict role-based access control, and optional work directly inside your private VPN.
                        </p>
                    </div>

                    <div class="about-card p-8 flex flex-col">
                        <div class="about-icon-box bg-blue-100 text-blue-600 mb-6">
                            <i data-feather="sliders" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Seamless Tooling Integration</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            We operate natively in CVAT, Label Studio, Labelbox, V7, SuperAnnotate, Prodigy, Doccano, or your proprietary annotation pipeline.
                        </p>
                    </div>

                    <div class="about-card p-8 flex flex-col">
                        <div class="about-icon-box bg-blue-100 text-blue-600 mb-6">
                            <i data-feather="message-square" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Direct Technical Communication</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Work directly with a dedicated project manager via Slack, Teams, or email—with responses within 24 hours and free QA rework if targets miss.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bottom CTA -->
        <section class="py-12 pb-20">
            <div class="container mx-auto px-6">
                <div class="bg-white rounded-3xl border border-gray-200/80 p-8 md:p-12 shadow-sm text-center max-w-4xl mx-auto">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-4">
                        Ready to Evaluate Our Quality on Your Own Data?
                    </h2>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed max-w-2xl mx-auto mb-8">
                        Send a small sample and your guidelines. We sign an NDA first and deliver your pilot along with a QA accuracy report within 24 hours.
                    </p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="{{ route('free-trial') }}"
                            class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-md hover:shadow-lg transition">
                            <span>Start Free Trial</span>
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full text-sm font-semibold text-gray-700 bg-gray-100 hover:bg-gray-200 transition">
                            <span>Contact Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
