<!-- Include Head -->
@include('frontend.partials.head')

<body class="bg-[#f8f8f8] font-roboto overflow-x-hidden">
    <!-- Include Header -->
    @include('frontend.partials.header')

    <!-- Checkout Section -->
    <section class="flex justify-center items-center min-h-screen bg-gradient-to-r py-32 poppins-regular px-5 md:px-10">
        <div class="w-full max-w-4xl bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-center text-pink-500 mb-6">Checkout</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Billing Details -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Billing Details</h3>
                    <form action="#" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-5">
                            <div class="col-span-2">
                                <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Full Name</label>
                                <input type="text" id="name" name="name" placeholder="Enter your full name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                            </div>

                            <div class="col-span-2">
                                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                            </div>

                            <div class="col-span-2">
                                <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">Phone Number</label>
                                <input type="text" id="phone" name="phone" placeholder="Enter your phone number" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                            </div>

                            <div class="col-span-2">
                                <label for="address" class="block text-gray-700 text-sm font-medium mb-2">Address</label>
                                <input type="text" id="address" name="address" placeholder="Enter your address" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="city" class="block text-gray-700 text-sm font-medium mb-2">City</label>
                                <input type="text" id="city" name="city" placeholder="Enter city" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="zip" class="block text-gray-700 text-sm font-medium mb-2">Zip Code</label>
                                <input type="text" id="zip" name="zip" placeholder="Enter zip code" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                            </div>                        

                            <div class="col-span-2">
                                <label for="country" class="block text-gray-700 text-sm font-medium mb-2">Country</label>
                                <select id="country" name="country" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                                    <option value="India">India</option>
                                    <option value="USA">USA</option>
                                    <option value="UK">UK</option>
                                    <option value="Canada">Canada</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Order Summary -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Order Summary</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between border-b pb-2">
                            <span>Vanilla Ice Cream</span>
                            <span class="text-pink-500">$10.99</span>
                        </div>
                        <div class="flex justify-between border-b pb-2">
                            <span>Chocolate Ice Cream</span>
                            <span class="text-pink-500">$12.99</span>
                        </div>
                        <div class="flex justify-between text-lg font-semibold mt-4">
                            <span>Total:</span>
                            <span class="text-pink-500">$23.98</span>
                        </div>
                    </div>

                    <!-- Payment Methods -->
                    <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-4">Payment Method</h3>
                    <div class="space-y-3">
                        <label class="flex items-center cursor-pointer" for="credit">
                            <input type="radio" name="payment" value="credit_card" id="credit" class="h-5 w-5 text-pink-500">
                            <span class="ml-2 text-gray-700 text-sm">Credit Card / Debit Card</span>
                        </label>
                        <label class="flex items-center cursor-pointer" for="paypal">
                            <input type="radio" name="payment" value="paypal" id="paypal" class="h-5 w-5 text-pink-500">
                            <span class="ml-2 text-gray-700 text-sm">PayPal</span>
                        </label>
                        <label class="flex items-center cursor-pointer" for="upi">
                            <input type="radio" name="payment" value="upi" id="upi" class="h-5 w-5 text-pink-500">
                            <span class="ml-2 text-gray-700 text-sm">UPI / Google Pay</span>
                        </label>
                        <label class="flex items-center cursor-pointer" for="cod">
                            <input type="radio" name="payment" value="cod" id="cod" class="h-5 w-5 text-pink-500">
                            <span class="ml-2 text-gray-700 text-sm">Cash on Delivery</span>
                        </label>
                    </div>

                    <!-- Place Order Button -->
                    <button class="w-full mt-6 bg-pink-500 text-white p-3 rounded-md hover:bg-pink-600 transition duration-200">Place Order</button>
                </div>
            </div>

            <!-- Back to Cart -->
            <div class="text-center mt-6">
                <a href="{{ route('cart') }}" class="text-pink-500 hover:text-pink-600 text-sm flex items-center justify-center">
                    <i class="ri-arrow-left-line mr-2"></i>Back to Cart
                </a>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/header.js') }}"></script>
</body>
