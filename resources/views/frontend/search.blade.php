@extends('frontend.partials.app')

@section('content')


<!-- Search Results Section -->
<section class="pb-16 pt-32 px-5 md:px-10 lg:px-20 poppins-regular">
    <div class="mx-auto">
        <h2 class="text-sm md:text-2xl font-semibold text-pink-500 mb-8">Search Results for: <span class="capitalize text-black">Choclate Ice Cream</span></h2>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 md:gap-8">
            <!-- Product Card 1 -->
            <div class="product-card pb-5 p-3 md:p-6 border rounded shadow-lg">
                <img src="{{ asset('assets/img/portfolio-1.jpg')}}" alt="Ice Cream" class="w-full h-36 sm:h-48 object-cover rounded mb-4">
                <h3 class="text-sm text-nowrap text-ellipsis w-full overflow-x-hidden md:text-xl font-semibold">Vanilla Ice Cream</h3>
                <p class="text-xs mt-2">A classic vanilla ice cream made from the finest ingredients, perfect for any occasion.</p>
                <p class="text-lg md:text-xl font-semibold mt-4 text-pink-500">&#8377; 100.00</p>
                <a href="{{ route('product')}}" class="text-sm md:text-base w-full md:w-fit text-center inline-block bg-pink-500 text-white px-6 py-3 rounded-lg mt-4">View Details</a>
            </div>
            
            <!-- Product Card 2 -->
            <div class="product-card pb-5 p-3 md:p-6 border rounded shadow-lg">
                <img src="{{ asset('assets/img/portfolio-2.jpg')}}" alt="Ice Cream" class="w-full h-36 sm:h-48 object-cover rounded mb-4">
                <h3 class="text-sm text-nowrap text-ellipsis w-full overflow-x-hidden md:text-xl font-semibold">Chocolate Fudge</h3>
                <p class="text-xs mt-2">Indulge in rich and creamy chocolate fudge ice cream, made with premium cocoa.</p>
                <p class="text-lg md:text-xl font-semibold mt-4 text-pink-500">&#8377; 120.00</p>
                <a href="{{ route('product')}}" class="text-sm md:text-base w-full md:w-fit text-center inline-block bg-pink-500 text-white px-6 py-3 rounded-lg mt-4">View Details</a>
            </div>
            
            <!-- Product Card 3 -->
            <div class="product-card pb-5 p-3 md:p-6 border rounded shadow-lg">
                <img src="{{ asset('assets/img/portfolio-3.jpg')}}" alt="Ice Cream" class="w-full h-36 sm:h-48 object-cover rounded mb-4">
                <h3 class="text-sm text-nowrap text-ellipsis w-full overflow-x-hidden md:text-xl font-semibold">Strawberry Delight</h3>
                <p class="text-xs mt-2">A delightful strawberry ice cream with chunks of fresh berries and a creamy texture.</p>
                <p class="text-lg md:text-xl font-semibold mt-4 text-pink-500">&#8377; 110.00</p>
                <a href="{{ route('product')}}" class="text-sm md:text-base w-full md:w-fit text-center inline-block bg-pink-500 text-white px-6 py-3 rounded-lg mt-4">View Details</a>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-16">
        <ul class="flex justify-center gap-3">
            <li class="pagination-btn cursor-pointer bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">Prev</li>
            
            <li class="pagination-btn cursor-pointer bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">1</li>
            <li class="pagination-btn cursor-pointer bg-white text-black px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">2</li>
            <li class="pagination-btn cursor-pointer bg-white text-black px-4 py-2 rounded-lg shadow-md hover:bg-pink-500  hover:text-white transition-all">3</li>
            
            <li class="pagination-btn cursor-pointer bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">Next</li>
        </ul>
    </div>
</section>


{{-- footer --}}
@section('footer')
    @include('frontend.partials.footer')
@endsection

@endsection