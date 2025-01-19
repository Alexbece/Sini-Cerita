<nav class="relative flex items-center justify-between py-4 bg-transparent">
    <a class="text-3xl font-bold leading-none logo" href="#">
        Sini Cerita
    </a>
    <div class="lg:hidden">
        <button class="flex items-center p-3 text-accent navbar-burger">
            <svg class="block w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>

    </div>
    <ul
        class="absolute hidden transform -translate-x-1/2 -translate-y-1/2 nav-menu top-1/2 left-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-4 gap-9 lg:gap-4">
        <li class="text-accent"><a class="text-sm" href="#">Home</a></li>
        <li><a class="text-sm" href="#">About Us</a></li>
        <li><a class="text-sm" href="#">Services</a></li>
        <li><a class="text-sm" href="#">Pricing</a></li>
        <li><a class="text-sm" href="#">Contact</a></li>
    </ul>
    <a class="hidden px-6 py-2 text-sm font-bold transition bg-gray-200 hover:bg-gray-300 lg:inline-block lg:ml-auto lg:mr-3 rounded-xl"
        href="#">Sign In</a>
    <a class="hidden px-6 py-2 text-sm font-bold text-white transition lg:inline-block rounded-xl bg-accent hover:bg-hijau-600"
        href="#">Sign up</a>
</nav>
<div class="relative z-50 hidden navbar-menu">
    <div class="fixed inset-0 bg-gray-800 opacity-25 navbar-backdrop"></div>
    <nav class="fixed top-0 bottom-0 left-0 flex flex-col w-5/6 max-w-sm px-6 py-6 overflow-y-auto bg-white border-r">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                Sini Cerita
            </a>
            <button class="navbar-close">
                <svg class="w-6 h-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold rounded hover:bg-hijau-50 hover:text-accent"
                        href="#">Home</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold rounded hover:bg-hijau-50 hover:text-accent"
                        href="#">About Us</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold rounded hover:bg-hijau-50 hover:text-accent"
                        href="#">Services</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold rounded hover:bg-hijau-50 hover:text-accent"
                        href="#">Pricing</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold rounded hover:bg-hijau-50 hover:text-accent"
                        href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                <a class="block px-4 py-3 mb-3 text-xs font-semibold text-center bg-gray-100 hover:bg-gray-200 rounded-xl"
                    href="#">Sign in</a>
                <a class="block px-4 py-3 mb-2 text-xs font-semibold leading-loose text-center text-white bg-hijau-600 hover:bg-accent rounded-xl"
                    href="#">Sign Up</a>
            </div>
        </div>
    </nav>
</div>

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