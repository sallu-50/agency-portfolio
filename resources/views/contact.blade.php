@extends('layouts.app')

@section('title', 'Get in Touch - Marveit AI | Direct Communication & Quotes')
@section('meta_description', 'Connect directly with Marveit AI leadership and senior technical architects via WhatsApp, Email, or send an inquiry for your data annotation project.')

@section('content')
    <style>
        .ft-page-bg {
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
        }

        .ft-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.06), 0 0 1px 1px rgba(15, 23, 42, 0.02);
            padding: 28px 32px;
            transition: all 0.3s ease;
        }

        @media (max-width: 640px) {
            .ft-card {
                padding: 22px 18px;
                border-radius: 16px;
            }
        }

        .ft-label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 6px;
            letter-spacing: -0.01em;
        }

        .ft-label .required {
            color: #ef4444;
            font-size: 11.5px;
            font-weight: 600;
            margin-left: 4px;
        }

        .ft-label .hint {
            font-size: 11.5px;
            font-weight: 500;
            color: #64748b;
            margin-left: 4px;
        }

        .ft-input,
        .ft-select {
            width: 100%;
            height: 44px;
            padding: 0 14px;
            font-size: 13.5px;
            color: #0f172a;
            background-color: #f8fafc;
            border: 1.5px solid #cbd5e1;
            border-radius: 10px;
            outline: none;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            display: block;
            box-sizing: border-box;
        }

        .ft-input::placeholder,
        .ft-textarea::placeholder {
            color: #94a3b8;
        }

        .ft-input:hover,
        .ft-select:hover,
        .ft-textarea:hover {
            background-color: #ffffff;
            border-color: #94a3b8;
        }

        .ft-input:focus,
        .ft-select:focus,
        .ft-textarea:focus {
            background-color: #ffffff;
            border-color: #2563eb !important;
            box-shadow: 0 0 0 3.5px rgba(37, 99, 235, 0.18) !important;
        }

        .ft-textarea {
            width: 100%;
            padding: 12px 14px;
            font-size: 13.5px;
            color: #0f172a;
            background-color: #f8fafc;
            border: 1.5px solid #cbd5e1;
            border-radius: 10px;
            outline: none;
            resize: none;
            min-height: 76px;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            display: block;
            box-sizing: border-box;
        }

        .ft-upload-card {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            background: #f8fafc;
            border: 1.5px dashed #cbd5e1;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.2s ease;
            box-sizing: border-box;
        }

        .ft-upload-card:hover {
            background: #eff6ff;
            border-color: #2563eb;
        }

        .ft-upload-icon {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            background: #e0f2fe;
            color: #0284c7;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: transform 0.2s ease;
        }

        .ft-upload-card:hover .ft-upload-icon {
            transform: scale(1.05);
            background: #0e5edd;
            color: #ffffff;
        }

        .ft-submit-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            height: 48px;
            padding: 0 32px;
            font-size: 15px;
            font-weight: 700;
            color: #ffffff;
            background-color: #0e5edd;
            border: none;
            border-radius: 9999px;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 4px 16px rgba(14, 94, 221, 0.28);
        }

        .ft-submit-btn:hover {
            background-color: #004bbf;
            box-shadow: 0 6px 22px rgba(14, 94, 221, 0.38);
            transform: translateY(-1px);
        }

        .ft-layout-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2.75rem;
            align-items: start;
        }

        @media (min-width: 1024px) {
            .ft-layout-grid {
                grid-template-columns: 5fr 7fr;
                gap: 3.5rem;
                align-items: center;
            }
        }

        .ft-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .ft-form-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }

        @media (min-width: 640px) {
            .ft-form-row {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                column-gap: 20px;
                row-gap: 16px;
            }
        }
    </style>

    <div class="pt-24 md:pt-28">
        <!-- Hero Section with Clean White Theme -->
        <section class="bg-white pt-14 md:pt-20 pb-6 md:pb-8 relative overflow-hidden z-10"
            style="box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.05);">

            <!-- Subtle background decorative glows -->
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-50 rounded-full blur-3xl pointer-events-none -z-0"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-emerald-50 rounded-full blur-3xl pointer-events-none -z-0"></div>

            <div class="container mx-auto px-6 relative z-10 max-w-6xl">
                <!-- Section Title -->
                <div class="text-center mb-12 md:mb-14">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 mb-4 shadow-xs">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Reply within 24 hours</span>
                    </span>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-4 tracking-tight">
                        Contact Marveit AI
                    </h1>
                    <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto font-normal leading-relaxed">
                        Tell us about your data and your model goals. Our project team will reply with questions, a quote or an NDA.
                    </p>
                </div>

                <!-- 4 Channels: WhatsApp, Email, LinkedIn, Facebook -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center items-stretch">
                    <!-- 1. WhatsApp -->
                    <div class="p-6 rounded-2xl bg-white border border-gray-200 hover:border-blue-400 hover:shadow-lg transition-all duration-300 flex flex-col items-center justify-between group shadow-xs hover:-translate-y-1">
                        <div class="flex flex-col items-center w-full">
                            <a href="https://wa.me/8801753499696?text=Hello%20Marveit%20AI%20Team!%20I%20would%20like%20to%20discuss%20a%20data%20annotation%20project."
                                target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"
                                class="w-16 h-16 rounded-2xl flex items-center justify-center mb-4 transition-transform group-hover:scale-105 shadow-xs"
                                style="background-color: #ecfdf5; border: 1px solid #a7f3d0; color: #059669;">
                                <i data-feather="message-circle" class="w-7 h-7"></i>
                            </a>
                            <h2 class="text-lg font-bold text-gray-900 mb-1.5 tracking-wide">WhatsApp</h2>
                            <p class="text-sm font-semibold text-gray-700 tracking-wide mb-5">+880 1753 499696</p>
                        </div>
                        <a href="https://wa.me/8801753499696?text=Hello%20Marveit%20AI%20Team!%20I%20would%20like%20to%20discuss%20a%20data%20annotation%20project."
                            target="_blank" rel="noopener noreferrer"
                            class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white border border-blue-100 hover:border-blue-600 transition-all duration-200 hover:-translate-y-0.5 shadow-xs">
                            <span>Chat on WhatsApp</span>
                            <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- 2. Email -->
                    <div class="p-6 rounded-2xl bg-white border border-gray-200 hover:border-blue-400 hover:shadow-lg transition-all duration-300 flex flex-col items-center justify-between group shadow-xs hover:-translate-y-1">
                        <div class="flex flex-col items-center w-full">
                            <a href="mailto:ebrahim@marveit.com" aria-label="Email"
                                class="w-16 h-16 rounded-2xl flex items-center justify-center mb-4 transition-transform group-hover:scale-105 shadow-xs"
                                style="background-color: #eff6ff; border: 1px solid #bfdbfe; color: #2563eb;">
                                <i data-feather="mail" class="w-7 h-7"></i>
                            </a>
                            <h2 class="text-lg font-bold text-gray-900 mb-1.5 tracking-wide">Email</h2>
                            <p class="text-sm font-semibold text-gray-700 tracking-wide mb-5">ebrahim@marveit.com</p>
                        </div>
                        <a href="mailto:ebrahim@marveit.com"
                            class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white border border-blue-100 hover:border-blue-600 transition-all duration-200 hover:-translate-y-0.5 shadow-xs">
                            <span>Send an Email</span>
                            <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- 3. LinkedIn -->
                    <div class="p-6 rounded-2xl bg-white border border-gray-200 hover:border-blue-400 hover:shadow-lg transition-all duration-300 flex flex-col items-center justify-between group shadow-xs hover:-translate-y-1">
                        <div class="flex flex-col items-center w-full">
                            <a href="https://www.linkedin.com/company/marveit" target="_blank" rel="noopener noreferrer"
                                aria-label="LinkedIn"
                                class="w-16 h-16 rounded-2xl flex items-center justify-center mb-4 transition-transform group-hover:scale-105 shadow-xs"
                                style="background-color: #f0fdf4; border: 1px solid #bbf7d0; color: #16a34a;">
                                <i data-feather="linkedin" class="w-7 h-7"></i>
                            </a>
                            <h2 class="text-lg font-bold text-gray-900 mb-1.5 tracking-wide">LinkedIn</h2>
                            <p class="text-sm font-semibold text-gray-700 tracking-wide mb-5">Marveit AI</p>
                        </div>
                        <a href="https://www.linkedin.com/company/marveit" target="_blank" rel="noopener noreferrer"
                            class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white border border-blue-100 hover:border-blue-600 transition-all duration-200 hover:-translate-y-0.5 shadow-xs">
                            <span>Connect on LinkedIn</span>
                            <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- 4. Facebook -->
                    <div class="p-6 rounded-2xl bg-white border border-gray-200 hover:border-blue-400 hover:shadow-lg transition-all duration-300 flex flex-col items-center justify-between group shadow-xs hover:-translate-y-1">
                        <div class="flex flex-col items-center w-full">
                            <a href="https://www.facebook.com/marveit" target="_blank" rel="noopener noreferrer"
                                aria-label="Facebook"
                                class="w-16 h-16 rounded-2xl flex items-center justify-center mb-4 transition-transform group-hover:scale-105 shadow-xs"
                                style="background-color: #eef2ff; border: 1px solid #c7d2fe; color: #4f46e5;">
                                <i data-feather="facebook" class="w-7 h-7"></i>
                            </a>
                            <h2 class="text-lg font-bold text-gray-900 mb-1.5 tracking-wide">Facebook</h2>
                            <p class="text-sm font-semibold text-gray-700 tracking-wide mb-5">Marveit AI</p>
                        </div>
                        <a href="https://www.facebook.com/marveit" target="_blank" rel="noopener noreferrer"
                            class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white border border-blue-100 hover:border-blue-600 transition-all duration-200 hover:-translate-y-0.5 shadow-xs">
                            <span>Visit Our Page</span>
                            <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Request a Quote Section (Free Trial Style: 2 Columns - Left Text Panel, Right Form Card) -->
        <section class="ft-page-bg py-14 md:py-20 relative z-0 border-t border-slate-100">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="ft-layout-grid">
                    <!-- Left Column: Intro, Value Props & Workflow (Left-Aligned) -->
                    <div class="text-left space-y-8 lg:pr-4 my-auto flex flex-col items-start">
                        <div>
                            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold mb-4 bg-blue-50 text-blue-700 border border-blue-200 shadow-xs">
                                <i data-feather="zap" class="w-3.5 h-3.5 text-blue-600"></i>
                                <span>Fast Response Guarantee</span>
                            </span>
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">
                                Request a <span class="text-blue-600">Quote</span>
                            </h2>
                            <p class="text-sm sm:text-base text-gray-600 leading-relaxed max-w-lg">
                                Share a short brief and we’ll reply within 24 hours with questions, a quote or an NDA. Want to test our quality first?
                                <a href="{{ route('free-trial') }}" class="text-blue-600 hover:text-blue-700 font-semibold underline underline-offset-2 inline-flex items-center gap-0.5 ml-1">
                                    <span>Start a free pilot</span>
                                    <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                                </a>
                            </p>
                        </div>

                        <!-- What you get -->
                        <div class="pt-1 text-left w-full">
                            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4">What you get:</h3>
                            <ul class="space-y-3.5 flex flex-col items-start">
                                <li class="flex items-start gap-3 text-sm text-gray-700 font-medium">
                                    <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <i data-feather="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                                    </div>
                                    <span>NDA available before you share any data</span>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-gray-700 font-medium">
                                    <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <i data-feather="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                                    </div>
                                    <span>A named project lead and a direct Slack or Teams channel</span>
                                </li>
                                <li class="flex items-start gap-3 text-sm text-gray-700 font-medium">
                                    <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <i data-feather="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                                    </div>
                                    <span>Multi-stage QA, with an accuracy report on every delivery</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Headquarters & NDA Trust Pill -->
                        <div class="pt-2 flex justify-start w-full">
                            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-xs text-gray-600 shadow-sm border border-gray-200">
                                <i data-feather="shield" class="w-3.5 h-3.5 text-emerald-500"></i>
                                <span>NDA available before you share any data &middot; 100% confidential</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Form Card -->
                    <div>
                        <div class="ft-card">
                            <!-- Success Notification -->
                            @if (session('success'))
                                <div class="mb-5 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-900 flex items-start gap-3">
                                    <i data-feather="check-circle" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                                    <div>
                                        <h4 class="font-bold text-xs">Message Sent Successfully!</h4>
                                        <p class="text-[11px] mt-0.5 text-emerald-800">{{ session('success') }}</p>
                                    </div>
                                </div>
                            @endif

                            <!-- Error Alert -->
                            @if (isset($errors) && $errors->any())
                                <div class="mb-5 p-4 rounded-xl bg-red-50 border border-red-200 text-red-900">
                                    <h4 class="font-bold text-xs mb-1">Please fix the following issues:</h4>
                                    <ul class="list-disc list-inside text-[11px] space-y-0.5 text-red-700">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data" class="ft-form space-y-4">
                                @csrf

                                <!-- Full Name & Business Email -->
                                <div class="ft-form-row grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label for="name" class="ft-label">
                                            Full Name <span class="required">(Required)</span>
                                        </label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                            placeholder="Alex Morgan" class="ft-input @error('name') border-red-400 @enderror">
                                    </div>

                                    <div>
                                        <label for="email" class="ft-label">
                                            Business Email <span class="required">(Required)</span>
                                        </label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                            placeholder="alex@company.com"
                                            class="ft-input @error('email') border-red-400 @enderror">
                                    </div>
                                </div>

                                <!-- Company & Country -->
                                <div class="ft-form-row grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label for="company" class="ft-label">
                                            Company <span class="hint">(optional)</span>
                                        </label>
                                        <input type="text" id="company" name="company" value="{{ old('company') }}"
                                            placeholder="Company name" class="ft-input @error('company') border-red-400 @enderror">
                                    </div>

                                    <div>
                                        <label for="country" class="ft-label">
                                            Country <span class="required">(Required)</span>
                                        </label>
                                        <select id="country" name="country" class="ft-select @error('country') border-red-400 @enderror">
                                            <option value="" disabled {{ old('country') ? '' : 'selected' }}>Select country</option>
                                            <option value="United States" {{ old('country') === 'United States' ? 'selected' : '' }}>United States</option>
                                            <option value="United Kingdom" {{ old('country') === 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                            <option value="Canada" {{ old('country') === 'Canada' ? 'selected' : '' }}>Canada</option>
                                            <option value="Germany" {{ old('country') === 'Germany' ? 'selected' : '' }}>Germany</option>
                                            <option value="France" {{ old('country') === 'France' ? 'selected' : '' }}>France</option>
                                            <option value="Australia" {{ old('country') === 'Australia' ? 'selected' : '' }}>Australia</option>
                                            <option value="Japan" {{ old('country') === 'Japan' ? 'selected' : '' }}>Japan</option>
                                            <option value="Singapore" {{ old('country') === 'Singapore' ? 'selected' : '' }}>Singapore</option>
                                            <option value="Netherlands" {{ old('country') === 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
                                            <option value="Switzerland" {{ old('country') === 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
                                            <option value="Sweden" {{ old('country') === 'Sweden' ? 'selected' : '' }}>Sweden</option>
                                            <option value="Norway" {{ old('country') === 'Norway' ? 'selected' : '' }}>Norway</option>
                                            <option value="Denmark" {{ old('country') === 'Denmark' ? 'selected' : '' }}>Denmark</option>
                                            <option value="Finland" {{ old('country') === 'Finland' ? 'selected' : '' }}>Finland</option>
                                            <option value="Ireland" {{ old('country') === 'Ireland' ? 'selected' : '' }}>Ireland</option>
                                            <option value="Israel" {{ old('country') === 'Israel' ? 'selected' : '' }}>Israel</option>
                                            <option value="United Arab Emirates" {{ old('country') === 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                                            <option value="Saudi Arabia" {{ old('country') === 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                                            <option value="India" {{ old('country') === 'India' ? 'selected' : '' }}>India</option>
                                            <option value="Bangladesh" {{ old('country') === 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                            <option value="South Korea" {{ old('country') === 'South Korea' ? 'selected' : '' }}>South Korea</option>
                                            <option value="Spain" {{ old('country') === 'Spain' ? 'selected' : '' }}>Spain</option>
                                            <option value="Italy" {{ old('country') === 'Italy' ? 'selected' : '' }}>Italy</option>
                                            <option value="Poland" {{ old('country') === 'Poland' ? 'selected' : '' }}>Poland</option>
                                            <option value="Austria" {{ old('country') === 'Austria' ? 'selected' : '' }}>Austria</option>
                                            <option value="Belgium" {{ old('country') === 'Belgium' ? 'selected' : '' }}>Belgium</option>
                                            <option value="Brazil" {{ old('country') === 'Brazil' ? 'selected' : '' }}>Brazil</option>
                                            <option value="Mexico" {{ old('country') === 'Mexico' ? 'selected' : '' }}>Mexico</option>
                                            <option value="New Zealand" {{ old('country') === 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
                                            <option value="South Africa" {{ old('country') === 'South Africa' ? 'selected' : '' }}>South Africa</option>
                                            <option value="Other" {{ old('country') === 'Other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Phone / WhatsApp & What do you need labeled? -->
                                <div class="ft-form-row grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <div>
                                        <label for="phone" class="ft-label">
                                            Phone / WhatsApp <span class="hint">(optional)</span>
                                        </label>
                                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                            placeholder="+1 555 000 0000" class="ft-input">
                                    </div>

                                    <div>
                                        <label for="service" class="ft-label">
                                            What do you need labeled?
                                        </label>
                                        <select id="service" name="service" class="ft-select @error('service') border-red-400 @enderror">
                                            <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select service</option>
                                            <option value="Image Annotation" {{ old('service') === 'Image Annotation' ? 'selected' : '' }}>Image Annotation</option>
                                            <option value="Video Annotation" {{ old('service') === 'Video Annotation' ? 'selected' : '' }}>Video Annotation</option>
                                            <option value="LiDAR & 3D Annotation" {{ old('service') === 'LiDAR & 3D Annotation' ? 'selected' : '' }}>LiDAR & 3D Annotation</option>
                                            <option value="Text & NLP Annotation" {{ old('service') === 'Text & NLP Annotation' ? 'selected' : '' }}>Text & NLP Annotation</option>
                                            <option value="Audio Annotation & Transcription" {{ old('service') === 'Audio Annotation & Transcription' ? 'selected' : '' }}>Audio Annotation & Transcription</option>
                                            <option value="RLHF & LLM Evaluation" {{ old('service') === 'RLHF & LLM Evaluation' ? 'selected' : '' }}>RLHF & LLM Evaluation</option>
                                            <option value="Data Collection" {{ old('service') === 'Data Collection' ? 'selected' : '' }}>Data Collection</option>
                                            <option value="Not sure yet" {{ old('service') === 'Not sure yet' ? 'selected' : '' }}>Not sure yet</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Project details (Message) -->
                                <div>
                                    <label for="message" class="ft-label">
                                        Project details <span class="required">(Required)</span>
                                    </label>
                                    <textarea id="message" name="message" rows="2" required
                                        placeholder="Describe your data type, labels needed, volume and any special requirements."
                                        class="ft-textarea @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                                </div>

                                <!-- Project Guidelines (optional) & Sample Data (optional) -->
                                <div class="ft-form-row grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <!-- Project Guidelines -->
                                    <div>
                                        <label class="ft-label">
                                            Project Guidelines <span class="hint">(optional)</span>
                                        </label>
                                        <div class="ft-upload-card" onclick="document.getElementById('project_guideline').click()">
                                            <input type="file" id="project_guideline" name="project_guideline"
                                                accept=".pdf,.doc,.docx,.txt,.odt" class="hidden"
                                                onchange="updateFileName(this, 'guideline_name')">
                                            <div class="ft-upload-icon">
                                                <i data-feather="file-text" class="w-3.5 h-3.5"></i>
                                            </div>
                                            <div class="overflow-hidden">
                                                <div id="guideline_name" class="text-xs font-semibold text-gray-800 truncate max-w-[170px]">
                                                    Upload PDF or DOCX
                                                </div>
                                                <span class="text-[10px] text-gray-400 block mt-0.5">Upload PDF or DOCX, up to 50 MB</span>
                                            </div>
                                        </div>
                                        @error('project_guideline')
                                            <p class="text-[11px] text-red-500 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Sample Data -->
                                    <div>
                                        <label class="ft-label">
                                            Sample Data <span class="hint">(optional)</span>
                                        </label>
                                        <div class="ft-upload-card" onclick="document.getElementById('sample_data').click()">
                                            <input type="file" id="sample_data" name="sample_data"
                                                accept="image/*,video/*,audio/*,.zip,.rar,.tar,.gz,.7z" class="hidden"
                                                onchange="updateFileName(this, 'sample_name')">
                                            <div class="ft-upload-icon">
                                                <i data-feather="upload-cloud" class="w-3.5 h-3.5"></i>
                                            </div>
                                            <div class="overflow-hidden">
                                                <div id="sample_name" class="text-xs font-semibold text-gray-800 truncate max-w-[170px]">
                                                    Upload Sample Data
                                                </div>
                                                <span class="text-[10px] text-gray-400 block mt-0.5">Upload images, video, audio or ZIP, up to 100 MB</span>
                                            </div>
                                        </div>
                                        @error('sample_data')
                                            <p class="text-[11px] text-red-500 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- NDA & Data Note -->
                                <div class="mt-6 p-4 rounded-xl space-y-3" style="background-color: #f8fafc; border: 1px solid #e2e8f0;">
                                    <label class="flex items-center gap-3 cursor-pointer">
                                        <input type="checkbox" name="needs_nda" value="1" {{ old('needs_nda') ? 'checked' : '' }}
                                            class="w-4 h-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500 flex-shrink-0 cursor-pointer">
                                        <span class="text-xs sm:text-sm font-semibold text-gray-800 leading-snug">
                                            I need an NDA signed before sharing data.
                                        </span>
                                    </label>
                                    <div class="flex items-start gap-2.5 pt-2.5 text-xs text-slate-700 leading-relaxed" style="border-top: 1px solid #edf2f7;">
                                        <i data-feather="info" class="w-4 h-4 text-blue-600 flex-shrink-0 mt-0.5"></i>
                                        <span><strong>Tip:</strong> If your sample contains sensitive data, skip the upload and we’ll send an NDA first.</span>
                                    </div>
                                </div>

                                <!-- Consent Checkbox -->
                                <div class="py-2.5">
                                    <label class="flex items-start gap-3 cursor-pointer">
                                        <input type="checkbox" name="privacy_consent" value="1" required {{ old('privacy_consent') ? 'checked' : '' }}
                                            class="mt-1 w-4 h-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500 flex-shrink-0">
                                        <span class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                            I agree to the <a href="{{ route('privacy-policy') }}" class="text-blue-600 font-semibold hover:underline">Privacy Policy</a> and consent to Marveit contacting me about this request.
                                        </span>
                                    </label>
                                </div>

                                <!-- Bottom Actions Bar -->
                                <div class="pt-4 border-t border-gray-100 flex flex-col items-center gap-3">
                                    <button type="submit" class="ft-submit-btn w-full">
                                        <span>Send My Request</span>
                                        <i data-feather="arrow-right" class="w-4 h-4"></i>
                                    </button>

                                    <div class="flex items-center justify-center gap-1.5 text-xs text-gray-500 text-center pt-1">
                                        <svg class="w-3.5 h-3.5 text-emerald-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <span>Protected by mutual NDA &middot; 100% confidential</span>
                                    </div>
                                    <p class="text-[11px] text-gray-400 text-center">
                                        We reply within 24 hours. Your details are never shared.
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        function updateFileName(input, targetId) {
            const display = document.getElementById(targetId);
            if (input.files && input.files[0]) {
                display.textContent = input.files[0].name;
                display.classList.add('text-blue-600');
            }
        }
    </script>
@endpush
