@extends('layouts.app')

@section('title', 'Start Free Trial Pilot - Marveit AI | Enterprise Data Annotation')
@section('meta_description', 'Request a risk-free sample annotation pilot for your computer vision, NLP, or audio project. 24-48 hour turnaround with 99.8% precision SLA.')

@section('content')
    <div class="pt-24 md:pt-28 bg-gray-50/60 min-h-screen">
        <!-- Hero Header (Crisp, High-Contrast Light Theme) -->
        <section class="py-14 md:py-20 border-b border-gray-200 relative overflow-hidden"
            style="background: linear-gradient(180deg, #ffffff 0%, #f1f5f9 100%);">
            <div class="container mx-auto px-6 relative z-10 max-w-4xl text-center">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold text-blue-700 bg-blue-50 border border-blue-200 shadow-xs mb-4">
                    <i data-feather="zap" class="w-3.5 h-3.5 text-blue-600 fill-current"></i>
                    <span>Zero-Risk Production Pilot</span>
                </span>

                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 tracking-tight">
                    Start Your <span class="text-blue-600">Free Trial</span> Pilot
                </h1>

                <p class="text-sm sm:text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed font-normal">
                    Test our labeling speed and benchmark accuracy with zero financial commitment. Submit your guidelines
                    and raw sample data for a fast 24-hour turnaround.
                </p>
            </div>
        </section>

        <!-- Main Form Section -->
        <section class="py-10 md:py-16 relative z-20">
            <div class="container mx-auto px-4 sm:px-6 max-w-3xl">
                <div class="bg-white rounded-3xl shadow-xl border border-gray-200 p-6 sm:p-8 md:p-10">
                    <!-- Success Notification -->
                    @if (session('success'))
                        <div
                            class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 flex items-start gap-3">
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

                    <form action="{{ route('free-trial.store') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-4 sm:space-y-5">
                        @csrf

                        <!-- Full Name & Business Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="name"
                                    class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                                        <i data-feather="user" class="w-4 h-4"></i>
                                    </span>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                        placeholder="Alex Morgan"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50/40 hover:bg-white focus:bg-white focus:border-blue-600 focus:ring-4 focus:ring-blue-500/10 text-sm transition outline-none @error('name') border-red-400 @enderror">
                                </div>
                            </div>

                            <div>
                                <label for="email"
                                    class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">
                                    Business Email <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                                        <i data-feather="mail" class="w-4 h-4"></i>
                                    </span>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                        placeholder="alex@company.com"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50/40 hover:bg-white focus:bg-white focus:border-blue-600 focus:ring-4 focus:ring-blue-500/10 text-sm transition outline-none @error('email') border-red-400 @enderror">
                                </div>
                            </div>
                        </div>

                        <!-- Country & Phone Number -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="country"
                                    class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">
                                    Country <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                                        <i data-feather="globe" class="w-4 h-4"></i>
                                    </span>
                                    <input type="text" id="country" name="country" value="{{ old('country') }}" required
                                        placeholder="United States"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50/40 hover:bg-white focus:bg-white focus:border-blue-600 focus:ring-4 focus:ring-blue-500/10 text-sm transition outline-none @error('country') border-red-400 @enderror">
                                </div>
                            </div>

                            <div>
                                <label for="phone"
                                    class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">
                                    Phone Number <span class="text-gray-400 font-normal lowercase">(whatsapp preferred)</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                                        <i data-feather="phone" class="w-4 h-4"></i>
                                    </span>
                                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                        placeholder="+1 (555) 000-0000"
                                        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50/40 hover:bg-white focus:bg-white focus:border-blue-600 focus:ring-4 focus:ring-blue-500/10 text-sm transition outline-none">
                                </div>
                            </div>
                        </div>

                        <!-- Primary Service Domain -->
                        <div>
                            <label for="service"
                                class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">
                                Primary Data Domain / Service
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                                    <i data-feather="layers" class="w-4 h-4"></i>
                                </span>
                                <select id="service" name="service"
                                    class="w-full pl-10 pr-8 py-2.5 rounded-xl border border-gray-200 bg-gray-50/40 hover:bg-white focus:bg-white focus:border-blue-600 focus:ring-4 focus:ring-blue-500/10 text-sm transition outline-none">
                                    <option value="">Select Domain (Optional)</option>
                                    <option value="Computer Vision" {{ old('service') === 'Computer Vision' ? 'selected' : '' }}>
                                        Computer Vision (2D/3D Bounding Boxes, Segmentation, Keypoints)</option>
                                    <option value="LiDAR & 3D Point Cloud" {{ old('service') === 'LiDAR & 3D Point Cloud' ? 'selected' : '' }}>LiDAR & 3D Point Cloud Tracking</option>
                                    <option value="NLP & Text / LLM Alignment" {{ old('service') === 'NLP & Text / LLM Alignment' ? 'selected' : '' }}>NLP & LLM Alignment (RLHF, NER, Classification)</option>
                                    <option value="Audio & Speech Transcription" {{ old('service') === 'Audio & Speech Transcription' ? 'selected' : '' }}>Audio & Speech Transcription</option>
                                    <option value="Video Annotation" {{ old('service') === 'Video Annotation' ? 'selected' : '' }}>Video Object Tracking & Action Recognition</option>
                                    <option value="Custom Dataset Collection" {{ old('service') === 'Custom Dataset Collection' ? 'selected' : '' }}>Custom Dataset Collection</option>
                                </select>
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message"
                                class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">
                                Message / Pilot Scope & Instructions <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" name="message" rows="3" required
                                placeholder="Describe your dataset format, classes to label, volume, or specific guidelines..."
                                class="w-full p-3.5 rounded-xl border border-gray-200 bg-gray-50/40 hover:bg-white focus:bg-white focus:border-blue-600 focus:ring-4 focus:ring-blue-500/10 text-sm transition outline-none @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                        </div>

                        <!-- Project Guideline & Sample Data (File Uploads) -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1">
                            <!-- Project Guideline -->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">
                                    Project Guideline
                                    <span class="text-gray-400 font-normal lowercase">(pdf, doc, docx)</span>
                                </label>
                                <div class="relative border border-dashed border-gray-300 hover:border-blue-500 rounded-xl p-3 text-center transition-all bg-gray-50/60 hover:bg-blue-50/40 cursor-pointer group"
                                    onclick="document.getElementById('project_guideline').click()">
                                    <input type="file" id="project_guideline" name="project_guideline"
                                        accept=".pdf,.doc,.docx,.txt,.odt" class="hidden"
                                        onchange="updateFileName(this, 'guideline_name')">
                                    <div class="flex items-center justify-center gap-3 pointer-events-none">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                                            <i data-feather="file-text" class="w-4 h-4"></i>
                                        </div>
                                        <div class="text-left overflow-hidden">
                                            <div id="guideline_name"
                                                class="text-xs font-semibold text-gray-700 truncate max-w-[170px]">
                                                Click to upload
                                            </div>
                                            <span class="text-[10px] text-gray-400 block">PDF, DOC up to 50MB</span>
                                        </div>
                                    </div>
                                </div>
                                @error('project_guideline')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Sample Data -->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">
                                    Sample Data
                                    <span class="text-gray-400 font-normal lowercase">(images, video, zip)</span>
                                </label>
                                <div class="relative border border-dashed border-gray-300 hover:border-blue-500 rounded-xl p-3 text-center transition-all bg-gray-50/60 hover:bg-blue-50/40 cursor-pointer group"
                                    onclick="document.getElementById('sample_data').click()">
                                    <input type="file" id="sample_data" name="sample_data"
                                        accept="image/*,video/*,.zip,.rar,.tar,.gz,.7z" class="hidden"
                                        onchange="updateFileName(this, 'sample_name')">
                                    <div class="flex items-center justify-center gap-3 pointer-events-none">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-600 flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                                            <i data-feather="upload-cloud" class="w-4 h-4"></i>
                                        </div>
                                        <div class="text-left overflow-hidden">
                                            <div id="sample_name"
                                                class="text-xs font-semibold text-gray-700 truncate max-w-[170px]">
                                                Click to upload
                                            </div>
                                            <span class="text-[10px] text-gray-400 block">ZIP, IMG up to 100MB</span>
                                        </div>
                                    </div>
                                </div>
                                @error('sample_data')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Security Notice & Compact Submit Button -->
                        <div
                            class="pt-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-3">
                            <div class="flex items-center gap-1.5 text-xs text-gray-500">
                                <i data-feather="shield" class="w-3.5 h-3.5 text-emerald-600 flex-shrink-0"></i>
                                <span>Confidential & protected by mutual NDA</span>
                            </div>

                            <button type="submit"
                                class="inline-flex items-center justify-center gap-1.5 text-white font-semibold px-5 py-2.5 rounded-lg shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all text-xs sm:text-sm cursor-pointer bg-blue-600 hover:bg-blue-700">
                                <span>Submit Request</span>
                                <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                            </button>
                        </div>
                    </form>
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