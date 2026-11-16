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
                        @php
                            $toolsList = $annotationTools ?? \App\Models\AnnotationTool::where('is_active', true)->orderBy('sort_order')->get();
                        @endphp
                        @for ($set = 0; $set < 2; $set++)
                            <div class="tools-marquee-set" {!! $set > 0 ? 'aria-hidden="true"' : '' !!}>
                                @foreach ($toolsList as $tool)
                                    <div class="inline-flex items-center gap-2.5 shrink-0 transition-transform duration-200 hover:scale-105 cursor-default">
                                        {!! $tool->svg_logo !!}
                                        <span class="font-bold text-base md:text-lg tracking-tight text-gray-900">{{ $tool->name }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
