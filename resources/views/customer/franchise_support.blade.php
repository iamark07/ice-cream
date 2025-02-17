@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow">       
        <div class="mb-4 grid grid-cols-9 gap-3 items-center">
            <h2 class="order-1 col-span-9 sm:col-span-5 text-xl font-bold">Franchise Support</h2>
            
            <!-- Add Inquiry Button -->
            <div class="order-3 sm:order-2 col-span-4 md:col-span-4 flex flex-col sm:flex-row justify-center sm:justify-end items-center">
                <button class="bg-pink-500 text-white px-4 py-2 rounded w-full sm:w-fit text-xs sm:text-base">Submit Inquiry</button>
            </div>

            <!-- Search Bar -->
            <div class="order-2 sm:order-3 col-span-9 sm:col-span-7 w-full relative flex">
                <input type="text" placeholder="Search inquiries..." class="outline-none border p-2 rounded-l w-full pl-10">
                <i class="ri-search-line absolute left-3 top-2.5 text-gray-500"></i>
                <button type="submit" class="py-2 px-3 bg-pink-500 text-white rounded-r"><i class="ri-search-line"></i></button>
            </div>

            <!-- Status Filter -->
            <select class="cursor-pointer text-xs sm:text-base order-4 col-span-5 sm:col-span-2 border p-2 rounded">
                <option value="">All Status</option>
                <option value="pending">Pending</option>
                <option value="in-review">In Review</option>
                <option value="resolved">Resolved</option>
            </select>
        </div>

        <!-- Table Section -->
        <div class="overflow-x-auto cursor-grab">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Inquiry ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Topic</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Submitted On</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <!-- Sample Row -->
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">#FR001</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">New Franchise Inquiry</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Pending</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Feb 16, 2025</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap flex space-x-2">
                            <button class="text-pink-500 text-xl" title="View"><i class="ri-eye-line"></i></button>
                            <button class="text-green-500 text-xl" title="Resolve"><i class="ri-check-line"></i></button>
                            <button class="text-red-500 text-xl" title="Reject"><i class="ri-close-line"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">#FR002</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Operational Support Request</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Resolved</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Feb 14, 2025</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap flex space-x-2">
                            <button class="text-pink-500 text-xl" title="View"><i class="ri-eye-line"></i></button>
                            <button class="text-green-500 text-xl" title="Resolve" disabled><i class="ri-check-line"></i></button>
                            <button class="text-red-500 text-xl" title="Reject" disabled><i class="ri-close-line"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
