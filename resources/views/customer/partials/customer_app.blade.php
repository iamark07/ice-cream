<!DOCTYPE html>
<html lang="en">
<head>
    @include('customer.partials.customer_head')
</head>

<body class="text-gray-800 font-roboto overflow-x-hidden bg-[#f7f7f7]">
    @include('customer.partials.customer_header') 

        <main class="w-full lg:w-[80%] h-fit">
            @yield('customer_content')
        </main>
    </div>


    {{-- Default Scripts (For All Pages) --}}
    <script src="{{ asset('assets/js/customer.js') }}"></script>

</body>

</html>