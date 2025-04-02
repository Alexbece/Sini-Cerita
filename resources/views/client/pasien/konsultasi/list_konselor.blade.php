<div class="w-full">
    <div class="flex flex-col w-full gap-8">
        <div class="grid w-full gap-5 md:gap-3 place-items-center md:place-items-start md:grid-cols-2">
            @foreach ($dokters as $dokter)
                <div class="flex items-center gap-2 w-max">
                    <div class="overflow-hidden rounded-full sm:rounded-2xl">
                        <img src="{{ asset('storage/' . $dokter->foto_profil) }}"
                            class="w-[90px] h-[90px] sm:w-[125px] sm:h-[155px]" alt="">
                    </div>
                    <div class="grid gap-3">
                        <div class="grid gap-3">
                            @php
                                $gelar = $dokter->jenis_dokter === 'Psikolog' ? 'S.Psi' : 'Sp.KJ';
                            @endphp
                            <div class="h-max">
                                <h3 class="text-sm font-semibold sm:text-xl text-hitam-800">dr.
                                    {{ $dokter->nama_lengkap }}
                                    {{ $gelar }}</h3>
                                <p class="text-xs sm:text-sm text-hitam-500">{{ $dokter->jenis_dokter }}</p>
                            </div>
                            <div class="items-center hidden gap-2 px-2 py-1 rounded-lg sm:flex bg-hitam-100 w-max">
                                <i class='text-lg text-hitam-600 bx bxs-like'></i>
                                <p class="text-xs text-hitam-600">100%</p>
                            </div>
                            <div class="grid items-center justify-between gap-2 sm:flex">
                                <p class="text-xs text-black sm:text-sm">Rp
                                    {{ number_format($dokter->harga_layanan, 0, ',', '.') }} / Jam</p>
                                <a href="{{ route('detail.dokter', $dokter->id) }}"
                                    class="text-xs text-white border-none rounded-full hover:text-white sm:text-sm btn bg-biru-6 hover:bg-biru-5">Lihat
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
