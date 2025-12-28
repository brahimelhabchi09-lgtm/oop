<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="../style/output.css">
</head>
<body class="bg-gray-50"></body>
<section id="books" class="page">
            <div class="container mx-auto px-4 py-12">
                <div class="flex justify-between items-center mb-10">
                    <h1 class="text-3xl font-bold">Browse Books</h1>
                    <div class="flex space-x-4">
                        <div class="relative">
                            <input type="text" placeholder="Search books..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                        <select class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option>All Genres</option>
                            <option>Fiction</option>
                            <option>Non-Fiction</option>
                            <option>Science Fiction</option>
                            <option>Mystery</option>
                        </select>
                    </div>
                </div>

                <!-- Book Grid -->
                <div class="grid md:grid-cols-4 gap-6">
                    <!-- Book 1 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 cursor-pointer" onclick="showBook('book1')">
                        <div class="h-64 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                        <div class="p-5">
                            <h3 class="font-bold text-xl mb-2">The Midnight Library</h3>
                            <p class="text-gray-600 mb-3">Matt Haig</p>
                            <p class="text-gray-700 mb-4 line-clamp-2">A novel about a library that contains books that let you experience the lives you could have lived if you had made different choices.</p>
                            <div class="flex justify-between items-center">
                                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Fiction</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-500"></i>
                                    <span class="ml-1 font-medium">4.5</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Book 2 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 cursor-pointer" onclick="showBook('book2')">
                        <div class="h-64 bg-gradient-to-r from-purple-400 to-purple-600"></div>
                        <div class="p-5">
                            <h3 class="font-bold text-xl mb-2">Project Hail Mary</h3>
                            <p class="text-gray-600 mb-3">Andy Weir</p>
                            <p class="text-gray-700 mb-4 line-clamp-2">A lone astronaut must save the earth from disaster in this high-stakes sci-fi thriller from the author of The Martian.</p>
                            <div class="flex justify-between items-center">
                                <span class="bg-purple-100 text-purple-800 text-sm font-medium px-3 py-1 rounded-full">Sci-Fi</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-500"></i>
                                    <span class="ml-1 font-medium">4.7</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Book 3 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 cursor-pointer" onclick="showBook('book3')">
                        <div class="h-64 bg-gradient-to-r from-green-400 to-green-600"></div>
                        <div class="p-5">
                            <h3 class="font-bold text-xl mb-2">Klara and the Sun</h3>
                            <p class="text-gray-600 mb-3">Kazuo Ishiguro</p>
                            <p class="text-gray-700 mb-4 line-clamp-2">From the Nobel laureate author comes the story of Klara, an Artificial Friend with outstanding observational qualities.</p>
                            <div class="flex justify-between items-center">
                                <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">Literary</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-500"></i>
                                    <span class="ml-1 font-medium">4.3</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Book 4 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 cursor-pointer" onclick="showBook('book4')">
                        <div class="h-64 bg-gradient-to-r from-red-400 to-red-600"></div>
                        <div class="p-5">
                            <h3 class="font-bold text-xl mb-2">The Four Winds</h3>
                            <p class="text-gray-600 mb-3">Kristin Hannah</p>
                            <p class="text-gray-700 mb-4 line-clamp-2">An epic novel of love and heroism and hope, set against the backdrop of one of America's most defining eras—the Great Depression.</p>
                            <div class="flex justify-between items-center">
                                <span class="bg-red-100 text-red-800 text-sm font-medium px-3 py-1 rounded-full">Historical</span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-500"></i>
                                    <span class="ml-1 font-medium">4.6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <nav class="inline-flex rounded-md shadow">
                        <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-700 hover:bg-gray-50 rounded-l-lg">Previous</a>
                        <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-blue-50 text-blue-600 hover:bg-blue-100">1</a>
                        <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">2</a>
                        <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">3</a>
                        <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-700 hover:bg-gray-50 rounded-r-lg">Next</a>
                    </nav>
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
</body>
</html>
