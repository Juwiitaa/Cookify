@extends('master')

@section('title', 'Edit Kategori')

@section('page')

    <div class="container-fluid my-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow p-4">
                    <h4 class="fw-bold mb-3">Edit Kategori</h4>
                    <form method="POST" action="{{ route('updateKategori', $kategori->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_kategori" class="form-label">Nama Kategori</label>
                            <input class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}"></input>
                        </div>
                        <button type="submit" class="btn" style="background-color: #bc3333; color: white;">Simpan Kategori</button>
                        <a href="{{ route('lihatKategori') }}" class="btn btn-success btn-sm btn-icon-text me-3">
                            <i class="typcn typcn-edit btn-icon-prepend"></i> Batal
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="{js/demo/chart-pie-demo.js"></script>
@endsection