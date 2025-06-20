@extends('master')

@section('title', 'Jelajahi Resep')

@section('page')

    <div class="container-fluid">

        <div class="container my-4">

            {{-- <form class="d-none d-sm-inline-block mr-auto my-2 mb-5 my-md-0 mw-100 navbar-search" style="padding-bottom: 20px;">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-light" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form> --}}

            <div class="d-flex mb-2 gap-2 flex-wrap">
                @foreach ($kategori as $kategori)
                    <a href="{{ route('resep', ['kategori' => $kategori->id]) }}" class="btn mr-2 {{ request('kategori') == $kategori->id ? 'btn-dark' : '' }}" style="background-color: #bc3333; color:white;">
                        {{ $kategori->nama_kategori }}
                    </a>
                @endforeach
            </div>

            <h4 class="fw-bold mb-3">Rekomendasi Resep</h4>
            @foreach ($resep as $rsp)
            <div class="card mb-3 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{ asset('storage/'.$rsp->photo) }}" class="img-fluid rounded-start h-100" alt="Resep" style="object-fit: cover;">
                    </div>
                    <div class="col-md-9 d-flex align-items-center">
                        <div class="card-body d-flex justify-content-between align-items-center w-100">
                            <div>
                                <h5 class="card-title mb-1">{{ $rsp->judul }}</h5>
                                <span class="badge mb-1" style="background-color: #bc3333; color: white;">{{ $rsp->kategori->nama_kategori }}</span>
                                <p class="card-text fw-semibold mb-1" style="max-width: 60vw;">
                                    {{ $rsp->description }}
                                </p>
                                <small class="text-muted">Oleh: {{ $rsp->user->name }}</small>
                                <div class="mt-2 d-flex gap-3">
                                    <i class="bi bi-heart"></i>
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('detailResep', $rsp->id) }}" class="btn btn-danger btn-sm btn-icon-text me-3">
                                    <i class="typcn typcn-edit btn-icon-prepend"></i> Lihat Detail
                                    </a>
                                    
                                </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="{js/demo/chart-pie-demo.js"></script>
@endsection


