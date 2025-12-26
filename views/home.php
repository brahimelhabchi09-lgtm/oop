<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="#home" class="flex items-center space-x-2">
                    <i class="fas fa-book text-blue-600 text-2xl"></i>
                    <span class="text-xl font-bold text-gray-800">Modern Library</span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                    <a href="#books" class="text-gray-700 hover:text-blue-600 font-medium">Books</a>
                    <a href="#profile" class="text-gray-700 hover:text-blue-600 font-medium">Profile</a>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-4">
                    <a href="#login" class="text-gray-700 hover:text-blue-600 font-medium">Login</a>
                    <a href="#register" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Register</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden py-4 border-t">
                <div class="flex flex-col space-y-4">
                    <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                    <a href="#books" class="text-gray-700 hover:text-blue-600 font-medium">Books</a>
                    <a href="#profile" class="text-gray-700 hover:text-blue-600 font-medium">Profile</a>
                    <div class="pt-4 border-t">
                        <a href="#login" class="block text-gray-700 hover:text-blue-600 font-medium mb-2">Login</a>
                        <a href="#register" class="block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 text-center">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
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

 <footer class="bg-gray-900 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- About -->
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-book text-blue-400 text-2xl mr-2"></i>
                        <span class="text-xl font-bold">Modern Library</span>
                    </div>
                    <p class="text-gray-400">Connecting readers with knowledge and stories since 2020. Your gateway to endless learning and imagination.</p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="#books" class="text-gray-400 hover:text-white transition duration-300">Books</a></li>
                        <li><a href="#profile" class="text-gray-400 hover:text-white transition duration-300">My Profile</a></li>
                        <li><a href="#login" class="text-gray-400 hover:text-white transition duration-300">Login</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt text-blue-400 mr-3"></i>
                            <span>123 Library St, Bookville</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-phone text-blue-400 mr-3"></i>
                            <span>(123) 456-7890</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope text-blue-400 mr-3"></i>
                            <span>info@modernlibrary.com</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Stay Updated</h3>
                    <p class="text-gray-400 mb-4">Subscribe to our newsletter for new arrivals and events.</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email" class="flex-grow px-4 py-2 rounded-l-lg text-gray-900">
                        <button class="bg-blue-600 px-4 py-2 rounded-r-lg hover:bg-blue-700 transition duration-300">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Bottom -->
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <div class="flex justify-center space-x-6 mb-4">
                    <a href="#" class="hover:text-white transition duration-300"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-white transition duration-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-white transition duration-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-white transition duration-300"><i class="fab fa-goodreads"></i></a>
                </div>
                <p>&copy; 2024 Modern Library. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script>
        // Page Navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href').substring(1);
                const pages = document.querySelectorAll('.page');
                const targetPage = document.getElementById(targetId);
                
                if (targetPage) {
                    pages.forEach(page => {
                        page.classList.remove('active');
                        page.classList.add('hidden');
                    });
                    
                    targetPage.classList.remove('hidden');
                    targetPage.classList.add('active');
                    
                    // Close mobile menu if open
                    document.getElementById('mobile-menu').classList.add('hidden');
                } else if (targetId === 'book1' || targetId === 'book2' || targetId === 'book3' || targetId === 'book4') {
                    // Handle book detail pages
                    showBook(targetId);
                } else {
                    // Handle 404 for unknown pages
                    pages.forEach(page => {
                        page.classList.remove('active');
                        page.classList.add('hidden');
                    });
                    document.getElementById('404').classList.remove('hidden');
                    document.getElementById('404').classList.add('active');
                }
            });
        });

        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Book Detail Functions
        function showBook(bookId) {
            const pages = document.querySelectorAll('.page');
            pages.forEach(page => {
                page.classList.remove('active');
                page.classList.add('hidden');
            });
            
            // Set book details based on bookId
            const bookDetail = document.getElementById('book-detail');
            bookDetail.classList.remove('hidden');
            bookDetail.classList.add('active');
            
            // In a real app, you would fetch book details from a database
            // For demo, we'll just show the book title
            if (bookId === 'book1') {
                document.getElementById('book-title').textContent = 'The Midnight Library';
                document.getElementById('book-author').textContent = 'By Matt Haig';
                document.getElementById('book-description').textContent = 'Between life and death there is a library, and within that library, the shelves go on forever. Every book provides a chance to try another life you could have lived. To see how things would be if you had made other choices... Would you have done anything different, if you had the chance to undo your regrets?';
            } else if (bookId === 'book2') {
                document.getElementById('book-title').textContent = 'Project Hail Mary';
                document.getElementById('book-author').textContent = 'By Andy Weir';
                document.getElementById('book-description').textContent = 'A lone astronaut must save the earth from disaster in this high-stakes sci-fi thriller from the author of The Martian.';
            }
        }

        function hideBook() {
            const bookDetail = document.getElementById('book-detail');
            bookDetail.classList.remove('active');
            bookDetail.classList.add('hidden');
            
            const booksPage = document.getElementById('books');
            booksPage.classList.remove('hidden');
            booksPage.classList.add('active');
        }

        // Form Submission
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Form submitted! In a real application, this would connect to a backend server.');
            });
        });

        // Auto-hide mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuButton = document.getElementById('mobile-menu-button');
            
            if (!mobileMenu.contains(e.target) && !menuButton.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>