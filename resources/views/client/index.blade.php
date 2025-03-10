@extends('layouts.app')

@if (session('berhasil-login'))
    <div id="berhasil-login" class="absolute z-50 p-3 rounded-md top-5 left-5 alert alert-success w-max">
        {{ session('berhasil-login') }}
    </div>
@endif

@if (session('berhasil-hapus'))
    <div id="berhasil-hapus" class="absolute z-50 p-3 rounded-md top-5 left-5 alert alert-error w-max">
        {{ session('berhasil-hapus') }}
    </div>
@endif

@section('app-hero')
    <div class="flex flex-col items-center justify-center gap-4 h-[611px]">
        <p class="px-4 text-xl text-center rounded-full ring-2 ring-hitam-400 w-max">Sini Sehat, <span
                class=" text-biru-6">Sini Cerita</span>.</p>
        <div class="flex flex-col items-center justify-center gap-5 max-w-[832px]">
            <div class="flex flex-col gap-3">
                <h1 class="text-4xl font-semibold leading-tight text-center lg:text-6xl text-wrap text-hitam-900">
                    Sehatkan
                    pikiran
                    dan kenali
                    <br>dirimu dengan <span class="text-biru-6">ber</span><span
                        class="px-2 mx-1 text-white bg-biru-6 rounded-2xl">cerita</span>
                </h1>
                <p class="text-xs text-center lg:text-sm text-pretty text-hitam-500">Kami menyediakan ruang aman
                    untuk
                    mendengarkan cerita Anda, membantu memahami<br>emosi, dan menemukan solusi terbaik untuk
                    kesehatan mental Anda.</p>
            </div>
            <button
                class="px-3 py-2 text-xl font-bold text-white transition-colors shadow-lg bg-biru-6 rounded-xl font-jkt focus:outline-none hover:bg-biru-5 shadow-biru-4"><a
                    href="{{ route('konsultasi-index') }}">Mulai Konsultasi</a></button>
        </div>
    </div>
@endsection

@section('script')
    <script>
        setTimeout(function() {
            let loginAlert = document.getElementById('berhasil-login');
            let hapusAlert = document.getElementById('berhasil-hapus');

            if (loginAlert) {
                loginAlert.style.display = 'none';
            }
            if (hapusAlert) {
                hapusAlert.style.display = 'none';
            }
        }, 6000); // 6 detik
    </script>
@endsection
