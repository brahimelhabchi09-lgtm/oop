 <link rel="stylesheet" href="../style/output.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
 <div id="admin-add-book" class="admin-panel flex-1">
                        <div class="p-6">
                            <div class="max-w-4xl mx-auto">
                                <div class="mb-8">
                                    <h2 class="text-2xl font-bold text-gray-800">Add New Book</h2>
                                    <p class="text-gray-600">Add a new book to the library collection</p>
                                </div>

                                <div class="bg-white rounded-xl shadow-lg p-8">
                                    <form action="/admin/addBook" method="POST" class="space-y-6">
                                        <div class="grid md:grid-cols-2 gap-6">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Book Title</label>
                                                <input type="text" name="title" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Author</label>
                                                <input type="text" name="author" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Publication Year</label>
                                                <input type="number" name="year" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                            </div>
                                        </div>

                                        <div class="grid md:grid-cols-3 gap-6">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Book Status</label>
                                                <select name="status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                                    <option value="available" selected>Available</option>
                                                    <option value="borrowed">Borrowed</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="flex justify-end space-x-4 pt-6 border-t">
                                            <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition duration-300">
                                                <i class="fas fa-save mr-2"></i> Add Book
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>