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

{{--            @if (count($errors) > 0)--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                    <strong>@lang('main.error')</strong>--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}

            <div class="card">
                <div class="card-header mb-3">
                    <div class="box-header with-border">
                        <div class="pull-right">
                            <a class="btn btn-primary btn-sm" title="@lang('main.back')" href="{{ route('dashboard.roles.index') }}">
                                <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    {!! Form::model($role, ['method' => 'PATCH','route' => ['dashboard.roles.update', $role->id]]) !!}
                    <div class="card-body">
                        <div class="row row-sm mg-b-20">
                            <div class="col-lg-6">
                                <p> {{ trans('main.role_name') }} </p>
                                {!! Form::text('name', old('name'), array('class' => 'form-control','required'=> 'required')) !!}
                            </div>
                            <div class="col-lg-6">
                                <p> {{ trans('main.role_display_name') }} </p>
                                {!! Form::text('display_name', old('display_name'), array('class' => 'form-control','required'=> 'required')) !!}
                            </div>
                        </div>
                        <hr>
                        <div class="col-lg-4">
                            <ul id="treeview1" style="list-style: none;">
                                <li><i class="fa fa-plus-circle text-primary"></i><a class="text-primary"> {{ trans('main.roles_list') }} </a>
                                    <ul style="list-style: none;">
                                        <li>
                                            @foreach($permissions as $permission)
                                                <label>{{ Form::checkbox('permissions[]', $permission->id, in_array($permission->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                                    {{ $permission->name }}
                                                </label>
                                            @endforeach
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-block">{{trans('main.confirm')}}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="{{ asset('dashboard_files/assets/js/treeview/treeview.js') }}"></script>
@endpush
