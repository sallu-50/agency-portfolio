{{-- Before & After Image Comparison Slider Component --}}
@php
    $sliderId = $id ?? 'slider-' . Str::random(8);
    $initialPercent = $initialPercent ?? 50;
    $beforeLabel = $beforeLabel ?? 'Raw Surface';
    $afterLabel = $afterLabel ?? 'AI Annotated';
    $sliderHeight = $height ?? 'auto';
@endphp

<div class="before-after-widget w-full select-none" id="{{ $sliderId }}" data-initial="{{ $initialPercent }}">
    <!-- Main Comparison Viewer Window -->
    <div class="comparison-container relative w-full rounded-3xl md:rounded-[32px] overflow-hidden touch-none cursor-ew-resize group mx-auto flex items-center justify-center bg-gray-900 border border-black/10 shadow-[0_12px_40px_rgba(0,0,0,0.12)] aspect-[4/3] md:aspect-[16/10]"
         style="--position: {{ $initialPercent }}%; {{ $sliderHeight !== 'auto' ? 'height: ' . $sliderHeight . ';' : '' }}">
        
        <!-- Bottom Layer: AFTER (Annotated / Processed) Image -->
        <div class="absolute inset-0 w-full h-full pointer-events-none">
            <img src="{{ $afterImage }}" alt="{{ $alt ?? 'After Comparison Image' }}"
                 class="w-full h-full object-cover select-none pointer-events-none comparison-img"
                 loading="lazy">
            
            <!-- After Label Badge -->
            <div class="comparison-badge absolute top-4 right-4 z-10 pointer-events-none transition-opacity duration-200">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold tracking-wide text-white bg-black/60 backdrop-blur-md border border-white/20 shadow-md">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    {{ $afterLabel }}
                </span>
            </div>
        </div>

        <!-- Top Layer: BEFORE (Raw / Original) Image with dynamic clip-path -->
        <div class="before-layer absolute inset-0 w-full h-full pointer-events-none will-change-[clip-path]"
             style="clip-path: inset(0 calc(100% - var(--position)) 0 0);">
            <img src="{{ $beforeImage }}" alt="{{ $alt ?? 'Before Comparison Image' }}"
                 class="w-full h-full object-cover select-none pointer-events-none comparison-img"
                 loading="lazy">
            
            <!-- Before Label Badge -->
            <div class="comparison-badge absolute top-4 left-4 z-10 pointer-events-none transition-opacity duration-200">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold tracking-wide text-white bg-black/60 backdrop-blur-md border border-white/20 shadow-md">
                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                    {{ $beforeLabel }}
                </span>
            </div>
        </div>

        <!-- Center Divider Line & Drag Handle (Clean White Line with ||| circular thumb) -->
        <div class="divider-line absolute top-0 bottom-0 pointer-events-none z-20 will-change-[left]"
             style="left: var(--position); transform: translateX(-50%); width: 2px; background-color: #ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);">
            
            <!-- Circular Draggable Thumb with 3 vertical bars ||| -->
            <div class="handle-thumb absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full bg-white flex items-center justify-center cursor-ew-resize select-none"
                 style="width: 42px; height: 42px; background-color: #ffffff; box-shadow: 0 4px 18px rgba(0, 0, 0, 0.28); border: 1px solid rgba(0, 0, 0, 0.08); transition: transform 0.15s ease;">
                <!-- 3 vertical grip bars ||| -->
                <div class="flex items-center justify-center pointer-events-none" style="gap: 3.5px;">
                    <span style="display: block; width: 2.5px; height: 15px; background-color: #94a3b8; border-radius: 9999px;"></span>
                    <span style="display: block; width: 2.5px; height: 15px; background-color: #94a3b8; border-radius: 9999px;"></span>
                    <span style="display: block; width: 2.5px; height: 15px; background-color: #94a3b8; border-radius: 9999px;"></span>
                </div>
            </div>
        </div>

        <!-- Interactive Drag Hint overlay (fades out on interaction) -->
        <div class="interaction-hint absolute bottom-4 left-1/2 -translate-x-1/2 pointer-events-none z-20 transition-opacity duration-500 opacity-90 group-hover:opacity-100">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-[11px] font-medium text-gray-800 bg-white/90 backdrop-blur-md border border-white/40 shadow-lg">
                <svg class="w-3.5 h-3.5 text-blue-600 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h8M8 12h8M8 17h8"></path>
                </svg>
                <span>Drag slider left or right</span>
            </span>
        </div>

        <!-- Accessible Range Slider for Screen Readers & Keyboard -->
        <input type="range" min="0" max="100" value="{{ $initialPercent }}"
               aria-label="Image comparison slider"
               class="sr-only comparison-range-input">
    </div>

    <!-- Quick Preset Controls Bar -->
    <div class="mt-3.5 flex flex-wrap items-center justify-between gap-3 px-2">
        <div class="flex items-center gap-2">
            <span class="text-xs font-semibold text-gray-500 flex items-center gap-1.5">
                <i data-feather="sliders" class="w-3.5 h-3.5 text-blue-600"></i> View:
            </span>
            <div class="inline-flex rounded-xl bg-gray-100 p-1 border border-gray-200 text-xs font-medium">
                <button type="button" class="preset-btn px-3 py-1 rounded-lg text-gray-600 hover:text-blue-600 hover:bg-white transition"
                        data-target-percent="0">
                    {{ $beforeLabel }} (100%)
                </button>
                <button type="button" class="preset-btn px-3 py-1 rounded-lg text-blue-600 bg-white shadow-xs font-bold transition"
                        data-target-percent="50">
                    50 / 50
                </button>
                <button type="button" class="preset-btn px-3 py-1 rounded-lg text-gray-600 hover:text-blue-600 hover:bg-white transition"
                        data-target-percent="100">
                    {{ $afterLabel }} (100%)
                </button>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <button type="button" class="toggle-fit-btn text-xs font-semibold text-gray-500 hover:text-blue-600 px-3 py-1.5 rounded-lg border border-gray-200 hover:border-blue-300 transition inline-flex items-center gap-1"
                    title="Toggle between Fill Frame and Fit Entire Image">
                <i data-feather="maximize-2" class="w-3 h-3"></i>
                <span class="toggle-fit-text">Fill Frame</span>
            </button>
            <button type="button" class="reset-slider-btn text-xs font-semibold text-gray-500 hover:text-blue-600 px-3 py-1.5 rounded-lg border border-gray-200 hover:border-blue-300 transition inline-flex items-center gap-1">
                <i data-feather="rotate-ccw" class="w-3 h-3"></i>
                <span>Reset</span>
            </button>
        </div>
    </div>
</div>
