@extends('frontend.partials.app')

@section('content')

    <!-- Register Section -->
    <section class="flex justify-center items-center min-h-screen bg-gradient-to-r py-32 poppins-regular px-5 md:px-10">
        <div class="w-full md:w-[700px] bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-center text-pink-500 mb-6">Create Account</h2>
            
            <!-- Register Form -->
            <form action="#" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-3">
                    <div class="col-span-2 md:col-span-1">
                        <label for="first_name" class="block text-gray-700 text-sm font-medium mb-2">First Name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="Enter First Name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                    </div>

                    <div class="col-span-2 md:col-span-1">
                        <label for="last_name" class="block text-gray-700 text-sm font-medium mb-2">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                    </div>
                    
                    <div class="col-span-2">
                        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                    </div>

                    <div class="col-span-2">
                        <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                    </div>

                    <!-- Password Field -->
                    <div class="col-span-2">
                        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" placeholder="Create a password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm pr-10" required>
                            <i id="togglePassword" class="ri-eye-off-line absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer"></i>
                        </div>
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="col-span-2 relative">
                        <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-2">Confirm Password</label>
                        <div class="relative">
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm pr-10" required>
                            <i id="toggleConfirmPassword" class="ri-eye-off-line absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer"></i>
                        </div>
                    </div>
                    
                    <!-- Terms & Conditions -->
                    <div class="col-span-2 flex items-center my-3">
                        <input type="checkbox" id="terms" name="terms" class="h-4 w-4">
                        <label for="terms" class="ml-2 text-gray-700 text-sm">I agree to the <a href="#" class="text-pink-500 hover:text-pink-600">Terms & Conditions</a></label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="col-span-2 w-full bg-pink-500 text-white p-3 rounded-md hover:bg-pink-600 transition duration-200">Register</button>
                </div>
            </form>

            <div class="flex items-center justify-between mt-6">
                <hr class="w-full bg-gray-300">
                <span class="text-gray-500 px-2 text-sm">OR</span>
                <hr class="w-full bg-gray-300">
            </div>
            
            <!-- Social Register Buttons -->
            <div class="mt-6 flex flex-col gap-2 justify-center">
                <!-- Google Register -->
                <a href="#" class="w-full shadow-md p-3 rounded-md text-center transition duration-200 flex items-center justify-center text-sm">
                    <img src="{{ asset('assets/img/social-media/google.png')}}" alt="" class="me-2 w-8">Register with Google
                </a>
                <!-- Facebook Register -->
                <a href="#" class="w-full shadow-md p-3 rounded-md text-center transition duration-200 flex items-center justify-center text-sm">
                    <img src="{{ asset('assets/img/social-media/facebook.png')}}" alt="" class="me-2 w-8">Register with Facebook
                </a>
            </div>
            
            <!-- Login Link -->
            <div class="text-center mt-6">
                <span class="text-gray-700 text-sm">Already have an account? </span>
                <a href="{{ route('login') }}" class="text-pink-500 hover:text-pink-600 text-sm">Login Here</a>
            </div>
        </div>
    </section>

    {{-- register custom js--}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const passwordField = document.getElementById("password");
            const togglePassword = document.getElementById("togglePassword");
            const confirmPasswordField = document.getElementById("password_confirmation");
            const toggleConfirmPassword = document.getElementById("toggleConfirmPassword");

            // Toggle password visibility
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

            // Toggle confirm password visibility
            toggleConfirmPassword.addEventListener("click", function () {
                if (confirmPasswordField.type === "password") {
                    confirmPasswordField.type = "text";
                    toggleConfirmPassword.classList.remove("ri-eye-off-line");
                    toggleConfirmPassword.classList.add("ri-eye-line");
                } else {
                    confirmPasswordField.type = "password";
                    toggleConfirmPassword.classList.remove("ri-eye-line");
                    toggleConfirmPassword.classList.add("ri-eye-off-line");
                }
            });
        });
    </script>
@endsection 
