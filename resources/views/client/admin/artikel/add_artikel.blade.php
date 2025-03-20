@extends('client.admin.layouts.admin')

@section('title', 'Tambah Artikel - Admin Sini Cerita')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <ul>
            <li>
                <p href="" class="cursor-pointer text-hitam-800">Beranda</p>
            </li>
            <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
            <li>
                <p class="cursor-default text-hitam-800">Artikel</p>
            </li>
            <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
            <li aria-current="page" class="text-hitam-800">Tambah Artikel</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="flex flex-col justify-between gap-3 pb-8">
        <h1 class="px-12 text-4xl font-semibold mb-7 text-hitam-800">Tambah Artikel</h1>

        <form class="flex flex-col justify-start gap-8 p-4 py-8 mx-10 border rounded-lg" method="POST"
            action="{{ route('proses-add-artikel') }}">
            @csrf
            <div class="grid grid-cols-[120px,1fr] gap-3 items-center">
                <label for="title_artikel" class="text-hitam-800 text-nowrap">Judul Artikel :</label>
                <input type="text" name="title_artikel" id="title_artikel"
                    class="w-full bg-white border input text-hitam-800">
            </div>
            <div class="grid grid-cols-[120px,1fr] gap-3 items-start">
                <label for="konten-artikel" class="text-hitam-800 text-nowrap">Konten Artikel :</label>
                <textarea name="content" id="konten-artikel"
                    class="textarea resize-none min-h-[200px] text-hitam-800 bg-white border w-full"></textarea>
            </div>
            <div class="grid grid-cols-[120px,1fr] gap-3 place-items-center">
                <label for="kategori-artikel" class="text-hitam-800 text-nowrap">Kategori Artikel :</label>
                <select class="bg-white select text-hitam-800" name="category_artikel" id="kategori-artikel"
                    aria-label="Pilih Kategori" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Burnout">Burnout</option>
                    <option value="Gangguan Mood">Gangguan Mood</option>
                    <option value="Depresi">Depresi</option>
                    <option value="Keluarga & Hubungan">Keluarga & Hubungan</option>
                </select>
            </div>
            <button type="submit" class="w-[170px] text-white btn btn-accent">Submit</button>
        </form>
    </div>
@endsection
