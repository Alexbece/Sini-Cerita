<!DOCTYPE html>
<html lang="en">

@include ('_head')

<body class="bg-white">
    <nav class="relative flex items-center justify-between px-8 py-4 bg-biru-1 rounded-[20px] w-full">
        @include ('components.navbar')
    </nav>
    <div class="grid w-full place-content-center">
        <div class="mt-12 w-max grid 2xl:flex gap-5 p-4 rounded-[40px] border-2 border-hitam-200">
            <div class="grid h-max gap-10 max-w-[494px]">
                <h2 class="text-3xl font-semibold text-hitam-900">Cara Konsultasi</h2>
                <div class="grid gap-4 ">
                    <div class="grid gap-2">
                        <h4 class="text-lg font-medium text-hitam-500 font-jkt">1. Langkah Pertama :</h4>
                        <p class="text-sm text-wrap text-hitam-500">Pilih Konselor. Pilih Konselor yang tersedia dan
                            klik pada tombol chat untuk mengirim
                            permintaan berkonsultasi.
                        </p>
                    </div>
                    <div class="grid gap-2">
                        <h4 class="text-lg font-medium text-hitam-500 font-jkt">2. Langkah Kedua :</h4>
                        <p class="text-sm text-wrap text-hitam-500">Proses Pembayaran. Lakukan proses pembayaran dan
                            tentukan berapa jangka waktu konsultasi yang Anda inginkan.
                        </p>
                    </div>
                    <div class="grid gap-2">
                        <h4 class="text-lg font-medium text-hitam-500 font-jkt">3. Langkah Kegita :</h4>
                        <p class="text-sm text-wrap text-hitam-500">Tunggu Konselor. Tunggu sampai dokter merespon
                            jawaban Anda (sekitar 2-3 menit).
                        </p>
                    </div>
                    <div class="grid gap-2">
                        <h4 class="text-lg font-medium text-hitam-500 font-jkt">4. Langkah Terakhir :</h4>
                        <p class="text-sm text-wrap text-hitam-500">Bicara dengan Konselor. Setelah Anda terhubung
                            dengan Konselor, silahkan jelaskan kondisi Anda ke Konselor.
                        </p>
                    </div>
                </div>
            </div>

            <div class="h-auto w-[2px] bg-hitam-300"></div>

            <div class="flex flex-col w-full h-auto gap-6">
                <div>
                    <h2 class="text-3xl font-semibold text-hitam-900">Daftar Konselor</h2>
                    <p class="text-sm text-hitam-500">Konsultasi online dengan Konselor terpercaya</p>
                </div>

                <div class="grid gap-6">
                    <div class="flex gap-3">
                        <button
                            class="px-3 py-2 text-sm transition-all duration-500 ease-out rounded-full bg-biru-6 text-white focus:outline-none ">Semua</button>
                        <button
                            class="px-3 py-2 text-sm transition-all duration-500 ease-out rounded-full text-hitam-500 hover:bg-biru-6 hover:text-white focus:outline-none ">Psikiater</button>
                        <button
                            class="px-3 py-2 text-sm transition-all duration-500 ease-out rounded-full text-hitam-500 hover:bg-biru-6 hover:text-white focus:outline-none ">Psikolog</button>
                    </div>

                    @include ('client.konselor.list_konselor')

                </div>
            </div>
            <!-- @include ('client.konselor.modal_konselor') -->
        </div>

        <footer class="bg-biru-1 mt-12 rounded-[30px] grid xl:grid-cols-2 gap-12 place-items-center h-max justify-center p-16 transition-all ease-out duration-300">
    @include ('components.footer')
    </footer>
</body>


</html>