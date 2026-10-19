@extends('layouts.app')

@section('title', $service->title . ' - Marveit AI Data Annotation')
@section('meta_description', $service->short_description ?: Str::limit($service->description, 150))

@section('content')
    <div class="pt-24 md:pt-28">
        <!-- Breadcrumb & Hero -->
        <section class="py-12 md:py-16 bg-gradient-to-b from-gray-50 via-white to-white border-b border-gray-100">
            <div class="container mx-auto px-6">
                <!-- Breadcrumb -->
                <nav class="flex items-center gap-2 text-xs text-gray-500 mb-6" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Home</a>
                    <i data-feather="chevron-right" class="w-3.5 h-3.5"></i>
                    <a href="{{ route('services.index') }}" class="hover:text-blue-600 transition">Services</a>
                    <i data-feather="chevron-right" class="w-3.5 h-3.5"></i>
                    <span class="text-gray-900 font-semibold">{{ $service->title }}</span>
                </nav>

                @php
                    $colorClasses = match ($service->badge_color) {
                        'green' => ['bg' => 'bg-green-100', 'text' => 'text-green-600', 'pill' => 'bg-green-50 text-green-700 border-green-200'],
                        'purple' => ['bg' => 'bg-purple-100', 'text' => 'text-purple-600', 'pill' => 'bg-purple-50 text-purple-700 border-purple-200'],
                        'yellow' => ['bg' => 'bg-yellow-100', 'text' => 'text-yellow-600', 'pill' => 'bg-yellow-50 text-yellow-700 border-yellow-200'],
                        'red' => ['bg' => 'bg-red-100', 'text' => 'text-red-600', 'pill' => 'bg-red-50 text-red-700 border-red-200'],
                        default => ['bg' => 'bg-blue-100', 'text' => 'text-blue-600', 'pill' => 'bg-blue-50 text-blue-700 border-blue-200'],
                    };
                @endphp

                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div>
                        <div class="flex items-center gap-3 mb-3">
                            <span class="px-3 py-1 rounded-full text-xs font-bold border {{ $colorClasses['pill'] }}">
                                {{ $service->category }} Service
                            </span>
                            <span class="text-xs text-gray-400">• High-Throughput Pipeline</span>
                        </div>
                        <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                            {{ $service->title }}
                        </h1>
                    </div>

                    <div>
                        <a href="{{ route('contact', ['service' => $service->title]) }}"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-xl shadow-md hover:shadow-lg transition inline-flex items-center gap-2">
                            <span>Request Pilot for {{ $service->title }}</span>
                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content & Sidebar Layout -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    <!-- Left: Detailed Content -->
                    <div class="lg:col-span-8 space-y-10">
                        <!-- Overview Card -->
                        <div class="p-8 rounded-3xl bg-gray-50/70 border border-gray-100">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 rounded-2xl {{ $colorClasses['bg'] }} {{ $colorClasses['text'] }} flex items-center justify-center flex-shrink-0 shadow-sm">
                                    <i data-feather="{{ $service->icon ?: 'database' }}" class="w-7 h-7"></i>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-gray-900">Pipeline Overview</h2>
                                    <p class="text-xs text-gray-500">Customized annotation workflows engineered for high-accuracy ML ingestion.</p>
                                </div>
                            </div>

                            <p class="text-base text-gray-700 leading-relaxed mb-6">
                                {{ $service->description }}
                            </p>

                            @if ($service->short_description && $service->short_description !== $service->description)
                                <div class="p-4 rounded-xl bg-white border border-gray-100 text-sm text-gray-600 italic">
                                    "{{ $service->short_description }}"
                                </div>
                            @endif
                        </div>

                        <!-- Key Features & Annotation Deliverables -->
                        @if (!empty($service->features))
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                                    <i data-feather="check-square" class="w-5 h-5 text-blue-600"></i>
                                    Key Capabilities & Deliverables
                                </h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    @foreach ($service->features as $feature)
                                        <div class="p-5 rounded-2xl border border-gray-100 bg-white shadow-xs hover:border-blue-200 hover:shadow-md transition flex items-start gap-3.5">
                                            <div class="w-7 h-7 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                                <i data-feather="check" class="w-4 h-4"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-sm text-gray-800">{{ $feature }}</h4>
                                                <p class="text-xs text-gray-500 mt-0.5">Handled with custom guidelines, automated pre-labeling, and multi-tier verification.</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Quality Assurance & Security Protocols -->
                        <div class="p-8 rounded-3xl bg-blue-900 text-white">
                            <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                                <i data-feather="shield" class="w-5 h-5 text-blue-300"></i>
                                Quality & Security Assurance
                            </h3>
                            <p class="text-xs md:text-sm text-blue-100/90 leading-relaxed mb-6">
                                All {{ $service->title }} projects are executed under stringent bilateral NDAs, with SOC 2 compliance, encrypted transmission, and continuous consensus arbitration to eliminate labeler bias.
                            </p>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 border-t border-white/10 text-center">
                                <div class="p-3 bg-white/5 rounded-xl border border-white/10">
                                    <div class="text-lg font-extrabold text-blue-300">99.8%</div>
                                    <div class="text-[11px] text-blue-200/80 mt-0.5">Precision SLA</div>
                                </div>
                                <div class="p-3 bg-white/5 rounded-xl border border-white/10">
                                    <div class="text-lg font-extrabold text-blue-300">24-48h</div>
                                    <div class="text-[11px] text-blue-200/80 mt-0.5">Pilot Turnaround</div>
                                </div>
                                <div class="p-3 bg-white/5 rounded-xl border border-white/10">
                                    <div class="text-lg font-extrabold text-blue-300">SOC 2 / GDPR</div>
                                    <div class="text-[11px] text-blue-200/80 mt-0.5">Data Privacy Shield</div>
                                </div>
                            </div>
                        </div>

                        <!-- Back Button -->
                        <div class="pt-6">
                            <a href="{{ route('services.index') }}"
                                class="inline-flex items-center gap-2 text-sm font-semibold text-gray-600 hover:text-blue-600 transition">
                                <i data-feather="arrow-left" class="w-4 h-4"></i>
                                <span>Back to All Services</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Sidebar -->
                    <div class="lg:col-span-4 space-y-8">
                        <!-- Direct Quote / Contact Card -->
                        <div class="p-8 rounded-3xl bg-gradient-to-br from-gray-900 to-blue-950 text-white shadow-xl relative overflow-hidden">
                            <div class="absolute -right-12 -top-12 w-40 h-40 bg-blue-500/20 rounded-full blur-2xl pointer-events-none"></div>

                            <span class="inline-block px-3 py-1 rounded-full text-[11px] font-bold bg-blue-500/30 text-blue-200 border border-blue-400/30 mb-4">
                                Pilot Project
                            </span>
                            <h3 class="text-xl font-bold mb-3">
                                Need {{ $service->title }} for your ML Model?
                            </h3>
                            <p class="text-xs text-blue-100/80 leading-relaxed mb-6">
                                Send us your sample dataset and guidelines. We will execute a free benchmark validation batch.
                            </p>

                            <a href="{{ route('contact', ['service' => $service->title]) }}"
                                class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-3.5 px-4 rounded-xl text-center text-xs transition inline-flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                                <span>Get a Free Pilot Quote</span>
                                <i data-feather="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>

                            <div class="mt-4 text-center">
                                <a href="https://wa.me/8801753499696?text={{ urlencode('Hello! I want to discuss ' . $service->title . ' dataset annotation.') }}"
                                    target="_blank" rel="noopener noreferrer"
                                    class="text-xs text-emerald-300 hover:text-white transition inline-flex items-center gap-1.5 underline underline-offset-4">
                                    <i data-feather="message-circle" class="w-3.5 h-3.5"></i>
                                    <span>Chat directly on WhatsApp</span>
                                </a>
                            </div>
                        </div>

                        <!-- Explore Other Services List -->
                        <div class="p-6 rounded-3xl bg-gray-50 border border-gray-100">
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4">Other Services</h4>
                            <div class="space-y-3">
                                @foreach ($otherServices as $other)
                                    <a href="{{ route('services.show', $other->slug) }}"
                                        class="p-3 rounded-xl bg-white border border-gray-100 hover:border-blue-200 hover:bg-blue-50/40 transition-all flex items-center justify-between group">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-lg bg-gray-100 group-hover:bg-blue-100 text-gray-600 group-hover:text-blue-600 flex items-center justify-center flex-shrink-0 transition">
                                                <i data-feather="{{ $other->icon ?: 'database' }}" class="w-4 h-4"></i>
                                            </div>
                                            <div>
                                                <h5 class="text-xs font-bold text-gray-800 group-hover:text-blue-600 transition">{{ $other->title }}</h5>
                                                <p class="text-[11px] text-gray-400">{{ $other->category }}</p>
                                            </div>
                                        </div>
                                        <i data-feather="chevron-right" class="w-4 h-4 text-gray-400 group-hover:text-blue-600 group-hover:translate-x-0.5 transition"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
