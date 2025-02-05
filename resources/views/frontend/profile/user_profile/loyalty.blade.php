@extends('frontend.profile.partials.profile_app')

@section('profile_content')

    <!-- Main Content -->
    <div class="flex-1 px-5 py-10 md:pb-10 pt-20">
        <div class="mx-auto px-5 md:px-10 lg:px-20 pb-8 poppins-regular">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-center text-yellow-700 mb-6">🎉 Loyalty Program & Rewards 🎉</h2>

            <!-- User Points & Tier -->
            <div class="bg-gradient-to-r from-yellow-200 to-yellow-500 p-6 rounded-lg shadow-lg max-w-md mx-auto text-center">
                <h3 class="text-xl font-semibold text-gray-900">Your Loyalty Points</h3>
                <p class="text-5xl font-bold text-white mt-2">150</p>
                <p class="text-sm text-gray-900 mt-1">Earn more points & unlock exciting rewards!</p>
                
                <div class="mt-4">
                    <span class="inline-block px-4 py-2 bg-gray-900 text-white font-semibold rounded-lg">🎖 Silver Member</span>
                </div>
                
                <!-- Progress Bar -->
                <div class="w-full bg-gray-300 mt-4 rounded-full h-3">
                    <div class="bg-green-500 h-3 rounded-full" style="width: 40%;"></div>
                </div>
                <p class="text-sm text-gray-900 mt-2">Earn 200 points to reach <b>Gold Tier</b> 🏆</p>
            </div>

            <!-- Ways to Earn Points -->
            <div class="mt-20 text-center">
                <h3 class="text-2xl sm:text-3xl font-semibold text-gray-800">🔥 How to Earn More Points?</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                    <div class="bg-white p-6 shadow-lg rounded-lg hover:scale-105 transition-transform">
                        <h4 class="font-bold text-yellow-600 mb-1">🍦 Buy Ice Cream</h4>
                        <p class="text-sm text-gray-600">10 points for every ₹100 spent.</p>
                    </div>
                    <div class="bg-white p-6 shadow-lg rounded-lg hover:scale-105 transition-transform">
                        <h4 class="font-bold text-yellow-600 mb-1">🎂 Birthday Bonus</h4>
                        <p class="text-sm text-gray-600">Get 100 bonus points on your birthday!</p>
                    </div>
                    <div class="bg-white p-6 shadow-lg rounded-lg hover:scale-105 transition-transform">
                        <h4 class="font-bold text-yellow-600 mb-1">🎁 First Order Reward</h4>
                        <p class="text-sm text-gray-600">Get 50 extra points on your first order.</p>
                    </div>
                    <div class="bg-white p-6 shadow-lg rounded-lg hover:scale-105 transition-transform">
                        <h4 class="font-bold text-yellow-600 mb-1">👫 Refer a Friend</h4>
                        <p class="text-sm text-gray-600">Earn 50 points per successful referral.</p>
                    </div>
                    <div class="bg-white p-6 shadow-lg rounded-lg hover:scale-105 transition-transform">
                        <h4 class="font-bold text-yellow-600 mb-1">📝 Write a Review</h4>
                        <p class="text-sm text-gray-600">Earn 20 points for product reviews.</p>
                    </div>
                    <div class="bg-white p-6 shadow-lg rounded-lg hover:scale-105 transition-transform">
                        <h4 class="font-bold text-yellow-600 mb-1">🎉 Festive Offers</h4>
                        <p class="text-sm text-gray-600">Get surprise bonus points on special events!</p>
                    </div>
                </div>
            </div>

            <!-- Redeem Points -->
            <div class="mt-20 text-center">
                <h3 class="text-2xl sm:text-3xl font-semibold text-gray-800">💰 Redeem Your Points</h3>
                <p class="text-gray-600 mt-1 text-sm sm:text-base">Use points for discounts, free items & more!</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
                    <div class="bg-white p-6 shadow-lg rounded-lg hover:scale-105 transition-transform">
                        <h4 class="font-bold text-yellow-500 mb-1">🛍 ₹50 Off Coupon</h4>
                        <p class="text-sm text-gray-600">Redeem 500 points</p>
                        <button class="mt-3 px-6 py-2 bg-gradient-to-r from-yellow-400 to-yellow-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-600">
                            Redeem Now
                        </button>
                    </div>
                    <div class="bg-white p-6 shadow-lg rounded-lg hover:scale-105 transition-transform">
                        <h4 class="font-bold text-yellow-500 mb-1">🍦 Free Ice Cream</h4>
                        <p class="text-sm text-gray-600">Redeem 1000 points</p>
                        <button class="mt-3 px-6 py-2 bg-gradient-to-r from-yellow-400 to-yellow-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-600">
                            Redeem Now
                        </button>
                    </div>
                    <div class="bg-white p-6 shadow-lg rounded-lg hover:scale-105 transition-transform">
                        <h4 class="font-bold text-yellow-500 mb-1">🚀 Free Delivery</h4>
                        <p class="text-sm text-gray-600">Redeem 300 points</p>
                        <button class="mt-3 px-6 py-2 bg-gradient-to-r from-yellow-400 to-yellow-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-600">
                            Redeem Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Referral Program -->
            <div class="mt-20 text-center">
                <h3 class="text-2xl font-semibold text-gray-800">🚀 Invite & Earn Rewards</h3>
                <p class="text-gray-600 mt-1">Share your referral code & earn 50 points per friend.</p>

                <div class="bg-white p-6 shadow-md rounded-lg max-w-md mx-auto mt-4">
                    <p class="text-lg font-bold text-yellow-700">Your Referral Code:</p>
                    <div class="flex items-center justify-center gap-2 mt-2">
                        <span class="px-4 py-2 bg-gray-200 text-gray-800 font-semibold rounded-lg">ABC123</span>
                        <button class="px-4 py-2 bg-pink-500 text-white font-semibold rounded-lg shadow-md hover:bg-pink-700">
                            Copy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
