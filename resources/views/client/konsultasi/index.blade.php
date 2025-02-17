<!DOCTYPE html>
<html lang="en">
@include ('_head')

<body class="pageKonsultasi">
    <div
        class="grid w-full h-full grid-cols-2 px-6 pt-8 overflow-y-scroll lg:px-14 gap-y-3 gap-x-10 pb-28 bubblechatContainer place-items-center place-content-center 2xl:px-60">

        <div class="flex flex-col items-start justify-end w-full h-max bubblechatKonselor">
        </div>
        <div class="flex flex-col items-end justify-start w-full h-max bubblechatPasien">
            <p class="p-4 text-white h-max bg-biru-6 rounded-[20px] text-wrap">Lorem ipsum dolor sit amet.</p>
        </div>

        <div class="flex flex-col items-start justify-end w-full h-max bubblechatKonselor">
            <p class="p-4 text-white h-max bg-biru-6 rounded-[20px] text-wrap">Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="flex flex-col items-end justify-start w-full h-max bubblechatPasien">
        </div>

        <div class="flex flex-col items-start justify-end w-full h-max bubblechatKonselor">
            <p class="p-4 text-white h-max bg-biru-6 rounded-[20px] text-wrap">Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Necessitatibus aspernatur dolorem praesentium, incidunt quaerat,
                assumenda excepturi, dolore perspiciatis culpa nostrum quis nemo nisi consequatur cumque
                molestiae consectetur velit distinctio mollitia sint omnis repellat blanditiis maiores aliquam
                similique. Ab, quod incidunt.</p>
        </div>
        <div class="flex flex-col items-end justify-start w-full h-max bubblechatPasien">
        </div>

        <div class="flex flex-col items-start justify-end w-full h-max bubblechatKonselor">
        </div>
        <div class="flex flex-col items-end justify-start w-full h-max bubblechatPasien">
            <p class="p-4 text-white h-max bg-biru-6 rounded-[20px] text-wrap">Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Necessitatibus aspernatur dolorem praesentium, incidunt quaerat,
                assumenda excepturi, dolore perspiciatis culpa nostrum quis nemo nisi consequatur cumque
                molestiae consectetur velit distinctio mollitia sint omnis repellat blanditiis maiores aliquam
                similique. Ab, quod incidunt.</p>
        </div>

        <div class="flex flex-col items-start justify-end w-full h-max bubblechatKonselor">
        </div>
        <div class="flex flex-col items-end justify-start w-full h-max bubblechatPasien">
            <p class="p-4 text-white h-max bg-biru-6 rounded-[20px] text-wrap">Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Necessitatibus aspernatur dolorem praesentium, incidunt quaerat,
                assumenda excepturi, dolore perspiciatis culpa nostrum quis nemo nisi consequatur cumque
                molestiae consectetur velit distinctio mollitia sint omnis repellat blanditiis maiores aliquam
                similique. Ab, quod incidunt.</p>
        </div>

        <div class="flex flex-col items-start justify-end w-full h-max bubblechatKonselor">
            <p class="p-4 text-white h-max bg-biru-6 rounded-[20px] text-wrap">Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Necessitatibus aspernatur dolorem praesentium, incidunt quaerat,
                assumenda excepturi, dolore perspiciatis culpa nostrum quis nemo nisi consequatur cumque
                molestiae consectetur velit distinctio mollitia sint omnis repellat blanditiis maiores aliquam
                similique. Ab, quod incidunt.</p>
        </div>
        <div class="flex flex-col items-end justify-start w-full h-max bubblechatPasien">
        </div>
    </div>

    <div class="chatInput">
        <div class="flex items-center gap-3">
            <i class='text-2xl text-biru-6 bx bx-phone-call'></i>
            <i class='text-2xl text-biru-6 bx bxs-video'></i>
        </div>

        <input type="text" placeholder="Ketik pesan"
            class="font-raleway w-full h-full border-2 border-biru-4 shadow-md px-4 rounded-[18px]">
    </div>

    <button><a href="{{ URL::previous() }}"><i
                class='fixed p-2 text-3xl text-white rounded-full bx bx-left-arrow-alt top-5 left-5 h-max w-max bg-biru-6'></i></a></button>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const chatContainer = document.querySelector(".bubblechatContainer");

            // Auto-scroll ke bawah saat halaman dimuat
            chatContainer.scrollTop = chatContainer.scrollHeight;

            // Jika nanti ada pesan baru, bisa panggil fungsi ini lagi
            function scrollToBottom() {
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }

            // Contoh: auto-scroll ketika user mengetik (simulasi ada pesan baru)
            document.querySelector(".chatInput input").addEventListener("input", scrollToBottom);
        });

    </script>
</body>

</html>