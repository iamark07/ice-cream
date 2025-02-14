@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow">
        <div class="mb-4 grid grid-cols-9 gap-3 items-center">
            <div class="order-1 col-span-9 md:col-span-5">
                <h2 class="text-xl font-bold">Customer Support Management</h2>
            </div>
            
            <!-- Date Filter -->
            <div class="order-3 sm:order-2 col-span-9 md:col-span-4 flex justify-center sm:justify-end gap-2">
                <input type="date" class="text-gray-500 border p-2 rounded text-[9px] sm:text-sm">
                <span class="self-center text-xs">to</span>
                <input type="date" class="text-gray-500 border p-2 rounded text-[9px] sm:text-sm">
            </div>

            <!-- Search Bar -->
            <div class="order-2 sm:order-3 col-span-9 sm:col-span-7 w-full relative flex">
                <input type="text" id="searchQueries" placeholder="Search queries..." class="outline-none border p-2 rounded-l w-full pl-10">
                <i class="ri-search-line absolute left-3 top-2.5 text-gray-500"></i>
                <button class="py-2 px-3 bg-pink-500 text-white rounded-r"><i class="ri-search-line"></i></button>
            </div>

            <!-- Status Filter -->
            <select id="filterQueryStatus" class="cursor-pointer text-xs sm:text-base order-4 col-span-9 sm:col-span-2 border p-2 rounded">
                <option value="">All Status</option>
                <option value="open">Open</option>
                <option value="in-progress">In Progress</option>
                <option value="resolved">Resolved</option>
            </select>
        </div>

        <!-- Summary Cards -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-blue-100 flex flex-col items-center p-4 rounded-lg">
                <h3 class="text-[8px] md:text-sm text-gray-700">Total Queries</h3>
                <p class="text-sm md:text-xl font-bold">325</p>
            </div>
            <div class="bg-yellow-100 flex flex-col items-center p-4 rounded-lg">
                <h3 class="text-[8px] md:text-sm text-gray-700">Pending Queries</h3>
                <p class="text-sm md:text-xl font-bold">58</p>
            </div>
            <div class="bg-green-100 flex flex-col items-center p-4 rounded-lg">
                <h3 class="text-[8px] md:text-sm text-gray-700">Resolved Queries</h3>
                <p class="text-sm md:text-xl font-bold">267</p>
            </div>
            <div class="bg-red-100 flex flex-col items-center p-4 rounded-lg">
                <h3 class="text-[8px] md:text-sm text-gray-700">Escalated Queries</h3>
                <p class="text-sm md:text-xl font-bold">10</p>
            </div>
        </div>

        <!-- Table Section -->
        <div id="scrollContainer" class="overflow-x-auto cursor-grab">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Query ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Customer</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Subject</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200" id="queryTable">
                    <!-- Sample Row -->
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">#SUP-1024</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Anil Kumar</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Payment Issue</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2024-03-15</td>
                        <td class="px-6 py-4 text-sm text-nowrap">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Pending</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-nowrap">
                            <button class="text-blue-500 text-xl" title="View Details">
                                <i class="ri-eye-2-line"></i>
                            </button>
                            <button class="text-green-600 text-xl ml-2" title="Mark as Resolved">
                                <i class="ri-checkbox-circle-fill"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
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

    function filterQueries() {
        const status = document.getElementById('filterQueryStatus').value;
        const search = document.getElementById('searchQueries').value.toLowerCase();
        const rows = document.querySelectorAll('#queryTable tr');

        rows.forEach(row => {
            const rowStatus = row.querySelector('td:nth-child(5) span').textContent.toLowerCase();
            const rowText = row.textContent.toLowerCase();
            
            const statusMatch = !status || rowStatus === status;
            const searchMatch = rowText.includes(search);
            
            row.style.display = (statusMatch && searchMatch) ? '' : 'none';
        });
    }

    document.getElementById('filterQueryStatus').addEventListener('change', filterQueries);
    document.getElementById('searchQueries').addEventListener('input', filterQueries);
</script>
@endsection
