@extends ('client.admin.layouts.admin ')

@section('title', 'Verifikasi Konselor')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <ul>
            <li>
                <p href="" class="cursor-pointer text-hitam-800">Beranda</p>
            </li>
            <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
            <li>
                <p class="cursor-default text-hitam-800">Konselor</p>
            </li>
            <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
            <li>
                <p href="" class="text-hitam-800">Pendaftaran</a>
            </li>
            <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
            <li aria-current="page" class="text-hitam-800">Verifikasi</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="flex flex-col justify-between gap-3 pb-8">
        <div class="grid gap-1 px-12 mb-7">
            <h1 class="text-4xl font-semibold text-hitam-800">Verifikasi Data Dokter</h1>
            <p>Proses memvalidasi data yang di daftarkan oleh Dokter</p>
        </div>
        <nav class="px-10 tabs tabs-bordered" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
            <button type="button" class="tab active-tab:tab-active active" id="tabs-basic-item-1" data-tab="#tabs-basic-1"
                aria-controls="tabs-basic-1" role="tab" aria-selected="true">
                Biodata
            </button>
            <button type="button" class="tab active-tab:tab-active" id="tabs-basic-item-2" data-tab="#tabs-basic-2"
                aria-controls="tabs-basic-2" role="tab" aria-selected="false">
                Verifikasi
            </button>
        </nav>
        <div class="w-full overflow-x-auto border-[1px] px-6 py-4">
            <div class="mt-3">
                <div id="tabs-basic-1" role="tabpanel" aria-labelledby="tabs-basic-item-1">
                    <div class="grid items-start gap-4">
                        <div class="flex flex-col w-full gap-2">
                            <h5 class="mb-3 text-4xl font-semibold text-hitam-800">Biodata</h5>
                            <div class="grid w-full grid-cols-2 gap-y-5">
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[wpf--name] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Nama Lengkap</p>
                                    </div>
                                    <p>:</p>
                                    <p class="text-sm font-medium text-hitam-800">{{ $dokter->nama_lengkap }}</p>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[clarity--date-line] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Tanggal Lahir</p>
                                    </div>
                                    <p>:</p>
                                    <p class="text-sm font-medium text-hitam-800">
                                        {{ \Carbon\Carbon::parse($dokter->tanggal_lahir)->translatedFormat('d F Y') }}
                                    </p>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[ph--gender-intersex] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Jenis Kelamin</p>
                                    </div>
                                    <p>:</p>
                                    <p class="text-sm font-medium text-hitam-800">{{ $dokter->jenis_kelamin }}</p>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[entypo--address] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Alamat Lengkap</p>
                                    </div>
                                    <p>:</p>
                                    <p class="text-sm font-medium text-hitam-800">{{ $dokter->alamat }}</p>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[mdi--email] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Email</p>
                                    </div>
                                    <p>:</p>
                                    <p class="text-sm font-medium text-hitam-800">{{ $dokter->email }}</p>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[ic--baseline-phone] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Nomor Telepon</p>
                                    </div>
                                    <p>:</p>
                                    <p class="text-sm font-medium text-hitam-800">{{ $dokter->no_telp }}</p>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[material-symbols--photo] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Foto Profil</p>
                                    </div>
                                    <p>:</p>
                                    <a href="{{ asset('storage/' . $dokter->foto_profil) }}"
                                        class="p-2 text-sm font-medium underline border-2 rounded text-hitam-800 w-max">Foto
                                        Profil
                                    </a>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[material-symbols--photo] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Foto Wajah</p>
                                    </div>
                                    <p>:</p>
                                    <a href="{{ asset('storage/' . $dokter->foto_wajah) }}"
                                        class="p-2 text-sm font-medium underline border-2 rounded text-hitam-800 w-max">Foto
                                        Wajah
                                    </a>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[material-symbols--photo] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Foto KTP</p>
                                    </div>
                                    <p>:</p>
                                    <a href="{{ asset('storage/' . $dokter->foto_ktp) }}"
                                        class="p-2 text-sm font-medium underline border-2 rounded text-hitam-800 w-max">Foto
                                        KTP
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="flex flex-col w-full gap-2">
                            <h5 class="mb-3 text-4xl font-semibold text-hitam-800">Dokumen Kedokteran</h5>
                            <div class="grid w-full grid-cols-2 gap-y-5">
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[teenyicons--id-outline] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Nomor STR</p>
                                    </div>
                                    <p>:</p>
                                    <p class="text-sm font-medium text-hitam-800">{{ $dokter->no_sippk }}</p>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[teenyicons--id-outline] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Nomor SIPPK</p>
                                    </div>
                                    <p>:</p>
                                    <p class="text-sm font-medium text-hitam-800">{{ $dokter->no_strpk }}</p>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[vaadin--specialist] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Jenis Ahli Kesehatan</p>
                                    </div>
                                    <p>:</p>
                                    <p class="text-sm font-medium text-hitam-800">{{ $dokter->jenis_dokter }}</p>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[material-symbols--photo] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Foto STRPK</p>
                                    </div>
                                    <p>:</p>
                                    <a href="{{ asset('storage/' . $dokter->foto_strpk) }}"
                                        class="p-2 text-sm font-medium underline border-2 rounded text-hitam-800 w-max">Foto
                                        STRPK
                                    </a>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[material-symbols--photo] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Foto SIPPK</p>
                                    </div>
                                    <p>:</p>
                                    <a href="{{ asset('storage/' . $dokter->foto_sippk) }}"
                                        class="p-2 text-sm font-medium underline border-2 rounded text-hitam-800 w-max">Foto
                                        SIPPK
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tabs-basic-2" class="hidden" role="tabpanel" aria-labelledby="tabs-basic-item-2">
                    <div class="grid gap-2 px-4">
                        <h5 class="text-3xl font-semibold text-hitam-800">Verifikasi Data</h5>
                        <p class="text-base-content/80">
                            Tindakan ini akan <span class="font-semibold text-base-content">memvalidasi</span> data yang di
                            daftarkan oleh Konselor kedalam website Sini Cerita. Juga akan memberi akses untuk Konselor bisa
                            menggunakan website Sini Cerita.
                        </p>
                        <div class="flex items-center gap-2">
                            <form action="{{ route('validasidokter.approve', $dokter->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-accent w-max">Terima Pengajuan</button>
                            </form>
                            <form action="{{ route('validasidokter.reject', $dokter->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-error w-max">Tolak Pengajuan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
