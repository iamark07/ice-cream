<!-- Header Section -->
<header class="fixed z-40 w-full bg-gradient-to-r from-pink-500/80 via-blue-300/80 to-pink-500/80 shadow-lg backdrop-blur-lg overflow-hidden">
    <div class="flex justify-between items-center px-6 md:px-10 py-4">
        <!-- Left Section: Social Icons -->
        <div class="animate hidden lg:flex gap-6">
            <a href="#" class="text-lg text-white hover:text-pink-500 transition"><i class="ri-facebook-fill text-xl"></i></a>
            <a href="#" class="text-lg text-white hover:text-pink-500 transition"><i class="ri-instagram-line text-xl"></i></a>
            <a href="#" class="text-lg text-white hover:text-pink-500 transition"><i class="ri-twitter-line text-xl"></i></a>
        </div>

        <!-- Center Section: Logo and Navigation -->
        <div class="animate flex items-center">
            <nav class="hidden lg:flex gap-6">
                <a href="{{ route('home') }}" class="hover:text-pink-500 text-white transition poppins-regular">Home</a>
                <a href="{{ route('about') }}" class="hover:text-pink-500 text-white transition poppins-regular">About</a>
                <a href="{{ route('services') }}" class="hover:text-pink-500 text-white transition poppins-regular">Services</a>
            </nav>
            <h1 class="text-xl md:text-2xl font-pacifico text-pink-700 px-0 lg:px-10"><a href="{{ route('home') }}">Ice Cream</a></h1>
            <nav class="hidden lg:flex gap-6">
                <a href="{{ route('shop') }}" class="hover:text-pink-500 text-white transition poppins-regular">Shop</a>
                <a href="{{ route('flavors') }}" class="hover:text-pink-500 text-white transition poppins-regular">Flavors</a>
                <a href="{{ route('contact') }}" class="hover:text-pink-500 text-white transition poppins-regular">Contact</a>
            </nav>
        </div>

        <!-- Right Section: Cart, Login, Multi-Language & Currency Selector -->
        <div class="animate hidden lg:flex gap-6 items-center">
            <i class="search_icon ri-search-line text-white text-xl cursor-pointer" title="Search"></i>
            <a href="{{ route('wishlist') }}" title="Wishlist" class="text-lg transition relative">
                <span class="text-[10px] bg-white flex justify-center items-center w-5 h-5 rounded-full absolute -top-2 -right-2 font-semibold">1</span><i class="ri-heart-2-line text-white text-xl"></i>
            </a>
            <a href="{{ route('cart') }}" title="Cart" class="text-lg transition relative">
                <span class="text-[10px] bg-white flex justify-center items-center w-5 h-5 rounded-full absolute -top-2 -right-2 font-semibold">2</span><i class="ri-shopping-cart-line text-white text-xl"></i>
            </a>

            <!-- Profile Dropdown -->
            <div class="relative">
                <div id="profile-icon" class="profile w-10 h-10 bg-white rounded-full grid place-items-center cursor-pointer">
                    <i class="ri-user-line text-xl text-pink-600" title="Profile"></i>
                </div>

                <!-- Dropdown Menu -->
                <div id="profile-dropdown"
                    class="absolute right-0 mt-3 w-44 bg-white rounded-lg shadow-lg opacity-0 scale-95 transform origin-top-right transition-all duration-300 ease-in-out hidden">
                    <ul class="p-2 text-gray-700">
                        <li class="p-2 hover:bg-gray-100 rounded transition text-sm"><a href="profile.html"><i class="ri-user-2-line text-pink-400 me-2"></i>My Profile</a></li>
                        <li class="p-2 hover:bg-gray-100 rounded transition text-sm"><a href="orders.html"><i class="ri-shopping-bag-line text-pink-400 me-2"></i>My Orders</a></li>
                        <li class="p-2 hover:bg-gray-100 rounded transition text-sm"><a href="orders.html"><i class="ri-user-settings-line text-pink-400 me-2"></i>Admin Panel</a></li>
                        <li class="relative">
                            <div id="language-btn" class="p-2 hover:bg-gray-100 rounded transition flex justify-between cursor-pointer text-sm"><span><i class="ri-global-line text-pink-400 me-2"></i>Language </span><i class="ri-arrow-right-s-line"></i>
                            </div>
                            <!-- Language Dropdown -->
                            <ul id="language-dropdown"
                                class="absolute p-2 right-full top-1/2 mt-[-18px] w-36 bg-white rounded-lg shadow-lg scale-95 transform origin-left transition-all duration-300 ease-in-out hidden">
                                <li class="p-2 hover:bg-gray-100 rounded transition text-sm"><a href="?lang=en" class="flex">English</a></li>
                                <li class="p-2 hover:bg-gray-100 rounded transition text-sm"><a href="?lang=hi" class="flex">Hindi</a></li>
                                <li class="p-2 hover:bg-gray-100 rounded transition text-sm"><a href="?lang=fr" class="flex">French</a></li>
                            </ul>
                        </li>
                        <li class="relative">
                            <div id="currency-btn" class="p-2 hover:bg-gray-100 rounded transition flex justify-between cursor-pointer text-sm"><span><i class="ri-hand-coin-line text-pink-400 me-2"></i>Currency</span> <i class="ri-arrow-right-s-line"></i>
                            </div>
                            <!-- Currency Dropdown -->
                            <ul id="currency-dropdown"
                                class="absolute p-2 right-full top-1/2 mt-[-18px] w-36 bg-white rounded-lg shadow-lg scale-95 transform origin-left transition-all duration-300 ease-in-out hidden">
                                <li class="p-2 hover:bg-gray-100 rounded transition text-sm"><a href="?currency=usd" class="flex">USD</a></li>
                                <li class="p-2 hover:bg-gray-100 rounded transition text-sm"><a href="?currency=inr" class="flex">INR</a></li>
                                <li class="p-2 hover:bg-gray-100 rounded transition text-sm"><a href="?currency=eur" class="flex">EUR</a></li>
                            </ul>
                        </li>

                        <li class="p-2 hover:bg-gray-100 rounded transition text-sm"><a href="{{ route('login') }}" class="flex"><i class="ri-login-box-line text-pink-400 me-2"></i>Log in</a></li>
                        <li class="p-2 hover:bg-gray-100 rounded transition text-sm"><a href=""><i class="ri-logout-box-line text-pink-400 me-2"></i>Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Hamburger and search Icon for Mobile -->
        <div class="flex lg:hidden items-center gap-6 animate">
            <i class="search_icon ri-search-line hover:text-pink-500 text-white text-xl cursor-pointer" title="Search"></i>
            <a href="{{ route('cart') }}"  title="Cart" class="text-lg transition relative">
                <span class="text-[10px] bg-white flex justify-center items-center w-5 h-5 rounded-full absolute -top-2 -right-2 font-semibold">2</span>
                <i class="ri-shopping-cart-line hover:text-pink-500 text-white text-xl"></i>
            </a>
            <div id="menu-toggle" class=" text-2xl text-white"><i class="ri-menu-line"></i></div>
        </div>
    </div>
</header>


<!-- Search Popup -->
<div id="search-popup"
    class="fixed top-0 left-0 z-50 w-full h-full bg-black/40 backdrop-blur-sm flex justify-center items-center opacity-0 invisible transition-all duration-300 px-5 md:px-0">
    <div class="w-full flex justify-center">
        <div class="relative w-full md:w-fit">
            <form action="" class="flex gap-2 bg-white p-4 md:p-5 rounded-lg shadow-lg w-full md:w-[550px]">
                <input type="text" class="w-full p-2 md:p-3 border border-gray-300 rounded-md outline-none" placeholder="Search here...">
                <button type="submit" class="py-2 md:py-3 px-3 md:px-5 bg-pink-400 rounded-md text-white flex items-center justify-center gap-2"><i class="ri-search-line text-xl" title="Search"></i><span class="hidden md:block">Search</span></button>
            </form>
            <button id="close-search" class="absolute -top-20 -right-0 md:-top-20 md:right-0 z-10 text-gray-600 hover:text-red-500">
                <i class="ri-close-line text-2xl text-white"></i>
            </button>
        </div>
    </div>
</div>

<!-- Mobile Menu -->
<div id="mobile-menu"
    class="lg:hidden fixed top-0 left-0 w-full h-[100dvh] transform -translate-x-full transition-transform duration-300 ease-in-out z-50 flex">
    <div class="w-3/4 h-full bg-pink-200 shadow-lg relative p-5">
        <button id="menu-close" class="absolute top-4 right-4 text-2xl text-gray-700"><i class="ri-close-line"></i></button>
        <h1 class="text-xl md:text-2xl font-pacifico text-pink-700 px-0 md:px-10">
            <a href="{{ route('home') }}">Ice Cream</a>
        </h1>

        <nav class="flex flex-col mt-14 gap-6 text-lg text-gray-800 overflow-auto" style="height: calc(100dvh - 124px);">
            <a href="{{ route('home') }}" class="text-pink-500 transition"><i class="ri-home-5-line me-2 text-xl"></i>Home</a>
            <a href="{{ route('about') }}" class="hover:text-pink-500 transition"><i class="ri-information-line me-2 text-xl"></i>About</a>
            <a href="{{ route('services') }}" class="hover:text-pink-500 transition"><i class="ri-service-line me-2 text-xl"></i>Services</a>
            <a href="{{ route('shop') }}" class="hover:text-pink-500 transition"><i class="ri-store-line me-2 text-xl"></i>Shop</a>
            <a href="{{ route('flavors') }}" class="hover:text-pink-500 transition"><i class="ri-file-list-3-line me-2 text-xl"></i>Flavors</a>
            <a href="{{ route('wishlist') }}" class="hover:text-pink-500 transition"><i class="ri-heart-2-line me-2 text-xl"></i>Wishlist</a>
            <a href="{{ route('cart') }}" class="hover:text-pink-500 transition"><i class="ri-shopping-cart-line me-2 text-xl"></i>Cart</a>
            <!-- Profile Dropdown -->
            <div class="relative">
                <div id="mob-profile-toggle" class="flex items-center w-full text-left hover:text-pink-500 transition">
                    <i class="ri-user-line me-2 text-xl"></i> Profile <i class="ri-arrow-down-s-line ml-auto"></i>
                </div>
                <div id="mob-profile-dropdown" class="hidden flex flex-col p-2 bg-white shadow-lg mt-2 rounded-md">
                    <a href="profile.html" class="text-start px-4 py-2 hover:bg-pink-100"><i class="ri-user-2-line text-pink-400 text-lg me-2"></i>My Profile</a>
                    <a href="orders.html" class="text-start px-4 py-2 hover:bg-pink-100"><i class="ri-shopping-bag-line text-pink-400 text-lg me-2"></i>My Orders</a>
                    <a href="orders.html" class="text-start px-4 py-2 hover:bg-pink-100"><i class="ri-user-settings-line text-pink-400 text-lg me-2"></i>Admin Panel</a>
                    <a href="{{ route('login') }}" class="text-start px-4 py-2 hover:bg-pink-100"><i class="ri-login-box-line text-pink-400 text-lg me-2"></i>Log in</a>
                    <a href="" class="text-start px-4 py-2 hover:bg-pink-100"><i class="ri-logout-box-line text-pink-400 text-lg me-2"></i>Log out</a>
                </div>
            </div>

            <!-- Language Dropdown -->
            <div class="relative">
                <button id="mob-language-toggle" class="flex items-center w-full text-left hover:text-pink-500 transition">
                    <i class="ri-global-line me-2 text-xl"></i> Language <i class="ri-arrow-down-s-line ml-auto"></i>
                </button>
                <div id="mob-language-dropdown" class="hidden flex flex-col p-2 bg-white shadow-lg mt-2 rounded-md">
                    <button class="text-start px-4 py-2 hover:bg-pink-100">English</button>
                    <button class="text-start px-4 py-2 hover:bg-pink-100">हिन्दी</button>
                    <button class="text-start px-4 py-2 hover:bg-pink-100">Español</button>
                </div>
            </div>

            <!-- Currency Dropdown -->
            <div class="relative">
                <button id="mob-currency-toggle" class="flex items-center w-full text-left hover:text-pink-500 transition">
                    <i class="ri-hand-coin-line me-2 text-xl"></i> Currency <i class="ri-arrow-down-s-line ml-auto"></i>
                </button>
                <div id="mob-currency-dropdown" class="hidden flex flex-col p-2 bg-white shadow-lg mt-2 rounded-md">
                    <button class="text-start px-4 py-2 hover:bg-pink-100">USD ($)</button>
                    <button class="text-start px-4 py-2 hover:bg-pink-100">INR (₹)</button>
                    <button class="text-start px-4 py-2 hover:bg-pink-100">EUR (€)</button>
                </div>
            </div>
        </nav>
    </div>
    <span id="close-menu" class="w-1/4 h-full inline-block"></span>
</div>

<!-- Live Chatbot Button -->
<button id="chatbot-btn" class="cursor-pointer fixed z-30 bottom-6 left-6 bg-pink-500 text-sm text-white w-10 h-10 md:w-auto md:h-auto md:px-5 md:py-3 rounded-full shadow-lg hover:bg-pink-700 transition-all poppins-regular flex items-center justify-center gap-2">
    💬 <span class="hidden md:block">Live Chat</span>
</button>

<!-- Scroll to Top Button -->
<button id="scrollToTop" class="animate-bounce fixed z-20 bottom-6 right-6 bg-pink-500 text-white w-12 h-12 grid place-items-center rounded-full shadow-lg opacity-0 pointer-events-none transition-all hover:bg-pink-600">
    <i class="ri-arrow-up-s-line text-2xl"></i>
</button>


