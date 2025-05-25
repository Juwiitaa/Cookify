<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #bc3333; color: white;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('images/logo1.png') }}" alt="" width="60" height="auto">
        </div>
        <div class="sidebar-brand-text mx-3">Cookify</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Home -->
    <li class="nav-item">
        <a class="nav-link" href="{{ '/home' }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Home</span>
        </a>
    </li>

    <!-- Nav Item - Jelajahi Resep -->
    <li class="nav-item">
        <a class="nav-link" href="{{ '/jelajahiResep' }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Jelajahi Resep</span>
        </a>
    </li>

    <!-- Nav Item - Koleksi -->
    <li class="nav-item">
        <a class="nav-link" href="{{ '/koleksi' }}">
            <i class="fas fa-fw fa-bookmark"></i>
            <span>Koleksi</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Fitur khusus Kontributor -->
    <li class="nav-item">
        <a class="nav-link" href="{{ '/resep/create' }}">
            <i class="fas fa-fw fa-plus-circle"></i>
            <span>Upload Resep</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ '/resep/statistik' }}">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Statistik Resep</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ '/tutorial' }}">
            <i class="fas fa-fw fa-video"></i>
            <span>Video Tutorial</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
