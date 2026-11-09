<!-- Footer -->
<footer id="contact-footer" class="bg-gray-900 text-gray-300 border-t border-gray-800"
    style="padding-top: 4.5rem; padding-bottom: 3.5rem;">
    <style>
        #contact-footer {
            padding-top: 4.5rem !important;
            padding-bottom: 3.5rem !important;
        }

        @media (min-width: 768px) {
            #contact-footer {
                padding-top: 5rem !important;
                padding-bottom: 4rem !important;
            }
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2.25rem;
            margin-bottom: 3.5rem;
        }

        @media (min-width: 640px) {
            .footer-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 2.25rem;
            }
        }

        @media (min-width: 1024px) {
            .footer-grid {
                grid-template-columns: 1.35fr 1fr 1fr 0.95fr 1.3fr;
                gap: 2rem;
            }
        }

        @media (min-width: 1280px) {
            .footer-grid {
                gap: 2.5rem;
            }
        }

        .footer-bottom-bar {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            width: 100%;
        }

        @media (min-width: 640px) {
            .footer-bottom-bar {
                flex-direction: row;
                text-align: left;
            }
        }
    </style>

    <div class="container mx-auto px-6">
        <div class="footer-grid">
            <!-- 1. Brand Section -->
            <div class="space-y-4">
                <a href="{{ route('home') }}" class="inline-block" aria-label="Marveit AI Home">
                    <img src="{{ asset('image/Marveit ABCD.svg') }}" alt="Marveit AI Logo"
                        class="h-10 w-auto brightness-0 invert" style="height: 40px; width: auto; display: block;">
                </a>
                <p class="text-xs sm:text-sm leading-relaxed text-gray-400 max-w-sm">
                    Human-in-the-loop data annotation for computer vision, NLP, audio and video AI. Accurate labels, secure data handling and clear delivery, built around your guidelines.
                </p>
                <!-- Social Links: LinkedIn · Facebook -->
                <div class="pt-2 flex items-center gap-4 sm:gap-5">
                    <a href="https://www.linkedin.com/company/marveit" target="_blank" rel="noopener noreferrer"
                        aria-label="LinkedIn"
                        class="w-10 h-10 p-2.5 rounded-full flex items-center justify-center text-gray-300 hover:text-white hover:bg-blue-600 transition-all border border-gray-700/80 shadow-sm"
                        style="background-color: rgba(255, 255, 255, 0.06);">
                        <i data-feather="linkedin" class="w-4 h-4"></i>
                    </a>
                    <a href="https://www.facebook.com/marveit" target="_blank" rel="noopener noreferrer"
                        aria-label="Facebook"
                        class="w-10 h-10 p-2.5 rounded-full flex items-center justify-center text-gray-300 hover:text-white hover:bg-blue-600 transition-all border border-gray-700/80 shadow-sm"
                        style="background-color: rgba(255, 255, 255, 0.06);">
                        <i data-feather="facebook" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- 2. Services -->
            <div>
                <h4 class="text-white font-bold text-sm tracking-wide mb-3 md:mb-4">Services</h4>
                <ul class="space-y-2 text-xs sm:text-sm flex flex-col">
                    <li><a href="{{ route('services.show', 'data-collection') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Data Collection</a></li>
                    <li><a href="{{ route('services.show', 'computer-vision') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Image Annotation</a></li>
                    <li><a href="{{ route('services.show', 'video-annotation') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Video Annotation</a></li>
                    <li><a href="{{ route('services.show', 'lidar-3d') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">LiDAR & 3D Annotation</a></li>
                    <li><a href="{{ route('services.show', 'nlp') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">NLP & Text Annotation</a></li>
                    <li><a href="{{ route('services.show', 'audio-annotation') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Audio Annotation & Transcription</a></li>
                </ul>
            </div>

            <!-- 3. Industries -->
            <div>
                <h4 class="text-white font-bold text-sm tracking-wide mb-3 md:mb-4">Industries</h4>
                <ul class="space-y-2 text-xs sm:text-sm flex flex-col">
                    <li><a href="{{ url('/#automotive') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Automotive</a></li>
                    <li><a href="{{ url('/#healthcare') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Healthcare</a></li>
                    <li><a href="{{ url('/#retail') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Retail & E-Commerce</a></li>
                    <li><a href="{{ url('/#agriculture') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Agriculture</a></li>
                    <li><a href="{{ url('/#voice-ai') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Voice AI</a></li>
                    <li><a href="{{ url('/#llm') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">LLM & Generative AI</a></li>
                </ul>
            </div>

            <!-- 4. Company -->
            <div>
                <h4 class="text-white font-bold text-sm tracking-wide mb-3 md:mb-4">Company</h4>
                <ul class="space-y-2 text-xs sm:text-sm flex flex-col">
                    <li><a href="{{ route('home') }}#about"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">About Us</a></li>
                    <li><a href="{{ route('team') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Team</a></li>
                    <li><a href="{{ route('portfolio') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Case Studies</a></li>
                    <li><a href="{{ route('resources.index') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Resources</a></li>
                    <li><a href="{{ route('contact') }}"
                            class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <!-- 5. Get in Touch -->
            <div class="space-y-4">
                <h4 class="text-white font-bold text-sm tracking-wide mb-3 md:mb-4">Get in Touch</h4>
                <p class="text-xs sm:text-sm text-gray-400 leading-relaxed">
                    Tell us about your dataset and model goals. A technical lead will reply within 24 hours.
                </p>
                <div class="flex flex-col gap-2.5 pt-1">
                    <a href="mailto:ebrahim@marveit.com"
                        class="flex items-center gap-2.5 text-gray-300 hover:text-blue-400 transition-colors text-xs sm:text-sm">
                        <i data-feather="mail" class="w-4 h-4 text-blue-400 flex-shrink-0"></i>
                        <span class="break-all">ebrahim@marveit.com</span>
                    </a>
                    <div class="flex items-start gap-2.5 text-gray-400 text-xs sm:text-sm leading-snug">
                        <i data-feather="globe" class="w-4 h-4 text-blue-400 flex-shrink-0 mt-0.5"></i>
                        <span>Mymensingh, Bangladesh | Serving clients worldwide</span>
                    </div>
                </div>
                <div class="pt-2">
                    <a href="https://wa.me/8801753499696?text=Hello%20Marveit%20AI%20Team!%20I%20would%20like%20to%20discuss%20a%20data%20annotation%20project."
                        target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 text-white text-xs font-semibold px-4 py-2.5 rounded-lg shadow-sm hover:shadow hover:-translate-y-0.5 transition hover:opacity-90"
                        style="background-color: #25D366; color: #ffffff;">
                        <i data-feather="message-circle" class="w-4 h-4"></i>
                        <span>WhatsApp Chat</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright Bar -->
        <div class="footer-bottom-bar text-xs text-gray-400">
            <p>&copy; 2026 Marveit AI. All rights reserved.</p>
            <div class="flex items-center gap-3 text-gray-400">
                <a href="{{ route('privacy-policy') }}" class="hover:text-white transition-colors">Privacy Policy</a>
                <span class="text-gray-600">|</span>
                <a href="{{ route('terms-of-service') }}" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>