
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
    <title>Admin Login</title>
</head>

<body class="bg-login">
<!--wrapper-->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="mb-4 text-center">
                        <img src="{{asset("assets/admin")}}/images/logo-img.png" width="180" alt="" />
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Sign in</h3>
                                    <p>Don't have an account yet? <a href="/sign-up">Sign up here</a>
                                    </p>
                                </div>
                                <h4>{{Session::get('error')}}</h4>
                                @if($errors->any())
                                    <h4>{{$errors->first()}}</h4>
                                @endif

                                <div class="form-body">
                                    <form class="row g-3" method="POST" action="{{ route('admin.adminlogin') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0" name="password" id="password" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="{{asset("assets/admin")}}/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset("assets/admin")}}/js/jquery.min.js"></script>
<script src="{{asset("assets/admin")}}/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset("assets/admin")}}/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset("assets/admin")}}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>

<!--app JS-->
<script src="{{asset("assets/admin")}}/js/app.js"></script>
</body>

</html>
