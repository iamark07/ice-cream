<!-- Include Head -->
@include('frontend.partials.head')

<body class="bg-[#f8f8f8] font-roboto overflow-x-hidden">
    <!-- Include Header -->
    @include('frontend.partials.header')

    <!-- Login Section -->
    <section class="flex justify-center items-center min-h-screen bg-gradient-to-r py-32 poppins-regular px-5 md:px-10">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-center text-pink-500 mb-6">Login to Your Account</h2>
            
            <!-- Login Form -->
            <form action="#" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
                </div>
                
                <!-- Remember Me -->
                <div class="flex items-center mb-6">
                    <input type="checkbox" id="remember" name="remember" class="h-5 w-5 text-pink-500 focus:ring-2 focus:ring-pink-500">
                    <label for="remember" class="ml-2 text-gray-700 text-sm">Remember Me</label>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="w-full bg-pink-500 text-white p-3 rounded-md hover:bg-pink-600 transition duration-200">Login</button>
                
                <!-- Forgot Password Link -->
                <div class="text-center mt-4">
                    <a href="" class="text-pink-500 hover:text-pink-600 text-sm">Forgot Password?</a>
                </div>
            </form>

            <div class="flex items-center justify-between mt-6">
                <hr class="w-full bg-gray-300">
                <span class="text-gray-500 px-2 text-sm">OR</span>
                <hr class="w-full bg-gray-300">
            </div>
            
            <!-- Social Login Buttons -->
            <div class="mt-6 flex flex-col gap-2 justify-center">
                <!-- Google Login -->
                <a href="#" class="w-full shadow-md p-3 rounded-md text-center transition duration-200 flex items-center justify-center text-sm">
                    <img src="{{ asset('assets/img/social-media/google.png')}}" alt="" class="me-2 w-10">Login with Google
                </a>
                <!-- Facebook Login -->
                <a href="#" class="w-full shadow-md p-3 rounded-md text-center transition duration-200 flex items-center justify-center text-sm">
                    <img src="{{ asset('assets/img/social-media/facebook.png')}}" alt="" class="me-2 w-10">Login with Facebook
                </a>
            </div>
            
            <!-- Register Link -->
            <div class="text-center mt-6">
                <span class="text-gray-700 text-sm">Don't have an account? </span>
                <a href="{{ route('register') }}" class="text-pink-500 hover:text-pink-600 text-sm">Register Here</a>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/header.js') }}"></script>
</body>
</html>
