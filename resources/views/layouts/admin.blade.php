<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - Marveit AI Control Center</title>

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link href="{{ asset('dist/output.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    @stack('styles')
</head>

<body class="h-full font-sans antialiased text-gray-800">
    <div class="min-h-full flex flex-col md:flex-row">
        <!-- Sidebar Navigation -->
        <aside class="w-full md:w-64 bg-gray-900 text-gray-300 flex-shrink-0 flex flex-col justify-between shadow-xl z-20">
            <div>
                <!-- Brand Logo -->
                <div class="p-6 border-b border-gray-800 flex items-center justify-between">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
                        <img src="{{ asset('image/Marveit ABCD.svg') }}" alt="Marveit Logo" class="h-8 w-auto brightness-0 invert">
                        <span class="text-xs uppercase tracking-wider font-extrabold text-blue-400 bg-blue-900/50 px-2 py-0.5 rounded border border-blue-700/50">Admin</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <nav class="p-4 space-y-1.5 text-sm">
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white shadow-md' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                        <i data-feather="grid" class="w-4 h-4"></i>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('admin.portfolio.index') }}"
                        class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors font-medium {{ request()->routeIs('admin.portfolio.*') ? 'bg-blue-600 text-white shadow-md' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                        <i data-feather="briefcase" class="w-4 h-4"></i>
                        <span>Portfolio Projects</span>
                    </a>

                    <a href="{{ route('portfolio') }}" target="_blank"
                        class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-gray-400 hover:text-white hover:bg-gray-800 transition-colors font-medium">
                        <div class="flex items-center gap-3">
                            <i data-feather="external-link" class="w-4 h-4"></i>
                            <span>View Public Site</span>
                        </div>
                        <i data-feather="arrow-up-right" class="w-3.5 h-3.5 opacity-60"></i>
                    </a>
                </nav>
            </div>

            <!-- User Footer & Logout -->
            <div class="p-4 border-t border-gray-800">
                <div class="flex items-center justify-between mb-3 px-2">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xs">
                            {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                        </div>
                        <div class="min-w-0">
                            <p class="text-xs font-bold text-white truncate">{{ Auth::user()->name ?? 'Administrator' }}</p>
                            <p class="text-[11px] text-gray-400 truncate">{{ Auth::user()->email ?? 'admin@marveit.com' }}</p>
                        </div>
                    </div>
                </div>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center justify-center gap-2 px-3 py-2 rounded-xl text-xs font-bold text-red-400 hover:text-white hover:bg-red-600/80 transition-colors border border-red-900/40">
                        <i data-feather="log-out" class="w-3.5 h-3.5"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col min-w-0 bg-gray-50">
            <!-- Topbar Header -->
            <header class="bg-white border-b border-gray-200 px-6 py-4 flex items-center justify-between shadow-2xs">
                <div>
                    <h1 class="text-xl font-bold text-gray-900">@yield('page_title', 'Dashboard')</h1>
                    <p class="text-xs text-gray-500">@yield('page_subtitle', 'Manage Marveit AI data & portfolio showcases')</p>
                </div>

                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.portfolio.create') }}"
                        class="inline-flex items-center gap-1.5 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl shadow-xs hover:shadow transition">
                        <i data-feather="plus" class="w-3.5 h-3.5"></i>
                        <span>Upload Project</span>
                    </a>
                </div>
            </header>

            <!-- Main Body -->
            <main class="flex-1 p-6 md:p-8">
                <!-- Flash Alerts -->
                @if (session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 flex items-center gap-3 shadow-2xs">
                        <i data-feather="check-circle" class="w-5 h-5 text-emerald-600 flex-shrink-0"></i>
                        <span class="text-xs font-semibold">{{ session('success') }}</span>
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-800 flex items-center gap-3 shadow-2xs">
                        <i data-feather="alert-circle" class="w-5 h-5 text-red-600 flex-shrink-0"></i>
                        <span class="text-xs font-semibold">{{ session('error') }}</span>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof feather !== 'undefined') {
                feather.replace();
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
