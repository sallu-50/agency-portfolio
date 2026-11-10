@extends('layouts.app')

@section('title', 'Careers at Marveit AI - Join Our Data Annotation & ML Engineering Team')
@section('meta_description', 'Apply to join Marveit AI as a Data Annotator, Senior Data Annotator, QA Lead, Team Lead, or ML Data Engineer in Mymensingh, Bangladesh or remotely.')

@push('styles')
    <style>
        .cr-page-bg {
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
            padding-top: 6rem;
            padding-bottom: 4.5rem;
        }

        @media (min-width: 768px) {
            .cr-page-bg {
                padding-top: 7.5rem;
                padding-bottom: 5.5rem;
            }
        }

        .cr-layout-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2.75rem;
            align-items: start;
        }

        @media (min-width: 1024px) {
            .cr-layout-grid {
                grid-template-columns: 5fr 7fr;
                gap: 3.5rem;
                align-items: start;
            }
        }

        .cr-left-panel {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            text-align: left;
            gap: 1.75rem;
            width: 100%;
        }

        .cr-role-card {
            width: 100%;
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 1rem;
            padding: 1rem 1.25rem;
            text-align: left;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 1px 3px 0 rgba(15, 23, 42, 0.03);
        }

        .cr-role-card:hover {
            border-color: #60a5fa;
            box-shadow: 0 6px 16px -4px rgba(37, 99, 235, 0.12);
            transform: translateY(-1px);
        }

        .cr-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.06), 0 0 1px 1px rgba(15, 23, 42, 0.02);
            padding: 28px 32px;
        }

        @media (max-width: 640px) {
            .cr-card {
                padding: 22px 18px;
                border-radius: 16px;
            }
        }

        .cr-label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 6px;
            letter-spacing: -0.01em;
        }

        .cr-label .required {
            color: #ef4444;
            font-size: 11.5px;
            font-weight: 600;
            margin-left: 4px;
        }

        .cr-label .hint {
            font-size: 11.5px;
            font-weight: 500;
            color: #64748b;
            margin-left: 4px;
        }

        .cr-input,
        .cr-select {
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

        .cr-textarea {
            width: 100%;
            padding: 12px 14px;
            font-size: 13.5px;
            color: #0f172a;
            background-color: #f8fafc;
            border: 1.5px solid #cbd5e1;
            border-radius: 10px;
            outline: none;
            resize: vertical;
            min-height: 96px;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            display: block;
            box-sizing: border-box;
        }

        .cr-input:focus,
        .cr-select:focus,
        .cr-textarea:focus {
            background-color: #ffffff;
            border-color: #2563eb !important;
            box-shadow: 0 0 0 3.5px rgba(37, 99, 235, 0.18) !important;
        }

        .cr-upload-card {
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

        .cr-upload-card:hover {
            background: #eff6ff;
            border-color: #2563eb;
        }

        .cr-upload-icon {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            background: #dbeafe;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .cr-submit-btn {
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

        .cr-submit-btn:hover {
            background-color: #004bbf;
            box-shadow: 0 6px 22px rgba(14, 94, 221, 0.38);
            transform: translateY(-1px);
        }

        .cr-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .cr-form-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }

        @media (min-width: 640px) {
            .cr-form-row {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                column-gap: 20px;
                row-gap: 16px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="cr-page-bg">
        <div class="container mx-auto px-6">
            <div class="cr-layout-grid">

                <!-- Left Column: Open Positions & Hiring Info -->
                <div class="cr-left-panel text-left">
                    <div class="w-full text-left">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 mb-4">
                            <i data-feather="briefcase" class="w-3.5 h-3.5"></i>
                            <span>We Are Hiring</span>
                        </span>
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">
                            Careers at <span class="text-blue-600">Marveit AI</span>
                        </h1>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed max-w-lg">
                            Join our multidisciplinary team of annotation specialists, QA leads, and AI engineers building high-precision ground truth datasets for global machine learning teams.
                        </p>
                    </div>

                    <!-- Open Roles -->
                    <div class="w-full space-y-3">
                        <h2 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Open Roles (Click to Select)</h2>

                        <button type="button" onclick="selectCareerRole('Data Annotator')" class="cr-role-card">
                            <div class="flex items-center justify-between gap-3">
                                <div>
                                    <div class="text-sm font-bold text-gray-900">Data Annotator (CV / NLP / Audio)</div>
                                    <div class="text-xs text-gray-500 mt-0.5">Mymensingh, Bangladesh &middot; Full-Time</div>
                                </div>
                                <span class="text-xs font-semibold text-blue-600">Apply &rarr;</span>
                            </div>
                        </button>

                        <button type="button" onclick="selectCareerRole('Senior Data Annotator')" class="cr-role-card">
                            <div class="flex items-center justify-between gap-3">
                                <div>
                                    <div class="text-sm font-bold text-gray-900">Senior Data Annotator</div>
                                    <div class="text-xs text-gray-500 mt-0.5">Mymensingh, Bangladesh &middot; Full-Time</div>
                                </div>
                                <span class="text-xs font-semibold text-blue-600">Apply &rarr;</span>
                            </div>
                        </button>

                        <button type="button" onclick="selectCareerRole('QA Lead')" class="cr-role-card">
                            <div class="flex items-center justify-between gap-3">
                                <div>
                                    <div class="text-sm font-bold text-gray-900">QA Lead (Quality Assurance)</div>
                                    <div class="text-xs text-gray-500 mt-0.5">Mymensingh, Bangladesh &middot; Full-Time</div>
                                </div>
                                <span class="text-xs font-semibold text-blue-600">Apply &rarr;</span>
                            </div>
                        </button>

                        <button type="button" onclick="selectCareerRole('Team Lead')" class="cr-role-card">
                            <div class="flex items-center justify-between gap-3">
                                <div>
                                    <div class="text-sm font-bold text-gray-900">Annotation Team Lead</div>
                                    <div class="text-xs text-gray-500 mt-0.5">Mymensingh, Bangladesh &middot; Full-Time</div>
                                </div>
                                <span class="text-xs font-semibold text-blue-600">Apply &rarr;</span>
                            </div>
                        </button>
                    </div>

                    <!-- Direct Hiring Contact Box -->
                    <div class="w-full bg-white rounded-2xl border border-gray-200 p-5 space-y-2.5 text-xs text-gray-600 shadow-xs">
                        <div class="font-bold text-gray-900 text-sm">Direct Hiring Contact</div>
                        <div class="flex items-center gap-2">
                            <i data-feather="mail" class="w-4 h-4 text-blue-600 flex-shrink-0"></i>
                            <span>Email CV directly: <a href="mailto:ebrahim@marveit.com?subject=Career%20Application%20-%20Marveit%20AI" class="text-blue-600 font-semibold hover:underline">ebrahim@marveit.com</a></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-feather="map-pin" class="w-4 h-4 text-blue-600 flex-shrink-0"></i>
                            <span>Office Address: Mymensingh, Bangladesh</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-feather="clock" class="w-4 h-4 text-blue-600 flex-shrink-0"></i>
                            <span>Hiring Team Response: Within 24 hours</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Application Form Card -->
                <div>
                    <div class="cr-card" id="career-form-card">
                        <div class="mb-6 pb-4 border-b border-gray-100">
                            <h2 class="text-xl font-bold text-gray-900">Submit Your Application</h2>
                            <p class="text-xs sm:text-sm text-gray-500 mt-1">Fill out the form below and attach your CV/resume. We review every application carefully.</p>
                        </div>

                        @if (session('success'))
                            <div class="mb-5 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-900 flex items-start gap-3">
                                <i data-feather="check-circle" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                                <div>
                                    <h4 class="font-bold text-xs">Application Submitted!</h4>
                                    <p class="text-[11px] mt-0.5 text-emerald-800">{{ session('success') }}</p>
                                </div>
                            </div>
                        @endif

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

                        <form action="{{ route('careers.store') }}" method="POST" enctype="multipart/form-data" class="cr-form">
                            @csrf

                            <div class="cr-form-row">
                                <div>
                                    <label for="name" class="cr-label">
                                        Full Name <span class="required">(Required)</span>
                                    </label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                        placeholder="Alex Morgan" class="cr-input">
                                </div>

                                <div>
                                    <label for="email" class="cr-label">
                                        Email Address <span class="required">(Required)</span>
                                    </label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                        placeholder="you@example.com" class="cr-input">
                                </div>
                            </div>

                            <div class="cr-form-row">
                                <div>
                                    <label for="phone" class="cr-label">
                                        Phone / WhatsApp <span class="hint">(optional)</span>
                                    </label>
                                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                        placeholder="+880 1700 000000" class="cr-input">
                                </div>

                                <div>
                                    <label for="position" class="cr-label">
                                        Role Applying For <span class="required">(Required)</span>
                                    </label>
                                    <select id="position" name="position" required class="cr-select">
                                        <option value="" disabled {{ old('position') ? '' : 'selected' }}>Select a role</option>
                                        <option value="Data Annotator" {{ old('position') === 'Data Annotator' ? 'selected' : '' }}>Data Annotator (CV / NLP / Audio)</option>
                                        <option value="Senior Data Annotator" {{ old('position') === 'Senior Data Annotator' ? 'selected' : '' }}>Senior Data Annotator</option>
                                        <option value="QA Lead" {{ old('position') === 'QA Lead' ? 'selected' : '' }}>QA Lead (Quality Assurance)</option>
                                        <option value="Team Lead" {{ old('position') === 'Team Lead' ? 'selected' : '' }}>Annotation Team Lead</option>
                                        <option value="ML Data Engineer" {{ old('position') === 'ML Data Engineer' ? 'selected' : '' }}>ML Data Engineer</option>
                                    </select>
                                </div>
                            </div>

                            <div class="cr-form-row">
                                <div>
                                    <label for="location" class="cr-label">
                                        City / Location <span class="hint">(optional)</span>
                                    </label>
                                    <input type="text" id="location" name="location" value="{{ old('location') }}"
                                        placeholder="Mymensingh, Bangladesh" class="cr-input">
                                </div>

                                <div>
                                    <label for="portfolio_url" class="cr-label">
                                        LinkedIn / Portfolio URL <span class="hint">(optional)</span>
                                    </label>
                                    <input type="text" id="portfolio_url" name="portfolio_url" value="{{ old('portfolio_url') }}"
                                        placeholder="https://linkedin.com/in/..." class="cr-input">
                                </div>
                            </div>

                            <div>
                                <label class="cr-label">
                                    Resume / CV <span class="hint">(PDF or DOCX, up to 20 MB)</span>
                                </label>
                                <div class="cr-upload-card" onclick="document.getElementById('resume').click()">
                                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" class="hidden"
                                        onchange="updateResumeName(this)">
                                    <div class="cr-upload-icon">
                                        <i data-feather="file-text" class="w-4 h-4"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div id="resume_name" class="text-xs font-semibold text-gray-800 truncate">
                                            Upload Resume / CV
                                        </div>
                                        <span class="text-[10px] text-gray-400 block mt-0.5">PDF, DOC, or DOCX up to 20 MB</span>
                                    </div>
                                </div>
                                @error('resume')
                                    <p class="text-[11px] text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="cr-label">
                                    Experience &amp; Cover Note <span class="required">(Required)</span>
                                </label>
                                <textarea id="message" name="message" rows="3" required
                                    placeholder="Share your experience with annotation tools (CVAT, Label Studio, Labelbox), QA metrics, or domain specialization."
                                    class="cr-textarea">{{ old('message') }}</textarea>
                            </div>

                            <div class="py-1">
                                <label class="flex items-start gap-3 cursor-pointer">
                                    <input type="checkbox" name="privacy_consent" value="1" required {{ old('privacy_consent') ? 'checked' : '' }}
                                        class="mt-1 w-4 h-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500 flex-shrink-0">
                                    <span class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                                        I agree to the <a href="{{ route('privacy-policy') }}" class="text-blue-600 font-semibold hover:underline">Privacy Policy</a> and consent to Marveit reviewing my application.
                                    </span>
                                </label>
                            </div>

                            <div class="pt-4 border-t border-gray-100 flex flex-col items-center gap-3">
                                <button type="submit" class="cr-submit-btn w-full">
                                    <span>Submit Application</span>
                                    <i data-feather="arrow-right" class="w-4 h-4"></i>
                                </button>
                                <p class="text-[11px] text-gray-400 text-center">
                                    We reply to qualified applicants within 24 hours.
                                </p>
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
        function updateResumeName(input) {
            const display = document.getElementById('resume_name');
            if (input.files && input.files.length > 0) {
                const file = input.files[0];
                const sizeInMb = (file.size / (1024 * 1024)).toFixed(1);
                display.textContent = `${file.name} (${sizeInMb} MB)`;
                display.classList.add('text-blue-600', 'font-bold');
            }
        }

        function selectCareerRole(role) {
            const select = document.getElementById('position');
            if (select) {
                select.value = role;
            }
            const formCard = document.getElementById('career-form-card');
            if (formCard) {
                formCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    </script>
@endpush
