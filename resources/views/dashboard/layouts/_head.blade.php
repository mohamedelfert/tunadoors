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
        <div class="wrapper">

            <!--=================================
             preloader -->

            <div id="pre-loader">
                <img src="{{ asset('/dashboard_files/assets/images/pre-loader/loader-01.svg') }}" alt="">
            </div>

            <!--=================================
             preloader -->
