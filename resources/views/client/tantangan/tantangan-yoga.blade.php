<!DOCTYPE html>
<html lang="en">
@include ('_head')

<body class="page-tantangan">
    <div class="flex justify-center w-full px-24 py-6">
        <header
            class="rounded-[20px] h-[650px] flex relative flex-col overflow-hidden items-center w-full bg-white shadow-lg">
            <nav class="relative flex items-center justify-between px-8 py-4 rounded-[20px] w-full">
                @include ('components.navbar')
            </nav>

            <section class="flex flex-col items-center justify-center w-full h-full gap-4 py-8 px-28 hero-section">
                <p class="font-bold text-center text-7xl text-hitam-800">Morning Magic</p>
                <p class="text-wrap text-hitam-800 max-w-[500px] text-center">Temukan ketenangan, kenali diri lebih
                    dalam, dan
                    jalani hidup dengan penuh kesadaran, satu napas dalam satu waktu.
                </p>
                <button id="to-konten-tantangan"
                    class="flex gap-1 text-lg font-semibold text-white border-none items-bottom btn bg-biru-6 hover:bg-biru-5 h-max">Mulai Tantangan<span class="icon-[line-md--arrow-down]"></span></button>
            </section>

            <img src="{{ asset('client/img/tantangan/Group 2104.svg') }}"
                class="absolute bottom-0 right-0 z-0 object-cover" alt="">
            <img src="{{ asset('client/img/tantangan/Group 2103.svg') }}"
                class="absolute left-0 z-0 object-cover -bottom-4" alt="">
        </header>
    </div>

    <!-- Kontent Tantangan -->
    <div class="w-full h-full px-12 py-6 mt-4" id="konten-tantangan">
        <div class="relative flex flex-col items-start justify-center w-full gap-6 p-6 overflow-hidden bg-white rounded-2xl">
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

    <div class="w-full h-full px-24 py-6 mt-4">
        <footer
            class="bg-white shadow-lg rounded-[30px] grid xl:grid-cols-2 gap-12 place-items-center h-max justify-center p-16 transition-all ease-out duration-300">
            @include ('components.footer')
        </footer>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const scrollButton = document.getElementById("to-konten-tantangan");
            const targetSection = document.getElementById("konten-tantangan");

            scrollButton.addEventListener("click", function (event) {
                event.preventDefault(); // Mencegah navigasi default
                targetSection.scrollIntoView({ behavior: "smooth", block: "start" });
            });
        });
    </script>
</body>

</html>