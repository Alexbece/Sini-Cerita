@extends('layouts.app')

@section('title', 'Detail Konselor - Sini Cerita')

@section('app-content')
    <section class="container-profil px-4 py-4 w-full h-max bg-white rounded-[20px] grid gap-2">
        <div class="grid w-full gap-4 lg:flex h-max">
            <div class="flex gap-4 lg:w-[500px] w-full place-items-center bg-hitam-50 rounded-xl p-4">
                <img src="{{ asset('client/img/foto_dokter/foto_doctor_1.jpg') }}" alt=""
                    class="rounded-lg object-center object-cover w-110px] h-[150px] border-2 top-0 p-1 border-biru-6">
                <div>
                    <h1 class="text-xl font-semibold text-hitam-900">Dr. Peri S,Psi.</h1>
                    <p class="text-hitam-500">Psikiater</p>
                    <div class="flex items-center gap-2 px-2 py-1 mt-2 text-white rounded-lg h-max w-max bg-biru-6">
                        <i class=" bx bx-like"></i>
                        <p class="">100%</p>
                    </div>
                </div>
            </div>

            <div class="grid w-full gap-3 p-4 bg-hitam-50 rounded-xl">
                <div class="grid grid-cols-3">
                    <p class="text-hitam-800">Nama lengkap</p>
                    <p class="text-hitam-800">Achmad Ferry Setiawan</p>
                </div>
                <div class="grid grid-cols-3">
                    <p class="text-hitam-800">Nomor STR</p>
                    <p class="text-hitam-800">01298409123</p>
                </div>
                <div class="grid grid-cols-3">
                    <p class="text-hitam-800">Spesialis</p>
                    <p class="text-hitam-800">Psikolog</p>
                </div>
                <div class="grid grid-cols-3">
                    <p class="text-hitam-800">Pengalaman</p>
                    <p class="text-hitam-800">18 Tahun</p>
                </div>
                <div class="grid grid-cols-3">
                    <p class="text-hitam-800">Harga layanan</p>
                    <p class="text-hitam-800">Rp 75.000 / Jam</p>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <div class="grid items-center w-full gap-8 pb-3 lg:items-start lg:flex">
            <div class="grid w-full gap-6 place-items-start">
                <h2 class="px-3 text-lg font-bold text-hitam-900">Hari ketersediaan dokter / minggu</h2>
                <div class="grid grid-cols-2 gap-3 2xl:grid-cols-4 xl:grid-cols-3 place-items-center">
                    <button class="px-3 py-1 text-lg rounded-full text-hitam-600 bg-hitam-50 h-max w-max">Senin</button>
                    <button class="px-3 py-1 text-lg text-white rounded-full bg-biru-6 h-max w-max">Selasa</button>
                    <button class="px-3 py-1 text-lg rounded-full text-hitam-600 bg-hitam-50 h-max w-max">Rabu</button>
                    <button class="px-3 py-1 text-lg rounded-full text-hitam-600 bg-hitam-50 h-max w-max">Kamis</button>
                    <button class="px-3 py-1 text-lg rounded-full bg-hitam-50 text-biru-6 h-max w-max">Jumat</button>
                    <button class="px-3 py-1 text-lg rounded-full text-hitam-600 bg-hitam-50 h-max w-max">Sabtu</button>
                    <button class="px-3 py-1 text-lg rounded-full bg-hitam-50 text-biru-6 h-max w-max">Minggu</button>
                </div>
            </div>

            <div class="w-[1.5px] h-full bg-hitam-100 hidden lg:flex"></div>

            <div class="grid w-full gap-6 place-items-start">
                <h2 class="px-3 text-lg font-bold text-hitam-900">Jam ketersediaan dokter</h2>
                <div class="grid grid-cols-3 gap-3 place-items-center">
                    <button class="px-3 py-1 text-lg text-white rounded-full bg-biru-6 h-max w-max">07.00</button>
                    <button class="px-3 py-1 text-lg rounded-full bg-hitam-50 text-biru-6 h-max w-max">13.00</button>
                    <button class="px-3 py-1 text-lg rounded-full bg-hitam-50 text-biru-6 h-max w-max">15.00</button>
                </div>
            </div>

            <div class="w-[1.5px] h-full bg-hitam-100 hidden lg:flex"></div>

            <div class="flex items-center justify-center w-full h-full">
                <button class="w-full p-3 font-semibold text-white rounded-xl bg-biru-6 h-max">Lanjut
                    konsultasi</button>
            </div>
        </div>

        <div class="divider"></div>

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
                                    <div class="progress bg-hitam-100/80" role="progressbar" aria-label="50% Progressbar"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
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
                                        Veritatis consectetur voluptatem architecto facilis perferendis nulla enim eum
                                        at,
                                        quisquam accusamus?</p>
                                    <div class="card-actions">
                                        <button href="#" type="button" class="no-underline link text-biru-6"
                                            aria-expanded="false" aria-controls="middle-center-modal"
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
                                        Veritatis consectetur voluptatem architecto facilis perferendis nulla enim eum
                                        at,
                                        quisquam accusamus?</p>
                                    <div class="card-actions">
                                        <a href="#" class="no-underline link text-biru-6">Baca Selengkapnya</a>
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
                                        Veritatis consectetur voluptatem architecto facilis perferendis nulla enim eum
                                        at,
                                        quisquam accusamus?</p>
                                    <div class="card-actions">
                                        <a href="#" class="no-underline link text-biru-6">Baca Selengkapnya</a>
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
                                        Veritatis consectetur voluptatem architecto facilis perferendis nulla enim eum
                                        at,
                                        quisquam accusamus?</p>
                                    <div class="card-actions">
                                        <a href="#" class="no-underline link text-biru-6">Baca Selengkapnya</a>
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
                                        Veritatis consectetur voluptatem architecto facilis perferendis nulla enim eum
                                        at,
                                        quisquam accusamus?</p>
                                    <div class="card-actions">
                                        <a href="#" class="no-underline link text-biru-6">Baca Selengkapnya</a>
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
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
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
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
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
                    <button type="button" class="absolute btn btn-text btn-circle btn-sm end-3 top-3"
                        aria-label="Close" data-overlay="#BacaUlasanLengkap">
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
