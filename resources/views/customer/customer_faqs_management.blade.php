@extends('customer.partials.customer_app')

@section('customer_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <div class="max-w-6xl mx-auto bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
        <!-- Header Section -->
        <div class="mb-8 text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Help Center</h1>
            <p class="text-gray-600">Find answers to common questions and guides</p>
        </div>

        <!-- Search Section -->
        <div class="mb-12 relative">
            <div class="relative">
                <input type="text" placeholder="Search knowledge base..." 
                    class="w-full py-4 ps-6 pe-16 rounded-xl border-2 border-gray-200 focus:border-pink-500 outline-none transition-all sm:text-md text-sm">
                <button class="absolute right-3 top-1/2 -translate-y-1/2 bg-pink-500 py-2 px-3 rounded-lg hover:bg-pink-600 transition-colors">
                    <i class="ri-search-2-line text-white text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Popular Topics Grid -->
        <div class="mb-12">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Popular Topics</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="p-6 bg-gray-50 rounded-xl hover:bg-white hover:shadow-lg transition-all border border-gray-100">
                    <i class="ri-lock-password-line text-pink-500 text-3xl mb-4"></i>
                    <h4 class="font-semibold text-lg mb-2">Account & Security</h4>
                    <p class="text-gray-600 mb-3">Manage password, 2FA, and security settings</p>
                    <a href="#" class="text-pink-500 hover:underline flex items-center">
                        View Articles <i class="ri-arrow-right-s-line ml-2"></i>
                    </a>
                </div>
                
                <div class="p-6 bg-gray-50 rounded-xl hover:bg-white hover:shadow-lg transition-all border border-gray-100">
                    <i class="ri-shopping-bag-line text-pink-500 text-3xl mb-4"></i>
                    <h4 class="font-semibold text-lg mb-2">Orders & Returns</h4>
                    <p class="text-gray-600 mb-3">Track orders, manage returns and refunds</p>
                    <a href="#" class="text-pink-500 hover:underline flex items-center">
                        View Articles <i class="ri-arrow-right-s-line ml-2"></i>
                    </a>
                </div>

                <div class="p-6 bg-gray-50 rounded-xl hover:bg-white hover:shadow-lg transition-all border border-gray-100">
                    <i class="ri-currency-line text-pink-500 text-3xl mb-4"></i>
                    <h4 class="font-semibold text-lg mb-2">Payments & Pricing</h4>
                    <p class="text-gray-600 mb-3">Payment methods, discounts, and pricing</p>
                    <a href="#" class="text-pink-500 hover:underline flex items-center">
                        View Articles <i class="ri-arrow-right-s-line ml-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mb-8">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Frequently Asked Questions</h3>
            
            <div class="space-y-4">
                <!-- FAQ Item -->
                <div class="group transition-all duration-200">
                    <div class="flex items-center justify-between p-6 bg-gray-50 rounded-xl cursor-pointer group-hover:bg-white group-hover:shadow-lg border border-gray-100">
                        <div>
                            <h4 class="font-semibold text-gray-800">How do I reset my password?</h4>
                            <div class="hidden group-[.active]:block mt-2 text-sm sm:text-base">
                                <p class="text-gray-600">Go to account settings > security > password reset. We'll send a reset link to your email.</p>
                                <div class="mt-4 flex items-center space-x-4">
                                    <span class="text-sm text-gray-500">Was this helpful?</span>
                                    <button class="text-green-500 hover:text-green-600">Yes</button>
                                    <button class="text-red-500 hover:text-red-600">No</button>
                                </div>
                            </div>
                        </div>
                        <i class="ri-add-line text-gray-500 text-xl group-[.active]:hidden"></i>
                        <i class="ri-subtract-line text-gray-500 text-xl hidden group-[.active]:block"></i>
                    </div>
                </div>

                <!-- Another FAQ Item -->
                <div class="group transition-all duration-200">
                    <div class="flex items-center justify-between p-6 bg-gray-50 rounded-xl cursor-pointer group-hover:bg-white group-hover:shadow-lg border border-gray-100">
                        <div>
                            <h4 class="font-semibold text-gray-800">What's your return policy?</h4>
                            <div class="hidden group-[.active]:block mt-2 text-sm sm:text-base">
                                <p class="text-gray-600">We accept returns within 30 days of purchase. Items must be unused with original tags.</p>
                                <div class="mt-4 flex items-center space-x-4">
                                    <span class="text-sm text-gray-500">Was this helpful?</span>
                                    <button class="text-green-500 hover:text-green-600">Yes</button>
                                    <button class="text-red-500 hover:text-red-600">No</button>
                                </div>
                            </div>
                        </div>
                        <i class="ri-add-line text-gray-500 text-xl group-[.active]:hidden"></i>
                        <i class="ri-subtract-line text-gray-500 text-xl hidden group-[.active]:block"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Banner -->
        <div class="mt-12 bg-pink-50 p-8 rounded-2xl text-center border border-pink-100">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Still need help?</h3>
            <p class="text-gray-600 mb-6">Our support team is ready to assist you</p>
            <a href="{{ route('contact') }}">   
                <button class="bg-pink-500 text-white px-8 py-3 rounded-lg hover:bg-pink-600 transition-colors font-semibold">
                    <i class="ri-customer-service-2-line mr-2"></i>Contact Support
                </button>
            </a>
        </div>
    </div>
</div>

<script>
    // Add toggle functionality
    document.querySelectorAll('.group').forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('active');
        });
    });
</script>
@endsection