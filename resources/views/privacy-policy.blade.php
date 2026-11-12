@extends('layouts.app')

@section('title', 'Privacy Policy & Dataset Protection - Marveit AI')
@section('meta_description', 'Read Marveit AI\'s Privacy Policy and client data protection standards. We guarantee 100% client IP ownership, zero public model training, mutual NDAs, and AES-256 data isolation.')

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
                <span class="text-gray-900 font-semibold">Privacy Policy</span>
            </nav>

            <!-- Hero Section with generous padding -->
            <div class="mb-16 md:mb-20 text-center max-w-4xl mx-auto px-2 sm:px-4">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 border border-blue-200/80 text-blue-700 text-xs font-bold uppercase tracking-wider mb-5 shadow-2xs">
                    <i data-feather="shield" class="w-3.5 h-3.5 text-blue-600"></i>
                    <span>Enterprise Data Confidentiality &amp; Privacy</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight mb-5">
                    Privacy Policy &amp; Data Protection
                </h1>
                <p class="text-base sm:text-lg text-gray-600 leading-relaxed max-w-3xl mx-auto px-2">
                    At Marveit AI, data security, client confidentiality, and intellectual property protection are the
                    foundation of everything we build. Here is exactly how we handle your confidential datasets, test
                    samples, and personal information.
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
                        <i data-feather="lock" class="w-3.5 h-3.5 text-blue-500"></i>
                        <span>Mutual NDA Standard</span>
                    </span>
                </div>
            </div>

            <!-- 4 Trust Pillars Cards Grid with spacious padding -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16 md:mb-20">
                <div
                    class="bg-white p-6 rounded-2xl border border-gray-200 shadow-2xs flex flex-col gap-2.5 hover:shadow-md transition">
                    <div
                        class="w-10 h-10 rounded-xl bg-blue-50 border border-blue-100 text-blue-600 flex items-center justify-center font-bold">
                        <i data-feather="award" class="w-5 h-5"></i>
                    </div>
                    <div class="font-bold text-gray-900 text-sm pt-1">100% Client IP Ownership</div>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        You retain full, exclusive intellectual property rights to your raw training samples, custom label
                        taxonomies, and completed annotations.
                    </p>
                </div>

                <div
                    class="bg-white p-6 rounded-2xl border border-gray-200 shadow-2xs flex flex-col gap-2.5 hover:shadow-md transition">
                    <div
                        class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-600 flex items-center justify-center font-bold">
                        <i data-feather="slash" class="w-5 h-5"></i>
                    </div>
                    <div class="font-bold text-gray-900 text-sm pt-1">Zero Public Model Training</div>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        We never feed, train, benchmark, or distill your data into foundation models, public datasets, or
                        third-party AI systems.
                    </p>
                </div>

                <div
                    class="bg-white p-6 rounded-2xl border border-gray-200 shadow-2xs flex flex-col gap-2.5 hover:shadow-md transition">
                    <div
                        class="w-10 h-10 rounded-xl bg-indigo-50 border border-indigo-100 text-indigo-600 flex items-center justify-center font-bold">
                        <i data-feather="file-text" class="w-5 h-5"></i>
                    </div>
                    <div class="font-bold text-gray-900 text-sm pt-1">Mutual NDA Guarantee</div>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        We execute bilateral Non-Disclosure Agreements prior to file transfers. Every annotator and project
                        lead is bound by strict NDAs.
                    </p>
                </div>

                <div
                    class="bg-white p-6 rounded-2xl border border-gray-200 shadow-2xs flex flex-col gap-2.5 hover:shadow-md transition">
                    <div
                        class="w-10 h-10 rounded-xl bg-purple-50 border border-purple-100 text-purple-600 flex items-center justify-center font-bold">
                        <i data-feather="server" class="w-5 h-5"></i>
                    </div>
                    <div class="font-bold text-gray-900 text-sm pt-1">AES-256 &amp; Direct Cloud</div>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        Encrypted storage at rest and in transit. Option to label directly inside your own private cloud
                        bucket without raw data leaving your VPC.
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
                            <span class="text-xs text-blue-600 font-semibold">12 Sections</span>
                        </div>
                        <nav class="space-y-1">
                            <a href="#section-1" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">01.</span>
                                <span>Scope &amp; Data Roles</span>
                            </a>
                            <a href="#section-2" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">02.</span>
                                <span>Zero Model Training Guarantee</span>
                            </a>
                            <a href="#section-3" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">03.</span>
                                <span>Non-Disclosure Agreements (NDAs)</span>
                            </a>
                            <a href="#section-4" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">04.</span>
                                <span>Information We Collect</span>
                            </a>
                            <a href="#section-5" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">05.</span>
                                <span>How We Use Your Data</span>
                            </a>
                            <a href="#section-6" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">06.</span>
                                <span>Security &amp; Storage Architecture</span>
                            </a>
                            <a href="#section-7" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">07.</span>
                                <span>Data Retention &amp; Deletion</span>
                            </a>
                            <a href="#section-8" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">08.</span>
                                <span>Annotator Vetting &amp; Cleanroom</span>
                            </a>
                            <a href="#section-9" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">09.</span>
                                <span>Subprocessors &amp; Cloud Partners</span>
                            </a>
                            <a href="#section-10" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">10.</span>
                                <span>GDPR, CCPA &amp; Privacy Rights</span>
                            </a>
                            <a href="#section-11" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">11.</span>
                                <span>Cookies &amp; Tracking Technologies</span>
                            </a>
                            <a href="#section-12" class="pp-toc-link">
                                <span class="text-xs font-bold text-gray-400">12.</span>
                                <span>Contact DPO &amp; Revisions</span>
                            </a>
                        </nav>
                    </div>


                    <div class="pp-card p-6 bg-white border border-gray-200 shadow-sm hover:shadow-md transition-all relative overflow-hidden"
                        style="margin-top: 2.25rem !important; margin-bottom: 2.25rem !important;">
                        <div class="relative z-10 space-y-6">
                            <div
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold border border-blue-200/80">
                                <i data-feather="check" class="w-3 h-3 text-blue-600"></i>
                                <span>Pre-Project Protocol</span>
                            </div>
                            <h3 class="text-base font-bold text-gray-900 tracking-tight">Need an NDA Signed First?</h3>
                            <p class="text-xs text-gray-600 leading-relaxed">
                                We regularly sign bilateral NDAs with machine learning teams, autonomous driving labs, and
                                healthcare startups prior to viewing guidelines.
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

                    <!-- Contact & DPO Card -->
                    <div class="pp-card p-6 border-gray-200">
                        <div class="text-xs font-bold uppercase tracking-wider text-gray-500 mb-3.5">Data Protection Officer
                        </div>
                        <div class="space-y-3 text-xs text-gray-600">
                            <div class="flex items-center gap-2.5">
                                <i data-feather="user" class="w-4 h-4 text-blue-600 flex-shrink-0"></i>
                                <span class="font-semibold text-gray-900">Ebrahim Hossain</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <i data-feather="mail" class="w-4 h-4 text-blue-600 flex-shrink-0"></i>
                                <a href="mailto:ebrahim@marveit.com"
                                    class="text-blue-600 hover:underline break-all font-medium">ebrahim@marveit.com</a>
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

                <!-- Right Column: Full Comprehensive Policy with enhanced padding -->
                <div class="lg:col-span-8">
                    <div class="pp-card pp-content-card">

                        <!-- Section 1 -->
                        <div id="section-1" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">01</span>
                                Scope &amp; Our Role as a Data Processor
                            </h2>
                            <p>
                                This Privacy Policy explains how <strong>Marveit AI</strong> ("we", "us", "our", or
                                "Marveit") collects, processes, protects, and handles personal data and client datasets when
                                you visit our website (<strong>marveit.com</strong>), submit requests for quotes, pilot
                                evaluations, or engage our human-in-the-loop data annotation, synthetic dataset generation,
                                and model quality assurance services.
                            </p>
                            <p>
                                When delivering professional data annotation services, Marveit AI fundamentally operates in
                                two distinct capacities:
                            </p>
                            <ul>
                                <li><strong>Data Controller:</strong> For standard business information provided by visitors
                                    and clients (e.g., your name, company email address, billing information, job title, and
                                    communication history).</li>
                                <li><strong>Data Processor / Service Provider:</strong> For all client-supplied machine
                                    learning training datasets (e.g., imagery, bounding boxes, video frames, LiDAR point
                                    clouds, NLP text corpora, audio recordings, medical annotations, and guideline
                                    documentation). In this role, we process data solely under your instructions and in
                                    accordance with signed Master Service Agreements (MSA) and Data Processing Agreements
                                    (DPA).</li>
                            </ul>
                            <div class="pp-callout pp-callout-blue">
                                <strong>Key Principle:</strong> Marveit AI does not claim any ownership rights over your
                                proprietary data. You retain full intellectual property ownership, copyright, and control of
                                all assets transferred to our systems.
                            </div>
                        </div>

                        <!-- Section 2 -->
                        <div id="section-2" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">02</span>
                                Client Datasets &amp; Strict Zero-Model-Training Guarantee
                            </h2>
                            <p>
                                The integrity and exclusivity of machine learning datasets represent our clients' primary
                                competitive advantage. We uphold a strict, binding policy regarding client assets:
                            </p>
                            <ul>
                                <li><strong>Zero Public Model Training:</strong> Marveit AI will <em>never</em> use your raw
                                    images, videos, audio samples, documents, polygon coordinates, semantic segmentation
                                    masks, or labeling taxonomies to pre-train, fine-tune, or benchmark our own internal
                                    foundation models, open-source models, or any third-party public AI services (such as
                                    OpenAI, Anthropic, or Google Gemini).</li>
                                <li><strong>No Commercial Resale or Aggregation:</strong> We never bundle, redistribute,
                                    resell, or license customer datasets or derived annotations to any third party under any
                                    circumstances.</li>
                                <li><strong>Work Product Assignment:</strong> All annotations, classification tags,
                                    segmentation masks, transcription transcripts, and accuracy QA reports generated by
                                    Marveit AI annotators are deemed "work made for hire" and belong exclusively to the
                                    client immediately upon completion.</li>
                            </ul>
                            <div class="pp-callout pp-callout-emerald">
                                <strong>Direct Cloud Labeling Option:</strong> If your company's data governance policy
                                prohibits downloading datasets outside of your infrastructure, our annotation teams can work
                                directly inside your cloud environment (AWS S3, Google Cloud Storage, Azure Blob) via
                                customer-managed labeling platforms (e.g. CVAT, Labelbox, V7, Roboflow, Kili).
                            </div>
                        </div>

                        <!-- Section 3 -->
                        <div id="section-3" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">03</span>
                                Non-Disclosure Agreements (NDAs) &amp; Confidentiality
                            </h2>
                            <p>
                                We treat all business concepts, pilot samples, data guidelines, and edge-case examples as
                                strictly confidential information:
                            </p>
                            <ul>
                                <li><strong>Pre-Transfer Bilateral NDA:</strong> Before you upload or transfer any sample
                                    files or sensitive project documentation, we are prepared to execute our standard
                                    Bilateral NDA or review and sign your organization’s mutual confidentiality agreement.
                                </li>
                                <li><strong>Internal Annotator NDAs:</strong> Every annotation specialist, quality assurance
                                    lead, and project manager at Marveit AI undergoes background verification and signs
                                    legally binding non-disclosure agreements prior to accessing client workstations.</li>
                                <li><strong>Cleanroom Annotation Workflows:</strong> On request for sensitive projects
                                    (e.g., medical, autonomous driving prototypes, financial NLP), workstations operate
                                    under strict cleanroom conditions: local file downloads are disabled, clipboard sharing
                                    is blocked, and access is monitored through audited jump hosts.</li>
                            </ul>
                        </div>

                        <!-- Section 4 -->
                        <div id="section-4" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">04</span>
                                Information We Collect
                            </h2>
                            <p>
                                We collect information that you directly provide to us, as well as technical usage
                                information generated during your visits:
                            </p>
                            <h3>A. Information You Voluntarily Provide</h3>
                            <ul>
                                <li><strong>Contact Information:</strong> Full name, business email address, company name,
                                    country, and telephone/WhatsApp numbers when submitting inquiry forms or booking
                                    consultations.</li>
                                <li><strong>Project Specifications:</strong> Data labeling requirements, target dataset
                                    volume, label schemas, project timelines, guideline documents (PDF, DOCX), and test
                                    samples uploaded via our Free Trial or Contact forms.</li>
                                <li><strong>Direct Communications:</strong> Email exchanges, Slack or Microsoft Teams
                                    messages, and video conference notes conducted during project scoping and milestone
                                    reviews.</li>
                            </ul>
                            <h3>B. Information Collected Automatically</h3>
                            <ul>
                                <li><strong>Technical &amp; Log Data:</strong> Internet Protocol (IP) address, browser type,
                                    device identifiers, operating system version, referring URLs, and timestamps.</li>
                                <li><strong>Usage Metrics:</strong> Pages visited, dwell time, and interaction clicks to
                                    help us optimize website responsiveness and identify broken links.</li>
                            </ul>
                        </div>

                        <!-- Section 5 -->
                        <div id="section-5" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">05</span>
                                How We Use &amp; Process Your Data
                            </h2>
                            <p>We process your data exclusively for lawful business and engineering purposes:</p>
                            <ul>
                                <li><strong>Fulfilling Free Pilots &amp; Service Deliveries:</strong> To review sample data,
                                    prepare customized benchmark pilots, conduct QA checks, and generate annotated
                                    deliverable archives.</li>
                                <li><strong>Communication &amp; Support:</strong> To reply to questions within 24
                                    hours, schedule technical discovery calls, and share progress updates via direct
                                    communication channels.</li>
                                <li><strong>Custom Quotations &amp; Billing:</strong> To calculate transparent cost
                                    structures based on hourly or per-task pricing, generate invoices, and manage service
                                    agreements.</li>
                                <li><strong>Security &amp; Abuse Prevention:</strong> To safeguard our website and data
                                    servers against distributed denial-of-service (DDoS) attacks, automated spam
                                    submissions, and unauthorized system access.</li>
                            </ul>
                        </div>

                        <!-- Section 6 -->
                        <div id="section-6" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">06</span>
                                Security Architecture &amp; Storage Isolation
                            </h2>
                            <p>
                                Marveit AI applies defense-in-depth technical and organizational controls to protect data
                                from unauthorized access, loss, or alteration:
                            </p>
                            <ul>
                                <li><strong>Encryption in Transit:</strong> All website traffic, API calls, and pilot file
                                    uploads are encrypted using Transport Layer Security (TLS 1.3 / HTTPS) with modern
                                    cipher suites.</li>
                                <li><strong>Encryption at Rest:</strong> Temporary storage buckets and staging databases
                                    apply industry-standard AES-256 bit encryption.</li>
                                <li><strong>Tenant &amp; Project Isolation:</strong> Client datasets are segregated into
                                    isolated project directories with role-based access control (RBAC). Annotators are
                                    granted access strictly to assigned batches and cannot browse other clients'
                                    repositories.</li>
                                <li><strong>Vulnerability Management:</strong> Continuous dependency scanning, regular
                                    security patch cycles, and strict principle-of-least-privilege access across all
                                    internal infrastructure.</li>
                            </ul>
                        </div>

                        <!-- Section 7 -->
                        <div id="section-7" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">07</span>
                                Data Retention &amp; Certified Purge Protocols
                            </h2>
                            <p>
                                We keep your data only for as long as necessary to complete agreed milestones or fulfill
                                legal and financial accounting requirements:
                            </p>
                            <ul>
                                <li><strong>Free Benchmark Pilot Samples:</strong> Unless an ongoing production contract is
                                    executed, raw pilot sample files and output labels are automatically purged from our
                                    staging servers within <strong>30 days</strong> of pilot delivery.</li>
                                <li><strong>Active Client Projects:</strong> Datasets are retained for the duration
                                    specified in the client Master Service Agreement. We offer an optional 14-day
                                    post-delivery grace period so you can verify accuracy and request revisions before final
                                    archival deletion.</li>
                                <li><strong>On-Demand Certified Destruction:</strong> Upon written request from your
                                    designated project lead, Marveit AI will perform cryptographically verified file
                                    deletion across all active disks and issue a formal Certificate of Data Destruction.
                                </li>
                                <li><strong>Business Inquiries &amp; CRM:</strong> Basic business contact records are stored
                                    for 24 months to maintain commercial correspondence history unless deletion is requested
                                    earlier.</li>
                            </ul>
                        </div>

                        <!-- Section 8 -->
                        <div id="section-8" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">08</span>
                                Annotator Vetting &amp; Cleanroom Operations
                            </h2>
                            <p>
                                Because human judgment is at the core of high-accuracy data labeling, our human personnel
                                workflows are rigorously governed:
                            </p>
                            <ul>
                                <li><strong>Identity &amp; Background Checks:</strong> Every full-time annotator and
                                    contractor undergoes verified ID checks and criminal background reviews before joining
                                    client projects.</li>
                                <li><strong>Access Logging:</strong> Access to labeling tools is tracked via individual
                                    credentials with multi-factor authentication (MFA) enabled.</li>
                                <li><strong>Screen &amp; Peripheral Controls:</strong> Dedicated annotation facilities
                                    restrict external storage devices (USB flash drives, portable disks) and apply endpoint
                                    protection to prevent unauthorized data exfiltration.</li>
                            </ul>
                        </div>

                        <!-- Section 9 -->
                        <div id="section-9" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">09</span>
                                Subprocessors &amp; Cloud Infrastructure Partners
                            </h2>
                            <p>
                                To maintain high-availability web services, secure communications, and robust
                                infrastructure, we partner with industry-leading third-party service providers who comply
                                with GDPR, SOC 2, or ISO 27001 standards:
                            </p>
                            <ul>
                                <li><strong>Cloud Hosting &amp; Compute:</strong> Amazon Web Services (AWS), Google Cloud
                                    Platform (GCP), DigitalOcean, or customer-designated VPC environments.</li>
                                <li><strong>Email &amp; Collaboration:</strong> Google Workspace, Slack, Microsoft Teams,
                                    and WhatsApp Business for client communication and file coordination.</li>
                                <li><strong>Security &amp; CDN:</strong> Cloudflare for DNS management, SSL encryption
                                    termination, and DDoS mitigation.</li>
                            </ul>
                            <p>
                                Every subprocessor engaged by Marveit AI is bound by comprehensive Data Processing
                                Agreements ensuring equivalent privacy protection standards.
                            </p>
                        </div>

                        <!-- Section 10 -->
                        <div id="section-10" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">10</span>
                                GDPR, CCPA/CPRA &amp; International Privacy Rights
                            </h2>
                            <p>
                                Regardless of your geographical location (European Economic Area, United Kingdom, United
                                States, Canada, Australia, or Asia-Pacific), we respect your fundamental privacy rights
                                under regulations such as the General Data Protection Regulation (GDPR) and California
                                Consumer Privacy Act (CCPA/CPRA):
                            </p>
                            <ul>
                                <li><strong>Right to Access:</strong> You may request a copy of the personal information we
                                    hold concerning you.</li>
                                <li><strong>Right to Rectification:</strong> You may request correction of any inaccurate or
                                    incomplete personal data.</li>
                                <li><strong>Right to Erasure ("Right to be Forgotten"):</strong> You may request that we
                                    delete your personal contact records and all associated project files.</li>
                                <li><strong>Right to Restrict or Object to Processing:</strong> You may object to the
                                    processing of your data or request temporary restrictions.</li>
                                <li><strong>Right to Data Portability:</strong> You may receive your personal data in a
                                    structured, commonly used, and machine-readable format.</li>
                                <li><strong>No Sale of Personal Information:</strong> We do not sell, rent, or trade your
                                    personal data or dataset files to third parties.</li>
                            </ul>
                            <p>
                                To exercise any of these statutory rights, please email our Data Protection team at <a
                                    href="mailto:ebrahim@marveit.com"
                                    class="text-blue-600 font-semibold hover:underline">ebrahim@marveit.com</a>. We will
                                respond to verified requests within thirty (30) days without undue delay.
                            </p>
                        </div>

                        <!-- Section 11 -->
                        <div id="section-11" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">11</span>
                                Cookies &amp; Tracking Technologies
                            </h2>
                            <p>
                                Our website uses minimal, industry-standard cookies and local storage tokens to deliver core
                                functionality:
                            </p>
                            <ul>
                                <li><strong>Strictly Necessary Cookies:</strong> Required to maintain secure browsing
                                    sessions, protect forms against Cross-Site Request Forgery (CSRF), and remember your
                                    preferences.</li>
                                <li><strong>Analytical &amp; Performance Cookies:</strong> Anonymous aggregated telemetry to
                                    understand page load speeds and reader engagement. These cookies do not identify
                                    individual visitors.</li>
                            </ul>
                            <p>
                                You can configure your browser to block or alert you about cookies; however, some sections
                                of our contact forms or interactive components may not function optimally without them.
                            </p>
                        </div>

                        <!-- Section 12 -->
                        <div id="section-12" class="pp-section">
                            <h2>
                                <span
                                    class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 font-bold text-xs flex items-center justify-center flex-shrink-0">12</span>
                                Revisions to This Policy &amp; Contact Information
                            </h2>
                            <p>
                                We may periodically update this Privacy Policy to reflect advancements in AI regulation,
                                changes in technical labeling workflows, or enhanced security features. Whenever material
                                updates occur, we will revise the "Effective Date" at the top of this document and notify
                                active clients via email or an announcement on our website.
                            </p>
                            <p>
                                For any questions, mutual NDA execution requests, or data privacy inquiries, please contact
                                our Data Protection Officer:
                            </p>
                            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 sm:p-7 space-y-3.5 mt-5">
                                <div class="text-sm font-bold text-gray-900">Marveit AI - Data Protection &amp; Legal
                                    Compliance</div>
                                <div class="text-xs sm:text-sm text-gray-600 leading-relaxed space-y-1.5">
                                    <p class="mb-1"><strong>Contact Person:</strong> Ebrahim Hossain (Technical Lead &amp;
                                        Data Protection)</p>
                                    <p class="mb-1"><strong>Direct Email:</strong> <a href="mailto:ebrahim@marveit.com"
                                            class="text-blue-600 font-semibold hover:underline">ebrahim@marveit.com</a></p>
                                    <p class="mb-1"><strong>Phone / WhatsApp:</strong> <a href="tel:+8801753499696"
                                            class="text-blue-600 font-semibold hover:underline">+880 1753 499696</a></p>
                                    <p class="mb-1"><strong>Office Address:</strong> Mymensingh, Bangladesh</p>
                                    <p class="mb-0"><strong>Website:</strong> <a href="https://marveit.com"
                                            class="text-blue-600 font-semibold hover:underline">https://marveit.com</a></p>
                                </div>
                            </div>

                            <!-- Bottom CTA Banner with generous padding -->
                            <div
                                class="mt-10 pt-8 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-5">
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-gray-900">Ready to test our data annotation quality?
                                    </h4>
                                    <p class="text-xs text-gray-500">Start with a small pilot under mutual NDA. No
                                        commitment required.</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="{{ route('free-trial') }}"
                                        class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow-xs transition hover:-translate-y-0.5">
                                        <span>Start Free Pilot</span>
                                        <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                                    </a>
                                    <a href="{{ route('contact') }}"
                                        class="inline-flex items-center gap-2 bg-white hover:bg-gray-50 text-gray-700 border border-gray-200 text-xs font-bold px-4 py-2.5 rounded-xl shadow-2xs transition">
                                        <span>Contact Us</span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Script for feather icons & active TOC tracking -->
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

            window.addEventListener('scroll', highlightNav);
        });
    </script>
@endsection