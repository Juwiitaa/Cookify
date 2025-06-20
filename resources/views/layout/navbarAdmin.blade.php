<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #bc3333; color: white;">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('images/logo1.png') }}" alt="" width="60" height="auto">
                </div>
                <div class="sidebar-brand-text mx-3">Cookify</div>
            </a>

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

            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKelolaResep"
                    aria-expanded="true" aria-controls="collapseKelolaResep">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Resep</span>
                </a>
                <div id="collapseKelolaResep" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilihan</h6>
                        <a class="collapse-item" href="{{ route('lihatResep') }}">Lihat resep</a>
                        <a class="collapse-item" href="{{ route('tambahResep') }}">Tambah resep</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKelolaKategori"
                    aria-expanded="true" aria-controls="collapseKelolaKategori">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Kategori</span>
                </a>
                <div id="collapseKelolaKategori" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilihan</h6>
                        <a class="collapse-item" href="{{ route('lihatKategori') }}">Lihat Kategori</a>
                        <a class="collapse-item" href="{{ route('tambahKategori') }}">Tambah Kategori</a>
                    </div>
                </div>
            </li>
            

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKelolaPengguna"
                    aria-expanded="true" aria-controls="collapseKelolaPengguna">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Pengguna</span>
                </a>
                <div id="collapseKelolaPengguna" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilihan</h6>
                        <a class="collapse-item" href="{{ route('lihatPengguna') }}">Lihat Pengguna</a>
                    </div>
                </div>
            </li>
            
            <hr class="sidebar-divider">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>