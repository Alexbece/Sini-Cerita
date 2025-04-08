@extends('client.dokter.layout')

@section('dokter-content')
    {{-- HEADER CONTENT --}}
    <h1 class="text-3xl font-bold text-hitam-800">Pesanan Layanan</h1>

    {{-- MAIN CONTENT --}}
    <div class="border-base-content/25 mt-6 h-max rounded-lg overflow-x-auto border">
        <div class="w-full flex justify-between items-center px-5 py-3 border-b">
            @php
                $gelar = $dokter->jenis_dokter == 'Psikolog' ? 'S,Psi' : 'Sp,Kj';
            @endphp
            <h1 class="font-semibold text-hitam-800 text-lg">Pesanan Layanan - <span
                    class="badge badge-soft badge-success text-lg">{{ $dokter->nama_lengkap }}
                    {{ $gelar }}</span> </h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Pasien</th>
                    <th>Email</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                    <td>March 1, 2024</td>
                    <td>
                        <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                            aria-label="Action button"><span class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                    <td>March 2, 2024</td>
                    <td>
                        <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                            aria-label="Action button"><span class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                    </td>
                </tr>
                <tr>
                    <td>Alice Johnson</td>
                    <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                    <td>March 3, 2024</td>
                    <td>
                        <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                            aria-label="Action button"><span class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                    </td>
                </tr>
                <tr>
                    <td>Bob Brown</td>
                    <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                    <td>March 4, 2024</td>
                    <td>
                        <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                            aria-label="Action button"><span class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- END MAIN CONTENT --}}
@endsection
