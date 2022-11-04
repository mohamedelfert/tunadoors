@extends('dashboard.layouts.app')
@section('title')
    {{ $title }}
@endsection
@push('css')
    <link href="{{ asset('dashboard_files/assets/js/treeview/treeview.css') }}" rel="stylesheet" type="text/css"/>
@endpush
@section('content')

    <!--================================= Page Title -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">{{ $title }}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}" class="default-color">@lang('main.dashboard')</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.roles.index') }}" class="default-color">@lang('main.roles')</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--================================= Page Title -->

    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card mg-b-20">
                <div class="card-header mb-3">
                    <div class="box-header with-border">
                        <div class="pull-right">
                            <a class="btn btn-primary btn-sm" title="@lang('main.back')" href="{{ route('dashboard.roles.index') }}">
                                <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="col-lg-4">
                        <ul id="treeview1" style="list-style: none;">
                            <li><i class="fa fa-plus-circle text-primary"></i><a class="text-primary"> {{ ucfirst($role->name) }} - {{ ucfirst($role->display_name) }}</a>
                                <ul style="list-style: none;">
                                    @if(!empty($rolePermissions))
                                        @foreach($rolePermissions as $permission)
                                            <li>{{ $permission->name }} - {{ $permission->display_name }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="{{ asset('dashboard_files/assets/js/treeview/treeview.js') }}"></script>
@endpush
