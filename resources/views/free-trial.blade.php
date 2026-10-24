@extends('layouts.app')

@section('title', 'Start Free Trial Pilot - Marveit AI | Enterprise Data Annotation')
@section('meta_description', 'Request a risk-free sample annotation pilot for your computer vision, NLP, or audio project. 24-48 hour turnaround with 99.8% precision SLA.')

@section('content')
    <div class="pt-24 md:pt-28 bg-gray-50 min-h-screen">
        <!-- Hero Header -->
        <section class="bg-gradient-to-b from-[#0B253A] to-[#071A29] text-white py-16 md:py-20 relative overflow-hidden">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-teal-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="container mx-auto px-6 relative z-10 max-w-5xl text-center">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-white/10 text-blue-200 border border-white/15 mb-4">
                    <i data-feather="zap" class="w-3.5 h-3.5 text-yellow-400"></i> Zero-Risk Production Pilot
                </span>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">
                    Start Your Free Trial Pilot
                </h1>
                <p class="text-base md:text-lg text-blue-100/80 max-w-2xl mx-auto font-light leading-relaxed">
                    Test our labeling speed and benchmark accuracy with zero financial commitment. Submit your guidelines and raw sample data for a quick 24-hour pilot turnaround.
                </p>
            </div>
        </section>

        <!-- Main Form & Benefit Details Section -->
        <section class="py-12 md:py-16 -mt-8 relative z-20">
            <div class="container mx-auto px-4 md:px-6 max-w-5xl">
                <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-12">
                        
                        <!-- Left Column: Pilot Benefits & Assurance -->
                        <div class="lg:col-span-5 bg-gradient-to-br from-blue-900 via-indigo-950 to-gray-900 p-8 md:p-10 text-white flex flex-col justify-between">
                            <div>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider bg-blue-500/20 text-blue-300 border border-blue-400/30 mb-6">
                                    Enterprise Free Pilot SLA
                                </span>
                                
                                <h2 class="text-2xl font-bold mb-4 leading-snug">
                                    Why Leading AI Teams Test Us First
                                </h2>
                                
                                <p class="text-xs md:text-sm text-blue-100/80 leading-relaxed mb-8">
                                    We believe the best way to prove our labeling quality is through actual output on your proprietary data.
                                </p>

                                <div class="space-y-4 text-xs md:text-sm text-blue-100/90 mb-8">
                                    <div class="flex items-start gap-3">
                                        <div class="w-6 h-6 rounded-lg bg-blue-500/20 text-blue-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-feather="check" class="w-3.5 h-3.5 text-blue-400"></i>
                                        </div>
                                        <div>
                                            <span class="font-bold text-white block">Free 50–200 Sample Units</span>
                                            <span class="text-blue-200/70 text-xs">Full multi-tier labeled batch delivered with QA report.</span>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <div class="w-6 h-6 rounded-lg bg-blue-500/20 text-blue-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-feather="clock" class="w-3.5 h-3.5 text-blue-400"></i>
                                        </div>
                                        <div>
                                            <span class="font-bold text-white block">24–48h Turnaround</span>
                                            <span class="text-blue-200/70 text-xs">Rapid sprint execution with edge-case clarification.</span>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <div class="w-6 h-6 rounded-lg bg-blue-500/20 text-blue-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-feather="shield" class="w-3.5 h-3.5 text-blue-400"></i>
                                        </div>
                                        <div>
                                            <span class="font-bold text-white block">Strict Bilateral NDA</span>
                                            <span class="text-blue-200/70 text-xs">Your proprietary guidelines and data remain 100% confidential.</span>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <div class="w-6 h-6 rounded-lg bg-blue-500/20 text-blue-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-feather="award" class="w-3.5 h-3.5 text-blue-400"></i>
                                        </div>
                                        <div>
                                            <span class="font-bold text-white block">99.8% Precision Target</span>
                                            <span class="text-blue-200/70 text-xs">Double-pass QA consensus validation on every frame.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-6 border-t border-white/10">
                                <div class="text-xs text-blue-200/80 mb-2 font-medium">Need immediate assistance?</div>
                                <div class="flex flex-col gap-2">
                                    <a href="https://wa.me/8801753499696?text=Hello%20Marveit%20AI%20Team!%20I%20would%20like%20to%20discuss%20a%20free%20trial%20pilot."
                                       target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center gap-2 text-xs font-semibold text-emerald-400 hover:text-emerald-300 transition">
                                        <i data-feather="message-circle" class="w-4 h-4"></i>
                                        <span>WhatsApp: +880 1753 499696</span>
                                    </a>
                                    <a href="mailto:ebrahim@marveit.com"
                                       class="inline-flex items-center gap-2 text-xs font-semibold text-blue-300 hover:text-white transition">
                                        <i data-feather="mail" class="w-4 h-4"></i>
                                        <span>ebrahim@marveit.com</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: The Free Trial Form with File Uploads -->
                        <div class="lg:col-span-7 p-6 sm:p-8 md:p-10">
                            <!-- Success Notification -->
                            @if (session('success'))
                                <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 flex items-start gap-3">
                                    <i data-feather="check-circle" class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                                    <div>
                                        <h4 class="font-bold text-sm">Request Submitted Successfully!</h4>
                                        <p class="text-xs mt-0.5 text-emerald-800">{{ session('success') }}</p>
                                    </div>
                                </div>
                            @endif

                            <!-- Error Alert -->
                            @if (isset($errors) && $errors->any())
                                <div class="mb-6 p-4 rounded-2xl bg-red-50 border border-red-200 text-red-900">
                                    <h4 class="font-bold text-sm mb-1">Please fix the following issues:</h4>
                                    <ul class="list-disc list-inside text-xs space-y-1 text-red-700">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('free-trial.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                                @csrf

                                <!-- 1. Full Name & 2. Email -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <!-- 1. Full Name -->
                                    <div>
                                        <label for="name" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                            1. Full Name <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                            placeholder="e.g. Abdullah Al Salman"
                                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none @error('name') border-red-400 @enderror">
                                    </div>

                                    <!-- 2. Email -->
                                    <div>
                                        <label for="email" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                            2. Business Email <span class="text-red-500">*</span>
                                        </label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                            placeholder="you@company.com"
                                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none @error('email') border-red-400 @enderror">
                                    </div>
                                </div>

                                <!-- 3. Country & 4. Phone Number -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                    <!-- 3. Country -->
                                    <div>
                                        <label for="country" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                            3. Country <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" id="country" name="country" value="{{ old('country') }}" required
                                            placeholder="e.g. United States, Germany, Bangladesh"
                                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none @error('country') border-red-400 @enderror">
                                    </div>

                                    <!-- 4. Phone Number -->
                                    <div>
                                        <label for="phone" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                            4. Phone Number <span class="text-gray-400 font-normal">(WhatsApp preferred)</span>
                                        </label>
                                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                            placeholder="+1 (555) 000-0000"
                                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none">
                                    </div>
                                </div>

                                <!-- Optional Service of Interest -->
                                <div>
                                    <label for="service" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                        Primary Data Domain / Service
                                    </label>
                                    <select id="service" name="service"
                                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none bg-white">
                                        <option value="">Select Domain (Optional)</option>
                                        <option value="Computer Vision" {{ old('service') === 'Computer Vision' ? 'selected' : '' }}>Computer Vision (2D/3D Bounding Boxes, Segmentation, Keypoints)</option>
                                        <option value="LiDAR & 3D Point Cloud" {{ old('service') === 'LiDAR & 3D Point Cloud' ? 'selected' : '' }}>LiDAR & 3D Point Cloud Tracking</option>
                                        <option value="NLP & Text / LLM Alignment" {{ old('service') === 'NLP & Text / LLM Alignment' ? 'selected' : '' }}>NLP & LLM Alignment (RLHF, NER, Classification)</option>
                                        <option value="Audio & Speech Transcription" {{ old('service') === 'Audio & Speech Transcription' ? 'selected' : '' }}>Audio & Speech Transcription</option>
                                        <option value="Video Annotation" {{ old('service') === 'Video Annotation' ? 'selected' : '' }}>Video Object Tracking & Action Recognition</option>
                                        <option value="Custom Dataset Collection" {{ old('service') === 'Custom Dataset Collection' ? 'selected' : '' }}>Custom Dataset Collection</option>
                                    </select>
                                </div>

                                <!-- 5. Message -->
                                <div>
                                    <label for="message" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                        5. Message / Pilot Scope & Requirements <span class="text-red-500">*</span>
                                    </label>
                                    <textarea id="message" name="message" rows="3" required
                                        placeholder="Briefly describe your dataset, labeling taxonomy, edge cases, or estimated volume..."
                                        class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                                </div>

                                <!-- 6. Project Guideline & 7. Sample Data (File Uploads) -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 pt-1">
                                    <!-- 6. Project Guideline (PDF or Word) -->
                                    <div>
                                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                            6. Project Guideline
                                            <span class="block text-[11px] font-normal text-gray-500 normal-case">PDF or Word file (.pdf, .doc, .docx)</span>
                                        </label>
                                        <div class="relative border-2 border-dashed border-gray-300 hover:border-blue-500 rounded-2xl p-4 text-center transition-colors bg-gray-50/60 hover:bg-blue-50/30 cursor-pointer group"
                                             onclick="document.getElementById('project_guideline').click()">
                                            <input type="file" id="project_guideline" name="project_guideline"
                                                   accept=".pdf,.doc,.docx,.txt,.odt"
                                                   class="hidden"
                                                   onchange="updateFileName(this, 'guideline_name')">
                                            <div class="flex flex-col items-center justify-center pointer-events-none">
                                                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-2 group-hover:scale-105 transition-transform">
                                                    <i data-feather="file-text" class="w-5 h-5"></i>
                                                </div>
                                                <div id="guideline_name" class="text-xs font-semibold text-gray-700 truncate max-w-[200px]">
                                                    Click to upload guideline
                                                </div>
                                                <span class="text-[10px] text-gray-400 mt-0.5">PDF, DOC, DOCX up to 50MB</span>
                                            </div>
                                        </div>
                                        @error('project_guideline')
                                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- 7. Sample Data (Img, Video or Zip) -->
                                    <div>
                                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                            7. Sample Data
                                            <span class="block text-[11px] font-normal text-gray-500 normal-case">Image, Video or Zip archive</span>
                                        </label>
                                        <div class="relative border-2 border-dashed border-gray-300 hover:border-blue-500 rounded-2xl p-4 text-center transition-colors bg-gray-50/60 hover:bg-blue-50/30 cursor-pointer group"
                                             onclick="document.getElementById('sample_data').click()">
                                            <input type="file" id="sample_data" name="sample_data"
                                                   accept="image/*,video/*,.zip,.rar,.tar,.gz,.7z"
                                                   class="hidden"
                                                   onchange="updateFileName(this, 'sample_name')">
                                            <div class="flex flex-col items-center justify-center pointer-events-none">
                                                <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center mb-2 group-hover:scale-105 transition-transform">
                                                    <i data-feather="archive" class="w-5 h-5"></i>
                                                </div>
                                                <div id="sample_name" class="text-xs font-semibold text-gray-700 truncate max-w-[200px]">
                                                    Click to upload raw data
                                                </div>
                                                <span class="text-[10px] text-gray-400 mt-0.5">ZIP, IMG, MP4 up to 100MB</span>
                                            </div>
                                        </div>
                                        @error('sample_data')
                                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Security Notice & Submit Button -->
                                <div class="pt-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                                    <div class="flex items-center gap-2 text-xs text-gray-500">
                                        <i data-feather="lock" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                                        <span>Confidential & protected by mutual NDA</span>
                                    </div>

                                    <button type="submit"
                                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 text-white font-bold px-8 py-3.5 rounded-full shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-sm cursor-pointer">
                                        <span>Submit Free Trial Request</span>
                                        <i data-feather="arrow-right" class="w-4 h-4"></i>
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

@push('scripts')
<script>
    function updateFileName(input, targetId) {
        const display = document.getElementById(targetId);
        if (input.files && input.files.length > 0) {
            const file = input.files[0];
            const sizeInMb = (file.size / (1024 * 1024)).toFixed(1);
            display.textContent = `${file.name} (${sizeInMb} MB)`;
            display.classList.add('text-blue-600', 'font-bold');
        }
    }
</script>
@endpush
