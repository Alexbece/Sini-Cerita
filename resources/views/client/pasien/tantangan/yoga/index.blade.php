@extends('layouts.app')

@section('title', 'Tantangan Yoga - Sini Cerita')

@section('app-hero')
    <div
        class="flex justify-center relative overflow-hidden w-full py-8 sm:h-[530px] h-[300px] px-2 sm:px-28 hero-section gap-7">
        <div class="md:w-[50%] w-full flex flex-col items-center md:items-start justify-center gap-3">
            <p class="sm:text-5xl text-2xl text-center md:text-start font-bold text-hitam-800 w-full md:max-w-[80%]">
                Tantangan Yoga Sini
                Cerita</p>
            <p class="text-wrap text-xs sm:text-base text-center md:text-start text-hitam-800 w-full md:max-w-[500px]">
                Latihan harian
                untuk meningkatkan
                keseimbangan,
                fleksibilitas, dan ketenangan, membantu merawat tubuh dan mental.
            </p>
            <button id="to-list-tantangan"
                class="flex gap-1 text-sm font-semibold text-white border-none sm:text-lg items-bottom btn bg-biru-6 hover:bg-biru-5 h-max">Mulai
                Yoga<span class="icon-[line-md--arrow-down]"></span></button>
        </div>
        <div class="w-[50%] hidden md:flex justify-center items-center h-max">
            <img src="{{ asset('client/img/tantangan/tantangan_hero.png') }}" alt=""
                class="object-cover  object-center w-auto h-[400px]">
        </div>
        <div class="absolute z-10 hidden rounded-full xl:flex h-52 w-52 -bottom-10 -left-12 bg-biru-4"></div>
        <div class="absolute z-0 hidden rounded-full xl:flex h-52 w-52 -bottom-14 -left-3 bg-biru-2"></div>
        <div class="absolute z-0 hidden rounded-full xl:flex h-52 w-52 -right-20 bg-biru-4"></div>
        <div class="absolute z-0 hidden rounded-full xl:flex h-52 w-52 -right-32 bottom-40 bg-biru-2"></div>
    </div>
@endsection

@section('section-content', 'items-center justify-center w-full md:px-6 lg:px-24 h-max py-6')
@section('app-content')
    <!-- List Tantangan -->
    <div class="w-full h-full px-8 py-6 mt-4">
        <div class="relative flex flex-col w-full gap-8 p-8 overflow-hidden bg-white shadow-lg rounded-xl"
            id="list-tantangan">
            <div class="z-10 grid gap-3 place-content-center">
                <h2 class="text-3xl font-semibold text-center text-hitam-800">Tantangan Yoga</h2>
                <p>Coba sehatkan diri dan pikiran dengan melakukan tantangan beryoga dari Sini Cerita.</p>
            </div>
            <div class="z-10 grid w-full gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 h-max">
                <!-- Card 1 -->
                <div class="relative flex flex-col w-full gap-4">
                    <p
                        class="absolute top-0 left-0 px-2 py-1 m-4 font-medium text-white rounded-lg bg-hitam-600/30 backdrop-blur">
                        Morning Magic</p>
                    <img src="{{ asset('client/img/tantangan/yoga_2.jpg') }}" alt=""
                        class="w-full h-[200px] object-cover rounded-lg">
                    <div class="grid w-full gap-2">
                        <p class="text-sm text-wrap text-hitam-400">Momen istimewa di pagi hari yang membangkitkan
                            semangat, inspirasi, dan energi positif untuk memulai hari dengan penuh keyakinan.</p>
                        <a href="{{ route('page-tantangan-yoga') }}"
                            class="flex items-center mt-2 text-white border-none rounded-full bg-biru-6 btn w-max hover:bg-biru-5 hover:text-white">Mulai
                            Tantangan
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative flex flex-col w-full gap-4">
                    <p
                        class="absolute top-0 left-0 px-2 py-1 m-4 font-medium text-white rounded-lg bg-hitam-600/30 backdrop-blur">
                        Morning Magic</p>
                    <img src="{{ asset('client/img/tantangan/meditation.jpg') }}" alt=""
                        class="w-full h-[200px] object-cover rounded-lg">
                    <div class="grid w-full gap-2">
                        <p class="text-sm text-wrap text-hitam-400">Momen istimewa di pagi hari yang membangkitkan
                            semangat, inspirasi, dan energi positif untuk memulai hari dengan penuh keyakinan.</p>
                        <button
                            class="flex items-center mt-2 text-white border-none rounded-full bg-biru-6 btn w-max hover:bg-biru-5 hover:text-white">Mulai
                            Tantangan</button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative flex flex-col w-full gap-4">
                    <p
                        class="absolute top-0 left-0 px-2 py-1 m-4 font-medium text-white rounded-lg bg-hitam-600/30 backdrop-blur">
                        Morning Magic</p>
                    <img src="{{ asset('client/img/tantangan/self-care.jpg') }}" alt=""
                        class="w-full h-[200px] object-cover rounded-lg">
                    <div class="grid w-full gap-2">
                        <p class="text-sm text-wrap text-hitam-400">Momen istimewa di pagi hari yang membangkitkan
                            semangat, inspirasi, dan energi positif untuk memulai hari dengan penuh keyakinan.</p>
                        <button
                            class="flex items-center mt-2 text-white border-none rounded-full bg-biru-6 btn w-max hover:bg-biru-5 hover:text-white">Mulai
                            Tantangan</button>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="relative flex flex-col w-full gap-4">
                    <p
                        class="absolute top-0 left-0 px-2 py-1 m-4 font-medium text-white rounded-lg bg-hitam-600/30 backdrop-blur">
                        Morning Magic</p>
                    <img src="{{ asset('client/img/tantangan/self-care.jpg') }}" alt=""
                        class="w-full h-[200px] object-cover rounded-lg">
                    <div class="grid w-full gap-2">
                        <p class="text-sm text-wrap text-hitam-400">Momen istimewa di pagi hari yang membangkitkan
                            semangat, inspirasi, dan energi positif untuk memulai hari dengan penuh keyakinan.</p>
                        <button
                            class="flex items-center mt-2 text-white border-none rounded-full bg-biru-6 btn w-max hover:bg-biru-5 hover:text-white">Mulai
                            Tantangan</button>
                    </div>
                </div>

                <!-- Card 1 -->
                <div class="relative flex flex-col w-full gap-4">
                    <p
                        class="absolute top-0 left-0 px-2 py-1 m-4 font-medium text-white rounded-lg bg-hitam-600/30 backdrop-blur">
                        Morning Magic</p>
                    <img src="{{ asset('client/img/tantangan/yoga_2.jpg') }}" alt=""
                        class="w-full h-[200px] object-cover rounded-lg">
                    <div class="grid w-full gap-2">
                        <p class="text-sm text-wrap text-hitam-400">Momen istimewa di pagi hari yang membangkitkan
                            semangat, inspirasi, dan energi positif untuk memulai hari dengan penuh keyakinan.</p>
                        <a href="{{ route('page-tantangan-yoga') }}"
                            class="flex items-center mt-2 text-white border-none rounded-full bg-biru-6 btn w-max hover:bg-biru-5 hover:text-white">Mulai
                            Tantangan
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative flex flex-col w-full gap-4">
                    <p
                        class="absolute top-0 left-0 px-2 py-1 m-4 font-medium text-white rounded-lg bg-hitam-600/30 backdrop-blur">
                        Morning Magic</p>
                    <img src="{{ asset('client/img/tantangan/meditation.jpg') }}" alt=""
                        class="w-full h-[200px] object-cover rounded-lg">
                    <div class="grid w-full gap-2">
                        <p class="text-sm text-wrap text-hitam-400">Momen istimewa di pagi hari yang membangkitkan
                            semangat, inspirasi, dan energi positif untuk memulai hari dengan penuh keyakinan.</p>
                        <button
                            class="flex items-center mt-2 text-white border-none rounded-full bg-biru-6 btn w-max hover:bg-biru-5 hover:text-white">Mulai
                            Tantangan</button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative flex flex-col w-full gap-4">
                    <p
                        class="absolute top-0 left-0 px-2 py-1 m-4 font-medium text-white rounded-lg bg-hitam-600/30 backdrop-blur">
                        Morning Magic</p>
                    <img src="{{ asset('client/img/tantangan/self-care.jpg') }}" alt=""
                        class="w-full h-[200px] object-cover rounded-lg">
                    <div class="grid w-full gap-2">
                        <p class="text-sm text-wrap text-hitam-400">Momen istimewa di pagi hari yang membangkitkan
                            semangat, inspirasi, dan energi positif untuk memulai hari dengan penuh keyakinan.</p>
                        <button
                            class="flex items-center mt-2 text-white border-none rounded-full bg-biru-6 btn w-max hover:bg-biru-5 hover:text-white">Mulai
                            Tantangan</button>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="relative flex flex-col w-full gap-4">
                    <p
                        class="absolute top-0 left-0 px-2 py-1 m-4 font-medium text-white rounded-lg bg-hitam-600/30 backdrop-blur">
                        Morning Magic</p>
                    <img src="{{ asset('client/img/tantangan/self-care.jpg') }}" alt=""
                        class="w-full h-[200px] object-cover rounded-lg">
                    <div class="grid w-full gap-2">
                        <p class="text-sm text-wrap text-hitam-400">Momen istimewa di pagi hari yang membangkitkan
                            semangat, inspirasi, dan energi positif untuk memulai hari dengan penuh keyakinan.</p>
                        <button
                            class="flex items-center mt-2 text-white border-none rounded-full bg-biru-6 btn w-max hover:bg-biru-5 hover:text-white">Mulai
                            Tantangan</button>
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


            <ul class="flex items-center justify-center w-full h-10 mt-4 -space-x-px text-base">
                <li>
                    <a href="#"
                        class="flex items-center justify-center h-10 px-4 leading-tight text-white border ms-0 border-e-0 rounded-s-lg border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">
                        <span class="sr-only">Previous</span>
                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" aria-current="page"
                        class="z-10 flex items-center justify-center h-10 px-4 leading-tight bg-white border text-biru-6 border-biru-6">1</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">2</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">3</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">4</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6">5</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center h-10 px-4 leading-tight text-white border border-biru-6 bg-biru-6 hover:bg-white hover:text-biru-6 rounded-e-lg">
                        <span class="sr-only">Next</span>
                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollButton = document.getElementById("to-list-tantangan");
            const targetSection = document.getElementById("list-tantangan");

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
