@extends('layouts.app')

@section('title', 'Nama Tantangan - Sini Cerita')

@section('app-hero')
    <section
        class="flex relative overflow-hidden flex-col items-center h-[600px] justify-center w-full gap-4 py-8 px-28 hero-section">
        <p class="font-bold text-center text-7xl text-hitam-800">Morning Magic</p>
        <p class="text-wrap text-hitam-800 max-w-[500px] text-center">Temukan ketenangan, kenali diri lebih
            dalam, dan
            jalani hidup dengan penuh kesadaran, satu napas dalam satu waktu.
        </p>
        <button id="to-konten-tantangan"
            class="flex gap-1 text-lg font-semibold text-white border-none items-bottom btn bg-biru-6 hover:bg-biru-5 h-max">Mulai
            Tantangan<span class="icon-[line-md--arrow-down]"></span></button>
        <img src="{{ asset('client/img/tantangan/Group 2104.svg') }}" class="absolute bottom-0 right-0 z-0" alt="">
        <img src="{{ asset('client/img/tantangan/Group 2103.svg') }}" class="absolute left-0 z-0 -bottom-4" alt="">
    </section>
@endsection

@section('section-content', 'px-0')

@section('app-content')
    <!-- Kontent Tantangan -->
    <div class="w-full h-full px-12 py-6 mt-4" id="konten-tantangan">
        <div
            class="relative flex flex-col items-start justify-center w-full gap-6 p-6 overflow-hidden bg-white rounded-2xl">
            <div class="z-20 flex justify-center w-full">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/9Ld83OsqNfU?si=LxSlOH2qRDkyUmtF"
                    title="YouTube video player" frameborder="0" class="w-[1000px] h-auto rounded-xl aspect-video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="z-20 flex flex-col items-start w-full gap-4 px-6">
                <h1 class="text-2xl font-semibold text-hitam-800">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.</h1>
                <p class="text-sm text-hitam-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic velit
                    distinctio obcaecati quasi!
                    Inventore, vitae, odio sint, natus molestiae facere autem cum tempore dolor sit doloribus enim
                    libero quo deserunt?</p>
                <p class="text-sm text-hitam-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic velit
                    distinctio obcaecati quasi!
                    Inventore, vitae, odio sint, natus molestiae facere autem cum tempore dolor sit doloribus enim
                    libero quo deserunt? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis atque beatae
                    magni voluptates quas amet repellendus distinctio excepturi ab, dolores impedit doloremque vero
                    blanditiis fugiat officiis totam commodi! Deleniti, fugit.</p>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollButton = document.getElementById("to-konten-tantangan");
            const targetSection = document.getElementById("konten-tantangan");

            scrollButton.addEventListener("click", function(event) {
                event.preventDefault(); // Mencegah navigasi default
                targetSection.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            });
        });
    </script>
@endsection
