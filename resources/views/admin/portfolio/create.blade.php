@extends('layouts.admin')

@section('title', 'Upload New Portfolio Project')
@section('page_title', 'Upload Portfolio Project')
@section('page_subtitle', 'Fill in the dataset details, upload an image or preview, and publish to website')

@section('content')
    <div class="max-w-4xl mx-auto">
        <!-- Error Alerts -->
        @if ($errors->any())
            <div class="mb-6 p-4 rounded-2xl bg-red-50 border border-red-200 text-red-800">
                <h4 class="font-bold text-xs uppercase tracking-wider mb-2">Please fix the following validation errors:</h4>
                <ul class="list-disc list-inside text-xs space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <!-- 1. Primary Information Card -->
            <div class="bg-white p-6 md:p-8 rounded-3xl border border-gray-200/80 shadow-2xs space-y-6">
                <div class="border-b border-gray-100 pb-4">
                    <h3 class="text-base font-bold text-gray-900">Project Basics</h3>
                    <p class="text-xs text-gray-500">Core identifying information for the case study</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Title -->
                    <div class="md:col-span-2">
                        <label for="title" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                            Project Title <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" required
                            placeholder="e.g. Autonomous Vehicle 3D LiDAR & Bounding Cuboids"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none">
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="category" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                            Service Category <span class="text-red-500">*</span>
                        </label>
                        <select id="category" name="category" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none bg-white">
                            @foreach ($categories as $cat)
                                <option value="{{ $cat }}" {{ old('category') === $cat ? 'selected' : '' }}>
                                    {{ $cat }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Client Name -->
                    <div>
                        <label for="client_name" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                            Client / Organization <span class="text-gray-400 font-normal">(Optional)</span>
                        </label>
                        <input type="text" id="client_name" name="client_name" value="{{ old('client_name') }}"
                            placeholder="e.g. Tier-1 Global Automotive OEM"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none">
                    </div>

                    <!-- Slug -->
                    <div class="md:col-span-2">
                        <label for="slug" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                            URL Slug <span class="text-gray-400 font-normal">(Leave empty to auto-generate from title)</span>
                        </label>
                        <div class="flex items-center">
                            <span class="px-3 py-3 bg-gray-50 border border-r-0 border-gray-200 text-xs text-gray-500 rounded-l-xl font-mono">/portfolio/</span>
                            <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                                placeholder="autonomous-vehicle-3d-lidar"
                                class="w-full px-4 py-3 rounded-r-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none font-mono">
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Media & Image Upload Card -->
            <div class="bg-white p-6 md:p-8 rounded-3xl border border-gray-200/80 shadow-2xs space-y-6">
                <div class="border-b border-gray-100 pb-4">
                    <h3 class="text-base font-bold text-gray-900">Project Media & Visuals</h3>
                    <p class="text-xs text-gray-500">Upload a project cover screenshot or dataset visualization</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                    <!-- File Upload Input -->
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                            Upload Image File
                        </label>
                        <div class="border-2 border-dashed border-gray-200 hover:border-blue-500 rounded-2xl p-6 text-center cursor-pointer transition relative bg-gray-50/50 group"
                            onclick="document.getElementById('image_file').click()">
                            <i data-feather="upload-cloud" class="w-8 h-8 text-gray-400 group-hover:text-blue-600 mx-auto mb-2 transition"></i>
                            <p class="text-xs font-bold text-gray-700">Click to upload file</p>
                            <p class="text-[11px] text-gray-400 mt-1">PNG, JPG, WEBP, or SVG up to 10MB</p>
                            <input type="file" id="image_file" name="image_file" accept="image/*" class="hidden"
                                onchange="previewUploadImage(this)">
                        </div>

                        <div class="mt-4">
                            <label for="image_url" class="block text-xs font-bold text-gray-500 mb-1">
                                Or Image URL / Existing Asset Path
                            </label>
                            <input type="text" id="image_url" name="image_url" value="{{ old('image_url') }}"
                                placeholder="image/team-2.jpg or https://..."
                                class="w-full px-3 py-2 rounded-xl border border-gray-200 focus:border-blue-600 text-xs transition outline-none">
                        </div>
                    </div>

                    <!-- Live Image Preview Box -->
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                            Live Preview
                        </label>
                        <div class="aspect-video w-full rounded-2xl overflow-hidden bg-gray-950 border border-gray-200 relative flex items-center justify-center">
                            <img id="image_preview" src="{{ asset('image/team-2.jpg') }}" alt="Preview"
                                class="w-full h-full object-cover">
                            <span id="preview_placeholder" class="hidden text-xs text-gray-400 font-medium">No image selected</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2b. Before & After Image Comparison Slider Card -->
            <div class="bg-white p-6 md:p-8 rounded-3xl border border-gray-200/80 shadow-2xs space-y-6">
                <div class="border-b border-gray-100 pb-4 flex items-center justify-between">
                    <div>
                        <h3 class="text-base font-bold text-gray-900 flex items-center gap-2">
                            <i data-feather="sliders" class="w-4 h-4 text-blue-600"></i>
                            Before & After Comparison Slider (Optional)
                        </h3>
                        <p class="text-xs text-gray-500">Upload the original raw image and the annotated/edited result. Clients can interactively slide between them.</p>
                    </div>
                    <span class="text-[11px] font-semibold text-blue-600 bg-blue-50 border border-blue-200/60 px-2.5 py-1 rounded-full">Interactive Feature</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Before Image -->
                    <div class="space-y-3">
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider">
                            1. Before Image (Original / Raw)
                        </label>
                        <div class="border-2 border-dashed border-gray-200 hover:border-blue-500 rounded-2xl p-5 text-center cursor-pointer transition relative bg-gray-50/50 group"
                            onclick="document.getElementById('before_image_file').click()">
                            <i data-feather="image" class="w-6 h-6 text-gray-400 group-hover:text-blue-600 mx-auto mb-1 transition"></i>
                            <p class="text-xs font-bold text-gray-700">Upload Before Image</p>
                            <p class="text-[10px] text-gray-400">Raw, unedited dataset frame</p>
                            <input type="file" id="before_image_file" name="before_image_file" accept="image/*" class="hidden"
                                onchange="previewComparisonImage(this, 'before_preview', 'before_placeholder')">
                        </div>

                        <div class="aspect-video w-full rounded-xl overflow-hidden bg-gray-900 border border-gray-200 relative flex items-center justify-center">
                            <img id="before_preview" src="" alt="Before Preview" class="hidden w-full h-full object-cover">
                            <span id="before_placeholder" class="text-xs text-gray-500">No before image chosen</span>
                        </div>

                        <div>
                            <label for="before_label" class="block text-[11px] font-bold text-gray-600 mb-1">Before Label Badge</label>
                            <input type="text" id="before_label" name="before_label" value="{{ old('before_label', 'Before') }}"
                                placeholder="e.g. Before / Raw Frame"
                                class="w-full px-3 py-2 rounded-xl border border-gray-200 focus:border-blue-600 text-xs outline-none">
                        </div>
                    </div>

                    <!-- After Image -->
                    <div class="space-y-3">
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider">
                            2. After Image (Edited / Annotated)
                        </label>
                        <div class="border-2 border-dashed border-gray-200 hover:border-blue-500 rounded-2xl p-5 text-center cursor-pointer transition relative bg-gray-50/50 group"
                            onclick="document.getElementById('after_image_file').click()">
                            <i data-feather="check-circle" class="w-6 h-6 text-gray-400 group-hover:text-blue-600 mx-auto mb-1 transition"></i>
                            <p class="text-xs font-bold text-gray-700">Upload After Image</p>
                            <p class="text-[10px] text-gray-400">Edited, labeled or retouched frame</p>
                            <input type="file" id="after_image_file" name="after_image_file" accept="image/*" class="hidden"
                                onchange="previewComparisonImage(this, 'after_preview', 'after_placeholder')">
                        </div>

                        <div class="aspect-video w-full rounded-xl overflow-hidden bg-gray-900 border border-gray-200 relative flex items-center justify-center">
                            <img id="after_preview" src="" alt="After Preview" class="hidden w-full h-full object-cover">
                            <span id="after_placeholder" class="text-xs text-gray-500">No after image chosen</span>
                        </div>

                        <div>
                            <label for="after_label" class="block text-[11px] font-bold text-gray-600 mb-1">After Label Badge</label>
                            <input type="text" id="after_label" name="after_label" value="{{ old('after_label', 'After') }}"
                                placeholder="e.g. After / Annotated"
                                class="w-full px-3 py-2 rounded-xl border border-gray-200 focus:border-blue-600 text-xs outline-none">
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Metrics, Content & Details Card -->
            <div class="bg-white p-6 md:p-8 rounded-3xl border border-gray-200/80 shadow-2xs space-y-6">
                <div class="border-b border-gray-100 pb-4">
                    <h3 class="text-base font-bold text-gray-900">Metrics & Case Study Content</h3>
                    <p class="text-xs text-gray-500">Provide quantitative results and detailed project breakdown</p>
                </div>

                <div class="space-y-6">
                    <!-- Key Metrics Callout -->
                    <div>
                        <label for="metrics" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                            Key Metrics / Results Highlight
                        </label>
                        <input type="text" id="metrics" name="metrics" value="{{ old('metrics') }}"
                            placeholder="e.g. 99.9% Geometric Precision • 450K Frames Annotated"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none">
                    </div>

                    <!-- Short Description -->
                    <div>
                        <label for="short_description" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                            Summary / Short Description
                        </label>
                        <textarea id="short_description" name="short_description" rows="2"
                            placeholder="A concise 1-2 sentence summary displayed on portfolio cards..."
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none resize-y">{{ old('short_description') }}</textarea>
                    </div>

                    <!-- Full Description -->
                    <div>
                        <label for="description" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                            Detailed Case Study Breakdown
                        </label>
                        <textarea id="description" name="description" rows="5"
                            placeholder="Explain the annotation challenges, multi-tier QA steps, tooling used, and client model improvements..."
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none resize-y">{{ old('description') }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Tags -->
                        <div>
                            <label for="tags" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                Tags <span class="text-gray-400 font-normal">(Comma separated)</span>
                            </label>
                            <input type="text" id="tags" name="tags" value="{{ old('tags') }}"
                                placeholder="LiDAR, 3D Cuboids, Autonomous Driving, Sensor Fusion"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none">
                        </div>

                        <!-- Case Study URL -->
                        <div>
                            <label for="case_study_url" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1.5">
                                External Case Study Link <span class="text-gray-400 font-normal">(Optional)</span>
                            </label>
                            <input type="text" id="case_study_url" name="case_study_url" value="{{ old('case_study_url') }}"
                                placeholder="https://example.com/case-study"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-sm transition outline-none">
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Publishing Options & Actions -->
            <div class="bg-white p-6 md:p-8 rounded-3xl border border-gray-200/80 shadow-2xs space-y-6">
                <div class="border-b border-gray-100 pb-4">
                    <h3 class="text-base font-bold text-gray-900">Publishing & Visibility</h3>
                    <p class="text-xs text-gray-500">Control display status and positioning on the public website</p>
                </div>

                <div class="flex flex-wrap items-center gap-8">
                    <!-- Is Active -->
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" class="w-5 h-5 text-blue-600 rounded border-gray-300 focus:ring-blue-500" checked>
                        <div>
                            <span class="text-sm font-bold text-gray-800">Publish Online</span>
                            <p class="text-xs text-gray-400">Make this project visible on the `/portfolio` page</p>
                        </div>
                    </label>

                    <!-- Is Featured -->
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" name="is_featured" value="1" class="w-5 h-5 text-blue-600 rounded border-gray-300 focus:ring-blue-500" {{ old('is_featured') ? 'checked' : '' }}>
                        <div>
                            <span class="text-sm font-bold text-gray-800">Featured Showcase</span>
                            <p class="text-xs text-gray-400">Show with top priority badge</p>
                        </div>
                    </label>

                    <!-- Sort Order -->
                    <div class="w-32">
                        <label for="sort_order" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">
                            Sort Order
                        </label>
                        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}"
                            class="w-full px-3 py-2 rounded-xl border border-gray-200 focus:border-blue-600 text-xs transition outline-none">
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-end gap-4 pt-4">
                <a href="{{ route('admin.portfolio.index') }}"
                    class="px-6 py-3 rounded-xl border border-gray-200 text-gray-600 font-bold text-xs hover:bg-gray-100 transition">
                    Cancel
                </a>
                <button type="submit"
                    class="px-8 py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm rounded-xl shadow-md hover:shadow-lg transition-all inline-flex items-center gap-2">
                    <i data-feather="check" class="w-4 h-4"></i>
                    <span>Save & Publish Project</span>
                </button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
<script>
    function previewUploadImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const preview = document.getElementById('image_preview');
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                const placeholder = document.getElementById('preview_placeholder');
                if (placeholder) placeholder.classList.add('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function previewComparisonImage(input, previewId, placeholderId) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const preview = document.getElementById(previewId);
                if (preview) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                }
                const placeholder = document.getElementById(placeholderId);
                if (placeholder) {
                    placeholder.classList.add('hidden');
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
