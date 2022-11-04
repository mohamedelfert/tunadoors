<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Dashboard Template"/>
        <meta name="description" content="Admin Dashboard Template"/>
        <meta name="author" content="dashboard"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <title>@yield('title')</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('/dashboard_files/assets/images/favicon.ico') }}"/>
        <!-- Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- css -->
        <link href="{{ asset('/dashboard_files/assets/css/wizard.css') }}" rel="stylesheet">

        @if (App::getLocale() == 'en')
            <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard_files/assets/css/ltr.css') }}"/>
        @else
            <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard_files/assets/css/rtl.css') }}"/>
            <style>
                body, h1, h2, h3, h4, h5, h6 {
                    font-family: 'Cairo', sans-serif !important;
                }
            </style>
        @endif

        @stack('css')

    </head>

    <body>
        <div class="slide-menu">

            <div id="pre-loader">
                <img src="{{ asset('/dashboard_files/assets/images/pre-loader/loader-01.svg') }}" alt="">
            </div>

            <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <!-- logo -->
                <div class="text-left navbar-brand-wrapper">
                    <a class="navbar-brand brand-logo" href="{{ route('dashboard.welcome') }}">
                        <img src="{{ asset('/dashboard_files/assets/images/logo-dark.png') }}" alt="">
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard.welcome') }}">
                        <img src="{{ asset('/dashboard_files/assets/images/logo-icon-dark.png') }}" alt="">
                    </a>
                </div>
                <!-- Top bar left -->
                <ul class="nav navbar-nav mr-auto">
                </ul>
                <!-- top bar right -->
                <ul class="nav navbar-nav ml-auto">
                    <div class="btn-group mb-1">
                        <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            @if (App::getLocale() == 'ar')
                                {{ LaravelLocalization::getCurrentLocaleName() }}
                                <img src="{{ asset('dashboard_files/assets/images/flags/EG.png') }}" alt="">
                            @else
                                {{ LaravelLocalization::getCurrentLocaleName() }}
                                <img src="{{ asset('dashboard_files/assets/images/flags/US.png') }}" alt="">
                            @endif
                        </button>
                        <div class="dropdown-menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <li class="nav-item dropdown mr-30">
                        <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="{{ setting()->logo_path }}" alt="avatar">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-0">test</h5>
                                        <span>test@test.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>test</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>@lang('main.settings')</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="text-danger ti-unlock"></i>@lang('main.logout')</a>
                            {{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                            {{--                    @csrf--}}
                            {{--                </form>--}}
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="container-fluid">

                <!-- row -->
                <div class="row mt-30">
                    <div class="col-md-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <div class="text-center text-danger" style="margin: 15% auto">
                                    <h1>We&rsquo;ll be back soon!</h1>
                                    <div>
                                        <p class="badge badge-danger">{!! setting()->message_maintenance !!}</p>
                                        <p>&mdash; The Team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row closed -->

                <footer class="bg-white p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-center text-md-left">
                                <p class="mb-0"> &copy; Copyright <span id="copyright">
                                                <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
                                            </span>.
                                    <a href="#"> Admin Dashboard </a> All Rights Reserved.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="text-center text-md-right">
                                <li class="list-inline-item"><a href="#">Terms & Conditions </a></li>
                                <li class="list-inline-item"><a href="#">API Use Policy </a></li>
                                <li class="list-inline-item"><a href="#">Privacy Policy </a></li>
                            </ul>
                        </div>
                    </div>
                </footer>

            </div>

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
            $(document).ready(function () {
                $('#datatable').DataTable();
            });
        </script>
        @if (App::getLocale() == 'en')
            <script
                src="{{ asset('dashboard_files/assets/js/bootstrap-datatables/jquery.dataTables.min.js') }}"></script>
            <script
                src="{{ asset('dashboard_files/assets/js/bootstrap-datatables/dataTables.bootstrap4.min.js') }}"></script>
        @else
            <script
                src="{{ asset('dashboard_files/assets/js/bootstrap-datatables/jquery.dataTables.min.js') }}"></script>
            <script
                src="{{ asset('dashboard_files/assets/js/bootstrap-datatables/dataTables.bootstrap4.min.js') }}"></script>
        @endif

        @stack('js')

    </body>
</html>
