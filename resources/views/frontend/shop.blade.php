@extends('frontend.partials.app')

@section('content')
    
    <!-- Breadcrumb Section -->
    <section class="relative w-full bg-cover bg-center" style="background-image: url('assets/img/header.jpg');">
        <div class="pt-48 pb-28 md:pt-56 md:pb-32 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white">
            <h2 class="text-3xl md:text-5xl font-bold font-pacifico">Our Shop</h2>
            <p class="mt-2 md:text-lg"><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Home</a> / Shop</p>
        </div>
    </section>
    
    <!-- Shop Overview Section -->
    <section class="py-16 px-5 md:px-10 lg:px-20 text-gray-800">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-4xl font-semibold text-pink-500 font-pacifico mb-5">Discover Our Delicious Range</h2>
            <p class="text-lg leading-relaxed">Step into a world of creamy, delightful, and handcrafted ice creams made with love and the finest ingredients.</p>
        </div>
        <div class="mt-12 flex flex-wrap items-center justify-center gap-8">
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('assets/img/franchise.jpg') }}" class="w-full h-full rounded-lg shadow-2xl border-4 border-pink-500" alt="Our Shop">
            </div>
            <div class="w-full md:w-1/2">
                <ul class="text-lg space-y-4 text-gray-700">
                    <li><i class="ri-star-smile-fill text-pink-500"></i> Premium handcrafted ice creams</li>
                    <li><i class="ri-star-smile-fill text-pink-500"></i> A variety of flavors to suit every mood</li>
                    <li><i class="ri-star-smile-fill text-pink-500"></i> Fresh, organic, and high-quality ingredients</li>
                    <li><i class="ri-star-smile-fill text-pink-500"></i> Hygienic and aesthetically pleasing stores</li>
                    <li><i class="ri-star-smile-fill text-pink-500"></i> Available for dine-in, takeaway, and delivery</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Visit Us Section -->
    <section class="bg-gradient-to-r from-pink-500 to-yellow-500 text-white py-16 px-6 text-center poppins-regular">
        <h2 class="text-3xl font-bold">Visit Our Shop Today!</h2>
        <p class="mt-4 text-lg">Come and taste the magic of our handcrafted ice creams.</p>
        <a href="/contact" class="mt-6 inline-block bg-white text-pink-600 px-6 py-3 rounded-lg font-semibold">Get Directions</a>
    </section>
    
    <!-- Popular Products Section -->
    <section class="bg-gray-100 py-16 px-6 text-gray-800">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-4xl font-semibold text-pink-500 font-pacifico mb-5">Our Bestsellers</h2>
            <p class="text-lg leading-relaxed">Experience the most loved and highly-rated flavors by our customers.</p>
        </div>
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="{{ asset('assets/img/portfolio-1.jpg') }}" class="w-full rounded-lg" alt="Vanilla Bliss">
                <h3 class="text-xl font-semibold mt-4">Vanilla Bliss</h3>
                <p class="text-gray-600">Classic vanilla ice cream made with real vanilla beans.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="{{ asset('assets/img/portfolio-2.jpg') }}" class="w-full rounded-lg" alt="Chocolate Heaven">
                <h3 class="text-xl font-semibold mt-4">Chocolate Heaven</h3>
                <p class="text-gray-600">Rich and creamy chocolate ice cream with a velvety texture.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="{{ asset('assets/img/portfolio-3.jpg') }}" class="w-full rounded-lg" alt="Strawberry Delight">
                <h3 class="text-xl font-semibold mt-4">Strawberry Delight</h3>
                <p class="text-gray-600">Fresh strawberry puree infused in every scoop.</p>
            </div>
        </div>
    </section>
    
@endsection 
