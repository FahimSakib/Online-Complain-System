<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('/') }}">
    <title>Admin | {{ $title }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- app favicon -->
    <link rel="shortcut icon" href="asset/backend/assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    @include('backend.include.styles')
    @stack('styles')
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="asset/backend/assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            @include('backend.include.header')
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                @include('backend.include.navbar')
                <!-- end app-navbar -->
                <!-- begin app-main -->
                @yield('content')
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            @include('backend.include.footer')
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    @include('backend.include.scripts')
    @stack('scripts')
    @include('sweetalert::alert')
</body>


</html>
