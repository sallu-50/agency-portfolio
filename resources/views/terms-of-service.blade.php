@extends('layouts.app')

@section('title', 'Terms of Service - Marveit AI | Enterprise Annotation Standards')
@section('meta_description', 'Review Marveit AI Terms of Service and Master Services Agreement. Transparent deliverables, guaranteed quality SLAs, 100% client IP ownership, mutual NDAs, and secure data handling.')

@section('content')
    <style>
        .pp-page-bg {
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
        }

        .pp-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.05), 0 0 1px 1px rgba(15, 23, 42, 0.02);
            transition: all 0.3s ease;
        }

        .pp-content-card {
            padding: 32px 24px;
        }

        @media (min-width: 640px) {
            .pp-content-card {
                padding: 44px 40px;
            }
        }

        @media (min-width: 1024px) {
            .pp-content-card {
                padding: 52px 48px;
            }
        }

        .pp-toc-link {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 16px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 500;
            color: #475569;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .pp-toc-link:hover {
            color: #0E5EDD;
            background-color: #eff6ff;
            transform: translateX(3px);
        }

        .pp-toc-link.active {
            color: #0E5EDD;
            background-color: #dbeafe;
            font-weight: 700;
        }

        .pp-section {
            scroll-margin-top: 100px;
            padding-top: 2.75rem;
            padding-bottom: 2.75rem;
            margin-bottom: 2rem;
            border-bottom: 1px solid #e2e8f0;
        }

        .pp-section:first-child {
            padding-top: 0.5rem;
        }

        .pp-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0.5rem;
        }

        .pp-section h2 {
            font-size: 1.4rem;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.02em;
            margin-bottom: 1.25rem;
            padding-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .pp-section h3 {
            font-size: 1.05rem;
            font-weight: 700;
            color: #1e293b;
            letter-spacing: -0.015em;
            margin-top: 1.75rem;
            margin-bottom: 0.75rem;
            padding-top: 0.25rem;
        }

        .pp-section p {
            font-size: 15px;
            line-height: 1.85;
            color: #475569;
            margin-bottom: 1.25rem;
            padding: 2px 0;
        }

        .pp-section ul {
            list-style-type: none;
            padding-left: 0;
            margin-top: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .pp-section ul li {
            position: relative;
            padding-left: 2rem;
            padding-top: 0.45rem;
            padding-bottom: 0.45rem;
            font-size: 14.5px;
            line-height: 1.75;
            color: #475569;
            margin-bottom: 0.35rem;
        }

        .pp-section ul li::before {
            content: "✓";
            position: absolute;
            left: 0.25rem;
            top: 0.45rem;
            color: #0E5EDD;
            font-weight: 700;
            font-size: 13.5px;
        }

        .pp-callout {
            border-radius: 14px;
            padding: 20px 24px;
            margin: 1.5rem 0;
            font-size: 14px;
            line-height: 1.75;
        }

        .pp-callout-blue {
            background-color: #eff6ff;
            border: 1px solid #bfdbfe;
            color: #1e40af;
        }

        .pp-callout-emerald {
            background-color: #ecfdf5;
            border: 1px solid #a7f3d0;
            color: #065f46;
        }

        .pp-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 12px;
            border-radius: 9999px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
    </style>

    <div class="pp-page-bg min-h-screen pt-24 md:pt-28 pb-20" style="padding-top: 6.5rem; padding-bottom: 5rem;">
        <div class="container mx-auto px-4 sm:px-6 max-w-7xl">

            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-gray-500 mb-6" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition flex items-center gap-1">
                    <i data-feather="home" class="w-3.5 h-3.5"></i>
                    <span>Home</span>
                </a>
                <i data-feather="chevron-right" class="w-3.5 h-3.5 text-gray-400"></i>
                <span class="text-gray-900 font-semibold">Terms of Service</span>
            </nav>

            <!-- Hero Section with generous padding -->
            <div class="mb-16 md:mb-20 text-center max-w-4xl mx-auto px-2 sm:px-4">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 border border-blue-200/80 text-blue-700 text-xs font-bold uppercase tracking-wider mb-5 shadow-2xs">
                    <i data-feather="file-text" class="w-3.5 h-3.5 text-blue-600"></i>
                    <span>Enterprise Master Services Agreement</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight mb-5">
                    Terms of Service &amp; Engagement Standards
                </h1>
                <p class="text-base sm:text-lg text-gray-600 leading-relaxed max-w-3xl mx-auto px-2">
                    These Terms govern the data annotation, dataset preparation, and human-in-the-loop AI services provided by Marveit AI. We prioritize clear scope, guaranteed accuracy SLAs, 100% client intellectual property ownership, and mutual confidentiality.
                </p>

                <!-- Metadata Row -->
                <div class="mt-6 flex flex-wrap items-center justify-center gap-3 sm:gap-6 text-xs text-gray-500 py-1">
                    <span class="inline-flex items-center gap-1.5 font-medium">
                        <i data-feather="calendar" class="w-3.5 h-3.5 text-gray-400"></i>
                        <span>Effective Date: <strong>January 1, 2026</strong></span>
                    </span>
                    <span class="text-gray-300 hidden sm:inline">•</span>
                    <span class="inline-flex items-center gap-1.5 font-medium">
                        <i data-feather="check-circle" class="w-3.5 h-3.5 text-emerald-500"></i>
                        <span>Version: <strong>2.4 (Enterprise Edition)</strong></span>
                    </span>
                    <span class="text-gray-300 hidden sm:inline">•</span>
                    <span class="inline-flex items-center gap-1.5 font-medium">
                        <i data-feather="shield" class="w-3.5 h-3.5 text-blue-500"></i>
                        <span>Mutual NDA Enforceable</span>
                    </span>
                </div>
            </div>

            <!-- 4 Trust Pillars Cards Grid with spacious padding -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16 md:mb-20">
                <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-2xs flex flex-col gap-2.5 hover:shadow-md transition">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 border border-blue-100 text-blue-600 flex items-center justify-center font-bold">
                        <i data-feather="award" class="w-5 h-5"></i>
                    </div>
                    <div class="font-bold text-gray-900 text-sm pt-1">100% Client IP Ownership</div>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        Clients retain total, exclusive ownership of all uploaded raw files, annotation deliverables, taxonomies, and trained model weights.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-2xs flex flex-col gap-2.5 hover:shadow-md transition">
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-600 flex items-center justify-center font-bold">
                        <i data-feather="check-circle" class="w-5 h-5"></i>
                    </div>
                    <div class="font-bold text-gray-900 text-sm pt-1">Guaranteed Quality SLA</div>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        Every project features agreed precision targets (e.g. 98%+ IoU or F1 score), multi-stage QA sign-offs, and complimentary rework.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-2xs flex flex-col gap-2.5 hover:shadow-md transition">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 border border-indigo-100 text-indigo-600 flex items-center justify-center font-bold">
                        <i data-feather="lock" class="w-5 h-5"></i>
                    </div>
                    <div class="font-bold text-gray-900 text-sm pt-1">Mutual Confidentiality</div>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        Bilateral NDAs execute before guideline exchanges or data transfers. All annotators operate under legally binding NDAs.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-2xs flex flex-col gap-2.5 hover:shadow-md transition">
                    <div class="w-10 h-10 rounded-xl bg-purple-50 border border-purple-100 text-purple-600 flex items-center justify-center font-bold">
                        <i data-feather="zap" class="w-5 h-5"></i>
                    </div>
                    <div class="font-bold text-gray-900 text-sm pt-1">Transparent SOW Terms</div>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        Clear milestone schedules, throughput commitments, unit or hourly pricing, and predictable delivery without hidden surcharges.
                    </p>
                </div>
            </div>

            <!-- Main Content Grid: Sidebar + Legal Text -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">

                <!-- Left Sticky Sidebar (Table of Contents & Quick Contact) -->
                <div class="lg:col-span-4 lg:sticky lg:top-24 space-y-8">

                    <!-- Table of Contents Card -->
                    <div class="pp-card p-6">
                        <div class="flex items-center justify-between pb-3.5 mb-3.5 border-b border-gray-100">
                            <span class="text-xs font-bold uppercase tracking-wider text-gray-500">Table of Contents</span>
                            <span class="text-[11px] font-semibold text-blue-600 bg-blue-50 px-2 py-0.5 rounded">12 Sections</span>
                        </div>
                        <nav class="space-y-1">
                            <a href="#section-1" class="pp-toc-link active">
                                <span class="text-xs font-bold text-gray-400">01.</span>
                                <span>Acceptance &amp; Engagement Framework</span>
                            </a>
                            <a href="#section-2" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">02.</span>
                                <span>Scope of Services &amp; SOWs</span>
                            </a>
                            <a href="#section-3" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">03.</span>
                                <span>Client Data &amp; 100% IP Ownership</span>
                            </a>
                            <a href="#section-4" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">04.</span>
                                <span>Confidentiality &amp; Mutual NDA</span>
                            </a>
                            <a href="#section-5" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">05.</span>
                                <span>Quality SLAs, Audits &amp; Rework</span>
                            </a>
                            <a href="#section-6" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">06.</span>
                                <span>Security, Data Isolation &amp; Cleanroom</span>
                            </a>
                            <a href="#section-7" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">07.</span>
                                <span>Client Responsibilities &amp; Materials</span>
                            </a>
                            <a href="#section-8" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">08.</span>
                                <span>Pricing, Invoicing &amp; Payment</span>
                            </a>
                            <a href="#section-9" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">09.</span>
                                <span>Term, Suspension &amp; Termination</span>
                            </a>
                            <a href="#section-10" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">10.</span>
                                <span>Warranties &amp; Disclaimers</span>
                            </a>
                            <a href="#section-11" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">11.</span>
                                <span>Limitation of Liability &amp; Indemnity</span>
                            </a>
                            <a href="#section-12" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">12.</span>
                                <span>Governing Law &amp; Legal Notices</span>
                            </a>
                        </nav>
                    </div>

                    <!-- Quick NDA Action Box -->
                    <div
                        class="pp-card p-6 bg-white border border-gray-200 shadow-sm hover:shadow-md transition-all relative overflow-hidden"
                        style="margin-top: 2.25rem !important; margin-bottom: 2.25rem !important;">
                        <div class="relative z-10 space-y-3">
                            <div
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold border border-blue-200/80">
                                <i data-feather="check" class="w-3 h-3 text-blue-600"></i>
                                <span>Pre-Project Protocol</span>
                            </div>
                            <h3 class="text-base font-bold text-gray-900 tracking-tight">Need an NDA Signed First?</h3>
                            <p class="text-xs text-gray-600 leading-relaxed">
                                We regularly sign bilateral NDAs with machine learning teams, autonomous driving labs, and healthcare startups prior to viewing guidelines.
                            </p>
                            <div class="pt-1.5 flex flex-col gap-2">
                                <a href="{{ route('free-trial') }}"
                                    class="inline-flex items-center justify-center gap-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-3.5 py-2 rounded-lg transition shadow-xs self-start">
                                    <span>Request a Pilot with NDA</span>
                                    <i data-feather="arrow-right" class="w-3 h-3"></i>
                                </a>
                                <a href="mailto:ebrahim@marveit.com?subject=NDA%20Request%20-%20Data%20Annotation%20Project"
                                    class="inline-flex items-center gap-1.5 text-[11px] font-medium text-gray-500 hover:text-blue-600 transition pt-0.5">
                                    <i data-feather="mail" class="w-3 h-3 text-gray-400"></i>
                                    <span>Send Your Standard NDA Draft</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact & Legal Operations Card -->
                    <div class="pp-card p-6 border-gray-200">
                        <div class="text-xs font-bold uppercase tracking-wider text-gray-500 mb-3.5">Contracts &amp; Legal Operations</div>
                        <div class="space-y-3 text-xs text-gray-600">
                            <div class="flex items-center gap-2.5">
                                <i data-feather="user" class="w-4 h-4 text-blue-600 flex-shrink-0"></i>
                                <span class="font-semibold text-gray-900">Ebrahim Hossain</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <i data-feather="mail" class="w-4 h-4 text-blue-600 flex-shrink-0"></i>
                                <a href="mailto:ebrahim@marveit.com" class="text-blue-600 hover:underline break-all font-medium">ebrahim@marveit.com</a>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <i data-feather="phone" class="w-4 h-4 text-blue-600 flex-shrink-0"></i>
                                <a href="tel:+8801753499696" class="hover:text-gray-900 font-medium">+880 1753 499696</a>
                            </div>
                            <div class="flex items-start gap-2.5 pt-0.5">
                                <i data-feather="map-pin" class="w-4 h-4 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                <span class="leading-relaxed">Mymensingh, Bangladesh</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Main Column: Structured Terms of Service -->
                <div class="lg:col-span-8">
                    <div class="pp-card pp-content-card">

                        <!-- 1. Acceptance & Engagement Framework -->
                        <div id="section-1" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">1</span>
                                <span>Acceptance &amp; Engagement Framework</span>
                            </h2>
                            <p>
                                These Terms of Service (the <strong>"Terms"</strong> or <strong>"Agreement"</strong>) constitute a legally binding agreement entered into by and between <strong>Marveit AI</strong> (<strong>"Company"</strong>, <strong>"we"</strong>, <strong>"us"</strong>, or <strong>"our"</strong>) and the corporate entity, research institution, or individual (<strong>"Client"</strong>, <strong>"you"</strong>, or <strong>"your"</strong>) accessing our website, initiating a free pilot, or engaging us for data annotation and AI workforce services.
                            </p>
                            <p>
                                By accessing our platform, submitting a sample through our free pilot portal, signing a Statement of Work (<strong>"SOW"</strong>), or executing a bilateral Non-Disclosure Agreement (<strong>"NDA"</strong>), you acknowledge that you have read, understood, and agreed to be bound by these Terms and our accompanying <a href="{{ route('privacy-policy') }}" class="text-blue-600 underline font-medium">Privacy Policy</a>.
                            </p>
                            <div class="pp-callout pp-callout-blue">
                                <strong>Enterprise Priority:</strong> If your organization has executed a tailored Master Services Agreement (<strong>"MSA"</strong>) or customized enterprise agreement directly with Marveit AI, the provisions of that specific signed MSA shall supersede any conflicting terms herein.
                            </div>
                        </div>

                        <!-- 2. Scope of Services & SOWs -->
                        <div id="section-2" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">2</span>
                                <span>Scope of Annotation Services &amp; SOWs</span>
                            </h2>
                            <p>
                                Marveit AI provides specialized, human-in-the-loop data labeling, computer vision annotation, natural language processing (NLP) text classification, audio transcription, LiDAR sensor fusion annotation, and tailored dataset curation services (collectively, the <strong>"Services"</strong>).
                            </p>
                            <h3>2.1 Statements of Work (SOW)</h3>
                            <p>
                                Individual engagements are documented through one or more written or digital Statements of Work (SOWs) executed by authorized representatives of both parties. Each SOW typically establishes:
                            </p>
                            <ul>
                                <li><strong>Project Specifications:</strong> Dataset modalities (image, video, text, audio, LiDAR 3D), total unit volume, and deliverable file formats (COCO JSON, YOLO, Pascal VOC, CVAT XML, etc.).</li>
                                <li><strong>Annotation Guidelines:</strong> Labeling taxonomies, class definitions, occlusion rules, and negative class protocols.</li>
                                <li><strong>Delivery Milestones:</strong> Phased batch deliveries, turnaround times, and agreed weekly or monthly throughput.</li>
                                <li><strong>Quality Thresholds:</strong> Quantifiable precision SLAs (e.g. 98%+ IoU, inter-annotator agreement benchmarks).</li>
                                <li><strong>Commercial Terms:</strong> Unit pricing, hourly rates, or milestone fee structures.</li>
                            </ul>
                            <h3>2.2 Platform Compatibility</h3>
                            <p>
                                Unless otherwise specified in an SOW, our workforce performs annotations in industry-standard platforms (such as CVAT, Label Studio, Labelbox, V7, SuperAnnotate, Supervisely, Doccano, Praat) or directly inside the Client’s secure self-hosted environment via VPN or IAM credentials.
                            </p>
                        </div>

                        <!-- 3. Client Data & 100% IP Ownership -->
                        <div id="section-3" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">3</span>
                                <span>Client Data, Taxonomies &amp; 100% IP Ownership</span>
                            </h2>
                            <p>
                                Marveit AI operates strictly as a specialized service provider and data processor. We maintain an unequivocal stance regarding intellectual property ownership:
                            </p>
                            <ul>
                                <li><strong>Client Intellectual Property:</strong> As between Client and Marveit AI, Client retains sole, exclusive, and unencumbered ownership of and all worldwide intellectual property rights in and to all raw datasets, images, videos, audio recordings, documents, annotation taxonomies, guidelines, and proprietary instructions provided to us (collectively, the <strong>"Client Materials"</strong>).</li>
                                <li><strong>Work Product Assignment:</strong> Upon receipt of payment for the corresponding Services, Marveit AI irrevocably assigns and transfers to Client all right, title, and interest worldwide in and to all completed annotations, labeled bounding boxes, segmentation masks, transcribed texts, and deliverable files generated specifically for Client (the <strong>"Deliverables"</strong>).</li>
                                <li><strong>Zero Foundation Model Training:</strong> Under no circumstances will Marveit AI use, train, distill, benchmark, or incorporate Client Materials or Deliverables into public foundation models, commercial datasets, or third-party AI systems.</li>
                                <li><strong>Limited License to Marveit AI:</strong> Client grants Marveit AI only a temporary, revocable, non-exclusive, non-transferable license to access and process Client Materials solely to the extent necessary to perform the Services under the applicable SOW.</li>
                            </ul>
                            <div class="pp-callout pp-callout-emerald">
                                <strong>IP Guarantee:</strong> You own your datasets from day one. Marveit AI claims zero ownership or residual rights over your training data or trained model weights.
                            </div>
                        </div>

                        <!-- 4. Confidentiality & Mutual NDA -->
                        <div id="section-4" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">4</span>
                                <span>Confidentiality &amp; Mutual Non-Disclosure</span>
                            </h2>
                            <p>
                                Due to the sensitive nature of pre-production AI architectures, proprietary sensor recordings, medical scans, and financial records, both parties agree to maintain strict confidentiality:
                            </p>
                            <h3>4.1 Definition of Confidential Information</h3>
                            <p>
                                <strong>"Confidential Information"</strong> means all non-public information disclosed by one party (<strong>"Disclosing Party"</strong>) to the other (<strong>"Receiving Party"</strong>), including Client Materials, Deliverables, annotation guidelines, unreleased model performance metrics, technical architecture, business strategies, and project pricing.
                            </p>
                            <h3>4.2 Obligations of Confidentiality</h3>
                            <ul>
                                <li>The Receiving Party shall exercise at least the same degree of care it uses to protect its own sensitive information (and not less than a reasonable standard of care).</li>
                                <li>Access is restricted exclusively to authorized annotators, QA leads, and project managers who have executed legally binding confidentiality agreements with terms at least as restrictive as those herein.</li>
                                <li>Confidential Information shall never be disclosed to third parties without prior written consent from the Disclosing Party.</li>
                            </ul>
                            <h3>4.3 Mutual NDA Precedence</h3>
                            <p>
                                If the parties have executed a standalone bilateral Non-Disclosure Agreement (NDA), that NDA’s terms shall govern all confidentiality obligations and remain in full force throughout the life of the project.
                            </p>
                        </div>

                        <!-- 5. Quality SLAs, Audits & Rework -->
                        <div id="section-5" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">5</span>
                                <span>Quality SLAs, Audits &amp; Complimentary Rework</span>
                            </h2>
                            <p>
                                Producing pixel-accurate, machine-learnable ground truth requires systematic verification. Every project is anchored by quantifiable Service Level Agreements:
                            </p>
                            <h3>5.1 Multi-Stage Quality Control Protocol</h3>
                            <ul>
                                <li><strong>Annotator Verification:</strong> Work executed strictly by calibrated labeling specialists who have passed benchmark onboarding tests on Client's gold-standard samples.</li>
                                <li><strong>Peer Review &amp; Senior QA:</strong> Statistical sample auditing (minimum 10% to 100% depending on SOW specification) conducted by senior quality assurance leads.</li>
                                <li><strong>Accuracy Reporting:</strong> Each batch delivery is accompanied by an audit summary detailing class distribution, IoU compliance, and error classifications.</li>
                            </ul>
                            <h3>5.2 Acceptance &amp; Review Window</h3>
                            <p>
                                Upon receipt of any deliverable batch, Client shall have seven (7) business days (or such other period specified in the SOW, the <strong>"Review Period"</strong>) to inspect and validate the Deliverables against the agreed Guidelines and accuracy thresholds.
                            </p>
                            <h3>5.3 Free Rework Commitment</h3>
                            <p>
                                If Client identifies bona fide non-conformances with the agreed SOW Guidelines exceeding the agreed error tolerance during the Review Period, Client shall provide written notice detailing the discrepancies. Marveit AI will re-annotate, correct, and re-deliver the affected batch at zero additional cost within three (3) to five (5) business days.
                            </p>
                        </div>

                        <!-- 6. Security, Data Isolation & Cleanroom -->
                        <div id="section-6" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">6</span>
                                <span>Security, Data Isolation &amp; Cleanroom Environments</span>
                            </h2>
                            <p>
                                Marveit AI enforces rigorous technical, physical, and administrative safeguards to protect client datasets throughout their lifecycle:
                            </p>
                            <ul>
                                <li><strong>Encryption Standards:</strong> Data in transit is protected using TLS 1.3 cryptographic protocols. Data stored on managed storage volumes is secured with AES-256 encryption.</li>
                                <li><strong>Role-Based Access Control (RBAC):</strong> Annotators access only the specific dataset partitions assigned to their task queue via principle of least privilege.</li>
                                <li><strong>Direct Cloud Processing:</strong> For enterprise engagements requiring zero-transfer data handling, our annotators operate directly within Client’s AWS S3, Google Cloud Storage, or Azure Blob buckets via signed URLs or client-controlled IAM roles.</li>
                                <li><strong>Cleanroom Protocols:</strong> Restricted facility terminals, disabled local USB storage, screen watermarking, and continuous activity audit logging for highly confidential projects.</li>
                                <li><strong>Secure Data Sanitization:</strong> Following Client acceptance or project conclusion, all cached local files and temporary working volumes are wiped using cryptographically secure erasure methods (NIST SP 800-88 compliant).</li>
                            </ul>
                        </div>

                        <!-- 7. Client Responsibilities & Materials -->
                        <div id="section-7" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">7</span>
                                <span>Client Responsibilities &amp; Lawful Data Standards</span>
                            </h2>
                            <p>
                                To enable predictable delivery and maintain compliance, Client acknowledges the following responsibilities:
                            </p>
                            <ul>
                                <li><strong>Clear Annotation Guidelines:</strong> Client must provide comprehensive labeling instructions, class taxonomy documentation, visual edge-case examples, and acceptable tolerances. Delays in guideline clarification may extend delivery timelines proportionally.</li>
                                <li><strong>Lawful Authority &amp; Consent:</strong> Client represents and warrants that it owns or possesses all necessary legal rights, licenses, and consents to collect, store, and provide the Client Materials to Marveit AI for annotation purposes.</li>
                                <li><strong>Prohibited Content:</strong> Client shall not knowingly transmit to Marveit AI any materials that contain unlawful content, malware, spyware, non-consensual exploitative imagery, or data that violates applicable export control laws without prior disclosure.</li>
                                <li><strong>PII &amp; De-Identification:</strong> Unless specifically agreed in an SOW under appropriate Business Associate Agreements (BAA) or GDPR Data Processing Addenda (DPA), Client agrees to de-identify, blur, or pseudonymize sensitive personally identifiable information (PII) before transmission.</li>
                            </ul>
                        </div>

                        <!-- 8. Pricing, Invoicing & Payment -->
                        <div id="section-8" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">8</span>
                                <span>Pricing, Billing, Invoicing &amp; Payment Terms</span>
                            </h2>
                            <p>
                                Commercial terms are outlined in each individual SOW or engagement agreement:
                            </p>
                            <ul>
                                <li><strong>Pricing Models:</strong> Engagements may be structured on a per-unit basis (e.g., per annotated bounding box, per image segmentation, per audio minute), an hourly rate for dedicated annotator pods, or milestone-based fixed fees.</li>
                                <li><strong>Invoicing Schedules:</strong> Invoices are issued in accordance with the schedule specified in the SOW (typically upon batch delivery, monthly in arrears, or via milestone draws).</li>
                                <li><strong>Payment Terms:</strong> Invoices are payable within fifteen (15) to thirty (30) calendar days from the invoice date (Net 15 / Net 30 as specified in the SOW), payable in USD, EUR, or GBP via wire transfer, ACH, or major international bank cards.</li>
                                <li><strong>Taxes:</strong> All quoted fees are exclusive of applicable value-added taxes (VAT), sales taxes, or withholding taxes, which shall be the responsibility of Client unless valid exemption documentation is provided.</li>
                            </ul>
                        </div>

                        <!-- 9. Term, Suspension & Termination -->
                        <div id="section-9" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">9</span>
                                <span>Term, Suspension &amp; Orderly Termination</span>
                            </h2>
                            <p>
                                These Terms remain effective from the date of first access or SOW execution until terminated in accordance with this Section:
                            </p>
                            <ul>
                                <li><strong>Termination for Convenience:</strong> Unless otherwise specified in an SOW, either party may terminate an ongoing SOW for convenience upon thirty (30) calendar days' written notice to the other party. Client shall pay for all verified Deliverables completed up to the effective termination date.</li>
                                <li><strong>Termination for Cause:</strong> Either party may terminate an SOW immediately upon written notice if the other party commits a material breach of these Terms and fails to cure such breach within fourteen (14) calendar days of receiving written notice.</li>
                                <li><strong>Orderly Handover &amp; Deletion:</strong> Upon termination, Marveit AI will deliver all completed Work Product to Client and, within thirty (30) days, securely delete all remaining Client Materials from our systems, certifying completion upon request.</li>
                                <li><strong>Survival:</strong> Sections 3 (IP Ownership), 4 (Confidentiality), 8 (Payment for completed work), 10 (Warranties), 11 (Liability), and 12 (Governing Law) shall survive termination.</li>
                            </ul>
                        </div>

                        <!-- 10. Warranties & Disclaimers -->
                        <div id="section-10" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">10</span>
                                <span>Warranties &amp; Professional Disclaimers</span>
                            </h2>
                            <h3>10.1 Marveit AI Warranties</h3>
                            <p>
                                We warrant that: (a) we will perform all Services in a professional, workmanlike manner in accordance with industry standards and the applicable SOW; (b) our personnel are properly trained and vetted; and (c) the Deliverables, to our knowledge and excluding Client Materials, do not infringe any third-party intellectual property rights.
                            </p>
                            <h3>10.2 Warranty Disclaimers</h3>
                            <p>
                                Except as expressly stated in an SOW, the Services and Deliverables are provided on an "as-is" and "as-available" basis. Marveit AI makes no representations regarding the commercial success, algorithmic accuracy, or production viability of downstream machine learning models trained on the Deliverables. Client is solely responsible for determining whether the Deliverables meet the operational requirements of Client's AI systems.
                            </p>
                        </div>

                        <!-- 11. Limitation of Liability & Indemnity -->
                        <div id="section-11" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">11</span>
                                <span>Limitation of Liability &amp; Indemnification</span>
                            </h2>
                            <h3>11.1 Consequential Damages Waiver</h3>
                            <p>
                                To the maximum extent permitted by applicable law, neither party shall be liable to the other for any indirect, incidental, consequential, special, or punitive damages, including loss of profits, data, goodwill, or business interruption, arising out of or in connection with the Services, even if advised of the possibility of such damages.
                            </p>
                            <h3>11.2 Aggregate Liability Cap</h3>
                            <p>
                                Except for breaches of Section 4 (Confidentiality) or indemnification obligations, each party’s total aggregate liability arising out of or related to these Terms or any applicable SOW shall be limited to the total fees actually paid or payable by Client to Marveit AI under the specific SOW giving rise to the claim during the twelve (12) months preceding the incident.
                            </p>
                            <h3>11.3 Mutual Indemnification</h3>
                            <p>
                                Each party agrees to indemnify, defend, and hold harmless the other party from and against third-party claims, damages, liabilities, and expenses arising out of any material breach of this Agreement, gross negligence, or willful misconduct.
                            </p>
                        </div>

                        <!-- 12. Governing Law & Legal Notices -->
                        <div id="section-12" class="pp-section">
                            <h2>
                                <span class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center text-sm font-extrabold shrink-0">12</span>
                                <span>Governing Law, Dispute Resolution &amp; Notices</span>
                            </h2>
                            <p>
                                These Terms shall be governed by and construed in accordance with the laws applicable to international commercial service agreements, without regard to conflict of law principles.
                            </p>
                            <h3>12.1 Dispute Escalation &amp; Good Faith Negotiations</h3>
                            <p>
                                In the event of any controversy, claim, or dispute arising out of or relating to these Terms, the parties agree to first attempt in good faith to resolve the dispute through direct escalation to executive leadership before initiating formal proceedings.
                            </p>
                            <h3>12.2 Legal Notices &amp; Contact Information</h3>
                            <p>
                                Official legal notices, SOW amendment requests, or contract inquiries should be transmitted in writing to:
                            </p>
                            <div class="pp-callout pp-callout-blue">
                                <p class="font-bold text-gray-900 mb-1">Marveit AI Legal &amp; Commercial Operations</p>
                                <p class="text-xs text-gray-700 leading-relaxed mb-0">
                                    Attention: Ebrahim Hossain (Operations Director)<br>
                                    Email: <a href="mailto:ebrahim@marveit.com" class="text-blue-600 underline font-semibold">ebrahim@marveit.com</a><br>
                                    Phone / WhatsApp: <a href="tel:+8801753499696" class="text-blue-600 font-semibold">+880 1753 499696</a><br>
                                    Office Address: Mymensingh, Bangladesh
                                </p>
                            </div>
                            <div class="mt-8 pt-6 border-t border-gray-100 flex flex-wrap items-center justify-between gap-4">
                                <div>
                                    <h4 class="font-bold text-gray-900 text-sm">Ready to execute an SOW or mutual NDA?</h4>
                                    <p class="text-xs text-gray-500">Contact our solutions team to define guidelines and launch your custom pilot.</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="{{ route('free-trial') }}"
                                        class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition shadow-md">
                                        <span>Start Free Trial Pilot</span>
                                        <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                                    </a>
                                    <a href="{{ route('contact') }}"
                                        class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-xs font-bold px-4 py-2.5 rounded-xl transition">
                                        <span>Talk to Sales</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof feather !== 'undefined') {
                feather.replace();
            }

            // Smooth scroll and active link highlighting on scroll
            const tocLinks = document.querySelectorAll('.pp-toc-link');
            const sections = document.querySelectorAll('.pp-section');

            function highlightNav() {
                let scrollY = window.pageYOffset;

                sections.forEach(function (current) {
                    const sectionHeight = current.offsetHeight;
                    const sectionTop = current.offsetTop - 140;
                    const sectionId = current.getAttribute('id');

                    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                        tocLinks.forEach(function (link) {
                            link.classList.remove('active');
                            if (link.getAttribute('href') === '#' + sectionId) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }

            window.addEventListener('scroll', highlightNav, { passive: true });

            // Click handling for smooth scrolling
            tocLinks.forEach(function (link) {
                link.addEventListener('click', function (e) {
                    const targetId = this.getAttribute('href');
                    if (targetId && targetId.startsWith('#')) {
                        const targetElem = document.querySelector(targetId);
                        if (targetElem) {
                            e.preventDefault();
                            window.scrollTo({
                                top: targetElem.offsetTop - 95,
                                behavior: 'smooth'
                            });

                            tocLinks.forEach(function (l) { l.classList.remove('active'); });
                            this.classList.add('active');
                        }
                    }
                });
            });
        });
    </script>
@endpush
