<?php session_start(); ?>
    <nav class="sticky top-0 z-50 glass-effect shadow-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-3">
                        <img src="style/images/novacraft.png" class="w-[160px] h-auto">
                    </a>
                </div>
                
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="/" class="nav-link font-medium text-white-700 hover:text-primary-600 transition-colors duration-300">Home</a>
                    <a href="/about" class="nav-link font-medium text-white-700 hover:text-primary-600 transition-colors duration-300">About</a>
                    <a href="/services" class="nav-link font-link font-medium text-white-700 hover:text-primary-600 transition-colors duration-300">Services</a>
                    <a href="/contact" class="nav-link font-medium text-white-700 hover:text-primary-600 transition-colors duration-300">Contact</a>
                    <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="/profile" class="nav-link font-medium text-white-700 hover:text-primary-600 transition-colors duration-300">Profile</a>
                        <?php if ($_SESSION['user_role']==='admin'): ?>
                        <a href="/messages" class="nav-link font-medium text-white-700 hover:text-primary-600 transition-colors duration-300">Messages</a>
                        <?php endif; ?>
                    <?php else: ?>
                    <a href="/login" class="nav-link font-medium text-white-700 hover:text-primary-600 transition-colors duration-300">Login</a>
                    <a href="/register" class="nav-link font-medium text-white-700 hover:text-primary-600 transition-colors duration-300">Register</a>
                    <?php endif; ?>
                </div>
                
                <div class="hidden lg:block">
                    <a href="/contact" class="gradient-bg text-white px-6 py-3 rounded-xl font-semibold hover-lift shadow-lg transition-all duration-300">
                        Start Project <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <button id="mobile-menu-button" class="lg:hidden text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden lg:hidden mt-6 pt-6 border-t border-gray-100 animate-fade-in">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="nav-link py-3 font-medium text-gray-700 hover:text-primary-600 transition-colors duration-300 border-b border-gray-100">Home</a>
                    <a href="/about" class="nav-link py-3 font-medium text-gray-700 hover:text-primary-600 transition-colors duration-300 border-b border-gray-100">About</a>
                    <a href="/services" class="nav-link py-3 font-medium text-gray-700 hover:text-primary-600 transition-colors duration-300 border-b border-gray-100">Services</a>
                    <a href="/contact" class="nav-link py-3 font-medium text-gray-700 hover:text-primary-600 transition-colors duration-300 border-b border-gray-100">Contact</a>
                    <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="/profile" class="nav-link py-3 font-medium text-gray-700 hover:text-primary-600 transition-colors duration-300">Profile</a>
                    <?php else: ?>
                    <a href="/login" class="nav-link py-3 font-medium text-gray-700 hover:text-primary-600 transition-colors duration-300">Login</a>
                    <a href="/register" class="nav-link py-3 font-medium text-gray-700 hover:text-primary-600 transition-colors duration-300">Register</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</nav>
</header>


