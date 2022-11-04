@extends('dashboard.layouts.app')
@section('title')
    {{ $title }}
@endsection
@push('css')
    <style>
        .gradient-custom {
            background: #f6d365;
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }
    </style>
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
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--================================= Page Title -->

    <div class="row mb-5">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-lg-8 mb-4 mb-lg-0">
                                <div class="card mb-3" style="border-radius: .5rem;">
                                    <div class="row g-0">
                                        <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                            <img src="{{ $user->image_path }}"
                                                alt="..." class="img-fluid my-5 brround" style="width: 80px;"
                                            />
                                            <h5>
                                                @if ($user->role_name == 'super_admin')
                                                    @lang('main.super_admin')
                                                @elseif($user->role_name == 'admin')
                                                    @lang('main.admin')
                                                @elseif($user->role_name == 'user')
                                                    @lang('main.user')
                                                @endif
                                            </h5>
                                            <i class="far fa-user fa-2x mb-5"></i>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body p-4">
                                                <h6>@lang('main.user_details')</h6>
                                                <hr class="mt-0 mb-4">
                                                <div class="row pt-1">
                                                    <div class="col-6 mb-3">
                                                        <h6>@lang('main.username')</h6>
                                                        <p class="label text-primary d-flex">{{ $user->first_name . ' ' . $user->last_name }}</p>
                                                    </div>
                                                    <div class="col-6 mb-3">
                                                        <h6>@lang('main.email')</h6>
                                                        <p class="label text-warning d-flexd">{{ $user->email }}</p>
                                                    </div>
                                                </div>
                                                <hr class="mt-0 mb-4">
                                                <div class="row pt-1">
                                                    <div class="col-6 mb-3">
                                                        <h6>@lang('main.status')</h6>
                                                        <p class="text-muted">
                                                            @if ($user->status == 'active')
                                                                <span class="label text-success d-flex">{{ $user->status }}</span>
                                                            @else
                                                                <span class="label text-danger d-flex">{{ $user->status }}</span>
                                                            @endif
                                                        </p>
                                                    </div>
                                                    <div class="col-6 mb-3">
                                                        <h6>@lang('main.created_at')</h6>
                                                        <p class="text-muted">
                                                            <span class="label text-info d-flex">{{ $user->created_at }}</span>
                                                        </p>
                                                    </div>

                                                    <div class="col-12 mb-3">
                                                        @if($user->id === auth()->user()->id)
                                                            <a href="{{ route('dashboard.users.showProfile', $user->id) }}"
                                                               class="btn btn-success btn-block" title="@lang('main.edit')">
                                                                <i class="fa fa-edit"> @lang('main.edit') </i></a>
                                                        @else
                                                            <a class="btn btn-success btn-block disabled"
                                                               title="@lang('main.edit')"><i class="fa fa-edit"> @lang('main.edit') </i></a>
                                                        @endif
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('dashboard_files/assets/js/modal.js') }}"></script>
@endpush
