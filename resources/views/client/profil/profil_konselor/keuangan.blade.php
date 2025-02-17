<!DOCTYPE html>
<html lang="en">
@include ('_head')

<body>
    <nav class="relative flex items-center justify-between px-8 py-4 bg-white shadow-lg rounded-[20px] w-full">
        @include ('components.navbarKonselor')
    </nav>

    <div class="bg-white rounded-[20px] mt-10 lg:flex grid overflow-hidden py-6 px-6 gap-8">

        <div class="grid h-full grid-cols-2 gap-4 lg:flex lg:flex-col border-hitam-100 w-[200px]">
            <div
                class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer hover:text-biru-6 w-max">
                <a href="{{route('profil-konselor')}}">Profil Saya</a>
            </div>
            <div
                class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer text-biru-6 bg-hitam-50 hover:text-biru-6 w-max">
                <a href="{{route('keuangan-konselor')}}">Keuangan</a>
            </div>
            <div class="hidden px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer lg:block hover:text-biru-6 w-max"
                id="modalkeluarButton">
                Keluar</div>
            <div href="" id="deleteaccountButton"
                class="hidden px-3 py-2 text-sm font-semibold text-red-500 transition-all duration-200 ease-out cursor-pointer lg:block hover:text-red-700 w-max">
                Hapus Akun</div>
        </div>

        <div class="h-auto w-[2px] hidden lg:block bg-hitam-100"></div>

        <div class="flex flex-col justify-start w-full gap-8">
            <h3 class="text-4xl font-bold text-hitam-900">Keuangan</h3>

            <div class="p-3 bg-hitam-50 shadow-lg rounded-xl border-[1px] w-[340px] h-max flex flex-col">
                <h1 class="text-2xl font-semibold text-biru-6 font-jkt">Saldo</h1>

                <div class="grid h-full gap-1 mt-3 bg-white rounded-xl">
                    <p class="px-2 pt-2 font-medium text-hitam-800">Saldo yang tersedia</p>
                    <p class="px-2 text-3xl font-bold text-biru-6">Rp. 150.000</p>
                    <button
                        class="flex justify-center w-full p-2 border-t-[1px] mt-2 text-hitam-800 font-semibold hover:text-biru-6 transition-all duration-300">Klaim
                        saldo</button>
                </div>
            </div>


            <div class="flex flex-col items-start w-full gap-3">
                <h1 class="text-2xl font-bold text-hitam-800">Riwayat Keuangan</h1>
                <div class="relative overflow-x-auto w-full shadow-md rounded-xl border-[1px] hidden lg:block">
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right">
                        <thead class="text-xs text-gray-700 uppercase bg-white">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Pasien
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Konsultasi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jam Konsultasi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga Konsultasi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 bg-hitam-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Farrel Yassar Kurniawan
                                </th>
                                <td class="px-6 py-4">
                                    Senin, 26 Maret 2025
                                </td>
                                <td class="px-6 py-4">
                                    22.00
                                </td>
                                <td class="px-6 py-4">
                                    Rp. 50.000
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-biru-6 hover:text-biru-5">Lihat detail
                                        konsultasi</a>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 bg-hitam-100">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Farrel Yassar Kurniawan
                                </th>
                                <td class="px-6 py-4">
                                    Senin, 26 Maret 2025
                                </td>
                                <td class="px-6 py-4">
                                    22.00
                                </td>
                                <td class="px-6 py-4">
                                    Rp. 50.000
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-biru-6 hover:text-biru-5">Lihat detail
                                        konsultasi</a>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 bg-hitam-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Farrel Yassar Kurniawan
                                </th>
                                <td class="px-6 py-4">
                                    Senin, 26 Maret 2025
                                </td>
                                <td class="px-6 py-4">
                                    22.00
                                </td>
                                <td class="px-6 py-4">
                                    Rp. 50.000
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-biru-6 hover:text-biru-5">Lihat detail
                                        konsultasi</a>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 bg-hitam-100">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Farrel Yassar Kurniawan
                                </th>
                                <td class="px-6 py-4">
                                    Senin, 26 Maret 2025
                                </td>
                                <td class="px-6 py-4">
                                    22.00
                                </td>
                                <td class="px-6 py-4">
                                    Rp. 50.000
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-biru-6 hover:text-biru-5">Lihat detail
                                        konsultasi</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="grid w-full gap-3 lg:hidden">
                    <div class="flex flex-col w-full rounded-lg border-[1px] p-4 gap-3">
                        <div class="flex justify-between w-full">   
                            <div>
                                <p class="text-xl font-medium text-biru-6">Rp. 50.000</p>
                                <p class="text-lg text-hitam-800">Farrel Yassar Kurniawan</p>
                            </div>
                            <div class="grid place-items-end">
                                <p class="text-hitam-800">22.00</p>
                                <p class="text-lg text-hitam-800">Senin, 26 Maret 2025</p>
                            </div>
                        </div>
                            <a href="#"
                                class="px-4 py-2 font-medium text-white rounded-full w-max hover:bg-biru-5 bg-biru-6">Lihat
                                detail
                                konsultasi</a>
                    </div>
                    
                    <div class="flex flex-col  w-full rounded-lg border-[1px] p-4 gap-3">
                        <div class="flex justify-between w-full">   
                            <div>
                                <p class="text-xl font-medium text-biru-6">Rp. 50.000</p>
                                <p class="text-lg text-hitam-800">Farrel Yassar Kurniawan</p>
                            </div>
                            <div class="grid place-items-end">
                                <p class="text-hitam-800">22.00</p>
                                <p class="text-lg text-hitam-800">Senin, 26 Maret 2025</p>
                            </div>
                        </div>
                            <a href="#"
                                class="px-4 py-2 font-medium text-white rounded-full w-max hover:bg-biru-5 bg-biru-6">Lihat
                                detail
                                konsultasi</a>
                    </div>
                    
                    <div class="flex flex-col  w-full rounded-lg border-[1px] p-4 gap-3">
                        <div class="flex justify-between w-full">   
                            <div>
                                <p class="text-xl font-medium text-biru-6">Rp. 50.000</p>
                                <p class="text-lg text-hitam-800">Farrel Yassar Kurniawan</p>
                            </div>
                            <div class="grid place-items-end">
                                <p class="text-hitam-800">22.00</p>
                                <p class="text-lg text-hitam-800">Senin, 26 Maret 2025</p>
                            </div>
                        </div>
                            <a href="#"
                                class="px-4 py-2 font-medium text-white rounded-full w-max hover:bg-biru-5 bg-biru-6">Lihat
                                detail
                                konsultasi</a>
                    </div>
                    
                    <div class="flex flex-col  w-full rounded-lg border-[1px] p-4 gap-3">
                        <div class="flex justify-between w-full">   
                            <div>
                                <p class="text-xl font-medium text-biru-6">Rp. 50.000</p>
                                <p class="text-lg text-hitam-800">Farrel Yassar Kurniawan</p>
                            </div>
                            <div class="grid place-items-end">
                                <p class="text-hitam-800">22.00</p>
                                <p class="text-lg text-hitam-800">Senin, 26 Maret 2025</p>
                            </div>
                        </div>
                            <a href="#"
                                class="px-4 py-2 font-medium text-white rounded-full w-max hover:bg-biru-5 bg-biru-6">Lihat
                                detail
                                konsultasi</a>
                    </div>
                    
                    <div class="flex flex-col  w-full rounded-lg border-[1px] p-4 gap-3">
                        <div class="flex justify-between w-full">   
                            <div>
                                <p class="text-xl font-medium text-biru-6">Rp. 50.000</p>
                                <p class="text-lg text-hitam-800">Farrel Yassar Kurniawan</p>
                            </div>
                            <div class="grid place-items-end">
                                <p class="text-hitam-800">22.00</p>
                                <p class="text-lg text-hitam-800">Senin, 26 Maret 2025</p>
                            </div>
                        </div>
                            <a href="#"
                                class="px-4 py-2 font-medium text-white rounded-full w-max hover:bg-biru-5 bg-biru-6">Lihat
                                detail
                                konsultasi</a>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-3 lg:hidden ">
                <div class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer hover:text-biru-6 text-hitam-700 w-max"
                    id="modalkeluarButton">Keluar</div>
                <a href=""
                    class="px-3 py-2 text-sm font-semibold text-red-500 transition-all duration-200 ease-out hover:text-red-700 w-max">Hapus
                    Akun</a>
            </div>
        </div>

        <!-- Modal Keluar -->
        <div class="fixed inset-0 flex items-center justify-center hidden w-screen h-screen sign_out bg-hitam-800/40"
            id="modalkeluar">
            <div class="w-[500px] h-max bg-white rounded-[20px] p-6 flex flex-col justify-between">
                <i class="w-full text-5xl text-center text-biru-6 bx bx-error h-max"></i>
                <div class="grid gap-2 mt-4 mb-8 text-center place-content-center">
                    <h2 class="text-2xl font-bold font-jkt text-hitam-900">Keluar dari akun</h2>
                    <p class="text-hitam-900">Yakin ingin keluar dari akun Anda?</p>
                </div>
                <div class="flex items-center justify-center w-full gap-3">
                    <button
                        class="px-4 py-2 text-lg font-semibold text-white transition-all duration-200 rounded-full bg-biru-6 hover:bg-biru-5"
                        id="batalButton">Batal</button>
                    <button
                        class="px-4 py-2 text-lg font-semibold transition-all duration-200 rounded-full text-biru-6 bg-hitam-50 hover:bg-hitam-100">Keluar</button>
                </div>
            </div>
        </div>

        <!-- Modal Hapus Akun -->
        <div class="fixed inset-0 flex items-center justify-center hidden w-screen h-screen sign_out bg-hitam-800/40"
            id="deleteaccount">
            <div class="w-[500px] h-max bg-white rounded-[20px] p-6 flex flex-col justify-between">
                <i class="w-full text-5xl text-center text-red-500 bx bx-error h-max"></i>
                <div class="grid gap-2 mt-4 mb-8 text-center place-content-center">
                    <h2 class="text-2xl font-bold font-jkt text-hitam-900">Hapus akun</h2>
                    <p class="text-sm text-hitam-900">Tindakan ini akan menghapus seluruh data dan aktivitas Anda dari
                        aplikasi Sini Cerita. Apakah Anda benar-benar yakin untuk menghapus akun?</p>
                </div>
                <div class="flex items-center justify-center w-full gap-3">
                    <button
                        class="px-4 py-2 font-semibold text-white transition-all duration-200 rounded-full bg-biru-6 hover:bg-biru-5"
                        id="bataldeleteButton">Batal</button>
                    <button
                        class="px-4 py-2 font-semibold text-red-500 transition-all duration-200 rounded-full bg-hitam-50 hover:bg-hitam-100">Hapus
                        Akun</button>
                </div>
            </div>
        </div>

        <script>
            // Hapus Akun Modal
            document.addEventListener('DOMContentLoaded', () => {
                const deleteaccountButton = document.getElementById('deleteaccountButton');
                const deleteaccount = document.getElementById('deleteaccount');
                const bataldeleteButton = document.getElementById('bataldeleteButton');

                deleteaccountButton.addEventListener('click', () => {
                    deleteaccount.classList.toggle('hidden');
                });

                bataldeleteButton.addEventListener('click', () => {
                    deleteaccount.classList.add('hidden');
                })

            });

            // Modal Keluar
            document.addEventListener('DOMContentLoaded', () => {
                const modalkeluarButton = document.getElementById('modalkeluarButton');
                const modalkeluar = document.getElementById('modalkeluar');
                const batalButton = document.getElementById('batalButton');

                modalkeluarButton.addEventListener('click', () => {
                    modalkeluar.classList.toggle('hidden');
                });

                batalButton.addEventListener('click', () => {
                    modalkeluar.classList.add('hidden');
                })

            });
        </script>
</body>

</html>