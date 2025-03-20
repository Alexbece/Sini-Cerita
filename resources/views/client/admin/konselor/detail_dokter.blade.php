@extends ('client.admin.layouts.admin')

@section('title', 'Detail Konselor - Sini Cerita')

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
                <p href="" class="text-hitam-800">Daftar Konselor</p>
            </li>
            <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
            <li aria-current="page" class="text-hitam-800">Detail Konselor</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="flex flex-col justify-between gap-3 pb-8">
        <h1 class="px-10 text-4xl font-semibold mb-7 text-hitam-800">Detail Konselor</h1>
        <nav class="px-10 tabs tabs-bordered" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
            <button type="button" class="tab active-tab:tab-active active" id="tabs-basic-item-1" data-tab="#tabs-basic-1"
                aria-controls="tabs-basic-1" role="tab" aria-selected="true">
                Biodata
            </button>
            <button type="button" class="tab active-tab:tab-active" id="tabs-basic-item-2" data-tab="#tabs-basic-2"
                aria-controls="tabs-basic-2" role="tab" aria-selected="false">
                Jadwal Ketersediaan
            </button>
            <button type="button" class="tab active-tab:tab-active" id="tabs-basic-item-3" data-tab="#tabs-basic-3"
                aria-controls="tabs-basic-3" role="tab" aria-selected="false">
                Riwayat Konsultasi
            </button>
        </nav>

        <div class="mt-3">
            <div id="tabs-basic-1" role="tabpanel" aria-labelledby="tabs-basic-item-1">
                <div class="flex items-start w-full gap-4 py-4 px-4 border-y-[1px]">
                    <div class="grid items-start w-full gap-4">
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
            </div>

            <div id="tabs-basic-2" class="hidden" role="tabpanel" aria-labelledby="tabs-basic-item-2">
                <div class="flex items-start gap-4 py-4 px-4 border-y-[1px]">
                    <div class="grid w-full gap-1">
                        <h5 class="mb-3 text-4xl font-semibold text-hitam-800">Jadwal Ketersediaan</h5>
                        <div class="flex flex-col items-start justify-center w-full lg:flex-row">
                            <div class="grid w-full gap-3 p-3 rounded-xl border-[1px]">
                                <h5 class="text-2xl font-semibold text-hitam-800">Hari Ketersediaan</h5>
                                <div class="grid grid-cols-4 gap-2">
                                    <button class="rounded-full btn btn-soft btn-info">Senin</button>
                                    <button class="rounded-full btn btn-soft btn-info">Selasa</button>
                                    <button class="rounded-full btn btn-info">Rabu</button>
                                    <button class="rounded-full btn btn-info">Kamis</button>
                                    <button class="rounded-full btn btn-soft btn-info">Jumat</button>
                                    <button class="rounded-full btn btn-info">Sabtu</button>
                                    <button class="rounded-full btn btn-soft btn-info">Minggu</button>
                                </div>
                            </div>
                            <div class="hidden divider divider-horizontal lg:block"></div>
                            <div class="grid w-full gap-3 p-3 rounded-xl border-[1px]">
                                <h5 class="text-2xl font-semibold text-hitam-800">Jam Ketersediaan</h5>
                                <div class="grid grid-cols-4 gap-2">
                                    <button class="rounded-full btn btn-soft btn-info">00.00</button>
                                    <button class="rounded-full btn btn-soft btn-info">01.00</button>
                                    <button class="rounded-full btn btn-soft btn-info">02.00</button>
                                    <button class="rounded-full btn btn-info">03.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">04.00</button>
                                    <button class="rounded-full btn btn-info">05.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">06.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">07.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">08.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">09.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">10.00</button>
                                    <button class="rounded-full btn btn-info">11.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">12.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">13.00</button>
                                    <button class="rounded-full btn btn-info">14.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">15.00</button>
                                    <button class="rounded-full btn btn-info">16.00</button>
                                    <button class="rounded-full btn btn-info">17.00</button>
                                    <button class="rounded-full btn btn-info">18.00</button>
                                    <button class="rounded-full btn btn-info">19.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">20.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">21.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">22.00</button>
                                    <button class="rounded-full btn btn-info">23.00</button>
                                    <button class="rounded-full btn-soft btn btn-info">24.00</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tabs-basic-3" class="hidden" role="tabpanel" aria-labelledby="tabs-basic-item-3">
                <div class="flex items-start gap-4 py-4 px-4 border-y-[1px]">
                    <div class="grid w-full gap-1">
                        <h5 class="px-10 mb-3 text-4xl font-semibold text-hitam-800">Riwayat Konsultasi</h5>
                        <div class="w-full px-12">
                            <div class="w-full overflow-x-auto rounded-lg border-[1px]">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Pasien</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap">Dr. John Doe S,Psi</td>
                                            <td class="text-nowrap">26 Maret 2007</td>
                                            <td>21.00 WIB</td>
                                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                                            <td>
                                                <a href="#"
                                                    class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                                    Rincian Chat</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">Dr. Jane Smith S,Psi</td>
                                            <td class="text-nowrap">26 Maret 2007</td>
                                            <td>21.00 WIB</td>
                                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                                            <td>
                                                <button
                                                    class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                                    Rincian Chat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">Dr. Alice Johnso S,Psi </td>
                                            <td class="text-nowrap">26 Maret 2007</td>
                                            <td>21.00 WIB</td>
                                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                                            <td>
                                                <button
                                                    class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                                    Rincian Chat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                                            <td class="text-nowrap">26 Maret 2007</td>
                                            <td>21.00 WIB</td>
                                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                                            <td>
                                                <button
                                                    class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                                    Rincian Chat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                                            <td class="text-nowrap">26 Maret 2007</td>
                                            <td>21.00 WIB</td>
                                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                                            <td>
                                                <button
                                                    class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                                    Rincian Chat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                                            <td class="text-nowrap">26 Maret 2007</td>
                                            <td>21.00 WIB</td>
                                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                                            <td>
                                                <button
                                                    class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                                    Rincian Chat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                                            <td class="text-nowrap">26 Maret 2007</td>
                                            <td>21.00 WIB</td>
                                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                                            <td>
                                                <button
                                                    class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                                    Rincian Chat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                                            <td class="text-nowrap">26 Maret 2007</td>
                                            <td>21.00 WIB</td>
                                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                                            <td>
                                                <button
                                                    class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                                    Rincian Chat</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                                            <td class="text-nowrap">26 Maret 2007</td>
                                            <td>21.00 WIB</td>
                                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                                            <td>
                                                <button
                                                    class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                                    Rincian Chat</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <nav class="flex items-center px-12 gap-x-1">
                            <button type="button" class="btn btn-text">Previous</button>
                            <div class="flex items-center gap-x-1">
                                <button type="button"
                                    class="btn btn-text btn-square aria-[current='page']:text-bg-primary">1</button>
                                <button type="button"
                                    class="btn btn-text btn-square aria-[current='page']:text-bg-primary"
                                    aria-current="page"> 2 </button>
                                <button type="button"
                                    class="btn btn-text btn-square aria-[current='page']:text-bg-primary">3</button>
                            </div>
                            <button type="button" class="btn btn-text">Next</button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
