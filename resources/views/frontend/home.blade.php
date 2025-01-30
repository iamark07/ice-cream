<!-- Include Head -->
@include('frontend.partials.head')

<body class="text-gray-800 font-roboto overflow-x-hidden">
    {{-- hero section --}}
    <section class="hero_section relative w-full h-[100dvh]">
        <!-- Header Section -->
        <!-- Include Header -->
        @include('frontend.partials.header')
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

    <!-- Enhanced Brand Story Section -->
    <section id="brand-story" class="bg-gradient-to-r from-pink-500 to-yellow-400 py-28 md:py-20 text-center text-white relative overflow-hidden">
        <div class="container mx-auto px-6 md:px-16 relative z-10">
            <h2 class="text-2xl md:text-4xl font-extrabold mb-8 animate-fade-in animate-bounce">The Sweet Journey of Our Ice Cream</h2>
            
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
    <section id="trending-products" class="py-20 bg-white text-center">
        <div class="mx-auto px-5 md:px-10">
            <h2 class="text-2xl md:text-4xl font-semibold text-pink-500 mb-20 font-pacifico animate-bounce">Trending Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-8">
                <!-- Product Cards -->
                <div class="p-6 bg-white shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] rounded-lg transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('assets/img/trending.png')}}" class="w-full h-56 object-cover rounded-md" alt="Chocolate Ice Cream">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">Chocolate Ice Cream</h3>
                    <p class="text-pink-700 font-semibold">&#8377;5.99</p>
                    <button class="w-full mt-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition-all">Add to Cart</button>
                </div>
                <div class="p-6 bg-white shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] rounded-lg transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('assets/img/trending.png')}}" class="w-full h-56 object-cover rounded-md" alt="Chocolate Ice Cream">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">Chocolate Ice Cream</h3>
                    <p class="text-pink-700 font-semibold">&#8377;5.99</p>
                    <button class="w-full mt-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition-all">Add to Cart</button>
                </div>
                <div class="p-6 bg-white shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] rounded-lg transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('assets/img/trending.png')}}" class="w-full h-56 object-cover rounded-md" alt="Chocolate Ice Cream">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">Chocolate Ice Cream</h3>
                    <p class="text-pink-700 font-semibold">&#8377;5.99</p>
                    <button class="w-full mt-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition-all">Add to Cart</button>
                </div>
                <div class="p-6 bg-white shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] rounded-lg transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('assets/img/trending.png')}}" class="w-full h-56 object-cover rounded-md" alt="Chocolate Ice Cream">
                    <h3 class="text-xl font-semibold text-gray-800 mt-4">Chocolate Ice Cream</h3>
                    <p class="text-pink-700 font-semibold">&#8377;5.99</p>
                    <button class="w-full mt-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition-all">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offer Section -->
    <section id="special-offer" class="bg-gradient-to-r from-yellow-300 to-pink-400 mt-10 px-5 md:px-16 lg:px-32 py-20">
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

    <!-- Ice Cream Gallery Section -->
    <section class="bg-gradient-to-r from-blue-300 via-pink-200 to-yellow-200 py-16">
    <div class="text-center mb-10">
        <h2 class="text-2xl md:text-4xl font-bold text-pink-600 poppins-regular animate-bounce">🍦 Ice Cream Gallery 🍦</h2>
        <p class="mt-2">Explore our delicious ice cream flavors and varieties!</p>
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
                        <a href="#" class="bg-pink-500 text-sm text-white py-3 px-5 rounded-lg font-semibold mt-3 inline-block hover:underline poppins-regular">Read More →</a>
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
                        <a href="#" class="bg-pink-500 text-sm text-white py-3 px-5 rounded-lg font-semibold mt-3 inline-block hover:underline poppins-regular">Read More →</a>
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
                        <a href="#" class="bg-pink-500 text-sm text-white py-3 px-5 rounded-lg font-semibold mt-3 inline-block hover:underline poppins-regular">Read More →</a>
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


    <!-- Testimonial Section -->
    <section id="testimonial-section" class="py-32 overflow-hidden bg-gray-100">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      
      


    <section class="py-52"></section>
    <!-- jQuery and Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <script src="assets/js/script.js"></script>
</body>

</html>