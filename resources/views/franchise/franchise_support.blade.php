@extends('franchise.partials.franchise_app')

@section('franchise_content')
<div class="max-w-7xl mx-auto py-10 px-6">
    <h2 class="text-4xl font-bold text-pink-500 text-center mb-8">Franchise Support & Training</h2>
    
    <!-- Training Sections -->
    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white p-6 shadow-lg rounded-xl">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Step-by-Step Training Guides</h3>
            <p class="text-gray-600 mb-4">Access detailed step-by-step guides to help you run your franchise successfully.</p>
            <a href="#" class="text-pink-500 font-bold hover:underline">View Training Guides →</a>
        </div>
        <div class="bg-white p-6 shadow-lg rounded-xl">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Video Tutorials</h3>
            <p class="text-gray-600 mb-4">Watch expert-led training videos covering all essential aspects of franchise management.</p>
            <a href="#" class="text-pink-500 font-bold hover:underline">Watch Videos →</a>
        </div>
    </div>
    
    <!-- Support Options -->
    <div class="mt-12 grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 shadow-lg rounded-xl text-center">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">FAQs & Help Center</h3>
            <p class="text-gray-600 mb-4">Find answers to common questions and troubleshooting tips.</p>
            <a href="#" class="text-pink-500 font-bold hover:underline">Visit Help Center →</a>
        </div>
        <div class="bg-white p-6 shadow-lg rounded-xl text-center">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Live Chat Support</h3>
            <p class="text-gray-600 mb-4">Get instant help from our support team through live chat.</p>
            <a href="#" class="text-pink-500 font-bold hover:underline">Start Chat →</a>
        </div>
        <div class="bg-white p-6 shadow-lg rounded-xl text-center">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Phone & Email Support</h3>
            <p class="text-gray-600 mb-4">Contact us via phone or email for dedicated franchise assistance.</p>
            <a href="#" class="text-pink-500 font-bold hover:underline">Contact Us →</a>
        </div>
    </div>
    
    <!-- Community & Forums -->
    <div class="mt-12 bg-white p-6 shadow-lg rounded-xl">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Franchise Community & Discussion Forums</h3>
        <p class="text-gray-600 mb-4">Join our community of franchise owners to share experiences, ask questions, and network.</p>
        <a href="#" class="text-pink-500 font-bold hover:underline">Join the Community →</a>
    </div>
</div>
@endsection
