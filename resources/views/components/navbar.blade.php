
    <a class="text-2xl font-bold leading-none logo text-biru-6 hover:text-biru-5" href="#">
        Sini Cerita
    </a>
    <div class="lg:hidden">
        <button class="flex items-center p-3 text-biru-6 navbar-burger">
            <svg class="block w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>

    </div>
    <ul class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-center lg:w-fit lg:space-x-4 gap-9 lg:gap-4">
        <li class="text-sm text-hitam-800 text-nowrap hover:text-biru-6"><a class="text-sm" href="{{route ('home')}}">Beranda</a></li>
        <li class="text-sm text-hitam-800 text-nowrap hover:text-biru-6"><a class="text-sm" href="{{route ('page_konselor')}}">Konselor</a></li>
        <li class="text-sm text-hitam-800 text-nowrap hover:text-biru-6">
            <div class="flex flex-col items-center">
                <div class="flex items-center" id="artikelmenuButton">
                    <a class="text-sm" href="#">Artikel Edukasi</a><i class='text-lg bx bx-chevron-down'></i>
                </div>
                <div class="w-[280px] absolute top-[70px] grid bg-white h-max px-3 py-3 gap-1 z-10 rounded-xl hidden shadow-2xl"
                    id="artikelMenu">
                    <a href="{{route ('artikel')}}"
                        class="px-3 py-3 text-sm transition-all rounded-md text-hitam-600 hover:bg-biru-2 hover:text-biru-6">Umum</a>
                    <a href=""
                        class="px-3 py-3 text-sm transition-all rounded-md text-hitam-600 hover:bg-biru-2 hover:text-biru-6">Burnout</a>
                    <a href=""
                        class="px-3 py-3 text-sm transition-all rounded-md text-hitam-600 hover:bg-biru-2 hover:text-biru-6">Gangguan
                        Mood</a>
                    <a href=""
                        class="px-3 py-3 text-sm transition-all rounded-md text-hitam-600 hover:bg-biru-2 hover:text-biru-6">Depresi</a>
                    <a href=""
                        class="px-3 py-3 text-sm transition-all rounded-md text-hitam-600 hover:bg-biru-2 hover:text-biru-6">Keluarga
                        &
                        Hubungan</a>
                </div>
            </div>
        </li>
        <li class="text-sm text-hitam-800 text-nowrap hover:text-biru-6"><a class="text-sm" href="#">Konsultasi</a></li>
        <li class="text-sm text-hitam-800 text-nowrap hover:text-biru-6"><a class="text-sm" href="#">Tantangan</a></li>
    </ul>

    <div class="hidden lg:flex">
        <div class="grid place-items-end">
            <div id="profilemenuButton" class="flex items-center gap-1 cursor-pointer">
                <div class="rounded-full w-9 h-9 bg-biru-6"></div>
                <i class="text-3xl bx bx-chevron-down text-hitam-700"></i>
            </div>

            <div class="absolute top-[75px] w-max bg-white rounded-xl hidden shadow-2xl z-10" id="profileMenu">
                <div class="flex items-center flex-1 gap-2 p-3 border-b-2">
                    <div class="w-12 h-12 rounded-full bg-biru-6"></div>
                    <div class="flex-1 gap-1">
                        <h3 class="text-base font-semibold">Farrel Yassar Kurniawan</h3>
                        <p class="text-xs font-normal text-hitam-600">farrel26yassar@gmail.com</p>
                    </div>
                </div>
                <div class="grid w-full gap-4 p-3 border-b-2">
                    <div class="flex items-center gap-1 text-sm transition-all hover:text-biru-6 w-max text-hitam-600">
                        <i class='text-xl bx bx-user'></i><a href="{{route ('profil')}}">Lihat akun</a>
                    </div>
                    <div class="flex items-center gap-1 text-sm transition-all hover:text-biru-6 w-max text-hitam-600">
                        <i class='text-xl bx bx-cog'></i><a href="">Pengaturan</a>
                    </div>
                    <div class="flex items-center gap-1 text-sm transition-all hover:text-biru-6 w-max text-hitam-600">
                        <i class='text-xl bx bx-history'></i><a href="">Riwayat</a>
                    </div>
                </div>
                <div class="flex items-center gap-1 p-3 text-sm transition-all hover:text-biru-6 w-max text-hitam-600">
                    <i class='text-xl bx bx-log-out'></i><a href="">Keluar</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="relative z-50 hidden navbar-menu">
    <div class="fixed inset-0 bg-gray-800 opacity-25 navbar-backdrop"></div>
    <nav
        class="fixed top-0 bottom-0 left-0 flex flex-col w-5/6 max-w-sm gap-4 px-6 py-6 overflow-y-auto bg-white border-r">
        <div class="flex items-center">
            <button class="navbar-close">
                <svg class="w-6 h-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <div class="w-full">
            <div class="flex items-center gap-3 px-2 pb-3 border-b-2">
                <div class="rounded-full h-14 w-14 bg-biru-6"></div>
                <div class="grid place-items-start place-content-center">
                    <p class="text-xl font-semibold font-raleway">Farrel Yassar Kurniawan</p>
                    <p class="text-sm font-medium text-hitam-400">farrel26yassar@gmail.com</p>
                </div>
            </div>
        </div>

        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold rounded-2xl hover:bg-biru-2 hover:text-biru-6"
                        href="{{route ('home')}}">Beranda</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold rounded-2xl hover:bg-biru-2 hover:text-biru-6"
                        href="{{route ('page_konselor')}}">Konselor</a>
                </li>
                <li class="mb-1">
                    <div class="block p-4 text-sm font-semibold rounded-2xl hover:bg-biru-2 hover:text-biru-6" href="{{route ('artikel')}}">
                        Artikel Edukasi</div>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold rounded-2xl hover:bg-biru-2 hover:text-biru-6"
                        href="#">Konsultasi</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold rounded-2xl hover:bg-biru-2 hover:text-biru-6"
                        href="#">Tantangan</a>
                </li>
            </ul>
        </div>


</div>

<!-- Profile Menu Dropdown -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const profilemenuButton = document.getElementById('profilemenuButton');
        const profileMenu = document.getElementById('profileMenu');

        profilemenuButton.addEventListener('click', () => {
            profileMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!profilemenuButton.contains(event.target) && !profileMenu.contains(event.target)) {
                profileMenu.classList.add('hidden');
            }
        });
    })
</script>

<!-- Artikel Menu Dropdown -->
<script>
    // Toggle Dropdown
    document.addEventListener('DOMContentLoaded', () => {
        const artikelmenuButton = document.getElementById('artikelmenuButton');
        const artikelMenu = document.getElementById('artikelMenu');

        artikelmenuButton.addEventListener('click', () => {
            artikelMenu.classList.toggle('hidden');
        });

        // Tutup dropdown jika klik di luar
        document.addEventListener('click', (event) => {
            if (!artikelmenuButton.contains(event.target) && !artikelMenu.contains(event.target)) {
                artikelMenu.classList.add('hidden');
            }
        });
    });
</script>

<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function () {
        const burger = document.querySelector('.navbar-burger');
        const menu = document.querySelector('.navbar-menu');
        const close = document.querySelector('.navbar-close');
        const backdrop = document.querySelector('.navbar-backdrop');

        // Burger untuk membuka navbar
        if (burger && menu) {
            burger.addEventListener('click', function () {
                menu.classList.toggle('hidden');
            });
        }

        // Tombol close untuk menutup navbar
        if (close && menu) {
            close.addEventListener('click', function () {
                menu.classList.add('hidden');
            });
        }

        // Menutup navbar jika area backdrop diklik
        if (backdrop && menu) {
            backdrop.addEventListener('click', function () {
                menu.classList.add('hidden');
            });
        }
    });

</script>