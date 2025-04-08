@extends('client.dokter.layout')

@section('title', 'Profil Dokter')

@section('stat-card', 'hidden')

@section('dokter-content')
    {{-- HEADER CONTENT --}}
    <div class="flex items-center gap-4 mb-4">
        <h1 class="text-3xl font-bold text-hitam-800">Profil Dokter</h1>
        <button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="update-profil"
            data-overlay="#update-profil"> Edit Profil </button>
    </div>
    <div class="w-full p-6 border rounded-lg h-max">
        <div class="grid gap-4">
            <h2 class="text-2xl font-semibold text-hitam-800">Foto Profil</h2>
            <div class="flex items-center gap-6 mb-7">
                <a href="#" class="overflow-hidden rounded-full size-25 ">
                    <img src="{{ asset('storage/' . $dokter->foto_profil) }}" alt="" class="object-cover">
                </a>
                <div class="flex items-center">
                    <label class="text-base font-medium text-white rouded-xl btn btn-info font-jkt"
                        for="update_foto-profil">Update
                        Foto
                        Profil</label>
                    <input id="update_foto-profil" type="file" class="hidden max-w-sm input input-xs" />
                </div>
            </div>
            <h2 class="text-2xl font-semibold text-hitam-800">Biodata</h2>
            <div class="grid w-full grid-cols-2 gap-y-5">
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Nama Lengkap</p>
                    <p class="font-bold text-hitam-800">{{ $dokter->nama_lengkap }}</p>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Tanggal Lahir</p>
                    <p class="font-bold text-hitam-800">{{ $dokter->tanggal_lahir }}</p>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Alamat</p>
                    <p class="font-bold text-hitam-800">{{ $dokter->alamat }}</p>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Email</p>
                    <p class="font-bold text-hitam-800">{{ $dokter->email }}</p>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Jenis Kelamin</p>
                    <p class="font-bold text-hitam-800">{{ $dokter->jenis_kelamin }}</p>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Nomor Telepon</p>
                    <p class="font-bold text-hitam-800">{{ $dokter->no_telp }}</p>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Foto Wajah</p>
                    <a href="{{ asset('storage/' . $dokter->foto_wajah) }}"
                        class="font-bold underline w-max text-hitam-800">Foto
                        Wajah</a>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Foto KTP</p>
                    <a href="{{ asset('storage/' . $dokter->foto_ktp) }}"
                        class="font-bold underline w-max text-hitam-800">Foto
                        KTP</a>
                </div>
            </div>
            <div class="divider"></div>
            <h2 class="text-2xl font-semibold text-hitam-800">Informasi Kedokteran</h2>
            <div class="grid w-full grid-cols-2 gap-y-5">
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Foto STRPK</p>
                    <a href="{{ asset('storage/' . $dokter->foto_strpk) }}"
                        class="font-bold underline w-max text-hitam-800">Foto STRPK</a>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Foto SIPPK</p>
                    <a href="{{ asset('storage/' . $dokter->foto_sippk) }}"
                        class="font-bold underline w-max text-hitam-800">Foto SIPPK</a>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Nomor STRPK</p>
                    <p class="font-bold text-hitam-800">{{ $dokter->no_strpk }}</p>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Nomor SIPPK</p>
                    <p class="font-bold text-hitam-800">{{ $dokter->no_sippk }}</p>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Foto Ijazah</p>
                    <a href="{{ asset('storage/' . $dokter->foto_sippk) }}"
                        class="font-bold underline w-max text-hitam-800">Foto Ijazah</a>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Jenis Dokter</p>
                    <p class="font-bold text-hitam-800">{{ $dokter->jenis_dokter }}</p>
                </div>
                <div class="grid gap-2">
                    <p class="font-light text-hitam-500">Harga Layanan</p>
                    <p class="font-bold text-hitam-800">{{ number_format($dokter->harga_layanan, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL UPDATE PROFIL --}}
    <div id="update-profil" class="hidden overlay modal overlay-open:opacity-100 overlay-open:duration-300 modal-middle"
        role="dialog" tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100 h-max overlay-open:duration-300">
            <div class="bg-white modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-hitam-800">Edit Profil</h3>
                    <button type="button" class="absolute btn btn-text btn-circle btn-sm end-3 top-3" aria-label="Close"
                        data-overlay="#update-profil">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="label-text text-hitam-800" for="nama_lengkap">Nama Lengkap </label>
                            <input id="nama_lengkap" type="text"
                                placeholder="{{ old('nama_lengkap', $dokter->nama_lengkap) }}" class="bg-white input text-hitam-800" />
                        </div>
                        <div>
                            <label class="label-text text-hitam-800" for="alamat">Alamat </label>
                            <input id="alamat" type="text" placeholder="{{ old('alamat', $dokter->alamat) }}"
                                class="bg-white input text-hitam-800" />
                        </div>
                        <div>
                            <label class="label-text text-hitam-800" for="email">Email </label>
                            <input id="email" type="email" placeholder="{{ old('email', $dokter->email) }}"
                                class="bg-white input text-hitam-800" />
                        </div>
                        <div>
                            <label class="label-text text-hitam-800" for="no_telp">No. Telp </label>
                            <input id="no_telp" type="text" placeholder="{{ old('no_telp', $dokter->no_telp) }}"
                                class="bg-white input text-hitam-800" />
                        </div>
                        <div>
                            <label class="label-text text-hitam-800" for="foto_profil">Foto Profil</label>
                            <input id="foto_profil" type="file" class="bg-white input text-hitam-800" />
                        </div>
                        <div>
                            <label class="label-text text-hitam-800" for="foto_wajah">Foto Wajah</label>
                            <input id="foto_wajah" type="file" class="bg-white input text-hitam-800" />
                        </div>
                        <div>
                            <label class="label-text text-hitam-800" for="harga_layanan">Harga Layanan </label>
                            <input id="harga_layanan" type="text"
                                placeholder="Rp {{ number_format(old('harga_layanan', $dokter->harga_layanan), 0, ',', '.') }}"
                                class="bg-white input text-hitam-800" />
                        </div>
                        <div>
                            <div class="label-text text-hitam-800">Jenis Kelamin</div>
                            <div class="flex items-center h-full gap-3">
                                <div class="flex items-center gap-2">
                                    <input type="radio" id="Pria" name="radio-0" class="radio radio-primary"
                                     />
                                    <label class="text-base label-text text-hitam-800" for="Pria">Pria</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="radio" id="Wanita" name="radio-0" class="radio radio-primary"
                                     />
                                    <label class="text-base label-text text-hitam-800" for="Wanita">Wanita</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-soft btn-secondary"
                        data-overlay="#update-profil">Batal</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- END MODAL UPDATE PROFIL --}}
@endsection
