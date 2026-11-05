<!-- Annotation Tools and Platforms We Work With (Auto-Scrolling Marquee) -->
<section id="annotation-tools" class="py-12 md:py-16 bg-white relative overflow-hidden">
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

        .tools-marquee-card:hover .tools-marquee-track {
            animation-play-state: paused;
        }

        @media (prefers-reduced-motion: reduce) {
            .tools-marquee-track {
                animation: none;
                overflow-x: auto;
            }
        }
    </style>

    <div class="container mx-auto px-4 sm:px-6">
        <!-- Single Card Containing Header + Marquee with All-around Soft Shadow & Margin Top/Bottom -->
        <div class="tools-marquee-card max-w-5xl md:max-w-6xl mx-auto bg-white rounded-3xl shadow-[0_0_40px_rgba(0,0,0,0.08),0_6px_24px_rgba(0,0,0,0.04)] py-10 md:py-14 px-4 sm:px-8 my-6 md:my-10 relative overflow-hidden"
             style="box-shadow: 0 0 40px rgba(0, 0, 0, 0.08), 0 6px 24px rgba(0, 0, 0, 0.04);">

            <!-- Header (Inside the Shadow Card) -->
            <div class="max-w-3xl mx-auto text-center mb-9 md:mb-12 px-4">
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
                <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-16 sm:w-28 z-10 bg-gradient-to-r from-white via-white/80 to-transparent"></div>

                <!-- Right Gradient Fade Mask -->
                <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-16 sm:w-28 z-10 bg-gradient-to-l from-white via-white/80 to-transparent"></div>

                <!-- Scrolling Track -->
                <div class="overflow-hidden w-full relative">
                    <div class="tools-marquee-track flex items-center">
                        @for ($set = 0; $set < 2; $set++)
                            <div class="flex items-center gap-10 sm:gap-14 md:gap-16 shrink-0 pr-10 sm:pr-14 md:pr-16" {!! $set > 0 ? 'aria-hidden="true"' : '' !!}>
                                <!-- 1. CVAT -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-6 w-6 sm:h-7 sm:w-7 text-blue-600 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="18" height="18" rx="3" stroke="#0284c7" stroke-width="2.2" stroke-dasharray="3 3" />
                                        <circle cx="12" cy="12" r="3" fill="#0284c7" />
                                    </svg>
                                    <span class="font-extrabold text-base md:text-lg tracking-tight text-gray-800">CVAT</span>
                                </div>

                                <!-- 2. Label Studio -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-6 w-6 sm:h-7 sm:w-7 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                        <rect x="3" y="3" width="12" height="12" rx="2.5" fill="#0284c7" fill-opacity="0.2" stroke="#0284c7" stroke-width="2" />
                                        <rect x="9" y="9" width="12" height="12" rx="2.5" fill="#f97316" fill-opacity="0.9" stroke="#ea580c" stroke-width="1.5" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-800">Label <span class="text-blue-600">Studio</span></span>
                                </div>

                                <!-- 3. Labelbox -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-6 w-6 sm:h-7 sm:w-7 text-indigo-600 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-800">labelbox</span>
                                </div>

                                <!-- 4. V7 -->
                                <div class="inline-flex items-center gap-2 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-6 w-6 sm:h-7 sm:w-7 text-emerald-600 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                        <path d="M4 4l6 14 3-7 7-7" stroke="#059669" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="font-black text-base md:text-lg tracking-tight text-gray-800">V7</span>
                                </div>

                                <!-- 5. SuperAnnotate -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-6 w-6 sm:h-7 sm:w-7 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                        <path d="M18 7c0-2-1.8-3.5-4-3.5H9C6.8 3.5 5 5.3 5 7.5S6.8 11.5 9 11.5h6c2.2 0 4 1.8 4 4s-1.8 4-4 4H8" stroke="#9333ea" stroke-width="2.5" stroke-linecap="round" />
                                        <circle cx="18" cy="7" r="2" fill="#c026d3" />
                                        <circle cx="8" cy="19.5" r="2" fill="#9333ea" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-800">SuperAnnotate</span>
                                </div>

                                <!-- 6. Scale AI -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-5 w-5 sm:h-6 sm:w-6 text-gray-900 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                        <rect x="3" y="14" width="7" height="7" rx="1.5" />
                                        <rect x="14" y="14" width="7" height="7" rx="1.5" />
                                        <rect x="8.5" y="3" width="7" height="7" rx="1.5" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-900">scale <span class="text-blue-600 font-extrabold text-xs sm:text-sm">AI</span></span>
                                </div>

                                <!-- 7. Supervisely -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-6 w-6 sm:h-7 sm:w-7 text-teal-600 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                        <polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5" stroke="#0d9488" stroke-width="2" />
                                        <circle cx="12" cy="12" r="3" fill="#0d9488" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-800">supervisely</span>
                                </div>

                                <!-- 8. Audacity -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-6 w-6 sm:h-7 sm:w-7 text-amber-600 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6" />
                                        <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z" />
                                        <path d="M10 11v2m4-3v4" stroke="#d97706" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-800">Audacity</span>
                                </div>

                                <!-- 9. Praat -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-6 w-6 sm:h-7 sm:w-7 text-rose-600 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M2 10v4m4-8v12m4-10v8m4-12v16m4-10v4m4-2v0" stroke="#e11d48" stroke-width="2.5" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-800">Praat</span>
                                </div>

                                <!-- 10. Prodigy -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-6 w-6 sm:h-7 sm:w-7 text-violet-700 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                        <polygon points="12 2 20 8 16 20 8 20 4 8" fill="#7c3aed" fill-opacity="0.15" stroke="#7c3aed" stroke-width="2" />
                                        <path d="M12 7v10M8 12h8" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                    <span class="font-mono font-bold text-base md:text-lg tracking-tight text-gray-800">prodigy</span>
                                </div>

                                <!-- 11. Doccano -->
                                <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                    <svg class="h-6 w-6 sm:h-7 sm:w-7 text-blue-600 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                        <polyline points="14 2 14 8 20 8" />
                                        <line x1="8" y1="13" x2="16" y2="13" stroke="#2563eb" stroke-width="2" />
                                    </svg>
                                    <span class="font-bold text-base md:text-lg tracking-tight text-gray-800">doccano</span>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
