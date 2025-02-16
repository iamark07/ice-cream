@extends('customer.partials.customer_app')

@section('customer_content')
<div class="min-h-screen bg-gray-100 p-4">
    <!-- Top Navbar -->
    <div class="bg-pink-500 text-white p-4 rounded-lg shadow-md flex justify-between items-center">
        <h2 class="text-xl font-bold">Customer Dashboard</h2>
        <button class="bg-white text-pink-500 px-4 py-2 rounded-lg font-semibold shadow">Logout</button>
    </div>

    <!-- Dashboard Overview -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
        <!-- Profile Summary -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-bold text-pink-500">Profile</h3>
            <p class="text-gray-600">Manage your account details and settings.</p>
            <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded-lg">Edit Profile</button>
        </div>

        <!-- Recent Orders -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-bold text-pink-500">Recent Orders</h3>
            <p class="text-gray-600">Track your latest orders and delivery status.</p>
            <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded-lg">View Orders</button>
        </div>

        <!-- Support Requests -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-bold text-pink-500">Support Requests</h3>
            <p class="text-gray-600">Check your open support tickets.</p>
            <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded-lg">View Tickets</button>
        </div>
    </div>

    <!-- Additional Information -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
        <!-- Wishlist -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-bold text-pink-500">Wishlist</h3>
            <p class="text-gray-600">View and manage your saved items.</p>
            <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded-lg">View Wishlist</button>
        </div>
        
        <!-- Notifications -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-bold text-pink-500">Notifications</h3>
            <p class="text-gray-600">Stay updated with latest offers and updates.</p>
            <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded-lg">View Notifications</button>
        </div>

        <!-- Account Settings -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-bold text-pink-500">Account Settings</h3>
            <p class="text-gray-600">Update password and manage preferences.</p>
            <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded-lg">Settings</button>
        </div>
        
    </div>
</div>
@endsection
