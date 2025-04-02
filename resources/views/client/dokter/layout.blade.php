<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Dashboard Dokter')</title>
    @include('layouts.partial.link')
</head>

<body class="dokter bg-white min-h-svh">
    <div class="flex flex-col h-svh w-full">
        <nav
            class="navbar bg-white border max-sm:rounded-box max-sm:shadow-sm sm:border-b border-base-content/25 relative">
            <button type="button" class="btn btn-text max-sm:btn-square sm:hidden me-2" aria-haspopup="dialog"
                aria-expanded="false" aria-controls="with-navbar-sidebar" data-overlay="#with-navbar-sidebar">
                <span class="icon-[tabler--menu-2] size-5"></span>
            </button>
            <div class="flex flex-1 items-center">
                <a class="text-hitam-800 text-xl font-semibold no-underline" href="#">
                    Sini Cerita
                </a>
            </div>
            <div class="navbar-end flex items-center gap-4">
                <div class="dropdown relative inline-flex [--auto-close:inside] [--offset:8] [--placement:bottom-end]">
                    <button id="dropdown-scrollable" type="button"
                        class="dropdown-toggle btn btn-text btn-circle dropdown-open:bg-base-content/10 size-10"
                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        <div class="indicator">
                            <span class="indicator-item bg-error size-2 rounded-full"></span>
                            <span class="icon-[tabler--bell] text-base-content size-5.5"></span>
                        </div>
                    </button>
                    <div class="dropdown-menu dropdown-open:opacity-100 hidden" role="menu"
                        aria-orientation="vertical" aria-labelledby="dropdown-scrollable">
                        <div class="dropdown-header justify-center">
                            <h6 class="text-base-content text-base">Notifications</h6>
                        </div>
                        <div
                            class="overflow-y-auto overflow-x-auto text-base-content/80 max-h-56 overflow-auto max-md:max-w-60">
                            <div class="dropdown-item">
                                <div class="avatar avatar-away-bottom">
                                    <div class="w-10 rounded-full">
                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png"
                                            alt="avatar 1" />
                                    </div>
                                </div>
                                <div class="w-60">
                                    <h6 class="truncate text-base">Charles Franklin</h6>
                                    <small class="text-base-content/50 truncate">Accepted your connection</small>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="avatar">
                                    <div class="w-10 rounded-full">
                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-2.png"
                                            alt="avatar 2" />
                                    </div>
                                </div>
                                <div class="w-60">
                                    <h6 class="truncate text-base">Martian added moved Charts & Maps task to the done
                                        board.
                                    </h6>
                                    <small class="text-base-content/50 truncate">Today 10:00 AM</small>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="avatar avatar-online-bottom">
                                    <div class="w-10 rounded-full">
                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-8.png"
                                            alt="avatar 8" />
                                    </div>
                                </div>
                                <div class="w-60">
                                    <h6 class="truncate text-base">New Message</h6>
                                    <small class="text-base-content/50 truncate">You have new message from
                                        Natalie</small>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="avatar avatar-placeholder">
                                    <div class="bg-neutral text-neutral-content w-10 rounded-full p-2">
                                        <span class="icon-[tabler--user] size-full"></span>
                                    </div>
                                </div>
                                <div class="w-60">
                                    <h6 class="truncate text-base">Application has been approved 🚀</h6>
                                    <small class="text-base-content/50 text-wrap">Your ABC project application has been
                                        approved.</small>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="avatar">
                                    <div class="w-10 rounded-full">
                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-10.png"
                                            alt="avatar 10" />
                                    </div>
                                </div>
                                <div class="w-60">
                                    <h6 class="truncate text-base">New message from Jane</h6>
                                    <small class="text-base-content/50 text-wrap">Your have new message from
                                        Jane</small>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="avatar">
                                    <div class="w-10 rounded-full">
                                        <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-3.png"
                                            alt="avatar 3" />
                                    </div>
                                </div>
                                <div class="w-60">
                                    <h6 class="truncate text-base">Barry Commented on App review task.</h6>
                                    <small class="text-base-content/50 truncate">Today 8:32 AM</small>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="dropdown-footer justify-center gap-1">
                            <span class="icon-[tabler--eye] size-4"></span>
                            View all
                        </a>
                    </div>
                </div>
                <div class="dropdown relative inline-flex [--auto-close:inside] [--offset:8] [--placement:bottom-end]">
                    <button id="dropdown-scrollable" type="button" class="dropdown-toggle flex items-center"
                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        <div class="avatar indicator relative">
                            <span
                                class="indicator-item {{ $dokter->status == 'online' ? 'bg-success' : ($dokter->status == 'sibuk' ? 'bg-warning' : ($dokter->status == 'offline' ? 'bg-error' : 'bg-error')) }} top-1 right-1 size-3 rounded-full"></span>
                            <div class="size-9.5 rounded-full">
                                <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-8.png" alt="avatar" />
                            </div>
                        </div>
                    </button>
                    <ul class="dropdown-menu dropdown-open:opacity-100 bg-white border hidden min-w-60" role="menu"
                        aria-orientation="vertical" aria-labelledby="dropdown-avatar">
                        <li class="dropdown-header gap-2">
                            <div class="avatar">
                                <div class="w-10 rounded-full">
                                    <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png" alt="avatar" />
                                </div>
                            </div>
                            <div>
                                <div class="flex gap-2 items-center">
                                    <h6 class="text-hitam-800 text-lg font-semibold">John Doe</h6>
                                    <span
                                        class="badge badge-soft {{ $dokter->status == 'online' ? 'badge-success' : ($dokter->status == 'offline' ? 'badge-error' : ($dokter->status == 'sibuk' ? 'badge-warning' : 'badge-error')) }} text-xs p-1">
                                        <span
                                            class="{{ $dokter->status == 'online' ? 'bg-success' : ($dokter->status == 'sibuk' ? 'bg-warning' : ($dokter->status == 'offline' ? 'bg-error' : 'bg-error')) }} inline-block size-2 rounded-full"></span>
                                        {{ $dokter->status == 'online' ? 'Online' : ($dokter->status == 'offline' ? 'Offline' : ($dokter->status == 'sibuk' ? 'Sedang Sesi' : 'Tidak Diketahui')) }}
                                    </span>
                                </div>

                                <small class="text-gray-500">{{ $dokter->jenis_dokter }}</small>
                            </div>
                        </li>
                        <li>
                            <a class="dropdown-item text-hitam-800 hover:text-hitam-800" href="#">
                                <span class="icon-[tabler--user]"></span>
                                My Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-hitam-800 hover:text-hitam-800" href="#">
                                <span class="icon-[tabler--settings]"></span>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-hitam-800 hover:text-hitam-800" href="#">
                                <span class="icon-[tabler--receipt-rupee]"></span>
                                Billing
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-hitam-800 hover:text-hitam-800" href="#">
                                <span class="icon-[tabler--help-triangle]"></span>
                                FAQs
                            </a>
                        </li>
                        <li class="dropdown-footer gap-2">
                            <a class="btn btn-error btn-soft btn-block" href="#">
                                <span class="icon-[tabler--logout]"></span>
                                Sign out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="flex h-full">
            <aside id="with-navbar-sidebar" class="h-full bg-white shadow-lg w-max sm:translate-x-0" role="dialog"
                tabindex="-1">
                <div class="drawer-body rounded-lg h-full min-w-64 px-4 pt-4">
                    <ul class="menu gap-1 bg-white p-0">
                        <li>
                            <a href="/dashboard-dokter"
                                class="text-biru-6 font-medium btn bg-biru-1 border-none  hover:bg-biru-1 hover:shadow-none hover:text-biru-6 flex justify-start shadow-none">
                                <span class="icon-[tabler--home] size-5"></span>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-hitam-800 font-medium btn bg-white border-none hover:bg-biru-1 hover:shadow-none hover:text-biru-6 flex justify-start shadow-none">
                                <span class="icon-[tabler--user] size-5"></span>
                                Riwayat Konsultasi
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-hitam-800 font-medium btn bg-white border-none hover:bg-biru-1 hover:shadow-none hover:text-biru-6 flex justify-start shadow-none">
                                <span class="icon-[tabler--message] size-5"></span>
                                Notifications
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-hitam-800 font-medium btn bg-white border-none hover:bg-biru-1 hover:shadow-none hover:text-biru-6 flex justify-start shadow-none">
                                <span class="icon-[tabler--mail] size-5"></span>
                                Email
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-hitam-800 font-medium btn bg-white border-none hover:bg-biru-1 hover:shadow-none hover:text-biru-6 flex justify-start shadow-none">
                                <span class="icon-[tabler--calendar] size-5"></span>
                                Calendar
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-hitam-800 font-medium btn bg-white border-none hover:bg-biru-1 hover:shadow-none hover:text-biru-6 flex justify-start shadow-none">
                                <span class="icon-[tabler--shopping-bag] size-5"></span>
                                Product
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-hitam-800 font-medium btn bg-white border-none hover:bg-biru-1 hover:shadow-none hover:text-biru-6 flex justify-start shadow-none">
                                <span class="icon-[tabler--login] size-5"></span>
                                Sign In
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-hitam-800 font-medium btn bg-white border-none hover:bg-biru-1 hover:shadow-none hover:text-biru-6 flex justify-start shadow-none">
                                <span class="icon-[tabler--logout-2] size-5"></span>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            {{-- CONTENT --}}
            <div class=" w-full p-4">
                @yield('dokter-content')
            </div>
        </div>
    </div>

    @yield('script')
</body>

</html>
