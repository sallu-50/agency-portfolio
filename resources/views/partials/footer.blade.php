<!-- Footer -->
<footer id="contact-footer" class="bg-gray-900 text-gray-300 border-t border-gray-700/60 pt-5 md:pt-5 pb-8">
    <style>
        #contact-footer {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        @media (min-width: 768px) {
            #contact-footer {
                padding-top: 3rem;
                padding-bottom: 2rem;
            }
        }

        @media (max-width: 767px) {
            .footer-mobile-nav {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 1.5rem;
            }
        }

        @media (min-width: 768px) {
            .footer-mobile-nav {
                display: contents;
            }
        }
    </style>

    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-12 mb-12">
            <!-- 1. Brand Section -->
            <div>
                <div class="mb-5">
                    <a href="{{ route('home') }}" class="inline-block" aria-label="Marveit AI Home">
                        <img src="{{ asset('image/Marveit ABCD.svg') }}" alt="Marveit AI Logo"
                            class="h-10 w-auto brightness-0 invert" style="height: 40px; width: auto; display: block;">
                    </a>
                </div>
                <p class="text-sm leading-relaxed text-gray-400 mb-6 max-w-sm">
                    Enterprise human-in-the-loop AI data annotation and training solutions built for precision, speed,
                    and strict security compliance.
                </p>
                <!-- Social Media Links -->
                <div class="flex items-center gap-3">
                    <a href="https://www.linkedin.com/company/marveit" target="_blank" rel="noopener noreferrer"
                        aria-label="LinkedIn"
                        class="w-10 h-10 rounded-full flex items-center justify-center text-gray-300 hover:text-white hover:bg-blue-600 transition-all border border-gray-750"
                        style="background-color: rgba(255, 255, 255, 0.08);">
                        <i data-feather="linkedin" class="w-4 h-4"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter"
                        class="w-10 h-10 rounded-full flex items-center justify-center text-gray-300 hover:text-white hover:bg-blue-600 transition-all border border-gray-750"
                        style="background-color: rgba(255, 255, 255, 0.08);">
                        <i data-feather="twitter" class="w-4 h-4"></i>
                    </a>
                    <a href="https://facebook.com/abdullah.al.salman.892142" target="_blank" rel="noopener noreferrer"
                        aria-label="Facebook"
                        class="w-10 h-10 rounded-full flex items-center justify-center text-gray-300 hover:text-white hover:bg-blue-600 transition-all border border-gray-750"
                        style="background-color: rgba(255, 255, 255, 0.08);">
                        <i data-feather="facebook" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- 2 & 3: Mobile Nav Wrapper (Side-by-Side 2 columns on Mobile!) -->
            <div class="footer-mobile-nav">
                <!-- 2. Core Services -->
                <div>
                    <h4 class="text-white font-bold text-sm tracking-wide mb-3 md:mb-4">Core Services</h4>
                    <ul class="space-y-2 text-xs sm:text-sm flex flex-col">
                        <li><a href="{{ route('services.show', 'data-collection') }}"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Data
                                Collection</a></li>
                        <li><a href="{{ route('services.show', 'computer-vision') }}"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Computer
                                Vision</a></li>
                        <li><a href="{{ route('services.show', 'nlp') }}"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">NLP &
                                Text</a></li>
                        <li><a href="{{ route('services.show', 'audio-annotation') }}"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Audio
                                Transcription</a></li>
                        <li><a href="{{ route('services.show', 'video-annotation') }}"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Video
                                Annotation</a></li>
                    </ul>
                </div>

                <!-- 3. Company & Navigation -->
                <div>
                    <h4 class="text-white font-bold text-sm tracking-wide mb-3 md:mb-4">Company</h4>
                    <ul class="space-y-2 text-xs sm:text-sm flex flex-col">
                        <li><a href="{{ route('home') }}#about"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">About
                                Us</a></li>
                        <li><a href="{{ route('team') }}"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Our
                                Team</a></li>
                        <li><a href="{{ route('portfolio') }}"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors font-medium">Portfolio</a>
                        </li>
                        <li><a href="{{ route('home') }}#industries"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Industries</a>
                        </li>
                        <li><a href="{{ route('contact') }}"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Contact
                                Us</a></li>
                        <li><a href="{{ route('contact') }}"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Privacy
                                Policy</a></li>
                        <li><a href="{{ route('contact') }}"
                                class="text-gray-300 hover:text-blue-400 py-0.5 inline-block transition-colors">Terms of
                                Service</a></li>
                    </ul>
                </div>
            </div>

            <!-- 4. Contact & Quick Connect -->
            <div class="space-y-4">
                <h4 class="text-white font-bold text-sm tracking-wide mb-3 md:mb-4">Get in Touch</h4>
                <p class="text-xs text-gray-400 leading-relaxed">
                    Ready to accelerate your model development? Connect with our senior technical architects.
                </p>
                <div class="flex flex-col gap-2.5">
                    <a href="mailto:ebrahim@marveit.com"
                        class="flex items-center gap-2.5 text-gray-300 hover:text-blue-400 transition-colors text-xs sm:text-sm">
                        <i data-feather="mail" class="w-4 h-4 text-blue-400 flex-shrink-0"></i>
                        <span class="break-all">ebrahim@marveit.com</span>
                    </a>
                    <div class="flex items-center gap-2.5 text-gray-400 text-xs">
                        <i data-feather="globe" class="w-4 h-4 text-blue-400 flex-shrink-0"></i>
                        <span>Global Remote Operations</span>
                    </div>
                </div>
                <div class="pt-1">
                    <a href="https://wa.me/8801753499696?text=Hello%20Marveit%20AI%20Team!%20I%20would%20like%20to%20discuss%20a%20data%20annotation%20project."
                        target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 text-white text-xs font-semibold px-4 py-2.5 rounded-lg shadow-sm transition hover:opacity-90"
                        style="background-color: #25D366; color: #ffffff;">
                        <i data-feather="message-circle" class="w-4 h-4"></i>
                        <span>WhatsApp Chat</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright Bar -->
        <div class="pt-6 md:pt-8 border-t border-gray-800 text-center text-xs text-gray-400">
            <p>&copy; {{ date('Y') }} Marveit AI. All rights reserved.</p>
        </div>
    </div>
</footer>