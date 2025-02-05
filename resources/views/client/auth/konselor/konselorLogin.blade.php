<!DOCTYPE html>
<html lang="en">
    @include ('_head')
<body>
<!DOCTYPE html>
<html lang="en">

@include ('_head')


<body class="flex items-center justify-center h-screen">
        <div class="flex items-center container-login lg:w-[1008px] rounded-[20px]">

            <div class="relative hidden h-full shadow-2xl lg:block rounded-l-2xl">
                <span class="absolute top-0 left-0 text-2xl font-semibold text-white m-7 font-jkt">Sini
                    Cerita.</span>
                <p
                    class="absolute bottom-0 right-0 text-4xl font-bold text-right text-white m-7 rounded-2xl text-wrap">
                    Mari sehat <br>dengan<br>bercerita.</p>


                <img src="{{asset('client/img/trung-thanh-rzJ4TEQZe4M-unsplash 1.png')}}" alt=""
                    class="object-cover h-full img-login">
            </div>

            <div class="flex flex-col justify-center w-full h-full py-12 shadow-2xl form-login px-14">
                <span class="inline-block mt-2 text-xl font-semibold text-center text-biru-6 lg:hidden">Sini
                    Cerita.</span>
                <div class="flex flex-col items-center justify-center h-full gap-4">
                    <div class="flex flex-col items-center justify-center w-full gap-4">
                        <h1 class="mb-3 text-3xl font-bold text-center text-hitam-800">Login sebagai konselor</h1>
                        <div class="flex flex-col items-center justify-center w-full gap-5">
                            <div class="w-full">
                                <input type="text" placeholder="Email"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-white0 text-xs border-[1px]  border-hitam-200 px-3 bg-transparent  focus:outline-none">
                            </div>
                            <div class="w-full">
                                <input type="password" placeholder="No. STR"
                                    class="font-raleway w-full rounded-md py-[10px] font-light text-white0 text-xs border-[1px] border-hitam-200 px-3 pr-10 bg-transparent focus:outline-none">
                            </div>
                            <div class="w-full text-center">
                                <div class="w-full transition-colors rounded-md bg-biru-6 hover:bg-biru-5">
                                    <a href="{{route('home')}}"><button
                                        class="w-full font-jkt py-[10px] font-semibold text-white text-sm px-4 bg-transparent focus:outline-none">Login</button></a>
                                </div>
                                <p class="mt-2 text-xs text-hitam-400">Belum punya akun konselor? <a href="{{route ('signup')}}"
                                        class="text-xs text-biru-6 hover:text-biru-6">Daftar jadi konselor.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</body>

</html>
</body>
</html>