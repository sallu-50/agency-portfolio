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
            border-radius: 18px;
            box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.05), 0 0 1px 1px rgba(15, 23, 42, 0.02);
            padding: 22px 26px;
            transition: all 0.3s ease;
        }

        @media (max-width: 640px) {
            .ft-card {
                padding: 18px 16px;
                border-radius: 16px;
            }
        }

        .ft-label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 5px;
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
            height: 42px;
            padding: 0 14px;
            font-size: 13.5px;
            color: #0f172a;
            background-color: #f8fafc;
            border: 1.5px solid #cbd5e1;
            border-radius: 9px;
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
            padding: 10px 14px;
            font-size: 13.5px;
            color: #0f172a;
            background-color: #f8fafc;
            border: 1.5px solid #cbd5e1;
            border-radius: 9px;
            outline: none;
            resize: none;
            min-height: 64px;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            display: block;
            box-sizing: border-box;
        }

        .ft-upload-card {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 13px;
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
            width: 32px;
            height: 32px;
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
            gap: 8px;
            height: 38px;
            padding: 0 20px;
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

    <!-- Combined One-Screen Section -->
    <div class="ft-page-bg min-h-[calc(100vh-80px)] flex flex-col justify-center pt-24 pb-8 md:pt-28 md:pb-10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 xl:gap-12 items-center">

                <!-- Left Column: Pilot Intro & Value Props -->
                <div class="lg:col-span-5 text-left">

                    <h1
                        class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-gray-900 mb-3 tracking-tight leading-tight">
                        Start Your <span class="text-blue-600">Free Trial</span> Pilot
                    </h1>

                    <p class="text-sm sm:text-base text-gray-600 max-w-xl leading-relaxed mb-6">
                        Test our labeling quality and benchmark turnaround with zero financial commitment. Send guidelines &
                        sample data for a fast 24-hour turnaround.
                    </p>

                    <!-- Trust & SLA Highlights -->
                    <div class="space-y-3 hidden sm:block pt-1">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0">
                                <i data-feather="check" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs sm:text-sm font-medium text-gray-700">24-48 Hour Turnaround SLA</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-7 h-7 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                                <i data-feather="shield" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs sm:text-sm font-medium text-gray-700">Strict Mutual NDA & Enterprise
                                Security</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-7 h-7 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center flex-shrink-0">
                                <i data-feather="award" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs sm:text-sm font-medium text-gray-700">99.8% Precision Benchmark
                                Quality</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Form Card -->
                <div class="lg:col-span-7">
                    <div class="ft-card">
                        <!-- Success Notification -->
                        @if (session('success'))
                            <div
                                class="mb-4 p-3.5 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-900 flex items-start gap-3">
                                <i data-feather="check-circle" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                                <div>
                                    <h4 class="font-bold text-xs">Request Submitted Successfully!</h4>
                                    <p class="text-[11px] mt-0.5 text-emerald-800">{{ session('success') }}</p>
                                </div>
                            </div>
                        @endif

                        <!-- Error Alert -->
                        @if (isset($errors) && $errors->any())
                            <div class="mb-4 p-3 rounded-xl bg-red-50 border border-red-200 text-red-900">
                                <h4 class="font-bold text-xs mb-1">Please fix the following issues:</h4>
                                <ul class="list-disc list-inside text-[11px] space-y-0.5 text-red-700">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('free-trial.store') }}" method="POST" enctype="multipart/form-data"
                            class="space-y-3">
                            @csrf

                            <!-- Full Name & Business Email -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
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

                            <!-- Country & Phone Number -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div>
                                    <label for="country" class="ft-label">
                                        Country <span class="required">(Required)</span>
                                    </label>
                                    <input type="text" id="country" name="country" value="{{ old('country') }}" required
                                        placeholder="United States"
                                        class="ft-input @error('country') border-red-400 @enderror">
                                </div>

                                <div>
                                    <label for="phone" class="ft-label">
                                        Phone Number <span class="hint">(WhatsApp preferred)</span>
                                    </label>
                                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                        placeholder="+1 (555) 000-0000" class="ft-input">
                                </div>
                            </div>

                            <!-- Primary Service Domain -->
                            <div>
                                <label for="service" class="ft-label">
                                    Primary Data Domain / Service <span class="hint">(Optional)</span>
                                </label>
                                <select id="service" name="service" class="ft-select">
                                    <option value="">Select Domain</option>
                                    <option value="Computer Vision" {{ old('service') === 'Computer Vision' ? 'selected' : '' }}>
                                        Computer Vision (2D/3D Bounding Boxes, Segmentation, Keypoints)</option>
                                    <option value="LiDAR & 3D Point Cloud" {{ old('service') === 'LiDAR & 3D Point Cloud' ? 'selected' : '' }}>
                                        LiDAR & 3D Point Cloud Tracking</option>
                                    <option value="NLP & Text / LLM Alignment" {{ old('service') === 'NLP & Text / LLM Alignment' ? 'selected' : '' }}>
                                        NLP & LLM Alignment (RLHF, NER, Classification)</option>
                                    <option value="Audio & Speech Transcription" {{ old('service') === 'Audio & Speech Transcription' ? 'selected' : '' }}>
                                        Audio & Speech Transcription</option>
                                    <option value="Custom Dataset Collection" {{ old('service') === 'Custom Dataset Collection' ? 'selected' : '' }}>
                                        Custom Dataset Collection</option>
                                </select>
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="ft-label">
                                    Message / Pilot Scope & Instructions <span class="required">(Required)</span>
                                </label>
                                <textarea id="message" name="message" rows="2" required
                                    placeholder="Describe your dataset format, labels needed, volume, or specific guidelines..."
                                    class="ft-textarea @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                            </div>

                            <!-- Project Guideline & Sample Data (Upload Cards) -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <!-- Project Guideline -->
                                <div>
                                    <label class="ft-label">
                                        Project Guideline <span class="hint">(PDF, DOCX)</span>
                                    </label>
                                    <div class="ft-upload-card"
                                        onclick="document.getElementById('project_guideline').click()">
                                        <input type="file" id="project_guideline" name="project_guideline"
                                            accept=".pdf,.doc,.docx,.txt,.odt" class="hidden"
                                            onchange="updateFileName(this, 'guideline_name')">
                                        <div class="ft-upload-icon">
                                            <i data-feather="file-text" class="w-3.5 h-3.5"></i>
                                        </div>
                                        <div class="overflow-hidden">
                                            <div id="guideline_name"
                                                class="text-xs font-semibold text-gray-800 truncate max-w-[170px]">
                                                Upload Guideline
                                            </div>
                                            <span class="text-[10px] text-gray-400 block mt-0.5">PDF / DOC (up to
                                                50MB)</span>
                                        </div>
                                    </div>
                                    @error('project_guideline')
                                        <p class="text-[11px] text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Sample Data -->
                                <div>
                                    <label class="ft-label">
                                        Sample Data <span class="hint">(Images, Video, ZIP)</span>
                                    </label>
                                    <div class="ft-upload-card" onclick="document.getElementById('sample_data').click()">
                                        <input type="file" id="sample_data" name="sample_data"
                                            accept="image/*,video/*,.zip,.rar,.tar,.gz,.7z" class="hidden"
                                            onchange="updateFileName(this, 'sample_name')">
                                        <div class="ft-upload-icon">
                                            <i data-feather="upload-cloud" class="w-3.5 h-3.5"></i>
                                        </div>
                                        <div class="overflow-hidden">
                                            <div id="sample_name"
                                                class="text-xs font-semibold text-gray-800 truncate max-w-[170px]">
                                                Upload Raw Data
                                            </div>
                                            <span class="text-[10px] text-gray-400 block mt-0.5">ZIP / IMG (up to
                                                100MB)</span>
                                        </div>
                                    </div>
                                    @error('sample_data')
                                        <p class="text-[11px] text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Bottom Actions & Security Bar -->
                            <div
                                class="pt-3 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-3">
                                <div class="flex items-center gap-2 text-[11px] text-gray-500">
                                    <svg class="w-3.5 h-3.5 text-emerald-500 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <span>Protected by mutual NDA</span>
                                </div>

                                <button type="submit" class="ft-submit-btn">
                                    <span>Submit Request</span>
                                    <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
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