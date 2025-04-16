@extends('layouts.app')

@section('title', 'Konsultasi - Sini Cerita')

@section('app-content')
    <div class="bg-white w-full grid 2xl:flex gap-5 p-4 mt-5 rounded-[20px] shadow-lg">
        <div class="grid h-max gap-10 max-w-[494px]">
            <h2 class="text-3xl font-semibold text-hitam-900">Cara Konsultasi</h2>
            <div class="grid gap-4 ">
                <div class="grid gap-2">
                    <h4 class="text-lg font-medium text-hitam-500 font-jkt">1. Langkah Pertama :</h4>
                    <p class="text-sm text-wrap text-hitam-500">Pilih Konselor. Pilih Konselor yang tersedia dan
                        klik pada tombol lihat detail untuk melihat detail dokter.
                    </p>
                </div>
                <div class="grid gap-2">
                    <h4 class="text-lg font-medium text-hitam-500 font-jkt">2. Langkah Kedua :</h4>
                    <p class="text-sm text-wrap text-hitam-500">Jika Dokter yang Anda pilih cocok, bisa langsung mengeklik
                        tombol <b>Lanjut Lonsultasi</b> dan melakukan pembayaran
                    </p>
                </div>
                <div class="grid gap-2">
                    <h4 class="text-lg font-medium text-hitam-500 font-jkt">3. Langkah Kegita :</h4>
                    <p class="text-sm text-wrap text-hitam-500">Tunggu Dokter. Anda akan masuk kedalam sesi chat dan tunggu
                        sampai dokter masuk kedalam sesi chat
                        bersama Anda (sekitar 2-3 menit).
                    </p>
                </div>
                <div class="grid gap-2">
                    <h4 class="text-lg font-medium text-hitam-500 font-jkt">4. Langkah Keempat :</h4>
                    <p class="text-sm text-wrap text-hitam-500">Setelah Anda terhubung dengan dokter. Anda bisa langsung
                        berkonsultasi dengan Dokter yang telah Anda pilih dengan waktu yang sesuai dengan keterangan pada
                        detail dokter.
                    </p>
                </div>
                <div class="grid gap-2">
                    <h4 class="text-lg font-medium text-hitam-500 font-jkt">5. Langkah Terakhir :</h4>
                    <p class="text-sm text-wrap text-hitam-500">Saat waktu sudah mendekati akhir dari sesi, Dokter akan
                        memberitahu Anda jika sudah waktunya untuk mengakhiri sesi.
                    </p>
                </div>
            </div>
        </div>

        <div class="divider divider-horizontal"></div>

        <div class="flex flex-col w-full h-auto gap-6">
            <div>
                <h2 class="text-3xl font-semibold text-hitam-900">Daftar Konselor</h2>
                <p class="text-sm text-hitam-500">Konsultasi online dengan Konselor terpercaya</p>
            </div>

            <div class="grid gap-6">
                <div
                    class="flex flex-wrap justify-start gap-2 text-sm transition-all duration-300 ease-out text-hitam-700 lg:gap-4 lg:text-base">
                    <a href="{{ route('konsultasi-index') }}"
                        class="px-3 py-2 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max 
                        {{ request('jenis_dokter') ? '' : 'bg-biru-6 text-white' }} hover:bg-biru-6 hover:text-white">
                        Semua
                    </a>
                    <a href="{{ route('konsultasi-index', ['jenis_dokter' => 'Psikiater']) }}"
                        class="px-3 py-2 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max 
                        {{ request('jenis_dokter') == 'Psikiater' ? 'bg-biru-6 text-white' : '' }} hover:bg-biru-6 hover:text-white">
                        Psikiater
                    </a>
                    <a href="{{ route('konsultasi-index', ['jenis_dokter' => 'Psikolog']) }}"
                        class="px-3 py-2 transition-all duration-500 ease-out rounded-full text-nowrap w-max h-max 
                        {{ request('jenis_dokter') == 'Psikolog' ? 'bg-biru-6 text-white' : '' }} hover:bg-biru-6 hover:text-white">
                        Psikolog
                    </a>
                </div>
            </div>


            @include('client.pasien.konsultasi.list_konselor')

            
        </div>
    </div>
@endsection
