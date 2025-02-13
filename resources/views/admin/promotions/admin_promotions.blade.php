@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow">
        <div class="mb-4 grid grid-cols-9 gap-3 items-center">
            <h2 class="order-1 col-span-9 sm:col-span-5 text-xl font-bold">Marketing & Promotions</h2>
            
            <!-- Action Buttons -->
            <div class="order-3 sm:order-2 col-span-9 md:col-span-4 flex gap-2 justify-end">
                <a href="{{route('new_camapaign')}}" class="w-1/2"><button class="bg-pink-500 w-full justify-center text-white px-1 sm:px-2 py-3 rounded text-xs flex items-center">
                    <i class="ri-megaphone-line mr-2"></i>New Campaign
                </button></a>
                <a href="{{route('new_offers')}}" class="w-1/2"><button class="bg-green-500 w-full justify-center text-white px-1 sm:px-2 py-3 rounded text-xs flex items-center">
                    <i class="ri-coupon-line mr-2"></i>New Offer
                </button></a>
            </div>

            <!-- Search Bar -->
            <div class="order-2 sm:order-3 col-span-9 sm:col-span-7 w-full relative flex">
                <input type="text" id="searchPromotions" placeholder="Search promotions..." class="outline-none border p-2 rounded-l w-full pl-10">
                <i class="ri-search-line absolute left-3 top-2.5 text-gray-500"></i>
                <button class="py-2 px-3 bg-pink-500 text-white rounded-r"><i class="ri-search-line"></i></button>
            </div>

            <!-- Status Filter -->
            <select id="filterStatus" class="text-xs sm:text-base order-4 col-span-9 sm:col-span-2 border p-2 rounded">
                <option value="">All Status</option>
                <option value="active">Active</option>
                <option value="expired">Expired</option>
                <option value="scheduled">Scheduled</option>
            </select>
        </div>

        <!-- Summary Cards -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-blue-100 flex flex-col items-center p-4 rounded-lg">
                <h3 class="text-[8px] md:text-sm text-gray-700">Total Campaigns</h3>
                <p class="text-sm md:text-xl font-bold">15</p>
            </div>
            <div class="bg-green-100 flex flex-col items-center p-4 rounded-lg">
                <h3 class="text-[8px] md:text-sm text-gray-700">Active Offers</h3>
                <p class="text-sm md:text-xl font-bold">8</p>
            </div>
            <div class="bg-purple-100 flex flex-col items-center p-4 rounded-lg">
                <h3 class="text-[8px] md:text-sm text-gray-700">Coupon Usage</h3>
                <p class="text-sm md:text-xl font-bold">1,234</p>
            </div>
        </div>

        <!-- Tabs Navigation -->
        <div class="flex border-b mb-4">
            <button data-tab="offers" class="tab-link px-4 py-2 font-medium text-gray-500 !text-pink-500 hover:text-pink-500 border-b-2 border-transparent !border-pink-500 hover:border-pink-500 active text-xs sm:text-sm">Offers</button>
            <button data-tab="coupons" class="tab-link px-4 py-2 font-medium text-gray-500 hover:text-pink-500 border-b-2 border-transparent hover:border-pink-500 text-xs sm:text-sm">Coupons</button>
            <button data-tab="campaigns" class="tab-link px-4 py-2 font-medium text-gray-500 hover:text-pink-500 border-b-2 border-transparent hover:border-pink-500 text-xs sm:text-sm">Campaigns</button>
        </div>

        <!-- Offers Table -->
        <div id="offers" class="tab-content">
            <div class="scrollContainer overflow-x-auto cursor-grab">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Offer Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Type</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Discount</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Start Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">End Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Summer Special</td>
                            <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Percentage</td>
                            <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">20% OFF</td>
                            <td class="px-6 py-4 text-sm text-nowrap">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Active</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2024-05-01</td>
                            <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2024-08-31</td>
                            <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                                <a href="{{ route('edit_offers')}}"><button class="text-yellow-500 text-xl" title="Edit"><i class="ri-edit-box-line"></i></button></a>
                                <a href="{{ route('delete_offers')}}"><button class="text-red-600 text-xl ml-2" title="Delete"><i class="ri-delete-bin-line"></i></button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Coupons Table (Hidden by default) -->
        <div id="coupons" class="scrollContainer overflow-x-auto cursor-grab tab-content hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Coupon Code</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Discount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Usage Limit</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Expiry Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">SUMMER20</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">₹ 200 OFF</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">1000</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2024-08-31</td>
                        <td class="px-6 py-4 text-sm text-nowrap">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Scheduled</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            <button class="text-blue-500 text-xl" title="Copy"><i class="ri-file-copy-line"></i></button>
                            <button class="text-red-600 text-xl ml-2" title="Deactivate"><i class="ri-close-circle-line"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Email Campaigns Table (Hidden by default) -->
        <div id="campaigns" class="scrollContainer overflow-x-auto cursor-grab tab-content hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Campaign Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Audience</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Sent Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Monsoon Sale</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Premium Users</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2024-06-01</td>
                        <td class="px-6 py-4 text-sm text-nowrap">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Sent</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            <button class="text-blue-500 text-xl" title="Preview"><i class="ri-eye-line"></i></button>
                            <button class="text-purple-600 text-xl ml-2" title="Analytics"><i class="ri-line-chart-line"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</div>

<script>

const scrollContainers = document.querySelectorAll('.scrollContainer'); // Select ALL elements with the class

scrollContainers.forEach(scrollContainer => { // Loop through each container
    let isDown = false;
    let startX;
    let scrollLeft;

    scrollContainer.addEventListener('mousedown', (e) => {
        isDown = true;
        scrollContainer.classList.add('cursor-grabbing');
        startX = e.pageX - scrollContainer.offsetLeft;
        scrollLeft = scrollContainer.scrollLeft;
        scrollContainer.classList.add('select-none');
    });

    scrollContainer.addEventListener('mouseleave', () => {
        isDown = false;
        scrollContainer.classList.remove('cursor-grabbing');
        scrollContainer.classList.remove('select-none');
    });

    scrollContainer.addEventListener('mouseup', () => {
        isDown = false;
        scrollContainer.classList.remove('cursor-grabbing');
        scrollContainer.classList.remove('select-none');
    });

    scrollContainer.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - scrollContainer.offsetLeft;
        const walk = (x - startX) * 2;
        scrollContainer.scrollLeft = scrollLeft - walk;
    });
});

    // Tab Functionality
    document.querySelectorAll('.tab-link').forEach(button => {
        button.addEventListener('click', () => {
            const tab = button.dataset.tab;
            document.querySelectorAll('.tab-link').forEach(btn => btn.classList.remove('active', '!border-pink-500', '!text-pink-500'));
            button.classList.add('active', '!border-pink-500', '!text-pink-500');
            document.querySelectorAll('.tab-content').forEach(content => content.classList.add('hidden'));
            document.getElementById(tab).classList.remove('hidden');
        });
    });
    
</script>
@endsection