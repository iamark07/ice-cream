@extends('frontend.partials.app')

@section('content')

    <!-- Wishlist Section -->
    <section class="py-16 bg-gray-50 poppins-regular pt-32">
        <div class="max-w-7xl mx-auto px-5 md:px-10 lg:px-20">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8">Your Wishlist</h2>

            <!-- Wishlist Items -->
            <div id="wishlist-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 sm:gap-8">
                <!-- Wishlist Item 1 -->
                <div class="relative bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('assets/img/portfolio-1.jpg') }}" alt="Chocolate Bliss" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold">Chocolate Bliss</h3>
                    <p class="text-pink-700 font-semibold text-lg">&#8377; 5.99</p>
                    <button class="mt-4 bg-pink-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-pink-600 transition-all">
                        <i class="ri-shopping-cart-line md:text-xl me-2"></i>Add to Cart
                    </button>

                    <!-- Delete Button (Top-right corner) -->
                    <a href="" class="absolute -top-5 -right-3 sm:-right-5 text-pink-500 hover:text-pink-700">
                        <button>
                            <i class="ri-close-circle-fill text-4xl"></i>
                        </button>
                    </a>
                </div>

                <!-- Wishlist Item 2 -->
                <div class="relative bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('assets/img/portfolio-2.jpg') }}" alt="Strawberry Delight" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold">Strawberry Delight</h3>
                    <p class="text-pink-700 font-semibold text-lg">&#8377; 4.99</p>
                    <button class="mt-4 bg-pink-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-pink-600 transition-all">
                        <i class="ri-shopping-cart-line md:text-xl me-2"></i>Add to Cart
                    </button>

                    <!-- Delete Button (Top-right corner) -->
                    <a href="" class="absolute -top-5 -right-3 sm:-right-5 text-pink-500 hover:text-pink-700">
                        <button>
                            <i class="ri-close-circle-fill text-4xl"></i>
                        </button>
                    </a>
                </div>

                <!-- Wishlist Item 3 -->
                <div class="relative bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('assets/img/portfolio-3.jpg') }}" alt="Nutty Caramel" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold">Nutty Caramel</h3>
                    <p class="text-pink-700 font-semibold text-lg">&#8377; 6.49</p>
                    <button class="mt-4 bg-pink-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-pink-600 transition-all">
                        <i class="ri-shopping-cart-line md:text-xl me-2"></i>Add to Cart
                    </button>

                    <!-- Delete Button (Top-right corner) -->
                    <a href="" class="absolute -top-5 -right-3 sm:-right-5 text-pink-500 hover:text-pink-700">
                        <button>
                            <i class="ri-close-circle-fill text-4xl"></i>
                        </button>
                    </a>
                </div>
            </div>
            
            <!-- No Wishlist Items Message (if empty) -->
            <div class="text-center mt-10">
                <p class="text-lg text-gray-500">Your wishlist is currently empty. Start adding products!</p>
                <button class="mt-4 bg-pink-500 text-white px-6 py-2 rounded-md hover:bg-pink-600">
                    Continue Shopping
                </button>
            </div>
        </div>
    </section>

@endsection 
