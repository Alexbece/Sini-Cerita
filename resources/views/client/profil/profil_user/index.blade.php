<!DOCTYPE html>
<html lang="en">
@include ('_head')

<body class="profile_pasien">
    <nav class="relative flex items-center justify-between px-8 py-4 bg-white shadow-lg rounded-[20px] w-full">
        @include ('components.navbar')
    </nav>

    <div class="bg-white rounded-[20px] mt-10 lg:flex grid overflow-hidden py-6 px-6 gap-8">

        <div class="grid h-full grid-cols-2 gap-4 lg:flex lg:flex-col border-hitam-100 w-max">
            <a href="/profil"
                class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full hover:text-biru-6 hover:bg-hitam-50 text-biru-6 bg-hitam-50 w-max">Profil
                Saya</a>
            <a href="/riwayat"
                class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full hover:text-biru-6 text-hitam-700 w-max">Riwayat
                Konsultasi</a>
            <div class="hidden px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer lg:block hover:text-biru-6 text-hitam-700 w-max"
                id="modalkeluarButton">
                Keluar</div>
            <a href=""
                class="hidden px-3 py-2 text-sm font-semibold text-red-500 transition-all duration-200 ease-out lg:block hover:text-red-700 w-max">Hapus
                Akun</a>
        </div>

        <div class="h-auto w-[2px] hidden lg:block bg-hitam-100"></div>

        <!-- @include ('client.profil.profil_user.profil_user') -->
         @include ('client.profil.profil_user.riwayat_user')
        
    </div>

    </div>

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

    <script>
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

        })
    </script>
</body>

</html>