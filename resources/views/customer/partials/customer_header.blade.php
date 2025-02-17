<!-- Header -->
<header class="bg-white sticky top-0 w-full z-40 shadow-lg p-4 flex justify-between items-center poppins-regular">
    <h2 class="text-xl font-bold text-gray-800 poppins-regular">Customer Dashboard</h2>

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
<div id="mobile_profile_menu" class="lg:hidden flex w-full fixed top-[64px] z-40 -left-full transition-all duration-300" style="height: calc(100dvh - 64px)">
    <div class="w-[75%] h-full p-5 bg-white shadow-lg">
        <!-- User Info & Logout -->
        <div class="flex items-center justify-center my-5 space-x-4">
            <span class="text-gray-700 font-medium">John Doe</span>
            <button class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-700">Log out</button>
        </div>
        <ul class="flex flex-col gap-1 overflow-auto py-3" style="height: calc(100dvh - 164px)">
            <li>
                <a href="{{ route('customer_dashboard') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg bg-pink-100">
                    <i class="ri-dashboard-line text-pink-500"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('customer_ticket_management')}}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="ri-user-line text-pink-500"></i>
                    <span>Tickets</span>
                </a>
            </li>
            <li>
                <a href="{{ route('customer_orders') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="ri-archive-line text-pink-500"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="{{ route('franchise_support') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="ri-bar-chart-line text-pink-500"></i>
                    <span>Franchise Support</span>
                </a>
            </li>
            <li>
                <a href="" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="ri-shopping-cart-line text-pink-500"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="ri-price-tag-3-line text-pink-500"></i>
                    <span>Promotions</span>
                </a>
            </li>
            <li>
                <a href="" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="ri-star-line text-pink-500"></i>
                    <span>Reviews</span>
                </a>
            </li>
            <li>
                <a href="" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="ri-team-line text-pink-500"></i>
                    <span>Employees</span>
                </a>
            </li>
            <li>
                <a href="" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="ri-customer-service-2-line text-pink-500"></i>
                    <span>Support</span>
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}" class="flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                    <i class="ri-arrow-left-line text-pink-500"></i>
                    <span>Back to Home</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="close_profile_menu_btn" class="w-[25%] h-full"></div>
</div>

<div class="flex poppins-regular">
    <!-- Sidebar Navigation -->
    <aside class="w-[20%] sticky top-[72px] z-40 hidden lg:block bg-white shadow-lg p-5 overflow-auto" style="height: calc(100dvh - 72px);">
        <nav class="space-y-1">
            <a href="{{ route('customer_dashboard') }}" class="text-sm flex items-center space-x-3 w-full p-3 rounded-lg bg-pink-100">
                <i class="ri-dashboard-line text-pink-500"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('customer_ticket_management') }}" class="text-sm flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                <i class="ri-user-line text-pink-500"></i>
                <span>Tickets</span>
            </a>
            <a href="{{ route('customer_orders') }}" class="text-sm flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                <i class="ri-archive-line text-pink-500"></i>
                <span>Orders</span>
            </a>
            <a href="{{ route('franchise_support') }}" class="text-sm flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                <i class="ri-bar-chart-line text-pink-500"></i>
                <span>Franchise Support</span>
            </a>
            <a href="" class="text-sm flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                <i class="ri-shopping-cart-line text-pink-500"></i>
                <span>Orders</span>
            </a>
            <a href="" class="text-sm flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                <i class="ri-price-tag-3-line text-pink-500"></i>
                <span>Promotions</span>
            </a>
            <a href="" class="text-sm flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                <i class="ri-star-line text-pink-500"></i>
                <span>Reviews</span>
            </a>
            <a href="" class="text-sm flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                <i class="ri-team-line text-pink-500"></i>
                <span>Employees</span>
            </a>
            <a href="" class="text-sm flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                <i class="ri-customer-service-2-line text-pink-500"></i>
                <span>Support</span>
            </a>
            <a href="{{ route('home') }}" class="text-sm flex items-center space-x-3 w-full p-3 rounded-lg hover:bg-pink-100">
                <i class="ri-arrow-left-line text-pink-500"></i>
                <span>Back to Home</span>
            </a>
        </nav>
    </aside>