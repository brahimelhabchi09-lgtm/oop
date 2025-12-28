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
<div id="admin-borrows" class="admin-panel flex-1">
                        <div class="p-6">
                            <div class="mb-8">
                                <h2 class="text-2xl font-bold text-gray-800">Borrows & Returns Management</h2>
                                <p class="text-gray-600">Manage book borrowing, returns, and overdue items</p>
                            </div>

                            <!-- Tabs -->
                            <div class="mb-6">
                                <div class="border-b border-gray-200">
                                    <nav class="flex space-x-8">
                                        <button class="borrow-tab py-4 px-1 border-b-2 border-blue-600 text-blue-600 font-medium" data-tab="active-borrows">
                                            Active Borrows
                                        </button>
                                        <button class="borrow-tab py-4 px-1 text-gray-500 hover:text-gray-700 font-medium" data-tab="overdue-books">
                                            Overdue Books
                                        </button>
                                        <button class="borrow-tab py-4 px-1 text-gray-500 hover:text-gray-700 font-medium" data-tab="return-history">
                                            Return History
                                        </button>
                                        <button class="borrow-tab py-4 px-1 text-gray-500 hover:text-gray-700 font-medium" data-tab="new-borrow">
                                            New Borrow
                                        </button>
                                    </nav>
                                </div>
                            </div>

                            <!-- Active Borrows Tab -->
                            <div id="active-borrows" class="borrow-content">
                                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                                    <div class="overflow-x-auto">
                                        <table class="w-full">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reader</th>
                                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Book</th>
                                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Borrowed Date</th>
                                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Due Date</th>
                                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                                <tr>
                                                    <td class="py-4 px-6">
                                                        <div class="flex items-center">
                                                            <div class="h-8 w-8 bg-gradient-to-r from-green-400 to-green-600 rounded-full mr-3"></div>
                                                            <div>
                                                                <div class="font-medium">Sarah Johnson</div>
                                                                <div class="text-gray-500 text-sm">ID: RD00123</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        <div class="font-medium">Project Hail Mary</div>
                                                        <div class="text-gray-500 text-sm">Andy Weir</div>
                                                    </td>
                                                    <td class="py-4 px-6">2024-01-15</td>
                                                    <td class="py-4 px-6">2024-02-15</td>
                                                    <td class="py-4 px-6">
                                                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">Due in 5 days</span>
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        <button class="text-green-600 hover:text-green-800 font-medium">
                                                            <i class="fas fa-check-circle mr-1"></i> Mark Returned
                                                        </button>
                                                    </td>
                                                </tr>
                                                <!-- More rows... -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- New Borrow Tab -->
                            <div id="new-borrow" class="borrow-content hidden">
                                <div class="bg-white rounded-xl shadow-lg p-8">
                                    <h3 class="text-xl font-bold mb-6">New Book Borrow</h3>
                                    <form class="space-y-6">
                                        <div class="grid md:grid-cols-2 gap-6">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Select Reader *</label>
                                                <select required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                                    <option value="">Select a reader</option>
                                                    <option>Sarah Johnson (RD00123)</option>
                                                    <option>Michael Chen (RD00124)</option>
                                                    <option>Emma Wilson (RD00125)</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Select Book *</label>
                                                <select required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                                    <option value="">Select a book</option>
                                                    <option>The Midnight Library</option>
                                                    <option>Project Hail Mary</option>
                                                    <option>Klara and the Sun</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Borrow Date *</label>
                                                <input type="date" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="2024-01-30">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Due Date *</label>
                                                <input type="date" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="2024-02-29">
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition duration-300">
                                                <i class="fas fa-book-reader mr-2"></i> Process Borrow
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>