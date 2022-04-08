
    <title>@yield('title')</title>
    @yield('head')
</head>
<body>
@include('admin.sidebar')
@include('admin.navbar')




@yield('content')

@include('admin.footer')
@yield('foot')
</body>
</html>
