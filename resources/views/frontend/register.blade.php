<!-- Include Head -->
@include('frontend.partials.head')

<body class="bg-[#f8f8f8] font-roboto overflow-x-hidden">
    <!-- Include Header -->
    @include('frontend.partials.header')

    <!-- Register Section -->
    <section class="flex justify-center items-center min-h-screen bg-gradient-to-r py-32 poppins-regular px-5 md:px-10">
        <div class="w-full md:w-[700px] bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-center text-pink-500 mb-6">Create Account</h2>
            
            <!-- Register Form -->
            <form action="#" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-3">
                    <div class="col-span-2 md:col-span-1">
                        <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                    </div>

                    <div class="col-span-2 md:col-span-1">
                        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                    </div>

                    <div class="col-span-2">
                        <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                    </div>

                    <div class="col-span-2">
                        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                        <input type="password" id="password" name="password" placeholder="Create a password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                    </div>

                    <div class="col-span-2">
                        <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-2">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                    </div>
                    
                    <!-- Terms & Conditions -->
                    <div class="col-span-2 flex items-center my-3">
                        <input type="checkbox" id="terms" name="terms" class="h-5 w-5 text-pink-500 focus:ring-2 focus:ring-pink-500">
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
                    <img src="{{ asset('assets/img/social-media/google.png')}}" alt="" class="me-2 w-10">Register with Google
                </a>
                <!-- Facebook Register -->
                <a href="#" class="w-full shadow-md p-3 rounded-md text-center transition duration-200 flex items-center justify-center text-sm">
                    <img src="{{ asset('assets/img/social-media/facebook.png')}}" alt="" class="me-2 w-10">Register with Facebook
                </a>
            </div>
            
            <!-- Login Link -->
            <div class="text-center mt-6">
                <span class="text-gray-700 text-sm">Already have an account? </span>
                <a href="{{ route('login') }}" class="text-pink-500 hover:text-pink-600 text-sm">Login Here</a>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/header.js') }}"></script>
</body>
