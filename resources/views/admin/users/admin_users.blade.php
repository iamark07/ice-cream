@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow">       
        <div class="mb-4 grid grid-cols-9 gap-3 items-center">
            <h2 class="order-1 col-span-9 sm:col-span-5 text-xl font-bold">Admin User Management</h2>
            
            <!-- Add Admin Button Group -->
            <div class="order-3 sm:order-2 col-span-4 md:col-span-4 flex flex-col sm:flex-row justify-center sm:justify-end items-center">
                <a href="{{ route('add_users')}}"><button class="bg-pink-500 text-white px-4 py-2 rounded w-full sm:w-fit text-xs sm:text-base">Add User</button></a>
            </div>

            <!-- Search Bar -->
            <div class="order-2 sm:order-3 col-span-9 sm:col-span-7 w-full relative flex">
                <input type="text" id="searchUser" placeholder="Search user..." class="outline-none border p-2 rounded-l w-full pl-10" onkeyup="searchUser()">
                <i class="ri-search-line absolute left-3 top-2.5 text-gray-500"></i>
                <button type="submit" class="py-2 px-3 bg-pink-500 text-white rounded-r"><i class="ri-search-line"></i></button>
            </div>

            <!-- Role Filter -->
            <select id="filterRole" class="cursor-pointer text-xs sm:text-base order-4 col-span-5 sm:col-span-2 border p-2 rounded">
                <option value="">All Roles</option>
                <option value="super-admin">Super Admin</option>
                <option value="admin">Admin</option>
                <option value="admin">Customer</option>
                <option value="admin">Franchise Owner</option>
                <option value="admin">Staff</option>
            </select>
        </div>

        <!-- Scroll Container with Same Drag Functionality -->
        <div id="scrollContainer" class="overflow-x-auto cursor-grab">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">User Id</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Mobile</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Role</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200" id="userTable">
                    <!-- Rows with Consistent Styling -->
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">001</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">John Doe</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">6245685262</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">john@example.com</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap"><span class="bg-pink-100 text-pink-800 px-2 py-1 rounded-full text-xs">Super Admin</span></td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            <!-- Matching Action Icons -->
                            <a href="{{ route('edit_users') }}"><button class="text-yellow-500 text-xl"><i class="ri-edit-box-line"></i></button></a>
                            <a href="{{ route('delete_users') }}"><button class="text-red-600 text-xl ml-2"><i class="ri-delete-bin-2-line"></i></button></a>
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