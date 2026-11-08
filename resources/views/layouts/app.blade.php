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
    <link href="{{ asset('dist/output.css') }}?v={{ filemtime(public_path('dist/output.css')) }}" rel="stylesheet">

    <!-- Feather Icons CDN -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <style>
        :root {
            --font-sans: 'Plus Jakarta Sans', 'Inter', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 70px;
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

        /* Subtle Interactive Button Hover Movement */
        button:not(#mobile-menu-button),
        [role="button"],
        .btn,
        .ft-submit-btn,
        .team-filter-btn,
        a.inline-flex[class*="rounded-full"],
        a.inline-flex[class*="rounded-lg"],
        a.inline-flex[class*="rounded-xl"],
        a.inline-block[class*="rounded-full"],
        a.inline-block[class*="rounded-lg"],
        a[class*="bg-blue-600"],
        a[class*="bg-gradient-to-r"],
        a[class*="bg-blue-50"][class*="rounded-full"],
        a[href*="free-trial"],
        a[href*="wa.me"] {
            transition: transform 0.22s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.22s ease, background-color 0.2s ease, color 0.2s ease, border-color 0.2s ease;
            will-change: transform;
        }

        button:not(#mobile-menu-button):hover,
        [role="button"]:hover,
        .btn:hover,
        .ft-submit-btn:hover,
        .team-filter-btn:hover,
        a.inline-flex[class*="rounded-full"]:hover,
        a.inline-flex[class*="rounded-lg"]:hover,
        a.inline-flex[class*="rounded-xl"]:hover,
        a.inline-block[class*="rounded-full"]:hover,
        a.inline-block[class*="rounded-lg"]:hover,
        a[class*="bg-blue-600"]:hover,
        a[class*="bg-gradient-to-r"]:hover,
        a[class*="bg-blue-50"][class*="rounded-full"]:hover,
        a[href*="free-trial"]:hover,
        a[href*="wa.me"]:hover {
            transform: translateY(-2px);
        }

        button:not(#mobile-menu-button):active,
        [role="button"]:active,
        .btn:active,
        .ft-submit-btn:active,
        .team-filter-btn:active,
        a.inline-flex[class*="rounded-full"]:active,
        a.inline-flex[class*="rounded-lg"]:active,
        a.inline-flex[class*="rounded-xl"]:active,
        a.inline-block[class*="rounded-full"]:active,
        a.inline-block[class*="rounded-lg"]:active,
        a[class*="bg-blue-600"]:active,
        a[class*="bg-gradient-to-r"]:active,
        a[class*="bg-blue-50"][class*="rounded-full"]:active,
        a[href*="free-trial"]:active,
        a[href*="wa.me"]:active {
            transform: translateY(0);
        }

        /* Subtle Arrow Nudge inside Buttons on Hover */
        button:hover i[data-feather="arrow-right"],
        button:hover svg.feather-arrow-right,
        a[class*="rounded-"]:hover i[data-feather="arrow-right"],
        a[class*="rounded-"]:hover svg.feather-arrow-right,
        a[class*="bg-"]:hover i[data-feather="arrow-right"],
        a[class*="bg-"]:hover svg.feather-arrow-right {
            transform: translateX(3px);
        }

        i[data-feather="arrow-right"],
        svg.feather-arrow-right {
            transition: transform 0.2s ease;
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

                mobileMenu.querySelectorAll('a').forEach(function (link) {
                    link.addEventListener('click', function () {
                        mobileMenu.classList.add('hidden');
                    });
                });
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
