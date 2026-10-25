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

    <!-- Google Fonts: Plus Jakarta Sans & Inter (Modern, Smart Tech Typography) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('dist/output.css') }}" rel="stylesheet">

    <!-- Feather Icons CDN -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <style>
        :root {
            --font-sans: 'Plus Jakarta Sans', 'Inter', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
            font-family: 'Plus Jakarta Sans', 'Inter', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        body, input, button, select, textarea {
            font-family: 'Plus Jakarta Sans', 'Inter', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            letter-spacing: -0.011em;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        h1, h2, h3, h4, h5, h6 {
            letter-spacing: -0.025em;
            font-feature-settings: "cv02", "cv03", "cv04", "cv11";
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
