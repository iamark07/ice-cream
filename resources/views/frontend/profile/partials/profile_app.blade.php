<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.profile.partials.profile_head')
</head>

<body class="text-gray-800 font-roboto overflow-x-hidden bg-[#f7f7f7]">
    @include('frontend.profile.partials.profile_header') 

        <main class="w-full lg:w-[80%] h-fit">
            @yield('profile_content')
        </main>
    </div>


    {{-- Default Scripts (For All Pages) --}}
    <script src="{{ asset('assets/js/profile.js') }}"></script>

</body>

</html>