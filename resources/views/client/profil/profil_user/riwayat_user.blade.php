<div class="flex flex-col justify-start w-full">
    <h3 class="text-4xl font-bold text-hitam-900">Riwayat Konsutasi</h3>

    <div class="flex items-center justify-between w-full gap-4 p-6 mt-4 border-2 h-max border-hitam-100 rounded-xl">
        <p>Konsultasi Dengan</p>
        <div class="flex items-center gap-4">
            <img class="object-cover object-top w-20 h-20 border-2 rounded-full shadow-lg border-biru-6"
                src="{{asset('client/img/foto_dokter/foto_doctor_1.jpg')}}" alt="">
            <div class="flex flex-col">
                <h4 class="text-xl font-semibold">Farrel Yassar</h4>
                <p class="text-sm font-semibold text-hitam-400">Pengguna Sini Cerita</p>
            </div>
        </div>

        <button
            class="flex items-center gap-1 px-3 py-2 text-sm border-2 rounded-full shadow-lg h-max w-max text-hitam-600">Edit
            <i class="transform translate-y-[1px] bx bx-pencil"></i></button>
    </div>

    <div class="flex items-center gap-3 mt-4 lg:hidden ">
        <div class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer hover:text-biru-6 text-hitam-700 w-max" id="modalkeluarButton">Keluar</div>
        <a href=""
            class="px-3 py-2 text-sm font-semibold text-red-500 transition-all duration-200 ease-out hover:text-red-700 w-max">Hapus
            Akun</a>
    </div>
</div>