<a class="text-lg font-bold leading-none sm:text-2xl logo text-biru-6 hover:text-biru-5 text-nowrap" href="#">
    Sini Cerita
</a>
<div class="xl:hidden">
    <button class="flex items-center p-3 text-biru-6 navbar-burger">
        <svg class="block w-3 h-3 fill-current sm:w-4 sm:h-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Mobile menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
    </button>

</div>
<ul class="hidden xl:flex xl:flex-1 xl:items-center xl:justify-center xl:w-fit xl:space-x-4 gap-9 xl:gap-4">
    <li class="text-sm text-hitam-800 text-nowrap hover:text-biru-6"><a class="text-sm"
            href="{{ route('app-index') }}">Beranda</a></li>
    <li class="text-sm text-hitam-800 text-nowrap hover:text-biru-6"><a class="text-sm"
            href="{{ route('konsultasi-index') }}">Konsultasi</a></li>
    <li class="text-sm text-hitam-800 text-nowrap hover:text-biru-6"><a class="text-sm"
            href="{{ route('artikel-edukasi') }}">Artikel Edukasi</a></li>
    <li class="text-sm text-hitam-800 text-nowrap hover:text-biru-6"><a class="text-sm" href="">
            Konsultasi</a></li>
    <li class="text-sm text-hitam-800 text-nowrap hover:text-biru-6"><a class="text-sm"
            href="{{ route('app-tantangan') }}">Tantangan</a></li>
    <li class="text-sm text-hitam-800 text-nowrap hover:text-biru-6"><a class="text-sm" href="">Tentang Kami</a>
    </li>
</ul>
@if (Auth::check())
    <div class="hidden xl:flex">
        <div class="grid place-items-end">
            <div id="profilemenuButton" class="flex items-center gap-1 cursor-pointer">
                <div class="overflow-hidden rounded-full w-9 h-9">
                    <img class="object-center "
                        src="{{ Str::startsWith(Auth::user()->foto_profil, ['http', 'https']) ? Auth::user()->foto_profil : asset('storage/' . Auth::user()->foto_profil) }}"
                        alt="">
                </div>
                <i class="text-3xl bx bx-chevron-down text-hitam-700"></i>
            </div>

            <div class="absolute top-[75px] min-w-max bg-white rounded-xl hidden h-max shadow-2xl z-10"
                id="profileMenu">
                <div class="flex items-center flex-1 gap-2 p-3 border-b-2">
                    <div class="w-12 h-12 overflow-hidden rounded-full">
                        <img class="object-center "
                            src="{{ Str::startsWith(Auth::user()->foto_profil, ['http', 'https']) ? Auth::user()->foto_profil : asset('storage/' . Auth::user()->foto_profil) }}"
                            alt="">
                    </div>
                    <div class="flex-1 gap-1">
                        <h3 class="text-base font-semibold text-hitam-800">{{ Auth::user()->nama_lengkap }}</h3>
                        <p class="text-xs font-normal text-hitam-600">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="grid w-full gap-4 p-3 border-b-2">
                    <div class="flex items-center gap-1 text-sm transition-all hover:text-biru-6 w-max text-hitam-600">
                        <i class='text-xl bx bx-user'></i><a href="{{ route('profil-user') }}">Lihat akun</a>
                    </div>
                    <div class="flex items-center gap-1 text-sm transition-all hover:text-biru-6 w-max text-hitam-600">
                        <i class='text-xl bx bx-cog'></i><a href="">Pengaturan</a>
                    </div>
                    <div class="flex items-center gap-1 text-sm transition-all hover:text-biru-6 w-max text-hitam-600">
                        <i class='text-xl bx bx-history'></i><a href="">Riwayat</a>
                    </div>
                </div>
                <form action="{{ route('logout-user') }}" class="flex items-center h-full" method="POST">
                    @csrf
                    <button
                        class="flex items-center gap-1 p-3 text-sm transition-all hover:text-biru-6 w-max text-hitam-600">
                        <i class='text-xl bx bx-log-out'></i>
                        <p>Keluar</p>
                    </button>
                </form>
            </div>
        </div>
    </div>
@else
    <div class="items-center hidden gap-2 xl:flex">
        <div class="dropdown relative inline-flex rtl:[--placement:bottom-end]">
            <button id="dropdown-default" type="button"
                class="text-white border-none rounded-full dropdown-toggle bg-biru-6 btn hover:bg-biru-5"
                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                Masuk
                <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
            </button>
            <ul class="hidden bg-white dropdown-menu text-hitam-800 dropdown-open:opacity-100 min-w-60" role="menu"
                aria-orientation="vertical" aria-labelledby="dropdown-default">
                <li><a class="dropdown-item text-hitam-800" href="/masuk"><span
                            class="icon-[ix--customer-filled] text-2xl"></span> Pelanggan</a></li>
                <li><a class="dropdown-item text-hitam-800" href="/masuk-dokter"><span
                            class="icon-[healthicons--doctor-24px] text-2xl"></span> Dokter</a></li>
            </ul>
        </div>
        <div class="dropdown relative inline-flex rtl:[--placement:bottom-end]">
            <button id="dropdown-default" type="button"
                class="bg-white rounded-full text-biru-6 border-biru-6 dropdown-toggle btn hover:border-biru-6 hover:bg-biru-1"
                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                Daftar
                <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
            </button>
            <ul class="hidden bg-white dropdown-menu text-hitam-800 dropdown-open:opacity-100 min-w-60" role="menu"
                aria-orientation="vertical" aria-labelledby="dropdown-default">
                <li><a class="dropdown-item text-hitam-800" href="/daftar"><span
                            class="icon-[ix--customer-filled] text-2xl"></span> Pelanggan</a></li>
                <li><a class="dropdown-item text-hitam-800" href="/daftar-dokter"><span
                            class="icon-[healthicons--doctor-24px] text-2xl"></span> Dokter</a></li>
            </ul>
        </div>
    </div>
@endif
</nav>

{{-- MOBILE --}}
<div class="relative z-50 hidden navbar-menu">
    <div class="fixed inset-0 bg-gray-800 opacity-25 navbar-backdrop"></div>
    <nav
        class="fixed top-0 bottom-0 left-0 flex flex-col w-5/6 max-w-sm gap-4 px-6 py-6 overflow-y-auto bg-white border-r">
        <div class="flex items-center">
            <button class="navbar-close">
                <svg class="w-6 h-6 text-gray-400 cursor-pointer hover:text-gray-500"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        @if (Auth::check())
            <div class="w-full">
                <div class="flex items-center gap-3 px-2 pb-3 border-b-2">
                    <a href="{{ route('profil-user') }}">
                        <div class="rounded-full overflow-hidden h-14 w-14">
                            <img src="{{ Str::startsWith(Auth::user()->foto_profil, ['http', 'https']) ? Auth::user()->foto_profil : asset('storage/' . Auth::user()->foto_profil) }}" class="object-cover"
                                alt="">
                        </div>
                    </a>
                    <div class="grid place-items-start place-content-center">
                        <p class="text-xl font-semibold font-raleway text-hitam-800"><a
                                href="{{ route('profil-user') }}">{{ Auth::user()->nama_lengkap }}</a></p>
                        <p class="text-sm font-medium text-hitam-400"><a
                                href="{{ route('profil-user') }}">{{ Auth::user()->email }}</a></p>
                    </div>
                </div>
            </div>
        @else
            <div class="grid items-center w-full gap-2">
                <div class="dropdown w-full relative inline-flex rtl:[--placement:bottom-end]">
                    <button id="dropdown-default" type="button"
                        class="dropdown-toggle rounded-full h-[50px] w-full btn btn-soft btn-info"
                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Masuk
                        <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                    </button>
                    <ul class="hidden bg-white dropdown-menu text-hitam-800 dropdown-open:opacity-100 min-w-60"
                        role="menu" aria-orientation="vertical" aria-labelledby="dropdown-default">
                        <li><a class="dropdown-item text-hitam-800" href="/masuk"><span
                                    class="icon-[ix--customer-filled] text-2xl"></span> Pelanggan</a></li>
                        <li><a class="dropdown-item text-hitam-800" href="/masuk-dokter"><span
                                    class="icon-[healthicons--doctor-24px] text-2xl"></span> Dokter</a></li>
                    </ul>
                </div>
                <div class="dropdown relative inline-flex rtl:[--placement:bottom-end]">
                    <button id="dropdown-default" type="button"
                        class="dropdown-toggle rounded-full h-[50px] w-full btn btn-info" aria-haspopup="menu"
                        aria-expanded="false" aria-label="Dropdown">
                        Daftar
                        <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                    </button>
                    <ul class="hidden bg-white dropdown-menu text-hitam-800 dropdown-open:opacity-100 min-w-60"
                        role="menu" aria-orientation="vertical" aria-labelledby="dropdown-default">
                        <li><a class="dropdown-item text-hitam-800" href="/daftar"><span
                                    class="icon-[ix--customer-filled] text-2xl"></span> Pelanggan</a></li>
                        <li><a class="dropdown-item text-hitam-800" href="/daftar-dokter"><span
                                    class="icon-[healthicons--doctor-24px] text-2xl"></span> Dokter</a></li>
                    </ul>
                </div>
            </div>
            <div class="divider"></div>
        @endif
        <div>
            <ul class="grid gap-2">
                <li class="mb-1">
                    <a class="w-full text-sm font-semibold text-left btn text-hitam-800 btn-soft h-[50px] hover:btn-info transition-all rounded-2xl"
                        href="{{ route('app-index') }}">Beranda</a>
                </li>
                <li class="mb-1">
                    <a class="w-full text-sm font-semibold text-left btn text-hitam-800 btn-soft h-[50px] hover:btn-info transition-all rounded-2xl"
                        href="{{ route('konsultasi-index') }}">Konsultasi</a>
                </li>
                <li class="mb-1">
                    <div class="w-full text-sm font-semibold text-left btn text-hitam-800 btn-soft h-[50px] hover:btn-info transition-all rounded-2xl"
                        href="{{ route('artikel-edukasi') }}">
                        Artikel Edukasi</div>
                </li>
                <li class="mb-1">
                    <a class="w-full text-sm font-semibold text-left btn text-hitam-800 btn-soft h-[50px] hover:btn-info transition-all rounded-2xl"
                        href="">Konsultasi</a>
                </li>
                <li class="mb-1">
                    <a class="w-full text-sm font-semibold text-left btn text-hitam-800 btn-soft h-[50px] hover:btn-info transition-all rounded-2xl"
                        href="{{ route('app-tantangan') }}">Tantangan</a>
                </li>
                <li class="mb-1">
                    <a class="w-full text-sm font-semibold text-left btn text-hitam-800 btn-soft h-[50px] hover:btn-info transition-all rounded-2xl"
                        href="">Tentang Kami</a>
                </li>
                <li class="mb-1">
                    @if (Auth::check())
                        <form action="{{ route('logout-user') }}" class="flex items-center w-full" method="POST">
                            @csrf
                            <button
                                class="w-full text-sm font-semibold text-left btn btn-soft h-[50px] btn-error rounded-2xl"
                                href="">Keluar</button>
                        </form>
                    @endif
                </li>
            </ul>
        </div>
    </nav>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const profileMenuButton = document.getElementById('profilemenuButton');
        const profileMenu = document.getElementById('profileMenu');

        if (profileMenuButton && profileMenu) {
            profileMenuButton.addEventListener('click', function(event) {
                event.stopPropagation(); // Mencegah event klik menyebar ke elemen lain
                profileMenu.classList.toggle('hidden');
            });

            // Menutup menu jika klik di luar menu
            document.addEventListener('click', function(event) {
                if (!profileMenu.contains(event.target) && !profileMenuButton.contains(event.target)) {
                    profileMenu.classList.add('hidden');
                }
            });
        }
    });
</script>


<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        const burger = document.querySelector('.navbar-burger');
        const menu = document.querySelector('.navbar-menu');
        const close = document.querySelector('.navbar-close');
        const backdrop = document.querySelector('.navbar-backdrop');

        // Burger untuk membuka navbar
        if (burger && menu) {
            burger.addEventListener('click', function() {
                menu.classList.toggle('hidden');
            });
        }

        // Tombol close untuk menutup navbar
        if (close && menu) {
            close.addEventListener('click', function() {
                menu.classList.add('hidden');
            });
        }

        // Menutup navbar jika area backdrop diklik
        if (backdrop && menu) {
            backdrop.addEventListener('click', function() {
                menu.classList.add('hidden');
            });
        }
    });
</script>
