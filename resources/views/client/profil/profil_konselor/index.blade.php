<!DOCTYPE html>
<html lang="en">
@include ('_head')

<body>
    <nav class="relative flex items-center justify-between px-8 py-4 bg-white shadow-lg rounded-[20px] w-full">
        @include ('layouts.partial.navbar')
    </nav>

    <div class="bg-white rounded-[20px] mt-10 lg:flex grid overflow-hidden py-6 px-6 gap-8">

        <div class="grid h-full grid-cols-2 gap-4 lg:flex lg:flex-col border-hitam-100 w-[200px]">
            <div class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer text-biru-6 bg-hitam-50 hover:text-biru-6 w-max"
                id="identitasButton">
                <a href="">Profil Saya</a>
            </div>
            <div
                class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer hover:text-biru-6 w-max">
                <a href="">Keuangan</a>
            </div>
            <div class="hidden px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer lg:block hover:text-biru-6 w-max"
                id="modalkeluarButton">
                Keluar</div>
            <div href="" id="deleteaccountButton"
                class="hidden px-3 py-2 text-sm font-semibold text-red-500 transition-all duration-200 ease-out cursor-pointer lg:block hover:text-red-700 w-max">
                Hapus Akun</div>
        </div>

        <div class="h-auto w-[2px] hidden lg:block bg-hitam-100"></div>

        <div class="flex flex-col justify-start w-full">
            <h3 class="text-4xl font-bold text-hitam-900">Profil Saya</h3>

            <div
                class="flex items-center justify-between w-full gap-4 p-6 mt-4 border-2 h-max border-hitam-100 rounded-xl">
                <div class="flex items-center gap-4">
                    <img class="object-cover object-top w-20 h-20 border-2 rounded-full shadow-lg border-biru-6"
                        src="{{asset('client/img/foto_dokter/foto_doctor_1.jpg')}}" alt="">
                    <div class="flex flex-col">
                        <h4 class="text-xl font-semibold text-hitam-800">Dr. Mifta S,Psi.</h4>
                        <p class="text-sm font-semibold text-hitam-400">Psikiater</p>
                    </div>
                </div>

                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="middle-center-modal"
                    data-overlay="#GantiFotoProfil"
                    class="flex items-center gap-1 px-3 py-2 text-sm border-2 rounded-full shadow-lg h-max w-max text-hitam-600">Ganti
                    foto profil
                    <i class="transform translate-y-[1px] bx bx-pencil"></i></button>
            </div>

            <div class="grid items-start justify-between w-full gap-4 mt-6 lg:flex h-max">
                <div class="flex flex-col w-full gap-4 p-6 border-2 border-hitam-100 rounded-xl">
                    <h3 class="inline text-2xl font-bold text-hitam-900">Identitas Saya</h3>

                    <div class="grid gap-6 w-max lg:grid-cols-2">
                        <div class="grid gap-4 text-left place-content-start w-max">
                            <p class="text-sm font-semibold text-hitam-600/70">Nama Lengkap</p>
                            <p class="font-bold text-hitam-700">Farrel Yassar Kurniawan</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Email</p>
                            <p class="font-bold text-hitam-700">example@gmail.com</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Alamat</p>
                            <p class="font-bold text-hitam-700">Jl. Bayam Sore no.24</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Spesialis</p>
                            <p class="font-bold text-hitam-700">Psikolog</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Nomor STR</p>
                            <p class="font-bold text-hitam-700">09328534</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Tanggal Lahir</p>
                            <p class="font-bold text-hitam-700">10 October 2006</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Lulus Dari</p>
                            <p class="font-bold text-hitam-700">Universitas Brawijaya</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Nomor Lisensi</p>
                            <p class="font-bold text-hitam-700">2392378</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Sertifikat Profesi</p>
                            <p class="font-bold text-hitam-700">2392378</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Asosiasi</p>
                            <p class="font-bold text-hitam-700">2392378</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Sertifikat Pengalaman</p>
                            <p class="font-bold text-hitam-700">2392378</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Durasi Pengalaman</p>
                            <p class="font-bold text-hitam-700">18 Tahun</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Tempat Sebelumnya</p>
                            <p class="font-bold text-hitam-700">Universitas Brawijaya</p>
                        </div>
                        <div class="grid gap-4 text-left w-max place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Foto KTP</p>
                            <p class="font-bold text-hitam-700">2392378</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-4 p-6 border-2 border-hitam-100 rounded-xl">
                    <h3 class="inline text-2xl font-bold text-hitam-900">Jadwal Ketersediaan</h3>

                    <div class="grid w-full gap-6 lg:w-max">
                        <div class="grid w-full gap-4 text-left place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Hari Ketersediaan</p>
                            <div class="grid items-center w-full grid-cols-4 gap-4 lg:grid-cols-7 lg:w-max">
                                <p class="px-3 py-2 rounded-full text-biru-6 bg-hitam-50 h-max w-max">Senin</p>
                                <p class="text-hitam-700">Selasa</p>
                                <p class="px-3 py-2 rounded-full text-biru-6 bg-hitam-50 h-max w-max">Rabu</p>
                                <p class="text-hitam-700">Kamis</p>
                                <p class="px-3 py-2 rounded-full text-biru-6 bg-hitam-50 h-max w-max">Jumat</p>
                                <p class="px-3 py-2 rounded-full text-biru-6 bg-hitam-50 h-max w-max">Sabtu</p>
                                <p class="text-hitam-700">Minggu</p>
                            </div>
                        </div>
                        <div class="grid w-full gap-4 text-left place-content-start">
                            <p class="text-sm font-semibold text-hitam-600/70">Jam Ketersediaan</p>
                            <div class="grid items-center w-full grid-cols-5 gap-4 lg:grid-cols-7 lg:w-max">
                                <p class="text-hitam-700">09.00</p>
                                <p class="px-3 py-2 rounded-full text-biru-6 bg-hitam-50 h-max w-max">10.00</p>
                                <p class="px-3 py-2 rounded-full text-biru-6 bg-hitam-50 h-max w-max">11.00</p>
                                <p class="text-hitam-700">12.00</p>
                                <p class="text-hitam-700">13.00</p>
                                <p class="px-3 py-2 rounded-full text-biru-6 bg-hitam-50 h-max w-max">14.00</p>
                                <p class="text-hitam-700">15.00</p>
                                <p class="text-hitam-700">16.00</p>
                                <p class="px-3 py-2 rounded-full text-biru-6 bg-hitam-50 h-max w-max">17.00</p>
                                <p class="text-hitam-700">18.00</p>
                                <p class="text-hitam-700">19.00</p>
                                <p class="text-hitam-700">20.00</p>
                            </div>
                        </div>
                        <button type="button" aria-haspopup="dialog" aria-expanded="false"
                            aria-controls="middle-center-modal" data-overlay="#EditJadwalKetersediaan"
                            class="flex items-start px-3 py-2 font-medium text-white rounded-full w-max bg-biru-6 h-max">Ubah
                            Jadwal Ketersediaan</button>
                    </div>
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

    <!-- Modal Ubah Jadwal Ketersediaan -->
    <div id="EditJadwalKetersediaan" class="hidden overlay modal overlay-open:opacity-100 modal-middle" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="bg-white modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-hitam-800">Ubah Jadwal Ketersediaan</h3>
                    <button type="button" class="absolute btn btn-text btn-circle btn-sm end-3 top-3" aria-label="Close"
                        data-overlay="#EditJadwalKetersediaan">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="flex flex-col gap-4">
                        <div class="grid gap-3">
                            <h3 class="text-hitam-800">Hari Ketersediaan</h3>
                            <div class="grid grid-cols-5 gap-2">
                                <input type="button" class="text-sm font-light rounded-full btn btn-accent w-max"
                                    value="Senin">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max"
                                    value="Selasa">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="Rabu">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="Kamis">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="Jumat">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="Sabtu">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max"
                                    value="Minggu">
                            </div>
                        </div>
                        <div class="grid gap-3">
                            <h3 class="text-hitam-800">Jam Ketersediaan</h3>
                            <div class="grid grid-cols-5 gap-2">
                                <input type="button" class="text-sm font-light rounded-full btn btn-accent w-max"
                                    value="00.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="01.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="02.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="03.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="04.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="05.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="06.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="07.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="08.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="09.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="10.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="11.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="12.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="13.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="14.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="15.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="16.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="17.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="18.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="19.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="20.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="21.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="22.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="23.00">
                                <input type="button"
                                    class="text-sm font-light rounded-full btn btn-soft btn-accent w-max" value="24.00">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-soft btn-secondary"
                        data-overlay="#EditJadwalKetersediaan">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ganti Foto Profil -->
    <div id="GantiFotoProfil" class="hidden overlay modal overlay-open:opacity-100 modal-middle" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="bg-white modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-hitam-800">Ganti Foto Profil</h3>
                    <button type="button" class="absolute btn btn-text btn-circle btn-sm end-3 top-3" aria-label="Close"
                        data-overlay="#GantiFotoProfil">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div data-file-upload='{
                        "url": "/upload",
                        "acceptedFiles": "image/*",
                        "autoHideTrigger": false,
                        "maxFiles": 1,
                        "singleton": true,
                        "extensions": {
                            "csv": {
                            "icon": "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4\"/><path d=\"M14 2v4a2 2 0 0 0 2 2h4\"/><path d=\"m5 12-3 3 3 3\"/><path d=\"m9 18 3-3-3-3\"/></svg>",
                            "class": "shrink-0 size-5"
                            }
                        }
                        }'>
                        <template data-file-upload-preview="">
                            <div class="relative p-2 mt-2 shadow-md rounded-box bg-base-100">
                                <img class="object-cover w-full mb-2 rounded-lg" data-dz-thumbnail="" />
                                <div class="flex items-center justify-between mb-1 gap-x-3 whitespace-nowrap">
                                    <div class="w-10">
                                        <span class="text-base-content mb-0.5 text-sm">
                                            <span data-file-upload-progress-bar-value="">0</span>%</span>
                                    </div>
                                    <div class="flex items-center gap-x-2">
                                        <button type="button" class="btn btn-sm btn-circle btn-text"
                                            data-file-upload-remove="">
                                            <span class="icon-[tabler--trash] size-4 shrink-0"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="h-2 progress" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100" data-file-upload-progress-bar="">
                                    <div class="transition-all duration-500 progress-bar progress-primary file-upload-complete:progress-success"
                                        style="width: 0" data-file-upload-progress-bar-pane=""></div>
                                </div>
                            </div>
                        </template>

                        <div class="flex justify-center p-12 bg-white border-2 border-dashed cursor-pointer border-base-content/40 rounded-box"
                            data-file-upload-trigger="">
                            <div class="text-center">
                                <span
                                    class="inline-flex items-center justify-center text-white rounded-full bg-base-200/80 size-16">
                                    <span class="icon-[tabler--upload] size-6 shrink-0"></span>
                                </span>
                                <div class="flex flex-wrap justify-center mt-4">
                                    <span class="text-base font-medium text-hitam-800 pe-1">Letakkan file disini
                                        atau</span>
                                    <span class="font-semibold link link-animated link-primary">cari file</span>
                                </div>
                                <p class="mt-1 text-xs text-base-content/80">Pilih file maksimal 2MB.</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 gap-2 empty:gap-0 max-sm:grid-cols-2" data-file-upload-previews="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-soft btn-secondary"
                        data-overlay="#GantiFotoProfil">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
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

    <script src="/node_modules/lodash/lodash.js"></script>
    <script src="node_modules/dropzone/dist/dropzone-min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="../node_modules/flyonui/flyonui.js"></script>
    <script src="../node_modules/flyonui/dist/js/accordion.js"></script>
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
    </script>
</body>

</html>