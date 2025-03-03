<!DOCTYPE html>
<html lang="en">
@include ('_head')

<body class="konselorSignUp">
    <div class="grid gap-4 p-5 bg-white border-2 shadow-xl rounded-xl h-max place-items-center">
        <div class="grid gap-2">
            <h1 class="text-xl font-bold text-center font-jkt text-biru-6">Sini Cerita</h1>
            <h1 class="text-2xl font-bold text-center text-hitam-800">Daftar Sebagai Konselor</h1>
        </div>
        <div class="grid grid-cols-2 gap-6 py-6 w-max place-items-start">
            <div class="grid w-full gap-5">
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <label for="namalengkap" class="text-sm font-semibold text-hitam-800">Nama lengkap<span
                            class="text-red-500">*</span></label>
                    <input type="text" id="namalengkap" placeholder="Nama lengkap"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway" required>
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800">Tanggal Lahir<span class="text-red-500">*</span></p>
                    <input type="text" placeholder="Tanggal Lahir"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div>
                    <div class="grid w-full grid-cols-[190px,1fr,1fr] gap-x-5 gap-y-3 items-center ">
                        <p class="text-sm font-semibold text-hitam-800 ">Email & No. Telepon<span
                                class="text-red-500">*</span></p>
                        <input type="email" placeholder="Email"
                            class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                        <input type="text" placeholder="No. telp"
                            class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                    </div>
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800">Alamat<span class="text-red-500">*</span></p>
                    <input type="text" placeholder="Alamat"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div>
                    <div class="grid w-full grid-cols-[190px,1fr,1fr] gap-x-5 gap-y-3 items-center ">
                        <label class="text-sm font-semibold text-hitam-800">Nomor STR & Nomor Lisensi<span
                                class="text-red-500">*</span></label>
                        <input type="text" placeholder="Nomor STR"
                            class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                        <input type="text" placeholder="Nomor Lisensi"
                            class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                    </div>
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <label class="text-sm font-semibold text-hitam-800">Riwayat Lulus<span
                            class="text-red-500">*</span></label>
                    <input type="text" placeholder="Riwayat Lulus"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800 w-max">Spesialis<span class="text-red-500">*</span>
                    </p>
                    <div class="flex items-center w-full gap-3">
                        <div
                            class="flex items-center justify-start w-full gap-2 py-3 pl-2 pr-6 border-2 rounded-lg h-max">
                            <input type="radio" value="psikolog" id="psikolog" name="spesialis"
                                class="text-sm border-2 rounded-full text-biru-6">
                            <label for="psikolog" class="text-sm font-raleway">Psikolog</label>
                        </div>
                        <div
                            class="flex items-center justify-start w-full gap-2 py-3 pl-2 pr-6 border-2 rounded-lg h-max">
                            <input type="radio" value="psikiater" id="psikiater" name="spesialis"
                                class="text-sm border-2 rounded-full text-biru-6">
                            <label for="psikiater" class="text-sm font-raleway">Psikiater</label>
                        </div>
                    </div>
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <label class="text-sm font-semibold text-hitam-800">Klinik Sebelumnya<span
                            class="text-red-500">*</span></label>
                    <input type="text" placeholder="Klinik Sebelumnya"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
            </div>
            <div class="grid w-full gap-5">
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800">Durasi pengalaman kerja bulan/tahun<span
                            class="text-red-500">*</span>
                    </p>
                    <input type="text" placeholder="ex. 5 Tahun"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800">Riwayat Sekolat<span class="text-red-500">*</span>
                    </p>
                    <input type="text" placeholder="ex. Universitas Airlangga"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800">Asosiasi<span class="text-red-500">*</span>
                    </p>
                    <input type="text" placeholder="ex. Sekolah Dokter Kesehatan Mental"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800">Masa berlaku lisensi
                    </p>
                    <input type="text" placeholder="Masa berlaku lisensi (jika ada)"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <label for="foto_profil" class="text-sm font-semibold text-hitam-800">Foto Profil<span
                            class="text-red-500">*</span>
                    </label>
                    <input type="file" id="foto_profil" class="w-full text-sm rounded-lg">
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <label for="s_profesi" class="text-sm font-semibold text-hitam-800">Sertifikat Profesi<span
                            class="text-red-500">*</span>
                    </label>
                    <input type="file" id="s_profesi" class="w-full text-sm rounded-lg">
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <label for="KTP" class="text-sm font-semibold text-hitam-800">Foto KTP<span
                            class="text-red-500">*</span>
                    </label>
                    <input type="file" id="KTP" class="w-full text-sm rounded-lg">
                </div>
                <div class="grid w-full grid-cols-[190px,1fr] gap-x-5 gap-y-3 items-center">
                    <label for="s_pengalaman" class="text-sm font-semibold text-hitam-800">Sertifikat Pengalaman<span
                            class="text-red-500">*</span>
                    </label>
                    <input type="file" id="s_pengalaman" class="w-full text-sm rounded-lg">
                </div>
            </div>
        </div>
        <div class="w-full">
            <button class="w-full py-2 text-xl font-semibold text-white rounded-lg font-raleway px-9 bg-biru-6 h-max">
                Daftar
            </button>
            <p class="w-full mt-2 text-xs text-left text-hitam-500">Sudah mempunyai akun? <a
                    href="{{ route('konselorLogin') }}" class="text-biru-6">Masuk sebagai konselor</a>.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
</body>

</html>
