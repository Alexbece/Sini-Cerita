<!DOCTYPE html>
<html lang="en">

@include ('_head')

<body>
    <header class="rounded-[30px] bg-white h-max flex flex-col items-center pb-40 w-full mb-[273px]">
        <nav class="relative flex items-center justify-between px-8 py-4 rounded-[20px] w-full">
            @include ('components.navbarGuest')
        </nav>
        <div class="flex flex-col items-center justify-center gap-4 h-[611px]">
            <p class="px-4 text-xl text-center rounded-full ring-2 ring-hitam-400 w-max">Sini Sehat, <span
                    class=" text-biru-6">Sini Cerita</span>.</p>
            <div class="flex flex-col items-center justify-center gap-5 max-w-[832px]">
                <div class="flex flex-col gap-3">
                    <h1 class="text-4xl font-semibold leading-tight text-center lg:text-6xl text-wrap text-hitam-900">
                        Sehatkan
                        pikiran
                        dan kenali
                        <br>dirimu dengan <span class="text-biru-6">ber</span><span
                            class="px-2 mx-1 text-white bg-biru-6 rounded-2xl">cerita</span>
                    </h1>
                    <p class="text-xs text-center lg:text-sm text-pretty text-hitam-500">Kami menyediakan ruang aman
                        untuk
                        mendengarkan cerita Anda, membantu memahami<br>emosi, dan menemukan solusi terbaik untuk
                        kesehatan mental Anda.</p>
                </div>
                <button
                    class="px-3 py-2 text-xl font-bold text-white transition-colors bg-biru-6 rounded-xl font-jkt focus:outline-none hover:bg-biru-5">Cari
                    Konselor</button>
            </div>
        </div>

        <div
            class="lg:flex grid lg:absolute lg:-bottom-[261px] gap-9 p-4 bg-biru-1 w-max rounded-[45px] drop-shadow-2xl">
            <div class="flex flex-col gap-3 p-3 bg-biru-6 h-max w-max rounded-3xl">
                <div class="flex flex-col gap-5">
                    <div class="w-max">
                        <i class='p-3 text-4xl bg-white rounded-full bx bx-chat text-biru-6'></i>
                    </div>
                    <div class="flex flex-col max-w-[270px] gap-3">
                        <h2 class="text-2xl font-semibold text-white">Layanan Konsultasi</h2>
                        <p class="text-sm font-light text-white text-wrap">Terhubung langsung dengan psikolog
                            dan konselor berlisensi untuk
                            mendiskusikan tantangan
                            kesehatan mental yang dihadapi.
                        </p>
                    </div>
                </div>
                <a href="{{route ('page_konselor')}}" class="flex items-center gap-1 text-white transition-all duration-150 ease-out hover:gap-3 hover:text-white font-jkt">
                    Disini<i class='text-base bx bx-right-arrow-alt'></i>
                </a>
            </div>

            <div class="flex flex-col gap-3 p-3 bg-biru-6 h-max w-max rounded-3xl">
                <div class="flex flex-col gap-5">
                    <div class="w-max">
                        <i class='p-3 text-4xl bg-white rounded-full bx bx-check-double text-biru-6'></i>
                    </div>
                    <div class="flex flex-col max-w-[270px] gap-3">
                        <h2 class="text-lg font-semibold text-white">Tantangan Kesehatan Mental</h2>
                        <p class="text-sm font-light text-white text-wrap">Terhubung langsung dengan psikolog
                            dan konselor berlisensi untuk mendiskusikan tantangan kesehatan mental yang dihadapi.
                        </p>
                    </div>
                </div>
                <a href="{{route ('page_konselor')}}" class="flex items-center gap-1 text-white transition-all duration-150 ease-out hover:gap-3 hover:text-white font-jkt">
                    Disini<i class='text-base bx bx-right-arrow-alt'></i>
                </a>
            </div>

            <div class="flex flex-col gap-3 p-3 bg-biru-6 h-max w-max rounded-3xl">
                <div class="flex flex-col gap-5">
                    <div class="w-max">
                        <i class='p-3 text-4xl bg-white rounded-full bx bx-notepad text-biru-6'></i>
                    </div>
                    <div class="flex flex-col max-w-[270px] gap-3">
                        <h2 class="text-2xl font-semibold text-white">Blog Edukasi Mental</h2>
                        <p class="text-sm font-light text-white text-wrap">Kisah nyata dari individu yang
                            berhasil menghadapi tantangan
                            kesehatan mental, memberikan motivasi dan harapan bagi pembaca.
                        </p>
                    </div>
                </div>
                <a href="{{route ('artikel')}}" class="flex items-center gap-1 text-white transition-all duration-150 ease-out hover:gap-3 hover:text-white font-jkt">
                    Disini<i class='text-base bx bx-right-arrow-alt'></i>
                </a>
            </div>
        </div>
    </header>

    <footer class="bg-white rounded-[30px] grid xl:grid-cols-2 gap-12 place-items-center h-max justify-center p-16 transition-all ease-out duration-300">
    @include ('components.footer')
    </footer>
</body>

</html>