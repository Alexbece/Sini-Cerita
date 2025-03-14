@extends('client.admin.layouts.admin') {{-- Gunakan layout utama --}}

@section('title', 'Daftar Konselor - Sini Cerita') {{-- Ganti title --}}

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
            <li aria-current="page" class="text-hitam-800">Daftar Konselor</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="flex flex-col justify-between gap-3 pb-8">
        <h1 class="px-12 text-4xl font-semibold mb-7 text-hitam-800">Daftar Konselor</h1>
        <div class="px-12">
            <div class="w-full overflow-x-auto rounded-lg border-[1px]">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Spesialis</th>
                            <th>Nomor STR</th>
                            <th>Jumlah Saldo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-nowrap">Dr. John Doe S,Psi</td>
                            <td><span class="text-xs badge badge-soft badge-success">Psikolog</span></td>
                            <td>023480923</td>
                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                            <td>
                                <a href="{{ route('detail-dokter') }}"
                                    class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat Detail</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">Dr. Jane Smith S,Psi</td>
                            <td><span class="text-xs badge badge-soft badge-primary">Psikiater</span></td>
                            <td>264234323</td>
                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                            <td>
                                <button class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                    Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">Dr. Alice Johnso S,Psi </td>
                            <td><span class="text-xs badge badge-soft badge-success">Psikolog</span></td>
                            <td>2034802374</td>
                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                            <td>
                                <button class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                    Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                            <td><span class="text-xs badge badge-soft badge-primary">Psikiater</span></td>
                            <td>293472387</td>
                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                            <td>
                                <button class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                    Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                            <td><span class="text-xs badge badge-soft badge-primary">Psikiater</span></td>
                            <td>293472387</td>
                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                            <td>
                                <button class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                    Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                            <td><span class="text-xs badge badge-soft badge-primary">Psikiater</span></td>
                            <td>293472387</td>
                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                            <td>
                                <button class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                    Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                            <td><span class="text-xs badge badge-soft badge-primary">Psikiater</span></td>
                            <td>293472387</td>
                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                            <td>
                                <button class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                    Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                            <td><span class="text-xs badge badge-soft badge-success">Psikolog</span></td>
                            <td>293472387</td>
                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                            <td>
                                <button class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                    Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">Dr. Bob Brown S,Psi</td>
                            <td><span class="text-xs badge badge-soft badge-success">Psikolog</span></td>
                            <td>293472387</td>
                            <td class="text-nowrap">Rp. 2.000.000,00</td>
                            <td>
                                <button class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                    Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <nav class="flex items-center px-12 gap-x-1">
            <button type="button" class="btn btn-text">Previous</button>
            <div class="flex items-center gap-x-1">
                <button type="button" class="btn btn-text btn-square aria-[current='page']:text-bg-primary">1</button>
                <button type="button" class="btn btn-text btn-square aria-[current='page']:text-bg-primary"
                    aria-current="page"> 2 </button>
                <button type="button" class="btn btn-text btn-square aria-[current='page']:text-bg-primary">3</button>
            </div>
            <button type="button" class="btn btn-text">Next</button>
        </nav>
    </div>
@endsection
