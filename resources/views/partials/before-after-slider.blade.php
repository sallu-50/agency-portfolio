{{-- Before & After Image Comparison Slider Component --}}
@php
    $sliderId = $id ?? 'slider-' . Str::random(8);
    $initialPercent = $initialPercent ?? 50;
    $beforeLabel = $beforeLabel ?? 'Before';
    $afterLabel = $afterLabel ?? 'After';
@endphp

<div class="before-after-widget w-full select-none" id="{{ $sliderId }}" data-initial="{{ $initialPercent }}">
    <!-- Main Comparison Viewer Window (Fits in 90vh viewport without scrolling) -->
    <div class="comparison-container relative w-full h-[52vh] md:h-[60vh] max-h-[500px] min-h-[280px] rounded-2xl overflow-hidden shadow-2xl bg-gray-950 border border-gray-800 touch-none cursor-ew-resize group mx-auto"
         style="--position: {{ $initialPercent }}%;">
        
        <!-- Bottom Layer: AFTER (Annotated / Processed) Image -->
        <div class="absolute inset-0 w-full h-full pointer-events-none">
            <img src="{{ $afterImage }}" alt="{{ $alt ?? 'After Comparison Image' }}"
                 class="w-full h-full object-cover select-none pointer-events-none"
                 loading="lazy">
            
            <!-- After Label Badge -->
            <div class="absolute top-4 right-4 z-10 pointer-events-none">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-bold tracking-wide text-white bg-blue-600/85 backdrop-blur-md border border-blue-400/40 shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    {{ $afterLabel }}
                </span>
            </div>
        </div>

        <!-- Top Layer: BEFORE (Raw / Original) Image with dynamic clip-path -->
        <div class="before-layer absolute inset-0 w-full h-full pointer-events-none will-change-[clip-path]"
             style="clip-path: inset(0 calc(100% - var(--position)) 0 0);">
            <img src="{{ $beforeImage }}" alt="{{ $alt ?? 'Before Comparison Image' }}"
                 class="w-full h-full object-cover select-none pointer-events-none"
                 loading="lazy">
            
            <!-- Before Label Badge -->
            <div class="absolute top-4 left-4 z-10 pointer-events-none">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-bold tracking-wide text-white bg-gray-900/85 backdrop-blur-md border border-white/20 shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                    {{ $beforeLabel }}
                </span>
            </div>
        </div>

        <!-- Center Divider Line & Glowing Drag Handle -->
        <div class="divider-line absolute top-0 bottom-0 w-[2px] bg-white pointer-events-none z-20 shadow-[0_0_15px_rgba(255,255,255,0.8)] will-change-[left]"
             style="left: var(--position);">
            
            <!-- Circular Draggable Thumb -->
            <div class="handle-thumb absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 md:w-11 md:h-11 rounded-full bg-white text-gray-900 shadow-2xl flex items-center justify-center border-2 border-blue-500 transition-transform duration-150 group-hover:scale-110 active:scale-95 group-hover:shadow-[0_0_22px_rgba(37,99,235,0.6)]">
                <!-- Double arrows icon -->
                <svg class="w-4.5 h-4.5 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 9l-4 3 4 3m8-6l4 3-4 3"></path>
                </svg>
            </div>
        </div>

        <!-- Interactive Drag Hint overlay (fades out on interaction) -->
        <div class="interaction-hint absolute bottom-4 left-1/2 -translate-x-1/2 pointer-events-none z-20 transition-opacity duration-500 opacity-90 group-hover:opacity-100">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-[11px] font-medium text-white/90 bg-black/60 backdrop-blur-md border border-white/10 shadow-md">
                <svg class="w-3.5 h-3.5 text-blue-400 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h8M8 12h8M8 17h8"></path>
                </svg>
                <span>Drag or click anywhere to compare</span>
            </span>
        </div>

        <!-- Accessible Hidden Range Slider -->
        <input type="range" min="0" max="100" value="{{ $initialPercent }}"
               aria-label="Image comparison slider"
               class="sr-only comparison-range-input">
    </div>

    <!-- Quick Preset Controls Bar -->
    <div class="mt-4 flex flex-wrap items-center justify-between gap-3 px-2">
        <div class="flex items-center gap-2">
            <span class="text-xs font-semibold text-gray-500 flex items-center gap-1.5">
                <i data-feather="sliders" class="w-3.5 h-3.5 text-blue-600"></i> Quick View:
            </span>
            <div class="inline-flex rounded-xl bg-gray-100 p-1 border border-gray-200 text-xs font-medium">
                <button type="button" class="preset-btn px-3 py-1 rounded-lg text-gray-600 hover:text-blue-600 hover:bg-white transition"
                        data-target-percent="0">
                    {{ $beforeLabel }} (100%)
                </button>
                <button type="button" class="preset-btn px-3 py-1 rounded-lg text-blue-600 bg-white shadow-xs font-bold transition"
                        data-target-percent="50">
                    Split 50/50
                </button>
                <button type="button" class="preset-btn px-3 py-1 rounded-lg text-gray-600 hover:text-blue-600 hover:bg-white transition"
                        data-target-percent="100">
                    {{ $afterLabel }} (100%)
                </button>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <button type="button" class="reset-slider-btn text-xs font-semibold text-gray-500 hover:text-blue-600 px-3 py-1.5 rounded-lg border border-gray-200 hover:border-blue-300 transition inline-flex items-center gap-1">
                <i data-feather="rotate-ccw" class="w-3 h-3"></i>
                <span>Reset</span>
            </button>
        </div>
    </div>
</div>
