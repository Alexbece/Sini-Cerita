<!DOCTYPE html>
<html lang="en">

@include ('_head')


<body>
    <div class="flex items-center justify-center w-full h-screen bg-hijau-300">
        <div class="flex items-center container-signup lg:flex-start lg:w-[1008px]">
            <div class="flex flex-col justify-center h-full py-12 shadow-2xl form-signup px-14">
                <span class="inline-block mt-2 text-lg font-semibold text-center text-accent lg:hidden">Sini
                    Cerita.</span>
                <div class="flex flex-col items-center justify-center h-full">
                    <div class="flex flex-col items-center justify-center w-full gap-4">
                        <h1 class="mb-3 text-3xl font-bold text-hitam-800">Sign Up</h1>
                        <div class="flex flex-col items-center justify-center w-full gap-5">
                            <div class="w-full">
                                <input type="text" placeholder="Nama lengkap"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-hitam-500 text-xs border-[1px]  border-hitam-200 px-4 bg-transparent  focus:outline-none">
                            </div>
                            <div class="w-full">
                                <input type="text" placeholder="No. telp"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-hitam-500 text-xs border-[1px]  border-hitam-200 px-4 bg-transparent  focus:outline-none">
                            </div>
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
                                <p class="mt-2 text-xs text-hitam-400">Already have an account? <a href=""
                                        class="text-accent hover:text-hijau-900">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full text-center">
                    <p class="text-xs font-light text-hitam-400">I agree to abide by the Terms and Conditions and it's
                        Privacy
                        Policy.</p>
                </div>
            </div>

            <div class="lg:block relative hidden shadow-2xl rounded-[20px]">
                <span class="absolute top-0 right-0 text-2xl font-semibold m-7 text-hitam-50 font-poppins">Sini
                    Cerita.</span>
                <p
                    class="absolute bottom-0 left-0 px-6 py-4 text-4xl font-semibold w-72  bg-hitam-600/40 backdrop-grayscale backdrop-blur-[2px] m-7 text-hitam-50 rounded-2xl">
                    Sini Sehat, <br><span class="text-hijau-300">Sini Cerita</span>.</p>
                <img src="{{asset('client/auth/sign_up/img/s-b-vonlanthen-FaiZNiofP-U-unsplash 1.png')}}" alt=""
                    class="object-cover rounded-r-[20px]">
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