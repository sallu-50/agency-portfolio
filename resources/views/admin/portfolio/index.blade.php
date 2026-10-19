@extends('layouts.admin')

@section('title', 'Manage Portfolio Projects')
@section('page_title', 'Portfolio Projects')
@section('page_subtitle', 'Upload, update, or remove case studies shown on the public site')

@section('content')
    <!-- Filter & Search Bar -->
    <div class="bg-white p-6 rounded-3xl border border-gray-200/80 shadow-2xs mb-8">
        <form action="{{ route('admin.portfolio.index') }}" method="GET" class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                <!-- Search -->
                <div class="relative w-full sm:w-72">
                    <input type="text" name="search" value="{{ request('search') }}"
                        placeholder="Search project title or client..."
                        class="w-full pl-9 pr-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-xs transition outline-none">
                    <i data-feather="search" class="w-4 h-4 text-gray-400 absolute left-3 top-3"></i>
                </div>

                <!-- Category Filter -->
                <select name="category" onchange="this.form.submit()"
                    class="w-full sm:w-auto px-4 py-2.5 rounded-xl border border-gray-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 text-xs transition outline-none bg-white">
                    <option value="all">All Categories</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat }}" {{ request('category') === $cat ? 'selected' : '' }}>
                            {{ $cat }}
                        </option>
                    @endforeach
                </select>

                @if (request()->hasAny(['search', 'category']))
                    <a href="{{ route('admin.portfolio.index') }}"
                        class="text-xs text-gray-500 hover:text-red-600 font-semibold flex items-center gap-1">
                        <i data-feather="x" class="w-3.5 h-3.5"></i>
                        <span>Reset Filters</span>
                    </a>
                @endif
            </div>

            <!-- Upload CTA -->
            <a href="{{ route('admin.portfolio.create') }}"
                class="w-full md:w-auto px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs rounded-xl shadow-xs hover:shadow transition inline-flex items-center justify-center gap-2">
                <i data-feather="plus" class="w-4 h-4"></i>
                <span>Upload New Project</span>
            </a>
        </form>
    </div>

    <!-- Data Table -->
    <div class="bg-white rounded-3xl border border-gray-200/80 shadow-2xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-gray-50/80 text-gray-400 uppercase tracking-wider font-extrabold border-b border-gray-200/60">
                    <tr>
                        <th class="py-4 px-6">Project</th>
                        <th class="py-4 px-6">Category</th>
                        <th class="py-4 px-6">Metrics & Results</th>
                        <th class="py-4 px-6 text-center">Featured</th>
                        <th class="py-4 px-6 text-center">Status</th>
                        <th class="py-4 px-6 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($items as $item)
                        <tr class="hover:bg-gray-50/50 transition">
                            <!-- Project Image & Title -->
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-14 rounded-xl overflow-hidden bg-gray-900 flex-shrink-0 border border-gray-100">
                                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                                    </div>
                                    <div class="min-w-0 max-w-xs">
                                        <h4 class="font-bold text-gray-900 text-sm truncate">{{ $item->title }}</h4>
                                        <p class="text-[11px] text-gray-400 truncate">{{ $item->client_name ?: 'Internal Case Study' }}</p>
                                    </div>
                                </div>
                            </td>

                            <!-- Category -->
                            <td class="py-4 px-6">
                                <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-blue-50 text-blue-700 border border-blue-100">
                                    {{ $item->category }}
                                </span>
                            </td>

                            <!-- Metrics -->
                            <td class="py-4 px-6 text-gray-600 font-medium">
                                {{ $item->metrics ?: '—' }}
                            </td>

                            <!-- Featured -->
                            <td class="py-4 px-6 text-center">
                                @if ($item->is_featured)
                                    <span class="inline-flex items-center gap-1 text-[11px] font-bold text-amber-600 bg-amber-50 px-2 py-0.5 rounded-full border border-amber-200">
                                        <i data-feather="star" class="w-3 h-3 fill-current"></i> Yes
                                    </span>
                                @else
                                    <span class="text-gray-300 text-xs">—</span>
                                @endif
                            </td>

                            <!-- Status -->
                            <td class="py-4 px-6 text-center">
                                @if ($item->is_active)
                                    <span class="inline-flex items-center gap-1 text-[11px] font-bold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-full border border-emerald-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Published
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 text-[11px] font-bold text-gray-500 bg-gray-100 px-2.5 py-0.5 rounded-full border border-gray-200">
                                        Draft
                                    </span>
                                @endif
                            </td>

                            <!-- Actions -->
                            <td class="py-4 px-6 text-right">
                                <div class="inline-flex items-center gap-2">
                                    <a href="{{ route('portfolio.show', $item->slug) }}" target="_blank"
                                        class="p-2 rounded-lg bg-gray-100 hover:bg-emerald-50 hover:text-emerald-700 text-gray-600 transition"
                                        title="View Public Page">
                                        <i data-feather="eye" class="w-4 h-4"></i>
                                    </a>

                                    <a href="{{ route('admin.portfolio.edit', $item->id) }}"
                                        class="p-2 rounded-lg bg-gray-100 hover:bg-blue-50 hover:text-blue-700 text-gray-600 transition"
                                        title="Edit Project">
                                        <i data-feather="edit-2" class="w-4 h-4"></i>
                                    </a>

                                    <form action="{{ route('admin.portfolio.destroy', $item->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this project? This action cannot be undone.');"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="p-2 rounded-lg bg-gray-100 hover:bg-red-50 hover:text-red-700 text-gray-600 transition"
                                            title="Delete Project">
                                            <i data-feather="trash-2" class="w-4 h-4"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-gray-400">
                                <i data-feather="inbox" class="w-10 h-10 mx-auto mb-2 text-gray-300"></i>
                                <p class="text-sm font-bold text-gray-600">No Projects Found</p>
                                <p class="text-xs text-gray-400 mt-1">Start by clicking "Upload New Project".</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($items->hasPages())
            <div class="p-6 border-t border-gray-100 flex justify-center">
                {{ $items->links() }}
            </div>
        @endif
    </div>
@endsection
