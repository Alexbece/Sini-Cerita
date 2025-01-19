<!DOCTYPE html>
<html lang="en">

@include ('_head')

<body>
    <!-- Header Section -->
    <header class="px-16 pb-24 h-max">
        @include('components.navbar')

        <!-- Hero Section -->
        <div class="relative px-6 pt-32 pb-0 h-max isolate lg:px-8">
            <div class="max-w-2xl mx-auto">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative px-3 py-1 text-gray-600 rounded-full text-sm/6 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        Cari tau cara konsultasi. <a href="#" class="font-semibold text-hijau-600"><span
                                class="absolute inset-0" aria-hidden="true"></span>Di sini <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-5xl font-semibold tracking-tight text-gray-900 text-balance sm:text-7xl">Sini sehat,
                        sini <span class="text-accent">cerita</span>.</h1>
                    <p class="mt-8 text-lg font-light text-gray-500 sm:text-xl/8">Platform yang menyediakan ruang aman
                        untuk berkonsultasi, berbicara, dan mendapatkan dukungan seputar kesehatan mental Anda.</p>
                    <div class="flex items-center justify-center mt-10 gap-x-6">
                        <a href="#"
                            class="rounded-xl bg-accent px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-hijau-900 flex items-center transition">Cari
                            Dokter<i class='text-2xl bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Features section -->
    <section class="px-20 py-32">
        <div class="container px-4 mx-auto">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="mb-4 text-6xl font-semibold text-black">Fitur <span class="text-accent">Sini Cerita</span>.
                </h2>
                <p class="mb-12 text-gray-600">Kami menyediakan tiga fitur utama yang dirancang khusus untuk mendukung
                    Anda dalam mengatasi tantangan kesehatan mental.
                </p>

            </div>
            <div class="flex flex-wrap mt-12 -mx-4">
                <div class="w-full px-6 mb-8 md:grid lg:w-1/3">
                    <div class="px-8 text-center py-14 bg-gray-100/50 rounded-xl">
                        <div class="mb-4 text-4xl font-bold text-accent"><i
                                class='p-3 rounded-full bg-gray-200/60 bx bx-chat'></i></div>
                        <h3 class="mb-4 text-2xl font-semibold text-black">Layanan Konsultasi</h3>
                        <p class="mb-4 text-gray-600">Terhubung langsung dengan psikolog dan konselor berlisensi untuk
                            mendiskusikan tantangan kesehatan mental yang dihadapi.

                        </p>
                        <div class="relative px-3 py-1 rounded-full text-sm/6">
                            <a href="#" class="text-base font-semibold text-hijau-600"><span class="absolute inset-0"
                                    aria-hidden="true"></span>Di sini <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-6 mb-8 md:grid lg:w-1/3">
                    <div class="px-8 text-center py-14 bg-gray-100/50 rounded-xl">
                        <div class="mb-4 text-4xl font-bold text-accent"><i
                                class='p-3 rounded-full bg-gray-200/60 bx bx-select-multiple'></i></div>
                        <h3 class="mb-4 text-2xl font-semibold text-black">Tantangan Kesehatan Mental</h3>
                        <p class="mb-4 text-gray-600"> Tantangan kecil setiap hari, seperti teknik pernapasan,
                            journaling, atau latihan mindfulness, untuk membantu mengurangi stres dan kecemasan.</p>
                        <div class="relative px-3 py-1 rounded-full text-sm/6">
                            <a href="#" class="text-base font-semibold text-hijau-600"><span class="absolute inset-0"
                                    aria-hidden="true"></span>Di sini <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                </div>

                <div class="w-full px-6 mb-8 md:grid lg:w-1/3">
                    <div class="px-8 text-center py-14 bg-gray-100/50 rounded-xl">
                        <div class="mb-4 text-4xl font-bold text-accent"><i
                                class='p-3 rounded-full bg-gray-200/60 bx bx-notepad'></i></div>
                        <h3 class="mb-4 text-2xl font-semibold text-black">Blog Edukasi Mental</h3>
                        <p class="mb-4 text-gray-600">Kisah nyata dari individu yang berhasil menghadapi tantangan
                            kesehatan mental, memberikan motivasi dan harapan bagi pembaca.</p>
                        <div class="relative px-3 py-1 rounded-full text-sm/6">
                            <a href="#" class="text-base font-semibold text-hijau-600"><span class="absolute inset-0"
                                    aria-hidden="true"></span>Di sini <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <div class="container px-16 py-8 mx-auto">
        <div class="flex items-center justify-between">  
            <h1 class="mb-8 text-3xl font-bold text-center text-hijau-600">Blog edukasi mental</h1>
            <div class="font-semibold text-black">
                <a href="" class="font-semibold transition hover:text-lg all">Lihat Semua</a><span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-2 px-12 mb-16 justify-items-center md:grid-cols-2 lg:grid-cols-4">
            <!-- Card 1 -->
            <div class="overflow-hidden transition-all bg-white rounded-lg shadow-md hover:scale-105 max-w-72 hover:border-2 hover:border-accent">
                <img src="{{asset('landing/images/19.jpg')}}" alt="Blog Image" class="object-cover w-full h-36 ">
                <div class="p-4">
                    <h2 class="mb-2 text-xl font-semibold">Blog Title</h2>
                    <p class="mb-4 text-sm text-gray-600">This is a short description or excerpt for the blog post.</p>
                    <a href="#" class="font-medium transition-all text-accent hover:text-lg">Baca lebih <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="overflow-hidden transition-all bg-white rounded-lg shadow-md hover:scale-105 max-w-72 hover:border-2 hover:border-accent">
                <img src="{{asset('landing/images/19.jpg')}}" alt="Blog Image" class="object-cover w-full h-36 ">
                <div class="p-4">
                    <h2 class="mb-2 text-xl font-semibold">Blog Title</h2>
                    <p class="mb-4 text-sm text-gray-600">This is a short description or excerpt for the blog post.</p>
                    <a href="#" class="font-medium transition-all text-accent hover:text-lg">Baca lebih <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="overflow-hidden transition-all bg-white rounded-lg shadow-md hover:scale-105 max-w-72 hover:border-2 hover:border-accent">
                <img src="{{asset('landing/images/19.jpg')}}" alt="Blog Image" class="object-cover w-full h-36 ">
                <div class="p-4">
                    <h2 class="mb-2 text-xl font-semibold">Blog Title</h2>
                    <p class="mb-4 text-sm text-gray-600">This is a short description or excerpt for the blog post.</p>
                    <a href="#" class="font-medium transition-all text-accent hover:text-lg">Baca lebih <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="overflow-hidden transition-all bg-white rounded-lg shadow-md hover:scale-105 max-w-72 hover:border-2 hover:border-accent">
                <img src="{{asset('landing/images/19.jpg')}}" alt="Blog Image" class="object-cover w-full h-36 ">
                <div class="p-4">
                    <h2 class="mb-2 text-xl font-semibold">Blog Title</h2>
                    <p class="mb-4 text-sm text-gray-600">This is a short description or excerpt for the blog post.</p>
                    <a href="#" class="font-medium transition-all text-accent hover:text-lg">Baca lebih <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
        </div>
    </div>


    <!-- Section Footer -->
    @include ('components.footer')

    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
</body>

</html>