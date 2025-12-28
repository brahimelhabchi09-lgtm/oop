
<section id="book-detail" class="p d">
            <div class="container mx-auto px-4 py-12">
                <button onclick="hideBook()" class="mb-6 text-blue-600 hover:text-blue-800 font-medium">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Books
                </button>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <!-- Book Cover -->
                        <div class="md:w-1/3 p-8">
                            <div class="h-96 bg-gradient-to-r from-blue-400 to-blue-600 rounded-xl shadow-lg"></div>
                        </div>
                        
                        <!-- Book Details -->
                        <div class="md:w-2/3 p-8">
                            <div class="mb-6">
                                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Fiction</span>
                                <span class="ml-2 bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full"><?= ucfirst($book["status"]) ?></span>
                            </div>
                            
                            <h1 class="text-4xl font-bold mb-4" id="book-title"><?= $book["title"] ?></h1>
                            <p class="text-xl text-gray-600 mb-6" id="book-author">By <?= $book["author"] ?></p>
                            
                            <div class="flex items-center mb-6">
                                <div class="flex text-yellow-500">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="ml-3 text-gray-700 font-medium">4.5 • 1,234 reviews</span>
                            </div>
                            
                            <div class="mb-8">
                                <h3 class="text-xl font-bold mb-4">Description</h3>
                                <p class="text-gray-700 leading-relaxed" id="book-description">
                                    Between life and death there is a library, and within that library, the shelves go on forever. Every book provides a chance to try another life you could have lived. To see how things would be if you had made other choices... Would you have done anything different, if you had the chance to undo your regrets?
                                </p>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-6 mb-8">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-600 text-sm">Publisher</p>
                                    <p class="font-medium">Penguin Books</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-600 text-sm">Published</p>
                                    <p class="font-medium"><?= $book["year"] ?></p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-600 text-sm">Pages</p>
                                    <p class="font-medium">304</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-600 text-sm">ISBN</p>
                                    <p class="font-medium">978-0525559474</p>
                                </div>
                            </div>
                            
                            <div class="flex space-x-4">
                                <form action="/borrowBook" method="POST">
                                    <input type="hidden" name="bookId" value="<?= $book["id"] ?>">
                                    <button class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 flex items-center justify-center">
                                        <i class="fas fa-book-reader mr-2"></i> Borrow Book
                                    </button>
                                </form>
                                <button class="flex-1 bg-gray-100 text-gray-800 py-3 px-6 rounded-lg font-semibold hover:bg-gray-200 transition duration-300 flex items-center justify-center">
                                    <i class="fas fa-bookmark mr-2"></i> Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
