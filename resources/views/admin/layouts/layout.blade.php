<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    @include('admin.partial.link') {{-- CSS & Framework --}}
</head>

<body class="bg-gray-100">
    <div class="flex bg-[#282332]">
        {{-- Sidebar --}}

        <div class="grid w-full gap-10 bg-white h-max">
            <div class="flex justify-between w-full p-4 border-b-[1px]">
                <div>
                    @yield('breadcrumbs')
                </div>
                @include ('admin.partial.topbar')
            </div>
            {{-- Konten utama --}}
            <div class="bg-white h-svh">
                @yield('content')
            </div>
        </div>
    </div>

    @include('admin.partial.script') {{-- Script & JS --}}
</body>

</html>