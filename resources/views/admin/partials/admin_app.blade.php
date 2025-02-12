<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.admin_head')
</head>

<body class="text-gray-800 font-roboto overflow-x-hidden bg-[#f7f7f7]">
    @include('admin.partials.admin_header') 

        <main class="w-full lg:w-[80%] h-fit">
            @yield('admin_content')
        </main>
    </div>

    {{-- Default Scripts (For All Pages) --}}
    <script src="{{ asset('assets/js/admin.js') }}"></script>

</body>

</html>