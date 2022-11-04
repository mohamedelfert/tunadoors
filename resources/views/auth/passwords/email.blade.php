<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Dashboard Template"/>
        <meta name="description" content="Admin Dashboard Template"/>
        <meta name="author" content="dashboard"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <title>{{ __('Reset Password') }}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('/dashboard_files/assets/images/favicon.ico') }}"/>
        <!-- Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- css -->
        <link href="{{ asset('/dashboard_files/assets/css/wizard.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard_files/assets/css/ltr.css') }}"/>

    </head>

    <body>

        <div class="wrapper">
            <div id="pre-loader">
                <img src="{{ asset('dashboard_files/assets/images/pre-loader/loader-01.svg') }}" alt="">
            </div>

            <section class="height-100vh d-flex align-items-center page-section-ptb login"
                     style="background-image: url({{ asset('dashboard_files/assets/images/login-bg.jpg') }});">
                <div class="container">
                    <div class="row justify-content-center no-gutters vertical-align">
                        <div class="col-lg-4 col-md-6 login-fancy-bg bg"
                             style="background-image: url({{ asset('dashboard_files/assets/images/login-inner-bg.jpg') }});">
                            <div class="login-fancy">
                                <h2 class="text-white mb-20">Hello world!</h2>
                                <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose
                                    responsive template along with powerful features.</p>
                                <ul class="list-unstyled  pos-bot pb-30">
                                    <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a></li>
                                    <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 bg-white">
                            <div class="login-fancy pb-40 clearfix">
                                <h3 class="mb-30">{{ __('Reset Password') }}</h3>
                                <div class="section-field mb-20">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="section-field mb-20">
                                            <label for="email" class="mb-10">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" class="web form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="button btn-block">
                                                    {{ __('Send Password Reset Link') }}
                                                    <i class="fa fa-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <p class="mt-20 mb-0">Go Back To Log in? <a href="{{ route('login') }}"> Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- jquery -->
        <script src="{{ asset('/dashboard_files/assets/js/jquery-3.3.1.min.js') }}"></script>
        <!-- plugins-jquery -->
        <script src="{{ asset('/dashboard_files/assets/js/plugins-jquery.js') }}"></script>
        <!-- plugin_path -->
        <script>var plugin_path = '{{ asset('/dashboard_files/assets/js/') }}';</script>
        <!-- chart -->
        <script src="{{ asset('/dashboard_files/assets/js/chart-init.js') }}"></script>
        <!-- calendar -->
        <script src="{{ asset('/dashboard_files/assets/js/calendar.init.js') }}"></script>
        <!-- charts sparkline -->
        <script src="{{ asset('/dashboard_files/assets/js/sparkline.init.js') }}"></script>
        <!-- charts morris -->
        <script src="{{ asset('/dashboard_files/assets/js/morris.init.js') }}"></script>
        <!-- datepicker -->
        <script src="{{ asset('/dashboard_files/assets/js/datepicker.js') }}"></script>
        <!-- sweetalert2 -->
        <script src="{{ asset('/dashboard_files/assets/js/sweetalert2.js') }}"></script>
        <!-- toastr -->
        <script src="{{ asset('/dashboard_files/assets/js/toastr.js') }}"></script>
        <!-- validation -->
        <script src="{{ asset('/dashboard_files/assets/js/validation.js') }}"></script>
        <!-- lobilist -->
        <script src="{{ asset('/dashboard_files/assets/js/lobilist.js') }}"></script>
        <!-- custom -->
        <script src="{{ asset('/dashboard_files/assets/js/custom.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#datatable').DataTable();
            } );
        </script>
        <script src="{{ asset('dashboard_files/assets/js/bootstrap-datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('dashboard_files/assets/js/bootstrap-datatables/dataTables.bootstrap4.min.js') }}"></script>

    </body>
</html>
