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

        <!-- Filter Dropdown Button -->
        <div class=" flex justify-center md:justify-end mb-10 px-5 md:px-10">
            <div class="w-fit relative">
                <button id="filter-toggle" class="bg-pink-500 text-white px-7 py-2 rounded-lg shadow-md hover:bg-pink-600 transition-all">Filter Categories <i class="ri-arrow-down-s-line"></i></button>
                <div id="filter-dropdown" class="hidden z-30 absolute bg-white shadow-lg rounded-lg mt-2 py-2 w-full left-1/2 transform -translate-x-1/2 p-2">
                    <button class="filter-btn w-full text-left px-3 py-2 hover:bg-pink-500 hover:text-white rounded-md transition-all" data-category="all">All</button>
                    <button class="filter-btn w-full text-left px-3 py-2 hover:bg-pink-500 hover:text-white rounded-md transition-all" data-category="classic_flavors">Classic Flavors</button>
                    <button class="filter-btn w-full text-left px-3 py-2 hover:bg-pink-500 hover:text-white rounded-md transition-all" data-category="premium_flavors">Premium Flavors</button>
                    <button class="filter-btn w-full text-left px-3 py-2 hover:bg-pink-500 hover:text-white rounded-md transition-all" data-category="comobs_&_specials">Combos & Specials</button>
                </div>
            </div>
        </div>
        <div class="px-5 md:px-10">
            <h2 class="text-2xl md:text-4xl font-semibold text-white-500 mb-10 font-pacifico text-pink-500 text-center">
                Our Ice Cream Flavors
            </h2>
    
            <div class="relative">
                <!-- Left Scroll Button -->
                <button id="scrollLeft" class="absolute left-0 top-1/2 -translate-y-1/2 bg-pink-500 text-white grid place-items-center w-10 h-10 md:w-14 md:h-14 rounded-full shadow-md z-20 hover:bg-pink-600 transition">
                    <i class="ri-arrow-left-s-line text-2xl"></i>
                </button>
    
                <!-- Scrollable Flavors Container -->
                <div id="flavorScroll" class="flex overflow-x-auto py-4 cursor-grab active:cursor-grabbing scroll-smooth scrollbar-hide">
                    
                    <!-- Single Flavor Cards -->
                    <a href="" class="mx-2 transition-all duration-300 hover:scale-105">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-xs sm:text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Chocolate</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-1.jpg') }}" alt="Chocolate" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="" class="mx-2 transition-all duration-300 hover:scale-105">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-xs sm:text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Vanilla</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-2.jpg') }}" alt="Vanilla" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="" class="mx-2 transition-all duration-300 hover:scale-105">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-xs sm:text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Strawberry</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-3.jpg') }}" alt="Strawberry" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="" class="mx-2 transition-all duration-300 hover:scale-105">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-xs sm:text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Mango</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-4.jpg') }}" alt="Mango" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="" class="mx-2 transition-all duration-300 hover:scale-105">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-xs sm:text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Pistachio</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-5.jpg') }}" alt="Pistachio" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="" class="mx-2 transition-all duration-300 hover:scale-105">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-xs sm:text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Cookies & Cream</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-6.jpg') }}" alt="Cookies & Cream" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
    
                    <a href="" class="mx-2 transition-all duration-300 hover:scale-105">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-xs sm:text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Blueberry</p>
                                </div>
                                <img src="{{ asset('assets/img/portfolio-1.jpg') }}" alt="Blueberry" class="w-28 sm:w-48 h-28 sm:h-48 rounded-md object-cover">
                            </div>
                            
                        </div>
                    </a>
        
                    <a href="" class="mx-2 transition-all duration-300 hover:scale-105">
                        <div class="min-w-[120px] sm:min-w-[192px] flex flex-col items-center">
                            <div class="bg-white rounded-md shadow-lg grid place-items-center relative overflow-hidden">
                                <div class="w-full h-full z-10 absolute top-0 left-0">
                                    <div class="w-full h-full bg-black opacity-50 z-10 absolute top-0 left-0"></div>
                                    <p class="text-white text-xs sm:text-sm font-semibold md:text-base text-nowrap z-30 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Mint Chocolate</p>
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

        <!-- flavors Section -->
        <div class="pb-16 pt-16 md:pt-32 px-5 md:px-10 lg:px-20 poppins-regular">
            <div class="mx-auto">
                <h2 class="text-sm md:text-2xl font-semibold text-pink-500 mb-8 font-pacifico">Our Best Flavored Ice Creams</span></h2>
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
        </div>
    </section>


    {{-- footer --}}
    @section('footer')
        @include('frontend.partials.footer')
    @endsection

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            // product categories
            document.getElementById("filter-toggle").addEventListener("click", function() {
                document.getElementById("filter-dropdown").classList.toggle("hidden");
            });

            document.querySelectorAll(".filter-btn").forEach(button => {
                button.addEventListener("click", () => {
                    document.getElementById("filter-dropdown").classList.add("hidden");
                    alert("Filtering feature will be implemented soon!");
                });
            });
            const flavorScroll = document.getElementById("flavorScroll");
            const scrollLeft = document.getElementById("scrollLeft");
            const scrollRight = document.getElementById("scrollRight");

            let isDown = false;
            let startX;
            let scrollLeftPosition;

            // Get the first flavor card to determine scroll width
            function getCardWidth() {
                const firstCard = flavorScroll.querySelector("a");
                if (firstCard) {
                    return firstCard.offsetWidth + parseInt(window.getComputedStyle(firstCard).marginRight);
                }
                return 200; // Default width if no card found
            }

            // Scroll left and right
            function scroll(direction) {
                const scrollAmount = getCardWidth(); // Get the dynamic card width
                flavorScroll.scrollBy({
                    left: direction === "left" ? -scrollAmount : scrollAmount,
                    behavior: "smooth",
                });
            }

            // Click event listeners for scroll buttons
            scrollLeft.addEventListener("click", () => scroll("left"));
            scrollRight.addEventListener("click", () => scroll("right"));

            // Drag-to-scroll functionality (for smooth scrolling)
            flavorScroll.addEventListener("mousedown", (e) => {
                isDown = true;
                startX = e.pageX - flavorScroll.offsetLeft;
                scrollLeftPosition = flavorScroll.scrollLeft;
                flavorScroll.classList.add("active");
            });

            flavorScroll.addEventListener("mouseleave", () => {
                isDown = false;
                flavorScroll.classList.remove("active");
            });

            flavorScroll.addEventListener("mouseup", () => {
                isDown = false;
                flavorScroll.classList.remove("active");
            });

            flavorScroll.addEventListener("mousemove", (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - flavorScroll.offsetLeft;
                const walk = (x - startX) * 2;
                flavorScroll.scrollLeft = scrollLeftPosition - walk;
            });

            // Touch scroll support for mobile
            flavorScroll.addEventListener("touchstart", (e) => {
                startX = e.touches[0].clientX;
                scrollLeftPosition = flavorScroll.scrollLeft;
            });

            flavorScroll.addEventListener("touchmove", (e) => {
                const x = e.touches[0].clientX;
                const walk = (x - startX) * 2;
                flavorScroll.scrollLeft = scrollLeftPosition - walk;
            });
        });

    </script>

@endsection 