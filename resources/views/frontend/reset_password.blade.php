@extends('frontend.partials.app')

@section('content')

<!-- Reset Password Section -->
<section class="flex justify-center items-center min-h-screen bg-gradient-to-r py-32 poppins-regular px-5 md:px-10">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center text-pink-500 mb-6">Reset Password</h2>
        
        <!-- Reset Password Form -->
        <form action="" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                <input type="email" id="email" name="email" value="" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" placeholder="Enter email" required>
            </div>

            <!-- Password Field with Eye Icon -->
            <div class="mb-6 relative">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">New Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" placeholder="Enter new password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm pr-10" required>
                    <i id="togglePassword" class="ri-eye-off-line absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer"></i>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mb-6 relative">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-2">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm new password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-pink-500 text-white p-3 rounded-md hover:bg-pink-600 transition duration-200">Reset Password</button>
        </form>

        <!-- Back to Login -->
        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="text-pink-500 hover:text-pink-600 text-sm">Back to Login</a>
        </div>
    </div>
</section>

<!-- Password Toggle Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const passwordField = document.getElementById("password");
        const togglePassword = document.getElementById("togglePassword");

        togglePassword.addEventListener("click", function () {
            if (passwordField.type === "password") {
                passwordField.type = "text";
                togglePassword.classList.remove("ri-eye-off-line");
                togglePassword.classList.add("ri-eye-line");
            } else {
                passwordField.type = "password";
                togglePassword.classList.remove("ri-eye-line");
                togglePassword.classList.add("ri-eye-off-line");
            }
        });
    });
</script>

@endsection
