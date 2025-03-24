@extends('layouts.app')

@section('title')
    Profile {{ Auth::user()->nama_lengkap }}
@endsection


@section('app-content')
    <div>
        <div class="bg-white rounded-[20px] lg:flex grid overflow-hidden py-6 px-6 gap-8">
            <div class="grid h-full grid-cols-2 gap-4 lg:flex lg:flex-col border-hitam-100 w-max">
                <div
                    class="px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer bg-hitam-50 text-biru-6 w-max">
                    Profil Saya</div>
                <div
                    class="px-3 py-2 text-sm font-semibold duration-200 ease-out rounded-full cursor-pointer tran text-hitam-800 sition-all hover:text-biru-6 w-max">
                    Riwayat Konsultasi</div>
                <div class="hidden px-3 py-2 text-sm font-semibold transition-all duration-200 ease-out rounded-full cursor-pointer text-hitam-800 lg:block hover:text-biru-6 w-max"
                    id="modalkeluarButton">
                    Keluar</div>
                <div href="" id="deleteaccountButton"
                    class="hidden px-3 py-2 text-sm font-semibold text-red-500 transition-all duration-200 ease-out cursor-pointer lg:block hover:text-red-700 w-max">
                    Hapus Akun</div>
            </div>

            <div class="divider divider-horizontal"></div>

            <div class="flex flex-col justify-start w-full">
                <h3 class="text-4xl font-bold text-hitam-900">Profil Saya</h3>

                <div
                    class="flex items-center justify-between w-full gap-4 p-6 mt-4 border-2 h-max border-hitam-100 rounded-xl">
                    <div class="flex items-center gap-4">
                        <img class="object-cover object-top w-20 h-20 border-2 rounded-full shadow-lg border-biru-6"
                            src="{{ Str::startsWith(Auth::user()->foto_profil, ['http', 'https']) ? Auth::user()->foto_profil : asset('storage/' . Auth::user()->foto_profil) }}"
                            alt="">
                        <div class="flex flex-col">
                            <h4 class="text-xl font-semibold text-hitam-800">{{ Auth::user()->nama_lengkap }}</h4>
                            <p class="text-sm font-semibold text-hitam-400">
                                {{ Auth::user()->role_id == '1' ? 'Pengguna Sini Cerita' : Auth::user()->role_id }}</p>
                        </div>
                    </div>

                    <button
                        class="flex items-center gap-1 px-3 py-2 text-sm border-2 rounded-full shadow-lg editmodalButton h-max w-max text-hitam-600">Edit
                        <i class="transform translate-y-[1px] bx bx-pencil"></i></button>
                </div>

                <div
                    class="flex items-start justify-between w-full gap-4 p-6 mt-6 border-2 border-hitam-100 rounded-xl h-max">
                    <div class="flex flex-col w-full gap-4">
                        <h3 class="inline text-2xl font-bold text-hitam-900">Identitas Saya</h3>

                        <div class="grid lg:grid-cols-2 lg:w-[60%] w-full gap-6">
                            <div class="grid gap-4 text-left place-content-start">
                                <p class="text-sm font-semibold text-hitam-600/70">Nama Lengkap</p>
                                <p class="font-bold text-hitam-700">{{ Auth::user()->nama_lengkap }}</p>
                            </div>

                            <div class="grid gap-4 text-left place-content-start">
                                <p class="text-sm font-semibold text-hitam-600/70">Alamat Email</p>
                                <p class="font-bold text-hitam-700">{{ Auth::user()->email }}</p>
                            </div>

                            <div class="grid gap-4 text-left place-content-start">
                                <p class="text-sm font-semibold text-hitam-600/70">Nomor Telepon</p>
                                <p class="font-bold text-hitam-700">
                                    {{ Auth::user()->no_telp == '' ? '-' : Auth::user()->no_telp }}</p>
                            </div>

                            <div class="grid gap-4 text-left place-content-start">
                                <p class="text-sm font-semibold text-hitam-600/70">Peran</p>
                                <p class="font-bold text-hitam-700">
                                    {{ Auth::user()->role_id == '1' ? 'Pengguna Sini Cerita' : Auth::user()->role_id }}</p>
                            </div>
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
    </div>

    <!-- Edit Profil -->
    <div class="fixed inset-0 flex items-center justify-center hidden w-screen h-screen sign_out bg-hitam-800/40"
        id="editModal">
        <div class="flex flex-col items-center justify-center gap-4 p-4 bg-white rounded-lg h-max w-max">
            <div class="grid text-center place-items-center">
                <img src="{{ Str::startsWith(Auth::user()->foto_profil, ['http', 'https']) ? Auth::user()->foto_profil : asset('storage/' . Auth::user()->foto_profil) }}"
                    alt=""
                    class="object-cover object-top w-20 h-20 mb-4 border-2 rounded-full shadow-lg border-biru-6">
                <h4 class="text-2xl font-bold text-hitam-800">{{ Auth::user()->nama_lengkap }}</h4>
                <p class="text-sm font-light text-hitam-600">{{ Auth::user()->email }}</p>
            </div>
            <div class="divider"></div>
            <form action="{{ route('update-profil.user') }}" method="POST" enctype="multipart/form-data"
                class="grid grid-cols-1 gap-6 md:grid-cols-2">
                @csrf
                <div>
                    <label class="label label-text text-hitam-800" for="nama_lengkap">Nama Lengkap </label>
                    <input id="nama_lengkap" autocomplete="off" type="text" placeholder="Nama Lengkap"
                        class="bg-white input text-hitam-800" name="nama_lengkap"
                        value="{{ old('nama_lengkap', Auth::user()->nama_lengkap) }}" />
                    @error('nama_lengkap')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="label label-text text-hitam-800" for="email">Email</label>
                    <input id="email" autocomplete="off" type="text" placeholder="Email"
                        class="bg-white input text-hitam-800" name="email"
                        value="{{ old('email', Auth::user()->email) }}" />
                    @error('email')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="label label-text text-hitam-800" for="no_telp">Nomor Telepon</label>
                    <input id="no_telp" autocomplete="off" type="text" placeholder="Nomor Telepon"
                        class="bg-white input text-hitam-800" name="no_telp"
                        value="{{ old('no_telp', Auth::user()->no_telp) }}" />
                    @error('no_telp')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="label label-text text-hitam-800" for="userProfile">Foto Profil</label>
                    <input id="userProfile" type="file" name="foto_profil" accept=".jpg, .jpeg, .png"
                        class="bg-white input text-hitam-800"
                        value="{{ old('foto_profil', Auth::user()->foto_profil) }}" />
                    @error('no_telp')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end w-full gap-4 mt-4">
                    <button id="bataleditButton" class="px-4 py-2 rounded bg-hitam-50 text-biru-6">Batal</button>
                    <button class="px-4 py-2 text-white rounded bg-biru-6">Simpan</button>
                </div>
            </form>
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
                <form action="{{ route('logout-user') }}" method="POST">
                    @csrf
                    <button
                        class="px-4 py-2 text-lg font-semibold transition-all duration-200 rounded-full text-biru-6 bg-hitam-50 hover:bg-hitam-100">Keluar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Delete Akun -->
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
                <form action="{{ route('hapus-akun') }}">
                    @csrf
                    <button
                        class="px-4 py-2 font-semibold text-red-500 transition-all duration-200 rounded-full bg-hitam-50 hover:bg-hitam-100">Hapus
                        Akun</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
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
    </script>
@endsection
