<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name', 'Marveit AI') . ' - High-Quality Data Annotation & AI Solutions')</title>

    <meta name="description" content="@yield('meta_description', 'Marveit AI delivers enterprise-grade human-in-the-loop data annotation, computer vision labeling, NLP text annotation, and audio transcription to accelerate ML models.')">
    <meta name="keywords" content="Data annotation, computer vision, NLP annotation, audio transcription, LiDAR annotation, machine learning datasets">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="theme-color" content="#0E5EDD">

    <!-- Stylesheets -->
    <link href="{{ asset('dist/output.css') }}" rel="stylesheet">

    <!-- Feather Icons CDN -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }
        .team-filter-btn.active {
            background-color: #0E5EDD;
            color: #ffffff;
            border-color: #0E5EDD;
            box-shadow: 0 4px 14px rgba(14, 94, 221, 0.25);
        }
    </style>

    @stack('styles')
</head>

<body class="font-sans bg-white text-gray-800 antialiased selection:bg-blue-600 selection:text-white">

    <!-- Header Navigation -->
    @include('partials.header')

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Base Scripts -->
    <script>
        // Feather Icons initialization
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof feather !== 'undefined') {
                feather.replace();
            }

            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
