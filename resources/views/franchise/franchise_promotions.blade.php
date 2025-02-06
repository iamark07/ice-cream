@extends('franchise.partials.franchise_app')

@section('franchise_content')
<div class="min-h-screen bg-gray-100 py-10">
  <div class="container mx-auto px-5 md:px-10">
        <!-- Page Heading -->
        <h1 class="text-2xl md:text-4xl font-bold text-pink-600 mb-8">Promotions & Discounts Management</h1>

        <!-- Create New Promotion Button -->
        <div class="flex justify-end mb-6">
            <button onclick="openCreateModal()" class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">
                <i class="fas fa-plus mr-2"></i>Create New Promotion
            </button>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 mb-10">
            <!-- Promotions Table -->
            <div id="scrollContainer" class="overflow-x-auto cursor-grab">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Promotion Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Discount</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Start Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">End Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <!-- Sample Row -->
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Summer Sale</td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">20% Off</td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2023-07-01</td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2023-07-31</td>
                                <td class="px-6 py-4 text-sm text-green-600 text-nowrap">Active</td>
                                <td class="px-6 py-4 text-sm">
                                    <button class="text-pink-500 hover:text-pink-700 mr-2"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Summer Sale</td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">20% Off</td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2023-07-01</td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2023-07-31</td>
                                <td class="px-6 py-4 text-sm text-green-600 text-nowrap">Active</td>
                                <td class="px-6 py-4 text-sm">
                                    <button class="text-pink-500 hover:text-pink-700 mr-2"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <!-- Add more rows dynamically -->
                        </tbody>
                    </table>
            </div>
        </div>

        <!-- Create Promotion Modal -->
        <div id="createModal" class="fixed inset-0 py-12 h-[100dvh] overflow-auto bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
            <div class="bg-white rounded-lg p-6 w-11/12 md:w-1/2 lg:w-1/3 mt-44 md:mt-24">
                <h2 class="text-xl font-bold mb-4">Create New Promotion</h2>
                <form>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Promotion Name</label>
                        <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Discount</label>
                        <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Start Date</label>
                        <input type="date" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">End Date</label>
                        <input type="date" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Status</label>
                        <select class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="flex justify-end">
                        <button type="button" onclick="closeCreateModal()" class="bg-gray-500 text-white px-4 py-2 rounded-lg mr-2 hover:bg-gray-600">Cancel</button>
                        <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- JavaScript for Modal Handling -->
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

        const createModal = document.getElementById("createModal");

        function openCreateModal() {
            createModal.classList.remove('hidden');
        }

        function closeCreateModal() {
            createModal.classList.add('hidden');
        }

        createModal.addEventListener('click', (e) => {
            if(e.target === createModal) {
                createModal.classList.add('hidden');
            }
        });
    </script>
@endsection