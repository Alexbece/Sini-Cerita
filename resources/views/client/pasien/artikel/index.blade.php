@php
    use Illuminate\Support\Str;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel Edukasi - Sini Cerita</title>
    @include('layouts.partial.link')
</head>

<body class="blog_index">
    <div class="items-center justify-center w-full md:px-6 lg:px-24 md:py-6 h-max">
        <div class="bg-biru-1 rounded-[20px]">
            <nav class="relative flex items-center justify-between w-full px-8 py-4">
                @include ('layouts.partial.navbar')
            </nav>
        </div>
    </div>

    <div class="items-center justify-center w-full lg:px-24 px-6 py-6 h-max">
        <div class="flex flex-col items-center justify-center">

            <div class="flex flex-col items-center justify-center w-full gap-14">
                <h1 class="w-full text-3xl font-semibold text-center text-biru-6">Halaman Edukasi</h1>
                <div class="flex flex-col-reverse items-center justify-between w-full gap-6 px-20 xl:flex xl:flex-row">
                    <div
                        class="sm:flex hidden justify-center gap-2 text-sm transition-all duration-300 ease-out xl:justify-start lg:w-full w-max text-hitam-700 lg:gap-4 lg:text-base ">
                        <a href="{{ route('artikel-edukasi') }}"
                            class="px-3 py-2 text-hitam-800 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max {{ request('category') ? '' : 'bg-biru-6 text-white' }} hover:bg-biru-6 hover:text-white">Semua</a>
                        <a href="{{ route('artikel-edukasi', ['category' => 'Burnout']) }}"
                            class="px-3 py-2 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max hover:bg-biru-6 {{ request('category') == 'Burnout' ? 'bg-biru-6 text-white' : '' }} hover:text-white">Burnout</a>
                        <a href="{{ route('artikel-edukasi', ['category' => 'Gangguan Mood']) }}"
                            class="px-3 py-2 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max {{ request('category') == 'Gangguan Mood' ? 'bg-biru-6 text-white' : '' }} hover:bg-biru-6 hover:text-white">Gangguan
                            Mood</a>
                        <a href="{{ route('artikel-edukasi', ['category' => 'Depresi']) }}"
                            class="px-3 py-2 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max hover:bg-biru-6 {{ request('category') == 'Depresi' ? 'bg-biru-6 text-white' : '' }} hover:text-white">Depresi</a>
                        <a href="{{ route('artikel-edukasi', ['category' => 'Keluarga & Hubungan']) }}"
                            class="px-3 py-2 transition-all {{ request('category') == 'Keluarga & Hubungan' ? 'bg-biru-6 text-white' : '' }} duration-500 ease-out rounded-full text-nowrap w-max h-max hover:bg-biru-6 hover:text-white">Keluarga
                            & Hubungan</a>
                    </div>
                    <div class="dropdown relative sm:hidden w-full justify-center inline-flex">
                        <button id="dropdown-default" type="button" class="dropdown-toggle btn btn-info"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Pilih Kategori
                            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                        </button>
                        <ul class="dropdown-menu bg-white shadow-lg dropdown-open:opacity-100 hidden min-w-60"
                            role="menu" aria-orientation="vertical" aria-labelledby="dropdown-default">
                            <li><a class="dropdown-item btn btn-soft hover:btn-info text-hitam-800 {{ request('category') ? '' : 'bg-biru-6 text-white' }}"
                                    href="{{ route('artikel-edukasi') }}">Semua</a></li>

                            <li><a class="dropdown-item btn btn-soft hover:btn-info text-hitam-800 {{ request('category') == 'Burnout' ? 'bg-biru-6 text-white' : '' }}"
                                    href="{{ route('artikel-edukasi', ['category' => 'Burnout']) }}">Burnout</a></li>

                            <li><a class="dropdown-item btn btn-soft hover:btn-info text-hitam-800 {{ request('category') == 'Gangguan Mood' ? 'bg-biru-6 text-white' : '' }}"
                                    href="{{ route('artikel-edukasi', ['category' => 'Gangguan Mood']) }}">Gangguan
                                    Mood</a></li>

                            <li><a class="dropdown-item btn btn-soft hover:btn-info text-hitam-800 {{ request('category') == 'Depresi' ? 'bg-biru-6 text-white' : '' }}"
                                    href="{{ route('artikel-edukasi', ['category' => 'Depresi']) }}">Depresi</a></li>

                            <li><a class="dropdown-item btn btn-soft hover:btn-info text-hitam-800 {{ request('category') == 'Keluarga & Hubungan' ? 'bg-biru-6 text-white' : '' }}"
                                    href="{{ route('artikel-edukasi', ['category' => 'Keluarga & Hubungan']) }}">Keluarga
                                    & Hubungan</a></li>
                        </ul>
                    </div>

                    <div
                        class="flex items-center justify-between px-4 py-2 border-2 rounded-full border-hitam-400 w-80">
                        <input type="text" placeholder="Search" class="text-hitam-400">
                        <i class="right-0 cursor-pointer bx bx-search text-hitam-400"></i>
                    </div>
                </div>

                <div
                    class="grid 2xl:w-[1200px] transition-all duration-300 ease-out lg:w-full gap-16 lg:grid-cols-2 place-content-center place-items-center">
                    @foreach ($artikels as $artikel)
                        <div
                            class="relative lg:w-full md:w-[500px] transition-all duration-300 ease-out h-[450px] gap-3 p-3 rounded-3xl overflow-hidden">
                            <div class="absolute inset-0 bg-black/30 z-[5]"></div>
                            <img src="{{ asset('client/img/trung-thanh-rzJ4TEQZe4M-unsplash 1.png') }}" alt="Gambar"
                                class="absolute inset-0 z-0 object-cover w-full h-full bg-center">
                            <div class="relative z-10 flex flex-col justify-between h-full rounded-3xl">
                                <label for="Umum"
                                    class="px-3 py-1 text-base font-medium bg-white rounded-full text-biru-6 w-max h-max font-jkt">{{ $artikel->category_artikel }}</label>
                                <div class="grid gap-2">
                                    <div class="grid gap-1">
                                        <h2 class="text-2xl font-bold text-white">{{ $artikel->title_artikel }}</h2>
                                        <p class="w-full text-sm font-light text-white break-words">
                                            {{ Str::limit(strip_tags($artikel->content), 200, '...') }}
                                        </p>
                                    </div>
                                    <a href="{{ route('app-artikel', ['id_artikel' => $artikel->id_artikel]) }}"><button
                                            class="flex items-center gap-1 px-3 py-2 text-sm font-medium bg-white rounded-full font-jkt text-hitam-900 w-max">Baca
                                            Selengkapnya <i class='text-lg bx bx-right-arrow-alt'></i></button></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="items-center justify-center w-full mt-6 md:px-6 lg:px-24 py-6 h-max">
        <footer
            class="bg-biru-1 rounded-[30px] grid xl:grid-cols-2 gap-12 place-items-center h-max justify-center p-16 transition-all ease-out duration-300">
            @include ('layouts.partial.footer')
        </footer>
    </div>
</body>

</html>
