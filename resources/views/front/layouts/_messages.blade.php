@if(session()->has('success'))
    <div class="alert alert-success">
        <h4>{{ session('success') }}</h4>
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>@lang('main.error')</strong>
        <h4>{{ session('error') }}</h4>
    </div>
@endif

@if(count($errors->all()) > 0)
    <div class="alert alert-danger">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>@lang('main.error')</strong>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif
