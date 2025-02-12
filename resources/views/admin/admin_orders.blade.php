@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow">
        <div class="mb-4 grid grid-cols-9 gap-3 items-center">
            <h2 class="order-1 col-span-9 sm:col-span-5 text-xl font-bold">Order & Payment Management</h2>
            
            <!-- Date Filter -->
            <div class="order-3 sm:order-2 col-span-9 md:col-span-4 flex justify-center sm:justify-end gap-2">
                <input type="date" class="text-gray-500 border p-2 rounded text-[9px] sm:text-sm">
                <span class="self-center text-xs">to</span>
                <input type="date" class="text-gray-500 border p-2 rounded text-[9px] sm:text-sm">
            </div>

            <!-- Search Bar -->
            <div class="order-2 sm:order-3 col-span-9 sm:col-span-7 w-full relative flex">
                <input type="text" id="searchOrders" placeholder="Search orders..." class="outline-none border p-2 rounded-l w-full pl-10">
                <i class="ri-search-line absolute left-3 top-2.5 text-gray-500"></i>
                <button class="py-2 px-3 bg-pink-500 text-white rounded-r"><i class="ri-search-line"></i></button>
            </div>

            <!-- Status Filter -->
            <select id="filterOrderStatus" class="cursor-pointer text-xs sm:text-base order-4 col-span-9 sm:col-span-2 border p-2 rounded">
                <option value="">All Status</option>
                <option value="completed">Completed</option>
                <option value="pending">Pending</option>
                <option value="refunded">Refunded</option>
                <option value="disputed">Disputed</option>
            </select>
        </div>

        <!-- Summary Cards -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-green-100 flex flex-col items-center p-4 rounded-lg">
                <h3 class="text-[8px] md:text-sm text-gray-700">Total Transactions</h3>
                <p class="text-sm md:text-xl font-bold">₹1,42,320</p>
            </div>
            <div class="bg-yellow-100 flex flex-col items-center p-4 rounded-lg">
                <h3 class="text-[8px] md:text-sm text-gray-700">Pending Orders</h3>
                <p class="text-sm md:text-xl font-bold">24</p>
            </div>
            <div class="bg-red-100 flex flex-col items-center p-4 rounded-lg">
                <h3 class="text-[8px] md:text-sm text-gray-700">Total Refunds</h3>
                <p class="text-sm md:text-xl font-bold">₹12,500</p>
            </div>
            <div class="bg-purple-100 flex flex-col items-center p-4 rounded-lg">
                <h3 class="text-[8px] md:text-sm text-gray-700">Active Disputes</h3>
                <p class="text-sm md:text-xl font-bold">5</p>
            </div>
        </div>

        <!-- Table Section -->
        <div id="scrollContainer" class="overflow-x-auto cursor-grab">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Order ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Customer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Payment Method</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200" id="orderTable">
                    <!-- Sample Row -->
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">#ORD-2024</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Rahul Sharma</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">₹ 1,299</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Credit Card</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2024-03-15</td>
                        <td class="px-6 py-4 text-sm text-nowrap">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Completed</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            <button class="text-blue-500 text-xl" title="View Details">
                                <i class="ri-eye-2-line"></i> <!-- Eye icon updated -->
                            </button>
                            <button class="text-red-600 text-xl ml-2" title="Refund">
                                <i class="ri-exchange-dollar-line"></i> <!-- Money refund icon updated -->
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">#ORD-2025</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Priya Patel</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">₹ 2,499</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">UPI</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2024-03-16</td>
                        <td class="px-6 py-4 text-sm text-nowrap">
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded-full text-xs">Disputed</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            <button class="text-yellow-500 text-xl" title="Resolve Dispute">
                                <i class="ri-checkbox-circle-fill"></i> <!-- Resolved dispute icon updated -->
                            </button>
                            <button class="text-gray-600 text-xl ml-2" title="View Dispute Details">
                                <i class="ri-file-warning-line"></i> <!-- Dispute details icon updated -->
                            </button>
                        </td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>

    <!-- Refund Modal -->
    <div id="refundModal" class="z-50 backdrop-blur-sm fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
            <h3 class="text-lg font-bold mb-4">Process Refund</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Refund Amount</label>
                    <input type="number" id="refundAmount" class="text-sm border p-2 rounded w-full">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Reason</label>
                    <select class="text-sm border p-2 rounded w-full">
                        <option>Customer Request</option>
                        <option>Product Issue</option>
                        <option>Service Not Rendered</option>
                    </select>
                </div>
                <div class="flex justify-end gap-2 text-sm">
                    <button onclick="closeRefundModal()" class="bg-gray-400 text-white px-4 py-2 rounded">Cancel</button>
                    <button onclick="processRefund()" class="bg-pink-600 text-white px-4 py-2 rounded">Confirm Refund</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Dispute Resolution Modal -->
    <div id="disputeModal" class="z-50 backdrop-blur-sm fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
            <h3 class="text-lg font-bold mb-4">Resolve Dispute</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Admin Comments</label>
                    <textarea class="text-sm border p-2 rounded w-full h-24"></textarea>
                </div>
                <div class="flex gap-4">
                    <button class="bg-green-500 text-white px-4 py-2 rounded flex-1">Approve Customer</button>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded flex-1">Approve Business</button>
                </div>
                <div class="flex justify-end gap-2 text-sm">
                    <button onclick="closeDisputeModal()" class="bg-gray-400 text-white px-4 py-2 rounded">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
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

    // Modal Handling
    const refundModal = document.getElementById('refundModal');
    const disputeModal = document.getElementById('disputeModal');

    function openRefundModal() {
        refundModal.classList.remove('hidden');
    }

    function closeRefundModal() {
        refundModal.classList.add('hidden');
    }

    function openDisputeModal() {
        disputeModal.classList.remove('hidden');
    }

    function closeDisputeModal() {
        disputeModal.classList.add('hidden');
    }

    // Close modals when clicking outside
    [refundModal, disputeModal].forEach(modal => {
        modal.addEventListener('click', (e) => {
            if(e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });

    // Filter and Search Functionality
    function filterOrders() {
        const status = document.getElementById('filterOrderStatus').value;
        const search = document.getElementById('searchOrders').value.toLowerCase();
        const rows = document.querySelectorAll('#orderTable tr');

        rows.forEach(row => {
            const rowStatus = row.querySelector('td:nth-child(6) span').textContent.toLowerCase();
            const rowText = row.textContent.toLowerCase();
            
            const statusMatch = !status || rowStatus === status;
            const searchMatch = rowText.includes(search);
            
            row.style.display = (statusMatch && searchMatch) ? '' : 'none';
        });
    }

    // Initialize event listeners
    document.getElementById('filterOrderStatus').addEventListener('change', filterOrders);
    document.getElementById('searchOrders').addEventListener('input', filterOrders);

    // Date Range Picker (using Flatpickr)
    flatpickr("input[type='date']", {
        dateFormat: "Y-m-d",
        allowInput: true
    });

    
</script>
@endsection