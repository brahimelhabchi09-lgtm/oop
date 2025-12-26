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
 
 <section id="login" class="page hidden">
            <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-purple-50 py-12 px-4">
                <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-xl shadow-lg">
                    <div class="text-center">
                        <i class="fas fa-book text-4xl text-blue-600 mb-4"></i>
                        <h2 class="text-3xl font-bold text-gray-900">Sign in to your account</h2>
                        <p class="mt-2 text-gray-600">Access your library dashboard and borrowed books</p>
                    </div>
                    <form class="mt-8 space-y-6">
                        <div class="space-y-4">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                <input id="email" type="email" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" placeholder="Enter your email">
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <input id="password" type="password" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" placeholder="Enter your password">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                            </div>
                            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">Forgot password?</a>
                        </div>

                        <div>
                            <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                                Sign In
                            </button>
                        </div>
                        
                        <div class="text-center">
                            <p class="text-gray-600">Don't have an account? <a href="#register" class="font-medium text-blue-600 hover:text-blue-500">Sign up here</a></p>
                        </div>
                    </form>
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
