<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar - Sini Cerita</title>

    @include('layouts.partial.link')
</head>

<body class="flex items-center justify-center h-screen">
    <div class="flex items-center container-signup lg:flex-start lg:w-[1008px] bg-white">
        <div class="flex flex-col justify-center w-full h-full py-12 shadow-md shadow-4xl form-signup px-14">
            <span class="inline-block mt-2 mb-4 text-lg font-semibold text-center text-biru-6 lg:hidden">Sini
                Cerita.</span>
            <div class="flex flex-col items-center justify-center h-full gap-4">
                <div class="flex flex-col items-center justify-center w-full gap-4">
                    <h1 class="mb-3 text-3xl font-bold text-hitam-800">Daftar</h1>
                    <form action="{{ route('proses-signup-user') }}" method="POST" class="w-full">
                        @csrf
                        <div class="flex flex-col items-center justify-center w-full gap-3">
                            <div class="w-full">
                                <input type="text" name="nama_lengkap" placeholder="Nama lengkap"
                                    class="font-raleway w-full rounded-md py-[8px] font-light text-hitam-800 text-sm border-[1px] border-hitam-200 px-3 bg-transparent  focus:outline-none">
                                <span class="label">
                                    <span class="label-text-alt">
                                        @if ($errors->has('nama_lengkap'))
                                            <p class="mb-1 text-xs text-red-500">{{ $errors->first('nama_lengkap') }}
                                            </p>
                                        @endif
                                    </span>
                                </span>
                            </div>
                            <div class="w-full">
                                <input type="text" name="no_telp" placeholder="No. telp"
                                    class="font-raleway w-full rounded-md py-[8px] font-light text-hitam-800 text-sm border-[1px] border-hitam-200 px-3 bg-transparent  focus:outline-none">
                                <span class="label">
                                    <span class="label-text-alt">
                                        @if ($errors->has('no_telp'))
                                            <p class="mb-1 text-xs text-red-500">{{ $errors->first('no_telp') }}
                                            </p>
                                        @endif
                                    </span>
                                </span>
                            </div>
                            <div class="w-full">
                                <input type="email" name="email" placeholder="Email" autocomplete="email"
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
                                <input id="password" type="password" autocomplete="new-password" name="password"
                                    placeholder="Password"
                                    class="font-raleway w-full rounded-md py-[8px] font-light text-hitam-800 text-sm border-[1px] border-hitam-200 px-3 pr-10 bg-transparent focus:outline-none">
                                <i id="togglePassword"
                                    class="absolute transform cursor-pointer right-3 top-3 bx bx-hide text-hitam-400"></i>
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
                                        class="w-full font-jkt py-[10px] font-semibold text-white text-base px-4 bg-transparent focus:outline-none">Daftar</button>
                                </div>

                                <p class="mt-2 text-xs text-hitam-400">Sudah mempunyai akun? <a
                                        href="{{ route('login-user') }}"
                                        class="text-xs text-biru-6 hover:text-biru-6">Masuk</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex flex-col justify-between h-full">
                <div class="grid gap-2 mt-8 place-content-center place-items-center">
                    <p class="text-xs font-light text-hitam-400">atau daftar dengan</p>
                    <a href="/oauth/google">
                        <button
                            class="flex items-center gap-1 px-3 py-2 font-extrabold transition-all text-ld gap font-jkt bg-biru-2 hover:bg-biru-6 text-hitam-800 focus:outline-none rounded-xl"><i
                                class='text-3xl bx bxl-google'></i> Google</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="lg:block relative hidden shadow-2xl rounded-[20px]">
            <span class="absolute top-0 right-0 text-2xl font-semibold text-white m-7">Sini
                Cerita.</span>
            <p
                class="absolute bottom-0 left-0 px-6 py-4 text-4xl font-semibold w-72  bg-hitam-600/40 backdrop-grayscale backdrop-blur-[2px] m-7 text-white rounded-2xl">
                Sini Sehat, <br><span class="text-4xl text-biru-4">Sini Cerita</span>.</p>
            <img src="{{ asset('client/img/s-b-vonlanthen-FaiZNiofP-U-unsplash 1.png') }}" alt=""
                class="object-cover rounded-r-[20px]">
        </div>
    </div>


    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        togglePassword.addEventListener('click', function() {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';

            this.classList.toggle('bx-hide');
            this.classList.toggle('bx-show-alt');
        })
    </script>
</body>

</html>
