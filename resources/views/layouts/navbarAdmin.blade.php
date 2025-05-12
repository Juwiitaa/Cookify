        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #bc3333; color: white;">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('images/logo1.png') }}" alt="" width="60" height="auto">
                </div>
                <div class="sidebar-brand-text mx-3">Cookify</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="{{ '/koleksi' }}">
                    <i class="fas fa-fw fa-bookmark"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="{{ '/home' }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Home</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ '/jelajahiResep' }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Jelajahi Resep</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ '/reels' }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reels</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ '/koleksi' }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Koleksi</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Resep</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilihan</h6>
                        <a class="collapse-item" href="buttons.html">Lihat resep</a>
                        <a class="collapse-item" href="buttons.html">Ubah resep</a>
                        <a class="collapse-item" href="cards.html">Hapus resep</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Pengguna</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilihan</h6>
                        <a class="collapse-item" href="buttons.html">Lihat resep</a>
                        <a class="collapse-item" href="buttons.html">Ubah resep</a>
                        <a class="collapse-item" href="cards.html">Hapus resep</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>
            
            <hr class="sidebar-divider">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        {{-- <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #bc3333; color: white;">
    <!-- Logo & Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('images/logo1.png') }}" alt="" width="60" height="auto">
        </div>
        <div class="sidebar-brand-text mx-3">Cookify</div>
    </a>

    <hr class="sidebar-divider">

    <!-- Navigasi Umum -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/resep">
            <i class="fas fa-book"></i>
            <span>Kelola Resep</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/statistik">
            <i class="fas fa-chart-bar"></i>
            <span>Statistik Resep</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Fitur Admin -->
    <li class="nav-item">
        <a class="nav-link" href="/pengguna">
            <i class="fas fa-users-cog"></i>
            <span>Kelola Pengguna</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/kategori">
            <i class="fas fa-list-alt"></i>
            <span>Kategori & Bahan</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link" href="/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>
</ul> --}}
