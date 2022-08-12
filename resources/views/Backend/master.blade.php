<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard - HRMS admin template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('backend/assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{url('backend/assets/css/font-awesome.min.css')}}">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{url('backend/assets/css/line-awesome.min.css')}}">

    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{url('backend/assets/plugins/morris/morris.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{url('backend/assets/css/style.css')}}">
    {{-- login --}}

    {{-- !! Toastr::message() !! --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->


        @include('Backend.fixed.header')

        <!-- /Header -->

        <!-- Sidebar -->


        @include('Backend.fixed.sidebar')




        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->



            @yield('backend_content')



            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{url('backend/assets/js/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{url('backend/assets/js/popper.min.js')}}"></script>
    <script src="{{url('backend/assets/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JS -->
    <script src="{{url('backend/assets/js/jquery.slimscroll.min.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{url('backend/assets/plugins/morris/morris.min.js')}}"></script>
    <script src="{{url('backend/assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{url('backend/assets/js/chart.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{url('backend/assets/js/app.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- !! Toastr::message() !! --}}
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}



</body>

</html>
