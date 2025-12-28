<section id="books" class="page">
            <div class="container mx-auto px-4 py-12">
                <div class="flex justify-between items-center mb-10">
                    <h1 class="text-3xl font-bold">Browse Books</h1>
                </div>

                <!-- Book Grid -->
                <div class="grid md:grid-cols-4 gap-6">
                    <?php foreach($books as $book): ?>
                        <a href="/book?id=<?= $book["id"] ?>" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 cursor-pointer">
                            <div class="h-64 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                            <div class="p-5">
                                <h3 class="font-bold text-xl mb-2"><?= $book["title"] ?></h3>
                                <p class="text-gray-600 mb-3"><?= $book["author"] ?></p>
                                <p class="text-gray-700 mb-4 line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aut rerum provident. Maxime numquam dolorum pariatur alias repellat vitae deleniti expedita, repellendus ut aperiam non doloremque quisquam tempora eos ullam natus quod provident impedit eum fuga consectetur reprehenderit! Porro repellendus enim reiciendis libero ea eveniet blanditiis esse id voluptatum nulla?</p>
                                <div class="flex justify-between items-center">
                                    <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full"><?= ucfirst($book["status"]) ?></span>
                                    <div class="flex items-center">
                                        <i class="fas fa-star text-yellow-500"></i>
                                        <span class="ml-1 font-medium"><?= $book["year"] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>

