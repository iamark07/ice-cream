@extends('customer.partials.customer_app')

@section('customer_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <div class="max-w-7xl mx-auto">
        <!-- Analytics Section -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Analytics Overview</h2>

            <!-- Metrics Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Ticket Management Metrics -->
                <div class="bg-blue-100 flex flex-col items-center p-4 rounded-lg shadow-md">
                    <h3 class="text-sm text-gray-700">Tickets Resolved</h3>
                    <p class="text-sm md:text-xl font-bold">1,234</p>
                    <p class="text-xs text-gray-700">Last 30 Days</p>
                </div>

                <!-- Live Chat Metrics -->
                <div class="bg-green-100 flex flex-col items-center p-4 rounded-lg shadow-md">
                    <h3 class="text-sm text-gray-700">Chats Handled</h3>
                    <p class="text-sm md:text-xl font-bold">567</p>
                    <p class="text-xs text-gray-700">Last 30 Days</p>
                </div>

                <!-- Order & Refund Metrics -->
                <div class="bg-purple-100 flex flex-col items-center p-4 rounded-lg shadow-md">
                    <h3 class="text-sm text-gray-700">Refunds Processed</h3>
                    <p class="text-sm md:text-xl font-bold">89</p>
                    <p class="text-xs text-gray-700">Last 30 Days</p>
                </div>

                <!-- Franchise Support Metrics -->
                <div class="bg-yellow-100 flex flex-col items-center p-4 rounded-lg shadow-md">
                    <h3 class="text-sm text-gray-700">Franchise Inquiries</h3>
                    <p class="text-sm md:text-xl font-bold">45</p>
                    <p class="text-xs text-gray-700">Last 30 Days</p>
                </div>
            </div>

            <!-- Charts Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Tickets Resolved Over Time -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Tickets Resolved Over Time</h3>
                    <canvas id="resolvedTicketsChart"></canvas>
                </div>

                <!-- Live Chat Performance -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Live Chat Performance</h3>
                    <canvas id="liveChatChart"></canvas>
                </div>
            </div>

            <!-- Recent Activity Table -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Recent Support Activity</h3>
                <div id="scrollContainer" class="overflow-x-auto cursor-grab">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Feature</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Activity</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Ticket Management</td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Ticket #12345 resolved</td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap"><span class="px-2 py-1 rounded-full text-xs bg-green-100 text-green-800">Resolved</span></td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2023-10-01</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Live Chat</td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">Chat with Jane Smith</td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap"><span class="px-2 py-1 rounded-full text-xs bg-yellow-100 text-yellow-800">Pending</span></td>
                                <td class="px-6 py-4 text-sm text-gray-800 text-nowrap">2023-10-02</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Chart.js for charts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

    // Resolved Tickets Chart
    const resolvedTicketsCtx = document.getElementById('resolvedTicketsChart').getContext('2d');
    const resolvedTicketsChart = new Chart(resolvedTicketsCtx, {
        type: 'line',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            datasets: [{
                label: 'Tickets Resolved',
                data: [50, 100, 150, 200],
                borderColor: '#3b82f6',
                fill: false,
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Live Chat Performance Chart
    const liveChatCtx = document.getElementById('liveChatChart').getContext('2d');
    const liveChatChart = new Chart(liveChatCtx, {
        type: 'bar',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            datasets: [{
                label: 'Chats Handled',
                data: [30, 70, 120, 150],
                backgroundColor: '#10b981',
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection