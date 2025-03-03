@php
    use Illuminate\Support\Str;
@endphp

@extends('client.admin.layouts.admin')

@section('title', 'List Artikel - Admin Sini Cerita')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <ul>
            <li>
                <a href="" class="cursor-pointer text-hitam-800">Beranda</a>
            </li>
            <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
            <li>
                <p class="cursor-default text-hitam-800">Artikel</p>
            </li>
            <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
            <li aria-current="page" class="text-hitam-800">Daftar Artikel</li>
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
                            <th>Judul Artikel</th>
                            <th>Konten</th>
                            <th>Kategori</th>
                            <th>Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikels as $artikel)
                            <tr>
                                <td class="text-nowrap">{{ Str::words($artikel->title_artikel, 4, '...') }}</td>
                                <td>{{ Str::words(strip_tags($artikel->content), 4, '...') }}
                                </td>
                                <td><span
                                        class="text-xs badge badge-soft badge-info">{{ $artikel->category_artikel }}</span>
                                </td>
                                <td class="text-nowrap">
                                    {{ \Carbon\Carbon::parse($artikel->created_at)->translatedFormat('l, d F Y') }}</td>
                                <td>
                                    <div class="grid gap-1">
                                        <a href="{{ route('app-artikel', $artikel->id_artikel) }}"
                                            class="text-white border-none btn btn-sm bg-accent hover:bg-accent/80">Lihat
                                            Detail</a>
                                        <form action="{{ route('delete-artikel', ['id_artikel' => $artikel->id_artikel]) }}" class="w-full" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="w-full text-white border-none btn btn-sm bg-error hover:bg-accent/80">Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
