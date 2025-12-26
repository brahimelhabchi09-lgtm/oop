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
                    <div class="md:col-span-1">
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <div class="flex flex-col items-center">
                                <div class="w-32 h-32 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white text-5xl font-bold mb-4">
                                    JD
                                </div>
                                <h2 class="text-2xl font-bold">John Doe</h2>
                                <p class="text-gray-600 mb-4">Library Member</p>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-2">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
                                </div>
                                <p class="text-sm text-gray-600">Reading progress: 75%</p>
                            </div>
                            <div class="mt-6 space-y-4">
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-envelope text-blue-500 mr-3"></i>
                                    <span>john.doe@email.com</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-calendar text-blue-500 mr-3"></i>
                                    <span>Member since: Jan 2023</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-book text-blue-500 mr-3"></i>
                                    <span>Books read: 24</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="md:col-span-2 space-y-8">
                        <!-- Currently Reading -->
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-xl font-bold mb-4">Currently Reading</h3>
                            <div class="flex items-center space-x-4 p-4 border border-gray-200 rounded-lg">
                                <div class="w-16 h-20 bg-gradient-to-r from-blue-300 to-blue-500 rounded"></div>
                                <div class="flex-grow">
                                    <h4 class="font-bold">The Midnight Library</h4>
                                    <p class="text-gray-600 text-sm">Matt Haig</p>
                                    <div class="flex items-center mt-2">
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 60%"></div>
                                        </div>
                                        <span class="ml-3 text-sm text-gray-600">60%</span>
                                    </div>
                                </div>
                                <button class="bg-blue-100 text-blue-600 px-4 py-2 rounded-lg font-medium hover:bg-blue-200 transition duration-300">
                                    Continue
                                </button>
                            </div>
                        </div>

                        <!-- Borrowed Books -->
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-xl font-bold">Borrowed Books</h3>
                                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">3 books</span>
                            </div>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center p-3 border border-gray-200 rounded-lg">
                                    <div>
                                        <h4 class="font-medium">Project Hail Mary</h4>
                                        <p class="text-gray-600 text-sm">Due: 2024-02-15</p>
                                    </div>
                                    <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">5 days left</span>
                                </div>
                                <div class="flex justify-between items-center p-3 border border-gray-200 rounded-lg">
                                    <div>
                                        <h4 class="font-medium">Klara and the Sun</h4>
                                        <p class="text-gray-600 text-sm">Due: 2024-02-20</p>
                                    </div>
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">10 days left</span>
                                </div>
                                <div class="flex justify-between items-center p-3 border border-gray-200 rounded-lg">
                                    <div>
                                        <h4 class="font-medium">The Four Winds</h4>
                                        <p class="text-gray-600 text-sm">Due: 2024-02-10</p>
                                    </div>
                                    <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">Tomorrow</span>
                                </div>
                            </div>
                        </div>

                        <!-- Reading History -->
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-xl font-bold mb-4">Reading History</h3>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                <div class="h-32 bg-gradient-to-r from-blue-100 to-blue-200 rounded-lg flex items-center justify-center">
                                    <div class="text-center">
                                        <i class="fas fa-book text-blue-600 text-2xl"></i>
                                        <p class="text-sm mt-2">Jan 2024</p>
                                    </div>
                                </div>
                                <div class="h-32 bg-gradient-to-r from-purple-100 to-purple-200 rounded-lg flex items-center justify-center">
                                    <div class="text-center">
                                        <i class="fas fa-book text-purple-600 text-2xl"></i>
                                        <p class="text-sm mt-2">Dec 2023</p>
                                    </div>
                                </div>
                                <div class="h-32 bg-gradient-to-r from-green-100 to-green-200 rounded-lg flex items-center justify-center">
                                    <div class="text-center">
                                        <i class="fas fa-book text-green-600 text-2xl"></i>
                                        <p class="text-sm mt-2">Nov 2023</p>
                                    </div>
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
    </body>
</html>