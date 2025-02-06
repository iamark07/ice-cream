@extends('franchise.partials.franchise_app')

@section('franchise_content')
<div class="min-h-screen bg-gray-100 py-10">
  <div class="container mx-auto px-5 md:px-10">
    <!-- Header -->
    <div class="mb-8 text-center">
      <h1 class="text-4xl font-bold text-pink-600">Order Management</h1>
      <p class="mt-2 text-lg text-gray-700">
        Track and manage your online &amp; offline orders seamlessly.
      </p>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
      <div class="bg-pink-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-lg font-semibold text-pink-600">Total Orders</h3>
        <p class="text-2xl font-bold text-pink-600">250</p>
      </div>
      <div class="bg-pink-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-lg font-semibold text-pink-600">Online Orders</h3>
        <p class="text-2xl font-bold text-pink-600">180</p>
      </div>
      <div class="bg-pink-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-lg font-semibold text-pink-600">Offline Orders</h3>
        <p class="text-2xl font-bold text-pink-600">70</p>
      </div>
    </div>

    <!-- Orders Table & Filters -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-10">
      <div class="flex flex-col md:flex-row justify-between items-center mb-4 space-y-4 md:space-y-0">
        <!-- Search Input with Icon -->
        <div class="flex w-full md:w-1/3">
          <input type="text" placeholder="Search orders..." class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:border-pink-500">
          <button class="px-4 bg-pink-500 text-white rounded-r-lg hover:bg-pink-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </button>
        </div>
        <div class="flex space-x-2">
          <button id="openOrderFilterModal" class="flex items-center space-x-2 bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded-lg transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M2 4a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-.586 1.414l-4.828 4.828a2 2 0 00-.586 1.414v2.828A2 2 0 0110.828 18H9.172A2 2 0 017 16.828v-2.828a2 2 0 00-.586-1.414L1.586 7.414A2 2 0 011 6V4z" clip-rule="evenodd" />
            </svg>
            <span>Filter</span>
          </button>
        </div>
      </div>
      <!-- Table Container with Drag-to-Scroll (Text selection disabled during drag) -->
      <div id="scrollContainer" class="overflow-x-auto cursor-grab">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Order ID</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Customer</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Date</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Amount</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Payment Mode</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Status</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-nowrap">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <!-- Sample Row 1 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">#2001</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">Raj Kumar</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">2025-02-10</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">₹ 1,500</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">Online</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Delivered</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-nowrap">
                <button class="bg-pink-500 hover:bg-pink-600 text-white py-2 px-3 rounded-lg text-sm transition duration-200">View Details</button>
              </td>
            </tr>
            <!-- Sample Row 2 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">#2002</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">Simran Kaur</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">2025-02-11</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">₹ 1,200</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">Offline</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-nowrap">
                <button class="bg-pink-500 hover:bg-pink-600 text-white py-2 px-3 rounded-lg text-sm transition duration-200">View Details</button>
              </td>
            </tr>
            <!-- Sample Row 3 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">#2003</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">Amit Sharma</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">2025-02-12</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">₹ 1,800</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap text-gray-900">Online</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Cancelled</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-nowrap">
                <button class="bg-pink-500 hover:bg-pink-600 text-white py-2 px-3 rounded-lg text-sm transition duration-200">View Details</button>
              </td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Order Filter Modal -->
<div id="orderFilterModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-2xl w-11/12 md:w-1/2 p-8 relative shadow-2xl transform transition-all duration-300">
    <div class="flex justify-between items-center border-b pb-4 mb-6">
      <h3 class="text-2xl font-semibold text-pink-600">Filter Orders</h3>
      <button id="closeOrderFilterModal" class="text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
    </div>
    <form>
      <div class="mb-4">
        <label for="orderFilterDateRange" class="block text-sm font-medium text-pink-500">Date Range</label>
        <input type="text" id="orderFilterDateRange" placeholder="Select date range" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500">
      </div>
      <div class="mb-4">
        <label for="orderFilterPayment" class="block text-sm font-medium text-pink-500">Payment Mode</label>
        <select id="orderFilterPayment" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500">
          <option value="">All</option>
          <option value="online">Online</option>
          <option value="offline">Offline</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="orderFilterStatus" class="block text-sm font-medium text-pink-500">Order Status</label>
        <select id="orderFilterStatus" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500">
          <option value="">All</option>
          <option value="delivered">Delivered</option>
          <option value="pending">Pending</option>
          <option value="cancelled">Cancelled</option>
        </select>
      </div>
      <div class="flex justify-end space-x-4 mt-6">
        <button type="button" id="cancelOrderFilter" class="bg-gray-300 hover:bg-gray-400 transition duration-200 text-gray-700 py-2 px-4 rounded-full">
          Cancel
        </button>
        <button type="submit" class="bg-pink-500 hover:bg-pink-600 transition duration-200 text-white py-2 px-4 rounded-full">
          Apply Filter
        </button>
      </div>
    </form>
  </div>
</div>

<!-- JS for Modal Handling -->
<script>
  // Order Filter Modal Handling
  const openOrderFilterModalBtn = document.getElementById('openOrderFilterModal');
  const closeOrderFilterModalBtn = document.getElementById('closeOrderFilterModal');
  const orderFilterModal = document.getElementById('orderFilterModal');
  const cancelOrderFilterBtn = document.getElementById('cancelOrderFilter');

  openOrderFilterModalBtn.addEventListener('click', () => {
    orderFilterModal.classList.remove('hidden');
  });
  closeOrderFilterModalBtn.addEventListener('click', () => {
    orderFilterModal.classList.add('hidden');
  });
  cancelOrderFilterBtn.addEventListener('click', () => {
    orderFilterModal.classList.add('hidden');
  });
  orderFilterModal.addEventListener('click', (e) => {
    if(e.target === orderFilterModal) {
      orderFilterModal.classList.add('hidden');
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
</script>
@endsection
