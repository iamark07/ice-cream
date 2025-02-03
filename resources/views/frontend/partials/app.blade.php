<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.partials.head')
</head>

<body class="text-gray-800 font-roboto overflow-x-hidden">
    @include('frontend.partials.header') 

    <main>
        @yield('content')
    </main>

    @yield('footer') <!-- Footer will be included only if defined -->

    {{-- Default Scripts (For All Pages) --}}
    <script src="{{ asset('assets/js/header.js') }}"></script>

    {{-- Extra Scripts (Only for Home Page) --}}
    @yield('extra-scripts')
</body>

</html>