<!DOCTYPE html>
<html lang="en">
<head>
    @include('franchise.partials.franchise_head')
</head>

<body class="text-gray-800 font-roboto overflow-x-hidden bg-[#f7f7f7]">
    @include('franchise.partials.franchise_header') 

        <main class="w-full lg:w-[80%] h-fit">
            @yield('franchise_content')
        </main>
    </div>


    {{-- Default Scripts (For All Pages) --}}
    <script src="{{ asset('assets/js/franchise.js') }}"></script>

</body>

</html>