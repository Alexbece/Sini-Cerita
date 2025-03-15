@extends ('client.admin.layouts.admin')

@section('title', 'Pendaftaran Konselor')

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
        <li aria-current="page" class="text-hitam-800">Pendaftaran</li>
    </ul>
</div>
@endsection

@section('content')
<div class="flex flex-col justify-between gap-3 pb-8">
    <div class="grid gap-1 px-12 mb-7">
        <h1 class="text-4xl font-semibold text-hitam-800">Pendaftaran Konselor</h1>
        <p>Daftar konselor yang mendaftar ke website Sini Cerita</p>
    </div>
    <div class="px-12">
        <div class="w-full overflow-x-auto rounded-lg border-[1px]">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Spesialis</th>
                        <th>Nomor STR</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dokters as $dokter)
                    <tr>
                        <td class="text-nowrap">{{ $dokter->nama_lengkap }}</td>
                        <td><span class="text-xs badge badge-soft badge-success">{{ $dokter->jenis_dokter }}</span></td>
                        <td>{{ $dokter->no_strpk }}</td>
                        <td>
                            <a href="{{route('validasidokter.show', $dokter->id)}}"
                                class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <nav class="flex items-center px-12 gap-x-1">
        <button type="button" class="btn btn-text"><span class="icon-[akar-icons--chevron-left]"></span></button>
        <div class="flex items-center gap-x-1">
            <button type="button" class="btn btn-text btn-square aria-[current='page']:text-bg-primary"
                aria-current="page"> 1 </button>
            <button type="button" class="btn btn-text btn-square aria-[current='page']:text-bg-primary">2</button>
            <button type="button" class="btn btn-text btn-square aria-[current='page']:text-bg-primary">3</button>
        </div>
        <button type="button" class="btn btn-text"><span class="icon-[akar-icons--chevron-right]"></span></button>
    </nav>
</div>
@endsection