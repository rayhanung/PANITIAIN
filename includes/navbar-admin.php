<header class="navbar">
    <div class="navbar__inner">
        <a href="/PANITIAIN/pages/admin/dashboard.php" class="navbar__brand">
            <span>Panitiain</span>
        </a>

        <button class="navbar__toggle" type="button" aria-label="Buka menu" aria-expanded="false"
            aria-controls="navbar-menu">
            <svg class="icon-open" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                    fill="none" />
            </svg>
            <svg class="icon-close" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                    fill="none" />
            </svg>
        </button>

        <div class="navbar__menu" id="navbar-menu">
            <nav aria-label="Menu admin">
                <ul class="navbar__links">
                    <li><a href="/PANITIAIN/pages/admin/dashboard.php" class="<?= $halaman === 'dashboard' ? 'is-active' : '' ?>">Dashboard</a></li>
                    <li><a href="/PANITIAIN/pages/admin/akun.php" class="<?= $halaman === 'akun' ? 'is-active' : '' ?>">Kelola Akun</a></li>
                    <li><a href="/PANITIAIN/pages/admin/verifikasi.php" class="<?= $halaman === 'verifikasi' ? 'is-active' : '' ?>">Verifikasi Panitia</a></li>
                </ul>
            </nav>

            <div class="navbar__user">
                <div class="navbar__profile">
                    <div class="navbar__profile-text">
                        <span class="navbar__name">Nama Admin</span>
                    </div>
                </div>
                <a href="/PANITIAIN/login.html" class="navbar__logout">Keluar</a>
            </div>
        </div>
    </div>
</header>