@extends('client.dokter.layout')

@section('dokter-content')
    {{-- STATISTIC CARDS --}}
    <div class="flex w-full justify-between gap-6 mb-8">
        <div class="p-4 w-full rounded-lg shadow-xs overflow-hidden bg-white border shadow-md">
            <div class=" flex items-center">
                <div
                    class="p-3 rounded-full text-white {{ $dokter->status == 'online' ? 'bg-success' : ($dokter->status == 'sibuk' ? 'bg-warning' : ($dokter->status == 'offline' ? 'bg-error' : 'bg-error')) }} mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12.449 22.786h-.02c-1.45-.04-2.85-.37-4.16-.97a.746.746 0 0 1-.37-.99c.17-.38.62-.54.99-.37c1.13.52 2.33.79 3.58.83c.41.01.74.36.73.77s-.34.73-.75.73m3.92-.68c-.3 0-.58-.18-.7-.48c-.15-.39.04-.82.43-.97c1.16-.45 2.2-1.12 3.09-1.99c.3-.29.77-.28 1.06.02s.28.77-.02 1.06a10.7 10.7 0 0 1-3.59 2.31c-.09.04-.18.05-.27.05m-11-2.56c-.2 0-.4-.08-.55-.24c-.98-1.07-1.72-2.3-2.21-3.66a.75.75 0 1 1 1.41-.51a9.3 9.3 0 0 0 1.9 3.15c.28.3.26.78-.05 1.06c-.14.13-.33.2-.51.2zm16.58-2.87a.75.75 0 0 1-.69-1.04c.48-1.14.73-2.35.73-3.6c0-.41.34-.75.75-.75s.75.34.75.75c0 1.45-.28 2.86-.85 4.19c-.12.29-.4.46-.69.46zm-19.19-4.46h-.04a.756.756 0 0 1-.71-.79c.08-1.45.45-2.84 1.09-4.13c.18-.37.63-.52 1-.34s.52.63.34 1a9.1 9.1 0 0 0-.93 3.55c-.02.4-.35.71-.75.71m19.58-2.24c-.32 0-.62-.21-.72-.54a9.3 9.3 0 0 0-1.72-3.25a.76.76 0 0 1 .11-1.06a.76.76 0 0 1 1.06.11c.92 1.12 1.59 2.39 1.99 3.78a.746.746 0 0 1-.72.96m-16.14-4.75c-.21 0-.42-.09-.57-.26a.75.75 0 0 1 .08-1.06c1.09-.95 2.35-1.66 3.72-2.1c.39-.13.82.09.94.48c.13.39-.09.82-.48.95c-1.18.38-2.26.99-3.2 1.81c-.14.12-.32.18-.49.18m11.21-1.28a.73.73 0 0 1-.35-.09c-1.1-.58-2.28-.93-3.52-1.04a.75.75 0 0 1-.68-.81c.04-.41.4-.72.81-.68c1.44.12 2.82.53 4.1 1.2c.37.19.5.65.31 1.01c-.13.25-.39.4-.66.4z"
                            color="currentColor" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600">
                        Status Anda
                    </p>
                    <p class="text-lg font-semibold text-biru-6">
                        {{ $dokter->status == 'online' ? 'Online' : ($dokter->status == 'offline' ? 'Offline' : ($dokter->status == 'sibuk' ? 'Sedang Sesi' : 'Tidak Diketahui')) }}
                    </p>
                </div>
            </div>
            <div class="mt-3">
                <button aria-haspopup="dialog" aria-expanded="false" aria-controls="ubah-status-modal"
                    data-overlay="#ubah-status-modal" class="text-sm text-biru-5">Ubah Status</button>
            </div>
        </div>
        <div class="p-4 w-full rounded-lg shadow-xs overflow-hidden bg-white border shadow-md">
            <div class=" flex items-center">
                <div class="p-3 rounded-full text-green-500 dark:text-green-100 bg-green-100 dark:bg-green-500 mr-4">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600">
                        Total Saldo
                    </p>
                    <p class="text-lg font-semibold text-biru-6">
                        $ 46,760.89
                    </p>
                </div>
            </div>
            <div class="mt-3">
                <a href="#" class="text-sm text-biru-5">Lihat Semua</a>
            </div>
        </div>
        <div class="p-4 w-full rounded-lg shadow-xs overflow-hidden bg-white border shadow-md">
            <div class=" flex items-center">
                <div class="p-3 rounded-full text-orange-500 dark:text-orange-100 bg-orange-100 dark:bg-orange-500 mr-4">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600">
                        Total layanan
                    </p>
                    <p class="text-lg font-semibold text-biru-6">
                        6389
                    </p>
                </div>
            </div>
            <div class="mt-3">
                <a href="#" class="text-sm text-biru-5">Lihat Semua</a>
            </div>
        </div>
        <div class="p-4 w-full rounded-lg shadow-xs overflow-hidden bg-white border shadow-md">
            <div class=" flex items-center">
                <div class="p-3 rounded-full text-blue-500 dark:text-blue-100 bg-blue-100 dark:bg-blue-500 mr-4">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                        <path
                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600">
                        Rating
                    </p>
                    <p class="text-lg font-semibold text-biru-6">
                        70%
                    </p>
                </div>
            </div>
            <div class="mt-3">
                <a href="#" class="text-sm text-biru-5">Lihat Semua</a>
            </div>
        </div>
    </div>
    {{-- END STATISTIC CARDS --}}

    <div class="grid grid-cols-2 w-full h-max items-center gap-6">
        {{-- DATA PENJUALAN LAYANAN PERBULAN --}}
        <div class="pt-6 px-2 pb-0 border rounded-md">
            <div id="bar-chart"></div>
        </div>
        {{-- END DATA PENJUALAN LAYANAN PERBULAN --}}

        {{-- DATA RIWAYAT KONSULTASI --}}
        <div class="border-base-content/25 h-full rounded-lg overflow-x-auto border">
            <div class="w-full flex justify-between items-center px-5 py-3 border-b">
                <h1 class="font-semibold text-lg">Riwayat Konsultasi</h1>
                <a href="" class="text-sm font-medium text-biru-5">Lihat Semua</a>
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
                                aria-label="Action button"><span
                                    class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                        <td>March 2, 2024</td>
                        <td>
                            <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                                aria-label="Action button"><span
                                    class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Alice Johnson</td>
                        <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                        <td>March 3, 2024</td>
                        <td>
                            <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                                aria-label="Action button"><span
                                    class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bob Brown</td>
                        <td>{{ Str::limit('farrelyassar.k@gmail.com', 18) }}</td>
                        <td>March 4, 2024</td>
                        <td>
                            <button class="btn rounded-full btn-warning btn-soft btn-sm flex items-center gap-1"
                                aria-label="Action button"><span
                                    class="icon-[mdi--eye-outline] size-5"></span>Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- END DATA RIWAYAT KONSULTASI --}}
    </div>

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
                        <button type="submit"
                            class="btn bg-biru-6 hover:bg-biru-5 text-white border-none">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- END UBAH STATUS --}}
@endsection

@section('script')
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
