@extends('frontend.partials.app')

@section('content')
    
    <!-- Breadcrumb Section -->
    <section class="relative w-full bg-cover bg-center" style="background-image: url('assets/img/header.jpg');">
        <div class="pt-48 pb-28 md:pt-56 md:pb-32 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white">
            <h2 class="text-3xl md:text-5xl font-bold font-pacifico">About Us</h2>
            <p class="mt-2 md:text-lg"><a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Home</a> / About Us</p>
        </div>
    </section>
    
    <!-- About Content Section -->
    <section class="py-16 px-5 md:px-10 lg:px-20 text-gray-800">
        <div class="flex flex-wrap items-center justify-between">
            <div class="w-full">
                <h2 class="text-4xl font-semibold text-pink-500 font-pacifico mb-5">Our Story</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <p class="leading-relaxed">Our journey began with a dream to create the most delicious and high-quality ice creams, bringing joy to every scoop. Over the years, we have expanded our presence and built a brand that represents quality, authenticity, and love for frozen delights.</p>
                        <p class="leading-relaxed mt-4">With a commitment to using the freshest ingredients and innovative, our ice cream shop has grown into a nationwide franchise. We provide franchise opportunities for passionate entrepreneurs who wish to be a part of our sweet journey.</p>
                        <p class="leading-relaxed mt-4">Join our business and become a part of our ever-growing family. Whether you're looking to own an ice cream shop or expand your existing business, our franchise model is designed for success.</p>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/img/franchise.jpg') }}" class="w-full h-full rounded-lg shadow-2xl border-4 border-pink-500" alt="Our Story">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-pink-500 to-yellow-500 text-white py-16 px-6 text-center poppins-regular">
        <h2 class="text-3xl font-bold">Want to Join Our Franchise?</h2>
        <p class="mt-4 text-lg">Be part of our growing family and bring sweetness to your city!</p>
        <a href="/franchise" class="mt-6 inline-block bg-white text-pink-600 px-6 py-3 rounded-lg font-semibold">Get in Touch</a>
    </section>
    
    {{-- <!-- Additional Section -->
    <section class="bg-white py-16 px-6 text-gray-800">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-4xl font-semibold text-pink-500 font-pacifico mb-5">Our Commitment</h2>
            <p class="text-lg leading-relaxed">We believe in crafting the finest ice creams using natural ingredients and innovative flavors. Our dedication to quality ensures that every scoop delivers a delightful experience.</p>
        </div>
        <div class="mt-12 flex flex-wrap items-center justify-center gap-8">
            <img src="{{ asset('assets/img/commitment.jpg') }}" class="w-1/3 rounded-lg shadow-lg" alt="Commitment">
            <img src="{{ asset('assets/img/quality.jpg') }}" class="w-1/3 rounded-lg shadow-lg" alt="Quality">
        </div>
    </section> --}}

    <!-- Why Choose Us Section -->
    <section class="bg-white py-16 px-6 text-gray-800">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-4xl font-semibold text-pink-500 font-pacifico mb-5">Why Choose Us?</h2>
            <p class="text-lg leading-relaxed">We stand out because of our unwavering commitment to quality, taste, and innovation. Our loyal customer base and strong brand presence make us the ideal choice for franchise owners.</p>
            <ul class="text-lg mt-6 space-y-4 text-left mx-auto max-w-2xl list-disc pl-6 text-gray-700">
                <li>Premium ingredients and unique flavors</li>
                <li>Proven business model and strong brand identity</li>
                <li>Comprehensive training and support for franchisees</li>
                <li>Effective marketing strategies and customer engagement</li>
                <li>A community of passionate entrepreneurs</li>
            </ul>
        </div>
    </section>
    
@endsection 
