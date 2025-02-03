@extends('frontend.partials.app')

@section('content')

    <!-- Cart Section -->
    <section class="flex justify-center items-center min-h-screen bg-gradient-to-r py-32 poppins-regular px-5 md:px-10">
        <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-center text-pink-500 mb-6">Shopping Cart</h2>

            <!-- Cart Items -->
            <div class="flex flex-col gap-5">
                <!-- Single Cart Item -->
                <div class="flex flex-col md:flex-row md:items-center content-between justify-center gap-5 md:justify-between border-b pb-4 shadow-md p-3">
                    <div class="flex flex-col sm:flex-row justify-center sm:justify-start items-center gap-4">
                        <img src="{{ asset('assets/img/ice-cream-1.png') }}" alt="Product Image" class="w-20 h-20 rounded-lg shadow-md">
                        <div>
                            <h3 class="font-semibold text-gray-800">Vanilla Ice Cream</h3>
                            <p class="text-gray-600 text-xs">Delicious vanilla-flavored ice cream</p>
                            <p class="text-pink-500 font-semibold mt-1">&#8377; 10.99</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="bg-white shadow-md px-3 py-1 rounded-md">-</button>
                        <span class="font-semibold">1</span>
                        <button class="bg-white shadow-md px-3 py-1 rounded-md">+</button>
                        <button class="ms-3 text-red-500 hover:text-red-700"><i class="ri-delete-bin-line text-xl"></i></button>
                    </div>
                </div>

                <!-- Another Cart Item -->
                <div class="flex flex-col md:flex-row md:items-center content-between justify-center gap-5 md:justify-between border-b pb-4 shadow-md p-3">
                    <div class="flex flex-col sm:flex-row justify-center sm:justify-start items-center gap-4">
                        <img src="{{ asset('assets/img/ice-cream-1.png') }}" alt="Product Image" class="w-20 h-20 rounded-lg shadow-md">
                        <div>
                            <h3 class="font-semibold text-gray-800">Chocolate Ice Cream</h3>
                            <p class="text-gray-600 text-xs">Rich chocolate-flavored ice cream</p>
                            <p class="text-pink-500 font-semibold mt-1">&#8377; 12.99</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="bg-white shadow-md px-3 py-1 rounded-md">-</button>
                        <span class="font-semibold">2</span>
                        <button class="bg-white shadow-md px-3 py-1 rounded-md">+</button>
                        <button class="ms-3 text-red-500 hover:text-red-700"><i class="ri-delete-bin-line text-xl"></i></button>
                    </div>
                </div>
            </div>

            <!-- Subtotal & Checkout -->
            <div class="mt-6">
                <div class="flex justify-between text-lg font-semibold">
                    <span>Total:</span>
                    <span class="text-pink-500">&#8377; 36.97</span>
                </div>
                <a href="{{ route('checkout') }}"><button class="w-full mt-4 bg-pink-500 text-white p-3 rounded-md hover:bg-pink-600 transition duration-200">Proceed to Checkout</button></a>
            </div>

            <!-- Continue Shopping -->
            <div class="text-center mt-6">
                <a href="{{ route('shop') }}" class="text-pink-500 hover:text-pink-600 text-sm flex items-center justify-center">
                    <i class="ri-arrow-left-line mr-2"></i>Continue Shopping
                </a>
            </div>
        </div>
    </section>

@endsection 
