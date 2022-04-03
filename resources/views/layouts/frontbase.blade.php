<html lang="en" class="pxp-root">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{asset("assets")}}/images/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{asset("assets")}}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets")}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("assets")}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset("assets")}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset("assets")}}/css/animate.css">
    <link rel="stylesheet" href="{{asset("assets")}}/css/style.css">

    <title>@yield('title')</title>
    @yield('head')

</head>
<body>
@include('home.header')

@section('sidebar')

@show


@yield('content')

@include('home.footer')
@yield('foot')
</body>
</html>
