<section id="login" class="page">
            <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-purple-50 py-12 px-4">
                <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-xl shadow-lg">
                    <div class="text-center">
                        <i class="fas fa-book text-4xl text-blue-600 mb-4"></i>
                        <h2 class="text-3xl font-bold text-gray-900">Sign in to your account</h2>
                        <p class="mt-2 text-gray-600">Access your library dashboard and borrowed books</p>
                    </div>
                    <form action="/login" method="POST" class="mt-8 space-y-6">
                        <div class="space-y-4">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                <input id="email" name="email" type="email" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" placeholder="Enter your email">
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <input id="password" name="password" type="password" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" placeholder="Enter your password">
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
