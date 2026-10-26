{{-- Before & After Image Comparison Slider Component --}}
@php
    $sliderId = $id ?? 'slider-' . Str::random(8);
    $initialPercent = $initialPercent ?? 50;
    $beforeLabel = $beforeLabel ?? 'Raw Surface';
    $afterLabel = $afterLabel ?? 'AI Annotated';
    $customHeight = $height ?? null;
@endphp

<style>
    #{{ $sliderId }} .comparison-container {
        position: relative;
        width: 100%;
        height: 540px;
        min-height: 400px;
        max-height: 75vh;
        border-radius: 28px;
        overflow: hidden;
        background-color: #0f172a;
        box-shadow: 0 14px 40px -8px rgba(0, 0, 0, 0.16);
    }
    @media (max-width: 768px) {
        #{{ $sliderId }} .comparison-container {
            height: 380px;
            min-height: 300px;
            border-radius: 20px;
        }
    }
</style>

<div class="before-after-widget w-full select-none" id="{{ $sliderId }}" data-initial="{{ $initialPercent }}">
    <!-- Main Comparison Viewer Window -->
    <div class="comparison-container relative w-full overflow-hidden touch-none cursor-ew-resize group mx-auto flex items-center justify-center border border-black/10"
         style="--position: {{ $initialPercent }}%; {{ $customHeight ? 'height: ' . $customHeight . ' !important; min-height: unset;' : '' }}">
        
        <!-- Bottom Layer: AFTER (Annotated / Processed) Image -->
        <div class="absolute inset-0 w-full h-full pointer-events-none flex items-center justify-center overflow-hidden">
            <img src="{{ $afterImage }}" alt="{{ $alt ?? 'After Comparison Image' }}"
                 class="w-full h-full select-none pointer-events-none comparison-img"
                 style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;"
                 loading="lazy">
            
            <!-- After Label Badge -->
            <div class="comparison-badge absolute top-3 right-3 z-10 pointer-events-none transition-opacity duration-200">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-semibold tracking-wide text-white bg-black/60 backdrop-blur-md border border-white/20 shadow-md">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    {{ $afterLabel }}
                </span>
            </div>
        </div>

        <!-- Top Layer: BEFORE (Raw / Original) Image with dynamic clip-path -->
        <div class="before-layer absolute inset-0 w-full h-full pointer-events-none will-change-[clip-path] flex items-center justify-center overflow-hidden"
             style="clip-path: inset(0 calc(100% - var(--position)) 0 0); -webkit-clip-path: inset(0 calc(100% - var(--position)) 0 0);">
            <img src="{{ $beforeImage }}" alt="{{ $alt ?? 'Before Comparison Image' }}"
                 class="w-full h-full select-none pointer-events-none comparison-img"
                 style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;"
                 loading="lazy">
            
            <!-- Before Label Badge -->
            <div class="comparison-badge absolute top-3 left-3 z-10 pointer-events-none transition-opacity duration-200">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-semibold tracking-wide text-white bg-black/60 backdrop-blur-md border border-white/20 shadow-md">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                    {{ $beforeLabel }}
                </span>
            </div>
        </div>

        <!-- Center Divider Line & Drag Handle (Clean White Line with ||| circular thumb) -->
        <div class="divider-line absolute top-0 bottom-0 pointer-events-none z-20 will-change-[left]"
             style="left: var(--position); transform: translateX(-50%); width: 2px; background-color: #ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.45);">
            
            <!-- Circular Draggable Thumb with 3 vertical bars ||| -->
            <div class="handle-thumb absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full bg-white flex items-center justify-center cursor-ew-resize select-none"
                 style="width: 44px; height: 44px; background-color: #ffffff; box-shadow: 0 4px 18px rgba(0, 0, 0, 0.3); border: 1px solid rgba(0, 0, 0, 0.08); transition: transform 0.15s ease;">
                <!-- 3 vertical grip bars ||| -->
                <div class="flex items-center justify-center pointer-events-none" style="gap: 3.5px;">
                    <span style="display: block; width: 2.5px; height: 15px; background-color: #94a3b8; border-radius: 9999px;"></span>
                    <span style="display: block; width: 2.5px; height: 15px; background-color: #94a3b8; border-radius: 9999px;"></span>
                    <span style="display: block; width: 2.5px; height: 15px; background-color: #94a3b8; border-radius: 9999px;"></span>
                </div>
            </div>
        </div>

        <!-- Accessible Range Slider for Screen Readers & Keyboard -->
        <input type="range" min="0" max="100" value="{{ $initialPercent }}"
               aria-label="Image comparison slider"
               class="sr-only comparison-range-input">
    </div>
</div>
