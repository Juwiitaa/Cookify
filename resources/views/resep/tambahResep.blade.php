@extends('master')

@section('title', 'Tambah Resep')

@section('page')

    <div class="container-fluid my-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow p-4">
                    <h4 class="fw-bold mb-3">Tambah Resep Baru</h4>
                    <form action="{{ route('simpanResep') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Nama pengguna</label>
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        </div>
                        <div class="mb-3">
                            <label for="nama_kategori" class="form-label">Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" placeholder="Masukkan kategori resep">
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Resep</label>
                            <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul resep">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Singkat</label>
                            <textarea class="form-control" name="description" id="description" rows="2" placeholder="Tuliskan deskripsi singkat resep"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="bahan" class="form-label">Bahan-Bahan</label>
                            <textarea class="form-control" name="bahan" id="bahan" rows="2" placeholder="Tuliskan bahan-bahan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="steps" class="form-label">Langkah-Langkah</label>
                            <textarea class="form-control" name="steps" id="steps" rows="2" placeholder="Tuliskan langkah-langkah"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="photo" class="form-label">Upload Gambar Resep</label>
                            <input class="form-control" type="file" id="photo" name="photo">
                        </div>
                        <button type="submit" class="btn" style="background-color: #bc3333; color: white;">Simpan Resep</button>
                    </form>
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