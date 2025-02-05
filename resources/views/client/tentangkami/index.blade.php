<!DOCTYPE html>
<html lang="en">
@include ('_head')

<body class="aboutUs">
    <header class="rounded-[20px] h-full flex flex-col items-center w-full aboutUs-header">
        <nav class="relative flex items-center justify-between px-8 py-4 bg-white rounded-[20px] w-full">
            @include ('components.navbar')
        </nav>

        <section class="flex justify-center w-full py-8 px-28 h-max hero-section gap-7">
            <div class="w-[50%] flex flex-col items-start justify-center gap-2">
                <h1 class="text-6xl font-bold text-biru-6"><span class="text-hitam-900">Sini Sehat,</span> <br> Sini
                    Cerita.</h1>
                <p class=" text-wrap text-hitam-800 max-w-[500px]">Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit.
                    Doloremque, eius aperiam! Reprehenderit
                    dolores quae repudiandae.</p>
            </div>
            <div class="w-[50%] flex justify-center items-center h-max">
                <img src="{{asset('client\aboutUs\img-hero.png')}}" alt=""
                    class="object-cover object-center w-full h-[500px]">
            </div>
        </section>
    </header>

    <!-- <div class="flex items-end justify-between w-full mt-20">
        <div>a</div>
        <div
            class="hp-aboutUs flex  flex-col items-center border-[8px] border-black py-9 px-7 w-[350px] h-[650px] rounded-[40px] gap-8 justify-center bg-white">
            <div class="w-[100px] h-[25px] rounded-b-2xl bg-black absolute transform -translate-y-[310px]"></div>
            <h1 class="text-4xl font-bold text-center">Sini Cerita, <br>Sini Cerita.</h1>
            <p class="font-light text-center">Lorem ipsum dolor sit amet,
                exercitationem accusamus corporis
                doloribus architecto vitae!
                Doloribus ea quaerat est suscipit fuga!</p>
            <p class="font-light text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                maiores?</p>
            <p class="font-light text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla.</p>
        </div>
        <div>a</div>
    </div> -->

    <section class="relative flex flex-col items-center gap-8 p-8 mt-8 h-max">

        <h1 class="text-6xl font-bold text-hitam-900 ">Tim Kami</h1>

        <div class="grid grid-cols-3 mx-auto gap-x-9 gap-y-12 w-max place-items-center h-max">

            <div class="flex justify-center team-card">
                <div class="flex flex-col items-center justify-end p-4 h-[320px] w-[250px] rounded-lg">
                    <div class="z-10 grid p-4 rounded white h-max w-max place-items-center">
                        <h4 class="text-lg font-semibold text-white">Farrel Yassar K.</h4>
                        <p class="text-sm text-white">Front End</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center team-card">
                <div class="flex flex-col items-center justify-end p-4 h-[320px] w-[250px] rounded-lg">
                    <div class="z-10 grid p-4 rounded white h-max w-max place-items-center">
                        <h4 class="text-lg font-semibold text-white">M. Fauzan Azzaki</h4>
                        <p class="text-sm text-white">Back End</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center team-card">
                <div class="flex flex-col items-center justify-end p-4 h-[320px] w-[250px] rounded-lg">
                    <div class="z-10 grid p-4 rounded white h-max w-max place-items-center">
                        <h4 class="text-lg font-semibold text-white">Salwa Kharisma</h4>
                        <p class="text-sm text-white">Project Manager</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center col-span-3 gap-x-9">
                <div class="team-card">
                    <div class="flex flex-col items-center justify-end p-4 h-[320px] w-[250px] rounded-lg">
                        <div class="z-10 grid p-4 rounded white h-max w-max place-items-center">
                            <h4 class="text-lg font-semibold text-white">Najia Binazir</h4>
                            <p class="text-sm text-white">System Analyst</p>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="flex flex-col items-center justify-end p-4 h-[320px] w-[250px] rounded-lg">
                        <div class="z-10 grid p-4 rounded white h-max w-max place-items-center">
                            <h4 class="text-lg font-semibold text-white">Revina Putri</h4>
                            <p class="text-sm text-white">Quality Assurance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[900px] h-[900px] bg-white/70 rounded-full absolute blur-[120px] -z-10"></div>
    </section>

    <footer
        class="bg-white rounded-[30px] grid xl:grid-cols-2 gap-12 place-items-center h-max justify-center p-16 transition-all ease-out duration-300">
        @include ('components.footer')
    </footer>
</body>

</html>