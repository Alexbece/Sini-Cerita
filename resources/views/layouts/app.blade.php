<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Sini Cerita')</title>

    @include('layouts.partial.link')
</head>

<body class="@yield('body-class')">
    <div class="items-center justify-center w-full px-24 py-6 h-max @yield('section-header')">
        <div class="bg-white rounded-[20px] overflow-hidden relative shadow-lg  @yield('header-container')">
            <nav class="@yield('navbar', 'flex items-center justify-between w-full px-8 py-4')">
                @include ('layouts.partial.navbar')
            </nav>
                @yield('app-hero')
        </div>
    </div>

    <div class="@yield('section-content', 'items-center justify-center w-full px-24 h-max py-6 ')">
        @yield('app-content')
    </div>

    <div class="items-center justify-center w-full mt-6 px-24 py-6 h-max @yield('section-footer')">
        <footer
            class="bg-white rounded-[30px] grid xl:grid-cols-2 shadow-lg gap-12 place-items-center h-max justify-center p-16 transition-all ease-out duration-300">

            @include ('layouts.partial.footer')
        </footer>
    </div>

    @yield('script')
    @include('layouts.partial.script')
</body>

</html>
