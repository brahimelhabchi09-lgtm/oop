    <!-- Footer -->
    <footer class="bg-dark text-white py-16">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <div>
                                        <img src="style/images/novacraft.png" class="w-[160px] h-auto mb-6">

                    <p class="text-gray-400 mb-6 text-balance">
                        Modern digital agency creating innovative experiences that transform ideas into reality.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-primary-600 hover-lift transition-all duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-primary-600 hover-lift transition-all duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-primary-600 hover-lift transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-primary-600 hover-lift transition-all duration-300">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-6 font-display">Quick Links</h3>
                    <ul class="space-y-4">
                        <li><a href="/" class="text-gray-400 hover:text-white transition-colors duration-300">Home</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white transition-colors duration-300">About Us</a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition-colors duration-300">Services</a></li>
                        <li><a href="/contact class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-6 font-display">Services</h3>
                    <ul class="space-y-4">
                        <li><a href="/services#web" class="text-gray-400 hover:text-white transition-colors duration-300">Web Development</a></li>
                        <li><a href="/services#design" class="text-gray-400 hover:text-white transition-colors duration-300">UI/UX Design</a></li>
                        <li><a href="/services#marketing" class="text-gray-400 hover:text-white transition-colors duration-300">Digital Marketing</a></li>
                        <li><a href="/services#branding" class="text-gray-400 hover:text-white transition-colors duration-300">Branding</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-6 font-display">Contact Info</h3>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-4 mt-1 text-primary-400"></i>
                            <span>123 Digital Avenue<br>San Francisco, CA 94107</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-4 text-primary-400"></i>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-4 text-primary-400"></i>
                            <span>hello@novacraftstudio.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-center md:text-left">&copy; 2024 NovaCraft Studio. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-500 hover:text-white transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="text-gray-500 hover:text-white transition-colors duration-300">Terms of Service</a>
                    <a href="#" class="text-gray-500 hover:text-white transition-colors duration-300">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
            this.innerHTML = mobileMenu.classList.contains('hidden') ? 
                '<i class="fas fa-bars text-2xl"></i>' : 
                '<i class="fas fa-times text-2xl"></i>';
        });

        // Set active nav link
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = window.location.pathname.split('/').pop();
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                const linkPage = link.getAttribute('href');
                if (linkPage === currentPage || (currentPage === '' && linkPage === 'index.html')) {
                    link.classList.add('active');
                    link.classList.add('text-primary-600');
                }
            });
        });
    </script>