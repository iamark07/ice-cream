@extends('franchise.partials.franchise_app')

@section('franchise_content')
<div class="min-h-screen py-10 px-5 md:px-10">
    <h2 class="text-3xl font-bold text-pink-500 mb-6 text-center">Franchise Employee Management</h2>
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">

        <!-- Add Employee Button -->
        <div class="flex justify-end mb-4">
            <button onclick="showAddEmployeeModal()" class="bg-pink-500 text-white px-4 py-2 rounded-lg">Add Employee</button>
        </div>

        <!-- Employee List -->
        <div id="scrollContainer" class="overflow-x-auto cursor-grab">
            <table class="min-w-full divide-y divide-gray-200 bg-white border rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-3 px-4 text-center text-nowrap">Name</th>
                        <th class="py-3 px-4 text-center text-nowrap">Email</th>
                        <th class="py-3 px-4 text-center text-nowrap">Role</th>
                        <th class="py-3 px-4 text-center text-nowrap">Status</th>
                        <th class="py-3 px-4 text-center text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody id="employeeTable" class="bg-white divide-y divide-gray-200">
                    <!-- Static Data -->
                    <tr>
                        <td class="py-3 px-4 text-center text-nowrap">Rahul Sharma</td>
                        <td class="py-3 px-4 text-center text-nowrap">rahul@example.com</td>
                        <td class="py-3 px-4 text-center text-nowrap">Manager</td>
                        <td class="py-3 px-4 text-center text-nowrap"><span class="status text-green-500">Active</span></td>
                        <td class="py-3 px-4 text-center text-nowrap space-x-2">
                            <button onclick="toggleEmployeeStatus(this)" class="text-pink-500">Toggle Status</button>
                            <button class="text-pink-500 hover:text-pink-700"><i class="ri-delete-bin-2-line text-xl"></i></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 text-center text-nowrap">Virat Sharma</td>
                        <td class="py-3 px-4 text-center text-nowrap">virat@example.com</td>
                        <td class="py-3 px-4 text-center text-nowrap">Cashier</td>
                        <td class="py-3 px-4 text-center text-nowrap"><span class="status text-green-500">Active</span></td>
                        <td class="py-3 px-4 text-center text-nowrap space-x-2">
                            <button onclick="toggleEmployeeStatus(this)" class="text-pink-500">Toggle Status</button>
                            <button class="text-pink-500 hover:text-pink-700"><i class="ri-delete-bin-2-line text-xl"></i></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Employee Modal -->
<div id="addEmployeeModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50" onclick="closeModal(event)">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96" onclick="event.stopPropagation()">
        <h3 class="text-xl font-semibold text-gray-700 mb-4">Add New Employee</h3>
        <input type="text" id="employeeName" placeholder="Full Name" class="w-full p-2 mb-2 border rounded-lg">
        <input type="text" id="employeeNumber" placeholder="Phone Number" class="w-full p-2 mb-2 border rounded-lg">
        <input type="email" id="employeeEmail" placeholder="Email" class="w-full p-2 mb-2 border rounded-lg">
        <select id="employeeRole" class="w-full p-2 mb-2 border rounded-lg">
            <option>Manager</option>
            <option>Cashier</option>
            <option>Chef</option>
        </select>
        <div class="flex justify-end gap-2">
            <button onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cancel</button>
            <button onclick="addEmployee()" class="bg-pink-500 text-white px-4 py-2 rounded-lg">Add</button>
        </div>
    </div>
</div>

<script>
    // Show Add Employee Modal
    function showAddEmployeeModal() {
        document.getElementById('addEmployeeModal').classList.remove('hidden');
    }

    // Close Modal Functionality
    function closeModal(event = { target: document.getElementById('addEmployeeModal') }) {
        if (event.target === document.getElementById('addEmployeeModal')) {
            document.getElementById('addEmployeeModal').classList.add('hidden');
        }
    }

    // Toggle Employee Status
    function toggleEmployeeStatus(button) {
        let statusElem = button.closest("tr").querySelector(".status");
        if (statusElem.textContent === "Active") {
            statusElem.textContent = "Inactive";
            statusElem.classList.remove("text-green-500");
            statusElem.classList.add("text-red-500");
        } else {
            statusElem.textContent = "Active";
            statusElem.classList.remove("text-red-500");
            statusElem.classList.add("text-green-500");
        }
    }
</script>
@endsection