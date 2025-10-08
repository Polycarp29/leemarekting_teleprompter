<footer class="bg-gray-950/60 text-white py-12 px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

        <!-- Company Info -->
        <div>
            <h2 class="text-2xl font-bold mb-4">Leemarketing Teleprompter</h2>
            <p class="text-gray-100 text-sm leading-relaxed mb-6">
                A studio-grade teleprompter experience on iOS, Android, Mac, and Web —
                all synced in the cloud for effortless recording and script management.
            </p>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-facebook text-xl"></i></a>
                <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-x-twitter text-xl"></i></a>
                <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-youtube text-xl"></i></a>
                <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-instagram text-xl"></i></a>
            </div>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
            <ul class="space-y-2 text-gray-100">
                <li><a href="#" class="hover:text-yellow-300 transition">Home</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition">About</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition">Pricing</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition">FAQs</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition">Contact</a></li>
            </ul>
        </div>

        <!-- Newsletter -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Subscribe</h3>
            <p class="text-gray-100 text-sm mb-4">
                Join our mailing list for updates, features, and exclusive offers.
            </p>
            <form class="flex flex-col sm:flex-row items-center gap-2">
                <input type="email" placeholder="Your email"
                    class="w-full sm:w-auto flex-1 px-4 py-2 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-yellow-300" />
                <button type="submit"
                    class="bg-yellow-400 text-gray-900 px-5 py-2 rounded-lg font-semibold hover:bg-yellow-300 transition">
                    Subscribe
                </button>
            </form>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-red-400 mt-10 pt-6 text-center text-sm text-gray-100">
        <p>&copy; <span id="year"></span> Leemarketing Teleprompter. All rights reserved.</p>
    </div>
</footer>

<script>
    // Auto-update year
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
