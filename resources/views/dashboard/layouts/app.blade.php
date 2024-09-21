<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DentiWare | Dashboard</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/dashboard/adminlte.min.css') }}">

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            @include('dashboard.layouts.navbar')

            @include('dashboard.layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('main')
            </div>

            @include('dashboard.layouts.footer')

        </div>
        <!-- ./wrapper -->

        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>

        {{-- JQUERY --}}
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- AdminLTE App -->
        <script src="{{ asset('js/dashboard/adminlte.js') }}"></script>

    </body>
</html>
