
    <main id="content" class="min-h-screen">
        <!-- Home Page (Default) -->
        <section id="home" class="page active">
            <!-- Hero Section -->
            <div class="relative bg-gradient-to-r from-blue-600 to-purple-700 text-white py-20">
                <div class="container mx-auto px-4">
                    <div class="max-w-3xl">
                        <h1 class="text-5xl font-bold mb-6">Welcome to Modern Library</h1>
                        <p class="text-xl mb-8">Discover thousands of books, from timeless classics to contemporary bestsellers. Your next great read is waiting for you.</p>
                        <div class="flex space-x-4">
                            <a href="#books" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Browse Books</a>
                            <a href="#register" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 right-0 opacity-10">
                    <i class="fas fa-book-open text-9xl"></i>
                </div>
            </div>

            <!-- Features -->
            <div class="py-16 bg-white">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12">Why Choose Our Library</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center p-6 rounded-lg bg-gray-50 hover:shadow-lg transition duration-300">
                            <i class="fas fa-book-reader text-4xl text-blue-600 mb-4"></i>
                            <h3 class="text-xl font-semibold mb-3">Vast Collection</h3>
                            <p class="text-gray-600">Access over 50,000 books across all genres and subjects.</p>
                        </div>
                        <div class="text-center p-6 rounded-lg bg-gray-50 hover:shadow-lg transition duration-300">
                            <i class="fas fa-laptop text-4xl text-blue-600 mb-4"></i>
                            <h3 class="text-xl font-semibold mb-3">Digital Access</h3>
                            <p class="text-gray-600">Read e-books and audiobooks from anywhere, anytime.</p>
                        </div>
                        <div class="text-center p-6 rounded-lg bg-gray-50 hover:shadow-lg transition duration-300">
                            <i class="fas fa-users text-4xl text-blue-600 mb-4"></i>
                            <h3 class="text-xl font-semibold mb-3">Community Events</h3>
                            <p class="text-gray-600">Join book clubs, author talks, and reading challenges.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Arrivals -->
            <div class="py-16 bg-gray-50">
                <div class="container mx-auto px-4">
                    <div class="flex justify-between items-center mb-10">
                        <h2 class="text-3xl font-bold">New Arrivals</h2>
                        <a href="#books" class="text-blue-600 hover:text-blue-800 font-medium">View All <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                    <div class="grid md:grid-cols-4 gap-6">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                            <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-1">The Midnight Library</h3>
                                <p class="text-gray-600 text-sm mb-2">Matt Haig</p>
                                <div class="flex justify-between items-center">
                                    <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Fiction</span>
                                    <span class="text-yellow-500"><i class="fas fa-star"></i> 4.5</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                            <div class="h-48 bg-gradient-to-r from-purple-400 to-purple-600"></div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-1">Project Hail Mary</h3>
                                <p class="text-gray-600 text-sm mb-2">Andy Weir</p>
                                <div class="flex justify-between items-center">
                                    <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">Sci-Fi</span>
                                    <span class="text-yellow-500"><i class="fas fa-star"></i> 4.7</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                            <div class="h-48 bg-gradient-to-r from-green-400 to-green-600"></div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-1">Klara and the Sun</h3>
                                <p class="text-gray-600 text-sm mb-2">Kazuo Ishiguro</p>
                                <div class="flex justify-between items-center">
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Literary</span>
                                    <span class="text-yellow-500"><i class="fas fa-star"></i> 4.3</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                            <div class="h-48 bg-gradient-to-r from-red-400 to-red-600"></div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-1">The Four Winds</h3>
                                <p class="text-gray-600 text-sm mb-2">Kristin Hannah</p>
                                <div class="flex justify-between items-center">
                                    <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">Historical</span>
                                    <span class="text-yellow-500"><i class="fas fa-star"></i> 4.6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 
    <script>
        // Auto-hide mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuButton = document.getElementById('mobile-menu-button');
            
            if (!mobileMenu.contains(e.target) && !menuButton.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>