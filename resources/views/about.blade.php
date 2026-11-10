@extends('layouts.app')

@section('title', 'About Us - Marveit AI | Human-in-the-Loop Data Annotation Company')
@section('meta_description', 'Learn about Marveit AI—our mission, multi-stage quality assurance process, NDA-protected operations in Mymensingh, Bangladesh, and our commitment to within 24 hours turnaround.')

@push('styles')
    <style>
        .about-page-bg {
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
            padding-top: 6rem;
        }

        @media (min-width: 768px) {
            .about-page-bg {
                padding-top: 7rem;
            }
        }

        .about-hero-section {
            padding-top: 4rem;
            padding-bottom: 3.5rem;
        }

        @media (min-width: 768px) {
            .about-hero-section {
                padding-top: 5rem;
                padding-bottom: 4.5rem;
            }
        }

        .about-mission-section {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        @media (min-width: 768px) {
            .about-mission-section {
                padding-top: 4.5rem;
                padding-bottom: 4.5rem;
            }
        }

        .about-pillars-section {
            padding-top: 3rem;
            padding-bottom: 3.5rem;
        }

        @media (min-width: 768px) {
            .about-pillars-section {
                padding-top: 4rem;
                padding-bottom: 4.5rem;
            }
        }

        .about-cta-section {
            padding-top: 1.5rem;
            padding-bottom: 5rem;
        }

        .about-metric-card {
            background-color: #ffffff;
            border: 1px solid rgba(226, 232, 240, 0.75);
            border-radius: 1rem;
            padding: 1.35rem 1.25rem;
            box-shadow: 0 2px 8px -2px rgba(15, 23, 42, 0.03);
        }

        .about-profile-card {
            background-color: #ffffff;
            border: 1px solid rgba(226, 232, 240, 0.85);
            border-radius: 1.5rem;
            padding: 2rem;
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.04);
        }

        @media (min-width: 768px) {
            .about-profile-card {
                padding: 2.25rem;
            }
        }

        .about-card {
            background-color: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 1.25rem;
            padding: 2rem;
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

        .about-profile-icon {
            width: 2.5rem;
            height: 2.5rem;
            padding: 0.55rem;
            border-radius: 0.75rem;
            background-color: #dbeafe;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .about-cta-card {
            background-color: #ffffff;
            border: 1px solid rgba(226, 232, 240, 0.85);
            border-radius: 1.5rem;
            padding: 3rem 1.75rem;
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.04);
        }

        @media (min-width: 768px) {
            .about-cta-card {
                padding: 4rem 3rem;
            }
        }

        .about-cta-btn {
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

        .about-cta-btn:hover {
            background-color: #1d4ed8;
            transform: translateY(-2px);
            box-shadow: 0 10px 24px rgba(37, 99, 235, 0.32);
        }
    </style>
@endpush

@section('content')
    <div class="about-page-bg">
        <!-- Hero Section -->
        <section class="about-hero-section border-b border-gray-200/60">
            <div class="container mx-auto px-6">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight mb-5 leading-tight">
                        About Marveit AI: <span class="text-blue-600">Human-in-the-Loop Precision for Production AI</span>
                    </h1>

                    <p class="text-base md:text-lg text-gray-600 leading-relaxed mb-10">
                        Operating from Mymensingh, Bangladesh and partnering with machine learning teams worldwide, Marveit AI builds auditable, high-accuracy training datasets across computer vision, NLP, audio, video, and LiDAR.
                    </p>

                    <!-- Key Metrics Strip -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 max-w-3xl mx-auto">
                        <div class="about-metric-card">
                            <div class="text-2xl md:text-3xl font-extrabold text-blue-600">99.8%</div>
                            <div class="text-xs text-gray-500 font-medium mt-1">Precision Quality SLA</div>
                        </div>
                        <div class="about-metric-card">
                            <div class="text-2xl md:text-3xl font-extrabold text-gray-900">24h</div>
                            <div class="text-xs text-gray-500 font-medium mt-1">Within 24 Hours Turnaround</div>
                        </div>
                        <div class="about-metric-card">
                            <div class="text-2xl md:text-3xl font-extrabold text-blue-600">{{ $teamCount }}</div>
                            <div class="text-xs text-gray-500 font-medium mt-1">Core Specialists &amp; Leads</div>
                        </div>
                        <div class="about-metric-card">
                            <div class="text-2xl md:text-3xl font-extrabold text-gray-900">100%</div>
                            <div class="text-xs text-gray-500 font-medium mt-1">NDA &amp; Client IP Ownership</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Operational Overview -->
        <section class="about-mission-section">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-7 space-y-5">
                        <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 leading-snug">
                            Why AI Teams Choose Marveit for Mission-Critical Ground Truth
                        </h2>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            Machine learning models are only as reliable as the labels they train on. Instead of crowdsourcing to unverified workers, Marveit AI organizes dedicated, calibrated annotation pods led by experienced team leads and senior QA engineers.
                        </p>
                        <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                            Across {{ $serviceCount }} specialized annotation workflows or custom multi-modal labeling schemas, every batch moves through annotator execution, peer review, and senior QA verification—delivered with an accuracy report and backed by a signed mutual NDA.
                        </p>
                    </div>

                    <!-- Company Snapshot Card -->
                    <div class="lg:col-span-5">
                        <div class="about-profile-card space-y-5">
                            <h3 class="text-lg font-bold text-gray-900 border-b border-gray-100 pb-4">
                                Company &amp; Operations Profile
                            </h3>
                            <div class="space-y-4 text-sm">
                                <div class="flex items-start gap-3.5">
                                    <div class="about-profile-icon">
                                        <i data-feather="map-pin" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Office Address</div>
                                        <div class="font-semibold text-gray-900 mt-0.5">Mymensingh, Bangladesh</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3.5">
                                    <div class="about-profile-icon">
                                        <i data-feather="clock" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Response &amp; Pilot SLA</div>
                                        <div class="font-semibold text-gray-900 mt-0.5">Within 24 hours</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3.5">
                                    <div class="about-profile-icon">
                                        <i data-feather="shield" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Security &amp; Confidentiality</div>
                                        <div class="font-semibold text-gray-900 mt-0.5">Mutual NDA, RBAC &amp; Zero Public Model Training</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3.5">
                                    <div class="about-profile-icon">
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
        <section class="about-pillars-section">
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
                    <div class="about-card flex flex-col">
                        <div class="about-icon-box">
                            <i data-feather="check-circle" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Multi-Stage Quality Control</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Every batch undergoes primary annotation, peer consensus review, and senior QA sign-off against your exact edge-case guidelines.
                        </p>
                    </div>

                    <div class="about-card flex flex-col">
                        <div class="about-icon-box">
                            <i data-feather="trending-up" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Pilot First, Then Scale</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            We deliver a labeled pilot sample within 24 hours so you can audit our precision on gold-standard examples before committing.
                        </p>
                    </div>

                    <div class="about-card flex flex-col">
                        <div class="about-icon-box">
                            <i data-feather="users" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Dedicated Domain Pods</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Scale from hundreds of validation frames to millions of production annotations with calibrated teams trained specifically on your ontology.
                        </p>
                    </div>

                    <div class="about-card flex flex-col">
                        <div class="about-icon-box">
                            <i data-feather="lock" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Enterprise Data Isolation</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Bilateral NDA signed upfront, encrypted transfers, strict role-based access control, and optional work directly inside your private VPN.
                        </p>
                    </div>

                    <div class="about-card flex flex-col">
                        <div class="about-icon-box">
                            <i data-feather="sliders" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Seamless Tooling Integration</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            We operate natively in CVAT, Label Studio, Labelbox, V7, SuperAnnotate, Prodigy, Doccano, or your proprietary annotation pipeline.
                        </p>
                    </div>

                    <div class="about-card flex flex-col">
                        <div class="about-icon-box">
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
        <section class="about-cta-section">
            <div class="container mx-auto px-6">
                <div class="about-cta-card text-center max-w-4xl mx-auto">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-4">
                        Ready to Evaluate Our Quality on Your Own Data?
                    </h2>
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed max-w-2xl mx-auto mb-8">
                        Send a small sample and your guidelines. We sign an NDA first and deliver your pilot along with a QA accuracy report within 24 hours.
                    </p>
                    <div>
                        <a href="{{ route('free-trial') }}" class="about-cta-btn">
                            <span>Start Free Trial</span>
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
