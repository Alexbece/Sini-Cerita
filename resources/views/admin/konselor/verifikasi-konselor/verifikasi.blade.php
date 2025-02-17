@extends ('admin.layouts.layout')

@section('title', 'Verifikasi Konselor')

@section('breadcrumbs')
<div class="breadcrumbs">
    <ul>
        <li>
            <a href="" class="cursor-pointer text-hitam-800">Beranda</a>
        </li>
        <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
        <li>
            <p class="cursor-default text-hitam-800">Konselor</p>
        </li>
        <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
        <li>
            <a href="{{route('pendaftaran')}}" class="text-hitam-800">Pendaftaran</a>
        </li>
        <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
        <li aria-current="page" class="text-hitam-800">Verifikasi</li>
    </ul>
</div>
@endsection

@section('content')
<div class="flex flex-col justify-between gap-3 pb-8">
    <div class="grid gap-1 px-12 mb-7">
        <h1 class="text-4xl font-semibold text-hitam-800">Pendaftaran Konselor</h1>
        <p>Daftar konselor yang mendaftar ke website Sini Cerita</p>
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
                <div class="flex items-start gap-4">
                    <div class="grid gap-1 w-max">
                        <h5 class="mb-3 text-4xl font-semibold text-hitam-800">Biodata</h5>
                        <div class="flex items-center gap-2">
                            <div class="avatar">
                                <div class="rounded-md size-25">
                                    <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png" alt="avatar" />
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-xl font-semibold text-hitam-800">Dr. Wagiman S,Psi.</h3>
                                <p class="">Psikolog</p>
                            </div>
                        </div>
                        <div class="w-full divider"></div>
                        <div class="grid gap-2 place-items-start">
                            <div class="grid grid-cols-[150px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[wpf--name] text-gray-500 size-5"></span>
                                    <p class="text-sm font-medium text-gray-400">Nama Lengkap</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800 text-nowrap">Muhammad Wagiman Mahmudi
                                </p>
                            </div>
                            <div class="grid grid-cols-[150px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[mdi--address-marker] text-gray-500 size-5"></span>
                                    <p class="text-sm font-medium text-gray-400">Alamat</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800 text-nowrap">Kota Baru Kota Lama no.
                                    506</p>
                            </div>
                            <div class="grid grid-cols-[150px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[lets-icons--date-fill] text-gray-500 size-5"></span>
                                    <p class="text-sm font-medium text-gray-400">Tanggal Lahir</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800 text-nowrap">30 Februari 2000</p>
                            </div>
                            <div class="grid grid-cols-[150px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[ic--baseline-phone] text-gray-500 size-5"></span>
                                    <or class="text-sm font-medium text-gray-400">No. Telepon</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800 text-nowrap">08873459872</p>
                            </div>
                        </div>
                    </div>
                    <div class="divider divider-horizontal"></div>
                    <div class="flex flex-col w-full gap-2">
                        <h5 class="mb-3 text-xl font-semibold text-hitam-800">Identitas Kedokteran</h5>
                        <div class="grid w-full grid-cols-2 gap-y-5">
                            <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[hugeicons--face-id] text-gray-500 size-5"></span>
                                    <p class="text-sm font-medium text-gray-400">Nomor STR</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800">239847293748</p>
                            </div>
                            <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[vaadin--specialist] text-gray-500 size-5"></span>
                                    <p class="text-sm font-medium text-gray-400">Spesialis</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800">Psikolog</p>
                            </div>
                            <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[material-symbols--history-rounded] text-gray-500 size-5"></span>
                                    <p class="text-sm font-medium text-gray-400">Riwayat Lulus</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800">30 Februari 2000</p>
                            </div>
                            <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[uis--clinic-medical] text-gray-500 size-5"></span>
                                    <p class="text-sm font-medium text-gray-400">Klinik Sebelumnya</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800">RSJ. Dr Radjiman Wediodiningrat Lawang
                                </p>
                            </div>
                            <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[mingcute--time-duration-line] text-gray-500 size-5"></span>
                                    <p class="text-sm font-medium text-gray-400">Durasi Pengalaman</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800">50 Tahun</p>
                            </div>
                            <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[material-symbols--school] text-gray-500 size-5"></span>
                                    <p class="text-sm font-medium text-gray-400">Riwayat Sekolah</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800">Universitas Brawijaya</p>
                            </div>
                            <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[clarity--license-solid-badged] text-gray-500 size-5"></span>
                                    <p class="text-sm font-medium text-gray-400">Nomor Lisensi</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800">01283089127</p>
                            </div>
                            <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                <div class="flex items-center gap-1">
                                    <span class="icon-[icon-park-outline--association] text-gray-500 size-5"></span>
                                    <p class="text-sm font-medium text-gray-400">Asosiasi</p>
                                </div>
                                <p>:</p>
                                <p class="text-sm font-medium text-hitam-800">Agent Utang</p>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="flex flex-col w-full gap-2">
                            <h5 class="mb-3 text-xl font-semibold text-hitam-800">Dokumen Kedokteran</h5>
                            <div class="grid w-full grid-cols-2 gap-y-5">
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[icomoon-free--profile] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Foto Profil</p>
                                    </div>
                                    <p>:</p>
                                    <a href="{{ asset('client/img/sign_up.png') }}"
                                        class="p-2 text-sm font-medium underline border-2 rounded text-hitam-800 w-max">Foto
                                        Profil
                                    </a>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[hugeicons--identity-card] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Foto KTP</p>
                                    </div>
                                    <p>:</p>
                                    <a href="{{ asset('client/img/sign_up.png') }}"
                                        class="p-2 text-sm font-medium underline border-2 rounded text-hitam-800 w-max">Foto
                                        KTP
                                    </a>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[mdi--certificate-outline] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Sertifikat Profesi</p>
                                    </div>
                                    <p>:</p>
                                    <a href="{{ asset('client/img/sign_up.png') }}"
                                        class="p-2 text-sm font-medium underline border-2 rounded text-hitam-800 w-max">Foto
                                        Sertifikat
                                    </a>
                                </div>
                                <div class="grid grid-cols-[180px,10px,1fr] gap-3 place-content-center items-center">
                                    <div class="flex items-center gap-1">
                                        <span class="icon-[mdi--certificate-outline] text-gray-500 size-5"></span>
                                        <p class="text-sm font-medium text-gray-400">Sertifikat Pengalaman</p>
                                    </div>
                                    <p>:</p>
                                    <a href="{{ asset('client/img/sign_up.png') }}"
                                        class="p-2 text-sm font-medium underline border-2 rounded text-hitam-800 w-max">Sertifikat
                                        Pengalaman
                                    </a>
                                </div>
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
                        <button class="btn btn-accent w-max">Terima Pengajuan</button>
                        <button class="btn btn-error w-max">Tolak Pengajuan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection