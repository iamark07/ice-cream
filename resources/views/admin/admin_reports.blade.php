@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14">
    <h3 class="text-2xl font-bold mb-6 text-gray-800">Analytics & Reports</h3>
    
    <div class="grid grid-cols-6 gap-6">
        <!-- Total Sales -->
        <div class="col-span-6 sm:col-span-3 bg-white p-6 rounded-lg shadow-lg text-center">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Total Sales</h4>
            <p class="text-3xl font-bold text-green-600">$120,000</p>
            <canvas id="salesChart" class="mt-4"></canvas>
        </div>
        
        <!-- Customer Trends -->
        <div class="col-span-6 sm:col-span-3 bg-white p-6 rounded-lg shadow-lg text-center">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Customer Trends</h4>
            <p class="text-3xl font-bold text-blue-400">+8.5% Growth</p>
            <canvas id="customerChart" class="mt-4"></canvas>
        </div>
        
        <!-- Franchise Performance -->
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 bg-white p-6 rounded-lg shadow-lg text-center">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Franchise Performance</h4>
            <p class="text-3xl font-bold text-blue-500">Top: NYC</p>
            <canvas id="franchiseChart" class="mt-4"></canvas>
        </div>

        <!-- Top Selling Products -->
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 bg-white p-6 rounded-lg shadow-lg text-center">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Top Selling Products</h4>
            <canvas id="topProductsChart" class="mt-4"></canvas>
        </div>
        
        <!-- Orders Overview -->
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 bg-white p-6 rounded-lg shadow-lg text-center">
            <h4 class="text-lg font-semibold mb-2 text-gray-700">Orders Overview</h4>
            <canvas id="ordersChart" class="mt-4"></canvas>
        </div>
    </div>
</div>

<!-- Chart.js Integration -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const salesCtx = document.getElementById('salesChart').getContext('2d');
    new Chart(salesCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Sales',
                data: [10000, 15000, 13000, 17000, 19000, 22000],
                borderColor: '#4CAF50',
                fill: true,
                backgroundColor: 'rgba(76, 175, 80, 0.2)'
            }]
        }
    });
    
    const customerCtx = document.getElementById('customerChart').getContext('2d');
    new Chart(customerCtx, {
        type: 'bar',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            datasets: [{
                label: 'New Customers',
                data: [200, 300, 280, 350],
                backgroundColor: '#60a5fa'
            }]
        }
    });
    
    const franchiseCtx = document.getElementById('franchiseChart').getContext('2d');
    new Chart(franchiseCtx, {
        type: 'doughnut',
        data: {
            labels: ['NYC', 'LA', 'Chicago', 'Houston'],
            datasets: [{
                data: [40, 25, 20, 15],
                backgroundColor: ['#2196F3', '#4CAF50', '#FF9800', '#E91E63']
            }]
        }
    });
    
    const topProductsCtx = document.getElementById('topProductsChart').getContext('2d');
    new Chart(topProductsCtx, {
        type: 'pie',
        data: {
            labels: ['Vanilla', 'Chocolate', 'Strawberry', 'Mango', 'Pistachio'],
            datasets: [{
                data: [30, 25, 20, 15, 10],
                backgroundColor: ['#FFEB3B', '#795548', '#FF4081', '#FF9800', '#4CAF50']
            }]
        }
    });
    
    const ordersCtx = document.getElementById('ordersChart').getContext('2d');
    new Chart(ordersCtx, {
        type: 'bar',
        data: {
            labels: ['Online', 'In-Store', 'Franchise'],
            datasets: [{
                label: 'Orders',
                data: [500, 350, 200],
                backgroundColor: ['#03A9F4', '#8BC34A', '#FF5722']
            }]
        }
    });
</script>
@endsection
