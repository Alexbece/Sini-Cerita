<!DOCTYPE html>
<html lang="en">
@include ('_head')

<body class="konselorSignUp">
    <div class="flex gap-6 p-5 bg-white rounded-xl h-max">
        <div class="h-auto w-[330px] bg-biru-6 rounded-lg p-8 lg:flex lg:flex-col justify-between hidden">
            <h3 class="text-xl font-bold text-white font-jkt">Sini Cerita</h3>
            <div class="grid gap-2 mb-9">
                <h1 class="text-4xl font-bold text-white font-jkt text-wrap">Mulai jadi konselor dengan kami.</h1>
                <p class="text-white/90">Isi formulir disamping dengan baik dan benar!</p>
            </div>
            <p></p>
        </div>
        <div class="grid gap-6 py-6 w-max place-items-center">
            <div class="grid w-full gap-5">
                <div class="grid w-full grid-cols-[150px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800">Nama lengkap</p>
                    <input type="text" placeholder="Nama lengkap"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div class="grid w-full grid-cols-[150px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800">Email</p>
                    <input type="text" placeholder="Email"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div class="grid w-full grid-cols-[150px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800 w-max">Spesialis</p>
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
                <div class="grid w-full grid-cols-[150px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800">Nomor STR</p>
                    <input type="text" placeholder="Nomor STR"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div class="grid w-full grid-cols-[150px,1fr] gap-x-5 gap-y-3 items-center ">
                    <label for="CV" class="w-full text-sm font-semibold text-hitam-800">Upload CV</label>
                    <input type="file" id="CV" class="w-full text-sm rounded-lg">
                </div>
                <div class="grid w-full grid-cols-[150px,1fr] gap-x-5 gap-y-3 items-center ">
                    <div class="grid gap-2">
                        <label for="CV" class="w-full text-sm font-semibold text-hitam-800">Upload Foto</label>
                        <p class="text-xs text-hitam-600">*Maksimal 300Kb</p>
                    </div>
                    <input type="file" id="CV" class="w-full text-sm rounded-lg">
                </div>
                <div class="grid w-full grid-cols-[150px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800">Alamat</p>
                    <input type="text" placeholder="Alamat"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div class="grid w-full grid-cols-[150px,1fr] gap-x-5 gap-y-3 items-center">
                    <p class="text-sm font-semibold text-hitam-800">No. Telp</p>
                    <input type="text" placeholder="No. telp"
                        class="w-full px-3 py-2 text-sm border-2 rounded-md font-raleway">
                </div>
                <div>
                    <button
                        class="w-full py-2 text-lg font-semibold text-white rounded-lg font-raleway px-9 bg-biru-6 h-max">
                        Daftar
                    </button>
                    <p class="w-full mt-2 text-xs text-center text-hitam-500">Sudah mempunyai akun? <a
                            href="{{route('konselorLogin')}}" class="text-biru-6">Masuk sebagai konselor</a>.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>