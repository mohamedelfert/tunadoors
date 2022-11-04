@extends('dashboard.layouts.app')
@section('title')
    {{ $title }}
@endsection
@push('css')
    <link rel="stylesheet" href="">
@endpush
@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!--================================= Page Title -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">{{ $title }}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}" class="default-color">@lang('main.dashboard')</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--================================= Page Title -->

    <div class="row mb-5">
        <div class="col-xl-12">
            <div class="card">

                <div class="card-header mb-3">
                    <div class="box-header with-border">
                        <span style="display: block;margin-bottom:10px">@lang('main.users') : <small>( {{ $users->total() }} )</small></span>
                        <form action="{{ route('dashboard.users.index') }}" method="get">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="search" class="form-control" value="{{ request()->search }}"
                                           placeholder="@lang('main.search')">
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary btn-sm" title="@lang('main.search')">
                                        <i class="fa fa-search"></i></button>
                                    <a class="btn btn-danger btn-sm" href="{{ route('dashboard.users.index') }}"
                                       title="@lang('main.clear')">
                                        <i class="fa fa-eraser"></i></a>
                                    @if(auth()->user()->hasPermissionTo('user-create'))
                                        <a class="btn btn-primary btn-sm" href="{{ route('dashboard.users.create') }}"
                                           title="@lang('main.create')"><i class="fa fa-plus"></i></a>
                                    @else
                                        <a class="btn btn-primary btn-sm disabled" title="@lang('main.create')"><i class="fa fa-plus"></i></a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive hoverable-table">
                        @if($users->count() > 0)
                            <table class="table table-hover" id="example1" data-page-length='50' style=" text-align: center;">
                                <thead>
                                    <tr>
                                        <th class="wd-5p border-bottom-0">#</th>
                                        <th class="wd-15p border-bottom-0">@lang('main.username')</th>
                                        <th class="wd-20p border-bottom-0">@lang('main.email')</th>
                                        <th class="wd-20p border-bottom-0">@lang('main.image')</th>
                                        <th class="wd-15p border-bottom-0">@lang('main.status')</th>
                                        <th class="wd-15p border-bottom-0">@lang('main.role_name')</th>
                                        <th class="wd-10p border-bottom-0">@lang('main.control')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $index => $user)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $user->first_name . ' ' . $user->last_name}}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <image src="{{ $user->image_path }}" class="img-thumbnail"
                                                       alt="@lang('main.image')" style="width:70px;">
                                                </image>
                                            </td>
                                            <td>
                                                @if ($user->status == 'active')
                                                    <label class="badge badge-success">{{ $user->status }}</label>
                                                @else
                                                    <label class="badge badge-warning">{{ $user->status }}</label>
                                                @endif
                                            </td>

                                            <td>
                                                @if (!empty($user->getRoleNames()))
                                                    @foreach ($user->getRoleNames() as $v)
                                                        <label class="badge badge-secondary">{{ $v }}</label>
                                                    @endforeach
                                                @endif
                                            </td>

                                            <td>
                                                @if(auth()->user()->hasPermissionTo('user-edit'))
                                                    <a class="btn btn-primary btn-sm"
                                                       href="{{ route('dashboard.users.edit', $user->id) }}" title="@lang('main.edit')"><i
                                                            class="fa fa-edit"></i></a>
                                                @else
                                                    <a class="btn btn-sm btn-info disabled"
                                                       title="@lang('main.edit')"><i class="fas fa-pen"></i></a>
                                                @endif

                                                @if(auth()->user()->hasPermissionTo('user-delete'))
                                                    @if ($user->role_name !== 'super_admin')
                                                        @can('user-delete')
                                                                <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                                   data-toggle="modal" href="#delete{{ $user->id }}" title="@lang('main.delete')">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                        @endcan
                                                    @endif
                                                @else
                                                    @if ($user->role_name !== 'super_admin')
                                                        <a class="btn btn-sm btn-danger disabled"
                                                           title="@lang('main.delete')">
                                                            <i class="fas fa-trash"></i></a>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>

                                        <!-- Delete -->
                                        <div class="modal fade" id="delete{{ $user->id }}">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content modal-content-demo">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">{{trans('main.delete')}}</h6>
                                                        <button aria-label="Close" class="close" data-dismiss="modal"
                                                                type="button"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <form action="{{ route('dashboard.users.destroy', $user->id) }}" method="post">
                                                        {{ method_field('delete') }}
                                                        {{ csrf_field() }}
                                                        <div class="modal-body">
                                                            <p>{{trans('main.delete_msg')}}</p><br>
                                                            <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                                                            <input class="form-control" name="first_name" id="first_name" type="text"
                                                                   value="{{ $user->first_name .' '. $user->last_name }}" readonly>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">{{trans('main.close')}}</button>
                                                            <button type="submit"
                                                                    class="btn btn-danger">{{trans('main.confirm')}}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Delete -->

                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <table class="table table-hover" id="example1" data-page-length='50' style=" text-align: center;">
                                <thead>
                                    <tr>
                                        <th class="wd-5p border-bottom-0">#</th>
                                        <th class="wd-15p border-bottom-0">@lang('main.username')</th>
                                        <th class="wd-20p border-bottom-0">@lang('main.email')</th>
                                        <th class="wd-15p border-bottom-0">@lang('main.status')</th>
                                        <th class="wd-15p border-bottom-0">@lang('main.role_name')</th>
                                        <th class="wd-10p border-bottom-0">@lang('main.control')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="6" class="text-center text-danger">@lang('main.no_data_found')</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="{{ asset('dashboard_files/assets/js/modal.js') }}"></script>
@endpush
