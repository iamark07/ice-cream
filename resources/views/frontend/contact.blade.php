@extends('frontend.partials.app')

@section('content')
    
    <!-- Breadcrumb Section -->
    <section class="relative w-full bg-cover bg-center" style="background-image: url('assets/img/header.jpg');">
        <div class="pt-48 pb-28 md:pt-56 md:pb-32 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white">
            <h2 class="text-3xl md:text-5xl font-bold font-pacifico">Contact Us</h2>
            <p class="mt-2 md:text-lg"><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Home</a> / Contact Us</p>
        </div>
    </section>
    
    <!-- Contact Form Section -->
    <section class="py-16 px-5 md:px-10 lg:px-20 text-gray-800">
        <div class="max-w-6xl mx-auto">
            <div class="w-full flex flex-col items-center">

                <!-- Contact Information -->
                <div class="bg-white md:mb-10 w-full md:w-[700px]">
                    <h3 class="text-2xl md:text-4xl font-semibold text-pink-500 font-pacifico mb-6 md:mb-16 text-center">Contact Information</h3>
                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="flex items-start">
                            <div class="min-w-10 min-h-10 bg-pink-500 rounded-full flex items-center justify-center">
                                <i class="ri-map-pin-2-line text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-700">Our Address</h4>
                                <p class="text-gray-600 text-sm">123 Ice Cream Street, Sweet City, SC 12345</p>
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="flex items-start">
                            <div class="min-w-10 min-h-10 bg-pink-500 rounded-full flex items-center justify-center">
                                <i class="ri-phone-line text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-700">Call Us</h4>
                                <p class="text-gray-600 text-sm">
                                    <a href="tel:+911234567890" class="hover:text-pink-500">+91 123 456 7890</a>
                                </p>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="flex items-start">
                            <div class="min-w-10 min-h-10 bg-pink-500 rounded-full flex items-center justify-center">
                                <i class="ri-mail-line text-white text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-700">Email Us</h4>
                                <p class="text-gray-600 text-sm">
                                    <a href="mailto:info@icecreamparlor.com" class="hover:text-pink-500">info@icecreamparlor.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 w-full md:w-[700px] rounded-lg shadow-lg">
                    <h2 class="text-2xl md:text-4xl font-semibold text-pink-500 font-pacifico mb-10 text-center">Get in Touch</h2>
                    <form id="contactForm" class="space-y-6">
                        <div class="grid grid-cols-2 gap-5">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                                <input type="text" id="name" name="name" class="text-sm mt-2 w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="Enter your name" required>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                                <input type="email" id="email" name="email" class="text-sm mt-2 w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="Enter your email" required>
                            </div>
                            <div class="col-span-2">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Your Phone</label>
                                <input type="tel" id="phone" name="phone" class="text-sm mt-2 w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="Enter your phone number" required>
                            </div>
                            <div class="col-span-2">
                                <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                                <textarea id="message" name="message" rows="5" class="text-sm mt-2 w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="Write your message here..." required></textarea>
                            </div>
                            <div class="col-span-2">
                                <button type="submit" class="w-full bg-pink-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-pink-600 transition duration-300 text-sm">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 px-5 md:px-10 lg:px-20">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl md:text-4xl font-semibold text-pink-500 font-pacifico mb-8 text-center">Find Us on the Map</h2>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.366123456789!2d77.12345678901234!3d28.65432109876543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDM5JzE1LjYiTiA3N8KwMDcnMjEuNiJF!5e0!3m2!1sen!2sin!4v1631234567890!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    {{-- footer --}}
    @section('footer')
        @include('frontend.partials.footer')
    @endsection
    
@endsection 