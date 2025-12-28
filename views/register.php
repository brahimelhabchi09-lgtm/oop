
<section id="register" class="page">
            <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-purple-50 py-12 px-4">
                <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-xl shadow-lg">
                    <div class="text-center">
                        <i class="fas fa-user-plus text-4xl text-blue-600 mb-4"></i>
                        <h2 class="text-3xl font-bold text-gray-900">Create your account</h2>
                        <p class="mt-2 text-gray-600">Join our library community today</p>
                    </div>
                    <form method="POST" action="/register" class="mt-8 space-y-6">
                        <div class="space-y-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                    <input id="first-name" name="firstName" type="text" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                                </div>
                                <div>
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                    <input id="last-name" name="lastName" type="text" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                                </div>
                            </div>
                            <div>
                                <label for="reg-email" class="block text-sm font-medium text-gray-700">Email address</label>
                                <input id="reg-email" name="email" type="email" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                            </div>
                            <div>
                                <label for="reg-password" class="block text-sm font-medium text-gray-700">Password</label>
                                <input id="reg-password" name="password" type="password" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                            </div>
                            <div>
                                <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                                <input id="confirm-password" name="confirm_password" type="password" required class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300">
                            </div>
                        </div>

                        <div class="flex items-center">
                            <input id="terms" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="terms" class="ml-2 block text-sm text-gray-700">
                                I agree to the <a href="#" class="text-blue-600 hover:text-blue-500">Terms and Conditions</a>
                            </label>
                        </div>

                        <div>
                            <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                                Create Account
                            </button>
                        </div>
                        
                        <div class="text-center">
                            <p class="text-gray-600">Already have an account? <a href="#login" class="font-medium text-blue-600 hover:text-blue-500">Sign in here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
