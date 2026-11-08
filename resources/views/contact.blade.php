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

        <!-- Message Form & Consultation Details Section -->
        <section class="bg-white pt-3 md:pt-4 pb-16 md:pb-24 relative z-0">
            <div class="container mx-auto px-6 max-w-5xl">
                <div class="bg-white rounded-3xl overflow-hidden"
                    style="box-shadow: 0 20px 50px -10px rgba(15, 23, 42, 0.1), 0 0 1px 1px rgba(15, 23, 42, 0.04);">
                    <div class="grid grid-cols-1 lg:grid-cols-12">
                        <!-- Left Column: Form Details & Assurance -->
                        <div class="lg:col-span-5 p-8 md:p-12 flex flex-col justify-between bg-white lg:border-r border-slate-100">
                            <div>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold mb-6 bg-blue-50 text-blue-700 border border-blue-200">
                                    <i data-feather="zap" class="w-3.5 h-3.5 text-blue-600"></i> Fast Response Guarantee
                                </span>
                                <h3 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-4 leading-tight tracking-tight">
                                    Request a Benchmark Pilot
                                </h3>
                                <p class="text-sm leading-relaxed mb-8 text-slate-600">
                                    Submit your project specifications or sample instructions. Our engineering team will review your requirements and provide a pilot turnaround within 24–48 hours.
                                </p>

                                <div class="space-y-4 mb-8">
                                    <div class="flex items-start gap-3">
                                        <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-feather="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                                        </div>
                                        <span class="text-sm leading-snug font-medium text-slate-700">Bilateral NDA signed before proprietary dataset ingestion</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-feather="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                                        </div>
                                        <span class="text-sm leading-snug font-medium text-slate-700">Dedicated project lead & Slack/Teams communication channel</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div class="w-6 h-6 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-feather="check" class="w-3.5 h-3.5 stroke-[2.5]"></i>
                                        </div>
                                        <span class="text-sm leading-snug font-medium text-slate-700">Strict multi-tier QA with 99.8% precision SLA agreement</span>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-6 text-xs font-medium text-slate-500 border-t border-slate-100">
                                Global Headquarters: Dhaka, Bangladesh • Global Remote Operations 24/7
                            </div>
                        </div>

                        <!-- Right Column: Interactive Form -->
                        <div class="lg:col-span-7 p-8 md:p-12 bg-white">
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
                                    <!-- Name -->
                                    <div>
                                        <label for="name" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">
                                            Your Name <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                            placeholder="e.g. John Doe"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm text-slate-900 placeholder:text-slate-400 bg-slate-50 focus:bg-white transition outline-none @error('name') border-red-400 @enderror">
                                    </div>

                                    <!-- Email -->
                                    <div>
                                        <label for="email" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">
                                            Business Email <span class="text-red-500">*</span>
                                        </label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                            placeholder="john@company.com"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm text-slate-900 placeholder:text-slate-400 bg-slate-50 focus:bg-white transition outline-none @error('email') border-red-400 @enderror">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <!-- Phone -->
                                    <div>
                                        <label for="phone" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">
                                            Phone / WhatsApp <span class="text-slate-500 font-normal normal-case">(Optional)</span>
                                        </label>
                                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                            placeholder="+1 (555) 000-0000"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm text-slate-900 placeholder:text-slate-400 bg-slate-50 focus:bg-white transition outline-none">
                                    </div>

                                    <!-- Service Interest -->
                                    <div>
                                        <label for="service" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">
                                            Service of Interest
                                        </label>
                                        <select id="service" name="service"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm text-slate-900 bg-slate-50 focus:bg-white transition outline-none">
                                            <option value="">Select a service category</option>
                                            @foreach ($services as $srv)
                                                <option value="{{ $srv->title }}"
                                                    {{ (old('service') == $srv->title || request('service') == $srv->title || request('service') == $srv->slug) ? 'selected' : '' }}>
                                                    {{ $srv->title }} ({{ $srv->category }})
                                                </option>
                                            @endforeach
                                            <option value="Custom Dataset / Other" {{ old('service') == 'Custom Dataset / Other' ? 'selected' : '' }}>
                                                Custom Dataset / Other
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div>
                                    <label for="message" class="block text-xs font-bold text-slate-800 uppercase tracking-wider mb-2">
                                        Project Description & Dataset Volume <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="message" name="message" rows="4" required
                                        placeholder="Please detail your data modality, expected volumes, labeling guidelines, timeline, or any custom tool requirements..."
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm text-slate-900 placeholder:text-slate-400 bg-slate-50 focus:bg-white transition outline-none resize-y @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button type="submit"
                                        class="w-full sm:w-auto px-8 py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl shadow-md hover:shadow-lg transition-all duration-200 inline-flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                                        <span>Send Inquiry</span>
                                        <i data-feather="send" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
