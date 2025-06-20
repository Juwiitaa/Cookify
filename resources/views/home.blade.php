@extends('master')

@section('title', 'Home')

@section('page')

    <div class="container-fluid">

        <div class="container my-4">
            {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> --}}

            <!-- Banner -->
            <div class="mb-4 p-4 bg-light shadow-sm rounded text-center" style="background-image: url('{{ asset('images/banner5.png') }}'); background-size: cover; background-position: center;">
                <h2 class="fw-bold text-danger">Temukan Resep Favoritmu <br><span class="text-danger">Sekarang!</span></h2>
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
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="{js/demo/chart-pie-demo.js"></script>
@endsection


