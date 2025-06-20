<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route(Auth::user()->role . '.index') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-futbol"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Reservasi Lapangan</div>
    </a>

    <hr class="sidebar-divider my-0">

    @if(Auth::user()->role == 'admin')
        <!-- Admin Sidebar -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard Admin</span>
            </a>
        </li>

        <li class="nav-item">
               <a class="nav-link" href="{{ route('admin.lapangan.index') }}">
               <i class="fas fa-fw fa-futbol"></i>
               <span>Kelola Lapangan</span>
             </a>
          </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.user.index') }}">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Kelola Akun</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.reservasi.index') }}">
                <i class="fas fa-fw fa-calendar-alt"></i>
                <span>Semua Reservasi</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.pembayaran.index') }}">
                <i class="fas fa-fw fa-money-bill-wave"></i>
                <span>Semua Pembayaran</span>
            </a>
        </li>

    @elseif(Auth::user()->role == 'petugas')
        <!-- Petugas Sidebar -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('petugas.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard Petugas</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('petugas.reservasi.index') }}">
                <i class="fas fa-fw fa-clipboard-check"></i>
                <span>Verifikasi Reservasi</span>
            </a>
        </li>

    @elseif(Auth::user()->role == 'user')
        <!-- User Sidebar -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="fas fa-fw fa-home"></i>
                <span>Beranda</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.lapangan.index') }}">
                <i class="fas fa-fw fa-futbol"></i>
                <span>Lihat Lapangan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.reservasi.index') }}">
                <i class="fas fa-fw fa-calendar-plus"></i>
                <span>Reservasi</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.pembayaran.index') }}">
                <i class="fas fa-fw fa-wallet"></i>
                <span>Upload Bukti Transfer</span>
            </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('user.reservasi.create') }}">
            <i class="fas fa-fw fa-calendar-plus"></i>
            <span>Buat Reservasi</span>
        </a>

                </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Logout -->
    <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST" class="nav-link px-3">
            @csrf
            <button type="submit" class="btn btn-link text-white text-left">
                <i class="fas fa-fw fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </li>

</ul>
<!-- End of Sidebar -->
