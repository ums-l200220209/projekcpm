<style>
    .menu-active {
        color: black !important;
        font-weight: bold
    }
</style>
<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light shadow sticky-top">
    <div class="container">
        <img src="/img/CahayaMitraPratama.png" alt="AdminCMP Logo" style="width: 80px; height: 80px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('#') ? 'menu-active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'menu-active' : '' }}" href="#about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('client') ? 'menu-active' : '' }}" href="#client">Klien Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('best-seller') ? 'menu-active' : '' }}" href="#best-seller">Best
                        Seller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('services') ? 'menu-active' : '' }}" href="#services">Layanan</a>
                </li>
            </ul>

            <form class="d-flex" role="search">
                @auth
                    <a href="/admin/dashboard" class="btn btn-primary"><i class="fas fa-user"></i> Dashboard</a>
                @else
                    <a href="/login" class="btn btn-primary"><i class="fas fa-user"></i> Login</a>
                @endauth
            </form>
        </div>
    </div>
    </div>
</nav>
