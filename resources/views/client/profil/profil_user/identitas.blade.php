<div class="flex flex-col justify-start w-full">
    <h3 class="text-4xl font-bold text-hitam-900">Profil Saya</h3>

    <div class="flex items-center justify-between w-full gap-4 p-6 mt-4 border-2 h-max border-hitam-100 rounded-xl">
        <div class="flex items-center gap-4">
            <img class="object-cover object-top w-20 h-20 border-2 rounded-full shadow-lg border-biru-6"
                src="{{asset('client/img/foto_dokter/foto_doctor_1.jpg')}}" alt="">
            <div class="flex flex-col">
                <h4 class="text-xl font-semibold">Farrel Yassar</h4>
                <p class="text-sm font-semibold text-hitam-400">Pengguna Sini Cerita</p>
            </div>
        </div>

        <a href="{{route ('home')}}"><button
            class="flex items-center gap-1 px-3 py-2 text-sm border-2 rounded-full shadow-lg editmodalButton h-max w-max text-hitam-600">Edit
            <i class="transform translate-y-[1px] bx bx-pencil"></i></button></a>
    </div>

    <div class="flex items-start justify-between w-full gap-4 p-6 mt-6 border-2 border-hitam-100 rounded-xl h-max">
        <div class="flex flex-col w-full gap-4">
            <h3 class="inline text-2xl font-bold text-hitam-900">Identitas Saya</h3>

            <div class="grid lg:grid-cols-2 lg:w-[60%] w-full gap-6">
                <div class="grid gap-4 text-left place-content-start">
                    <p class="text-sm font-semibold text-hitam-600/70">Nama Depan</p>
                    <p class="font-bold text-hitam-700">Farrel</p>
                </div>

                <div class="grid gap-4 text-left place-content-start">
                    <p class="text-sm font-semibold text-hitam-600/70">Nama Belakang</p>
                    <p class="font-bold text-hitam-700">Yassar</p>
                </div>

                <div class="grid gap-4 text-left place-content-start">
                    <p class="text-sm font-semibold text-hitam-600/70">Alamat Email</p>
                    <p class="font-bold text-hitam-700">example@domain.com</p>
                </div>

                <div class="grid gap-4 text-left place-content-start">
                    <p class="text-sm font-semibold text-hitam-600/70">Nomor Telepon</p>
                    <p class="font-bold text-hitam-700">+62 089-7087-6646</p>
                </div>

                <div class="grid gap-4 text-left place-content-start">
                    <p class="text-sm font-semibold text-hitam-600/70">Peran</p>
                    <p class="font-bold text-hitam-700">Pengguna Sini Cerita</p>
                </div>
            </div>


        </div>
        <button
            class="flex items-center gap-1 px-3 py-2 text-sm border-2 rounded-full shadow-lg h-max w-max text-hitam-600">Edit
            <i class="transform translate-y-[1px] bx bx-pencil"></i></button>
    </div>
</div>