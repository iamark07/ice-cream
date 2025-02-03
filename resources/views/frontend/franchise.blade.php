@extends('frontend.partials.app')

@section('content')
    
    <!-- Breadcrumb Section -->
    <section class="relative w-full bg-cover bg-center" style="background-image: url('{{ asset('assets/img/header.jpg') }}');">
        <div class="pt-48 pb-28 md:pt-56 md:pb-32 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white">
            <h2 class="text-3xl md:text-5xl font-bold font-pacifico">Franchise Opportunity</h2>
            <p class="mt-2 md:text-lg"><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Home</a> / Franchise</p>
        </div>
    </section>

    <!-- Franchise Inquiry Section -->
    <section id="franchise-inquiry" class="bg-gradient-to-r from-blue-400 to-purple-500 py-20 px-6 md:px-10 xl:px-20 text-white text-center">
        <div class="">
            <h2 class="text-2xl md:text-4xl font-semibold text-white-500 mb-5 font-pacifico animate-bounce">🍦 Become Our Franchise Partner! 🍦</h2>
            <p class="mb-8 poppins-regular">Join our growing family and bring the joy of our delicious ice creams to your city. Fill the form below to get started!</p>
            
            <div class="grid grid-cols-2 gap-7 md:gap-5 xl:gap-10 lg:bg-white lg:p-10 rounded-lg">
                <div class="col-span-2 lg:col-span-1 items-center hidden lg:flex">
                    <img src="{{ asset('assets/img/franchise.jpg')}}" alt="" class="w-full h-full object-cover rounded-lg">
                </div>

                <div class="col-span-2 lg:col-span-1 bg-white px-5 py-8 md:p-8 rounded-lg shadow-lg text-gray-800">
                    <h2 class="text-lg md:text-2xl font-semibold text-white-500 mb-5 poppins-regular">Franchise Inquery</h2>
                    <!-- Inquiry Form -->
                    <form id="franchise-form">
                        <div class="grid grid-cols-2 gap-5">
                            <!-- Name -->
                            <div class="flex flex-col items-start col-span-2 sm:col-span-1">
                                <label class="font-semibold text-sm poppins-regular mb-2">Full Name</label>
                                <input type="text" id="name" class=" text-sm w-full p-3 border rounded-lg" placeholder="Enter your name" required>
                            </div>
                            <!-- Phone -->
                            <div class="flex flex-col items-start col-span-2 sm:col-span-1">
                                <label class="font-semibold text-sm poppins-regular mb-2">Phone Number</label>
                                <input type="tel" id="phone" class=" text-sm w-full p-3 border rounded-lg" placeholder="Enter your phone" required>
                            </div>
                            <!-- Email -->
                            <div class="flex flex-col items-start col-span-2">
                                <label class="font-semibold mb-2 text-sm poppins-regular">Email Address</label>
                                <input type="email" id="email" class=" text-sm w-full p-3 border rounded-lg" placeholder="Enter your email" required>
                            </div>
                            <!-- City -->
                            <div class="flex flex-col items-start col-span-2">
                                <label class="font-semibold mb-2 text-sm poppins-regular">City</label>
                                <input type="text" id="city" class=" text-sm w-full p-3 border rounded-lg" placeholder="Enter your city" required>
                            </div>
                            <!-- Message -->
                            <div class="flex flex-col items-start col-span-2">
                                <label class="font-semibold mb-2 text-sm poppins-regular">Tell Us About Your Interest</label>
                                <textarea id="message" rows="4" class=" text-sm w-full p-3 border rounded-lg" placeholder="Why do you want to start a franchise?" required></textarea>
                            </div>
                            
                            <!-- Submit Button -->
                            <button type="submit" class="poppins-regular col-span-2 w-full bg-pink-500 text-white py-3 rounded-lg font-semibold shadow-md hover:bg-pink-700 transition-all">Submit Inquiry</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Franchise Benefits Section -->
    <section class="py-20 px-6 md:px-10 xl:px-20 text-gray-800 text-center poppins-regular">
        <h2 class="text-3xl font-bold mb-5 text-purple-600">Why Become Our Franchise Partner?</h2>
        <p class="mb-8">We offer an excellent opportunity for aspiring entrepreneurs to start a profitable business.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="p-6 border rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-3">🍨 Low Investment</h3>
                <p>We offer a cost-effective franchise model with a high return on investment.</p>
            </div>
            <div class="p-6 border rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-3">📦 Supply Chain Support</h3>
                <p>We provide a hassle-free supply chain so you can focus on sales.</p>
            </div>
            <div class="p-6 border rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-3">📢 Marketing Assistance</h3>
                <p>Our expert marketing team will help you attract more customers.</p>
            </div>
        </div>
    </section>

    {{-- footer --}}
    @section('footer')
        @include('frontend.partials.footer')
    @endsection
    
@endsection 
