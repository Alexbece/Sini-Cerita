<div class="flex items-center gap-4 navbar-end">
    <div class="dropdown relative inline-flex [--auto-close:inside] [--offset:8] [--placement:bottom-end]">
        <button id="dropdown-scrollable" type="button" class="flex items-center dropdown-toggle" aria-haspopup="menu"
            aria-expanded="false" aria-label="Dropdown">
            <div class="avatar">
                <div class="size-9.5 rounded-full">
                    <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png" alt="avatar 1" />
                </div>
            </div>
        </button>
        <ul class="hidden dropdown-menu dropdown-open:opacity-100 min-w-60" role="menu" aria-orientation="vertical"
            aria-labelledby="dropdown-avatar">
            <li class="gap-2 dropdown-header">
                <div class="avatar">
                    <div class="w-10 rounded-full">
                        <img src="{{ asset('storage/' . Auth::user()->foto_profil) }}" alt="avatar" />
                    </div>
                </div>
                <div>
                    <h6 class="text-base font-semibold text-base-content">{{ Auth::user()->nama_lengkap }}</h6>
                    <small
                        class="text-base-content/50">{{ Auth::user()->role_id == 3 ? 'Admin' : 'Bukan Admin' }}</small>
                </div>
            </li>
            <li>
                <a class="dropdown-item" href="#">
                    <span class="icon-[tabler--user]"></span>
                    My Profile
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="#">
                    <span class="icon-[tabler--settings]"></span>
                    Settings
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="#">
                    <span class="icon-[tabler--receipt-rupee]"></span>
                    Billing
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="#">
                    <span class="icon-[tabler--help-triangle]"></span>
                    FAQs
                </a>
            </li>
            <li class="gap-2 dropdown-footer">
                <form method="POST" action="{{ route('logout-user') }}">
                    @csrf
                    <button class="btn btn-error btn-soft btn-block">
                        <span class="icon-[tabler--logout]"></span>
                        Sign out
                    </button>
                </form>

            </li>
        </ul>
    </div>
</div>
