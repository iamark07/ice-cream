@extends('frontend.partials.app')

@section('content')

    <!-- Product Details Section -->
    <section class="py-16 bg-white poppins-regular pt-32">
        <div class="px-5 md:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Product Image -->
                <div class="product_img h-fit flex justify-center lg:sticky lg:top-32">
                    <img src="{{ asset('assets/img/ice-cream-1.png') }}" alt="Product Image" class="w-80 md:w-96 md:h-[400px]">
                </div>

                <!-- Product Details -->
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4">Delicious Chocolate Ice Cream</h2>
                    
                    <!-- Ratings -->
                    <div class="flex items-center mb-3">
                        <span class="text-yellow-500 text-xl"><i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i class="ri-star-half-fill"></i></span>
                    </div>

                    <!-- Price & Discount -->
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="text-2xl font-semibold text-pink-500">₹299</span>
                        <span class="text-gray-500 line-through text-lg">₹399</span>
                        <span class="text-green-600 font-medium text-lg">25% OFF</span>
                    </div>

                    <!-- Product Flavors -->
                    <div class="mb-4">
                        <p class="text-gray-700 font-medium">Available Flavors:</p>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 mt-2 w-fit">
                            <a href="" class="bg-pink-500 text-white text-center px-3 py-1 rounded-full text-xs">Chocolate</a>
                            <a href="" class="bg-pink-500 text-white text-center px-3 py-1 rounded-full text-xs">Vanilla</a>
                            <a href="" class="bg-pink-500 text-white text-center px-3 py-1 rounded-full text-xs">Mango</a>
                            <a href="" class="bg-pink-500 text-white text-center px-3 py-1 rounded-full text-xs">Pistachio</a>
                        </div>
                    </div>

                    <!-- Product Description -->
                    <p class="text-gray-600 mb-4">
                        Enjoy the rich and creamy taste of our premium Chocolate Ice Cream. Made with the finest cocoa, 
                        blended with fresh milk and natural flavors for a delicious experience. Perfect for any occasion!
                    </p>

                    <!-- Add to Cart Button -->
                    <div class="pb-10 border-b">
                        <a href="{{ route('cart') }}">
                            <button class="w-full bg-pink-500 text-white py-3 rounded-md text-lg font-medium hover:bg-pink-600 transition">
                                <i class="ri-shopping-cart-line"></i> Add to Cart
                            </button>
                        </a>
                    </div>

                    <!-- Add Review Button -->
                    <div class="w-full flex justify-end mt-10">
                        <button id="addReviewBtn" class="w-fit bg-pink-500 text-white p-3 rounded-md font-medium hover:bg-pink-600 transition mt-4">
                            <i class="ri-pencil-line"></i> Add a Review
                        </button>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Customer Reviews</h3>

                        <!-- Sample Reviews -->
                        <div class="flex flex-col gap-3">
                            <div class="p-4 shadow-md rounded-md">
                                <div class="flex items-center gap-4">
                                    <img src="{{ asset('assets/img/ice-cream-1.png') }}" alt="User Image" class="w-12 h-12 sm:w-16 sm:h-16 rounded-full">
                                    <div>
                                        <h4 class="font-medium text-gray-800">Amit Sharma</h4>
                                        <p class="text-yellow-500"><i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i class="ri-star-half-fill"></i></p>
                                        <p class="text-gray-600 text-sm mt-1">"Absolutely love this ice cream! The chocolate flavor is rich and creamy. Definitely ordering again."</p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 shadow-md rounded-md">
                                <div class="flex items-center gap-4">
                                    <img src="{{ asset('assets/img/ice-cream-1.png') }}" alt="User Image" class="w-12 h-12 sm:w-16 sm:h-16 rounded-full">
                                    <div>
                                        <h4 class="font-medium text-gray-800">Priya Kapoor</h4>
                                        <p class="text-yellow-500"><i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i class="ri-star-fill"></i></p>
                                        <p class="text-gray-600 text-sm mt-1">"Great taste and texture. The delivery was fast, and the packaging was excellent!"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Review Popup Modal -->
    <div id="reviewModal" class="fixed z-50 inset-0 bg-black bg-opacity-50 backdrop-blur-md flex justify-center items-center hidden poppins-regular px-5 md:px-0">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <!-- Close Button -->
            <button id="closeModal" class="absolute top-3 md:top-8 right-10 text-white hover:text-pink-500 text-3xl">
                <i class="ri-close-circle-line"></i> <!-- Close Icon -->
            </button>

            <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4">Write a Review</h3>

            <form>
                <div class="mb-4">
                    <label class="text-gray-700 font-medium text-sm">Your Name</label>
                    <input type="text" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-pink-500 text-sm" required>
                </div>

                <div class="mb-4">
                    <label class="text-gray-700 font-medium text-sm">Your Rating</label>
                    <select class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-pink-500 text-sm" required>
                        <option value="5">⭐⭐⭐⭐⭐ - Excellent</option>
                        <option value="4">⭐⭐⭐⭐ - Good</option>
                        <option value="3">⭐⭐⭐ - Average</option>
                        <option value="2">⭐⭐ - Poor</option>
                        <option value="1">⭐ - Bad</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="text-gray-700 font-medium text-sm">Your Review</label>
                    <textarea class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-pink-500 text-sm" rows="4" required></textarea>
                </div>

                <div class="mb-4">
                    <input type="file" class="w-full p-3 bg-pink-500 text-white text-sm">
                </div>

                <!-- Submit Review Button -->
                <button type="submit" class="w-full bg-pink-500 text-white py-3 rounded-md hover:bg-pink-600 transition text-sm">
                    Submit Review
                </button>
            </form>
        </div>
    </div> 

    {{-- footer --}}
    @section('footer')
        @include('frontend.partials.footer')
    @endsection

    <!-- Review Modal Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const modal = document.getElementById("reviewModal");
            const openBtn = document.getElementById("addReviewBtn");

            const closeModalBtn = document.getElementById('closeModal');

            // Close the modal when clicking the close button
            closeModalBtn.addEventListener('click', () => {
                modal.classList.add('hidden');
            });

            openBtn.addEventListener("click", () => {
                modal.classList.remove("hidden");
            });

            // Close modal when clicking outside the form
            modal.addEventListener("click", (e) => {
                if (e.target === modal) {
                    modal.classList.add("hidden");
                }
            });
        });
    </script>
    
    @endsection 
