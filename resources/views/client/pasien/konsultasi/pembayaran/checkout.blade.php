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
                @php
                    $gelar = $dokter->jenis_dokter == 'Psikolog' ? 'S,Psi' : 'Sp.Kj';
                @endphp
                <p class="text-hitam-800">Nama Lengkap</p>
                <p class="text-hitam-800">dr. {{ $dokter->nama_lengkap }} {{ $gelar }}</p>
            </div>
            <div class="flex justify-between w-full gap-6 mt-3">
                <p class="text-hitam-800">Jenis Dokter Jiwa</p>
                <p class="text-hitam-800">{{ $dokter->jenis_dokter }}</p>
            </div>
            <div class="flex justify-between w-full gap-6 mt-3">
                <p class="text-hitam-800">Harga Layanan Dokter jiwa</p>
                <p class="text-hitam-800">Rp. {{ number_format($dokter->harga_layanan, 0, ',', '.') }}</p>
            </div>
        </div>
        <div class="divider"></div>
        <h2 class="text-xl font-semibold text-hitam-800">Detail Transasksi</h2>
        <div class="flex justify-between w-full gap-6 mt-3">
            <p class="text-hitam-800">Waktu Transasksi</p>
            <p class="text-hitam-800">{{ $pembayaran->waktu_konsultasi }}, {{ $pembayaran->mulai_konsultasi }} -
                {{ $pembayaran->akhir_konsultasi }}</p>
        </div>
        <div class="flex justify-between w-full gap-6 mt-3">
            <p class="text-hitam-800">pembayaran Konsultasi</p>
            <p class="text-hitam-800">{{ $pembayaran->waktu_konsultasi }}, {{ $pembayaran->mulai_konsultasi }} -
                {{ $pembayaran->akhir_konsultasi }}</p>
        </div>
        <div class="flex justify-between w-full gap-6 mt-3">
            <p class="text-hitam-800">Harga Total</p>
            <p class="text-hitam-800">Rp. {{ number_format($dokter->harga_layanan, 0, ',', '.') }}</p>
        </div>
        <button class="btn btn-primary" type="button" id="pay-button">Bayar Sekarang</button>
    </div>
@endsection

@section('script')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}">
    </script>
    <script type="text/javascript">
        document.getElementById('pay-button').addEventListener('click', function() {
            fetch("{{ route('proses.pembayaran') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        id_pembayaran: "{{ $pembayaran->id }}"
                    })
                })
                .then(response => response.json())
                .then(data => {
                    window.snap.pay(data.snap_token);
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
@endsection
