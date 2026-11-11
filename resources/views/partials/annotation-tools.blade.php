<!-- Annotation Tools and Platforms We Work With (Auto-Scrolling Marquee) -->
<section id="annotation-tools" class="home-section w-[calc(100%-1.5rem)] sm:w-auto container mx-auto py-16 md:py-24 px-6 relative overflow-hidden">
    <style>
        @keyframes tools-marquee-scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .tools-marquee-track {
            display: flex;
            width: max-content;
            animation: tools-marquee-scroll 32s linear infinite;
            will-change: transform;
        }

        #annotation-tools:hover .tools-marquee-track {
            animation-play-state: paused;
        }

        @media (prefers-reduced-motion: reduce) {
            .tools-marquee-track {
                animation: none;
                overflow-x: auto;
            }
        }

        .tools-marquee-set {
            display: flex;
            align-items: center;
            flex-shrink: 0;
            gap: 2.5rem;
            padding-right: 2.5rem;
        }

        @media (min-width: 640px) {
            .tools-marquee-set {
                gap: 3.5rem;
                padding-right: 3.5rem;
            }
        }

        @media (min-width: 768px) {
            .tools-marquee-set {
                gap: 4rem;
                padding-right: 4rem;
            }
        }
    </style>

    <div>
        <div class="w-full relative overflow-hidden">

            <!-- Header (Inside the Shadow Card) -->
            <div class="max-w-3xl mx-auto text-center py-6 md:py-8 mb-4 md:mb-6 px-4">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 tracking-tight mb-3">
                    Annotation Tools and Platforms We Work With
                </h2>
                <p class="text-sm md:text-base text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    We work inside industry-standard annotation platforms, or on your own, so your data stays in your existing workflow.
                </p>
            </div>

            <!-- Marquee Container -->
            <div class="relative overflow-hidden w-full pt-1 pb-1">
                <!-- Left Gradient Fade Mask -->
                <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-16 sm:w-28 z-10" style="background: linear-gradient(to right, #f8fafc, rgba(248, 250, 252, 0.8), transparent);"></div>

                <!-- Right Gradient Fade Mask -->
                <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-16 sm:w-28 z-10" style="background: linear-gradient(to left, #f8fafc, rgba(248, 250, 252, 0.8), transparent);"></div>

                <!-- Scrolling Track -->
                <div class="overflow-hidden w-full relative">
                    <div class="tools-marquee-track flex items-center">
                        @for ($set = 0; $set < 2; $set++)
                            <div class="tools-marquee-set" {!! $set > 0 ? 'aria-hidden="true"' : '' !!}>
                                <!-- 1. CVAT -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none">
                                        <rect x="2" y="2" width="28" height="28" rx="6" fill="#1677FF" />
                                        <text x="16" y="22" text-anchor="middle" fill="#FFFFFF" font-family="system-ui, -apple-system, sans-serif" font-size="18" font-weight="800">C</text>
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-900">CVAT</span>
                                </div>

                                <!-- 2. Label Studio -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none">
                                        <circle cx="16" cy="16" r="12" fill="#FF4D4F" />
                                        <path d="M10.5 16H21.5M16 10.5V21.5" stroke="#FFFFFF" stroke-width="3" stroke-linecap="butt" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-900">Label Studio</span>
                                </div>

                                <!-- 3. labelbox -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none">
                                        <rect x="3" y="3" width="26" height="26" rx="5" stroke="#0A2540" stroke-width="3.6" />
                                        <rect x="11" y="11" width="10" height="10" fill="#00D4B2" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-900">labelbox</span>
                                </div>

                                <!-- 4. V7 -->
                                <div class="inline-flex items-center gap-2 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none">
                                        <path d="M5 6L16 26L27 6" stroke="#7C3AED" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="font-extrabold text-base md:text-lg tracking-tight text-gray-900">V7</span>
                                </div>

                                <!-- 5. SuperAnnotate -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none">
                                        <polygon points="16,4 28,16 16,28 4,16" fill="#10B981" />
                                        <circle cx="16" cy="16" r="4.2" fill="#FFFFFF" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-900">SuperAnnotate</span>
                                </div>

                                <!-- 6. supervisely -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none">
                                        <rect x="4" y="4" width="24" height="24" rx="4.5" fill="#000000" />
                                        <circle cx="12" cy="12" r="3" fill="#38BDF8" />
                                        <circle cx="20" cy="20" r="3" fill="#38BDF8" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-900">supervisely</span>
                                </div>

                                <!-- 7. Audacity -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none">
                                        <path d="M5 22C5 9.5 27 9.5 27 22" stroke="#2563EB" stroke-width="3.6" stroke-linecap="round" />
                                        <path d="M11 18V26M16 14V30M21 18V26" stroke="#EA580C" stroke-width="2.4" stroke-linecap="butt" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-900">Audacity</span>
                                </div>

                                <!-- 8. Praat -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none">
                                        <path d="M6 10.5C12.5 5.8 20.5 12.2 25 18C20.5 23.8 12.5 27.6 6 22Z" fill="#B45309" />
                                        <path d="M21 10C28 16.5 24 25 17 29.5" stroke="#1D4ED8" stroke-width="3" stroke-linecap="butt" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-900">Praat</span>
                                </div>

                                <!-- 9. prodigy -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none">
                                        <circle cx="16" cy="16" r="12" fill="#000000" />
                                        <polygon points="12,11 22,16 12,21" fill="#FACC15" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-900">prodigy</span>
                                </div>

                                <!-- 10. doccano -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-7 w-7 flex-shrink-0" width="28" height="28" viewBox="0 0 32 32" fill="none">
                                        <rect x="4" y="4" width="24" height="24" rx="4.5" fill="#4F46E5" />
                                        <path d="M9.5 11.5H22.5M9.5 16.5H22.5M9.5 21.5H17.5" stroke="#FFFFFF" stroke-width="2.2" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-900">doccano</span>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
