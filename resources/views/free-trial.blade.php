@extends('layouts.app')

@section('title', 'Start Free Trial Pilot - Marveit AI | Enterprise Data Annotation')
@section('meta_description', 'Request a risk-free sample annotation pilot for your computer vision, NLP, or audio project. 24-48 hour turnaround with 99.8% precision SLA.')

@section('content')
    <style>
        .ft-page-bg {
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
        }

        .ft-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.05), 0 0 1px 1px rgba(15, 23, 42, 0.02);
            padding: 36px 40px;
            transition: all 0.3s ease;
        }

        @media (max-width: 640px) {
            .ft-card {
                padding: 24px 20px;
                border-radius: 16px;
            }
        }

        .ft-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
        }

        .ft-label .required {
            color: #ef4444;
            margin-left: 2px;
        }

        .ft-label .hint {
            font-size: 11.5px;
            font-weight: 400;
            color: #94a3b8;
            margin-left: 4px;
        }

        .ft-input,
        .ft-select {
            width: 100%;
            height: 44px;
            padding: 0 14px;
            font-size: 14px;
            color: #0f172a;
            background-color: #f8fafc;
            border: 1px solid #cbd5e1;
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
            border-color: #0e5edd;
            box-shadow: 0 0 0 3px rgba(14, 94, 221, 0.12);
        }

        .ft-textarea {
            width: 100%;
            padding: 12px 14px;
            font-size: 14px;
            color: #0f172a;
            background-color: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            outline: none;
            resize: vertical;
            min-height: 90px;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            display: block;
            box-sizing: border-box;
        }

        .ft-upload-card {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            background: #f8fafc;
            border: 1.5px dashed #cbd5e1;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
            box-sizing: border-box;
        }

        .ft-upload-card:hover {
            background: #f0f7ff;
            border-color: #0e5edd;
        }

        .ft-upload-icon {
            width: 38px;
            height: 38px;
            border-radius: 9px;
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
            gap: 8px;
            height: 40px;
            padding: 0 22px;
            font-size: 13px;
            font-weight: 600;
            color: #ffffff;
            background: linear-gradient(135deg, #0e5edd 0%, #004bbf 100%);
            border: none;
            border-radius: 9999px;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(14, 94, 221, 0.25);
        }

        .ft-submit-btn:hover {
            box-shadow: 0 6px 18px rgba(14, 94, 221, 0.35);
            transform: translateY(-1px);
        }
    </style>

    <div class="pt-24 md:pt-28 ft-page-bg min-h-screen">
        <!-- Hero Header -->
        <section class="py-6 border-b border-gray-200 relative overflow-hidden bg-white">
            <div class="container mx-auto px-6 relative z-10 max-w-3xl text-center">
                <!-- <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-semibold text-blue-700 bg-blue-50 border border-blue-200/70 mb-3.5">
                        <i data-feather="zap" class="w-3.5 h-3.5 text-blue-600 fill-current"></i>
                        <span>Zero-Risk Production Pilot</span>
                    </span> -->

                <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-3 tracking-tight">
                    Start Your <span class="text-blue-600">Free Trial</span> Pilot
                </h1>

                <p class="text-sm sm:text-base text-gray-600 max-w-xl mx-auto leading-relaxed">
                    Test our labeling quality and benchmark turnaround with zero financial commitment. Send guidelines &
                    sample data for a fast 24-hour turnaround.
                </p>
            </div>
        </section>

        <!-- Main Form Section -->
        <section class="py-10 md:py-14 relative z-20">
            <div class="container mx-auto px-4 sm:px-6 max-w-2xl">
                <div class="ft-card">
                    <!-- Success Notification -->
                    @if (session('success'))
                        <div
                            class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-900 flex items-start gap-3">
                            <i data-feather="check-circle" class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="font-bold text-sm">Request Submitted Successfully!</h4>
                                <p class="text-xs mt-0.5 text-emerald-800">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    <!-- Error Alert -->
                    @if (isset($errors) && $errors->any())
                        <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-900">
                            <h4 class="font-bold text-sm mb-1">Please fix the following issues:</h4>
                            <ul class="list-disc list-inside text-xs space-y-1 text-red-700">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('free-trial.store') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-4">
                        @csrf

                        <!-- Full Name & Business Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="ft-label">
                                    Full Name <span class="required">*</span>
                                </label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                    placeholder="Alex Morgan" class="ft-input @error('name') border-red-400 @enderror">
                                @error('name')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="ft-label">
                                    Business Email <span class="required">*</span>
                                </label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                    placeholder="alex@company.com"
                                    class="ft-input @error('email') border-red-400 @enderror">
                                @error('email')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Country & Phone Number -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="country" class="ft-label">
                                    Country <span class="required">*</span>
                                </label>
                                <input type="text" id="country" name="country" value="{{ old('country') }}" required
                                    placeholder="United States" class="ft-input @error('country') border-red-400 @enderror">
                                @error('country')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="phone" class="ft-label">
                                    Phone Number <span class="hint">(WhatsApp preferred)</span>
                                </label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                    placeholder="+1 (555) 000-0000" class="ft-input @error('phone') border-red-400 @enderror">
                                @error('phone')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Primary Service Domain -->
                        <div>
                            <label for="service" class="ft-label">
                                Primary Data Domain / Service <span class="hint">(Optional)</span>
                            </label>
                            <select id="service" name="service" class="ft-select @error('service') border-red-400 @enderror">
                                <option value="">Select Domain</option>
                                @if (isset($services) && $services->isNotEmpty())
                                    @foreach ($services as $srv)
                                        <option value="{{ $srv->title }}"
                                            {{ (old('service') == $srv->title || old('service') == $srv->slug || request('service') == $srv->title || request('service') == $srv->slug) ? 'selected' : '' }}>
                                            {{ $srv->title }} ({{ $srv->category }})
                                        </option>
                                    @endforeach
                                    <option value="LiDAR & 3D Point Cloud"
                                        {{ (old('service') === 'LiDAR & 3D Point Cloud' || request('service') === 'LiDAR & 3D Point Cloud') ? 'selected' : '' }}>
                                        LiDAR & 3D Point Cloud Tracking
                                    </option>
                                    <option value="Custom Dataset Collection"
                                        {{ (old('service') === 'Custom Dataset Collection' || request('service') === 'Custom Dataset Collection') ? 'selected' : '' }}>
                                        Custom Dataset Collection / Other
                                    </option>
                                @else
                                    <option value="Computer Vision" {{ (old('service') === 'Computer Vision' || request('service') === 'Computer Vision') ? 'selected' : '' }}>
                                        Computer Vision (2D/3D Bounding Boxes, Segmentation, Keypoints)</option>
                                    <option value="LiDAR & 3D Point Cloud" {{ (old('service') === 'LiDAR & 3D Point Cloud' || request('service') === 'LiDAR & 3D Point Cloud') ? 'selected' : '' }}>
                                        LiDAR & 3D Point Cloud Tracking</option>
                                    <option value="NLP & Text / LLM Alignment" {{ (old('service') === 'NLP & Text / LLM Alignment' || request('service') === 'NLP & Text / LLM Alignment') ? 'selected' : '' }}>
                                        NLP & LLM Alignment (RLHF, NER, Classification)</option>
                                    <option value="Audio & Speech Transcription" {{ (old('service') === 'Audio & Speech Transcription' || request('service') === 'Audio & Speech Transcription') ? 'selected' : '' }}>
                                        Audio & Speech Transcription</option>
                                    <option value="Video Annotation" {{ (old('service') === 'Video Annotation' || request('service') === 'Video Annotation') ? 'selected' : '' }}>
                                        Video Object Tracking & Action Recognition</option>
                                    <option value="Custom Dataset Collection" {{ (old('service') === 'Custom Dataset Collection' || request('service') === 'Custom Dataset Collection') ? 'selected' : '' }}>
                                        Custom Dataset Collection</option>
                                @endif
                            </select>
                            @error('service')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="ft-label">
                                Message / Pilot Scope & Instructions <span class="required">*</span>
                            </label>
                            <textarea id="message" name="message" rows="3" required
                                placeholder="Describe your dataset format, labels needed, volume, or specific guidelines..."
                                class="ft-textarea @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Project Guideline & Sample Data (Upload Cards) -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1">
                            <!-- Project Guideline -->
                            <div>
                                <label class="ft-label" for="project_guideline">
                                    Project Guideline <span class="hint">(PDF, DOCX)</span>
                                </label>
                                <label for="project_guideline" class="ft-upload-card cursor-pointer">
                                    <input type="file" id="project_guideline" name="project_guideline"
                                        accept=".pdf,.doc,.docx,.txt,.odt" class="hidden"
                                        onchange="updateFileName(this, 'guideline_name')">
                                    <div class="ft-upload-icon">
                                        <i data-feather="file-text" class="w-4 h-4"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div id="guideline_name"
                                            class="text-xs font-semibold text-gray-800 truncate max-w-[170px]">
                                            Upload Guideline
                                        </div>
                                        <span class="text-[11px] text-gray-400 block mt-0.5">PDF or DOC up to 50MB</span>
                                    </div>
                                </label>
                                @error('project_guideline')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Sample Data -->
                            <div>
                                <label class="ft-label" for="sample_data">
                                    Sample Data <span class="hint">(Images, Video, ZIP)</span>
                                </label>
                                <label for="sample_data" class="ft-upload-card cursor-pointer">
                                    <input type="file" id="sample_data" name="sample_data"
                                        accept="image/*,video/*,.zip,.rar,.tar,.gz,.7z" class="hidden"
                                        onchange="updateFileName(this, 'sample_name')">
                                    <div class="ft-upload-icon">
                                        <i data-feather="upload-cloud" class="w-4 h-4"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div id="sample_name"
                                            class="text-xs font-semibold text-gray-800 truncate max-w-[170px]">
                                            Upload Raw Data
                                        </div>
                                        <span class="text-[11px] text-gray-400 block mt-0.5">ZIP, IMG up to 100MB</span>
                                    </div>
                                </label>
                                @error('sample_data')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Bottom Actions & Security Bar -->
                        <div
                            class="pt-5 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <div class="flex items-center gap-2 text-xs text-gray-500">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span>Confidential & protected by mutual NDA</span>
                            </div>

                            <button type="submit" class="ft-submit-btn">
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