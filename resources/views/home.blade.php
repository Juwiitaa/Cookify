@extends('master')

@section('title', 'Home')

@section('page')

    

@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('theme') }}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('theme') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('theme') }}/js/demo/chart-pie-demo.js"></script>
@endsection


