@extends('franchise.partials.franchise_app')

@section('franchise_content')
    <div class="px-5 md:px-10 py-10">
        <h1 class="text-2xl font-bold mb-6 text-pink-600">Welcome to Franchise Dashboard</h1>

        <!-- Dashboard Overview Cards -->
        <div class="grid grid-cols-3 gap-6">
            <div class="bg-white shadow-lg p-4 rounded-lg">
                <h3 class="font-semibold text-lg">Total Sales</h3>
                <p class="text-xl">₹ 25,000</p>
            </div>
            <div class="bg-white shadow-lg p-4 rounded-lg">
                <h3 class="font-semibold text-lg">Orders</h3>
                <p class="text-xl">150 Orders</p>
            </div>
            <div class="bg-white shadow-lg p-4 rounded-lg">
                <h3 class="font-semibold text-lg">Active Promotions</h3>
                <p class="text-xl">3 Active</p>
            </div>
        </div>
    </div>
@endsection