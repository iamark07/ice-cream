@extends('frontend.partials.app')

@section('content')

    <!-- Breadcrumb Section -->
    <section class="relative w-full bg-cover bg-center poppins-regular" style="background-image: url('{{ asset('assets/img/header.jpg') }}');">
        <div class="pt-48 pb-28 md:pt-56 md:pb-32 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white px-5">
            <h2 class="text-3xl md:text-5xl font-bold font-pacifico text-center">Frequently Asked Questions</h2>
            <p class="mt-2 md:text-lg"><a href="{{ route('home') }}" class="text-gray-300 text-center hover:text-white">Home</a> / FAQs</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-gradient-to-r from-pink-500 to-yellow-400 py-20 px-6 md:px-16 lg:px-24 text-white text-center poppins-regular">
        <div class="mx-auto">

            <!-- FAQ Items -->
            <div class="space-y-4">

                <!-- FAQ 1 -->
                <div class="bg-white p-6 cursor-pointer group rounded-lg shadow-lg" onclick="toggleAnswer(1)">
                    <button class="w-full text-left flex justify-between items-center md:text-xl font-semibold text-gray-700 group-hover:text-pink-500 focus:outline-none">
                        <span>What is the process to order ice cream online?</span>
                        <svg id="faq-icon-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-1" class="mt-4 hidden text-start text-gray-600">
                        <p>To order ice cream online, simply browse our menu, select your favorite flavor, and add it to your cart. Then, proceed to checkout and enter your delivery information. You can pay securely via card, UPI, or other methods available.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white p-6 cursor-pointer group rounded-lg shadow-lg" onclick="toggleAnswer(2)">
                    <button class="w-full text-left flex justify-between items-center md:text-xl font-semibold text-gray-700 group-hover:text-pink-500 focus:outline-none">
                        <span>Do you offer vegan options?</span>
                        <svg id="faq-icon-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-2" class="mt-4 hidden text-start text-gray-600">
                        <p>Yes! We offer a range of vegan ice cream options made from plant-based ingredients, ensuring everyone can enjoy our delicious treats.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white p-6 cursor-pointer group rounded-lg shadow-lg" onclick="toggleAnswer(3)">
                    <button class="w-full text-left flex justify-between items-center md:text-xl font-semibold text-gray-700 group-hover:text-pink-500 focus:outline-none">
                        <span>Can I customize my ice cream order?</span>
                        <svg id="faq-icon-3" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-3" class="mt-4 hidden text-start text-gray-600">
                        <p>Absolutely! We offer custom orders for special occasions, allowing you to choose your preferred flavors, toppings, and even create custom ice cream cakes.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white p-6 cursor-pointer group rounded-lg shadow-lg" onclick="toggleAnswer(4)">
                    <button class="w-full text-left flex justify-between items-center md:text-xl font-semibold text-gray-700 group-hover:text-pink-500 focus:outline-none">
                        <span>How do I apply for a franchise?</span>
                        <svg id="faq-icon-4" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-4" class="mt-4 hidden text-start text-gray-600">
                        <p>To apply for a franchise, visit our "Franchise Opportunities" page, fill out the inquiry form, and our team will get in touch with you to guide you through the process.</p>
                        <a href="{{ route('franchise')}}" class="inline-block bg-gradient-to-r from-pink-500 to-yellow-400 text-white px-8 py-3 mt-5 font-semibold rounded-lg shadow-lg">
                            Grab the Deal Now
                        </a>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white p-6 cursor-pointer group rounded-lg shadow-lg" onclick="toggleAnswer(5)">
                    <button class="w-full text-left flex justify-between items-center md:text-xl font-semibold text-gray-700 group-hover:text-pink-500 focus:outline-none">
                        <span>Do you offer home delivery services?</span>
                        <svg id="faq-icon-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-answer-5" class="mt-4 hidden text-start text-gray-600">
                        <p>Yes! We provide home delivery services so you can enjoy your ice cream from the comfort of your home. Simply place your order online, and we will deliver it to your door.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @section('footer')
        @include('frontend.partials.footer')
    @endsection

    <script>
        function toggleAnswer(faqId) {
            const answer = document.getElementById(`faq-answer-${faqId}`);
            const icon = document.getElementById(`faq-icon-${faqId}`);
            
            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                icon.setAttribute('d', 'M5 15l7-7 7 7');
            } else {
                answer.classList.add('hidden');
                icon.setAttribute('d', 'M19 9l-7 7-7-7');
            }
        }
    </script>

@endsection

    

