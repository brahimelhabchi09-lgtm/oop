 <link rel="stylesheet" href="../style/output.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<section id="admin" class="page">
            <div class="flex">
                <!-- Admin Sidebar -->
                <div class="admin-sidebar bg-gray-900 text-white min-h-screen fixed md:relative">
                    <div class="p-6">
                        <div class="flex items-center mb-8">
                            <i class="fas fa-user-shield text-2xl text-blue-400 mr-3"></i>
                            <h2 class="text-xl font-bold">Admin Panel</h2>
                            <button id="close-sidebar" class="ml-auto md:hidden text-gray-400 hover:text-white">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        
                        <div class="mb-8">
                            <div class="flex items-center p-3 bg-gray-800 rounded-lg">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                    AD
                                </div>
                                <div>
                                    <p class="font-semibold">Admin User</p>
                                    <p class="text-gray-400 text-sm">Super Administrator</p>
                                </div>
                            </div>
                        </div>

                        <nav class="space-y-2">
                            <a href="/admin" class="admin-tab flex items-center p-3 rounded-lg hover:bg-gray-800 transition duration-300 active-tab">
                                <i class="fas fa-tachometer-alt mr-3"></i>
                                Dashboard
                            </a>
                            <a href="/admin/books" class="admin-tab flex items-center p-3 rounded-lg hover:bg-gray-800 transition duration-300">
                                <i class="fas fa-book mr-3"></i>
                                Books Management
                            </a>
                            <a href="/admin/addBook" class="admin-tab flex items-center p-3 rounded-lg hover:bg-gray-800 transition duration-300">
                                <i class="fas fa-plus-circle mr-3"></i>
                                Add New Book
                            </a>
                            <a href="/admin/borrows" class="admin-tab flex items-center p-3 rounded-lg hover:bg-gray-800 transition duration-300">
                                <i class="fas fa-exchange-alt mr-3"></i>
                                Borrows & Returns
                            </a>
                            <a href="/admin/readers" class="admin-tab flex items-center p-3 rounded-lg hover:bg-gray-800 transition duration-300">
                                <i class="fas fa-users mr-3"></i>
                                Readers Management
                            </a>
                            
                        </nav>

                        <div class="mt-8 pt-8 border-t border-gray-800">
                            <a href="/" class="flex items-center p-3 text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition duration-300">
                                <i class="fas fa-arrow-left mr-3"></i>
                                Back to Library
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Admin Main Content -->
                <div class="admin-content flex-1">
                    <!-- Admin Header -->
                    <header class="bg-white shadow-sm border-b">
                        <div class="flex justify-between items-center p-4">
                            <div class="flex items-center">
                                <button id="toggle-sidebar" class="md:hidden text-gray-700 mr-4">
                                    <i class="fas fa-bars text-xl"></i>
                                </button>
                                <h1 id="admin-page-title" class="text-2xl font-bold text-gray-800">Admin Dashboard</h1>
                            </div>
                            <div class="flex items-center space-x-4">
                                <button class="relative text-gray-600 hover:text-gray-900">
                                    <i class="fas fa-bell text-xl"></i>
                                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                                </button>
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold cursor-pointer">
                                    AD
                                </div>
                            </div>
                        </div>
                    </header>

                    <!-- Admin Dashboard -->
                    <div id="admin-dashboard" class="admin-panel active">
                        <div class="p-6">
                            <!-- Stats Overview -->
                            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                                <div class="stat-card bg-white rounded-xl shadow-lg p-6">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <p class="text-gray-600">Total Books</p>
                                            <h3 class="text-3xl font-bold mt-2">5,247</h3>
                                            <p class="text-green-600 text-sm mt-1"><i class="fas fa-arrow-up mr-1"></i> 12% from last month</p>
                                        </div>
                                        <div class="bg-blue-100 p-3 rounded-lg">
                                            <i class="fas fa-book text-blue-600 text-2xl"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="stat-card bg-white rounded-xl shadow-lg p-6">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <p class="text-gray-600">Active Readers</p>
                                            <h3 class="text-3xl font-bold mt-2">1,843</h3>
                                            <p class="text-green-600 text-sm mt-1"><i class="fas fa-arrow-up mr-1"></i> 8% from last month</p>
                                        </div>
                                        <div class="bg-green-100 p-3 rounded-lg">
                                            <i class="fas fa-users text-green-600 text-2xl"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="stat-card bg-white rounded-xl shadow-lg p-6">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <p class="text-gray-600">Borrowed Books</p>
                                            <h3 class="text-3xl font-bold mt-2">324</h3>
                                            <p class="text-red-600 text-sm mt-1"><i class="fas fa-arrow-down mr-1"></i> 3% from last month</p>
                                        </div>
                                        <div class="bg-yellow-100 p-3 rounded-lg">
                                            <i class="fas fa-exchange-alt text-yellow-600 text-2xl"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="stat-card bg-white rounded-xl shadow-lg p-6">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <p class="text-gray-600">Overdue Books</p>
                                            <h3 class="text-3xl font-bold mt-2">23</h3>
                                            <p class="text-red-600 text-sm mt-1"><i class="fas fa-exclamation-circle mr-1"></i> Needs attention</p>
                                        </div>
                                        <div class="bg-red-100 p-3 rounded-lg">
                                            <i class="fas fa-exclamation-triangle text-red-600 text-2xl"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Activity -->
                            <div class="grid lg:grid-cols-2 gap-8">
                                <div class="bg-white rounded-xl shadow-lg p-6">
                                    <h3 class="text-xl font-bold mb-6">Recent Activity</h3>
                                    <div class="space-y-4">
                                        <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                                            <div class="bg-blue-100 p-2 rounded-lg mr-4">
                                                <i class="fas fa-book text-blue-600"></i>
                                            </div>
                                            <div>
                                                <p class="font-medium">New book added</p>
                                                <p class="text-gray-600 text-sm">"The Psychology of Money" was added to the collection</p>
                                            </div>
                                            <span class="ml-auto text-gray-500 text-sm">2 hours ago</span>
                                        </div>
                                        <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                            <div class="bg-green-100 p-2 rounded-lg mr-4">
                                                <i class="fas fa-user-plus text-green-600"></i>
                                            </div>
                                            <div>
                                                <p class="font-medium">New reader registered</p>
                                                <p class="text-gray-600 text-sm">Sarah Johnson joined the library</p>
                                            </div>
                                            <span class="ml-auto text-gray-500 text-sm">5 hours ago</span>
                                        </div>
                                        <div class="flex items-center p-3 bg-yellow-50 rounded-lg">
                                            <div class="bg-yellow-100 p-2 rounded-lg mr-4">
                                                <i class="fas fa-exclamation-triangle text-yellow-600"></i>
                                            </div>
                                            <div>
                                                <p class="font-medium">Overdue book alert</p>
                                                <p class="text-gray-600 text-sm">"The Great Gatsby" is 5 days overdue</p>
                                            </div>
                                            <span class="ml-auto text-gray-500 text-sm">1 day ago</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Actions -->
                                <div class="bg-white rounded-xl shadow-lg p-6">
                                    <h3 class="text-xl font-bold mb-6">Quick Actions</h3>
                                    <div class="grid grid-cols-2 gap-4">
                                        <a href="/admin/addBook" class="bg-blue-50 hover:bg-blue-100 p-4 rounded-lg text-center transition duration-300">
                                            <i class="fas fa-plus-circle text-blue-600 text-2xl mb-2"></i>
                                            <p class="font-medium">Add Book</p>
                                        </a>
                                        <a href="/admin/borrows" class="bg-green-50 hover:bg-green-100 p-4 rounded-lg text-center transition duration-300">
                                            <i class="fas fa-exchange-alt text-green-600 text-2xl mb-2"></i>
                                            <p class="font-medium">Manage Borrows</p>
                                        </a>
                                        <a href="/admin/readers" class="bg-purple-50 hover:bg-purple-100 p-4 rounded-lg text-center transition duration-300">
                                            <i class="fas fa-user-plus text-purple-600 text-2xl mb-2"></i>
                                            <p class="font-medium">Add Reader</p>
                                        </a>
                                        <a href="/admin/books" class="bg-yellow-50 hover:bg-yellow-100 p-4 rounded-lg text-center transition duration-300">
                                            <i class="fas fa-search text-yellow-600 text-2xl mb-2"></i>
                                            <p class="font-medium">View Reports</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
