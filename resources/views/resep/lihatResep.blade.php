@extends('master')

@section('title', 'Daftar Resep')

@section('page')

<div class="container-fluid">
    <div class="container my-4">
        <h4 class="fw-bold mb-3">Resep Anda</h4>
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <a href="{{ route('tambahResep') }}" class="btn btn-danger mb-3">
                <i class="fas fa-plus-circle me-1"></i> Tambah Resep
            </a>
        </div>
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
                                <small class="text-muted">{{ $rsp->user->name }}</small>
                                <div class="mt-2 d-flex gap-3">
                            </div>

                            </div>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('editResep', $rsp->id) }}" class="btn btn-success btn-sm btn-icon-text me-3">
                                    <i class="typcn typcn-edit btn-icon-prepend"></i> Edit
                                    </a>
                                    <form action="{{ route('hapusResep', $rsp->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="typcn typcn-trash btn-icon-prepend"></i> Delete
                                    </button>
                                </form>
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
