@extends('franchise.partials.franchise_app')

@section('franchise_content')
<div class="py-10">
  <div class="container mx-auto px-5 md:px-10">
    <!-- Header -->
    <div class="mb-10 text-center">
      <h1 class="text-3xl md:text-4xl font-bold text-pink-600">Franchise Profile</h1>
      <p class="mt-2 text-base text-gray-700">Manage and update your business details seamlessly.</p>
    </div>
    
    <!-- Profile Card -->
    <div class="bg-white shadow-2xl rounded-xl px-5 sm:px-8 py-8">
      <div class="flex gap-3 sm:gap-5 flex-col sm:flex-row items-center">
        <!-- Profile Icon -->
        <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center">
            <i class="ri-shield-user-fill text-pink-500 text-3xl"></i>
        </div>
        <div>
          <h3 class="text-2xl font-semibold text-pink-600 text-center sm:text-start">Ice Cream Paradise</h3>
          <p class="text-gray-600 text-center sm:text-start">Serving premium ice cream with fresh ingredients.</p>
        </div>
      </div>
      <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-pink-50 p-4 rounded-lg shadow-sm">
          <label class="block text-sm font-medium text-pink-500">Business Name</label>
          <p class="profile_details mt-1 text-gray-800 font-medium text-sm md:text-base w-full overflow-auto">Ice Cream Paradise</p>
        </div>
        <div class="bg-pink-50 p-4 rounded-lg shadow-sm">
          <label class="block text-sm font-medium text-pink-500">Business Description</label>
          <p class="profile_details mt-1 text-gray-800 text-sm md:text-base w-full overflow-auto">We serve premium ice cream made with fresh ingredients.</p>
        </div>
        <div class="bg-pink-50 p-4 rounded-lg shadow-sm">
          <label class="block text-sm font-medium text-pink-500">Address</label>
          <p class="profile_details mt-1 text-gray-800 text-sm md:text-base w-full overflow-auto">123 Ice Cream Street, New York</p>
        </div>
        <div class="bg-pink-50 p-4 rounded-lg shadow-sm">
          <label class="block text-sm font-medium text-pink-500">Phone Number</label>
          <p class="profile_details mt-1 text-gray-800 text-sm md:text-base w-full overflow-auto">+1 234-567-890</p>
        </div>
        <div class="bg-pink-50 p-4 rounded-lg shadow-sm md:col-span-2">
          <label class="block text-sm font-medium text-pink-500">Email</label>
          <p class="profile_details mt-1 text-gray-800 text-sm md:text-base w-full overflow-auto">contact@icecreamparadise.com</p>
        </div>
      </div>
      
      <div class="mt-8 text-right">
        <button id="openModal" class="bg-pink-500 hover:bg-pink-600 transition duration-200 text-white py-3 px-8 rounded-full shadow-lg">
          Edit Profile
        </button>
      </div>
    </div>
    
    <!-- Edit Profile Modal -->
    <div id="editModal" class="fixed left-0 h-[100dvh] top-0 w-full py-12 overflow-auto bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-2xl w-11/12 md:w-2/3 lg:w-1/2 p-8 relative shadow-2xl transform transition-all duration-300 mt-96 md:mt-52">
          <div class="flex justify-between items-center border-b pb-4 mb-6">
            <h3 class="text-2xl font-semibold text-pink-600">Edit Business Profile</h3>
            <button id="closeModal" class="text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
          </div>
          <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="mb-4 md:mb-0">
                <label for="businessName" class="block text-sm font-medium text-pink-500">Business Name</label>
                <input type="text" id="businessName" name="businessName" 
                       class="text-sm mt-1 block w-full py-2 px-3 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition duration-150 ease-in-out" 
                       value="Ice Cream Paradise">
              </div>
              <div>
                <label for="phone" class="block text-sm font-medium text-pink-500">Phone Number</label>
                <input type="text" id="phone" name="phone" 
                       class="text-sm mt-1 block w-full py-2 px-3 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition duration-150 ease-in-out" 
                       value="+1 234-567-890">
              </div>
            </div>
            <div class="mt-4">
              <label for="businessDescription" class="block text-sm font-medium text-pink-500">Business Description</label>
              <textarea id="businessDescription" name="businessDescription" rows="3" 
                        class="text-sm mt-1 block w-full py-2 px-3 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition duration-150 ease-in-out">We serve premium ice cream made with fresh ingredients.
              </textarea>
            </div>
            <div class="mt-4">
              <label for="address" class="block text-sm font-medium text-pink-500">Address</label>
              <input type="text" id="address" name="address" 
                     class="text-sm mt-1 block w-full py-2 px-3 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition duration-150 ease-in-out" 
                     value="123 Ice Cream Street, New York">
            </div>
            <div class="mt-4">
              <label for="email" class="block text-sm font-medium text-pink-500">Email</label>
              <input type="email" id="email" name="email" 
                     class="text-sm mt-1 block w-full py-2 px-3 bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition duration-150 ease-in-out" 
                     value="contact@icecreamparadise.com">
            </div>
            <div class="mt-4">
              <label for="logo" class="block text-sm font-medium text-pink-500">Profile Logo</label>
              <input type="file" id="logo" name="logo" 
                     class="mt-2 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-pink-50 file:text-pink-500 hover:file:bg-pink-100">
            </div>
            <div class="mt-8 flex justify-end space-x-4">
              <button type="button" id="cancelEdit" class="text-sm md:text-base bg-gray-300 hover:bg-gray-400 transition duration-200 text-gray-700 py-2 px-6 rounded-full">
                Cancel
              </button>
              <button type="submit" class="text-sm md:text-base bg-pink-500 hover:bg-pink-600 transition duration-200 text-white py-2 px-6 rounded-full">
                Save Changes
              </button>
            </div>
          </form>
        </div>
      </div>
      
      
    
  </div>
</div>

<!-- Modal Handling Script -->
<script>
  // Grab elements
  const openModalBtn = document.getElementById('openModal');
  const closeModalBtn = document.getElementById('closeModal');
  const cancelEditBtn = document.getElementById('cancelEdit');
  const editModal = document.getElementById('editModal');

  // Function to open the modal
  openModalBtn.addEventListener('click', () => {
    editModal.classList.remove('hidden');
  });

  // Function to close the modal
  const closeModal = () => {
    editModal.classList.add('hidden');
  };

  closeModalBtn.addEventListener('click', closeModal);
  cancelEditBtn.addEventListener('click', closeModal);

  // Close modal if clicking outside the modal content
  editModal.addEventListener('click', (e) => {
    if (e.target === editModal) {
      closeModal();
    }
  });
</script>
@endsection
