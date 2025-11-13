<nav class="bg-white/90 backdrop-blur-md shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-extrabold text-gray-800">
            <a href="https://leemarketing.io" class="flex items-center space-x-2">
                <img src="{{ asset('assets/leemarketing.png') }}" alt="Logo" class="w-full h-15">
            </a>
        </div>

        <!-- Desktop Navigation -->
        <ul class="hidden md:flex space-x-8 text-gray-700 font-medium">
            <li>
                <a href="{{ route('home.page') }}"
                    class="{{ request()->routeIs('home.page') ? 'text-red-600 font-semibold' : 'hover:text-red-600 transition-colors duration-300' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('about.page') }}"
                    class="{{ request()->routeIs('about.page') ? 'text-red-600 font-semibold' : 'hover:text-red-600 transition-colors duration-300' }}">
                    About
                </a>
            </li>
            <li>
                <a href="#"
                    class="{{ request()->is('faqs') ? 'text-red-600 font-semibold' : 'hover:text-red-600 transition-colors duration-300' }}">
                    FAQs
                </a>
            </li>
        </ul>


        <!-- CTA Button -->
        <div class="hidden md:flex">
            <button
                class="flex items-center gap-2 px-6 py-2 bg-red-600 text-white font-semibold rounded-md hover:bg-red-700 transition-all duration-300 shadow-sm">
                <!-- Play Store Icon -->
                <i class="fa-brands fa-google-play text-white"></i>
                <span>Download</span>
            </button>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-btn" class="text-gray-700 focus:outline-none">
                <svg id="menu-open-icon" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="menu-close-icon" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
        <ul class="flex flex-col items-center space-y-4 py-6 text-gray-700 font-medium">
            <li><a href="#" class="hover:text-red-600 transition-colors duration-300">Home</a></li>
            <li><a href="#" class="hover:text-red-600 transition-colors duration-300">About</a></li>
            <li><a href="#" class="hover:text-red-600 transition-colors duration-300">Pricing</a></li>
            <li><a href="#" class="hover:text-red-600 transition-colors duration-300">FAQs</a></li>
            <li>
                <button
                    class="flex items-center gap-2 mt-3 px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-all duration-300 shadow-sm">
                    <!-- Play Store Icon -->
                    <i class="fa-brands fa-google-play text-white"></i>
                    <span>Download</span>
                </button>
            </li>
        </ul>
    </div>
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOpenIcon = document.getElementById('menu-open-icon');
        const menuCloseIcon = document.getElementById('menu-close-icon');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuOpenIcon.classList.toggle('hidden');
            menuCloseIcon.classList.toggle('hidden');
        });
    </script>

</nav>
