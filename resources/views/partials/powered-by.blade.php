<!-- Powered By Marquee Section -->
<section id="powered-by" class="bg-gray-900 border-t border-gray-800 text-gray-200 py-10 sm:py-12 overflow-hidden relative">
    <style>
        @keyframes pb-marquee-scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-33.333333%);
            }
        }

        .powered-by-track {
            display: flex;
            width: max-content;
            animation: pb-marquee-scroll 28s linear infinite;
            will-change: transform;
        }

        .powered-by-card:hover .powered-by-track {
            animation-play-state: paused;
        }

        @media (prefers-reduced-motion: reduce) {
            .powered-by-track {
                animation: none;
                overflow-x: auto;
            }
        }
    </style>

    <div class="container mx-auto px-4 sm:px-6">
        <!-- Section Title -->
        <h3 class="text-center text-lg sm:text-xl font-bold text-white tracking-wide mb-5 sm:mb-6">
            Powered By
        </h3>

        <!-- Marquee Card Container -->
        <div class="powered-by-card max-w-5xl mx-auto rounded-2xl bg-[#242526] border border-gray-700/60 shadow-lg relative overflow-hidden py-4 sm:py-5 px-2 sm:px-4"
             style="background-color: #242526;">
            <!-- Left Gradient Fade Mask -->
            <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-12 sm:w-24 z-10 bg-gradient-to-r from-[#242526] via-[#242526]/80 to-transparent"></div>

            <!-- Right Gradient Fade Mask -->
            <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-12 sm:w-24 z-10 bg-gradient-to-l from-[#242526] via-[#242526]/80 to-transparent"></div>

            <!-- Scrolling Marquee Track -->
            <div class="powered-by-marquee overflow-hidden w-full relative">
                <div class="powered-by-track flex items-center">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0 pr-10 sm:pr-14 md:pr-16" {!! $i > 0 ? 'aria-hidden="true"' : '' !!}>
                            <!-- 1. Namecheap -->
                            <div class="shrink-0 flex items-center justify-center">
                                <img src="{{ asset('image/logos/namecheap.png') }}"
                                     srcset="{{ asset('image/logos/namecheap.png') }} 1x, {{ asset('image/logos/namecheap@2x.png') }} 2x"
                                     alt="Namecheap"
                                     class="h-6 sm:h-7 w-auto object-contain transition-transform duration-200 hover:scale-105"
                                     loading="lazy">
                            </div>

                            <!-- 2. DigitalOcean -->
                            <div class="shrink-0 flex items-center justify-center">
                                <img src="{{ asset('image/logos/digitalocean.png') }}"
                                     srcset="{{ asset('image/logos/digitalocean.png') }} 1x, {{ asset('image/logos/digitalocean@2x.png') }} 2x"
                                     alt="DigitalOcean"
                                     class="h-6 sm:h-7 w-auto object-contain transition-transform duration-200 hover:scale-105"
                                     loading="lazy">
                            </div>

                            <!-- 3. Cloudflare -->
                            <div class="shrink-0 flex items-center justify-center">
                                <img src="{{ asset('image/logos/cloudflare.png') }}"
                                     srcset="{{ asset('image/logos/cloudflare.png') }} 1x, {{ asset('image/logos/cloudflare@2x.png') }} 2x"
                                     alt="Cloudflare"
                                     class="h-7 sm:h-8 w-auto object-contain transition-transform duration-200 hover:scale-105"
                                     loading="lazy">
                            </div>

                            <!-- 4. Firebase -->
                            <div class="shrink-0 flex items-center justify-center">
                                <img src="{{ asset('image/logos/firebase.png') }}"
                                     srcset="{{ asset('image/logos/firebase.png') }} 1x, {{ asset('image/logos/firebase@2x.png') }} 2x"
                                     alt="Firebase"
                                     class="h-6 sm:h-7 w-auto object-contain transition-transform duration-200 hover:scale-105"
                                     loading="lazy">
                            </div>

                            <!-- 5. Laravel -->
                            <div class="shrink-0 flex items-center justify-center">
                                <img src="{{ asset('image/logos/laravel.png') }}"
                                     srcset="{{ asset('image/logos/laravel.png') }} 1x, {{ asset('image/logos/laravel@2x.png') }} 2x"
                                     alt="Laravel"
                                     class="h-7 sm:h-8 w-auto object-contain transition-transform duration-200 hover:scale-105"
                                     loading="lazy">
                            </div>

                            <!-- 6. bKash -->
                            <div class="shrink-0 flex items-center justify-center">
                                <img src="{{ asset('image/logos/bkash.png') }}"
                                     srcset="{{ asset('image/logos/bkash.png') }} 1x, {{ asset('image/logos/bkash@2x.png') }} 2x"
                                     alt="bKash"
                                     class="h-8 sm:h-9 w-auto object-contain transition-transform duration-200 hover:scale-105"
                                     loading="lazy">
                            </div>

                            <!-- 7. SSLCOMMERZ -->
                            <div class="shrink-0 flex items-center justify-center">
                                <img src="{{ asset('image/logos/sslcommerz.png') }}"
                                     srcset="{{ asset('image/logos/sslcommerz.png') }} 1x, {{ asset('image/logos/sslcommerz@2x.png') }} 2x"
                                     alt="SSLCOMMERZ"
                                     class="h-10 sm:h-12 w-auto object-contain transition-transform duration-200 hover:scale-105"
                                     loading="lazy">
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>

