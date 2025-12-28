        
                    <div class="md:col-span-1">
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <div class="flex flex-col items-center">
                                <div class="w-32 h-32 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white text-5xl font-bold mb-4">
                                    <?php echo ucfirst($user["firstName"])[0] . ucfirst($user["lastName"])[0] ?>
                                </div>
                                <h2 class="text-2xl font-bold"><?php echo $user["firstName"] . " " . $user["lastName"] ?></h2>
                                <p class="text-gray-600 mb-4">Library Member</p>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-2">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
                                </div>
                                <p class="text-sm text-gray-600">Reading progress: 75%</p>
                            </div>
                            <div class="mt-6 space-y-4">
                                <div class="flex items-center text-gray-700">
                                    <i class="fas fa-envelope text-blue-500 mr-3"></i>
                                    <span><?php echo $user["email"]; ?></span>
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