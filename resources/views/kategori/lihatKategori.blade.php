@extends('master')

@section('title', 'Daftar Resep')

@section('page')

<div class="container-fluid">
    <div class="container my-4">
        <h4 class="fw-bold mb-3">Kategori Anda</h4>
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <a href="{{ route('tambahKategori') }}" class="btn btn-danger mb-3">
                <i class="fas fa-plus-circle me-1"></i> Tambah Kategori
            </a>
        </div>
        {{-- <div class="card mb-3 shadow-sm">
                <div class="row g-0"> --}}
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                {{-- <div class="table-responsive pt-3"> --}}
                <table class="table table-striped project-orders-table">
                    <thead>
                    <tr>
            
                        <th>Nama_Kategori</th>
                        <th>Aksi</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($kategori as $kg)
                    <tr>
                        <td>{{ $kg->nama_kategori }}</td>
                        <td>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('editKategori', $kg->id) }}" class="btn btn-success btn-sm btn-icon-text me-3">
                            <i class="typcn typcn-edit btn-icon-prepend"></i> Edit
                            </a>
                            <form action="{{ route('hapusKategori', $kg->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="typcn typcn-trash btn-icon-prepend"></i> Delete
                            </button>
                            </form>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
                    
        </div>
            </div>
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
