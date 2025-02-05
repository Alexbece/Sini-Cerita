<!DOCTYPE html>
<html lang="en">
@include ('_head')

<body class="profile_pasien">

    <nav class="relative flex items-center justify-between px-8 py-4 bg-white shadow-lg rounded-[20px] w-full">
        @include ('components.navbar')
    </nav>

    <div class="bg-white rounded-[20px] mt-10 lg:flex grid overflow-hidden py-6 px-6 gap-8">

        <div class="grid h-full grid-cols-2 gap-4 lg:flex lg:flex-col border-hitam-100 w-max">
            <div class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer hover:text-biru-6 w-max"
                id="identitasButton">
                Profil Saya</div>
            <div class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer hover:text-biru-6 w-max"
                id="riwayatButton">
                Riwayat Konsultasi</div>
            <div class="hidden px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer lg:block hover:text-biru-6 text-hitam-700 w-max"
                id="modalkeluarButton">
                Keluar</div>
            <div href="" id="deleteaccountButton"
                class="hidden px-3 py-2 text-sm font-semibold text-red-500 transition-all duration-200 ease-out cursor-pointer lg:block hover:text-red-700 w-max">
                Hapus Akun</div>
        </div>

        <div class="h-auto w-[2px] hidden lg:block bg-hitam-100"></div>

        <div id="contentArea" class="w-full">

        </div>

        <div class="flex items-center gap-3 lg:hidden ">
            <div class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer hover:text-biru-6 text-hitam-700 w-max"
                id="modalkeluarButton">Keluar</div>
            <a href=""
                class="px-3 py-2 text-sm font-semibold text-red-500 transition-all duration-200 ease-out hover:text-red-700 w-max">Hapus
                Akun</a>
        </div>
    </div>

    <!-- Edit Profil -->
    <div class="fixed inset-0 flex items-center justify-center hidden w-screen h-screen sign_out bg-hitam-800/40"
        id="editModal">
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
                    <button
                        class="p-2 text-sm border-2 rounded-lg text-hitam-900 border-hitam-100 h-max w-max hover:bg-hitam-100 hover:border-hitam-100">Upload
                        foto</button>
                </div>
            </div>

            <div class="flex justify-end w-full gap-4">
                <button id="bataleditButton" class="px-4 py-2 rounded bg-hitam-50 text-biru-6">Batal</button>
                <button class="px-4 py-2 text-white rounded bg-biru-6">Simpan</button>
            </div>
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

    <div class="fixed inset-0 flex items-center justify-center hidden w-screen h-screen sign_out bg-hitam-800/40"
        id="deleteaccount">
        <div class="w-[500px] h-max bg-white rounded-[20px] p-6 flex flex-col justify-between">
            <i class="w-full text-5xl text-center text-red-500 bx bx-error h-max"></i>
            <div class="grid gap-2 mt-4 mb-8 text-center place-content-center">
                <h2 class="text-2xl font-bold font-jkt text-hitam-900">Keluar dari akun</h2>
                <p class="text-sm text-hitam-900">Tindakan ini akan menghapus seluruh data dan aktivitas Anda dari
                    aplikasi Sini Cerita. Apakah Anda benar-benar yakin untuk menghapus akun?</p>
            </div>
            <div class="flex items-center justify-center w-full gap-3">
                <button
                    class="px-4 py-2 text-lg font-semibold text-white transition-all duration-200 rounded-full bg-biru-6 hover:bg-biru-5"
                    id="bataldeleteButton">Batal</button>
                <button
                    class="px-4 py-2 text-lg font-semibold text-red-500 transition-all duration-200 rounded-full bg-hitam-50 hover:bg-hitam-100">Hapus
                    Akun</button>
            </div>
        </div>
    </div>

    @include ('client.profil.profil_user.edit')

    <div id="loading" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-hitam-800/40">
        <div class="text-xl text-white">Loading...</div>
    </div>

    <script>

        // Sign Out Modal
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

        // Delete Account Modal
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

        // Edit Account Modal
        document.addEventListener('DOMContentLoaded', () => {
            const editmodalButtons = document.querySelectorAll('.editmodalButton');
            const editModal = document.getElementById('editModal');
            const bataleditButton = document.getElementById('bataleditButton');

            editmodalButtons.forEach(button => {
                button.addEventListener('click', () => {
                    editModal.classList.toggle('hidden');
                });
            });

            bataleditButton.addEventListener('click', () => {
                editModal.classList.add('hidden');
            });
        });


        // Profil Konten
        document.addEventListener('DOMContentLoaded', function () {
            setActiveButton('identitasButton'); // Set tombol Profil Saya aktif saat halaman pertama kali dimuat
            loadContent('/profil/identitas');   // Memuat profil identitas
        });
        document.getElementById('identitasButton').addEventListener('click', function (e) {
            e.preventDefault();
            setActiveButton('identitasButton'); // Set tombol aktif
            loadContent('/profil/identitas');
        });
        document.getElementById('riwayatButton').addEventListener('click', function (e) {
            e.preventDefault();
            setActiveButton('riwayatButton'); // Set tombol aktif
            loadContent('/profil/riwayat');
        });

        // Loading Page
        function loadContent(url) {
            // Menampilkan elemen loading
            document.getElementById('loading').classList.remove('hidden');

            fetch(url)
                .then(response => response.text())
                .then(data => {
                    // Menyembunyikan elemen loading setelah konten dimuat
                    document.getElementById('loading').classList.add('hidden');

                    // Memasukkan konten yang didapat ke dalam area content
                    document.getElementById('contentArea').innerHTML = data;
                })
                .catch(error => {
                    console.log('Error:', error);
                    // Menyembunyikan elemen loading jika terjadi error
                    document.getElementById('loading').classList.add('hidden');
                });
        }

        function setActiveButton(buttonId) {
            // Reset semua tombol ke status semula
            const buttons = ['identitasButton', 'riwayatButton'];
            buttons.forEach((id) => {
                document.getElementById(id).classList.remove('text-biru-6', 'bg-hitam-50');
            });

            // Set tombol aktif
            document.getElementById(buttonId).classList.add('text-biru-6', 'bg-hitam-50');
        }
    </script>
</body>

</html>