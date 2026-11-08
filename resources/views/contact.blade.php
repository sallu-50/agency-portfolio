@extends('layouts.app')

@section('title', 'Get in Touch - Marveit AI | Direct Communication & Quotes')
@section('meta_description', 'Connect directly with Marveit AI leadership and senior technical architects via WhatsApp, Email, or send an inquiry for your data annotation project.')

@section('content')
    <div class="pt-24 md:pt-28">
        <!-- Hero Section with Deep Navy Theme (Matching Original Reference) -->
        <section class="bg-[#0B253A] text-white py-20 md:py-28 relative overflow-hidden"
            style="background: linear-gradient(180deg, #0B253A 0%, #071A29 100%);">

            <!-- Subtle background decorative glows -->
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-teal-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="container mx-auto px-6 relative z-10 max-w-6xl">
                <!-- Section Title -->
                <div class="text-center mb-14 md:mb-16">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-white/10 text-blue-200 border border-white/15 mb-4 backdrop-blur-xs">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span>Reply within 24 hours</span>
                    </span>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 tracking-tight">
                        Contact Marveit AI
                    </h1>
                    <p class="text-base md:text-lg text-blue-100/80 max-w-2xl mx-auto font-normal leading-relaxed">
                        Tell us about your data and your model goals. Our project team will reply with questions, a quote or an NDA.
                    </p>
                </div>

                <!-- 4 Channels: WhatsApp, Email, LinkedIn, Facebook -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center items-stretch">
                    <!-- 1. WhatsApp -->
                    <div class="p-6 rounded-2xl bg-white/[0.05] hover:bg-white/[0.09] border border-white/10 hover:border-white/20 transition-all duration-300 flex flex-col items-center justify-between group shadow-lg hover:-translate-y-1">
                        <div class="flex flex-col items-center w-full">
                            <a href="https://wa.me/8801753499696?text=Hello%20Marveit%20AI%20Team!%20I%20would%20like%20to%20discuss%20a%20data%20annotation%20project."
                                target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"
                                class="w-16 h-16 rounded-2xl bg-emerald-500/15 border border-emerald-500/25 text-emerald-400 flex items-center justify-center mb-4 transition-transform group-hover:scale-105 shadow-md">
                                <i data-feather="message-circle" class="w-7 h-7"></i>
                            </a>
                            <h2 class="text-lg font-bold text-white mb-1.5 tracking-wide">WhatsApp</h2>
                            <p class="text-sm font-semibold text-blue-200 tracking-wide mb-5">+880 1753 499696</p>
                        </div>
                        <a href="https://wa.me/8801753499696?text=Hello%20Marveit%20AI%20Team!%20I%20would%20like%20to%20discuss%20a%20data%20annotation%20project."
                            target="_blank" rel="noopener noreferrer"
                            class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full text-xs font-semibold text-white bg-emerald-600 hover:bg-emerald-500 shadow-md hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5">
                            <span>Chat on WhatsApp</span>
                            <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- 2. Email -->
                    <div class="p-6 rounded-2xl bg-white/[0.05] hover:bg-white/[0.09] border border-white/10 hover:border-white/20 transition-all duration-300 flex flex-col items-center justify-between group shadow-lg hover:-translate-y-1">
                        <div class="flex flex-col items-center w-full">
                            <a href="mailto:ebrahim@marveit.com?subject=Data%20Annotation%20Project%20Inquiry%20-%20Marveit%20AI"
                                aria-label="Email"
                                class="w-16 h-16 rounded-2xl bg-blue-500/15 border border-blue-500/25 text-blue-400 flex items-center justify-center mb-4 transition-transform group-hover:scale-105 shadow-md">
                                <i data-feather="mail" class="w-7 h-7"></i>
                            </a>
                            <h2 class="text-lg font-bold text-white mb-1.5 tracking-wide">Email</h2>
                            <p class="text-sm font-semibold text-blue-200 break-all mb-5">ebrahim@marveit.com</p>
                        </div>
                        <a href="mailto:ebrahim@marveit.com?subject=Data%20Annotation%20Project%20Inquiry%20-%20Marveit%20AI"
                            class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full text-xs font-semibold text-white bg-blue-600 hover:bg-blue-500 shadow-md hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5">
                            <span>Send an Email</span>
                            <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- 3. LinkedIn -->
                    <div class="p-6 rounded-2xl bg-white/[0.05] hover:bg-white/[0.09] border border-white/10 hover:border-white/20 transition-all duration-300 flex flex-col items-center justify-between group shadow-lg hover:-translate-y-1">
                        <div class="flex flex-col items-center w-full">
                            <a href="https://www.linkedin.com/company/marveit" target="_blank" rel="noopener noreferrer"
                                aria-label="LinkedIn"
                                class="w-16 h-16 rounded-2xl bg-sky-500/15 border border-sky-500/25 text-sky-400 flex items-center justify-center mb-4 transition-transform group-hover:scale-105 shadow-md">
                                <i data-feather="linkedin" class="w-7 h-7"></i>
                            </a>
                            <h2 class="text-lg font-bold text-white mb-1.5 tracking-wide">LinkedIn</h2>
                            <p class="text-sm font-semibold text-blue-200 tracking-wide mb-5">Marveit AI</p>
                        </div>
                        <a href="https://www.linkedin.com/company/marveit" target="_blank" rel="noopener noreferrer"
                            class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full text-xs font-semibold text-white bg-blue-600 hover:bg-blue-500 shadow-md hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5">
                            <span>Connect on LinkedIn</span>
                            <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- 4. Facebook -->
                    <div class="p-6 rounded-2xl bg-white/[0.05] hover:bg-white/[0.09] border border-white/10 hover:border-white/20 transition-all duration-300 flex flex-col items-center justify-between group shadow-lg hover:-translate-y-1">
                        <div class="flex flex-col items-center w-full">
                            <a href="https://www.facebook.com/marveit" target="_blank" rel="noopener noreferrer"
                                aria-label="Facebook"
                                class="w-16 h-16 rounded-2xl bg-indigo-500/15 border border-indigo-500/25 text-indigo-400 flex items-center justify-center mb-4 transition-transform group-hover:scale-105 shadow-md">
                                <i data-feather="facebook" class="w-7 h-7"></i>
                            </a>
                            <h2 class="text-lg font-bold text-white mb-1.5 tracking-wide">Facebook</h2>
                            <p class="text-sm font-semibold text-blue-200 tracking-wide mb-5">Marveit AI</p>
                        </div>
                        <a href="https://www.facebook.com/marveit" target="_blank" rel="noopener noreferrer"
                            class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-full text-xs font-semibold text-white bg-indigo-600 hover:bg-indigo-500 shadow-md hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5">
                            <span>Visit Our Page</span>
                            <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Message Form & Consultation Details Section -->
        <section class="py-20 bg-gray-50 border-t border-gray-100">
            <div class="container mx-auto px-6 max-w-5xl">
                <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-12">
                        <!-- Left Column: Form Details & Assurance -->
                        <div class="lg:col-span-5 bg-gradient-to-br from-blue-900 to-indigo-950 p-8 md:p-12 text-white flex flex-col justify-between">
                            <div>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/10 text-blue-200 border border-white/15 mb-6">
                                    <i data-feather="zap" class="w-3.5 h-3.5"></i> Fast Response Guarantee
                                </span>
                                <h3 class="text-2xl md:text-3xl font-extrabold mb-4 leading-tight">
                                    Request a Benchmark Pilot
                                </h3>
                                <p class="text-sm text-blue-100/80 leading-relaxed mb-8">
                                    Submit your project specifications or sample instructions. Our engineering team will review your requirements and provide a pilot turnaround within 24–48 hours.
                                </p>

                                <div class="space-y-4 text-xs text-blue-100/90 mb-8">
                                    <div class="flex items-start gap-3">
                                        <div class="w-5 h-5 rounded-full bg-blue-500/20 text-blue-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-feather="check" class="w-3 h-3"></i>
                                        </div>
                                        <span>Bilateral NDA signed before proprietary dataset ingestion</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div class="w-5 h-5 rounded-full bg-blue-500/20 text-blue-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-feather="check" class="w-3 h-3"></i>
                                        </div>
                                        <span>Dedicated project lead & Slack/Teams communication channel</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <div class="w-5 h-5 rounded-full bg-blue-500/20 text-blue-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-feather="check" class="w-3 h-3"></i>
                                        </div>
                                        <span>Strict multi-tier QA with 99.8% precision SLA agreement</span>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-6 border-t border-white/10 text-xs text-blue-200/70">
                                Global Headquarters: Dhaka, Bangladesh • Global Remote Operations 24/7
                            </div>
                        </div>

                        <!-- Right Column: Interactive Form -->
                        <div class="lg:col-span-7 p-8 md:p-12">
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
                                        <label for="name" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                            Your Name <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                            placeholder="e.g. John Doe"
                                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none @error('name') border-red-400 @enderror">
                                    </div>

                                    <!-- Email -->
                                    <div>
                                        <label for="email" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                            Business Email <span class="text-red-500">*</span>
                                        </label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                            placeholder="john@company.com"
                                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none @error('email') border-red-400 @enderror">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <!-- Phone -->
                                    <div>
                                        <label for="phone" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                            Phone / WhatsApp <span class="text-gray-400 font-normal">(Optional)</span>
                                        </label>
                                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                            placeholder="+1 (555) 000-0000"
                                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none">
                                    </div>

                                    <!-- Service Interest -->
                                    <div>
                                        <label for="service" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                            Service of Interest
                                        </label>
                                        <select id="service" name="service"
                                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none bg-white">
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
                                    <label for="message" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                        Project Description & Dataset Volume <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="message" name="message" rows="4" required
                                        placeholder="Please detail your data modality, expected volumes, labeling guidelines, timeline, or any custom tool requirements..."
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none resize-y @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
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
