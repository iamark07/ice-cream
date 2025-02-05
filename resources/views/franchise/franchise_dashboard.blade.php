@extends('franchise.partials.franchise_app')

@section('franchise_content')
<div class="container mx-auto px-4 md:px-10 py-10 bg-gray-100 min-h-screen">
  <!-- Header -->
  <div class="mb-8 text-center md:text-left">
    <h1 class="text-3xl md:text-4xl font-bold text-pink-500">Welcome to Franchise Dashboard</h1>
    <p class="mt-2 text-gray-700 text-sm md:text-base">
      Overview of your performance and recent activity.
    </p>
  </div>

  <!-- Overview Cards -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
    <div class="shadow-lg p-6 rounded-lg bg-pink-100 flex flex-col items-center">
      <h3 class="font-semibold text-lg md:text-xl mb-2 text-pink-600">Total Sales</h3>
      <p class="text-2xl font-bold">₹ 25,000</p>
    </div>
    <div class="shadow-lg p-6 rounded-lg bg-pink-100 flex flex-col items-center">
      <h3 class="font-semibold text-lg md:text-xl mb-2 text-pink-600">Orders</h3>
      <p class="text-2xl font-bold">150 Orders</p>
    </div>
    <div class="shadow-lg p-6 rounded-lg bg-pink-100 flex flex-col items-center">
      <h3 class="font-semibold text-lg md:text-xl mb-2 text-pink-600">Active Promotions</h3>
      <p class="text-2xl font-bold">3 Active</p>
    </div>
  </div>

  <!-- Detailed Sections -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Monthly Sales Chart -->
    <div class="bg-white shadow-lg p-6 rounded-lg">
      <h3 class="font-semibold text-lg mb-4 text-pink-500">Monthly Sales Overview</h3>
      <div class="relative h-64">
        <canvas id="salesChart" class="w-full h-full"></canvas>
      </div>
    </div>

    <!-- Recent Orders Table -->
    <div class="bg-white shadow-lg p-6 rounded-lg">
      <h3 class="font-semibold text-lg mb-4 text-pink-500">Recent Orders</h3>
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th class="px-4 py-2 text-left text-sm font-medium text-gray-500 text-nowrapmin-">Order ID</th>
              <th class="px-4 py-2 text-left text-sm font-medium text-gray-500 text-nowrapmin-">Customer</th>
              <th class="px-4 py-2 text-left text-sm font-medium text-gray-500 text-nowrapmin-">Amount</th>
              <th class="px-4 py-2 text-left text-sm font-medium text-gray-500 text-nowrapmin-">Status</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100">
            <tr>
              <td class="px-4 py-2 text-sm text-gray-700 text-nowrap">#1023</td>
              <td class="px-4 py-2 text-sm text-gray-700 text-nowrap">Raj Kumar</td>
              <td class="px-4 py-2 text-sm text-gray-700 text-nowrap">₹ 500</td>
              <td class="px-4 py-2 text-sm text-green-600 text-nowrap">Delivered</td>
            </tr>
            <tr>
              <td class="px-4 py-2 text-sm text-gray-700 text-nowrap">#1024</td>
              <td class="px-4 py-2 text-sm text-gray-700 text-nowrap">Simran Kaur</td>
              <td class="px-4 py-2 text-sm text-gray-700 text-nowrap">₹ 750</td>
              <td class="px-4 py-2 text-sm text-yellow-600 text-nowrap">Pending</td>
            </tr>
            <tr>
              <td class="px-4 py-2 text-sm text-gray-700 text-nowrap">#1025</td>
              <td class="px-4 py-2 text-sm text-gray-700 text-nowrap">Amit Sharma</td>
              <td class="px-4 py-2 text-sm text-gray-700 text-nowrap">₹ 1200</td>
              <td class="px-4 py-2 text-sm text-red-600 text-nowrap">Cancelled</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Additional Sections -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-10">
    <!-- Top Selling Flavors -->
    <div class="bg-white shadow-lg p-6 rounded-lg">
      <h3 class="font-semibold text-lg mb-4 text-pink-500">Top Selling Flavors</h3>
      <ul class="divide-y divide-gray-200">
        <li class="py-2 flex justify-between items-center">
          <span>Vanilla</span>
          <span class="text-gray-600">120 sold</span>
        </li>
        <li class="py-2 flex justify-between items-center">
          <span>Chocolate</span>
          <span class="text-gray-600">95 sold</span>
        </li>
        <li class="py-2 flex justify-between items-center">
          <span>Strawberry</span>
          <span class="text-gray-600">80 sold</span>
        </li>
      </ul>
    </div>

    <!-- Notifications -->
    <div class="bg-white shadow-lg p-6 rounded-lg">
      <h3 class="font-semibold text-lg mb-4 text-pink-500">Notifications</h3>
      <ul class="space-y-3">
        <li class="flex items-center">
          <div class="min-w-2 min-h-2 bg-pink-500 rounded-full mr-3"></div>
          <span class="text-gray-700">New order received from Simran Kaur.</span>
        </li>
        <li class="flex items-center">
          <div class="min-w-2 min-h-2 bg-pink-500 rounded-full mr-3"></div>
          <span class="text-gray-700">Promotion campaign updated successfully.</span>
        </li>
        <li class="flex items-center">
          <div class="min-w-2 min-h-2 bg-pink-500 rounded-full mr-3"></div>
          <span class="text-gray-700">Stock alert: Vanilla flavor is running low.</span>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Initialize the sales chart
  const ctx = document.getElementById('salesChart').getContext('2d');
  const salesChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'Sales (₹)',
        data: [2000, 3000, 2500, 4000, 3500, 4500, 5000, 4800, 5300, 6000, 6500, 7000],
        backgroundColor: 'rgba(219, 39, 119, 0.2)',
        borderColor: 'rgba(219, 39, 119, 1)',
        borderWidth: 2,
        fill: true,
        tension: 0.3
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            callback: function(value) {
              return '₹' + value;
            }
          }
        }
      }
    }
  });
</script>
@endsection
