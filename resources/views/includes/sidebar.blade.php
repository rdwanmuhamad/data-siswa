<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="{{ asset('assets/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a href="{{ route('admin') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        {{-- <span class="caret"></span> --}}
                        {{-- <span class="badge badge-secondary">1</span> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}">
                        <i class="fas fa-file"></i>
                        <p>Data User</p>
                        {{-- <span class="badge badge-secondary">1</span> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('student.index') }}">
                        <i class="fas fa-file"></i>
                        <p>Data Siswa</p>
                        {{-- <span class="badge badge-secondary">1</span> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('teacher.index') }}">
                        <i class="fas fa-file"></i>
                        <p>Data Guru</p>
                        {{-- <span class="badge badge-secondary">1</span> --}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>