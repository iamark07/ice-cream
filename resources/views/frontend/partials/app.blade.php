<head>
    @include('frontend.partials.head')
</head>

<body class="text-gray-800 font-roboto overflow-x-hidden">
    @include('frontend.partials.header') 

    <main>
        @yield('content')
    </main>

    @include('frontend.partials.footer') <!-- Footer -->

    <!-- jQuery and Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    {{-- header section js --}}
    <script src="{{ asset('assets/js/header.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>