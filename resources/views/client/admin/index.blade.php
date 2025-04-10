@extends('client.admin.layouts.admin')

@section('content')
    <div class="px-12">
        <h1 class="pb-8 text-hitam-800 text-4xl font-semibold">Dashboard Admin</h1>
        {{-- STATISTIC CARDS --}}
        <div class="@yield('stat-card', 'flex w-full justify-between gap-3 mb-8')">
            <div class="p-4 w-full rounded-lg shadow-xs overflow-hidden bg-white border shadow-md">
                <div class=" flex items-center">
                    <div class="p-3 rounded-full text-white bg-success mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M14.84 16.26C17.86 16.83 20 18.29 20 20v2H4v-2c0-1.71 2.14-3.17 5.16-3.74L12 21zM8 8h8v2a4 4 0 0 1-4 4a4 4 0 0 1-4-4zm0-1l.41-4.1a1 1 0 0 1 1-.9h5.19c.51 0 .94.39.99.9L16 7zm4-4h-1v1h-1v1h1v1h1V5h1V4h-1z" />
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600">
                            Total User
                        </p>
                        <p class="text-3xl font-semibold text-biru-6">
                            80
                        </p>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="/list-user" class="text-sm text-biru-5">Ubah Status</a>
                </div>
            </div>
            <div class="p-4 w-full rounded-lg shadow-xs overflow-hidden bg-white border shadow-md">
                <div class=" flex items-center">
                    <div class="p-3 rounded-full text-green-500 dark:text-green-100 bg-green-100 dark:bg-green-500 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600">
                            Total Dokter
                        </p>
                        <p class="text-3xl font-semibold text-biru-6">
                            80
                        </p>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="#" class="text-sm text-biru-5">Tarik Saldo</a>
                </div>
            </div>
        </div>
        {{-- END STATISTIC CARDS --}}

        <div class="flex w-full items-center gap-3">
            {{-- DATA DAFTAR DOKTER --}}
            <div class="border-base-content/25 h-full w-full rounded-lg overflow-x-auto border">
                <div class="w-full flex justify-between items-center px-5 py-3 border-b">
                    <h1 class="font-semibold text-lg">Daftar Dokter</h1>
                    <a href="/riwayat-konsultasi-dokter" class="text-sm font-medium text-biru-5">Lihat Semua</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                            <td>
                                <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                                    aria-label="Action button"><span
                                        class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>

                            <td>
                                <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                                    aria-label="Action button"><span
                                        class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Alice Johnson</td>
                            <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>

                            <td>
                                <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                                    aria-label="Action button"><span
                                        class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Bob Brown</td>
                            <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>

                            <td>
                                <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                                    aria-label="Action button"><span
                                        class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- END DATA DAFTAR DOKTER --}}
            {{-- DATA DAFTAR USER --}}
            <div class="border-base-content/25 h-full w-full rounded-lg overflow-x-auto border">
                <div class="w-full flex justify-between items-center px-5 py-3 border-b">
                    <h1 class="font-semibold text-lg">Daftar User</h1>
                    <a href="/riwayat-konsultasi-dokter" class="text-sm font-medium text-biru-5">Lihat Semua</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                            <td>
                                <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                                    aria-label="Action button"><span
                                        class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>

                            <td>
                                <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                                    aria-label="Action button"><span
                                        class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Alice Johnson</td>
                            <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>

                            <td>
                                <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                                    aria-label="Action button"><span
                                        class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Bob Brown</td>
                            <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>

                            <td>
                                <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                                    aria-label="Action button"><span
                                        class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- END DATA DAFTAR USER --}}
        </div>
    </div>
@endsection
