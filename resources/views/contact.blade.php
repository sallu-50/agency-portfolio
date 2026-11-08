@extends('layouts.app')

@section('title', 'Get in Touch - Marveit AI | Direct Communication & Quotes')
@section('meta_description', 'Connect directly with Marveit AI leadership and senior technical architects via WhatsApp, Email, or send an inquiry for your data annotation project.')

@section('content')
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
                            <a href="mailto:ebrahim@marveit.com?subject=Data%20Annotation%20Project%20Inquiry%20-%20Marveit%20AI"
                                aria-label="Email"
                                class="w-16 h-16 rounded-2xl flex items-center justify-center mb-4 transition-transform group-hover:scale-105 shadow-xs"
                                style="background-color: #eff6ff; border: 1px solid #bfdbfe; color: #2563eb;">
                                <i data-feather="mail" class="w-7 h-7"></i>
                            </a>
                            <h2 class="text-lg font-bold text-gray-900 mb-1.5 tracking-wide">Email</h2>
                            <p class="text-sm font-semibold text-gray-700 break-all mb-5">ebrahim@marveit.com</p>
                        </div>
                        <a href="mailto:ebrahim@marveit.com?subject=Data%20Annotation%20Project%20Inquiry%20-%20Marveit%20AI"
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
                                style="background-color: #f0f9ff; border: 1px solid #bae6fd; color: #0284c7;">
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
        <section class="bg-white pt-6 md:pt-10 pb-16 md:pb-24 relative z-0">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                    <!-- Left Panel: Text & Trust Bullets -->
                    <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-28">
                        <div>
                            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold mb-4 bg-blue-50 text-blue-700 border border-blue-200 shadow-xs">
                                <i data-feather="zap" class="w-3.5 h-3.5 text-blue-600"></i>
                                <span>Fast Response Guarantee</span>
                            </span>
                            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">
                                Request a Quote
                            </h2>
                            <p class="text-base text-gray-600 leading-relaxed">
                                Share a short brief and we’ll reply within 24 hours with questions, a quote or an NDA. Want to test our quality first?
                                <a href="{{ route('free-trial') }}" class="text-blue-600 hover:text-blue-700 font-semibold underline underline-offset-2 inline-flex items-center gap-0.5 ml-1">
                                    <span>Start a free pilot</span>
                                    <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                                </a>
                            </p>
                        </div>

                        <!-- Trust Bullets (3টি) -->
                        <div class="space-y-4 pt-2">
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i data-feather="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700 leading-snug">NDA available before you share any data</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i data-feather="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700 leading-snug">A named project lead and a direct Slack or Teams channel</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i data-feather="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700 leading-snug">Multi-stage QA, with an accuracy report on every delivery</span>
                            </div>
                        </div>

                        <!-- Trust Pill / Headquarters -->
                        <div class="pt-4">
                            <div class="inline-flex items-center gap-2.5 px-4 py-2.5 rounded-full bg-slate-50 text-xs text-gray-700 border border-gray-200">
                                <i data-feather="shield" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                <span>NDA standard bilateral · Global remote operations 24/7</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Panel: Form Card (ft-card style) -->
                    <div class="lg:col-span-7">
                        <div class="bg-white rounded-2xl border border-gray-200 p-6 sm:p-8 lg:p-10 shadow-lg"
                            style="box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.08), 0 0 1px 1px rgba(15, 23, 42, 0.03);">

                            <!-- Success Alert -->
                            @if (session('success'))
                                <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 flex items-start gap-3">
                                    <i data-feather="check-circle" class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                                    <div>
                                        <h4 class="font-bold text-sm">Message Sent Successfully!</h4>
                                        <p class="text-xs mt-0.5">{{ session('success') }}</p>
                                    </div>
                                </div>
                            @endif

                            <!-- Error Alert -->
                            @if (isset($errors) && $errors->any())
                                <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-800">
                                    <h4 class="font-bold text-sm mb-1">Please correct the following errors:</h4>
                                    <ul class="list-disc list-inside text-xs space-y-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                                @csrf

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <!-- Full Name -->
                                    <div>
                                        <label for="name" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">
                                            Full name <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                            placeholder="Alex Morgan"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm text-slate-900 placeholder:text-slate-400 bg-slate-50 focus:bg-white transition outline-none @error('name') border-red-400 @enderror">
                                    </div>

                                    <!-- Business Email -->
                                    <div>
                                        <label for="email" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">
                                            Business email <span class="text-red-500">*</span>
                                        </label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                            placeholder="alex@company.com"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm text-slate-900 placeholder:text-slate-400 bg-slate-50 focus:bg-white transition outline-none @error('email') border-red-400 @enderror">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <!-- Company -->
                                    <div>
                                        <label for="company" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">
                                            Company <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="company" name="company" value="{{ old('company') }}" required
                                            placeholder="Company name"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm text-slate-900 placeholder:text-slate-400 bg-slate-50 focus:bg-white transition outline-none @error('company') border-red-400 @enderror">
                                    </div>

                                    <!-- Phone / WhatsApp -->
                                    <div>
                                        <label for="phone" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">
                                            Phone / WhatsApp <span class="text-slate-500 font-normal normal-case">(optional)</span>
                                        </label>
                                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                            placeholder="+1 555 000 0000"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm text-slate-900 placeholder:text-slate-400 bg-slate-50 focus:bg-white transition outline-none">
                                    </div>
                                </div>

                                <!-- Service / What do you need labeled? -->
                                <div>
                                    <label for="service" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">
                                        What do you need labeled? <span class="text-red-500">*</span>
                                    </label>
                                    <select id="service" name="service" required
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm text-slate-900 bg-slate-50 focus:bg-white transition outline-none @error('service') border-red-400 @enderror">
                                        <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select service</option>
                                        <option value="Image Annotation" {{ old('service') == 'Image Annotation' ? 'selected' : '' }}>Image Annotation</option>
                                        <option value="Video Annotation" {{ old('service') == 'Video Annotation' ? 'selected' : '' }}>Video Annotation</option>
                                        <option value="LiDAR & 3D Annotation" {{ old('service') == 'LiDAR & 3D Annotation' ? 'selected' : '' }}>LiDAR & 3D Annotation</option>
                                        <option value="Text & NLP Annotation" {{ old('service') == 'Text & NLP Annotation' ? 'selected' : '' }}>Text & NLP Annotation</option>
                                        <option value="Audio Annotation & Transcription" {{ old('service') == 'Audio Annotation & Transcription' ? 'selected' : '' }}>Audio Annotation & Transcription</option>
                                        <option value="RLHF & LLM Evaluation" {{ old('service') == 'RLHF & LLM Evaluation' ? 'selected' : '' }}>RLHF & LLM Evaluation</option>
                                        <option value="Data Collection" {{ old('service') == 'Data Collection' ? 'selected' : '' }}>Data Collection</option>
                                        <option value="Not sure yet" {{ old('service') == 'Not sure yet' ? 'selected' : '' }}>Not sure yet</option>
                                    </select>
                                </div>

                                <!-- Message / Project details -->
                                <div>
                                    <label for="message" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">
                                        Project details <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="message" name="message" rows="4" required
                                        placeholder="Describe your data type, labels needed, estimated volume and timeline."
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm text-slate-900 placeholder:text-slate-400 bg-slate-50 focus:bg-white transition outline-none resize-y @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                                </div>

                                <!-- NDA Checkbox -->
                                <div class="p-3.5 rounded-xl border border-slate-200 bg-slate-50/70">
                                    <label class="flex items-center gap-3 cursor-pointer">
                                        <input type="checkbox" name="needs_nda" id="needs_nda" value="1" {{ old('needs_nda') ? 'checked' : '' }}
                                            class="w-4 h-4 rounded text-blue-600 border-slate-300 focus:ring-blue-500 cursor-pointer">
                                        <span class="text-xs sm:text-sm text-slate-700 font-medium">I’d like an NDA signed before sharing data.</span>
                                    </label>
                                </div>

                                <!-- Consent Checkbox -->
                                <div class="pt-1">
                                    <label class="flex items-start gap-3 cursor-pointer">
                                        <input type="checkbox" name="consent" id="consent" required
                                            class="w-4 h-4 rounded text-blue-600 border-slate-300 focus:ring-blue-500 cursor-pointer mt-0.5">
                                        <span class="text-xs text-slate-600 leading-relaxed">
                                            I agree to the <a href="{{ route('contact') }}" class="text-blue-600 hover:underline font-semibold">Privacy Policy</a> and consent to Marveit contacting me about this request. <span class="text-red-500">*</span>
                                        </span>
                                    </label>
                                </div>

                                <!-- Submit Button & Trust Note -->
                                <div class="pt-2 space-y-3">
                                    <button type="submit"
                                        class="w-full px-8 py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm rounded-xl shadow-md hover:shadow-lg transition-all duration-200 inline-flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                                        <span>Send My Request</span>
                                        <i data-feather="arrow-right" class="w-4 h-4"></i>
                                    </button>
                                    <p class="text-xs text-slate-500 text-center">
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
