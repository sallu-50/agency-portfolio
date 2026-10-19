@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('page_title', 'Control Center Dashboard')
@section('page_subtitle', 'Overview of website portfolio projects, services, and client inquiries')

@section('content')
    <!-- Statistics Overview Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Stat 1: Total Portfolio -->
        <div class="bg-white p-6 rounded-2xl border border-gray-200/80 shadow-2xs flex items-center justify-between">
            <div>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Portfolio Projects</p>
                <h3 class="text-3xl font-extrabold text-gray-900">{{ $stats['total_portfolio'] }}</h3>
                <p class="text-xs text-emerald-600 font-semibold mt-1 flex items-center gap-1">
                    <i data-feather="check-circle" class="w-3 h-3"></i>
                    <span>{{ $stats['active_portfolio'] }} Active online</span>
                </p>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center">
                <i data-feather="briefcase" class="w-6 h-6"></i>
            </div>
        </div>

        <!-- Stat 2: Featured Projects -->
        <div class="bg-white p-6 rounded-2xl border border-gray-200/80 shadow-2xs flex items-center justify-between">
            <div>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Featured Showcases</p>
                <h3 class="text-3xl font-extrabold text-gray-900">{{ $stats['featured_portfolio'] }}</h3>
                <p class="text-xs text-blue-600 font-semibold mt-1 flex items-center gap-1">
                    <i data-feather="star" class="w-3 h-3 fill-current"></i>
                    <span>Top spotlight items</span>
                </p>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center">
                <i data-feather="award" class="w-6 h-6"></i>
            </div>
        </div>

        <!-- Stat 3: Team & Services -->
        <div class="bg-white p-6 rounded-2xl border border-gray-200/80 shadow-2xs flex items-center justify-between">
            <div>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Services & Team</p>
                <h3 class="text-3xl font-extrabold text-gray-900">{{ $stats['total_services'] }} <span class="text-base text-gray-400 font-normal">/ {{ $stats['total_team'] }}</span></h3>
                <p class="text-xs text-gray-500 font-medium mt-1">Core services / Team members</p>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center">
                <i data-feather="users" class="w-6 h-6"></i>
            </div>
        </div>

        <!-- Stat 4: Inquiries -->
        <div class="bg-white p-6 rounded-2xl border border-gray-200/80 shadow-2xs flex items-center justify-between">
            <div>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Client Inquiries</p>
                <h3 class="text-3xl font-extrabold text-gray-900">{{ $stats['total_messages'] }}</h3>
                <p class="text-xs text-gray-500 font-medium mt-1">
                    {{ $stats['unread_messages'] }} new unread inquiries
                </p>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                <i data-feather="mail" class="w-6 h-6"></i>
            </div>
        </div>
    </div>

    <!-- Quick Action Banner -->
    <div class="bg-gradient-to-r from-blue-900 to-indigo-900 rounded-3xl p-6 md:p-8 text-white mb-8 shadow-md flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
        <div>
            <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-white/10 text-blue-200 border border-white/20 mb-3">
                Portfolio Upload Engine
            </span>
            <h2 class="text-2xl font-bold mb-1">Add New Project to Website Portfolio</h2>
            <p class="text-xs md:text-sm text-blue-200/80 max-w-xl">
                Upload case study images, labeling specifications, client metrics, and tags. They will immediately appear on the public `/portfolio` page.
            </p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.portfolio.create') }}"
                class="px-6 py-3 bg-white text-blue-900 hover:bg-blue-50 font-bold text-xs rounded-xl shadow transition inline-flex items-center gap-2">
                <i data-feather="upload-cloud" class="w-4 h-4 text-blue-600"></i>
                <span>Upload New Project</span>
            </a>
            <a href="{{ route('portfolio') }}" target="_blank"
                class="px-5 py-3 bg-blue-800/80 hover:bg-blue-800 text-white font-bold text-xs rounded-xl border border-blue-700 transition inline-flex items-center gap-1.5">
                <span>View Public Portfolio</span>
                <i data-feather="external-link" class="w-3.5 h-3.5"></i>
            </a>
        </div>
    </div>

    <!-- Two-Column Grid: Recent Portfolio & Recent Messages -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- Recent Portfolio Projects (8 cols) -->
        <div class="lg:col-span-8 bg-white rounded-3xl border border-gray-200/80 shadow-2xs overflow-hidden">
            <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                <div>
                    <h3 class="text-base font-bold text-gray-900">Recent Portfolio Projects</h3>
                    <p class="text-xs text-gray-500">Latest case studies published on the agency website</p>
                </div>
                <a href="{{ route('admin.portfolio.index') }}" class="text-xs font-bold text-blue-600 hover:underline inline-flex items-center gap-1">
                    <span>Manage All</span>
                    <i data-feather="chevron-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>

            <div class="divide-y divide-gray-100">
                @forelse ($recentProjects as $project)
                    <div class="p-4 md:p-6 flex items-center justify-between gap-4 hover:bg-gray-50/50 transition">
                        <div class="flex items-center gap-4 min-w-0">
                            <div class="w-14 h-14 rounded-xl overflow-hidden bg-gray-900 flex-shrink-0">
                                <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
                            </div>
                            <div class="min-w-0">
                                <div class="flex items-center gap-2 mb-1">
                                    <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-blue-50 text-blue-700">
                                        {{ $project->category }}
                                    </span>
                                    @if ($project->is_featured)
                                        <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-amber-50 text-amber-700">
                                            Featured
                                        </span>
                                    @endif
                                </div>
                                <h4 class="text-xs md:text-sm font-bold text-gray-900 truncate">{{ $project->title }}</h4>
                                <p class="text-[11px] text-gray-400 truncate">{{ $project->metrics ?: $project->client_name }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-2 flex-shrink-0">
                            <a href="{{ route('admin.portfolio.edit', $project->id) }}"
                                class="p-2 rounded-lg bg-gray-100 hover:bg-blue-50 hover:text-blue-600 text-gray-600 transition"
                                title="Edit Project">
                                <i data-feather="edit-2" class="w-4 h-4"></i>
                            </a>
                            <a href="{{ route('portfolio.show', $project->slug) }}" target="_blank"
                                class="p-2 rounded-lg bg-gray-100 hover:bg-emerald-50 hover:text-emerald-600 text-gray-600 transition"
                                title="View Public Page">
                                <i data-feather="eye" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="p-8 text-center text-xs text-gray-400">
                        No portfolio items added yet. Click "Upload New Project" above.
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Recent Contact Messages (4 cols) -->
        <div class="lg:col-span-4 bg-white rounded-3xl border border-gray-200/80 shadow-2xs overflow-hidden">
            <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                <div>
                    <h3 class="text-base font-bold text-gray-900">Recent Inquiries</h3>
                    <p class="text-xs text-gray-500">Contact requests from website</p>
                </div>
                <span class="text-xs font-bold px-2.5 py-0.5 rounded-full bg-gray-100 text-gray-600">
                    {{ $recentMessages->count() }}
                </span>
            </div>

            <div class="divide-y divide-gray-100">
                @forelse ($recentMessages as $message)
                    <div class="p-5 hover:bg-gray-50/50 transition">
                        <div class="flex items-center justify-between mb-1.5">
                            <span class="text-xs font-bold text-gray-900 truncate">{{ $message->name }}</span>
                            <span class="text-[10px] text-gray-400">{{ $message->created_at->diffForHumans() }}</span>
                        </div>
                        <p class="text-[11px] text-blue-600 font-semibold mb-1">{{ $message->email }}</p>
                        @if ($message->service)
                            <span class="inline-block px-2 py-0.5 rounded text-[10px] bg-gray-100 text-gray-600 mb-2">
                                Service: {{ $message->service }}
                            </span>
                        @endif
                        <p class="text-xs text-gray-600 line-clamp-2 leading-relaxed">
                            {{ $message->message }}
                        </p>
                    </div>
                @empty
                    <div class="p-8 text-center text-xs text-gray-400">
                        No contact inquiries yet.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
