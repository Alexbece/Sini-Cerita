<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk - Sini Cerita</title>

    @include('layouts.partial.link')
</head>

<body class="flex items-center justify-center h-screen">
    <div class="flex items-center container-login lg:w-[1008px] rounded-[20px]">

        <div class="relative hidden h-full shadow-2xl lg:block rounded-l-2xl">
            <span class="absolute top-0 left-0 text-2xl font-semibold text-white m-7 font-jkt">Sini
                Cerita.</span>
            <p class="absolute bottom-0 right-0 text-4xl font-bold text-right text-white m-7 rounded-2xl text-wrap">
                Mari sehat <br>dengan<br>bercerita.</p>


            <img src="{{ asset('client/img/trung-thanh-rzJ4TEQZe4M-unsplash 1.png') }}" alt=""
                class="object-cover h-full img-login">
        </div>

        <div class="flex flex-col justify-center w-full h-full py-12 shadow-2xl form-login px-14">
            <span class="inline-block mt-2 text-xl font-semibold text-center text-biru-6 lg:hidden">Sini
                Cerita.</span>
            <div class="flex flex-col items-center justify-center h-full gap-4">
                <div class="flex flex-col items-center justify-center w-full gap-4">
                    <h1 class="mb-3 text-3xl font-bold text-hitam-800">Masuk</h1>
                    <form action="{{ route('proses-login-dokter') }}" class="w-full" method="POST">
                        @csrf
                        <div class="flex flex-col items-center justify-center w-full gap-5">
                            <div class="w-full">
                                <input type="text" name="no_strpk" autocomplete="off" placeholder="No. STRPK"
                                    class="font-raleway w-full rounded-md py-[8px] font-light text-hitam-800 text-sm border-[1px] border-hitam-200 px-3 bg-transparent  focus:outline-none">
                                <span class="label">
                                    <span class="label-text-alt">
                                        @if ($errors->has('no_strpk'))
                                            <p class="mb-1 text-xs text-red-500">{{ $errors->first('no_strpk') }}</p>
                                        @endif
                                    </span>
                                </span>
                            </div>
                            <div class="w-full">
                                <input type="text" autocomplete="off" name="email" placeholder="Email"
                                    class="font-raleway w-full rounded-md py-[8px] font-light text-hitam-800 text-sm border-[1px] border-hitam-200 px-3 bg-transparent  focus:outline-none">
                                <span class="label">
                                    <span class="label-text-alt">
                                        @if ($errors->has('email'))
                                            <p class="mb-1 text-xs text-red-500">{{ $errors->first('email') }}
                                            </p>
                                        @endif
                                    </span>
                                </span>
                            </div>
                            <div class="relative w-full">
                                <input id="password" autocomplete="off" name="password" type="password"
                                    placeholder="Password"
                                    class="font-raleway w-full rounded-md py-[8px] font-light text-hitam-800 text-sm border-[1px] border-hitam-200 px-3 pr-10 bg-transparent focus:outline-none">
                                <i id="togglePassword"
                                    class="absolute cursor-pointer top-3 right-3 bx bx-hide text-hitam-400"></i>
                                <span class="label">
                                    <span class="label-text-alt">
                                        @if ($errors->has('password'))
                                            <p class="mb-1 text-xs text-red-500">{{ $errors->first('password') }}
                                            </p>
                                        @endif
                                    </span>
                                </span>
                            </div>
                            <div class="w-full text-center">
                                <div class="w-full transition-colors rounded-md bg-biru-6 hover:bg-biru-5">
                                    <button type="submit"
                                        class="w-full font-jkt py-[10px] font-semibold text-white text-sm px-4 bg-transparent focus:outline-none">Masuk</button>
                                </div>
                                <p class="mt-2 text-xs text-hitam-400">Belum mempunyai akun? <a
                                        href="{{ route('signup-dokter') }}"
                                        class="text-xs text-biru-6 hover:text-biru-6">Daftar</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');

            if (passwordInput && togglePassword) {
                togglePassword.addEventListener('click', function() {
                    const isPassword = passwordInput.type === 'password';
                    passwordInput.type = isPassword ? 'text' : 'password';

                    this.classList.toggle('bx-hide');
                    this.classList.toggle('bx-show-alt');
                });
            }
        }
    </script>
</body>

</html>
