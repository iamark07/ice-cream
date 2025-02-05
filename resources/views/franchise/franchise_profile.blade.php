@extends('franchise.partials.franchise_app')

@section('franchise_content')
    <div class="px-5 md:px-10 py-10">
        <!-- Franchise Profile -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="font-semibold text-lg mb-4">Business Profile</h3>
            <div class="mb-4">
                <label class="text-sm font-medium text-gray-600">Business Name</label>
                <p class="text-gray-600">Ice Cream Paradise</p>
            </div>
            <div class="mb-4">
                <label class="text-sm font-medium text-gray-600">Business Description</label>
                <p class="text-gray-600">We serve premium ice cream made with fresh ingredients.</p>
            </div>
            <div class="mb-4">
                <label class="text-sm font-medium text-gray-600">Address</label>
                <p class="text-gray-600">123 Ice Cream Street, New York</p>
            </div>
            <div class="mb-4">
                <label class="text-sm font-medium text-gray-600">Phone Number</label>
                <p class="text-gray-600">+1 234-567-890</p>
            </div>
            <button class="bg-indigo-600 text-white py-2 px-6 rounded-lg">Edit Profile</button>
        </div>

    </div>

@endsection
