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
    <div class="container flex w-full gap-4 mb-8">
        {{-- DATA PENJUALAN LAYANAN PERBULAN --}}
        <div class="pt-6 px-2 w-[70%] pb-0 border rounded-md">
            <div id="bar-chart"></div>
        </div>
        {{-- END DATA PENJUALAN LAYANAN PERBULAN --}}

        {{-- NOTIFIKASI PASIEN BARU --}}
        <div class="rounded-lg border pt-6 px-2 w-[30%] flex flex-col">
            <h1 class="text-xl font-semibold text-center text-hitam-800">Notifikasi</h1>
            <div class="my-1 divider"></div>
            <div id="notifikasi-dropdown" class="grid w-full gap-2">
                @forelse($notifikasi as $notif)
                @empty
                @endforelse
            </div>
        </div>
        {{-- END NOTIFIKASI PASIEN BARU --}}
    </div>

    {{-- DATA RIWAYAT KONSULTASI --}}
    <div class="h-full overflow-x-auto border rounded-lg border-base-content/25">
        <div class="flex items-center justify-between w-full px-5 py-3 border-b">
            <h1 class="text-lg font-semibold">Riwayat Konsultasi</h1>
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
                        <button class="flex items-center gap-1 rounded-full btn btn-warning btn-soft btn-sm"
                            aria-label="Action button"><span class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                    <td>March 2, 2024</td>
                    <td>
                        <button class="flex items-center gap-1 rounded-full btn btn-warning btn-soft btn-sm"
                            aria-label="Action button"><span class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                    </td>
                </tr>
                <tr>
                    <td>Alice Johnson</td>
                    <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                    <td>March 3, 2024</td>
                    <td>
                        <button class="flex items-center gap-1 rounded-full btn btn-warning btn-soft btn-sm"
                            aria-label="Action button"><span class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                    </td>
                </tr>
                <tr>
                    <td>Bob Brown</td>
                    <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                    <td>March 4, 2024</td>
                    <td>
                        <button class="flex items-center gap-1 rounded-full btn btn-warning btn-soft btn-sm"
                            aria-label="Action button"><span class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- END DATA RIWAYAT KONSULTASI --}}
@endsection

@section('script')
    <script>
        let lastNotifId = null; // untuk menyimpan ID notifikasi terakhir

        function loadNotifikasi() {
            fetch('/dokter/notifikasi-terbaru') // harus return array of latest, misal 5 item
                .then(res => res.json())
                .then(data => {
                    if (!Array.isArray(data)) return;

                    const notifContainer = document.getElementById('notifikasi-dropdown');

                    // Cari notifikasi terbaru yang ID-nya belum pernah ditampilkan
                    const notifBaru = data.find(n => n.id !== lastNotifId);

                    if (notifBaru) {
                        lastNotifId = notifBaru.id; // update ID notifikasi terakhir

                        // Kosongkan container
                        notifContainer.innerHTML = '';

                        const createdAt = new Date(notifBaru.created_at);
                        const satuJamLalu = new Date(Date.now() - 60 * 1000);
                        const isBaru = createdAt > satuJamLalu;

                        const newNotif = document.createElement('div');
                        newNotif.className =
                            `flex dropdown-item m-0 p-2 items-center gap-2 w-max rounded-md transition-all duration-300 ${isBaru ? 'bg-biru-1' : ''}`;

                        newNotif.innerHTML = `
                        <div class="avatar avatar-away-bottom">
                            <div class="w-10 rounded-full">
                                <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png" alt="User Avatar" />
                            </div>
                        </div>
                        <div class="w-60 sm:w-60">
                            <h6 class="text-base font-medium text-hitam-800 notif-nama">${notifBaru.user?.nama_lengkap ?? 'Pasien Baru'}</h6>
                            <p class="text-xs text-hitam-500 notif-ket">Memesan layanan konsultasi Anda</p>
                        </div>
                    `;

                        notifContainer.appendChild(newNotif);
                    }
                })
                .catch(error => console.error('Error fetching notifications:', error));
        }

        loadNotifikasi();
        setInterval(loadNotifikasi, 30000); // 30 detik sekali
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
