<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">HeroBiz</h1>
            <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home<br></a></li>
                <li><a href="{{ route('student') }}" class="{{ request()->is('/student*') ? 'active' : '' }}">Database
                        Siswa</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        @auth
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('admin') }}">Hi, {{ Auth::user()->name }}<br></a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        @endauth

        @guest
            <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
        @endguest

    </div>
</header>
