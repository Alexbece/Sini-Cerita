@extends('layouts.app')

@section('title', 'Detail Konselor - Sini Cerita')

@section('section-content', 'py-0 px-24')
@section('app-content')
    <section class="container-profil px-4 py-4 w-full h-max bg-white rounded-[20px] grid gap-2">
        <div class="grid w-full gap-2 h-max">
            <div class="w-full relative h-[300px] rounded-xl">
                <div class="w-full h-52 bg-biru-6 rounded-xl"></div>
                <div class="absolute flex justify-center w-full -mt-20">
                    <img src="{{ asset('storage/' . $dokter->foto_profil) }}"
                        class="rounded-full absolute border-white border-[5px] object-cover w-44 h-44" alt="">
                </div>
            </div>
            <div class="flex flex-col items-center w-full">
                @php
                    $gelar = $dokter->jenis_dokter === 'Psikolog' ? 'S, Psi' : ' Sp,Kj';
                @endphp
                <p class="text-2xl font-semibold text-hitam-800">dr. {{ $dokter->nama_lengkap }} {{ $gelar }}</p>
                <p class="text-lg text-hitam-800">{{ $dokter->jenis_dokter }}</p>
            </div>
            <nav class="w-full p-1 space-x-1 overflow-x-auto bg-gray-100 tabs rounded-xl rounded-field" aria-label="Tabs"
                role="tablist" aria-orientation="horizontal">
                <button type="button"
                    class="btn btn-text text-hitam-600 active-tab:bg-biru-6 active-tab:text-white hover:text-biru-6 active hover:bg-transparent"
                    id="tabs-segment-item-1" data-tab="#tabs-segment-1" aria-controls="tabs-segment-1" role="tab"
                    aria-selected="true">
                    Biodata
                </button>
                <button type="button"
                    class="btn btn-text text-hitam-600 active-tab:bg-biru-6 active-tab:text-white hover:text-biru-6 hover:bg-transparent"
                    id="tabs-segment-item-2" data-tab="#tabs-segment-2" aria-controls="tabs-segment-2" role="tab"
                    aria-selected="false">
                    Rating & Ulasan
                </button>
                <button type="button"
                    class="btn btn-text text-hitam-600 active-tab:bg-biru-6 active-tab:text-white hover:text-biru-6 hover:bg-transparent"
                    id="tabs-segment-item-3" data-tab="#tabs-segment-3" aria-controls="tabs-segment-3" role="tab"
                    aria-selected="false">
                    Lanjut Konsultasi
                </button>
            </nav>
        </div>

        <div class="mt-3">
            <div id="tabs-segment-1" role="tabpanel" aria-labelledby="tabs-segment-item-1">
                <div class="grid w-full grid-cols-4 gap-6 p-5 bg-biru-1/50 place-content-center rounded-xl">
                    <div class="grid gap-1 place-items-start">
                        <h4 class="text-sm text-semibold text-hitam-600">NAMA LENGKAP</h4>
                        <p class="text-lg font-bold text-hitam-800">{{ $dokter->nama_lengkap }}</p>
                    </div>
                    <div class="grid gap-1 place-items-start">
                        <h4 class="text-sm text-semibold text-hitam-600">JENIS DOKTER JIWA</h4>
                        <p class="text-lg font-bold text-hitam-800">{{ $dokter->jenis_dokter }}</p>
                    </div>
                    <div class="grid gap-1 place-items-start">
                        <h4 class="text-sm text-semibold text-hitam-600">NO. STRPK</h4>
                        <p class="text-lg font-bold text-hitam-800">{{ $dokter->no_strpk }}</p>
                    </div>
                    <div class="grid gap-1 place-items-start">
                        <h4 class="text-sm text-semibold text-hitam-600">NO. SIPPK</h4>
                        <p class="text-lg font-bold text-hitam-800">{{ $dokter->no_sippk }}</p>
                    </div>
                    <div class="grid gap-1 place-items-start">
                        <h4 class="text-sm text-semibold text-hitam-600">JENIS KELAMIN</h4>
                        <p class="text-lg font-bold text-hitam-800">{{ $dokter->jenis_kelamin }}</p>
                    </div>
                    <div class="grid gap-1 place-items-start">
                        <h4 class="text-sm text-semibold text-hitam-600">HARGA LAYANAN</h4>
                        <p class="text-lg font-bold text-hitam-800">Rp.
                            {{ number_format($dokter->harga_layanan, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
            <div id="tabs-segment-2" class="hidden" role="tabpanel" aria-labelledby="tabs-segment-item-2">
                <div class="grid gap-4">
                    <h5 class="text-3xl font-semibold text-hitam-800">Nilai & Ulasan</h5>
                    <div class="flex items-start w-full gap-4">
                        <div class="bg-transparent border card sm:max-w-sm">
                            <div class="card-body w-[400px]">
                                <h4 class="mb-3 text-4xl font-semibold text-hitam-800">Nilai</h4>
                                <h5 class="flex items-center gap-3 mb-8 text-4xl card-title text-hitam-800 "><span
                                        class="icon-[mdi--like]"></span>50%</h5>
                                <div class="grid gap-4">
                                    <div class="grid w-full gap-1">
                                        <div class="w-full">
                                            <div class="flex items-end justify-between mb-1">
                                                <p class="flex items-center gap-2 font-medium text-hitam-800"><span
                                                        class=" text-lg icon-[mdi--like]"></span>Like</p>
                                                <span class="font-medium text-hitam-800">50%</span>
                                            </div>
                                            <div class="progress bg-hitam-100/80" role="progressbar"
                                                aria-label="50% Progressbar" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100">
                                                <div class="w-1/2 progress-bar bg-biru-6"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full bg-transparent border card">
                            <div class="grid w-full gap-6 card-body">
                                <h4 class="mb-3 text-4xl font-semibold text-hitam-800">Ulasan</h4>
                                <div class="grid w-full grid-cols-2 gap-3">
                                    <div class="bg-transparent border card sm:max-w-sm">
                                        <div class="grid gap-3 card-body">
                                            <div class="flex items-center gap-2">
                                                <div class="avatar">
                                                    <div class="rounded-full size-12">
                                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png"
                                                            alt="avatar" />
                                                    </div>
                                                </div>
                                                <div class="grid">
                                                    <h5 class="text-xl card-title text-hitam-800">Mamen Mahmudi</h5>
                                                    <p class="text-sm text-hitam-400">Pengguna Sini Cerita</p>
                                                </div>
                                            </div>
                                            <p class="mb-4 text-sm text-hitam-600">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Veritatis consectetur voluptatem architecto facilis perferendis nulla enim
                                                eum
                                                at,
                                                quisquam accusamus?</p>
                                            <div class="card-actions">
                                                <button href="#" type="button"
                                                    class="no-underline link text-biru-6" aria-expanded="false"
                                                    aria-controls="middle-center-modal"
                                                    data-overlay="#BacaUlasanLengkap">Baca Selengkapnya</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-transparent border card sm:max-w-sm">
                                        <div class="grid gap-3 card-body">
                                            <div class="flex items-center gap-2">
                                                <div class="avatar">
                                                    <div class="rounded-full size-12">
                                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png"
                                                            alt="avatar" />
                                                    </div>
                                                </div>
                                                <div class="grid">
                                                    <h5 class="text-xl card-title text-hitam-800">Mamen Mahmudi</h5>
                                                    <p class="text-sm text-hitam-400">Pengguna Sini Cerita</p>
                                                </div>
                                            </div>
                                            <p class="mb-4 text-sm text-hitam-600">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Veritatis consectetur voluptatem architecto facilis perferendis nulla enim
                                                eum
                                                at,
                                                quisquam accusamus?</p>
                                            <div class="card-actions">
                                                <a href="#" class="no-underline link text-biru-6">Baca
                                                    Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-transparent border card sm:max-w-sm">
                                        <div class="grid gap-3 card-body">
                                            <div class="flex items-center gap-2">
                                                <div class="avatar">
                                                    <div class="rounded-full size-12">
                                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png"
                                                            alt="avatar" />
                                                    </div>
                                                </div>
                                                <div class="grid">
                                                    <h5 class="text-xl card-title text-hitam-800">Mamen Mahmudi</h5>
                                                    <p class="text-sm text-hitam-400">Pengguna Sini Cerita</p>
                                                </div>
                                            </div>
                                            <p class="mb-4 text-sm text-hitam-600">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Veritatis consectetur voluptatem architecto facilis perferendis nulla enim
                                                eum
                                                at,
                                                quisquam accusamus?</p>
                                            <div class="card-actions">
                                                <a href="#" class="no-underline link text-biru-6">Baca
                                                    Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-transparent border card sm:max-w-sm">
                                        <div class="grid gap-3 card-body">
                                            <div class="flex items-center gap-2">
                                                <div class="avatar">
                                                    <div class="rounded-full size-12">
                                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png"
                                                            alt="avatar" />
                                                    </div>
                                                </div>
                                                <div class="grid">
                                                    <h5 class="text-xl card-title text-hitam-800">Mamen Mahmudi</h5>
                                                    <p class="text-sm text-hitam-400">Pengguna Sini Cerita</p>
                                                </div>
                                            </div>
                                            <p class="mb-4 text-sm text-hitam-600">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Veritatis consectetur voluptatem architecto facilis perferendis nulla enim
                                                eum
                                                at,
                                                quisquam accusamus?</p>
                                            <div class="card-actions">
                                                <a href="#" class="no-underline link text-biru-6">Baca
                                                    Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-transparent border card sm:max-w-sm">
                                        <div class="grid gap-3 card-body">
                                            <div class="flex items-center gap-2">
                                                <div class="avatar">
                                                    <div class="rounded-full size-12">
                                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png"
                                                            alt="avatar" />
                                                    </div>
                                                </div>
                                                <div class="grid">
                                                    <h5 class="text-xl card-title text-hitam-800">Mamen Mahmudi</h5>
                                                    <p class="text-sm text-hitam-400">Pengguna Sini Cerita</p>
                                                </div>
                                            </div>
                                            <p class="mb-4 text-sm text-hitam-600">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Veritatis consectetur voluptatem architecto facilis perferendis nulla enim
                                                eum
                                                at,
                                                quisquam accusamus?</p>
                                            <div class="card-actions">
                                                <a href="#" class="no-underline link text-biru-6">Baca
                                                    Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="flex items-center justify-center w-full h-10 -space-x-px text-base">
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center h-10 px-4 leading-tight text-white border ms-0 border-e-0 rounded-s-lg border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">
                                            <span class="sr-only">Previous</span>
                                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page"
                                            class="z-10 flex items-center justify-center h-10 px-4 leading-tight bg-white border text-biru-6 border-biru-6">1</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">2</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">3</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">4</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">5</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6 rounded-e-lg">
                                            <span class="sr-only">Next</span>
                                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tabs-segment-3" class="hidden" role="tabpanel" aria-labelledby="tabs-segment-item-3">
                @php
                    $gelar = $dokter->jenis_dokter === 'Psikolog' ? 'S,Psi' : ' Sp,Kj';
                @endphp
                <div class="grid gap-3">
                    <p class="text-lg text-hitam-800">
                        Silakan klik tombol 'Lanjut Konsultasi' untuk memulai sesi konsultasi kesehatan mental dengan dokter
                        <span class="text-lg font-bold">{{ $dokter->nama_lengkap }} {{ $gelar }}</span> yang siap membantu Anda.
                    </p>
                    <button class="justify-center btn btn-primary size-5 w-max">
                        Lanjut Konsultasi
                    </button>
                </div>
            </div>
        </div>

    </section>

    <!-- Modal Baca Ulasan Lengkap -->
    <div id="BacaUlasanLengkap" class="hidden overlay modal overlay-open:opacity-100 modal-middle" role="dialog"
        tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100">
            <div class="bg-white modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-hitam-800">Ulasan Lengkap</h3>
                    <button type="button" class="absolute btn btn-text btn-circle btn-sm end-3 top-3" aria-label="Close"
                        data-overlay="#BacaUlasanLengkap">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="grid gap-3 card-body">
                        <div class="flex items-center gap-2">
                            <div class="avatar">
                                <div class="rounded-full size-12">
                                    <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png" alt="avatar" />
                                </div>
                            </div>
                            <div class="grid">
                                <h5 class="text-xl card-title text-hitam-800">Mamen Mahmudi</h5>
                                <p class="text-sm text-hitam-400">Pengguna Sini Cerita</p>
                            </div>
                        </div>
                        <p class="mb-4 text-sm text-hitam-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sit quo exercitationem quas, dolore vitae animi doloribus fuga veniam ipsum. Obcaecati,
                            explicabo! Libero voluptas molestias adipisci saepe corporis aperiam repudiandae quo. Est
                            voluptate, quisquam nesciunt minima nisi dolorem magnam ipsum impedit vel officiis. Ipsam
                            odit quae est sequi dolor corrupti, sapiente ullam voluptatibus voluptatum exercitationem
                            aliquam officia modi dolorum officiis laudantium cumque incidunt, saepe quod praesentium
                            reiciendis et at doloremque quasi ex? Repellendus odit eos, ut magnam pariatur labore.
                            Harum, suscipit!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
