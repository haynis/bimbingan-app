<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('mahasiswa*') ? 'active' : '' }}" href="/mahasiswa">
                    <span data-feather="users"></span>
                    Data Mahasiswa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dosen*') ? 'active' : '' }}" href="/dosen">
                    <span data-feather="users"></span>
                    Data Dosen
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('jadwal*') ? 'active' : '' }}" href="/jadwal">
                    <span data-feather="calendar"></span>
                    Jadwal Bimbingan
                </a>
            </li>
        </ul>
    </div>
</nav>