@extends('layouts.app')

@section('title', 'Our Team - Marveit AI | Expert AI Annotation & Data Solutions')
@section('meta_description', 'Meet the multidisciplinary team of AI engineers, domain specialists, and annotation leaders at Marveit AI.')

@section('content')
    <div class="pt-24 md:pt-28">
        <!-- Team Hero Section -->
        <section class="py-16 md:py-24 bg-gradient-to-b from-gray-50/80 via-white to-white relative overflow-hidden">
            <div class="container mx-auto px-6 text-center max-w-4xl">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-600 border border-blue-100 mb-4">
                    <i data-feather="users" class="w-3.5 h-3.5"></i> World-Class Data Engineering Talent
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 tracking-tight mb-6">
                    Meet The Minds Behind <span class="text-blue-600">Marveit AI</span>
                </h1>
                <p class="text-base md:text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto mb-10">
                    A specialized collective of AI engineers, domain experts, and annotation leaders shaping the ground truth data for the world's leading machine learning systems.
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

        <!-- Department Filter Tabs -->
        <section class="sticky top-20 z-30 bg-white/95 backdrop-blur-md border-y border-gray-100 py-4 shadow-xs">
            <div class="container mx-auto px-6">
                <div class="flex items-center justify-start md:justify-center gap-2 overflow-x-auto pb-2 md:pb-0 scrollbar-none" id="team-filter-container">
                    <button type="button"
                        class="team-filter-btn {{ $department === 'all' ? 'active' : '' }} px-4 py-2 rounded-full text-xs md:text-sm font-semibold border border-gray-200 text-gray-600 hover:border-blue-600 hover:text-blue-600 transition-all flex items-center gap-1.5 flex-shrink-0"
                        data-filter="all">
                        <span>All Team</span>
                        <span class="text-[11px] px-1.5 py-0.5 rounded-full bg-gray-100 {{ $department === 'all' ? 'bg-white/20 text-white' : 'text-gray-500' }}">
                            {{ $counts['all'] }}
                        </span>
                    </button>

                    <button type="button"
                        class="team-filter-btn {{ $department === 'leadership' ? 'active' : '' }} px-4 py-2 rounded-full text-xs md:text-sm font-semibold border border-gray-200 text-gray-600 hover:border-blue-600 hover:text-blue-600 transition-all flex items-center gap-1.5 flex-shrink-0"
                        data-filter="leadership">
                        <span>Leadership</span>
                        <span class="text-[11px] px-1.5 py-0.5 rounded-full bg-gray-100 {{ $department === 'leadership' ? 'bg-white/20 text-white' : 'text-gray-500' }}">
                            {{ $counts['leadership'] }}
                        </span>
                    </button>

                    <button type="button"
                        class="team-filter-btn {{ $department === 'cv' ? 'active' : '' }} px-4 py-2 rounded-full text-xs md:text-sm font-semibold border border-gray-200 text-gray-600 hover:border-blue-600 hover:text-blue-600 transition-all flex items-center gap-1.5 flex-shrink-0"
                        data-filter="cv">
                        <span>Computer Vision</span>
                        <span class="text-[11px] px-1.5 py-0.5 rounded-full bg-gray-100 {{ $department === 'cv' ? 'bg-white/20 text-white' : 'text-gray-500' }}">
                            {{ $counts['cv'] }}
                        </span>
                    </button>

                    <button type="button"
                        class="team-filter-btn {{ $department === 'nlp' ? 'active' : '' }} px-4 py-2 rounded-full text-xs md:text-sm font-semibold border border-gray-200 text-gray-600 hover:border-blue-600 hover:text-blue-600 transition-all flex items-center gap-1.5 flex-shrink-0"
                        data-filter="nlp">
                        <span>NLP & LLMs</span>
                        <span class="text-[11px] px-1.5 py-0.5 rounded-full bg-gray-100 {{ $department === 'nlp' ? 'bg-white/20 text-white' : 'text-gray-500' }}">
                            {{ $counts['nlp'] }}
                        </span>
                    </button>

                    <button type="button"
                        class="team-filter-btn {{ $department === 'audio' ? 'active' : '' }} px-4 py-2 rounded-full text-xs md:text-sm font-semibold border border-gray-200 text-gray-600 hover:border-blue-600 hover:text-blue-600 transition-all flex items-center gap-1.5 flex-shrink-0"
                        data-filter="audio">
                        <span>Audio & Speech</span>
                        <span class="text-[11px] px-1.5 py-0.5 rounded-full bg-gray-100 {{ $department === 'audio' ? 'bg-white/20 text-white' : 'text-gray-500' }}">
                            {{ $counts['audio'] }}
                        </span>
                    </button>

                    <button type="button"
                        class="team-filter-btn {{ $department === 'qa' ? 'active' : '' }} px-4 py-2 rounded-full text-xs md:text-sm font-semibold border border-gray-200 text-gray-600 hover:border-blue-600 hover:text-blue-600 transition-all flex items-center gap-1.5 flex-shrink-0"
                        data-filter="qa">
                        <span>Quality Assurance</span>
                        <span class="text-[11px] px-1.5 py-0.5 rounded-full bg-gray-100 {{ $department === 'qa' ? 'bg-white/20 text-white' : 'text-gray-500' }}">
                            {{ $counts['qa'] }}
                        </span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Team Members Grid -->
        <section class="py-16 md:py-24 bg-gray-50/50">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="team-grid">
                    @forelse ($allMembers as $member)
                        @php
                            $badgeClass = match ($member->badge_color) {
                                'green' => 'bg-green-50 text-green-700 border-green-200',
                                'purple' => 'bg-purple-50 text-purple-700 border-purple-200',
                                'yellow' => 'bg-yellow-50 text-yellow-700 border-yellow-200',
                                'red' => 'bg-red-50 text-red-700 border-red-200',
                                default => 'bg-blue-50 text-blue-700 border-blue-200',
                            };
                        @endphp
                        <div class="team-card group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col items-center text-center"
                            data-category="{{ $member->category }}">
                            <!-- Image Container -->
                            <div class="relative w-44 h-44 mb-5 overflow-hidden rounded-2xl ring-4 ring-gray-100 group-hover:ring-blue-100 transition-all">
                                <img src="{{ asset($member->image) }}" alt="{{ $member->name }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                    loading="lazy">
                            </div>

                            <!-- Department Badge -->
                            <span class="inline-block px-3 py-1 rounded-full text-[11px] font-bold border mb-2 {{ $badgeClass }}">
                                {{ $member->department_badge }}
                            </span>

                            <!-- Name & Role -->
                            <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-blue-600 transition-colors">
                                {{ $member->name }}
                            </h3>
                            <p class="text-xs font-semibold text-blue-600 mb-3">{{ $member->role }}</p>

                            <!-- Bio -->
                            <p class="text-xs text-gray-500 leading-relaxed mb-5 flex-grow">
                                {{ $member->bio }}
                            </p>

                            <!-- Social Links -->
                            <div class="flex items-center gap-2 pt-3 border-t border-gray-100 w-full justify-center text-gray-400">
                                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
                                    class="w-8 h-8 rounded-full hover:bg-blue-50 hover:text-blue-600 flex items-center justify-center transition-colors">
                                    <i data-feather="linkedin" class="w-4 h-4"></i>
                                </a>
                                <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter"
                                    class="w-8 h-8 rounded-full hover:bg-blue-50 hover:text-blue-600 flex items-center justify-center transition-colors">
                                    <i data-feather="twitter" class="w-4 h-4"></i>
                                </a>
                                <a href="mailto:ebrahim@marveit.com" aria-label="Email"
                                    class="w-8 h-8 rounded-full hover:bg-blue-50 hover:text-blue-600 flex items-center justify-center transition-colors">
                                    <i data-feather="mail" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-16 text-gray-500">
                            No team members found for this department.
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

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('.team-filter-btn');
        const teamCards = document.querySelectorAll('.team-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Update active state on buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('active');
                    const badge = btn.querySelector('span:last-child');
                    if (badge) {
                        badge.classList.remove('bg-white/20', 'text-white');
                        badge.classList.add('bg-gray-100', 'text-gray-500');
                    }
                });

                button.classList.add('active');
                const activeBadge = button.querySelector('span:last-child');
                if (activeBadge) {
                    activeBadge.classList.add('bg-white/20', 'text-white');
                    activeBadge.classList.remove('bg-gray-100', 'text-gray-500');
                }

                const filter = button.getAttribute('data-filter');

                // Filter cards with smooth fade
                teamCards.forEach(card => {
                    const categories = (card.getAttribute('data-category') || '').split(' ');
                    if (filter === 'all' || categories.includes(filter)) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush
