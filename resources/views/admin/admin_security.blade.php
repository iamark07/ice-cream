@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow">
        <div class="mb-4 grid grid-cols-9 gap-3 items-center">
            <div class="order-1 col-span-9 md:col-span-5">
                <h2 class="text-xl font-bold">Security & Compliance</h2>
            </div>
        </div>

        <!-- Security Overview Cards -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-blue-100 flex flex-col items-center justify-center p-4 rounded-lg">
                <p class="text-xl font-bold mb-2">98%</p>
                <h3 class="text-sm text-gray-700 text-center">Data Privacy Checks</h3>
            </div>
            <div class="bg-yellow-100 flex flex-col items-center justify-center p-4 rounded-lg">
                <p class="text-xl font-bold mb-2">15</p>
                <h3 class="text-sm text-gray-700 text-center">Fraud Cases Detected</h3>
            </div>
            <div class="bg-green-100 flex flex-col items-center justify-center p-4 rounded-lg">
                <p class="text-xl font-bold mb-2">85%</p>
                <h3 class="text-sm text-gray-700 text-center">Compliance Checks Passed</h3>
            </div>
            <div class="bg-red-100 flex flex-col items-center justify-center p-4 rounded-lg">
                <p class="text-xl font-bold mb-2">3</p>
                <h3 class="text-sm text-gray-700 text-center">Threat Reports</h3>
            </div>
        </div>

        <!-- Compliance Policies Section -->
<div class="bg-gradient-to-r from-blue-50 to-gray-100 p-6 rounded-lg shadow-lg mb-6">
    <div class="flex items-center justify-between mb-3">
        <h3 class="text-lg font-semibold text-gray-800">Compliance Policies</h3>
        <span class="text-sm text-gray-600">Last Updated: Feb 2025</span>
    </div>
    <ul class="space-y-2">
        <li class="flex items-center text-gray-700 text-sm">
            <i class="ri-shield-check-fill text-blue-500 mr-2"></i> All user data is encrypted and securely stored.
        </li>
        <li class="flex items-center text-gray-700 text-sm">
            <i class="ri-file-list-3-line text-green-500 mr-2"></i> Regular audits are conducted for compliance.
        </li>
        <li class="flex items-center text-gray-700 text-sm">
            <i class="ri-lock-password-line text-yellow-500 mr-2"></i> Multi-factor authentication enforced for access control.
        </li>
        <li class="flex items-center text-gray-700 text-sm">
            <i class="ri-eye-line text-red-500 mr-2"></i> AI-powered fraud detection monitoring 24/7.
        </li>
    </ul>
    <button class="mt-4 px-5 py-2.5 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">
        <i class="ri-settings-3-line mr-2"></i> Manage Policies
    </button>
</div>


        <!-- Fraud Detection Table -->
        <div id="scrollContainer" class="overflow-x-auto cursor-grab shadow-md rounded-md">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Case ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Risk Level</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Detected On</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">#FRD-2103</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Rahul Verma</td>
                        <td class="px-6 py-4 text-sm text-yellow-600 text-nowrap">Medium</td>
                        <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2024-03-12</td>
                        <td class="px-6 py-4 text-sm text-nowrap">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Under Review</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-nowrap">
                            <button class="text-blue-500 text-xl" title="View Details">
                                <i class="ri-eye-2-line"></i>
                            </button>
                            <button class="text-green-600 text-xl ml-2" title="Resolve Case">
                                <i class="ri-checkbox-circle-fill"></i>
                            </button>
                            <button class="text-red-500 text-xl ml-2" title="Escalate Case">
                                <i class="ri-alert-line"></i>
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
        const walk = (x - startX) * 2;
        scrollContainer.scrollLeft = scrollLeft - walk;
    });
</script>
@endsection
