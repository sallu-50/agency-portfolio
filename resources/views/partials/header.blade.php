<!-- Header Navigation -->
<header class="fixed top-0 left-0 w-full bg-white/90 backdrop-blur-md z-50 border-b border-gray-100 shadow-sm transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
        <a href="{{ route('home') }}" class="flex items-center transition-transform hover:opacity-90" aria-label="Marveit AI Home">
            <img src="{{ asset('image/Marveit ABCD.svg') }}" alt="Marveit AI Logo" class="h-10 w-auto">
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-8 text-sm items-center relative z-50">
            <!-- Services Dropdown Group -->
            <div class="group relative h-10 flex items-center">
                <a href="{{ route('services.index') }}"
                    class="font-medium flex items-center gap-1 py-3 px-2 rounded-lg transition-colors hover:bg-gray-50/50 {{ request()->routeIs('services.*') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' }}">
                    Services <i data-feather="chevron-down" class="w-4 h-4 transition-transform duration-300 group-hover:-rotate-180"></i>
                </a>

                <!-- Dropdown Container -->
                <div class="absolute top-full left-1/2 -translate-x-1/2 w-[600px] pt-4 hidden group-hover:block z-[100]">
                    <div class="bg-white rounded-2xl shadow-[0_20px_50px_-12px_rgba(0,0,0,0.25)] border border-gray-100 overflow-hidden ring-1 ring-black/5">
                        <div class="grid grid-cols-2">
                            <!-- Column 1 (Core Services) -->
                            <div class="p-6 bg-gray-50/80 space-y-4">
                                <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Core Services</h4>

                                <a href="{{ route('services.show', 'data-collection') }}"
                                    class="flex items-start gap-4 p-2 -mx-2 rounded-xl hover:bg-white hover:shadow-sm transition-all duration-200 group/item">
                                    <div class="mt-1 w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex flex-shrink-0 items-center justify-center">
                                        <i data-feather="database" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-gray-800 font-bold mb-0.5 text-sm group-hover/item:text-blue-600 transition-colors">Data Collection</div>
                                        <p class="text-xs text-gray-500">Diverse datasets tailored to needs.</p>
                                    </div>
                                </a>

                                <a href="{{ route('services.show', 'computer-vision') }}"
                                    class="flex items-start gap-4 p-2 -mx-2 rounded-xl hover:bg-white hover:shadow-sm transition-all duration-200 group/item">
                                    <div class="mt-1 w-8 h-8 rounded-lg bg-green-100 text-green-600 flex flex-shrink-0 items-center justify-center">
                                        <i data-feather="image" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-gray-800 font-bold mb-0.5 text-sm group-hover/item:text-green-600 transition-colors">Image & Vision</div>
                                        <p class="text-xs text-gray-500">Bounding boxes & segmentation.</p>
                                    </div>
                                </a>

                                <a href="{{ route('services.show', 'nlp') }}"
                                    class="flex items-start gap-4 p-2 -mx-2 rounded-xl hover:bg-white hover:shadow-sm transition-all duration-200 group/item">
                                    <div class="mt-1 w-8 h-8 rounded-lg bg-purple-100 text-purple-600 flex flex-shrink-0 items-center justify-center">
                                        <i data-feather="type" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-gray-800 font-bold mb-0.5 text-sm group-hover/item:text-purple-600 transition-colors">NLP & Text</div>
                                        <p class="text-xs text-gray-500">NER, sentiment & RLHF.</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Column 2 (Specialized) -->
                            <div class="p-6 bg-white space-y-4">
                                <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Specialized</h4>

                                <a href="{{ route('services.show', 'audio-annotation') }}"
                                    class="flex items-start gap-4 p-2 -mx-2 rounded-xl hover:bg-gray-50 transition-all duration-200 group/item">
                                    <div class="mt-1 w-8 h-8 rounded-lg bg-yellow-100 text-yellow-600 flex flex-shrink-0 items-center justify-center">
                                        <i data-feather="mic" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-gray-800 font-bold mb-0.5 text-sm group-hover/item:text-yellow-600 transition-colors">Audio Transcription</div>
                                        <p class="text-xs text-gray-500">Speech-to-text & acoustic tags.</p>
                                    </div>
                                </a>

                                <a href="{{ route('services.show', 'video-annotation') }}"
                                    class="flex items-start gap-4 p-2 -mx-2 rounded-xl hover:bg-gray-50 transition-all duration-200 group/item">
                                    <div class="mt-1 w-8 h-8 rounded-lg bg-red-100 text-red-600 flex flex-shrink-0 items-center justify-center">
                                        <i data-feather="video" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-gray-800 font-bold mb-0.5 text-sm group-hover/item:text-red-600 transition-colors">Video Analysis</div>
                                        <p class="text-xs text-gray-500">Object tracking & activities.</p>
                                    </div>
                                </a>

                                <a href="{{ route('services.show', 'computer-vision') }}"
                                    class="flex items-start gap-4 p-2 -mx-2 rounded-xl hover:bg-gray-50 transition-all duration-200 group/item">
                                    <div class="mt-1 w-8 h-8 rounded-lg bg-indigo-100 text-indigo-600 flex flex-shrink-0 items-center justify-center">
                                        <i data-feather="box" class="w-4 h-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-gray-800 font-bold mb-0.5 text-sm group-hover/item:text-indigo-600 transition-colors">LiDAR & 3D</div>
                                        <p class="text-xs text-gray-500">Point clouds for autonomy.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-3 text-center border-t border-gray-100/50">
                            <a href="{{ route('services.index') }}"
                                class="text-blue-600 text-xs font-bold hover:underline inline-flex items-center gap-1 group/footer">
                                View All Services <i data-feather="arrow-right" class="w-3 h-3 transition-transform group-hover/footer:translate-x-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Industries Dropdown Group -->
            <div class="group relative h-10 flex items-center">
                <a href="{{ route('home') }}#industries"
                    class="text-gray-700 hover:text-blue-600 font-medium flex items-center gap-1 py-3 px-2 rounded-lg transition-colors hover:bg-gray-50/50">
                    Industries <i data-feather="chevron-down" class="w-4 h-4 transition-transform duration-300 group-hover:-rotate-180"></i>
                </a>

                <div class="absolute top-full left-1/2 -translate-x-1/2 w-[480px] pt-4 hidden group-hover:block z-[100]">
                    <div class="bg-white rounded-2xl shadow-[0_20px_50px_-12px_rgba(0,0,0,0.25)] border border-gray-100 p-6 ring-1 ring-black/5">
                        <div class="grid grid-cols-2 gap-4">
                            <a href="{{ route('home') }}#industries"
                                class="p-3 rounded-xl hover:bg-blue-50 transition-all duration-200 group/item border border-transparent hover:border-blue-100">
                                <div class="flex items-center gap-3 mb-1">
                                    <i data-feather="truck" class="text-blue-500 w-4 h-4 transition-transform group-hover/item:scale-110"></i>
                                    <span class="font-bold text-gray-800 text-sm group-hover/item:text-blue-700">Automotive</span>
                                </div>
                                <p class="text-xs text-gray-500">Autonomous driving data.</p>
                            </a>
                            <a href="{{ route('home') }}#industries"
                                class="p-3 rounded-xl hover:bg-green-50 transition-all duration-200 group/item border border-transparent hover:border-green-100">
                                <div class="flex items-center gap-3 mb-1">
                                    <i data-feather="activity" class="text-green-500 w-4 h-4 transition-transform group-hover/item:scale-110"></i>
                                    <span class="font-bold text-gray-800 text-sm group-hover/item:text-green-700">Healthcare</span>
                                </div>
                                <p class="text-xs text-gray-500">Medical AI diagnostics.</p>
                            </a>
                            <a href="{{ route('home') }}#industries"
                                class="p-3 rounded-xl hover:bg-purple-50 transition-all duration-200 group/item border border-transparent hover:border-purple-100">
                                <div class="flex items-center gap-3 mb-1">
                                    <i data-feather="shopping-bag" class="text-purple-500 w-4 h-4 transition-transform group-hover/item:scale-110"></i>
                                    <span class="font-bold text-gray-800 text-sm group-hover/item:text-purple-700">Retail</span>
                                </div>
                                <p class="text-xs text-gray-500">Visual search & inventory.</p>
                            </a>
                            <a href="{{ route('home') }}#industries"
                                class="p-3 rounded-xl hover:bg-yellow-50 transition-all duration-200 group/item border border-transparent hover:border-yellow-100">
                                <div class="flex items-center gap-3 mb-1">
                                    <i data-feather="sun" class="text-yellow-500 w-4 h-4 transition-transform group-hover/item:scale-110"></i>
                                    <span class="font-bold text-gray-800 text-sm group-hover/item:text-yellow-700">Agriculture</span>
                                </div>
                                <p class="text-xs text-gray-500">Smart farming solutions.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('home') }}#about" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">About Us</a>
            <a href="{{ route('team') }}" class="{{ request()->routeIs('team') ? 'text-blue-600 font-bold border-b-2 border-blue-600 pb-1' : 'text-gray-700 hover:text-blue-600 font-medium' }} transition-colors">Our Team</a>
        </nav>

        <a href="{{ route('contact') }}"
            class="hidden md:inline-flex items-center gap-1.5 bg-gradient-to-r from-blue-600 to-blue-500 text-white px-5 py-2.5 rounded-lg shadow-md hover:shadow-xl hover:-translate-y-0.5 transition-all font-medium text-sm">
            <span>Let's Contact</span>
            <i data-feather="arrow-right" class="w-4 h-4"></i>
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button id="mobile-menu-button" class="md:hidden text-blue-700 p-2 rounded-lg hover:bg-blue-50 focus:outline-none" aria-label="Toggle navigation menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Drawer -->
    <nav id="mobile-menu" class="hidden md:hidden bg-white shadow-xl absolute top-full left-0 w-full z-40 border-t border-gray-100">
        <a href="{{ route('services.index') }}"
            class="block px-6 py-4 border-b border-gray-100 hover:bg-blue-50 text-gray-700 font-medium transition-colors {{ request()->routeIs('services.*') ? 'bg-blue-50/70 text-blue-600 font-semibold' : '' }}">
            Services
        </a>
        <a href="{{ route('home') }}#industries"
            class="block px-6 py-4 border-b border-gray-100 hover:bg-blue-50 text-gray-700 font-medium transition-colors">
            Industries
        </a>
        <a href="{{ route('home') }}#about"
            class="block px-6 py-4 border-b border-gray-100 hover:bg-blue-50 text-gray-700 font-medium transition-colors">
            About Us
        </a>
        <a href="{{ route('team') }}"
            class="block px-6 py-4 border-b border-gray-100 hover:bg-blue-50 text-gray-700 font-medium transition-colors {{ request()->routeIs('team') ? 'bg-blue-50/70 text-blue-600 font-semibold' : '' }}">
            Our Team
        </a>
        <div class="px-6 py-4">
            <a href="{{ route('contact') }}"
                class="block w-full bg-gradient-to-r from-blue-600 to-blue-500 text-white text-center py-3 rounded-lg shadow-md hover:shadow-lg transition font-medium">
                Let's Contact
            </a>
        </div>
    </nav>
</header>
