@extends('customer.partials.customer_app')

@section('customer_content')
<div class="min-h-screen bg-gray-50 p-6">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Order & Refund Assistance</h2>
        
        <div class="mb-6 flex justify-between items-center">
            <div class="relative w-1/2 flex shadow-md">
                <input type="text" placeholder="Search by Order ID or User Name" class="w-full rounded-l-md p-3 outline-none">
                <button class="px-4 py-2 bg-pink-500 text-white rounded-r-md flex items-center hover:bg-pink-600">
                    <i class="fa fa-search mr-2"></i> Search
                </button>
            </div>
            <select class="p-3 border rounded-md shadow-md outline-none">
                <option value="all">All Status</option>
                <option value="pending">Pending</option>
                <option value="resolved">Resolved</option>
                <option value="rejected">Rejected</option>
            </select>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mt-6">
            <div id="scrollContainer" class="overflow-x-auto cursor-grab">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                        <tr class="text-gray-700 text-center">
                        <th class="p-4 text-left">Order ID</th>
                        <th class="p-4 text-left">User</th>
                        <th class="p-4 text-left">Issue</th>
                        <th class="p-4 text-left">Status</th>
                        <th class="p-4 text-left">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-4">#12345</td>
                            <td class="p-4">John Doe</td>
                            <td class="p-4">Refund Request</td>
                            <td class="p-4 text-yellow-500">Pending</td>
                            <td class="p-4 flex space-x-2">
                                <button class="px-3 py-1 bg-pink-500 text-white rounded-md shadow-md hover:bg-pink-600"><i class="fa fa-eye"></i></button>
                                <button class="px-3 py-1 bg-green-500 text-white rounded-md shadow-md hover:bg-green-600"><i class="fa fa-check"></i></button>
                                <button class="px-3 py-1 bg-red-500 text-white rounded-md shadow-md hover:bg-red-600"><i class="fa fa-times"></i></button>
                            </td>
                        </tr>
                        <!-- More rows dynamically generated -->
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
    </script>
@endsection
