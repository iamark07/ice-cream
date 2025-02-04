@extends('frontend.profile.partials.profile_app')

@section('profile_content')

    <!-- Main Content -->
    <div class="flex-1 px-5 py-10 md:p-10">

        <!-- Order History Section -->
        <section id="orderHistory" class="w-full">
            <h2 class="text-3xl font-bold text-gray-800 py-5">Order History</h2>
            <div class="bg-white p-6 shadow-md rounded-lg space-y-4 border-l-4 border-pink-500 w-full">

                <!-- Order History Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-700 text-nowrap">Order ID</th>
                                <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-700 text-nowrap">Date</th>
                                <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-700 text-nowrap">Total</th>
                                <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-700 text-nowrap">Status</th>
                                <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-700 text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Order 1 -->
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">#12345</td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">2023-10-01</td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">&#8377; 1,499</td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">Delivered</span>
                                </td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">
                                    <button onclick="openModal('orderDetails1')" class="text-blue-500 hover:underline">View Details</button>
                                </td>
                            </tr>

                            <!-- Order 2 -->
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">#12346</td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">2023-10-05</td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">&#8377; 2,999</td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">
                                    <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-xs">Processing</span>
                                </td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">
                                    <button onclick="openModal('orderDetails2')" class="text-blue-500 hover:underline">View Details</button>
                                </td>
                            </tr>

                            <!-- Order 3 -->
                            <tr class="hover:bg-gray-50">
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">#12347</td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">2023-10-10</td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">&#8377; 999</td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">
                                    <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs">Cancelled</span>
                                </td>
                                <td class="py-3 px-4 border-b text-sm text-gray-700 text-nowrap">
                                    <button onclick="openModal('orderDetails3')" class="text-blue-500 hover:underline">View Details</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <!-- Popup Modals -->
    <!-- Overlay for Blur Background -->
    <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden" onclick="closeModal()"></div>

    <!-- Order Details Modal 1 -->
    <div id="orderDetails1Modal" class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full md:w-fit h-fit flex items-center justify-center hidden px-5">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96" onclick="event.stopPropagation()">
            <h3 class="text-xl font-bold mb-4">Order Details (#12345)</h3>
            <div class="space-y-3">
                <p class="text-sm text-gray-700"><span class="font-semibold">Date:</span> 2023-10-01</p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Total:</span>&#8377; 1,499</p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Status:</span> <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">Delivered</span></p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Items:</span> 2</p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Shipping Address:</span> Aiims New Delhi, India</p>
            </div>
            <div class="flex justify-end mt-4">
                <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Close</button>
            </div>
        </div>
    </div>

    <!-- Order Details Modal 2 -->
    <div id="orderDetails2Modal" class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full md:w-fit h-fit flex items-center justify-center hidden px-5">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96" onclick="event.stopPropagation()">
            <h3 class="text-xl font-bold mb-4">Order Details (#12346)</h3>
            <div class="space-y-3">
                <p class="text-sm text-gray-700"><span class="font-semibold">Date:</span> 2023-10-05</p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Total:</span>&#8377; 2,999</p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Status:</span> <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-xs">Processing</span></p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Items:</span> 3</p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Shipping Address:</span> Aiims New Delhi, India</p>
            </div>
            <div class="flex justify-end mt-4">
                <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Close</button>
            </div>
        </div>
    </div>

    <!-- Order Details Modal 3 -->
    <div id="orderDetails3Modal" class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full md:w-fit h-fit flex items-center justify-center hidden px-5">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96" onclick="event.stopPropagation()">
            <h3 class="text-xl font-bold mb-4">Order Details (#12347)</h3>
            <div class="space-y-3">
                <p class="text-sm text-gray-700"><span class="font-semibold">Date:</span> 2023-10-10</p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Total:</span>&#8377;  999</p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Status:</span> <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs">Cancelled</span></p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Items:</span> 1</p>
                <p class="text-sm text-gray-700"><span class="font-semibold">Shipping Address:</span> Aiims New Delhi, India</p>
            </div>
            <div class="flex justify-end mt-4">
                <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Close</button>
            </div>
        </div>
    </div>

    <script>
        // Function to open modal
        function openModal(modalId) {
            document.getElementById('modalOverlay').classList.remove('hidden');
            document.getElementById(`${modalId}Modal`).classList.remove('hidden');
        }

        // Function to close modal
        function closeModal() {
            document.getElementById('modalOverlay').classList.add('hidden');
            document.querySelectorAll('[id$="Modal"]').forEach(modal => {
                modal.classList.add('hidden');
            });
        }
    </script>
@endsection