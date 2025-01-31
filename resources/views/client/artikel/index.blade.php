<!DOCTYPE html>
<html lang="en">

@include ('_head')

<body class="blog_index">
    <nav class="relative flex items-center justify-between px-8 py-4 bg-biru-1 rounded-[20px] w-full">
        @include ('components.navbar')
    </nav>
    <div class="flex flex-col items-center justify-center">

        <div class="flex flex-col items-center justify-center w-full mt-12 gap-14">
            <h1 class="w-full text-3xl font-semibold text-center text-biru-6">Halaman Edukasi</h1>
            <div class="flex flex-col-reverse items-center justify-between w-full gap-6 px-20 xl:flex xl:flex-row">
                <div
                    class="flex justify-center gap-2 text-sm transition-all duration-300 ease-out xl:justify-start lg:w-full w-max text-hitam-700 lg:gap-4 lg:text-base ">
                    <a href=""
                        class="px-3 py-2 text-white transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max bg-biru-6 hover:bg-biru-6 hover:text-white">Umum</a>
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

                <div class="flex items-center justify-between px-4 py-2 border-2 rounded-full border-hitam-400 w-80">
                    <input type="text" placeholder="Search" class="text-hitam-400">
                    <i class="right-0 cursor-pointer bx bx-search text-hitam-400"></i>
                </div>
            </div>

            <div
                class="grid 2xl:w-[1200px] transition-all duration-300 ease-out lg:w-full gap-16 lg:grid-cols-2 2xl:grid-cols-3 place-content-center place-items-center">
                @include ('client.artikel.card')
            </div>
        </div>
    </div>

    <footer
        class="bg-biru-1 mt-12 rounded-[30px] grid xl:grid-cols-2 gap-12 place-items-center h-max justify-center p-16 transition-all ease-out duration-300">
        @include ('components.footer')
    </footer>
</body>

</html>