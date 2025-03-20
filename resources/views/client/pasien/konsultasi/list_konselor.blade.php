<div class="w-full">

    <div class="flex flex-col gap-8 ">
        <div class="grid w-full grid-cols-2 gap-3">
            @foreach ($dokters as $dokter)
                <div class="flex items-center gap-2 w-max">
                    <div class="w-[125px] h-[155px] overflow-hidden rounded-2xl ">
                        <img src="{{ asset('storage/' . $dokter->foto_profil) }}" alt="">
                    </div>
                    <div class="grid gap-3">
                        <div class="grid gap-3">
                            @php
                                $gelar = $dokter->jenis_dokter === 'Psikolog' ? 'S.Psi' : 'Sp.KJ' 
                            @endphp
                            <div class="h-max">
                                <h3 class="text-xl font-semibold text-hitam-800">dr. {{ $dokter->nama_lengkap }} {{ $gelar }}</h3>
                                <p class="text-sm text-hitam-500">{{ $dokter->jenis_dokter }}</p>
                            </div>
                            <div class="flex items-center gap-2 px-2 py-1 rounded-lg bg-hitam-100 w-max">
                                <i class='text-lg text-hitam-600 bx bxs-like'></i>
                                <p class="text-xs text-hitam-600">100%</p>
                            </div>
                            <div class="flex items-center justify-between gap-2">
                                <p class="text-sm text-black">Rp {{ $dokter->harga_layanan }} / Jam</p>
                                <a href="{{ route('detail.dokter', $dokter->id) }}"
                                    class="px-3 py-2 text-sm font-medium text-white transition-all duration-300 ease-linear rounded-full hover:text-white bg-biru-6 hover:bg-biru-5 focus:outline-none">Lihat
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
