<footer class="bg-gray-900 text-white py-16 px-6">
    <div class="max-w-7xl mx-auto">
        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            
            <!-- Company Info -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-yellow-400 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white">
                        Leemarketing Teleprompter
                    </h2>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-6 max-w-md">
                    Studio-grade teleprompter experience across iOS, Android, Mac, and Web. 
                    Cloud-synced for seamless recording and script management wherever you create.
                </p>
                <div class="flex space-x-3">
                    <a href="#" class="w-11 h-11 flex items-center justify-center rounded-lg bg-gray-800 hover:bg-yellow-400 text-gray-300 hover:text-gray-900 transition-all duration-300">
                        <i class="fab fa-facebook text-lg"></i>
                    </a>
                    <a href="#" class="w-11 h-11 flex items-center justify-center rounded-lg bg-gray-800 hover:bg-yellow-400 text-gray-300 hover:text-gray-900 transition-all duration-300">
                        <i class="fab fa-x-twitter text-lg"></i>
                    </a>
                    <a href="#" class="w-11 h-11 flex items-center justify-center rounded-lg bg-gray-800 hover:bg-yellow-400 text-gray-300 hover:text-gray-900 transition-all duration-300">
                        <i class="fab fa-youtube text-lg"></i>
                    </a>
                    <a href="#" class="w-11 h-11 flex items-center justify-center rounded-lg bg-gray-800 hover:bg-yellow-400 text-gray-300 hover:text-gray-900 transition-all duration-300">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-6 text-yellow-400">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors duration-200">Home</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors duration-200">About Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors duration-200">Pricing</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors duration-200">Features</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors duration-200">Support</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-lg font-semibold mb-6 text-yellow-400">Stay Updated</h3>
                <p class="text-gray-400 text-sm mb-4">
                    Get the latest features, tips, and exclusive offers delivered to your inbox.
                </p>
                <div class="space-y-3">
                    <input 
                        type="email" 
                        placeholder="Enter your email"
                        class="w-full px-4 py-3 rounded-lg bg-gray-800 text-white placeholder-gray-500 border border-gray-700 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-colors"
                    />
                    <button 
                        type="submit"
                        class="w-full bg-yellow-400 hover:bg-yellow-500 text-gray-900 px-5 py-3 rounded-lg font-semibold transition-colors duration-200"
                    >
                        Subscribe Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-800 mb-8"></div>

        <!-- Bottom Bar -->
        <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500 gap-4">
            <p>&copy; <span id="year"></span> Leemarketing Teleprompter. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-yellow-400 transition-colors duration-200">Privacy Policy</a>
                <a href="#" class="hover:text-yellow-400 transition-colors duration-200">Terms of Service</a>
                <a href="#" class="hover:text-yellow-400 transition-colors duration-200">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>

<script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>