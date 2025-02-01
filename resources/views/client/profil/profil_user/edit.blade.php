<div class="fixed inset-0 flex items-center justify-center hidden w-screen h-screen sign_out bg-hitam-800/40" id="editModal">
    <div class="flex flex-col items-center justify-center gap-4 p-4 bg-white rounded-lg h-max w-max">
        <div class="grid mb-2 text-center place-items-center">
            <img src="{{asset('client/img/foto_dokter/foto_doctor_1.jpg')}}" alt=""
                class="object-cover object-top w-20 h-20 mb-4 border-2 rounded-full shadow-lg border-biru-6">
            <h4 class="text-2xl font-bold text-hitam-800">Farrel Yassar Kurniawan</h4>
            <p class="text-sm font-light text-hitam-600">farrel26yassar@gmail.com</p>
        </div>

        <div class="flex items-center w-full gap-4 px-3 pb-4 border-b-2 border-hitam-100">
            <h2 class="min-w-[70px] mr-3 font-semibold text-hitam-800">Nama</h2>
            <input type="text" class="px-3 py-2 text-sm font-light border rounded-lg w-fit border-hitam-300"
                placeholder="Nama Depan">
            <input type="text" class="px-3 py-2 text-sm font-light border rounded-lg w-fit border-hitam-300"
                placeholder="Nama Belakang">
        </div>

        <div class="flex items-center w-full gap-4 px-3 pb-4 border-b-2 border-hitam-100">
            <h2 class="min-w-[70px] mr-3 font-semibold text-hitam-800">Email</h2>
            <input type="text" class="px-3 py-2 text-sm font-light border rounded-lg w-fit border-hitam-300"
                placeholder="Alamat Email">
        </div>

        <div class="flex items-center w-full gap-4 px-3 pb-4 border-b-2 border-hitam-100">
            <h2 class="min-w-[70px] mr-3 font-semibold text-hitam-800">Telepon</h2>
            <input type="text" class="px-3 py-2 text-sm font-light border rounded-lg w-fit border-hitam-300"
                placeholder="Nomor Telepon">
        </div>

        <div class="flex w-full gap-4 px-3 border-b-2 border-hitam-100">
            <h2 class="min-w-[70px] mr-3 font-semibold text-hitam-800">Foto Profil</h2>
            <div class="flex gap-2">
                <img src="{{asset('client/img/foto_dokter/foto_doctor_1.jpg')}}" alt=""
                    class="object-cover object-top mb-4 border-2 rounded-full shadow-lg w-14 h-14 border-biru-6">
                <button class="p-2 text-sm border-2 rounded-lg text-hitam-900 border-hitam-100 h-max w-max hover:bg-hitam-100 hover:border-hitam-100">Upload foto</button>
            </div>
        </div>

        <div class="flex justify-end w-full gap-4">
            <button id="bataleditButton" class="px-4 py-2 rounded bg-hitam-50 text-biru-6">Batal</button>
            <button class="px-4 py-2 text-white rounded bg-biru-6">Simpan</button>
        </div>
    </div>
</div>