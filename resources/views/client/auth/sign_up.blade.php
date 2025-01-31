<!DOCTYPE html>
<html lang="en">

@include ('_head')


<body class="flex items-center justify-center h-screen">
        <div class="flex items-center container-signup lg:flex-start lg:w-[1008px] bg-white">
            <div class="flex flex-col justify-center w-full h-full py-12 shadow-md shadow-4xl form-signup px-14">
                <span class="inline-block mt-2 text-lg font-semibold text-center text-biru-6 lg:hidden">Sini
                    Cerita.</span>
                <div class="flex flex-col items-center justify-center h-full gap-4">
                    <div class="flex flex-col items-center justify-center w-full gap-4">
                        <h1 class="mb-3 text-3xl font-bold text-hitam-800">Sign Up</h1>
                        <div class="flex flex-col items-center justify-center w-full gap-5">
                            <div class="w-full">
                                <input type="text" placeholder="Nama lengkap"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-white0 text-xs border-[1px]  border-hitam-200 px-3 bg-transparent  focus:outline-none">
                            </div>
                            <div class="w-full">
                                <input type="text" placeholder="No. telp"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-white0 text-xs border-[1px]  border-hitam-200 px-3 bg-transparent  focus:outline-none">
                            </div>
                            <div class="w-full">
                                <input type="text" placeholder="Email"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-white0 text-xs border-[1px]  border-hitam-200 px-3 bg-transparent  focus:outline-none">
                            </div>
                            <div class="relative w-full">
                                <input id="password" type="password" placeholder="Password"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-white0 text-xs border-[1px] border-hitam-200 px-3 pr-10 bg-transparent focus:outline-none">
                                <i id="togglePassword"
                                    class="absolute transform cursor-pointer right-3 top-3 bx bx-hide text-hitam-400"></i>
                            </div>
                            <div class="w-full text-center">
                                <div class="w-full transition-colors rounded-md bg-biru-6 hover:bg-biru-5">
                                    <a href="{{route ('login')}}"><button
                                        class="w-full font-jkt py-[10px] font-semibold text-white text-base px-4 bg-transparent focus:outline-none">Sign
                                        Up</button></a>
                                </div>
                                <p class="mt-2 text-xs text-hitam-400">Already have an account? <a href="{{route ('login')}}"
                                        class="text-xs text-biru-6 hover:text-biru-6">Login</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="grid gap-2 place-content-center place-items-center">
                        <p class="text-xs font-light text-hitam-400">or sign up with</p>
                        <button class="flex items-center gap-1 px-3 py-2 font-extrabold transition-all text-ld gap font-jkt bg-biru-2 hover:bg-biru-6 text-hitam-800 focus:outline-none rounded-xl"><i class='text-3xl bx bxl-google'></i> Google</button>
                    </div>
                </div>



                <div class="w-full text-center">
                    <p class="text-xs font-light text-hitam-400">I agree to abide by the Terms and Conditions and it's
                        Privacy
                        Policy.</p>
                </div>
            </div>

            <div class="lg:block relative hidden shadow-2xl rounded-[20px]">
                <span class="absolute top-0 right-0 text-2xl font-semibold text-white m-7">Sini
                    Cerita.</span>
                <p
                    class="absolute bottom-0 left-0 px-6 py-4 text-4xl font-semibold w-72  bg-hitam-600/40 backdrop-grayscale backdrop-blur-[2px] m-7 text-white rounded-2xl">
                    Sini Sehat, <br><span class="text-4xl text-biru-4">Sini Cerita</span>.</p>
                <img src="{{asset('client/img/s-b-vonlanthen-FaiZNiofP-U-unsplash 1.png')}}" alt=""
                    class="object-cover rounded-r-[20px]">
            </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        togglePassword.addEventListener('click', function () {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';

            this.classList.toggle('bx-hide');
            this.classList.toggle('bx-show-alt');
        })
    </script>
</body>

</html>