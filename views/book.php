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
<body class="bg-gray-50"></body>
<section id="book-detail" class="page hidden">
            <div class="container mx-auto px-4 py-12">
                <button onclick="hideBook()" class="mb-6 text-blue-600 hover:text-blue-800 font-medium">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Books
                </button>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <!-- Book Cover -->
                        <div class="md:w-1/3 p-8">
                            <div class="h-96 bg-gradient-to-r from-blue-400 to-blue-600 rounded-xl shadow-lg"></div>
                        </div>
                        
                        <!-- Book Details -->
                        <div class="md:w-2/3 p-8">
                            <div class="mb-6">
                                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Fiction</span>
                                <span class="ml-2 bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">Available</span>
                            </div>
                            
                            <h1 class="text-4xl font-bold mb-4" id="book-title">The Midnight Library</h1>
                            <p class="text-xl text-gray-600 mb-6" id="book-author">By Matt Haig</p>
                            
                            <div class="flex items-center mb-6">
                                <div class="flex text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">4.5 • 1,234 reviews</span>
                            </div>
                            
                            <div class="mb-8">
                                <h3 class="text-xl font-bold mb-4">Description</h3>
                                <p class="text-gray-700 leading-relaxed" id="book-description">
                                    Between life and death there is a library, and within that library, the shelves go on forever. Every book provides a chance to try another life you could have lived. To see how things would be if you had made other choices... Would you have done anything different, if you had the chance to undo your regrets?
                                </p>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-6 mb-8">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-600 text-sm">Publisher</p>
                                    <p class="font-medium">Penguin Books</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-600 text-sm">Published</p>
                                    <p class="font-medium">2020</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-600 text-sm">Pages</p>
                                    <p class="font-medium">304</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-600 text-sm">ISBN</p>
                                    <p class="font-medium">978-0525559474</p>
                                </div>
                            </div>
                            
                            <div class="flex space-x-4">
                                <button class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center">
                                    <i class="fas fa-book-reader mr-2"></i> Borrow Book
                                </button>
                                <button class="flex-1 bg-gray-100 text-gray-800 py-3 px-6 rounded-lg font-semibold hover:bg-gray-200 transition duration-300 flex items-center justify-center">
                                    <i class="fas fa-bookmark mr-2"></i> Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Reviews Section -->
                <div class="mt-12 bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-6">Reviews</h3>
                    <div class="space-y-6">
                        <div class="border-b pb-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-bold">Sarah Johnson</h4>
                                    <div class="flex text-yellow-500 text-sm mt-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <span class="text-gray-500 text-sm">2 weeks ago</span>
                            </div>
                            <p class="mt-3 text-gray-700">A beautiful, moving novel about regret, hope and second chances. This book made me reflect on my own life choices.</p>
                        </div>
                        <div class="border-b pb-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-bold">Michael Chen</h4>
                                    <div class="flex text-yellow-500 text-sm mt-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <span class="text-gray-500 text-sm">1 month ago</span>
                            </div>
                            <p class="mt-3 text-gray-700">Creative concept with profound philosophical questions. The story dragged a bit in the middle but overall a great read.</p>
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