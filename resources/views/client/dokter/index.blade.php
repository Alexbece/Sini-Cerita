@extends('client.dokter.layout')

@php
    use App\Models\Pembayaran;

    $notifikasi = [];

    if (auth()->guard('dokter')->check()) {
        $dokter = auth()->guard('dokter')->user();

        $notifikasi = Pembayaran::with('user')
            ->where('dokter_id', $dokter->id)
            ->where('status', 'paid')
            ->latest()
            ->take(5)
            ->get();
    }
@endphp

@section('dokter-content')
    <div class="w-full container gap-4 flex mb-8">
        {{-- DATA PENJUALAN LAYANAN PERBULAN --}}
        <div class="pt-6 px-2 w-[70%] pb-0 border rounded-md">
            <div id="bar-chart"></div>
        </div>
        {{-- END DATA PENJUALAN LAYANAN PERBULAN --}}

        {{-- NOTIFIKASI PASIEN BARU --}}
        <div class="rounded-lg border pt-6 px-2 w-[30%] flex flex-col">
            <h1 class="text-center text-hitam-800 font-semibold text-xl">Notifikasi</h1>
            <div class="divider my-1"></div>
            <div id="notifikasi-dropdown" class="grid gap-2 w-full">
                @forelse($notifikasi as $notif)
                @empty
                @endforelse
            </div>
        </div>
        {{-- END NOTIFIKASI PASIEN BARU --}}
    </div>

    {{-- DATA RIWAYAT KONSULTASI --}}
    <div class="border-base-content/25 h-full rounded-lg overflow-x-auto border">
        <div class="w-full flex justify-between items-center px-5 py-3 border-b">
            <h1 class="font-semibold text-lg">Riwayat Konsultasi</h1>
            <a href="/riwayat-konsultasi-dokter" class="text-sm font-medium text-biru-5">Lihat Semua</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
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
    {{-- END DATA RIWAYAT KONSULTASI --}}

    {{-- MODAL --}}
    {{-- UBAH STATUS --}}
    <div id="ubah-status-modal" class="overlay modal overlay-open:opacity-100 overlay-open:duration-300 modal-middle hidden"
        role="dialog" tabindex="-1">
        <div class="modal-dialog overlay-open:opacity-100 overlay-open:duration-300">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h3 class="modal-title text-hitam-800">Ubah Status</h3>
                    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close"
                        data-overlay="#ubah-status-modal">
                        <span class="icon-[tabler--x] size-4"></span>
                    </button>
                </div>
                <form action="{{ route('changeStatus') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <ul
                            class="border-base-content/25 divide-base-content/25 rounded-box flex w-full flex-col border *:w-full *:cursor-pointer max-sm:divide-y sm:flex-row sm:divide-x">
                            <li>
                                <label class="flex items-center gap-2 p-3">
                                    <input type="radio" name="status" value="online"
                                        class="radio radio-info bg-white ms-3"
                                        @if ($dokter->status == 'online') disabled @endif
                                        @if ($dokter->status != 'offline') checked @endif />
                                    <span
                                        class="label-text {{ $dokter->status == 'online' ? 'text-gray-300' : 'text-hitam-800' }}">
                                        Online
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-2 p-3">
                                    <input type="radio" name="status" value="offline"
                                        class="radio radio-info bg-white ms-3"
                                        @if ($dokter->status == 'offline') disabled @endif
                                        @if ($dokter->status != 'online') checked @endif />
                                    <span
                                        class="label-text {{ $dokter->status == 'offline' ? 'text-gray-300' : 'text-hitam-800' }}">
                                        Offline
                                    </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-soft btn-secondary"
                            data-overlay="#ubah-status-modal">Close</button>
                        <button type="submit" class="btn bg-biru-6 hover:bg-biru-5 text-white border-none">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END UBAH STATUS --}}
@endsection

@section('script')
    <script>
        // Fungsi untuk mengambil notifikasi terbaru
        function loadNotifikasi() {
            fetch('/dokter/notifikasi-terbaru')
                .then(res => res.json())
                .then(data => {
                    const notifContainer = document.getElementById('notifikasi-dropdown');
                    notifContainer.innerHTML = ''; // reset

                    if (data.length > 0) {
                        data.forEach(notif => {
                            const newNotif = document.createElement('div');
                            newNotif.className = 'flex dropdown-item m-0 p-2 items-center gap-2 w-max';

                            newNotif.innerHTML = `
            <div class="avatar avatar-away-bottom">
                <div class="w-10 rounded-full">
                    <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png" alt="User Avatar" />
                </div>
            </div>
            <div class="w-60 sm:w-60">
                <h6 class="text-hitam-800 font-medium text-base notif-nama">${notif.user.nama_lengkap ?? 'Pasien Baru'}</h6>
                <p class="text-hitam-500 text-xs notif-ket">Memesan layanan konsultasi Anda</p>
            </div>
        `;

                            notifContainer.appendChild(newNotif);
                        });
                    } else {
                        notifContainer.innerHTML = `
            <div class="text-center text-gray-400 text-sm break-words">Tidak ada notifikasi baru.</div>
    `;
                    }
                })
                .catch(error => console.error('Error fetching notifications:', error));
        }


        loadNotifikasi();

        setInterval(loadNotifikasi, 30000);
    </script>
    <script>
        const chartConfig = {
            series: [{
                name: "Sales",
                data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
            }, ],
            chart: {
                type: "bar",
                height: 340,
                toolbar: {
                    show: false,
                },
            },
            title: {
                show: "",
            },
            dataLabels: {
                enabled: false,
            },
            colors: ["#4BB5C1"],
            plotOptions: {
                bar: {
                    columnWidth: "40%",
                    borderRadius: 2,
                },
            },
            xaxis: {
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
                labels: {
                    style: {
                        colors: "#616161",
                        fontSize: "12px",
                        fontFamily: "inherit",
                        fontWeight: 400,
                    },
                },
                categories: [
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
            },
            yaxis: {
                labels: {
                    style: {
                        colors: "#616161",
                        fontSize: "12px",
                        fontFamily: "inherit",
                        fontWeight: 400,
                    },
                },
            },
            grid: {
                show: true,
                borderColor: "#dddddd",
                strokeDashArray: 5,
                xaxis: {
                    lines: {
                        show: true,
                    },
                },
                padding: {
                    top: 5,
                    right: 20,
                },
            },
            fill: {
                opacity: 0.8,
            },
            tooltip: {
                theme: "dark",
            },
        };

        const chart = new ApexCharts(document.querySelector("#bar-chart"), chartConfig);

        chart.render();
    </script>
@endsection
