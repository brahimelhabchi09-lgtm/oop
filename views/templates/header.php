<nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-2">
                    <i class="fas fa-book text-blue-600 text-2xl"></i>
                    <span class="text-xl font-bold text-gray-800">Modern Library</span>
                </a>
                <?php 
                    session_start();
                    $isLogged = isset($_SESSION["user"]);
                    
                ?>
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                    <a href="/books" class="text-gray-700 hover:text-blue-600 font-medium">Books</a>
                    <?php if($isLogged): ?>
                        <?php $role = $_SESSION["user"]->role ?>
                        <?php if($role === "reader"): ?>
                            <a href="/profile" class="text-gray-700 hover:text-blue-600 font-medium">Profile</a>
                        <?php endif ?>
                        <?php if($role === "admin"): ?>
                            <a href="/admin" class="text-gray-700 hover:text-blue-600 font-medium">Dashboard</a>
                        <?php endif ?>
                    <?php endif ?>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-4">
                    <?php if($isLogged): ?>
                        <form action="/logout" method="post">
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">logout</button>
                        </form>
                    <?php else: ?>
                        <a href="/login" class="text-gray-700 hover:text-blue-600 font-medium">Login</a>
                        <a href="/register" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Register</a>
                    <?php endif ?>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden py-4 border-t">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
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