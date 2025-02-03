@extends('frontend.partials.app')

@section('content')

    {{-- hero section --}}
    <section class="hero_section relative w-full h-[100dvh]">

        <!-- Dark Overlay -->
        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-30 z-10"></div>
        <!-- Background Images -->
        <div class="h-full w-full absolute top-0 left-0">
            <img src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Ice Cream 1"
                class="hero_image absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000">
            <img src="{{ asset('assets/img/ice-1.png') }}" alt="Ice Cream 2"
                class="hero_image absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
            <img src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Ice Cream 3"
                class="hero_image absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
            <img src="{{ asset('assets/img/ice-2.png') }}" alt="Ice Cream 4"
                class="hero_image absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
        </div>

        <!-- Hero Content -->
        <div
            class="mt-28 absolute w-full top-0 left-0 hero_section_content h-[100dvh] flex flex-col justify-center items-center z-20 px-5 text-center">
            <h1 id="hero_title" class="animate animate-2 text-4xl md:text-7xl font-pacifico text-white">
                Welcome to Ice Cream Paradise
            </h1>
            <p id="hero_subtitle" class="animate animate-2 text-lg mt-5 text-white opacity-80">
                Indulge in our delightful collection of flavors and enjoy the coolest treats of the season!
            </p>
            <div id="hero_button" class="animate animate-2">
                <a href="shop.html"
                class="bg-pink-600 text-white py-3 px-7 rounded-md text-base mt-5 hover:bg-pink-700 transition duration-300 inline-block poppins-regular">Shop
                Now</a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-[#f8f8f8] poppins-regular">
        <div class="px-5 md:px-10">
            <h2 class="text-2xl md:text-4xl font-semibold text-white-500 mb-10 font-pacifico animate-bounce text-pink-500 text-center">
                Popular Ice Cream Flavors
            </h2>
    
            <div class="relative">
                <!-- Left Scroll Button -->
                <button id="scrollLeft" class="absolute left-0 top-1/2 -translate-y-1/2 bg-pink-500 text-white grid place-items-center w-10 h-10 md:w-14 md:h-14 rounded-full shadow-md z-10 hover:bg-pink-600 transition">
                    <i class="ri-arrow-left-s-line text-2xl"></i>
                </button>
    
                <!-- Scrollable Flavors Container -->
                <div id="flavorScroll" class="flex gap-1 md:gap-5 overflow-x-auto px-5 py-4 cursor-grab active:cursor-grabbing scroll-smooth scrollbar-hide">
                    
                    <!-- Single Flavor Cards -->
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[140px] flex flex-col items-center">
                            <div class="bg-white rounded-full shadow-lg grid place-items-center p-5 sm:p-6">
                                <img src="{{ asset('assets/img/trending.png') }}" alt="Chocolate" class="w-16 sm:w-20 h-16 sm:h-20 rounded-full object-cover">
                            </div>
                            <p class="mt-2 text-gray-700 text-sm font-semibold md:text-base text-nowrap">Chocolate</p>
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[140px] flex flex-col items-center">
                            <div class="bg-white rounded-full shadow-lg grid place-items-center p-5 sm:p-6">
                                <img src="{{ asset('assets/img/ice-cream-1.png') }}" alt="Vanilla" class="w-16 sm:w-20 h-16 sm:h-20 rounded-full object-cover">
                            </div>
                            <p class="mt-2 text-gray-700 text-sm font-semibold md:text-base text-nowrap">Vanilla</p>
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[140px] flex flex-col items-center">
                            <div class="bg-white rounded-full shadow-lg grid place-items-center p-5 sm:p-6">
                                <img src="{{ asset('assets/img/trending.png') }}" alt="Strawberry" class="w-16 sm:w-20 h-16 sm:h-20 rounded-full object-cover">
                            </div>
                            <p class="mt-2 text-gray-700 text-sm font-semibold md:text-base text-nowrap">Strawberry</p>
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[140px] flex flex-col items-center">
                            <div class="bg-white rounded-full shadow-lg grid place-items-center p-5 sm:p-6">
                                <img src="{{ asset('assets/img/ice-cream-1.png') }}" alt="Mango" class="w-16 sm:w-20 h-16 sm:h-20 rounded-full object-cover">
                            </div>
                            <p class="mt-2 text-gray-700 text-sm font-semibold md:text-base text-nowrap">Mango</p>
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[140px] flex flex-col items-center">
                            <div class="bg-white rounded-full shadow-lg grid place-items-center p-5 sm:p-6">
                                <img src="{{ asset('assets/img/trending.png') }}" alt="Pistachio" class="w-16 sm:w-20 h-16 sm:h-20 rounded-full object-cover">
                            </div>
                            <p class="mt-2 text-gray-700 text-sm font-semibold md:text-base text-nowrap">Pistachio</p>
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[140px] flex flex-col items-center">
                            <div class="bg-white rounded-full shadow-lg grid place-items-center p-5 sm:p-6">
                                <img src="{{ asset('assets/img/ice-cream-1.png') }}" alt="Cookies & Cream" class="w-16 sm:w-20 h-16 sm:h-20 rounded-full object-cover">
                            </div>
                            <p class="mt-2 text-gray-700 text-sm font-semibold md:text-base text-nowrap">Cookies & Cream</p>
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[140px] flex flex-col items-center">
                            <div class="bg-white rounded-full shadow-lg grid place-items-center p-5 sm:p-6">
                                <img src="{{ asset('assets/img/trending.png') }}" alt="Blueberry" class="w-16 sm:w-20 h-16 sm:h-20 rounded-full object-cover">
                            </div>
                            <p class="mt-2 text-gray-700 text-sm font-semibold md:text-base text-nowrap">Blueberry</p>
                        </div>
                    </a>
        
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[140px] flex flex-col items-center">
                            <div class="bg-white rounded-full shadow-lg grid place-items-center p-5 sm:p-6">
                                <img src="{{ asset('assets/img/ice-cream-1.png') }}" alt="Mint Chocolate" class="w-16 sm:w-20 h-16 sm:h-20 rounded-full object-cover">
                            </div>
                            <p class="mt-2 text-gray-700 text-sm font-semibold md:text-base text-nowrap">Mint Chocolate</p>
                        </div>
                    </a>
                </div>
    
                <!-- Right Scroll Button -->
                <button id="scrollRight" class="absolute right-0 top-1/2 -translate-y-1/2 bg-pink-500 text-white grid place-items-center w-10 h-10 md:w-14 md:h-14 rounded-full shadow-md z-10 hover:bg-pink-600 transition">
                    <i class="ri-arrow-right-s-line text-2xl"></i>
                </button>
            </div>
    
            <!-- More Flavors Button -->
            <div class="text-center mt-6">
                <a href="{{ route('flavors') }}" class="bg-pink-500 text-white py-2 px-6 rounded-md hover:bg-pink-600 transition">More Flavors</a>
            </div>
        </div>
    </section>

    <!-- Enhanced Brand Story Section -->
    <section id="brand-story" class="bg-gradient-to-r from-pink-500 to-yellow-400 py-28 md:py-20 text-center text-white relative overflow-hidden">
        <div class="container mx-auto px-6 md:px-16 relative z-10">
            <h2 class="text-2xl md:text-4xl font-extrabold mb-8 animate-fade-in font-pacifico animate-bounce">The Sweet Journey of Our Ice Cream</h2>
            
            <p class="text-sm md:text-base max-w-4xl mx-auto mb-6 leading-relaxed animate-fade-in delay-200">
                From a small family kitchen to a beloved ice cream brand, our journey has been filled with passion, creativity, and a love for frozen delights. We handcraft each flavor using <span class="font-semibold">fresh, natural ingredients</span>, ensuring every bite is an experience of pure joy!
            </p>

            <p class="text-sm md:text-base max-w-4xl mx-auto mb-10 leading-relaxed animate-fade-in delay-300">
                Whether it's the classic richness of **Belgian Chocolate**, the fruity bliss of **Mango Delight**, or the nutty crunch of **Pistachio Almond**, we bring flavors that melt hearts. Come, be a part of our delicious adventure! 
            </p>

            <a href="#shop" class="inline-block px-8 py-3 bg-white text-pink-600 rounded-md font-semibold shadow-lg hover:bg-gray-200 transition-all transform hover:scale-105">
                Explore Flavors
            </a>
        </div>

        <!-- 🍦 Decorative Ice Cream Graphics -->
        <div class="absolute top-10 left-8 w-16 md:w-24 opacity-50 rotate-12">
            <img src="{{ asset('assets/img/ice-cream-1.png')}}" alt="Ice Cream">
        </div>
        <div class="absolute bottom-10 right-8 w-20 md:w-28 opacity-50 -rotate-12">
            <img src="{{ asset('assets/img/ice-cream-1.png')}}" alt="Ice Cream">
        </div>
    </section>

    <!-- Trending Products Section -->
    <section id="trending-products" class="py-20 bg-[#f8f8f8] text-center poppins-regular">
        <div class="mx-auto px-5 md:px-10 xl:px-32">
            <h2 class="text-2xl md:text-4xl font-semibold text-pink-500 mb-20 font-pacifico animate-bounce">Trending Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3 sm:gap-8">
                <!-- Product Cards -->
                <a href="">
                    <div class="bg-white p-6 shadow-lg text-center rounded-lg transform transition duration-300 hover:scale-105">
                        <img src="{{ asset('assets/img/trending.png')}}" class="w-full h-56 object-cover rounded-md" alt="Chocolate Ice Cream">
                        <h3 class="text-xl font-semibold text-gray-800 mt-4">Chocolate Ice Cream</h3>
                        <p class="text-pink-700 font-semibold text-lg">&#8377; 5.99</p>
                        <button class="w-full mt-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition-all"><i class="ri-shopping-cart-line md:text-xl me-2"></i>Add to Cart</button>
                    </div>
                </a>
                <a href="">    
                    <div class="bg-white p-6 shadow-lg text-center rounded-lg transform transition duration-300 hover:scale-105">
                        <img src="{{ asset('assets/img/trending.png')}}" class="w-full h-56 object-cover rounded-md" alt="Chocolate Ice Cream">
                        <h3 class="text-xl font-semibold text-gray-800 mt-4">Chocolate Ice Cream</h3>
                        <p class="text-pink-700 font-semibold text-lg">&#8377; 5.99</p>
                        <button class="w-full mt-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition-all"><i class="ri-shopping-cart-line md:text-xl me-2"></i>Add to Cart</button>
                    </div>
                </a>
                <a href="">    
                    <div class="bg-white p-6 shadow-lg text-center rounded-lg transform transition duration-300 hover:scale-105">
                        <img src="{{ asset('assets/img/trending.png')}}" class="w-full h-56 object-cover rounded-md" alt="Chocolate Ice Cream">
                        <h3 class="text-xl font-semibold text-gray-800 mt-4">Chocolate Ice Cream</h3>
                        <p class="text-pink-700 font-semibold text-lg">&#8377; 5.99</p>
                        <button class="w-full mt-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition-all"><i class="ri-shopping-cart-line md:text-xl me-2"></i>   Add to Cart</button>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Special Offer Section -->
    <section id="special-offer" class="bg-gradient-to-r from-yellow-300 to-pink-400 px-5 md:px-16 lg:px-32 py-20">
        <div class="container mx-auto bg-white grid grid-cols-1 md:grid-cols-2 gap-10 items-center py-10 px-6 md:px-10 lg:px-16 shadow-lg">
            
            <!-- Offer Details -->
            <div class="text-white text-center md:text-left animate-fade-in order-2 md:order-1">
                <h2 class="text-2xl md:text-3xl lg:text-5xl font-extrabold mb-4 text-black poppins-regular flex flex-col items-center gap-3 w-fit"><span>🍦</span><span>Limited Time Offer!</span></h2>
                <p class="mb-6 max-w-lg text-black poppins-regular">
                    Get a **Flat 30% Off** on all your favorite ice cream flavors! Indulge in the creamy goodness and make your moments sweeter.  
                    Hurry, this offer is valid till <span class="font-semibold">February 15th, 2025</span> only!  
                </p>
                <a href="#shop" class="bg-gradient-to-r from-pink-500 to-yellow-400 text-white px-8 py-3 text-lg font-semibold rounded-lg shadow-lg hover:bg-gray-200 transition-all transform hover:scale-105">
                    Grab the Deal Now
                </a>
            </div>

            <!-- Offer Image -->
            <div class="relative flex justify-center animate-fade-in delay-200 order-1 md:order-2">
                <img src="{{asset('assets/img/about.jpg')}}" alt="Special Offer Ice Cream" class="w-80 md:w-96 drop-shadow-lg transform hover:scale-105 transition-all duration-300">
                <!-- Discount Badge -->
                <div class="absolute top-0 left-0 bg-red-500 text-white px-4 py-2 text-lg font-bold rounded-md shadow-lg animate-bounce">
                    -30% OFF
                </div>
            </div>

        </div>
    </section>

    <!-- Product Listings Section -->
    <section id="product-listing" class="bg-[#f8f8f8] py-20 px-6 md:px-16 lg:px-24 poppins-regular">
        <div class="container mx-auto">
            <h2 class="text-2xl md:text-4xl font-semibold text-white-500 mb-10 font-pacifico animate-bounce text-pink-500 text-center">Explore Our Ice Creams</h2>
            
            <!-- Filter Dropdown Button -->
            <div class=" flex justify-center mb-10">
                <div class="w-fit relative">
                    <button id="filter-toggle" class="bg-pink-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-pink-600 transition-all">Filter Categories <i class="ri-arrow-down-s-line"></i></button>
                    <div id="filter-dropdown" class="hidden z-10 absolute bg-white shadow-lg rounded-lg mt-2 py-2 w-full left-1/2 transform -translate-x-1/2 p-2">
                        <button class="filter-btn w-full text-left px-5 py-2 hover:bg-pink-500 hover:text-white rounded-md transition-all" data-category="all">All</button>
                        <button class="filter-btn w-full text-left px-5 py-2 hover:bg-pink-500 hover:text-white rounded-md transition-all" data-category="chocolate">Chocolate</button>
                        <button class="filter-btn w-full text-left px-5 py-2 hover:bg-pink-500 hover:text-white rounded-md transition-all" data-category="fruity">Fruity</button>
                        <button class="filter-btn w-full text-left px-5 py-2 hover:bg-pink-500 hover:text-white rounded-md transition-all" data-category="nuts">Nutty</button>
                    </div>
                </div>
            </div>
            
            <!-- Product Grid -->
            <div id="product-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Static Products -->
                <a href="{{ route('product')}}">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="{{asset('assets/img/portfolio-1.jpg')}}" alt="Chocolate Bliss" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold">Chocolate Bliss</h3>
                    <p class="text-pink-700 font-semibold text-lg">&#8377; 5.99</p>
                    <button class="mt-4 bg-pink-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-pink-600 transition-all"><i class="ri-shopping-cart-line md:text-xl me-2"></i>Add to Cart</button>
                    </div>
                </a>
                <a href="{{ route('product')}}">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="{{asset('assets/img/portfolio-2.jpg')}}" alt="Strawberry Delight" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold">Strawberry Delight</h3>
                    <p class="text-pink-700 font-semibold text-lg">&#8377; 4.99</p>
                    <button class="mt-4 bg-pink-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-pink-600 transition-all"><i class="ri-shopping-cart-line md:text-xl me-2"></i>Add to Cart</button>
                    </div>
                </a>
                <a href="{{ route('product')}}">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="{{asset('assets/img/portfolio-3.jpg')}}" alt="Nutty Caramel" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold">Nutty Caramel</h3>
                    <p class="text-pink-700 font-semibold text-lg">&#8377; 6.49</p>
                    <button class="mt-4 bg-pink-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-pink-600 transition-all"><i class="ri-shopping-cart-line md:text-xl me-2"></i>Add to Cart</button>
                    </div>
                </a>
            </div>
    
            <!-- Pagination -->
            <div class="flex justify-center mt-10">
                <ul class="flex justify-center gap-3">
                    <li class="pagination-btn cursor-pointer bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">Prev</li>
                    
                    <li class="pagination-btn cursor-pointer bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">1</li>
                    <li class="pagination-btn cursor-pointer bg-white text-black px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">2</li>
                    <li class="pagination-btn cursor-pointer bg-white text-black px-4 py-2 rounded-lg shadow-md hover:bg-pink-500  hover:text-white transition-all">3</li>
                    
                    <li class="pagination-btn cursor-pointer bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">Next</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- subscription plan --}}
    <section class="py-16 bg-[#f8f8f8] poppins-regular">
        <div class="container mx-auto px-5 md:px-10">
            <h2 class="text-2xl md:text-4xl font-semibold text-white-500 mb-10 font-pacifico animate-bounce text-pink-500 text-center">Choose Your Subscription Plan</h2>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Weekly Plan -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-2xl transition flex flex-col items-center">
                    <div class="bg-pink-500 shadow-md grid place-items-center w-20 h-20 rounded-full">  
                        <i class="ri-calendar-2-line text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mt-4">Weekly Plan</h3>
                    <p class="text-gray-600 mt-2">Get fresh ice cream delivered every week!</p>
                    <p class="text-3xl font-bold text-pink-500 mt-4">&#8377; 149 / week</p>
                    <ul class="mt-4 space-y-2 text-gray-700 text-sm flex flex-col items-start">
                        <li><i class="ri-check-line text-pink-500"></i> 4 Ice Cream Flavors per week</li>
                        <li><i class="ri-check-line text-pink-500"></i> Free Delivery</li>
                        <li><i class="ri-check-line text-pink-500"></i> Cancel Anytime</li>
                    </ul>
                    <button class="mt-6 bg-pink-500 text-white py-2 px-6 rounded-md hover:bg-pink-700 transition duration-200">Subscribe</button>
                </div>

                <!-- Premium Plan -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-2xl transition flex flex-col items-center">
                    <div class="bg-pink-500 shadow-md grid place-items-center w-20 h-20 rounded-full">  
                        <i class="ri-vip-crown-line text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mt-4">Premium Plan</h3>
                    <p class="text-gray-600 mt-2">Exclusive premium flavors & extra perks!</p>
                    <p class="text-3xl font-bold text-pink-500 mt-4">&#8377; 349 / month</p>
                    <ul class="mt-4 space-y-2 text-gray-700 text-sm flex flex-col items-start">
                        <li><i class="ri-check-line text-pink-500"></i> 20 Premium Flavors per month</li>
                        <li><i class="ri-check-line text-pink-500"></i> Free Delivery & Extra Gifts</li>
                        <li><i class="ri-check-line text-pink-500"></i> Priority Customer Support</li>
                    </ul>
                    <button class="mt-6 bg-pink-500 text-white py-2 px-6 rounded-md hover:bg-pink-700 transition duration-200">Subscribe</button>
                </div>
    
                <!-- Monthly Plan -->
                <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-2xl transition flex flex-col items-center">
                    <div class="bg-pink-500 shadow-md grid place-items-center w-20 h-20 rounded-full">  
                        <i class="ri-calendar-event-line text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mt-4">Monthly Plan</h3>
                    <p class="text-gray-600 mt-2">Enjoy delicious ice cream every month!</p>
                    <p class="text-3xl font-bold text-pink-500 mt-4">&#8377; 449 / month</p>
                    <ul class="mt-4 space-y-2 text-gray-700 text-sm flex flex-col items-start">
                        <li><i class="ri-check-line text-pink-500"></i> 16 Ice Cream Flavors per month</li>
                        <li><i class="ri-check-line text-pink-500"></i> Free Delivery</li>
                        <li><i class="ri-check-line text-pink-500"></i> Cancel Anytime</li>
                    </ul>
                    <button class="mt-6 bg-pink-500 text-white py-2 px-6 rounded-md hover:bg-pink-700 transition duration-200">Subscribe</button>
                </div>
            </div>
        </div>
    </section>    

    <!-- Store Locator Section -->
    <section id="store-locator" class="bg-gradient-to-r from-blue-400 to-purple-500 py-20 px-6 md:px-16 lg:px-24 text-white text-center poppins-regular">
        <div class="container mx-auto">
            <h2 class="text-2xl md:text-4xl font-semibold text-white-500 mb-5 font-pacifico animate-bounce">📍 Find a Store Near You! 📍</h2>
            <p class="md:text-xl mb-8">Locate your nearest franchise outlet and enjoy your favorite ice cream anytime, anywhere.</p>
            
            <!-- Search Bar -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex items-center justify-between max-w-lg mx-auto mb-8">
                <input type="text" id="location-input" class="w-full p-3 border rounded-l-lg text-gray-800 text-sm" placeholder="Enter city or ZIP code">
                <button id="search-location" type="submit" class="bg-pink-500 text-white text-sm px-6 py-3 rounded-r-lg font-semibold hover:bg-pink-600 transition-all flex gap-1 items-center"><i class="ri-search-line" title="Search"></i><span class="hidden md:block">Search</span></button>
            </div>
            
            <!-- Store Locations List -->
            <div id="store-results" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 justify-center gap-5">
                <!-- Example Store (Will be dynamically generated) -->
                <div class="store-card bg-white text-gray-800 p-6 rounded-lg shadow-lg">
                    <img src="{{asset('assets/img/franchise.jpg')}}" alt="Store Image" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold">Ice Cream Delight - New Delhi</h3>
                    <p class="text-sm mb-2">123, Main Street, NY 10001</p>
                    <a href="https://maps.google.com" target="_blank" class="text-pink-500 font-semibold">View on Map</a>
                </div>
                <div class="store-card bg-white text-gray-800 p-6 rounded-lg shadow-lg">
                    <img src="{{asset('assets/img/franchise.jpg')}}" alt="Store Image" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold">Ice Cream Delight - New Delhi</h3>
                    <p class="text-sm mb-2">123, Main Street, NY 10001</p>
                    <a href="https://maps.google.com" target="_blank" class="text-pink-500 font-semibold">View on Map</a>
                </div>
            </div>
        </div>
    </section>    

    <!-- Ice Cream Gallery Section -->
    <section class="py-24">
    <div class="text-center mb-10">
        <h2 class="text-2xl md:text-4xl font-semibold text-pink-500 mb-5 font-pacifico animate-bounce">🍦 Ice Cream Gallery 🍦</h2>
        <p class="mt-2 poppins-regular">Explore our delicious ice cream flavors and varieties!</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-6">
        <!-- Gallery Item -->
        <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg">
            <img src="{{ asset('assets/img/ice-1.png') }}" alt="Ice Cream" class="w-full h-64 object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
            
            <!-- Dark Overlay on Hover -->
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <button class="text-white text-4xl" onclick="openGallery(0)">🔍</button>
            </div>
        </div>

        <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg">
            <img src="{{ asset('assets/img/ice-2.png') }}" alt="Ice Cream" class="w-full h-64 object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
            
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <button class="text-white text-4xl" onclick="openGallery(1)">🔍</button>
            </div>
        </div>

        <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg">
            <img src="{{ asset('assets/img/ice-3.png') }}" alt="Ice Cream" class="w-full h-64 object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
            
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <button class="text-white text-4xl" onclick="openGallery(2)">🔍</button>
            </div>
        </div>
        <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg">
            <img src="{{ asset('assets/img/ice-1.png') }}" alt="Ice Cream" class="w-full h-64 object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
            
            <!-- Dark Overlay on Hover -->
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <button class="text-white text-4xl" onclick="openGallery(0)">🔍</button>
            </div>
        </div>

        <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg">
            <img src="{{ asset('assets/img/ice-2.png') }}" alt="Ice Cream" class="w-full h-64 object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
            
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <button class="text-white text-4xl" onclick="openGallery(1)">🔍</button>
            </div>
        </div>

        <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg">
            <img src="{{ asset('assets/img/ice-3.png') }}" alt="Ice Cream" class="w-full h-64 object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
            
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <button class="text-white text-4xl" onclick="openGallery(2)">🔍</button>
            </div>
        </div>
    </div>
    </section>

    <!-- Image Popup Modal -->
    <div id="galleryModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center hidden z-50">
        <button class="absolute top-5 right-5 text-white text-3xl" onclick="closeGallery()"><i class="ri-close-circle-line text-3xl"></i></button>

        <button id="prevBtn" class="absolute left-5 text-white text-3xl bg-gray-700 w-10 h-10 md:w-16 md:h-16 grid place-items-center rounded-full hover:bg-gray-600 transition" onclick="prevImage()"><i class="ri-arrow-left-s-line text-xl md:text-3xl"></i></button>
        
        <img id="galleryImage" src="" class="max-w-full max-h-screen object-contain">

        <button id="nextBtn" class="absolute right-5 text-white text-3xl bg-gray-700 w-10 h-10 md:w-16 md:h-16 grid place-items-center rounded-full hover:bg-gray-600 transition" onclick="nextImage()"><i class="ri-arrow-right-s-line text-xl md:text-3xl"></i></button>
    </div>

    <!-- Franchise Inquiry Section -->
    <section id="franchise-inquiry" class="bg-gradient-to-r from-blue-400 to-purple-500 py-20 px-6 md:px-10 xl:px-20 text-white text-center">
        <div class="">
            <h2 class="text-2xl md:text-4xl font-semibold text-white-500 mb-5 font-pacifico animate-bounce">🍦 Become Our Franchise Partner! 🍦</h2>
            <p class="mb-8 poppins-regular">Join our growing family and bring the joy of our delicious ice creams to your city. Fill the form below to get started!</p>
            
            <div class="grid grid-cols-2 gap-7 md:gap-5 xl:gap-10 lg:bg-white lg:p-10 rounded-lg">
                <div class="col-span-2 lg:col-span-1 items-center hidden lg:flex">
                    <img src="{{ asset('assets/img/franchise.jpg')}}" alt="" class="w-full h-full object-cover rounded-lg">
                </div>

                <div class="col-span-2 lg:col-span-1 bg-white px-5 py-8 md:p-8 rounded-lg shadow-lg text-gray-800">
                    <h2 class="text-lg md:text-2xl font-semibold text-white-500 mb-5 poppins-regular">Franchise Inquery</h2>
                    <!-- Inquiry Form -->
                    <form id="franchise-form">
                        <div class="grid grid-cols-2 gap-5">
                            <!-- Name -->
                            <div class="flex flex-col items-start col-span-2 sm:col-span-1">
                                <label class="font-semibold text-sm poppins-regular mb-2">Full Name</label>
                                <input type="text" id="name" class=" text-sm w-full p-3 border rounded-lg" placeholder="Enter your name" required>
                            </div>
                            <!-- Phone -->
                            <div class="flex flex-col items-start col-span-2 sm:col-span-1">
                                <label class="font-semibold text-sm poppins-regular mb-2">Phone Number</label>
                                <input type="tel" id="phone" class=" text-sm w-full p-3 border rounded-lg" placeholder="Enter your phone" required>
                            </div>
                            <!-- Email -->
                            <div class="flex flex-col items-start col-span-2">
                                <label class="font-semibold mb-2 text-sm poppins-regular">Email Address</label>
                                <input type="email" id="email" class=" text-sm w-full p-3 border rounded-lg" placeholder="Enter your email" required>
                            </div>
                            <!-- City -->
                            <div class="flex flex-col items-start col-span-2">
                                <label class="font-semibold mb-2 text-sm poppins-regular">City</label>
                                <input type="text" id="city" class=" text-sm w-full p-3 border rounded-lg" placeholder="Enter your city" required>
                            </div>
                            <!-- Message -->
                            <div class="flex flex-col items-start col-span-2">
                                <label class="font-semibold mb-2 text-sm poppins-regular">Tell Us About Your Interest</label>
                                <textarea id="message" rows="4" class=" text-sm w-full p-3 border rounded-lg" placeholder="Why do you want to start a franchise?" required></textarea>
                            </div>
                            
                            <!-- Submit Button -->
                            <button type="submit" class="poppins-regular col-span-2 w-full bg-pink-500 text-white py-3 rounded-lg font-semibold shadow-md hover:bg-pink-700 transition-all">Submit Inquiry</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonial-section" class="py-32 overflow-hidden bg-[#f8f8f8] poppins-regular">
        <div class="px-6 md:px-24 lg:px-52 xl:px-72">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-semibold text-pink-500 font-pacifico animate-bounce">What Our Clients Say</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto poppins-regular">
                    Hear from our satisfied clients who have experienced exceptional results with our services.
                </p>
            </div>
            <div class="tesitmonal_container gap-10 mt-10">
                <div class="owl-carousel owl-theme w-full">
                    <div class="item transition-transform duration-300">
                        <div class="group testimonal_card sm:h-64 h-80 bg-white rounded-lg transition-all duration-300 p-6 md:p-10 cursor-pointer">
                            <p class="text-black poppins-regular text-md transition-all duration-300">
                                "The best ice cream experience ever! The flavors are rich, creamy, and absolutely delightful. The customer service is top-notch, and I always look forward to my next visit!"
                            </p>
                            <div class="user_detail_container flex gap-5 mt-5 items-center">
                                <img src="{{asset('assets/img/testimonial-1.jpg')}}" alt="" class="!w-20">
                                <div class="user_details">
                                    <h5 class="text-pink-400 font-pacifico text-lg transition-all duration-300">Sophia Carter</h5>
                                    <p class="text-black poppins-regular text-sm font-semibold">Ice Cream Lover</p>
                                    <div class="flex gap-1">
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-half-line text-yellow-400 text-lg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item transition-transform duration-300">
                        <div class="group testimonal_card sm:h-64 h-80 bg-white rounded-lg transition-all duration-300 p-6 md:p-10 cursor-pointer">
                            <p class="text-black poppins-regular text-md transition-all duration-300">
                                "Becoming a franchise owner was the best decision! The support, training, and brand reputation made it easy to succeed. My store is thriving, and customers love the premium ice cream!"
                            </p>
                            <div class="user_detail_container flex gap-5 mt-5 items-center">
                                <img src="{{asset('assets/img/testimonial-2.jpg')}}" alt="" class="!w-20">
                                <div class="user_details">
                                    <h5 class="text-pink-400 font-pacifico text-lg transition-all duration-300">Michael Brown</h5>
                                    <p class="text-black poppins-regular text-sm font-semibold">Franchise Owner</p>
                                    <div class="flex gap-1">
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-half-line text-yellow-400 text-lg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item transition-transform duration-300">
                        <div class="group testimonal_card sm:h-64 h-80 bg-white rounded-lg transition-all duration-300 p-6 md:p-10 cursor-pointer">
                            <p class="text-black poppins-regular text-md transition-all duration-300">
                                "The online ordering system is so convenient! I get my favorite ice creams delivered fresh and fast. The service is amazing, and they truly care about their customers."
                            </p>
                            <div class="user_detail_container flex gap-5 mt-5 items-center">
                                <img src="{{asset('assets/img/testimonial-3.jpg')}}" alt="" class="!w-20">
                                <div class="user_details">
                                    <h5 class="text-pink-400 font-pacifico text-lg transition-all duration-300">Emma Wilson</h5>
                                    <p class="text-black poppins-regular text-sm font-semibold">Happy Customer</p>
                                    <div class="flex gap-1">
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-fill text-yellow-400 text-lg"></i>
                                        <i class="ri-star-half-line text-yellow-400 text-lg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button to Open Review Modal -->
            <div class="mt-8 w-full">
                <button id="openReviewModal" class="w-full bg-pink-500 text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-pink-700 transition-all duration-300">
                    Share Your Review
                </button>
            </div>
        </div>
        <!-- Review Modal (Popup) -->
        <div id="reviewModal" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-md z-50 hidden">
            <div class="flex justify-center items-center min-h-screen">
                <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg relative">
                    <button id="closeModal" class="absolute top-4 right-4 text-gray-600 hover:text-red-500">
                        <i class="ri-close-circle-fill text-2xl"></i>
                    </button>
                    <h3 class="text-3xl font-bold mb-6 text-center text-gray-800">Submit Your Review</h3>

                    <!-- Review Form -->
                    <form>
                        <div class="mb-4">
                            <label for="rating" class="text-gray-700 font-medium text-sm">Rating</label>
                            <select class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-pink-500 text-sm" required>
                                <option value="5">⭐⭐⭐⭐⭐ - Excellent</option>
                                <option value="4">⭐⭐⭐⭐ - Good</option>
                                <option value="3">⭐⭐⭐ - Average</option>
                                <option value="2">⭐⭐ - Poor</option>
                                <option value="1">⭐ - Bad</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="review" class="text-gray-700 font-medium text-sm">Your Review</label>
                            <textarea id="review" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-pink-500 text-sm" rows="4" placeholder="Write your feedback here..."></textarea>
                        </div>
                        <div class="mb-4">
                            <input type="file" class="w-full p-3 bg-pink-500 text-white text-sm">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="bg-pink-500 text-white px-8 py-3 rounded-md hover:bg-pink-600 transition-all duration-300 text-sm">Submit Review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- blog section --}}
    <section class="bg-[#fce4ec] py-32">
        <div class="px-5 lg:px-20">
            <h2 class="text-2xl md:text-4xl font-semibold text-pink-500 mb-20 font-pacifico text-center animate-bounce">🍦 Latest Ice Cream News & Recipes 🍨</h2>
    
            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
                <!-- Blog Card 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('assets/img/ice-6.png')}}" alt="New Ice Cream Trends" class="w-full h-52 object-cover">
                    <div class="p-5">
                         <!-- Date Badge -->
                        <div class="bg-pink-500 text-white text-xs font-semibold px-3 py-1 rounded-full inline-block mb-3">
                            📅 Jan 30, 2025
                        </div>
                        <h3 class="text-lg font-semibold text-pink-500 poppins-regular">🌟 New Ice Cream Trends in 2025</h3>
                        <p class="text-gray-600 mt-2 poppins-regular">Discover the latest flavors, textures, and unique ice cream innovations taking over this year!</p>
                        <a href="#" class="bg-pink-500 text-sm text-white py-3 px-5 rounded-lg font-semibold mt-3 inline-block  poppins-regular">Read More →</a>
                    </div>
                </div>
    
                <!-- Blog Card 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('assets/img/ice-5.png')}}" alt="Homemade Ice Cream Recipe" class="w-full h-52 object-cover">
                    <div class="p-5">
                         <!-- Date Badge -->
                        <div class="bg-pink-500 text-white text-xs font-semibold px-3 py-1 rounded-full inline-block mb-3">
                            📅 Jan 30, 2025
                        </div>
                        <h3 class="text-lg font-semibold text-pink-500 poppins-regular">🍨 Homemade Ice Cream Recipe</h3>
                        <p class="text-gray-600 mt-2 poppins-regular">Learn how to make delicious homemade ice cream with just 3 ingredients! Easy & fun.</p>
                        <a href="#" class="bg-pink-500 text-sm text-white py-3 px-5 rounded-lg font-semibold mt-3 inline-block  poppins-regular">Read More →</a>
                    </div>
                </div>
    
                <!-- Blog Card 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('assets/img/ice-4.png')}}" alt="Brand New Ice Cream Launch" class="w-full h-52 object-cover">
                    <div class="p-5">
                         <!-- Date Badge -->
                        <div class="bg-pink-500 text-white text-xs font-semibold px-3 py-1 rounded-full inline-block mb-3">
                            📅 Jan 30, 2025
                        </div>
                        <h3 class="text-lg font-semibold text-pink-500 poppins-regular">🚀 New Ice Cream Flavors Launched!</h3>
                        <p class="text-gray-600 mt-2 poppins-regular">We’ve just introduced 5 new mouth-watering flavors. Find out which one suits your taste!</p>
                        <a href="#" class="bg-pink-500 text-sm text-white py-3 px-5 rounded-lg font-semibold mt-3 inline-block  poppins-regular">Read More →</a>
                    </div>
                </div>
            </div>
    
            <!-- View More Button -->
            <div class="text-center mt-12">
                <a href="#" class="bg-pink-500 text-white px-6 py-3 rounded-md font-semibold shadow-md hover:bg-pink-700 transition duration-300 poppins-regular">
                    View All Blogs 🍦
                </a>
            </div>
        </div>
    </section>

    <!--  Contact Us & Support Section -->
    <section id="contact-support" class="bg-[#f8f8f8] py-20 px-5 md:px-10 lg:px-20">
        <div class="container mx-auto">
            <h2 class="text-2xl md:text-4xl font-semibold text-white-500 mb-5 font-pacifico animate-bounce text-pink-500 text-center">Contact Us</h2>
            
            <div class="w-full flex justify-center">
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-lg shadow-lg w-full md:w-[600px] lg:w-[700px]">
                    <h3 class="text-xl md:text-2xl font-semibold mb-4 text-gray-800 poppins-regular">Send us a message</h3>
                    <form id="contact-form">
                        <div class="grid grid-cols-2 gap-5">
                            <div class="col-span-2 sm:col-span-1">
                                <input type="text" id="name" class="w-full p-3 border rounded-lg poppins-regular text-sm" placeholder="Your Name" required>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <input type="text" id="mobile" class="w-full p-3 border rounded-lg poppins-regular text-sm" placeholder="Your Mobile" required>
                            </div>
                            <div class="col-span-2">
                                <input type="email" id="email" class="w-full p-3 border rounded-lg poppins-regular text-sm" placeholder="Your Email" required>
                            </div>
                            <div class="col-span-2">
                                <textarea id="message" rows="4" class="w-full p-3 border rounded-lg poppins-regular text-sm" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="col-span-2">
                                <button type="submit" class="w-full bg-pink-500 text-white py-3 rounded-lg font-semibold hover:bg-pink-600 transition-all">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                {{-- <!-- FAQs Section -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Frequently Asked Questions</h3>
                    <div class="space-y-4">
                        <div class="faq-item border-b pb-2 cursor-pointer">
                            <h4 class="faq-question font-semibold text-gray-700 flex justify-between items-center">How can I track my order? <i class="ri-arrow-down-s-line"></i></h4>
                            <p class="faq-answer text-gray-600 hidden">You can track your order from your account dashboard under 'My Orders' section.</p>
                        </div>
                        <div class="faq-item border-b pb-2 cursor-pointer">
                            <h4 class="faq-question font-semibold text-gray-700 flex justify-between items-center">Do you offer home delivery? <i class="ri-arrow-down-s-line"></i></h4>
                            <p class="faq-answer text-gray-600 hidden">Yes, we provide home delivery in selected locations.</p>
                        </div>
                        <div class="faq-item border-b pb-2 cursor-pointer">
                            <h4 class="faq-question font-semibold text-gray-700 flex justify-between items-center">How to apply for a franchise? <i class="ri-arrow-down-s-line"></i></h4>
                            <p class="faq-answer text-gray-600 hidden">You can apply for a franchise through our Franchise Inquiry Form.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- footer --}}
    @section('footer')
        @include('frontend.partials.footer')
    @endsection

    @section('extra-scripts')
        <!-- jQuery and Owl Carousel JS (Only for Home Page) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
        
        <script src="{{ asset('assets/js/script.js') }}"></script>
    @endsection

@endsection 