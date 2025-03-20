<button type="button" class="btn btn-text max-sm:btn-square sm:hidden" aria-haspopup="dialog" aria-expanded="false"
    aria-controls="logo-sidebar" data-overlay="#logo-sidebar">
    <span class="icon-[tabler--menu-2] size-5"></span>
</button>

<aside id="logo-sidebar"
    class="relative hidden h-full overlay sm:shadow-none sidebar overlay-open:translate-x-0 drawer drawer-start max-w-64 sm:flex sm:translate-x-0"
    role="dialog" tabindex="-1">
    <div class="drawer-header">
        <div class="flex items-center gap-3">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.6745 16.9224L12.6233 10.378C12.2167 9.85117 11.4185 9.8611 11.0251 10.3979L6.45728 16.631C6.26893 16.888 5.96935 17.0398 5.65069 17.0398H3.79114C2.9635 17.0398 2.49412 16.0919 2.99583 15.4336L11.0224 4.90319C11.4206 4.38084 12.2056 4.37762 12.608 4.89668L20.9829 15.6987C21.4923 16.3558 21.024 17.3114 20.1926 17.3114H18.4661C18.1562 17.3114 17.8638 17.1677 17.6745 16.9224ZM12.5866 15.5924L14.8956 18.3593C15.439 19.0105 14.976 20 14.1278 20H9.74075C8.9164 20 8.4461 19.0586 8.94116 18.3994L11.0192 15.6325C11.4065 15.1169 12.1734 15.0972 12.5866 15.5924Z"
                    fill="oklch(var(--p))" />
            </svg>
            <h3 class="text-xl font-semibold drawer-title">Sini Cerita</h3>
        </div>
    </div>
    <div class="px-2 drawer-body">
        <ul class="p-0 menu">
            <li>
                <a href="{{ route('dashboard-admin') }}">
                    <span class="icon-[tabler--home] size-5"></span>
                    Beranda
                </a>
            </li>

            <!-- All About Konselor Dropdown -->
            <li class="space-y-0.5">
                <a class="collapse-toggle collapse-open:bg-base-content/10" id="menu-konselor"
                    data-collapse="#menu-konselor-collapse">
                    <span class="icon-[healthicons--doctor-24px] size-5"></span>
                    Dokter Jiwa
                    <span
                        class="icon-[tabler--chevron-down] collapse-open:rotate-180 size-4 transition-all duration-300"></span>
                </a>
                <ul id="menu-konselor-collapse"
                    class="collapse hidden w-auto overflow-hidden transition-[height] duration-300"
                    aria-labelledby="menu-konselor">
                    <li>
                        <a href="{{ route('list-dokter') }}">
                            <span class="icon-[line-md--list] size-5"></span>
                            Daftar Dokter Jiwa
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dokter-terdaftar') }}">
                            <span class="icon-[mdi--register] size-5"></span>
                            Pendaftaran
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('daftar-klaim-saldo') }}">
                            <span class="icon-[icon-park-outline--funds] size-5"></span>
                            Klaim Saldo
                        </a>
                    </li>
                </ul>
            </li>
            <!-- All About Konselor Dropdown -->

            <!-- All About Artikel Dropdown -->
            <li class="space-y-0.5">
                <a class="collapse-toggle collapse-open:bg-base-content/10" id="menu-artikel"
                    data-collapse="#menu-artikel-collapse">
                    <span class="icon-[flowbite--book-outline] size-5"></span>
                    Artikel
                    <span
                        class="icon-[tabler--chevron-down] collapse-open:rotate-180 size-4 transition-all duration-300"></span>
                </a>
                <ul id="menu-artikel-collapse"
                    class="collapse hidden w-auto overflow-hidden transition-[height] duration-300"
                    aria-labelledby="menu-artikel">
                    <li>
                        <a href="{{ route('list-artikel') }}">
                            <span class="icon-[line-md--list] size-5"></span>
                            Daftar Artikel
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('add-artikel') }}">
                            <span class="icon-[gridicons--add] size-5"></span>
                            Tambah Artikel
                        </a>
                    </li>
                </ul>
            </li>
            <!-- All About Artikel Dropdown -->

            {{-- Daftar Tantangan --}}
            <li>
                <a href="/list-tantangan">
                    <span class="icon-[material-symbols--task] size-5"></span>
                    Daftar Tantangan
                </a>
            </li>

            {{-- Daftar User --}}
            <li>
                <a href="/list-user">
                    <span class="icon-[tabler--user] size-5"></span>
                    Daftar User
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon-[fluent--people-chat-16-filled] size-5"></span>
                    Riwayat Konsultasi
                </a>
            </li>
        </ul>
    </div>
</aside>
