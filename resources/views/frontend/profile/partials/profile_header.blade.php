<!-- Header -->
<header class="bg-white sticky top-0 w-full shadow-lg p-4 flex justify-between items-center poppins-regular">
    

    <h2 class="text-xl font-bold text-gray-800 poppins-regular">My Profile</h2>

    <!-- User Info & Logout -->
    <div class="hidden lg:flex items-center space-x-4">
        <span class="text-gray-700 font-medium">John Doe</span>
        <button class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-700">Log out</button>
    </div>
    <!-- Mobile Menu Icon -->
    <button id="menuToggle" class="lg:hidden text-gray-700 text-2xl">
        <i class="fas fa-bars"></i>
    </button>
</header>

{{-- mobile profile navs --}}

<div id="mobile_profile_menu" class="lg:hidden flex w-full fixed top-[64px] -left-full transition-all duration-300" style="height: calc(100dvh - 64px)">
    <div class="w-[75%] h-full p-5 bg-white shadow-lg">
        <!-- User Info & Logout -->
        <div class="flex items-center justify-center my-5 space-x-4">
            <span class="text-gray-700 font-medium">John Doe</span>
            <button class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-700">Log out</button>
        </div>
        <ul>
            <li>
                <a href="{{ route('profile') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg bg-pink-100">
                    <i class="fas fa-user text-pink-500"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('order_history') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="fas fa-box text-pink-500"></i>
                    <span>Order History</span>
                </a>
            </li>
            <li>
                <a href="{{ route('wishlist') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="fas fa-heart text-pink-500"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="{{ route('loyalty') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="ri-medal-fill text-pink-500"></i>
                    <span>Rewards & Points</span>
                </a>
            </li>
            <li>
                <a href="" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-red-100">
                    <i class="fas fa-cog text-pink-500"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="fas fa-arrow-left text-pink-500"></i>
                    <span>Back to Home</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="close_profile_menu_btn" class="w-[25%] h-full"></div>
</div>

<div class="flex poppins-regular">
    <!-- Sidebar Navigation -->
    <aside class="w-[20%] sticky top-[72px] hidden lg:block bg-white shadow-lg p-5" style="height: calc(100dvh - 72px);">
        <nav class="space-y-1">
            <a href="{{ route('profile') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg bg-pink-100" onclick="showSection('profile')">
                <i class="fas fa-user text-pink-500"></i>
                <span>Profile</span>
            </a>
            <a href="{{ route('order_history') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100" onclick="showSection('orders')">
                <i class="fas fa-box text-pink-500"></i>
                <span>Order History</span>
            </a>
            <a href="{{ route('wishlist') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100" onclick="showSection('wishlist')">
                <i class="fas fa-heart text-pink-500"></i>
                <span>Wishlist</span>
            </a>
            <a href="{{ route('loyalty') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100" onclick="showSection('settings')">
                <i class="ri-medal-fill text-pink-500"></i>
                <span>Rewards & Points </span>
            </a>
            <a href="" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100" onclick="showSection('settings')">
                <i class="fas fa-cog text-pink-500"></i>
                <span>Settings</span>
            </a>
            <a href="{{ route('home') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100" onclick="window.location.href='home.html'">
                <i class="fas fa-arrow-left text-pink-500"></i>
                <span>Back to Home</span>
            </a>
        </nav>
    </aside>
    