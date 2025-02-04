@extends('frontend.profile.partials.profile_app')

@section('profile_content')

    <!-- Main Content -->
    <div class="flex-1 px-5 py-10 md:p-10">

        <!-- Profile Section -->
        <section id="profile" class="w-full">
            <h2 class="text-3xl font-bold text-gray-800 py-5">Profile Details</h2>
            <div class="bg-white p-6 shadow-md rounded-lg space-y-4 border-l-4 border-pink-500 w-full">
                <!-- Update Password Button -->
                <div onclick="openModal('updatePassword')" class="flex justify-end items-center font-semibold text-pink-500 mb-5 cursor-pointer">Update Password</div>

                <!-- Name Section -->
                <div class="flex justify-between items-center bg-gray-100 p-3 rounded-md">
                    <p class="font-semibold text-sm md:text-base text-gray-700"><span class="text-pink-500 me-2">Name:</span> John Doe</p>
                    <i class="ri-edit-box-line text-pink-500 md:text-lg cursor-pointer" onclick="openModal('editName')"></i>
                </div>

                <!-- Email Section -->
                <div class="flex justify-between items-center bg-gray-100 p-3 rounded-md">
                    <p class="font-semibold text-sm md:text-base text-gray-700"><span class="text-pink-500 me-2">Email:</span> johndoe@example.com</p>
                    <i class="ri-edit-box-line text-pink-500 md:text-lg cursor-pointer" onclick="openModal('editEmail')"></i>
                </div>

                <!-- Phone Section -->
                <div class="flex justify-between items-center bg-gray-100 p-3 rounded-md">
                    <p class="font-semibold text-sm md:text-base text-gray-700"><span class="text-pink-500 me-2">Phone:</span> +91 9876543210</p>
                    <i class="ri-edit-box-line text-pink-500 md:text-lg cursor-pointer" onclick="openModal('editPhone')"></i>
                </div>

                <!-- Address Section -->
                <div class="flex justify-between items-center bg-gray-100 p-3 rounded-md">
                    <p class="font-semibold text-sm md:text-base text-gray-700"><span class="text-pink-500 me-2">Address:</span> Aiims New Delhi India</p>
                    <i class="ri-edit-box-line text-pink-500 md:text-lg cursor-pointer" onclick="openModal('editAddress')"></i>
                </div>
            </div>
        </section>
    </div>

    <!-- Popup Modals -->
    <!-- Overlay for Blur Background -->
    <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden" onclick="closeModal()"></div>

    <!-- Name Edit Modal -->
    <div id="editNameModal" class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full md:w-fit h-fit flex items-center justify-center hidden px-5">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96" onclick="event.stopPropagation()">
            <h3 class="text-xl font-bold mb-4">Edit Name</h3>
            <form>
                <input type="text" placeholder="Enter New Name" class="w-full p-2 border rounded mb-4">
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Email Edit Modal -->
    <div id="editEmailModal" class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full md:w-fit h-fit flex items-center justify-center hidden px-5">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96" onclick="event.stopPropagation()">
            <h3 class="text-xl font-bold mb-4">Edit Email</h3>
            <form>
                <input type="email" placeholder="Enter New Email" class="w-full p-2 border rounded mb-4">
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Phone Edit Modal -->
    <div id="editPhoneModal" class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full md:w-fit h-fit flex items-center justify-center hidden px-5">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96" onclick="event.stopPropagation()">
            <h3 class="text-xl font-bold mb-4">Edit Phone</h3>
            <form>
                <input type="tel" placeholder="Enter New Phone" class="w-full p-2 border rounded mb-4">
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Address Edit Modal -->
    <div id="editAddressModal" class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full md:w-fit h-fit flex items-center justify-center hidden px-5">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96" onclick="event.stopPropagation()">
            <h3 class="text-xl font-bold mb-4">Edit Address</h3>
            <form>
                <input placeholder="Enter New Address" class="w-full p-2 border rounded mb-4">
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Update Password Modal -->
    <div id="updatePasswordModal" class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full md:w-fit h-fit flex items-center justify-center hidden px-5">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96" onclick="event.stopPropagation()">
            <h3 class="text-xl font-bold mb-4">Update Password</h3>
            <form>
                <input type="password" placeholder="Current Password" class="w-full p-2 border rounded mb-4">
                <input type="password" placeholder="New Password" class="w-full p-2 border rounded mb-4">
                <input type="password" placeholder="Confirm New Password" class="w-full p-2 border rounded mb-5">
                <a href="{{ route('forget_password') }}" class="mb-2 text-blue-500">Forget Password?</a>
                <div class="flex justify-end space-x-2 mt-5">
                    <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Function to open modal
        function openModal(modalId) {
            document.getElementById('modalOverlay').classList.remove('hidden');
            document.getElementById(`${modalId}Modal`).classList.remove('hidden');
        }

        // Function to close modal
        function closeModal() {
            document.getElementById('modalOverlay').classList.add('hidden');
            document.querySelectorAll('[id$="Modal"]').forEach(modal => {
                modal.classList.add('hidden');
            });
        }
    </script>
@endsection