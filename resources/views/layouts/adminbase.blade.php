<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset("assets/admin")}}/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset("assets/admin")}}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset("assets/admin")}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset("assets/admin")}}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="{{asset("assets/admin")}}/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset("assets/admin")}}/css/pace.min.css" rel="stylesheet" />
    <script src="{{asset("assets/admin")}}/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset("assets/admin")}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset("assets/admin")}}/css/bootstrap-extended.css" rel="stylesheet">
    <link href="{{asset("assets/admin")}}/css/app.css" rel="stylesheet">
    <link href="{{asset("assets/admin")}}/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset("assets/admin")}}/css/dark-theme.css" />
    <link rel="stylesheet" href="{{asset("assets/admin")}}/css/semi-dark.css" />
    <link rel="stylesheet" href="{{asset("assets/admin")}}/css/header-colors.css" />
<title>@yield('title')</title>
    @yield('head')
</head>
<body>
@include('admin.sidebar')
@include('admin.navbar')

@include('admin.header')



@yield('content')

@include('admin.footer')
@yield('foot')
<script src="{{asset("assets/admin")}}/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset("assets/admin")}}/js/jquery.min.js"></script>
<script src="{{asset("assets/admin")}}/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset("assets/admin")}}/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset("assets/admin")}}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset("assets/admin")}}/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="{{asset("assets/admin")}}/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset("assets/admin")}}/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

<script src="{{asset("assets/admin")}}/js/index.js"></script>
<!--app JS-->
<script src="{{asset("assets/admin")}}/js/app.js"></script>
</body>
</html>
