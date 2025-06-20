@extends('master')

@section('title', 'Statistik Resep')

@section('page')
<div class="container-fluid">

    <h3 class="fw-bold mb-4 text-dark">Dashboard Statistik</h3>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow border-left-danger p-2">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Resep</div>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_mentee }}</div> --}}
                        <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                    </div>
                    <div class="icon bg-danger text-white rounded-circle p-4">
                        <i class="fas fa-utensils"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow border-left-danger p-2">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Disimpan</div>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_mentee }}</div> --}}
                        <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                    </div>
                    <div class="icon bg-danger text-white rounded-circle p-4">
                        <i class="fas fa-bookmark"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow border-left-danger p-2">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Dilihat</div>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_mentee }}</div> --}}
                        <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                    </div>
                    <div class="icon bg-danger text-white rounded-circle p-4">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
<script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="{js/demo/chart-pie-demo.js"></script>
</script>
@endsection
