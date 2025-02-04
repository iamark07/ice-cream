@extends('frontend.partials.app')

@section('content')

<!-- Forgot Password Section -->
<section class="flex justify-center items-center min-h-screen bg-gradient-to-r py-32 poppins-regular px-5 md:px-10">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center text-pink-500 mb-6">Forgot Password</h2>
        
        <!-- Forgot Password Form -->
        <form action="z" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Enter Your Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 text-sm" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-pink-500 text-white p-3 rounded-md hover:bg-pink-600 transition duration-200">Send Reset Link</button>
        </form>

        <!-- Back to Login -->
        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="text-pink-500 hover:text-pink-600 text-sm">Back to Login</a>
        </div>
    </div>
</section>

@endsection
