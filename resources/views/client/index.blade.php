@extends('layouts.app')

@foreach (['berhasil-login', 'MustBePasien', 'MustBeDokter', 'GuestDetected', 'berhasil-hapus'] as $msg)
    @if (session($msg))
        <div
            class="absolute z-50 p-3 rounded-md top-5 left-5 alert {{ session($msg) == 'GuestDetected' ? 'alert-success' : 'alert-error' }} w-max">
            {{ session($msg) }}
        </div>
    @endif
@endforeach

@section('app-hero')
    <div class="flex flex-col items-center justify-center gap-4 h-[400px] sm:h-[611px]">
        <p class="px-4 text-xs text-center rounded-full sm:text-xl ring-1 sm:ring-2 text-hitam-800 ring-hitam-400 w-max">
            Sini
            Sehat,
            <span class="font-semibold text-biru-6">Sini Cerita</span>.
        </p>
        <div class="flex flex-col items-center justify-center gap-5 max-w-[832px]">
            <div class="flex flex-col gap-3">
                <h1 class="text-xl font-semibold leading-tight text-center sm:text-4xl lg:text-6xl text-wrap text-hitam-900">
                    Sehatkan pikiran dan kenali
                    <br>dirimu dengan <span class="text-biru-6">ber</span><span
                        class="px-1 mx-1 text-white sm:px-2 bg-biru-6 rounded-2xl">cerita</span>
                </h1>
                <p class="hidden text-xs text-center sm:block lg:text-sm text-pretty text-hitam-500">Kami menyediakan ruang
                    aman
                    untuk
                    mendengarkan cerita Anda, membantu memahami<br>emosi, dan menemukan solusi terbaik untuk
                    kesehatan mental Anda.</p>
            </div>
            <button
                class="p-1 text-xs font-bold text-white transition-colors rounded-lg shadow-lg sm:p-3 sm:text-xl bg-biru-6 sm:rounded-xl font-jkt focus:outline-none hover:bg-biru-5 shadow-biru-4"><a
                    href="{{ route('konsultasi-index') }}">Mulai Konsultasi</a></button>
        </div>
    </div>
@endsection

@section('script')
    <script>
        setTimeout(function() {
            let alerts = document.querySelectorAll('.alert'); // Ambil semua elemen dengan class 'alert'
            alerts.forEach(alert => {
                alert.style.display = 'none'; // Sembunyikan setiap alert
            });
        }, 6000); // 6 detik
    </script>
@endsection
