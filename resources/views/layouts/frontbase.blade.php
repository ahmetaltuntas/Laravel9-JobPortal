<html>
<head>
    <title>App Name - @yield('title')</title>
    @yield('head')
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
@yield('foot')
</body>
</html>
