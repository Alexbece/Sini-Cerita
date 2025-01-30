<!DOCTYPE html>
<html lang="en">

@include ('_head')

<body class="bg-white">
    <nav class="relative flex items-center justify-between px-8 py-4 bg-biru-1 rounded-[20px] w-full">
        @include ('components.navbar')
    </nav>
    <div class="flex flex-col items-center justify-center">

        <div class="flex flex-col items-center justify-center w-full mt-12 gap-14">
            <h1 class="w-full text-3xl font-semibold text-center text-biru-6">Halaman Edukasi</h1>
            <div class="xl:flex xl:flex-row flex flex-col-reverse gap-6 w-full px-20 justify-between items-center">
                <div
                    class="flex xl:justify-start justify-center lg:w-full w-max text-hitam-700 lg:gap-4 gap-2 lg:text-base text-sm transition-all duration-300 ease-out ">
                    <a href=""
                        class="px-3 py-2 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max bg-biru-6 hover:bg-biru-6 hover:text-white text-white">Umum</a>
                    <a href=""
                        class="px-3 py-2 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max hover:bg-biru-6 hover:text-white">Burnout</a>
                    <a href=""
                        class="px-3 py-2 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max hover:bg-biru-6 hover:text-white">Gangguan
                        Mood</a>
                    <a href=""
                        class="px-3 py-2 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max hover:bg-biru-6 hover:text-white">Depresi</a>
                    <a href=""
                        class="px-3 py-2 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max hover:bg-biru-6 hover:text-white">Keluarga
                        & Hubungan</a>
                </div>

                <div class="flex items-center border-2 border-hitam-400 rounded-full py-2 px-4 w-80 justify-between">
                    <input type="text" placeholder="Search" class="text-hitam-400">
                    <i class="bx bx-search cursor-pointer right-0 text-hitam-400"></i>
                </div>
            </div>

            <div
                class="grid 2xl:w-[1200px] transition-all duration-300 ease-out lg:w-full gap-16 lg:grid-cols-2 2xl:grid-cols-3 place-content-center place-items-center">
                @include ('client.artikel.card')
            </div>
        </div>
    </div>

    <footer class="bg-biru-1 mt-12 rounded-[30px] grid xl:grid-cols-2 gap-12 place-items-center h-max justify-center p-16 transition-all ease-out duration-300">
    @include ('components.footer')
    </footer>
</body>

</html>