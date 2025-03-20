@extends('client.admin.layouts.admin')

@section('title', 'Daftar Konselor - Sini Cerita')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <ul>
            <li>
                <p href="" class="cursor-pointer text-hitam-800">Beranda</p>
            </li>
            <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
            <li>
                <p class="cursor-default text-hitam-800">Dokter Jiwa</p>
            </li>
            <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
            <li aria-current="page" class="text-hitam-800">Daftar Dokter</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="flex flex-col justify-between gap-3 pb-8">
        <h1 class="px-12 text-4xl font-semibold mb-7 text-hitam-800">Daftar Dokter</h1>
        <div class="px-12">
            <div class="w-full overflow-x-auto rounded-lg border-[1px]">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Spesialis</th>
                            <th>Nomor STRPK</th>
                            <th>Status Validasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dokters as $dokter)
                            <tr>
                                <td class="text-nowrap">{{ $dokter->nama_lengkap }}</td>
                                <td><span class="text-xs badge badge-soft badge-success">{{ $dokter->jenis_dokter }}</span>
                                </td>
                                <td>{{ $dokter->no_strpk }}</td>
                                <td class="text-nowrap">{{ $dokter->status_validasi_data }}</td>
                                <td class="flex items-center gap-2">
                                    <button
                                        class="w-10 h-10 text-white border-none btn btn-sm bg-accent hover:bg-accent/80"><span
                                            class="icon-[mdi--pencil]"></span></button>
                                    <a href="{{ route('detail-dokter', $dokter->id) }}"
                                        class="w-10 h-10 text-white border-none btn btn-sm bg-warning hover:bg-warning/80">
                                        <span class="icon-[mdi--eye]"></span>
                                    </a>
                                    <button
                                        class="w-10 h-10 text-white border-none btn btn-sm bg-error hover:bg-error/80"><span
                                            class="size-5 icon-[material-symbols--delete]"></span></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-full px-12">
            {!! $dokters->links() !!}
        </div>
    </div>
@endsection
