@extends('frontend.partials.app')

@section('content')

<!-- Breadcrumb Section -->
<section class="relative w-full bg-cover bg-center poppins-regular" style="background-image: url('{{ asset('assets/img/header.jpg') }}');">
    <div class="pt-48 pb-28 md:pt-56 md:pb-32 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white px-5">
        <h2 class="text-3xl md:text-5xl font-bold font-pacifico text-center">Our Premium Ice Cream Services</h2>
        <p class="mt-2 md:text-lg"><a href="{{ route('home') }}" class="text-gray-300 text-center hover:text-white">Home</a> / Services</p>
    </div>
</section>

<!-- Ice Cream Selling Service -->
<section class="py-16 px-5 md:px-10 lg:px-20 poppins-regular">
    <div class="mx-auto px-4">
        <h2 class="text-4xl font-semibold text-pink-500 font-pacifico mb-5 text-center">Ice Cream Sales</h2>
        <p class="mt-4 text-lg text-center">We offer a wide range of premium ice cream flavors that cater to every taste. Whether you're craving classic vanilla or adventurous options like caramel swirl, we have something for everyone.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
            <div class="service-card p-6 border rounded shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-md">
                <img src="{{ asset('assets/img/portfolio-1.jpg')}}" alt="Ice Cream Flavor" class="w-full h-48 object-cover rounded mb-4">
                <h3 class="text-xl font-semibold">Classic Flavors</h3>
                <p class="text-sm">Indulge in our rich, creamy classic ice cream flavors, perfect for every occasion.</p>
            </div>
            <div class="service-card p-6 border rounded shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-md">
                <img src="{{ asset('assets/img/portfolio-2.jpg')}}" alt="Ice Cream Flavor" class="w-full h-48 object-cover rounded mb-4">
                <h3 class="text-xl font-semibold">Exotic Flavors</h3>
                <p class="text-sm">Explore our unique and exotic flavors crafted for the adventurous taste buds.</p>
            </div>
            <div class="service-card p-6 border rounded shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-md">
                <img src="{{ asset('assets/img/portfolio-3.jpg')}}" alt="Ice Cream Flavor" class="w-full h-48 object-cover rounded mb-4">
                <h3 class="text-xl font-semibold">Vegan Options</h3>
                <p class="text-sm">We offer plant-based ice cream options, perfect for those seeking a dairy-free treat.</p>
            </div>
        </div>
    </div>
</section>

<!-- Franchise Opportunity -->
<section class="bg-gradient-to-r from-blue-400 to-purple-500 py-10 px-6 md:px-10 xl:px-20 text-white poppins-regular">
    <div class="container mx-auto flex flex-col items-center">
        <h2 class="text-4xl font-semibold text-white font-pacifico mb-5 text-center">Franchise Opportunities</h2>
        <p class="mt-4 text-lg text-center">Want to be a part of our growing ice cream family? Join our franchise network and bring the best ice cream to your area. We offer an excellent support system to ensure the success of your franchise.</p>
        <ul class="list-disc text-lg my-6 bg-white text-black py-8 ps-12 pe-5 shadow-lg rounded-md w-full">
            <li class="mb-2 text-base">Exclusive franchise rights in your region.</li>
            <li class="mb-2 text-base">Complete training and ongoing support from our experienced team.</li>
            <li class="mb-2 text-base">A proven business model that ensures high profitability.</li>
            <li class="mb-2 text-base">Access to our premium ice cream ingredients and recipes.</li>
            <li class="mb-2 text-base">Marketing support to help you grow your franchise quickly.</li>
        </ul>
        <p class="mb-4 text-center">If you are passionate about ice cream and want to be part of a thriving business, fill out the franchise inquiry form below to learn more.</p>
        <a href="/franchise" class="mt-6 inline-block bg-white text-pink-600 px-6 py-3 rounded-lg font-semibold">Apply for Franchise</a>
    </div>
</section>

<!-- Additional Services (Delivery, Custom Orders, etc.) -->
<section class="py-16 px-5 md:px-10 lg:px-20 poppins-regular">
    <div class="mx-auto px-4">
        <h2 class="text-4xl font-semibold text-pink-500 font-pacifico mb-8 text-center">Additional Services</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Ice Cream Delivery -->
            <div class="service-card p-6 border rounded shadow-lg text-center transition-all duration-300 hover:scale-105 hover:shadow-md">
                <div class="text-4xl text-pink-500 mb-4">
                    <i class="ri-truck-line"></i> <!-- Delivery Icon -->
                </div>
                <h3 class="text-xl font-semibold">Ice Cream Delivery</h3>
                <p class="text-sm mt-3">We offer home delivery services so you can enjoy our ice cream without leaving the comfort of your home.</p>
            </div>
            
            <!-- Custom Ice Cream Orders -->
            <div class="service-card p-6 border rounded shadow-lg text-center transition-all duration-300 hover:scale-105 hover:shadow-md">
                <div class="text-4xl text-pink-500 mb-4">
                    <i class="ri-gift-line"></i> <!-- Custom Order Icon -->
                </div>
                <h3 class="text-xl font-semibold">Custom Ice Cream Orders</h3>
                <p class="text-sm mt-3">Celebrate special occasions with custom flavors and designs. We offer personalized ice cream cakes and other treats.</p>
            </div>
            
            <!-- Catering for Events -->
            <div class="service-card p-6 border rounded shadow-lg text-center transition-all duration-300 hover:scale-105 hover:shadow-md">
                <div class="text-4xl text-pink-500 mb-4">
                    <i class="ri-restaurant-line"></i> <!-- Catering Icon -->
                </div>
                <h3 class="text-xl font-semibold">Catering for Events</h3>
                <p class="text-sm mt-3">From birthdays to corporate events, we offer catering services with a variety of ice cream options to delight your guests.</p>
            </div>
        </div>
    </div>
</section>


<!-- Contact / Support -->
<section class="bg-gradient-to-r from-pink-500 to-yellow-500 text-white py-16 px-6 text-center poppins-regular">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold">Need More Information?</h2>
        <p class="mt-4 text-lg">If you have any questions about our services, franchise opportunities, or ice cream products, feel free to reach out to us!</p>
        <a href="/franchise" class="mt-6 inline-block bg-white text-pink-600 px-6 py-3 rounded-lg font-semibold">Contact Us</a>
    </div>
</section>



{{-- footer --}}
@section('footer')
    @include('frontend.partials.footer')
@endsection

@endsection
