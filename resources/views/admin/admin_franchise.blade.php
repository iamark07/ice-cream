@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow">       
        <div class="mb-4 grid grid-cols-9 gap-3 items-center">
            <h2 class="order-1 col-span-9 sm:col-span-5 text-xl font-bold">Franchise Management</h2>
            
            <!-- Add Franchise Button -->
            <div class="order-3 sm:order-2 col-span-4 md:col-span-4 flex flex-col sm:flex-row justify-center sm:justify-end items-center">
                <button onclick="openAddFranchiseModal()" class="bg-pink-500 text-white px-4 py-2 rounded w-full sm:w-fit text-xs sm:text-base">Add Franchise</button>
            </div>

            <!-- Search Bar -->
            <div class="order-2 sm:order-3 col-span-9 sm:col-span-7 w-full relative flex">
                <input type="text" id="searchFranchise" placeholder="Search franchise..." class="outline-none border p-2 rounded-l w-full pl-10" onkeyup="searchFranchise()">
                <i class="ri-search-line absolute left-3 top-2.5 text-gray-500"></i>
                <button type="submit" class="py-2 px-3 bg-pink-500 text-white rounded-r"><i class="ri-search-line"></i></button>
            </div>

            <!-- Status Filter -->
            <select id="filterStatus" class="text-xs sm:text-base order-4 col-span-5 sm:col-span-2 border p-2 rounded">
                <option value="">All Status</option>
                <option value="pending">Pending</option>
                <option value="approved">Approved</option>
                <option value="suspended">Suspended</option>
            </select>
        </div>

        <!-- Table Section -->
        <div id="scrollContainer" class="overflow-x-auto cursor-grab">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Franchise ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Owner</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Location</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200" id="franchiseTable">
                    <!-- Sample Row -->
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">FR-001</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Ice Cream Delhi</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Rahul Sharma</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Connaught Place, Delhi</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Pending</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            <button class="text-green-500 text-xl" title="Approve"><i class="ri-checkbox-circle-line"></i></button>
                            <button class="text-yellow-500 text-xl ml-2" title="Edit"><i class="ri-edit-box-line"></i></button>
                            <button class="text-red-600 text-xl ml-2" title="Suspend"><i class="ri-indeterminate-circle-line"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">FR-002</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Ice Cream Parlor</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Anjana Singh</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Aiims, Delhi</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">succses</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            <button class="text-green-500 text-xl" title="Approve"><i class="ri-checkbox-circle-line"></i></button>
                            <button class="text-yellow-500 text-xl ml-2" title="Edit"><i class="ri-edit-box-line"></i></button>
                            <button class="text-red-600 text-xl ml-2" title="Suspend"><i class="ri-indeterminate-circle-line"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-10">
        <ul class="flex justify-center gap-3">
            <li class="pagination-btn cursor-pointer bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">Prev</li>
            
            <li class="pagination-btn cursor-pointer bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">1</li>
            <li class="pagination-btn cursor-pointer bg-white text-black px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">2</li>
            <li class="pagination-btn cursor-pointer bg-white text-black px-4 py-2 rounded-lg shadow-md hover:bg-pink-500  hover:text-white transition-all">3</li>
            
            <li class="pagination-btn cursor-pointer bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-500 hover:text-white transition-all">Next</li>
        </ul>
    </div>

    <!-- Add Franchise Modal -->
    <div id="franchiseModal" class="z-50 backdrop-blur-sm fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
            <h3 class="text-lg font-bold mb-4">Add New Franchise</h3>
            <input type="text" id="franchiseName" placeholder="Franchise Name" class="text-sm border p-2 rounded w-full mb-2">
            <input type="text" id="ownerName" placeholder="Owner Name" class="text-sm border p-2 rounded w-full mb-2">
            <input type="text" id="location" placeholder="Location" class="text-sm border p-2 rounded w-full mb-2">
            <input type="tel" id="contact" placeholder="Contact Number" class="text-sm border p-2 rounded w-full mb-2">
            <div class="flex justify-end gap-2 text-sm">
                <button onclick="closeFranchiseModal()" class="bg-gray-400 text-white px-4 py-2 rounded">Cancel</button>
                <button onclick="saveFranchise()" class="bg-pink-600 text-white px-4 py-2 rounded">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Modal Handling
    const franchiseModal = document.getElementById('franchiseModal');
    
    function openAddFranchiseModal() {
        franchiseModal.classList.remove('hidden');
    }

    function closeFranchiseModal() {
        franchiseModal.classList.add('hidden');
    }

    franchiseModal.addEventListener('click', (e) => {
        if(e.target === franchiseModal) {
            franchiseModal.classList.add('hidden');
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