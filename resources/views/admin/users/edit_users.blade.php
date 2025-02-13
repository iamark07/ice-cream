@extends('admin.partials.admin_app')

@section('admin_content')
<div class="p-6 bg-gray-50 min-h-screen py-14 flex items-center justify-center">
    <div class="max-w-4xl w-full bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit User</h2>
        <form action="" method="POST" class="space-y-5" onsubmit="return validatePasswords()">
            @csrf
            <div class="grid grid-cols-2 gap-5">
                <div class="col-span-2 sm:col-span-1">
                    <label class="mb-1 block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" name="firstname" class=" p-3 w-full border rounded outline-none" required>
                </div>

                <div class="col-span-2 sm:col-span-1">
                    <label class="mb-1 block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" name="lastname" class=" p-3 w-full border rounded outline-none" required>
                </div>
                
                <div class="col-span-2">
                    <label class="mb-1 block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class=" p-3 w-full border rounded outline-none" required>
                </div>
                
                <div class="col-span-2">
                    <label class="mb-1 block text-sm font-medium text-gray-700">Mobile</label>
                    <input type="text" name="mobile" class=" p-3 w-full border rounded outline-none" required>
                </div>
                
                <div class="relative col-span-2">
                    <label class="mb-1 block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" class=" p-3 w-full border rounded outline-none pr-10" required>
                        <i class="ri-eye-off-line absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer" id="togglePassword"></i>
                    </div>
                </div>

                <div class="col-span-2">
                    <label class="mb-1 block text-sm font-medium text-gray-700">Confirm Password</label>
                    <div class="relative">
                        <input type="password" id="confirmPassword" name="confirm_password" class=" p-3 w-full border rounded outline-none pr-10" required>
                        <i class="ri-eye-off-line absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer" id="toggleConfirmPassword"></i>
                    </div>
                </div>
                
                <div class="col-span-2">
                    <label class="mb-1 block text-sm font-medium text-gray-700">Role</label>
                    <select name="role" class=" p-3 w-full border rounded outline-none" required>
                        <option disabled selected>Select User</option>
                        <option value="customer">Customer</option>
                        <option value="franchise-owner">Franchise Owner</option>
                        <option value="staff">Staff</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-end gap-3">
                <a href="{{route('admin_users')}}"><button class="bg-gray-400 text-white px-5 py-2 rounded-lg hover:bg-gray-500 transition">Reset</button></a>
                <button type="submit" class="bg-pink-500 text-white px-5 py-2 rounded-lg hover:bg-pink-600 transition">Add User</button>
            </div>
        </form>
    </div>
</div>

<script>
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    const togglePassword = document.getElementById('togglePassword');
    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');

    togglePassword.addEventListener('click', function () {
        toggleVisibility(passwordInput, togglePassword);
    });

    toggleConfirmPassword.addEventListener('click', function () {
        toggleVisibility(confirmPasswordInput, toggleConfirmPassword);
    });

    function toggleVisibility(input, icon) {
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('ri-eye-off-line', 'ri-eye-line');
        } else {
            input.type = 'password';
            icon.classList.replace('ri-eye-line', 'ri-eye-off-line');
        }
    }

    function validatePasswords() {
        if (passwordInput.value !== confirmPasswordInput.value) {
            alert('Passwords do not match!');
            return false;
        }
        return true;
    }
</script>
@endsection