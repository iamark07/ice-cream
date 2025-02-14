@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <!-- Header -->
    {{-- <div class="mb-6 flex justify-end items-center p-4">
        <button class="bg-pink-500 text-white px-6 py-3 rounded-lg shadow hover:bg-pink-600 transition">Download Report</button>
    </div> --}}
    
    <!-- Stats Cards with Chart -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Revenue -->
        <div class="bg-blue-100 text-gray-700 p-6 rounded-lg shadow-md relative flex flex-col justify-center items-center">
            <i class="ri-money-rupee-circle-fill text-4xl mr-4 mb-2"></i>
            <div>
                <h3 class="font-semibold text-center">Total Revenue</h3>
                <p class="text-xl xl:text-2xl font-bold text-center">₹ 1,245,678</p>
            </div>
        </div>
        
        <!-- Total Orders -->
        <div class="bg-yellow-100 text-gray-700 p-6 rounded-lg shadow-md relative flex flex-col justify-center items-center">
            <i class="ri-shopping-cart-2-fill text-4xl mr-4 mb-2"></i>
            <div>
                <h3 class="font-semibold text-center">Total Orders</h3>
                <p class="text-xl xl:text-2xl font-bold text-center">45,678</p>
            </div>
        </div>
        
        <!-- Total Users -->
        <div class="bg-purple-100 text-gray-700 p-6 rounded-lg shadow-md relative flex flex-col justify-center items-center">
            <i class="ri-user-3-fill text-4xl mr-4 mb-2"></i>
            <div>
                <h3 class="font-semibold text-center">Total Users</h3>
                <p class="text-xl xl:text-2xl font-bold text-center">98,765</p>
            </div>
        </div>
        
        <!-- Active Vendors -->
        <div class="bg-green-100 text-gray-700 p-6 rounded-lg shadow-md relative flex flex-col justify-center items-center">
            <i class="ri-store-3-fill text-4xl mr-4 mb-2"></i>
            <div>
                <h3 class="font-semibold text-center">Active Vendors</h3>
                <p class="text-xl xl:text-2xl font-bold text-center">1,234</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 md:gap-8">
        <!-- Sales Analytics Chart -->
        <div class="mt-8 bg-white p-6 rounded-lg shadow-xl">
            <h3 class="text-lg font-semibold mb-4 text-pink-500">Sales & Revenue Analytics</h3>
            <canvas id="salesAnalyticsChart" class="!h-[200px] md:!h-[250px]"></canvas>
        </div>
    
        <!-- Customer Growth Chart -->
        <div class="mt-8 bg-white p-6 rounded-lg shadow-xl">
            <h3 class="text-lg font-semibold mb-4 text-pink-500">Customer Growth</h3>
            <canvas id="customerGrowthChart" class="!h-[200px] md:!h-[250px]"></canvas>
        </div>
    </div>

    <div class="mt-8 bg-white p-6 rounded-lg shadow-xl">
        <h3 class="text-lg font-semibold mb-4 flex items-center text-pink-500"><i class="ri-bar-chart-fill text-2xl mr-2"></i>Top Selling Products</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col justify-center items-center">
                <i class="ri-shopping-bag-3-fill text-pink-500 text-3xl mr-3"></i>
                <div>
                    <p class="text-center font-semibold">Product A</p>
                    <p class="text-center text-gray-600">5,000 Sales</p>
                </div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col justify-center items-center">
                <i class="ri-shopping-bag-3-fill text-pink-500 text-3xl mr-3"></i>
                <div>
                    <p class="text-center font-semibold">Product B</p>
                    <p class="text-center text-gray-600">3,800 Sales</p>
                </div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col justify-center items-center">
                <i class="ri-shopping-bag-3-fill text-pink-500 text-3xl mr-3"></i>
                <div>
                    <p class="text-center font-semibold">Product C</p>
                    <p class="text-center text-gray-600">2,900 Sales</p>
                </div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col justify-center items-center">
                <i class="ri-shopping-bag-3-fill text-pink-500 text-3xl mr-3"></i>
                <div>
                    <p class="text-center font-semibold">Product D</p>
                    <p class="text-center text-gray-600">3,900 Sales</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <section class="p-6 bg-white mt-4 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold mb-4 text-pink-500">Recent Activities</h3>
        <ul class="space-y-3 text-gray-700">
            <li class="bg-gray-50 shadow p-4 text-sm rounded-md flex items-center space-x-2"><i class="ri-shopping-cart-2-line text-pink-500"></i> <span>New order placed by <strong>Jane Doe</strong> (₹ 1200)</span></li>
            <li class="bg-gray-50 shadow p-4 text-sm rounded-md flex items-center space-x-2"><i class="ri-box-3-line text-pink-500"></i> <span>Product <strong>XYZ</strong> added to inventory</span></li>
            <li class="bg-gray-50 shadow p-4 text-sm rounded-md flex items-center space-x-2"><i class="ri-user-add-line text-pink-500"></i> <span>New user <strong>John Smith</strong> registered</span></li>
            <li class="bg-gray-50 shadow p-4 text-sm rounded-md flex items-center space-x-2"><i class="ri-wallet-3-line text-pink-500"></i> <span>Payment of ₹ 5000 received from <strong>ABC Ltd.</strong></span></li>
        </ul>
    </section>


    <!-- Recent Transactions Table -->
    <section class="mt-8 bg-white p-6 rounded-lg shadow-xl overflow-x-auto">
        <h3 class="text-lg font-semibold mb-4 flex items-center gap-2 text-pink-500">
            <i class="ri-money-rupee-circle-line text-2xl"></i> Recent Transactions
        </h3>
        <div id="scrollContainer" class="overflow-x-auto cursor-grab">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Transaction ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">#TX12345</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            John Doe
                        </td>
                        <td class="px-6 py-4 text-sm text-nowrap text-green-600">₹ 500</td>
                        <td class="px-6 py-4 text-sm text-nowrap text-green-500 font-semibold flex items-center gap-2">
                            <i class="ri-checkbox-circle-fill"></i> Completed
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">#TX12346</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap flex items-center gap-2">
                            Jane Smith
                        </td>
                        <td class="px-6 py-4 text-sm text-nowrap text-yellow-600">₹ 1200</td>
                        <td class="px-6 py-4 text-sm text-nowrap text-yellow-500 font-semibold flex items-center gap-2">
                            <i class="ri-time-fill"></i> Pending
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const salesAnalyticsCtx = document.getElementById('salesAnalyticsChart').getContext('2d');
    new Chart(salesAnalyticsCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Sales Revenue',
                data: [12000, 19000, 30000, 50000, 24000, 70000],
                backgroundColor: 'rgba(219, 39, 119, 0.7)',
                borderColor: 'rgba(219, 39, 119, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    const customerGrowthCtx = document.getElementById('customerGrowthChart').getContext('2d');
    new Chart(customerGrowthCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Customers',
                data: [500, 800, 1200, 1600, 2100, 2700],
                borderColor: 'rgba(219, 39, 119, 0.8)',
                borderWidth: 2,
                fill: true,
                backgroundColor: 'rgba(219, 39, 119, 0.2)'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });


    // Drag-to-scroll functionality for table container
    const scrollContainer = document.getElementById('scrollContainer');
        let isDown = false;
        let startX;
        let scrollLeft;

        scrollContainer.addEventListener('mousedown', (e) => {
            isDown = true;
            scrollContainer.classList.add('cursor-grabbing');
            startX = e.pageX - scrollContainer.offsetLeft;
            scrollLeft = scrollContainer.scrollLeft;
            // Disable text selection during drag
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
            if(!isDown) return;
            e.preventDefault();
            const x = e.pageX - scrollContainer.offsetLeft;
            const walk = (x - startX) * 2; // Adjust scroll speed as needed
            scrollContainer.scrollLeft = scrollLeft - walk;
        });
</script>
@endsection
