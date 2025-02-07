@extends('customer.partials.customer_app')

@section('customer_content')
<div class="min-h-screen bg-gray-50 py-10 p-6">
    <!-- Page Title -->
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Ticket Management</h2>

    <!-- Tickets Table -->
    <div class="bg-white p-6 rounded-lg shadow-lg mt-6">
        <h3 class="text-lg font-bold text-pink-600 mb-4">Your Support Tickets</h3>
        <div id="scrollContainer" class="overflow-x-auto cursor-grab">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr class="text-gray-700 text-center">
                        <th class="border px-4 py-3 text-nowrap">Ticket ID</th>
                        <th class="border px-4 py-3 text-nowrap">Subject</th>
                        <th class="border px-4 py-3 text-nowrap">Status</th>
                        <th class="border px-4 py-3 text-nowrap">Created At</th>
                        <th class="border px-4 py-3 text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-gray-700 text-center">
                        <td class="border px-4 py-3 text-nowrap">#12345</td>
                        <td class="border px-4 py-3 text-nowrap">Order not received</td>
                        <td class="border px-4 py-3 text-nowrap text-yellow-500" id="ticketStatus">Pending</td>
                        <td class="border px-4 py-3 text-nowrap">Feb 7, 2025</td>
                        <td class="border px-4 py-3 text-nowrap">
                            <button class="bg-pink-500 text-white px-4 py-1 rounded-lg hover:bg-pink-600 transition" onclick="openModal('#12345', 'Order not received', 'Pending', 'Feb 7, 2025')">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Ticket Details Modal -->
<div id="ticketModal" class="fixed inset-0 z-50 bg-black bg-opacity-50 hidden flex justify-center items-center p-4">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative">
        <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-600 hover:text-red-500">✖</button>
        <h2 class="text-xl font-bold text-pink-600">Ticket Details</h2>
        <p class="mt-4"><strong>ID:</strong> <span id="modalTicketId"></span></p>
        <p><strong>Subject:</strong> <span id="modalSubject"></span></p>
        <p><strong>Status:</strong> <span id="modalStatus"></span></p>
        <p><strong>Created At:</strong> <span id="modalDate"></span></p>
        <button id="resolveButton" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4 w-full hover:bg-green-600 transition">Mark as Resolved</button>
        <button class="bg-pink-500 text-white px-4 py-2 rounded-lg mt-4 w-full hover:bg-pink-600 transition" onclick="closeModal()">Close</button>
    </div>
</div>

<!-- New Ticket Modal -->
<div id="newTicketModal" class="fixed inset-0 z-50 bg-black bg-opacity-50 hidden flex justify-center items-center p-4">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative">
        <button onclick="closeNewTicketModal()" class="absolute top-3 right-3 text-gray-600 hover:text-red-500">✖</button>
        <h2 class="text-xl font-bold text-pink-600">Create New Ticket</h2>
        <form class="mt-4">
            <label class="block text-gray-700">Subject</label>
            <input type="text" class="w-full p-2 border rounded-lg mt-1" placeholder="Enter subject">
            
            <label class="block text-gray-700 mt-3">Description</label>
            <textarea class="w-full p-2 border rounded-lg mt-1" rows="4" placeholder="Describe your issue"></textarea>
            
            <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-lg mt-4 w-full hover:bg-pink-600 transition">Submit</button>
        </form>
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

    function openModal(id, subject, status, date) {
        document.getElementById('modalTicketId').innerText = id;
        document.getElementById('modalSubject').innerText = subject;
        document.getElementById('modalStatus').innerText = status;
        document.getElementById('modalDate').innerText = date;
        document.getElementById('resolveButton').style.display = status === 'Resolved' ? 'none' : 'block';
        document.getElementById('ticketModal').classList.remove('hidden');
    }
    function closeModal() {
        document.getElementById('ticketModal').classList.add('hidden');
    }
    function openNewTicketModal() {
        document.getElementById('newTicketModal').classList.remove('hidden');
    }
    function closeNewTicketModal() {
        document.getElementById('newTicketModal').classList.add('hidden');
    }
    
    const newTicketModal = document.getElementById("newTicketModal");
    newTicketModal.addEventListener('click', (e) => {
            if(e.target === newTicketModal) {
                newTicketModal.classList.add('hidden');
            }
        });
    const ticketModal = document.getElementById("ticketModal");
    ticketModal.addEventListener('click', (e) => {
            if(e.target === ticketModal) {
                ticketModal.classList.add('hidden');
            }
        });
</script>
@endsection
