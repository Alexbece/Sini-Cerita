@extends('layouts.app')

@section('title', 'Tantangan - Sini Cerita')

@section('app-hero')
    <div
        class="relative overflow-hidden grid sm:flex w-full py-8 sm:h-[550px] h-[300px] items-center justify-center px-6 sm:px-16 xl:px-28 hero-section gap-7">
        <div class="flex flex-col items-center justify-center w-full gap-3 sm:items-start">
            <p class="text-lg sm:text-5xl md:text-start text-center font-bold text-hitam-800 sm:max-w-[85%]">Sini Sehat
                Dengan
                Tantangan
            </p>
            <p class="text-wrap md:text-start text-center text-hitam-800 lg:max-w-[400px]"> Bahagia dengan sehatkan pikiran,
                tubuh, dan
                mental
                Anda adalah kunci untuk mencapai keseimbangan hidup yang penuh semangat. </p>
            <button id="to-kategori-tantangan"
                class="flex gap-1 text-lg font-semibold text-white border-none items-bottom btn bg-biru-6 hover:bg-biru-5 h-max">Mulai<span
                    class="icon-[line-md--arrow-down]"></span></button>
        </div>
        <div class="w-[80%] hidden md:flex justify-center items-center h-max">
            <img src="{{ asset('client/img/tantangan/tantangan_hero.png') }}" alt=""
                class="object-cover object-center w-auto h-[300px] xl:h-[400px]">
        </div>
        <div class="absolute z-10 hidden rounded-full xl:flex h-52 w-52 -bottom-10 -left-12 bg-biru-4"></div>
        <div class="absolute z-0 hidden rounded-full xl:flex h-52 w-52 -bottom-14 -left-3 bg-biru-2"></div>
        <div class="absolute z-0 hidden rounded-full xl:flex h-52 w-52 -right-20 bg-biru-4"></div>
        <div class="absolute z-0 hidden rounded-full xl:flex h-52 w-52 -right-32 bottom-60 bg-biru-2"></div>
    </div>
@endsection

@section('section-content', 'sm:px-8 px-0')

@section('app-content')

    <div class="justify-center hidden w-full h-full px-24 py-6 mt-4 md:flex">
        <div class="flex items-center h-full gap-4 p-6 shadow-md bg-biru-2 rounded-xl w-max">
            <div class="flex items-center justify-center col-span-1 row-span-2 rounded-lg shadow-md w-max h-max">
                <img src="{{ asset('client/img/tantangan/yoga_1.jpg') }}" alt=""
                    class="object-cover rounded-lg shadow-lg h-[400px] w-[280px]">
            </div>

            <div class="relative max-w-[600px] flex h-[400px] p-3 overflow-hidden bg-white rounded-lg shadow-md">
                <div class="flex flex-col w-full h-full gap-2">
                    <h1 class="text-6xl font-bold text-hitam-800">Tantangan <br>Sini Cerita</h1>
                    <p class="max-w-[55%] text-pretty text-hitam-400">Jaga keseimbangan hidup dengan tantangan harian
                        yang
                        dirancang untuk membantu
                        kamu lebih tenang dan fokus. Mulai dari yoga, meditasi, hingga self-care, setiap tantangan
                        akan membantumu merawat kesehatan mental dengan cara yang menyenangkan dan bermanfaat.</p>
                    <img src="{{ asset('client/img/tantangan/tantangan_bento_1.png') }}"
                        class="absolute -bottom-7 object-cover w-[300px] h-auto -right-7" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Kategori Tantangan -->
    <div class="relative flex flex-col w-full gap-8 p-8 mt-12 overflow-hidden bg-white shadow-lg rounded-xl"
        id="kategori-tantangan">
        <div class="z-10 grid gap-3">
            <h2 class="text-3xl font-semibold text-hitam-800">Kategori Tantangan</h2>
            <p>Tiga jenis kategori tantangan yang bisa anda coba untuk menyehatkan pikiran Anda</p>
        </div>
        <div class="z-10 flex justify-start w-full gap-6 overflow-x-auto md:justify-center md:overflow-hidden h-max">
            <!-- Card 1 -->
            <div class="flex flex-col w-full gap-4">
                <img src="{{ asset('client/img/tantangan/yoga_2.jpg') }}" alt=""
                    class="w-full h-[300px] object-cover rounded-lg">
                <div class="grid w-full gap-2">
                    <h5 class="text-2xl font-semibold text-hitam-800">Yoga</h5>
                    <p class="text-sm text-wrap text-hitam-400">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Repudiandae
                        temporibus saepe
                        exercitationem voluptas asperiores.</p>
                    <a href="{{ route('tantangan-yoga') }}"
                        class="flex items-center mt-2 text-white border-none bg-biru-6 btn w-max">Lihat
                        Selengkapnya <span class=" text-lg icon-[ep--right]"></span></a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col w-full gap-4">
                <img src="{{ asset('client/img/tantangan/meditation.jpg') }}" alt=""
                    class="w-full h-[300px] object-cover rounded-lg">
                <div class="grid w-full gap-2">
                    <h5 class="text-2xl font-semibold text-hitam-800">Meditasi</h5>
                    <p class="text-sm text-wrap text-hitam-400">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Repudiandae
                        temporibus saepe
                        exercitationem voluptas asperiores.</p>
                    <a href="" class="flex items-center mt-2 text-white border-none bg-biru-6 btn w-max">Lihat
                        Selengkapnya <span class=" text-lg icon-[ep--right]"></span></a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col w-full gap-4">
                <img src="{{ asset('client/img/tantangan/self-care.jpg') }}" alt=""
                    class="w-full h-[300px] object-cover rounded-lg">
                <div class="grid w-full gap-2">
                    <h5 class="text-2xl font-semibold text-hitam-800">Perawatan Diri</h5>
                    <p class="text-sm text-wrap text-hitam-400">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Repudiandae
                        temporibus saepe
                        exercitationem voluptas asperiores.</p>
                    <a href="" class="flex items-center mt-2 text-white border-none bg-biru-6 btn w-max">Lihat
                        Selengkapnya <span class=" text-lg icon-[ep--right]"></span></a>
                </div>
            </div>
        </div>
        <img src="{{ asset('client/img/tantangan/Vector 1.png') }}"
            class="absolute z-0 top-0 right-0 w-[450px] h-auto"></img>
        <img src="{{ asset('client/img/tantangan/Vector 1.png') }}"
            class="absolute z-0 top-8 -right-12 w-[450px] opacity-55 h-auto"></img>
        <img src="{{ asset('client/img/tantangan/Vector 1.png') }}"
            class="absolute z-0 bottom-14 -rotate-90 -left-36 w-[450px] h-auto"></img>
        <img src="{{ asset('client/img/tantangan/Vector 1.png') }}"
            class="absolute z-0 bottom-8 -rotate-90 -left-32 w-[450px] opacity-55 h-auto"></img>
    </div>

    <div class="hidden w-full h-full px-24 py-6 md:flex mt-14">
        <div
            class="grid items-center justify-center w-full grid-cols-2 overflow-hidden shadow-lg h-max rounded-xl bg-biru-6">
            <div class="flex flex-col items-center h-[600px] justify-center gap-2">
                <h1 class="text-xl font-semibold text-white">Sini Cerita</h1>
                <p class="text-3xl font-bold text-white max-w-[470px] text-center">"Gerakkan tubuh dan tenangkan
                    pikiran. Coba tantangan dari kami untuk jiwa yang lebih damai."</p>
            </div>
            <img src="{{ asset('client/img/tantangan/tantangan_2.jpg') }}" class="object-cover w-full h-full bg-top"
                alt="">
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollButton = document.getElementById("to-kategori-tantangan");
            const targetSection = document.getElementById("kategori-tantangan");

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
