@extends('layouts.app')

@section('title', 'Our Team - Marveit AI | Expert AI Annotation & Data Solutions')
@section('meta_description', 'Meet the multidisciplinary team of AI engineers, domain specialists, and annotation leaders at Marveit AI.')

@push('styles')
    <style>
        .team-photo-wrapper {
            aspect-ratio: 4 / 5;
            overflow: hidden;
            border-radius: 1rem;
            position: relative;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .team-photo-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            display: block;
            transition: transform 0.3s ease;
        }

        .team-card:hover .team-photo-wrapper {
            border-color: #93c5fd;
            box-shadow: 0 4px 14px rgba(14, 94, 221, 0.12);
        }

        .team-card:hover .team-photo-wrapper img {
            transform: scale(1.05);
        }
    </style>
@endpush

@section('content')
    <div class="pt-24 md:pt-28">
        <!-- Team Hero Section -->
        <section class="py-16 md:py-24 bg-gradient-to-b from-gray-50/80 via-white to-white relative overflow-hidden">
            <div class="container mx-auto px-6 text-center max-w-4xl">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-600 border border-blue-100 mb-4">
                    <i data-feather="users" class="w-3.5 h-3.5"></i> The Minds Behind Marveit
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 tracking-tight mb-6">
                    Meet Our <span class="text-blue-600">Leadership Team</span>
                </h1>
                <p class="text-base md:text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto mb-10">
                    A multidisciplinary team of AI engineers, domain specialists, and annotation leaders dedicated to powering next-generation machine learning.
                </p>

                <!-- Stats Summary -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-6 border-t border-gray-100 max-w-3xl mx-auto">
                    <div class="p-3">
                        <div class="text-2xl md:text-3xl font-extrabold text-blue-600">100+</div>
                        <div class="text-xs text-gray-500 font-medium mt-0.5">Labeling Specialists</div>
                    </div>
                    <div class="p-3">
                        <div class="text-2xl md:text-3xl font-extrabold text-gray-900">99.8%</div>
                        <div class="text-xs text-gray-500 font-medium mt-0.5">Precision Quality SLA</div>
                    </div>
                    <div class="p-3">
                        <div class="text-2xl md:text-3xl font-extrabold text-blue-600">50+</div>
                        <div class="text-xs text-gray-500 font-medium mt-0.5">Enterprise Pipelines</div>
                    </div>
                    <div class="p-3">
                        <div class="text-2xl md:text-3xl font-extrabold text-gray-900">{{ $counts['all'] ?? count($allMembers) }}</div>
                        <div class="text-xs text-gray-500 font-medium mt-0.5">Core Technical Leads</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Members Grid -->
        <section class="py-16 md:py-24 bg-gray-50/50">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="team-grid">
                    @forelse ($allMembers as $member)
                        <div class="team-card group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col items-center text-center h-full">
                            <!-- Photo -->
                            <div class="team-photo-wrapper w-full max-w-[240px] mx-auto mb-5">
                                <img src="{{ $member->image_url }}" alt="{{ $member->name }}"
                                    loading="lazy">
                            </div>

                            <!-- Name & Designation -->
                            <div class="flex flex-col items-center flex-grow justify-center w-full">
                                <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-blue-600 transition-colors">
                                    {{ $member->name }}
                                </h3>

                                <p class="text-sm font-semibold text-blue-600">{{ $member->role }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-16 text-gray-500">
                            No team members found.
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Join Our Team CTA -->
        <section class="py-20 bg-white border-t border-gray-100">
            <div class="container mx-auto px-6 text-center max-w-3xl">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200 mb-4">
                    <i data-feather="smile" class="w-3.5 h-3.5"></i> We Are Hiring
                </span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight mb-4">
                    Want to Shape the Future of AI?
                </h2>
                <p class="text-base text-gray-600 mb-8 leading-relaxed">
                    We are always looking for passionate ML engineers, annotation pod leads, and subject-matter QA experts to join our global network.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3.5 px-8 rounded-full shadow-md hover:shadow-lg transition">
                        Get In Touch With Leadership
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
