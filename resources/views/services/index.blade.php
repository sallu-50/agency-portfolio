@extends('layouts.app')

@section('title', 'AI Data Annotation & Collection Services - Marveit AI')
@section('meta_description', 'Explore Marveit AI full-spectrum data annotation services: Computer Vision, NLP text labeling, audio transcription, video object tracking, and custom dataset collection.')

@section('content')
    <div class="pt-24 md:pt-28">
        <!-- Hero Section -->
        <section class="py-16 md:py-24 bg-gradient-to-b from-gray-50/80 via-white to-white border-b border-gray-100">
            <div class="container mx-auto px-6 text-center max-w-4xl">
                <span
                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-600 border border-blue-100 mb-4">
                    <i data-feather="cpu" class="w-3.5 h-3.5"></i> End-to-End Ground Truth Engineering
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 tracking-tight mb-6">
                    Comprehensive <span class="text-blue-600">AI Annotation</span> Services
                </h1>
                <p class="text-base md:text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto mb-8">
                    From autonomous vehicle sensor fusion to multi-turn LLM alignment, we deliver high-throughput,
                    pixel-accurate training datasets tailored to your ML model architectures.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 px-8 rounded-full shadow-lg hover:shadow-xl transition-all inline-flex items-center gap-2">
                        <span>Request Custom Pilot</span>
                        <i data-feather="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Services Grid Section -->
        <section class="py-20 bg-gray-50/60">
            <div class="container mx-auto px-6">
                <!-- Group 1: Core Services -->
                <div class="mb-16">
                    <div class="flex items-center justify-between mb-8 pb-4 border-b border-gray-200">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">Core Annotation Capabilities</h2>
                            <p class="text-xs md:text-sm text-gray-500 mt-1">Foundation data pipelines powering Computer
                                Vision, NLP, and structured collection.</p>
                        </div>
                        <span
                            class="text-xs font-bold text-blue-600 bg-blue-50 px-3 py-1 rounded-full border border-blue-100">Core</span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach ($services->where('category', 'Core') as $service)
                            @php
                                $colorClasses = match ($service->badge_color) {
                                    'green' => ['bg' => 'bg-green-100', 'text' => 'text-green-600'],
                                    'purple' => ['bg' => 'bg-purple-100', 'text' => 'text-purple-600'],
                                    default => ['bg' => 'bg-blue-100', 'text' => 'text-blue-600'],
                                };
                            @endphp
                            <div
                                class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                                <div>
                                    <div class="flex items-center justify-between mb-6">
                                        <div
                                            class="w-14 h-14 rounded-xl {{ $colorClasses['bg'] }} {{ $colorClasses['text'] }} flex items-center justify-center transition-transform group-hover:scale-105">
                                            <i data-feather="{{ $service->icon ?: 'database' }}" class="w-6 h-6"></i>
                                        </div>
                                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-gray-100 text-gray-600">
                                            {{ $service->category }}
                                        </span>
                                    </div>

                                    <h3
                                        class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                        {{ $service->title }}
                                    </h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                        {{ $service->description }}
                                    </p>

                                    @if (!empty($service->features))
                                        <div class="pt-4 border-t border-gray-100 mb-6">
                                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Key
                                                Deliverables</h4>
                                            <ul class="space-y-2 text-xs text-gray-600">
                                                @foreach ($service->features as $feature)
                                                    <li class="flex items-start gap-2">
                                                        <i data-feather="check-circle"
                                                            class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5"></i>
                                                        <span>{{ $feature }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>

                                <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                                    <a href="{{ route('services.show', $service->slug) }}"
                                        class="text-blue-600 font-bold text-xs hover:underline inline-flex items-center gap-1.5">
                                        <span>Full Specifications</span>
                                        <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                                    </a>
                                    <a href="{{ route('contact', ['service' => $service->title]) }}"
                                        class="text-xs bg-gray-50 hover:bg-blue-50 text-gray-700 hover:text-blue-600 font-semibold px-3 py-1.5 rounded-lg border border-gray-200 hover:border-blue-200 transition">
                                        Get Quote
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Group 2: Specialized Services -->
                <div>
                    <div class="flex items-center justify-between mb-8 pb-4 border-b border-gray-200">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">Specialized & Multi-Modal Pipelines</h2>
                            <p class="text-xs md:text-sm text-gray-500 mt-1">High-complexity spatial tracking, acoustic
                                diarization, and dynamic streaming datasets.</p>
                        </div>
                        <span
                            class="text-xs font-bold text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full border border-yellow-200">Specialized</span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($services->where('category', 'Specialized') as $service)
                            @php
                                $colorClasses = match ($service->badge_color) {
                                    'red' => ['bg' => 'bg-red-100', 'text' => 'text-red-600'],
                                    'yellow' => ['bg' => 'bg-yellow-100', 'text' => 'text-yellow-600'],
                                    default => ['bg' => 'bg-indigo-100', 'text' => 'text-indigo-600'],
                                };
                            @endphp
                            <div
                                class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                                <div>
                                    <div class="flex items-center justify-between mb-6">
                                        <div
                                            class="w-14 h-14 rounded-xl {{ $colorClasses['bg'] }} {{ $colorClasses['text'] }} flex items-center justify-center transition-transform group-hover:scale-105">
                                            <i data-feather="{{ $service->icon ?: 'video' }}" class="w-6 h-6"></i>
                                        </div>
                                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-gray-100 text-gray-600">
                                            {{ $service->category }}
                                        </span>
                                    </div>

                                    <h3
                                        class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                        {{ $service->title }}
                                    </h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                        {{ $service->description }}
                                    </p>

                                    @if (!empty($service->features))
                                        <div class="pt-4 border-t border-gray-100 mb-6">
                                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Key
                                                Deliverables</h4>
                                            <ul class="space-y-2 text-xs text-gray-600">
                                                @foreach ($service->features as $feature)
                                                    <li class="flex items-start gap-2">
                                                        <i data-feather="check-circle"
                                                            class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5"></i>
                                                        <span>{{ $feature }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>

                                <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                                    <a href="{{ route('services.show', $service->slug) }}"
                                        class="text-blue-600 font-bold text-xs hover:underline inline-flex items-center gap-1.5">
                                        <span>Full Specifications</span>
                                        <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                                    </a>
                                    <a href="{{ route('contact', ['service' => $service->title]) }}"
                                        class="text-xs bg-gray-50 hover:bg-blue-50 text-gray-700 hover:text-blue-600 font-semibold px-3 py-1.5 rounded-lg border border-gray-200 hover:border-blue-200 transition">
                                        Get Quote
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Tooling & Integration Strip -->
        <section class="py-16 bg-white border-t border-gray-100">
            <div class="container mx-auto px-6 max-w-4xl text-center">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Supported Platforms & Export Formats</h3>
                <p class="text-sm text-gray-600 mb-8">
                    We adapt directly to your preferred annotation environment or provide turnkey data delivery in standard
                    AI schemas.
                </p>
                <div class="flex flex-wrap justify-center items-center gap-3">
                    <span
                        class="px-4 py-2 rounded-xl bg-gray-50 border border-gray-200 text-xs font-semibold text-gray-700">COCO
                        JSON</span>
                    <span
                        class="px-4 py-2 rounded-xl bg-gray-50 border border-gray-200 text-xs font-semibold text-gray-700">YOLO
                        (v5, v8, v11)</span>
                    <span
                        class="px-4 py-2 rounded-xl bg-gray-50 border border-gray-200 text-xs font-semibold text-gray-700">Pascal
                        VOC XML</span>
                    <span
                        class="px-4 py-2 rounded-xl bg-gray-50 border border-gray-200 text-xs font-semibold text-gray-700">CVAT</span>
                    <span
                        class="px-4 py-2 rounded-xl bg-gray-50 border border-gray-200 text-xs font-semibold text-gray-700">Label
                        Studio</span>
                    <span
                        class="px-4 py-2 rounded-xl bg-gray-50 border border-gray-200 text-xs font-semibold text-gray-700">Roboflow</span>
                    <span
                        class="px-4 py-2 rounded-xl bg-gray-50 border border-gray-200 text-xs font-semibold text-gray-700">HuggingFace
                        Datasets</span>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gray-50 border-t border-gray-100">
            <div class="container mx-auto px-6 text-center max-w-3xl">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Need a Custom Annotation Schema?</h2>
                <p class="text-base text-gray-600 mb-8">
                    Our technical architects can draft customized labeling ontologies, guideline handbooks, and acceptance
                    benchmarks for your domain.
                </p>
                <a href="{{ route('contact') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3.5 px-8 rounded-full shadow-md hover:shadow-lg transition inline-flex items-center gap-2">
                    <span>Discuss Your Custom Pipeline</span>
                    <i data-feather="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </section>
    </div>
@endsection