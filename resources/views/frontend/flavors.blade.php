@extends('frontend.partials.app')

@section('content')

    <!-- Breadcrumb Section -->
    <section class="relative w-full bg-cover bg-center poppins-regular" style="background-image: url('assets/img/header.jpg');">
        <div class="pt-48 pb-28 md:pt-56 md:pb-32 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white px-5">
            <h2 class="text-3xl md:text-5xl font-bold font-pacifico text-center">Browse Ice Cream Products</h2>
            <p class="mt-2 md:text-lg"><a href="{{ route('home') }}" class="text-center text-gray-300 hover:text-white">Home</a> / Flavors</p>
        </div>
    </section>

    {{-- popular flavors section --}}
    <section class="py-16 bg-[#f8f8f8] poppins-regular">
        <div class="px-5 md:px-10">
            <h2 class="text-2xl md:text-4xl font-semibold text-white-500 mb-10 font-pacifico text-pink-500 text-center">
                Popular Ice Cream Flavors
            </h2>
    
            <div class="relative">
                <!-- Left Scroll Button -->
                <button id="scrollLeft" class="absolute left-0 top-1/2 -translate-y-1/2 bg-pink-500 text-white grid place-items-center w-10 h-10 md:w-14 md:h-14 rounded-full shadow-md z-20 hover:bg-pink-600 transition">
                    <i class="ri-arrow-left-s-line text-2xl"></i>
                </button>
    
                <!-- Scrollable Flavors Container -->
                <div id="flavorScroll" class="flex gap-1 md:gap-5 overflow-x-auto px-5 py-4 cursor-grab active:cursor-grabbing scroll-smooth scrollbar-hide">
                    
                    <!-- Single Flavor Cards -->
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Chocolate</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-1.jpg') }}" alt="Chocolate" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Vanilla</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-2.jpg') }}" alt="Vanilla" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Strawberry</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-3.jpg') }}" alt="Strawberry" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Mango</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-4.jpg') }}" alt="Mango" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Pistachio</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-5.jpg') }}" alt="Pistachio" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Cookies & Cream</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-6.jpg') }}" alt="Cookies & Cream" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Blueberry</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-1.jpg') }}" alt="Blueberry" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
        
                    <a href="">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Mint Chocolate</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-2.jpg') }}" alt="Mint Chocolate" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
                </div>
    
                <!-- Right Scroll Button -->
                <button id="scrollRight" class="absolute right-0 top-1/2 -translate-y-1/2 bg-pink-500 text-white grid place-items-center w-10 h-10 md:w-14 md:h-14 rounded-full shadow-md z-20 hover:bg-pink-600 transition">
                    <i class="ri-arrow-right-s-line text-2xl"></i>
                </button>
            </div>
    
            {{-- <!-- More Flavors Button -->
            <div class="text-center mt-6">
                <a href="{{ route('flavors') }}" class="bg-pink-500 text-white py-2 px-6 rounded-md hover:bg-pink-600 transition">More Flavors</a>
            </div> --}}
        </div>
    </section>

    <!-- Ice Cream Categories -->
    <section class="py-20 px-6 md:px-10 xl:px-20">
        <h2 class="text-3xl font-bold text-center text-purple-600 mb-5">Our Delicious Categories</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="p-6 border rounded-lg shadow-lg text-center">
                <h3 class="text-xl font-semibold mb-3">🍦 Classic Flavors</h3>
                <p>Enjoy the timeless taste of vanilla, chocolate, and strawberry.</p>
            </div>
            <div class="p-6 border rounded-lg shadow-lg text-center">
                <h3 class="text-xl font-semibold mb-3">🍨 Premium Flavors</h3>
                <p>Indulge in exotic flavors like hazelnut, matcha, and salted caramel.</p>
            </div>
            <div class="p-6 border rounded-lg shadow-lg text-center">
                <h3 class="text-xl font-semibold mb-3">🍧 Combos & Specials</h3>
                <p>Try our delicious sundaes, shakes, and special ice cream blends.</p>
            </div>
        </div>
    </section>

    <!-- Ice Cream Flavors Listing -->
    <section class="py-20 px-6 md:px-10 xl:px-20 bg-gray-100">
        <h2 class="text-3xl font-bold text-center text-purple-600 mb-5">Explore Our Flavors</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="{{ asset('assets/img/flavors/vanilla.jpg') }}" alt="Vanilla" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-3">Vanilla Bliss</h3>
                <p>A creamy, classic vanilla ice cream loved by all.</p>
                <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-700">Order Now</button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="{{ asset('assets/img/flavors/chocolate.jpg') }}" alt="Chocolate" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-3">Choco Delight</h3>
                <p>Rich and creamy chocolate ice cream with a smooth texture.</p>
                <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-700">Order Now</button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <img src="{{ asset('assets/img/flavors/strawberry.jpg') }}" alt="Strawberry" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-3">Strawberry Swirl</h3>
                <p>Refreshing strawberry flavor with real fruit chunks.</p>
                <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-700">Order Now</button>
            </div>
        </div>
    </section>


    {{-- footer --}}
    @section('footer')
        @include('frontend.partials.footer')
    @endsection

    <script>
        // flavors scroll animation feature
        document.addEventListener("DOMContentLoaded", function () {
    const flavorScroll = document.getElementById("flavorScroll");
    const scrollLeft = document.getElementById("scrollLeft");
    const scrollRight = document.getElementById("scrollRight");

    let isDown = false;
    let startX;
    let scrollLeftPosition;

    // Drag-to-scroll functionality
    flavorScroll.addEventListener("mousedown", (e) => {
        isDown = true;
        startX = e.pageX - flavorScroll.offsetLeft;
        scrollLeftPosition = flavorScroll.scrollLeft;
    });

    flavorScroll.addEventListener("mouseleave", () => {
        isDown = false;
    });

    flavorScroll.addEventListener("mouseup", () => {
        isDown = false;
    });

    flavorScroll.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - flavorScroll.offsetLeft;
        const walk = (x - startX) * 2;
        flavorScroll.scrollLeft = scrollLeftPosition - walk;
    });

    // Get the width of a single flavor card (you can adjust the selector if necessary)
    const flavorCard = document.querySelector(".min-w-[120px]"); // Make sure this is the correct class for a single flavor card
    const scrollAmount = flavorCard.offsetWidth; // Set scrollAmount to the card width

    // Scroll buttons functionality (scrolls one card at a time)
    scrollLeft.addEventListener("click", () => {
        flavorScroll.scrollLeft -= scrollAmount;
    });

    scrollRight.addEventListener("click", () => {
        flavorScroll.scrollLeft += scrollAmount;
    });
});

    </script>

@endsection 