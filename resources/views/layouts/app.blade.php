<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Sini Cerita')</title>

    @include('layouts.partial.link')
</head>

<body class="@yield('body-class')">
    <div class=" @yield('section-header', 'items-center justify-center w-full md:px-6 lg:px-24 md:py-6 h-max')">
        <div class="bg-white rounded-[20px] relative shadow-lg  @yield('header-container')">
            <nav class="@yield('navbar', 'flex items-center justify-between w-full px-5 sm:px-8 py-4')">
                @if (session('role_id') == 1)
                    @include ('layouts.partial.navbar')
                @elseif (session('role_id') == 2)
                    @include ('layouts.partial.navbar_dokter')
                @else
                    @include ('layouts.partial.navbar')
                @endif
            </nav>
            @yield('app-hero')
        </div>
    </div>

    <div class="@yield('section-content', 'items-center justify-center w-full md:px-6 lg:px-24 h-max py-6')">
        @yield('app-content')
    </div>

    <div class=" @yield('section-footer', 'items-center justify-center w-full mt-6 md:px-6 lg:px-24 py-6 h-max')">
        <footer
            class="bg-white rounded-[30px] grid xl:grid-cols-2 shadow-lg gap-12 place-items-center h-max justify-center p-6 md:p-16 transition-all ease-out duration-300">

            @include ('layouts.partial.footer')
        </footer>
    </div>
    @stack('scripts')
    @yield('script')
    @include('layouts.partial.script')
</body>

</html>
