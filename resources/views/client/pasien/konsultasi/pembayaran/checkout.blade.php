@extends('layouts.app')

@section('title', 'Informasi Pembayaran')

@section('section-content', 'flex justify-center w-full')
@section('app-content')
    <div class="p-6 bg-white rounded-lg min-w-[40%]">
        <h1 class="text-3xl font-semibold text-hitam-800">Informasi Pembayaran</h1>
        <div class="divider"></div>
        <div class="grid w-full gap-2">
            <h2 class="text-xl font-semibold text-hitam-800">Keterangan Customer</h2>
            <div class="flex justify-between w-full gap-6 mt-3">
                <p class="text-hitam-800">Nama Lengkap</p>
                <p class="text-hitam-800">{{ $user->nama_lengkap }}</p>
            </div>
            <div class="flex justify-between w-full gap-6 mt-3">
                <p class="text-hitam-800">Email</p>
                <p class="text-hitam-800">{{ $user->email }}</p>
            </div>
            <div class="flex justify-between w-full gap-6 mt-3">
                <p class="text-hitam-800">No. Telepon</p>
                <p class="text-hitam-800">{{ $user->no_telp ?? '-' }}</p>
            </div>
            <div class="divider"></div>
            <h2 class="text-xl font-semibold text-hitam-800">Keterangan Dokter</h2>
            <div class="flex justify-between w-full gap-6 mt-3">
                <p class="text-hitam-800">Nama Lengkap</p>
                <p class="text-hitam-800">dr. Farrel Yassar Kurniawan S,Psi</p>
            </div>
            <div class="flex justify-between w-full gap-6 mt-3">
                <p class="text-hitam-800">Jenis Dokter Jiwa</p>
                <p class="text-hitam-800">Psikolog</p>
            </div>
            <div class="flex justify-between w-full gap-6 mt-3">
                <p class="text-hitam-800">Harga Layanan Dokter jiwa</p>
                <p class="text-hitam-800">Rp. 75.000</p>
            </div>
        </div>
        <div class="divider"></div>
        <h2 class="text-xl font-semibold text-hitam-800">Detail Transasksi</h2>
        <div class="flex justify-between w-full gap-6 mt-3">
            <p class="text-hitam-800">Waktu Transasksi</p>
            <p class="text-hitam-800">12 Maret 2025, 09.00</p>
        </div>
        <div class="flex justify-between w-full gap-6 mt-3">
            <p class="text-hitam-800">Waktu Konsultasi</p>
            <p class="text-hitam-800">12 Maret 2025, 10.00 - 11.00</p>
        </div>
        <div class="flex justify-between w-full gap-6 mt-3">
            <p class="text-hitam-800">Harga Total</p>
            <p class="text-hitam-800">Rp. 75.000</p>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
@endsection
