@extends('franchise.partials.franchise_app')

@section('franchise_content')
<div class="min-h-screen bg-gray-100 py-10">
  <div class="container mx-auto px-5 md:px-10">
    <!-- Header -->
    <div class="mb-8 text-center">
      <h1 class="text-4xl font-bold text-pink-600">Inventory Management</h1>
      <p class="mt-2 text-lg text-gray-700">
        Track stock levels and order supplies to keep your business running smoothly.
      </p>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
      <div class="bg-pink-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-lg font-semibold text-pink-600">Total Products</h3>
        <p class="text-2xl font-bold text-pink-600">120</p>
      </div>
      <div class="bg-pink-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-lg font-semibold text-pink-600">Low Stock Items</h3>
        <p class="text-2xl font-bold text-pink-600">15</p>
      </div>
      <div class="bg-pink-100 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-lg font-semibold text-pink-600">Inventory Value</h3>
        <p class="text-2xl font-bold text-pink-600">₹ 2,50,000</p>
      </div>
    </div>

    <!-- Inventory Table & Filters -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-10">
      <div class="flex flex-col md:flex-row justify-between items-center mb-4 space-y-4 md:space-y-0">
        <!-- Search Input with Icon -->
        <div class="flex w-full md:w-1/3">
          <input type="text" placeholder="Search products..." class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:border-pink-500">
          <button class="px-4 bg-pink-500 text-white rounded-r-lg hover:bg-pink-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </button>
        </div>
        <div class="flex space-x-2">
          <button id="openFilterModal" class="flex text-sm sm:text-base items-center space-x-2 bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded-lg transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M2 4a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-.586 1.414l-4.828 4.828a2 2 0 00-.586 1.414v2.828A2 2 0 0110.828 18H9.172A2 2 0 017 16.828v-2.828a2 2 0 00-.586-1.414L1.586 7.414A2 2 0 011 6V4z" clip-rule="evenodd" />
            </svg>
            <span>Filter</span>
          </button>
          <button id="openAddProductModal" class="flex text-sm sm:text-base items-center space-x-2 bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded-lg transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Add Product</span>
          </button>
        </div>
      </div>
      <div id="scrollContainer" class="overflow-x-auto cursor-grab">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock Level</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <!-- Row 1 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap flex items-center">
                <img class="h-10 w-10 rounded-full" src="{{ asset('assets/img/trending.png')}}" alt="Product">
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">Vanilla Ice Cream</div>
                  <div class="text-sm text-gray-500">SKU: VAN123</div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Ice Cream</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center gap-2">
                    <div class="text-sm text-gray-900">50</div>
                    <div class="text-xs text-red-500">Low Stock</div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">₹ 150</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <button class="bg-pink-500 hover:bg-pink-600 text-white py-2 px-3 rounded-lg text-sm transition duration-200">Order Supplies</button>
              </td>
            </tr>
            <!-- Row 2 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap flex items-center">
                <img class="h-10 w-10 rounded-full" src="{{ asset('assets/img/trending.png')}}" alt="Product">
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">Chocolate Ice Cream</div>
                  <div class="text-sm text-gray-500">SKU: CHO456</div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Ice Cream</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">80</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">₹ 200</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <button class="bg-pink-500 hover:bg-pink-600 text-white py-2 px-3 rounded-lg text-sm transition duration-200">Order Supplies</button>
              </td>
            </tr>
            <!-- Row 3 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap flex items-center">
                <img class="h-10 w-10 rounded-full" src="{{ asset('assets/img/trending.png')}}" alt="Product">
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">Strawberry Ice Cream</div>
                  <div class="text-sm text-gray-500">SKU: STR789</div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Ice Cream</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">100</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">₹ 180</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <button class="bg-pink-500 hover:bg-pink-600 text-white py-2 px-3 rounded-lg text-sm transition duration-200">Order Supplies</button>
              </td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </div>

    <!-- Inventory Trend Chart (Optional) -->
    <div class="bg-white shadow-lg rounded-lg p-6">
      <h3 class="text-xl font-semibold text-pink-600 mb-4">Inventory Trend</h3>
      <div class="relative h-64">
        <canvas id="inventoryChart" class="w-full h-full"></canvas>
      </div>
    </div>
  </div>
</div>

<!-- Filter Modal -->
<div id="filterModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-2xl w-11/12 md:w-1/2 p-8 relative shadow-2xl transform transition-all duration-300">
    <div class="flex justify-between items-center border-b pb-4 mb-6">
      <h3 class="text-2xl font-semibold text-pink-600">Filter Products</h3>
      <button id="closeFilterModal" class="text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
    </div>
    <form>
      <div class="mb-4">
        <label for="filterCategory" class="block text-sm font-medium text-pink-500">Category</label>
        <select id="filterCategory" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500">
          <option value="">All Categories</option>
          <option value="ice-cream">Ice Cream</option>
          <option value="sundae">Sundae</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="mb-4">
        <label class="block text-sm font-medium text-pink-500">Price Range</label>
        <div class="flex space-x-2">
          <input type="number" placeholder="Min" class="w-1/2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500">
          <input type="number" placeholder="Max" class="w-1/2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500">
        </div>
      </div>
      <div class="mb-4">
        <label class="block text-sm font-medium text-pink-500">Stock Level</label>
        <div class="flex items-center space-x-2">
          <input type="checkbox" id="lowStockOnly" class="h-4 w-4 text-pink-500 focus:ring-pink-500 border-gray-300">
          <label for="lowStockOnly" class="text-sm text-gray-700">Show low stock items only</label>
        </div>
      </div>
      <div class="flex justify-end space-x-4 mt-6">
        <button type="button" id="cancelFilter" class="bg-gray-300 hover:bg-gray-400 transition duration-200 text-gray-700 py-2 px-4 rounded-full">
          Cancel
        </button>
        <button type="submit" class="bg-pink-500 hover:bg-pink-600 transition duration-200 text-white py-2 px-4 rounded-full">
          Apply Filter
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Add Product Modal -->
<div id="addProductModal" class="fixed inset-0 py-12 h-[100dvh] overflow-auto bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-2xl w-11/12 md:w-1/2 p-8 relative shadow-2xl transform transition-all duration-300  mt-96 md:mt-52">
    <div class="flex justify-between items-center border-b pb-4 mb-6">
      <h3 class="text-2xl font-semibold text-pink-600">Add New Product</h3>
      <button id="closeAddProductModal" class="text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
    </div>
    <form>
      <div class="mb-4">
        <label for="productName" class="block text-sm font-medium text-pink-500">Product Name</label>
        <input type="text" id="productName" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500" placeholder="Enter product name">
      </div>
      <div class="mb-4">
        <label for="productCategory" class="block text-sm font-medium text-pink-500">Category</label>
        <select id="productCategory" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500">
          <option value="">Select Category</option>
          <option value="ice-cream">Ice Cream</option>
          <option value="sundae">Sundae</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label for="productPrice" class="block text-sm font-medium text-pink-500">Price</label>
          <input type="number" id="productPrice" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500" placeholder="Enter price">
        </div>
        <div>
          <label for="productStock" class="block text-sm font-medium text-pink-500">Stock Level</label>
          <input type="number" id="productStock" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500" placeholder="Enter stock level">
        </div>
      </div>
      <div class="mb-4">
        <label for="productSKU" class="block text-sm font-medium text-pink-500">SKU</label>
        <input type="text" id="productSKU" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500" placeholder="Enter product SKU">
      </div>
      <div class="mb-4">
        <label for="productImage" class="block text-sm font-medium text-pink-500">Product Image</label>
        <input type="file" id="productImage" class="mt-1 block w-full">
      </div>
      <div class="mb-4">
        <label for="productDescription" class="block text-sm font-medium text-pink-500">Description</label>
        <textarea id="productDescription" rows="3" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-500" placeholder="Enter product description"></textarea>
      </div>
      <div class="flex justify-end space-x-4 mt-6">
        <button type="button" id="cancelAddProduct" class="bg-gray-300 hover:bg-gray-400 transition duration-200 text-gray-700 py-2 px-4 rounded-full">
          Cancel
        </button>
        <button type="submit" class="bg-pink-500 hover:bg-pink-600 transition duration-200 text-white py-2 px-4 rounded-full">
          Add Product
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Initialize Inventory Trend Chart
  const ctx = document.getElementById('inventoryChart').getContext('2d');
  const inventoryChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'Stock Level',
        data: [50, 60, 55, 70, 65, 80, 75, 90, 85, 100, 95, 110],
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

  // Modal Handling for Filter Modal
  const openFilterModalBtn = document.getElementById('openFilterModal');
  const closeFilterModalBtn = document.getElementById('closeFilterModal');
  const filterModal = document.getElementById('filterModal');
  const cancelFilterBtn = document.getElementById('cancelFilter');

  openFilterModalBtn.addEventListener('click', () => {
    filterModal.classList.remove('hidden');
  });

  closeFilterModalBtn.addEventListener('click', () => {
    filterModal.classList.add('hidden');
  });

  cancelFilterBtn.addEventListener('click', () => {
    filterModal.classList.add('hidden');
  });

  filterModal.addEventListener('click', (e) => {
    if(e.target === filterModal) {
      filterModal.classList.add('hidden');
    }
  });

  // Modal Handling for Add Product Modal
  const openAddProductModalBtn = document.getElementById('openAddProductModal');
  const closeAddProductModalBtn = document.getElementById('closeAddProductModal');
  const addProductModal = document.getElementById('addProductModal');
  const cancelAddProductBtn = document.getElementById('cancelAddProduct');

  openAddProductModalBtn.addEventListener('click', () => {
    addProductModal.classList.remove('hidden');
  });

  closeAddProductModalBtn.addEventListener('click', () => {
    addProductModal.classList.add('hidden');
  });

  cancelAddProductBtn.addEventListener('click', () => {
    addProductModal.classList.add('hidden');
  });

  addProductModal.addEventListener('click', (e) => {
    if(e.target === addProductModal) {
      addProductModal.classList.add('hidden');
    }
  });
</script>
@endsection
