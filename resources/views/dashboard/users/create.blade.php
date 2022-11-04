@extends('dashboard.layouts.app')
@section('title')
    {{ $title }}
@endsection
@push('css')
    <link rel="stylesheet" href="">
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
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.users.index') }}" class="default-color">@lang('main.users')</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--================================= Page Title -->

    <div class="row mb-5">
        <div class="col-lg-12 col-md-12">

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
                            <a class="btn btn-primary btn-sm" title="@lang('main.back')" href="{{ route('dashboard.users.index') }}">
                                <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form class="parsley-style-1" action="{{route('dashboard.users.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="row mb-3">
                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label for="first_name">@lang('main.first_name')<span class="text-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                       data-parsley-class-handler="#lnWrapper" id="first_name"
                                       name="first_name" value="{{old('first_name')}}" type="text" required>
                            </div>

                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label for="last_name">@lang('main.last_name')<span class="text-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                       data-parsley-class-handler="#lnWrapper" id="last_name"
                                       name="last_name" value="{{old('last_name')}}" type="text" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label for="image">@lang('main.image')</label>
                                <input class="form-control user_image" data-parsley-class-handler="#lnWrapper"
                                       name="image" id="image" type="file">

                                <div class="form-group mt-2">
                                    <img class="img-responsive image_preview" style="width:100px" alt="@lang('main.image')"
                                         src="{{ asset('uploads/users_images/default.png') }}">
                                </div>
                            </div>

                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label for="email">@lang('main.email')<span class="text-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20" id="email"
                                       data-parsley-class-handler="#lnWrapper"
                                       name="email"  value="{{old('email')}}" type="email" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label for="password">@lang('main.password')<span class="text-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                       name="password" id="password" type="password" required>
                            </div>

                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label for="password_confirmation">@lang('main.password_confirmation')<span class="text-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                       name="password_confirmation" id="password_confirmation" type="password" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-lg-6">
                                <label for="status" class="form-label">@lang('main.status')</label>
                                <select name="status" id="status" class="custom-select">
                                    <option value="">@lang('main.choose_status')</option>
                                    <option value="active" {{old('status') === 'active' ? 'selected' : ''}}>@lang('main.active')</option>
                                    <option value="deactivate" {{old('status') === 'deactivate' ? 'selected' : ''}}>@lang('main.deactivate')</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="role_name" class="form-label">@lang('main.role_name')</label>
                                <select name="role_name" id="role_name" class="custom-select">
                                    <option value="" selected disabled>@lang('main.choose_role')</option>
                                    @foreach($roles as $key => $value)
                                        <option value="{{ $key }}" {{old('role_name')}}> {{ str_replace('_',' ',ucfirst($value)) }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                            <button class="btn btn-success btn-block pd-x-20" type="submit">@lang('main.confirm')</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
@push('js')
    <script type="text/javascript">
        $('.user_image').change(function() {
            if(this.files && this.files[0]){
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image_preview').attr('src',e.target.result);
                }

                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>
@endpush
