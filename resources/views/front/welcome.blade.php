@extends('front.layouts.app')
@section('title')
    Dashboard Title Here
@endsection
@push('css')
    <link rel="stylesheet" href="">
@endpush
@section('content')
    <!--================================= Page Title -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Dashboard</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!--================================= Page Title -->

    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-header">
                    <h1>Page Title goes here</h1>
                </div>
                <div class="card-body">
                    <p>Page content goes here<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->

@endsection
@push('js')
    <script type="text/javascript"></script>
@endpush
