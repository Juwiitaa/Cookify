<!-- Sidebar -->
        {{-- <ul class="navbar-nav bg-light sidebar sidebar-light accordion" id="accordionSidebar"> --}}
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #bc3333; color: white;">
        {{-- <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #bc3333; color: white; top: 0; left: 0; height: 100vh; background-color: #bc3333; color: white; overflow-y: auto;"> --}}

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('images/logo1.png') }}" alt="" width="60" height="auto">
                </div>
                <div class="sidebar-brand-text mx-3">Cookify</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Home</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('resep') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Jelajahi Resep</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('koleksi') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Koleksi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
