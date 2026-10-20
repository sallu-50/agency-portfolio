/**
 * Before & After Image Comparison Slider
 * Marveit AI Enterprise Portfolio
 */
(function () {
    'use strict';

    function initBeforeAfterSlider(widget) {
        if (!widget || widget.dataset.initialized === 'true') return;
        widget.dataset.initialized = 'true';

        const container = widget.querySelector('.comparison-container');
        if (!container) return;

        const rangeInput = widget.querySelector('.comparison-range-input');
        const hint = widget.querySelector('.interaction-hint');
        const presetBtns = widget.querySelectorAll('.preset-btn');
        const resetBtn = widget.querySelector('.reset-slider-btn');
        const initialPercent = parseFloat(widget.dataset.initial || '50');

        let isDragging = false;
        let animatedIntroDone = false;

        function setPosition(percent, smooth = false) {
            const clamped = Math.max(0, Math.min(100, percent));
            
            if (smooth) {
                container.style.transition = '--position 0.35s cubic-bezier(0.2, 0.8, 0.2, 1)';
                setTimeout(() => {
                    container.style.transition = '';
                }, 380);
            }

            container.style.setProperty('--position', `${clamped}%`);

            if (rangeInput) {
                rangeInput.value = clamped;
            }

            // Update preset buttons state
            presetBtns.forEach(btn => {
                const target = parseFloat(btn.dataset.targetPercent);
                if (Math.abs(target - clamped) < 2) {
                    btn.classList.add('bg-white', 'text-blue-600', 'shadow-xs', 'font-bold');
                    btn.classList.remove('text-gray-600');
                } else {
                    btn.classList.remove('bg-white', 'text-blue-600', 'shadow-xs', 'font-bold');
                    btn.classList.add('text-gray-600');
                }
            });

            // Hide the hint once user interacts
            if (hint && !hint.classList.contains('opacity-0')) {
                hint.classList.add('opacity-0');
            }
        }

        function updateFromPointer(e) {
            const rect = container.getBoundingClientRect();
            if (rect.width === 0) return;
            const x = e.clientX - rect.left;
            const percent = (x / rect.width) * 100;
            setPosition(percent);
        }

        // Pointer Events (Mouse, Touch, Pen unified)
        container.addEventListener('pointerdown', function (e) {
            isDragging = true;
            try {
                container.setPointerCapture(e.pointerId);
            } catch (err) {
                // Ignore if capture fails
            }
            updateFromPointer(e);
        });

        container.addEventListener('pointermove', function (e) {
            if (!isDragging) return;
            updateFromPointer(e);
        });

        function endDrag(e) {
            if (isDragging) {
                isDragging = false;
                try {
                    container.releasePointerCapture(e.pointerId);
                } catch (err) {
                    // Ignore
                }
            }
        }

        container.addEventListener('pointerup', endDrag);
        container.addEventListener('pointercancel', endDrag);

        // Range input keyboard fallback
        if (rangeInput) {
            rangeInput.addEventListener('input', function () {
                setPosition(parseFloat(this.value));
            });
        }

        // Preset buttons
        presetBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const target = parseFloat(this.dataset.targetPercent);
                setPosition(target, true);
            });
        });

        // Reset button
        if (resetBtn) {
            resetBtn.addEventListener('click', function () {
                setPosition(initialPercent, true);
            });
        }

        // Subtle teaser animation on first viewport entrance
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !animatedIntroDone) {
                        animatedIntroDone = true;
                        observer.disconnect();

                        setTimeout(() => {
                            // Only run hint animation if user hasn't touched it yet
                            if (!isDragging && hint && !hint.classList.contains('opacity-0')) {
                                setPosition(42, true);
                                setTimeout(() => setPosition(58, true), 400);
                                setTimeout(() => setPosition(50, true), 800);
                            }
                        }, 500);
                    }
                });
            }, { threshold: 0.4 });

            observer.observe(widget);
        }

        // Set initial position
        setPosition(initialPercent);
    }

    // Auto-init all comparison sliders on DOM ready
    function initAllSliders() {
        document.querySelectorAll('.before-after-widget').forEach(initBeforeAfterSlider);
    }

    // Comparison switcher tabs
    document.addEventListener('click', function (e) {
        const btn = e.target.closest('.comparison-tab-btn');
        if (!btn) return;
        const targetId = btn.dataset.target;
        if (!targetId) return;

        // Update active tab buttons style
        document.querySelectorAll('.comparison-tab-btn').forEach(b => {
            b.classList.remove('bg-blue-600', 'text-white', 'border-blue-500', 'shadow-md', 'shadow-blue-500/30');
            b.classList.add('bg-gray-900', 'text-gray-400', 'border-gray-800');
        });
        btn.classList.add('bg-blue-600', 'text-white', 'border-blue-500', 'shadow-md', 'shadow-blue-500/30');
        btn.classList.remove('bg-gray-900', 'text-gray-400', 'border-gray-800');

        // Toggle target comparison display
        document.querySelectorAll('.comparison-display-item').forEach(item => {
            item.classList.add('hidden');
            item.classList.remove('block');
        });

        const targetEl = document.getElementById(targetId);
        if (targetEl) {
            targetEl.classList.remove('hidden');
            targetEl.classList.add('block');
            initAllSliders();
        }
    });

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAllSliders);
    } else {
        initAllSliders();
    }

    // Expose for dynamic content / SPA / Livewire
    window.initBeforeAfterSlider = initBeforeAfterSlider;
    window.initAllBeforeAfterSliders = initAllSliders;
})();
