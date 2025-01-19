<!DOCTYPE html>
<html lang="en">

@include ('_head')


<body>
    <div class="flex items-center justify-center w-full h-screen bg-hijau-300">
        <div class="flex items-center container-login lg:w-[1008px] rounded-[20px]">

            <div class="relative hidden h-full shadow-2xl lg:block rounded-l-2xl">
                <span class="absolute top-0 left-0 text-2xl font-semibold m-7 text-hitam-50 font-poppins">Sini
                    Cerita.</span>
                <p class="absolute bottom-0 right-0 text-4xl font-bold text-right m-7 text-hitam-50 rounded-2xl text-wrap">
                    Mari sehat <br>dengan<br>.bercerita</p>

                <div class="absolute inset-0 bottom-0 bg-gradient-to-t from-black to-transparent h-1/2"></div>


                <img src="{{asset('client/auth/sign_up/img/trung-thanh-rzJ4TEQZe4M-unsplash 1.png')}}" alt=""
                    class="object-cover h-full img-login">
            </div>

            <div class="flex flex-col justify-center w-full h-full py-12 shadow-2xl form-login px-14">
                <span class="inline-block mt-2 text-xl font-semibold text-center text-accent lg:hidden">Sini
                    Cerita.</span>
                <div class="flex flex-col items-center justify-center h-full">
                    <div class="flex flex-col items-center justify-center w-full gap-4">
                        <h1 class="mb-3 text-3xl font-bold text-hitam-800">Login</h1>
                        <div class="flex flex-col items-center justify-center w-full gap-5">
                            <div class="w-full">
                                <input type="text" placeholder="Email"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-hitam-500 text-xs border-[1px]  border-hitam-200 px-4 bg-transparent  focus:outline-none">
                            </div>
                            <div class="relative w-full">
                                <input id="password" type="password" placeholder="Password"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-hitam-500 text-xs border-[1px] border-hitam-200 px-4 pr-10 bg-transparent focus:outline-none">
                                <i id="togglePassword"
                                    class="absolute transform -translate-y-1/2 cursor-pointer text- right-3 top-1/2 bx bx-hide text-hitam-400"></i>
                            </div>
                            <div class="w-full text-center">
                                <div class="w-full transition-colors rounded-md bg-accent hover:bg-hijau-600">
                                    <button
                                        class="w-full font-poppins py-[10px] font-semibold text-hitam-50 text-sm px-4 bg-transparent focus:outline-none">Sign
                                        Up</button>
                                </div>
                                <p class="mt-2 text-xs text-hitam-400">Don't have an account? <a href=""
                                        class="text-accent hover:text-hijau-900">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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