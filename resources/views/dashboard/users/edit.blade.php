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
{{--                    <strong>خطا</strong>--}}
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
                    {!! Form::model($user, ['method' => 'PATCH','files'=>true,'route' => ['dashboard.users.update', $user->id]]) !!}

                    <div class="row mb-3">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            <label>@lang('main.first_name')<span class="tx-danger">*</span></label>
                            {!! Form::text('first_name', old('first_name'), array('class' => 'form-control','required')) !!}
                        </div>

                        <div class="parsley-input col-md-6" id="fnWrapper">
                            <label>@lang('main.last_name')<span class="tx-danger">*</span></label>
                            {!! Form::text('last_name', old('last_name'), array('class' => 'form-control','required')) !!}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label>@lang('main.email')<span class="tx-danger">*</span></label>
                            {!! Form::text('email', old('email'), array('class' => 'form-control','required')) !!}
                        </div>

                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label>@lang('main.image')</label>
                            {!! Form::file('image', array('class' => 'form-control user_image')) !!}

                            <div class="form-group mt-2">
                                <img class="img-responsive image_preview" style="width:100px" alt="@lang('main.image')"
                                     src="{{ $user->image_path }}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label class="form-label">@lang('main.status')</label>
                            <select name="status" id="select-beast" class="custom-select">
                                <option value="active" {{$user->status === 'active' ? 'selected':''}}>@lang('main.active')</option>
                                <option value="deactivate" {{$user->status === 'deactivate' ? 'selected':''}}>@lang('main.deactivate')</option>
                            </select>
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label">@lang('main.role_name')</label>
                            <select name="role_name" id="select-beast" class="custom-select">
                                @foreach($roles as $key => $value)
                                    <option value="{{ $key }}" {{ $user->role_name === $key ? 'selected':'' }}> {{ str_replace('_',' ',ucfirst($value)) }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button class="btn btn-success btn-block pd-x-20" type="submit">@lang('main.update')</button>
                    </div>

                    {!! Form::close() !!}

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
