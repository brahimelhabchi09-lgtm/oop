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
 <div id="admin-readers" class="admin-panel flex-1">
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-8">
                                <div>
                                    <h2 class="text-2xl font-bold text-gray-800">Readers Management</h2>
                                    <p class="text-gray-600">Manage library members and their accounts</p>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                                <div class="overflow-x-auto">
                                    <table class="w-full">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                                                <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                                                <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                                <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            <?php foreach($readers as $reader): ?>
                                                <tr>
                                                    <td class="py-4 px-6">
                                                        <div class="flex items-center">
                                                            <div class="h-10 w-10 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full mr-4 flex items-center justify-center text-white font-bold">
                                                                <?= ucfirst($reader["firstName"])[0] . ucfirst($reader["lastName"])[0] ?>
                                                            </div>
                                                            <div>
                                                                <div class="font-medium"><?= ucfirst($reader["firstName"]) ?></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-4 px-6"><?= ucfirst($reader["lastName"]) ?></td>
                                                    <td class="py-4 px-6"><?= $reader["email"] ?></td>
                                                    <td class="py-4 px-6"><?= $reader["role"] ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
