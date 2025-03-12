<div class="flex flex-col justify-center w-full h-full gap-4 transition-all duration-300 ease-out">
    <h3 class="text-5xl font-bold text-biru-6">Sini Cerita</h3>
    <p class="text-wrap text-hitam-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque aspernatur
        veritatis sit
        laborum, nobis illo quae
        dolores beatae sunt reiciendis fugiat explicabo ducimus fugit maxime!</p>
</div>

<div class="grid w-full gap-6 transition-all duration-300 ease-out md:grid-cols-3 place-content-between">
    <div class="grid gap-6 w-max text-nowrap">
        <h5 class="font-semibold text-biru-6">Sitemap</h5>
        <div class="grid gap-3 list-none text-hitam-600 text-nowrap">
            <li><a href="{{ route('home') }}">Beranda</a></li>
            <li><a href="{{ route('page_konselor') }}">Konselor</a></li>
            <li><a href="{{ route('artikel') }}">Artikel Edukasi</a></li>
            <li><a href="{{ route('pagekonsultasi') }}">Konsultasi</a></li>
            <li><a href="">Tantangan</a></li>
            <li><a href="{{ route('tentangkami') }}">Tentang Kami</a></li>
        </div>
    </div>

    <div class="grid gap-6 w-max text-nowrap">
        <h5 class="font-semibold text-biru-6">Kategori Artikel</h5>
        <div class="grid gap-3 list-none text-hitam-600 text-nowrap">
            <li><a href="">Umum</a></li>
            <li><a href="">Burnout</a></li>
            <li><a href="">Gangguan Mood</a></li>
            <li><a href="">Depresi</a></li>
            <li><a href="">Keluarga & Hubungan</a></li>
        </div>
    </div>

    <div class="grid gap-6 w-max text-nowrap place-content-start">
        <h5 class="font-semibold text-biru-6">Metode Pembayaran</h5>
        <div class="grid grid-cols-2 gap-2 list-none text-hitam-600 text-nowrap place-content-start">
            <li><a href=""><i class='text-3xl bx bxl-paypal'></i></a></li>
            <li><a href=""><i class='text-3xl bx bxl-paypal'></i></a></li>
            <li><a href=""><i class='text-3xl bx bxl-paypal'></i></a></li>
            <li><a href=""><i class='text-3xl bx bxl-paypal'></i></a></li>
        </div>
    </div>
</div>
