@extends('franchise.partials.franchise_app')

@section('franchise_content')
<div class="min-h-screen bg-gray-100 py-10">
  <div class="container mx-auto px-5 md:px-10">
    <!-- Header -->
    <div class="mb-8 text-center">
      <h1 class="text-4xl font-bold text-pink-600">Sales Reports</h1>
      <p class="mt-2 text-lg text-gray-700">
        View and manage daily, weekly, and monthly sales insights.
      </p>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
      <div class="bg-pink-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-lg font-semibold text-pink-600">Total Orders</h3>
        <p class="text-2xl font-bold text-pink-600">350</p>
      </div>
      <div class="bg-pink-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-lg font-semibold text-pink-600">Total Revenue</h3>
        <p class="text-2xl font-bold text-pink-600">₹ 4,20,000</p>
      </div>
      <div class="bg-pink-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-lg font-semibold text-pink-600">Avg Order Value</h3>
        <p class="text-2xl font-bold text-pink-600">₹ 1,200</p>
      </div>
    </div>

    <!-- Time Filter & Sales Chart -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-10">
      <div class="flex flex-col md:flex-row justify-between items-center mb-4">
        <!-- Tabs for Daily, Weekly, Monthly -->
        <div class="flex space-x-4">
          <button id="dailyTab" class="tab-btn bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded-full transition duration-200">Daily</button>
          <button id="weeklyTab" class="tab-btn bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded-full transition duration-200">Weekly</button>
          <button id="monthlyTab" class="tab-btn bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded-full transition duration-200">Monthly</button>
        </div>
        <!-- Filter Button -->
        <button id="openSalesFilterModal" class="mt-4 md:mt-0 flex items-center space-x-2 bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded-lg transition duration-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M2 4a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-.586 1.414l-4.828 4.828a2 2 0 00-.586 1.414v2.828A2 2 0 0110.828 18H9.172A2 2 0 017 16.828v-2.828a2 2 0 00-.586-1.414L1.586 7.414A2 2 0 011 6V4z" clip-rule="evenodd" />
          </svg>
          <span>Filter</span>
        </button>
      </div>
      <div class="relative h-64">
        <canvas id="salesChart" class="w-full h-full"></canvas>
      </div>
    </div>

    <!-- Sales Reports Table -->
    <div class="bg-white shadow-lg rounded-lg p-6">
      <div id="scrollContainer" class="overflow-x-auto cursor-grab">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <!-- Sample Row 1 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#1001</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Raj Kumar</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-01-10</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹ 1,200</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-700">Delivered</span>
              </td>
            </tr>
            <!-- Sample Row 2 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#1002</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Simran Kaur</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-01-11</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹ 1,500</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-700">Pending</span>
              </td>
            </tr>
            <!-- Sample Row 3 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#1003</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Amit Sharma</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-01-12</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹ 1,300</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-700">Cancelled</span>
              </td>
            </tr>
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Sales Filter Modal -->
<div id="salesFilterModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-2xl w-11/12 md:w-1/2 p-8 relative shadow-2xl transform transition-all duration-300">
    <div class="flex justify-between items-center border-b pb-4 mb-6">
      <h3 class="text-2xl font-semibold text-pink-600">Filter Sales Reports</h3>
      <button id="closeSalesFilterModal" class="text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
    </div>
    <form>
      <div class="mb-4">
        <label for="filterDateRange" class="block text-sm font-medium text-pink-500">Date Range</label>
        <input type="text" id="filterDateRange" placeholder="Select date range" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500">
      </div>
      <div class="mb-4">
        <label for="filterStatus" class="block text-sm font-medium text-pink-500">Order Status</label>
        <select id="filterStatus" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500">
          <option value="">All</option>
          <option value="delivered">Delivered</option>
          <option value="pending">Pending</option>
          <option value="cancelled">Cancelled</option>
        </select>
      </div>
      <div class="flex justify-end space-x-4 mt-6">
        <button type="button" id="cancelSalesFilter" class="bg-gray-300 hover:bg-gray-400 transition duration-200 text-gray-700 py-2 px-4 rounded-full">
          Cancel
        </button>
        <button type="submit" class="bg-pink-500 hover:bg-pink-600 transition duration-200 text-white py-2 px-4 rounded-full">
          Apply Filter
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Data sets for different time frames
  const dailyData = [30, 40, 35, 50, 45, 60, 55];
  const weeklyData = [210, 240, 225, 280, 265, 300, 275, 320, 310, 330, 300, 350];
  const monthlyData = [900, 950, 980, 1020, 1100, 1150, 1200, 1250, 1300, 1280, 1320, 1350];

  let currentData = dailyData;

  // Initialize Sales Chart
  const ctx = document.getElementById('salesChart').getContext('2d');
  let salesChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'Sales',
        data: currentData,
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

  // Tab handling for Sales Chart
  const dailyTab = document.getElementById('dailyTab');
  const weeklyTab = document.getElementById('weeklyTab');
  const monthlyTab = document.getElementById('monthlyTab');

  dailyTab.addEventListener('click', () => {
    currentData = dailyData;
    updateChart(['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']);
    dailyTab.classList.add('bg-pink-500', 'text-white');
    weeklyTab.classList.remove('bg-pink-500', 'text-white');
    monthlyTab.classList.remove('bg-pink-500', 'text-white');
    dailyTab.classList.remove('bg-gray-200', 'text-gray-800');
    weeklyTab.classList.add('bg-gray-200', 'text-gray-800');
    monthlyTab.classList.add('bg-gray-200', 'text-gray-800');
  });

  weeklyTab.addEventListener('click', () => {
    currentData = weeklyData;
    updateChart(['Wk1', 'Wk2', 'Wk3', 'Wk4', 'Wk5', 'Wk6', 'Wk7', 'Wk8', 'Wk9', 'Wk10', 'Wk11', 'Wk12']);
    weeklyTab.classList.add('bg-pink-500', 'text-white');
    dailyTab.classList.remove('bg-pink-500', 'text-white');
    monthlyTab.classList.remove('bg-pink-500', 'text-white');
    weeklyTab.classList.remove('bg-gray-200', 'text-gray-800');
    dailyTab.classList.add('bg-gray-200', 'text-gray-800');
    monthlyTab.classList.add('bg-gray-200', 'text-gray-800');
  });

  monthlyTab.addEventListener('click', () => {
    currentData = monthlyData;
    updateChart(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
    monthlyTab.classList.add('bg-pink-500', 'text-white');
    dailyTab.classList.remove('bg-pink-500', 'text-white');
    weeklyTab.classList.remove('bg-pink-500', 'text-white');
    monthlyTab.classList.remove('bg-gray-200', 'text-gray-800');
    dailyTab.classList.add('bg-gray-200', 'text-gray-800');
    weeklyTab.classList.add('bg-gray-200', 'text-gray-800');
  });

  function updateChart(labels) {
    salesChart.data.labels = labels;
    salesChart.data.datasets[0].data = currentData;
    salesChart.update();
  }

  // Modal Handling for Sales Filter Modal
  const openSalesFilterModalBtn = document.getElementById('openSalesFilterModal');
  const closeSalesFilterModalBtn = document.getElementById('closeSalesFilterModal');
  const salesFilterModal = document.getElementById('salesFilterModal');
  const cancelSalesFilterBtn = document.getElementById('cancelSalesFilter');

  openSalesFilterModalBtn.addEventListener('click', () => {
    salesFilterModal.classList.remove('hidden');
  });

  closeSalesFilterModalBtn.addEventListener('click', () => {
    salesFilterModal.classList.add('hidden');
  });

  cancelSalesFilterBtn.addEventListener('click', () => {
    salesFilterModal.classList.add('hidden');
  });

  salesFilterModal.addEventListener('click', (e) => {
    if(e.target === salesFilterModal) {
      salesFilterModal.classList.add('hidden');
    }
  });
</script>
@endsection
