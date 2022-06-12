<footer class="pxp-main-footer mt-100">
    <div class="pxp-main-footer-top pt-100 pb-100" style="background-color: var(--pxpMainColorLight);">
        <div class="pxp-container">
            <div class="row">
                <div class="col-lg-6 col-xl-5 col-xxl-4 mb-4">
                    <div class="pxp-footer-logo">
                        <a href="{{route('home')}}" class="pxp-animate"><span style="color: var(--pxpMainColor)">J</span>ob<span style="color: var(--pxpMainColor)">P</span>ortal</a>
                    </div>
                    <div class="pxp-footer-section mt-3 mt-md-4">
                        <h3>Call us</h3>
                        <div class="pxp-footer-phone">(123) 456-7890</div>
                    </div>
                    <div class="mt-3 mt-md-4 pxp-footer-section">
                        <div class="pxp-footer-text">
                            Karabuk<br>
                            ahmet34w@gmail.com
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 col-xxl-8">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                            <div class="pxp-footer-section">
                                <h3>For Candidates</h3>
                                <ul class="pxp-footer-list">
                                    <li><a href="{{route('joblist')}}">Find Jobs</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                            <div class="pxp-footer-section">
                                <h3>About Us</h3>
                                <ul class="pxp-footer-list">
                                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                                    <li><a href="{{route('contactus')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                            <div class="pxp-footer-section">
                                <h3>Helpful Resources</h3>
                                <ul class="pxp-footer-list">
                                    <li><a href="{{route('faqs')}}">FAQs</a></li>
                                    <li><a href="{{route('sign-in')}}">Sign In</a></li>
                                    <li><a href="{{route('sign-up')}}">Sign Up</a></li>
                                    <li><a href="{{route('notfound')}}">404 Page</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pxp-main-footer-bottom" style="background-color: var(--pxpSecondaryColor);">
        <div class="pxp-container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-auto">
                    <div class="pxp-footer-copyright pxp-text-light">© 2022 JobPortal. All Right Reserved.</div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade pxp-user-modal" id="pxp-signin-modal" aria-hidden="true" aria-labelledby="signinModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="pxp-user-modal-fig text-center">
                    <img src="{{asset("assets")}}/images/signin-fig.png" alt="Sign in">
                </div>
                <h5 class="modal-title text-center mt-4" id="signinModal">Welcome back!</h5>
                <form class="mt-4" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input  class="form-control" id="email" type="email" name="email" required="required" autofocus="autofocus">
                        <label for="email">Email address</label>
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input  class="form-control" id="password" type="password" name="password" required="required" autocomplete="current-password">
                        <label for="password">Password</label>
                        <span class="fa fa-lock"></span>
                    </div>
                    <button type="submit" class="btn rounded-pill pxp-sign-hero-form-cta">Continue</button>
                    <div class="mt-4 text-center pxp-modal-small">
                        <a href="#" class="pxp-modal-link">Forgot password</a>
                    </div>
                    <div class="mt-4 text-center pxp-modal-small">
                        New to JobPortal? <a role="button" class="" data-bs-target="#pxp-signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Create an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade pxp-user-modal" id="pxp-signup-modal" aria-hidden="true" aria-labelledby="signupModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="pxp-user-modal-fig text-center">
                    <img src="{{asset("assets")}}/images/signup-fig.png" alt="Sign up">
                </div>
                <h5 class="modal-title text-center mt-4" id="signupModal">Create an account</h5>
                <form class="mt-4" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input  class="form-control" id="name" type="text" name="name" required="required" autofocus="autofocus" autocomplete="name">
                        <label class="pxp-signup-page-email" for="name">Name</label>
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" name="email" required="required">
                        <label class="pxp-signup-page-email" for="email">Email</label>
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input  class="form-control" id="password" minlength="8" type="password" name="password" required="required" autocomplete="new-password">
                        <label class="pxp-signup-page-password" for="password">Password</label>
                        <span class="fa fa-lock"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input  class="form-control" id="password_confirmation" minlength="8" type="password" name="password_confirmation" required="required" autocomplete="new-password">
                        <label class="pxp-signup-page-password" for="password_confirmation">Confirm Password</label>
                        <span class="fa fa-lock"></span>
                    </div>
                    <button type="submit" class="btn rounded-pill pxp-sign-hero-form-cta">Continue</button>
                    <div class="mt-4 text-center pxp-modal-small">
                        Already have an account? <a role="button" class="" data-bs-target="#pxp-signin-modal" data-bs-toggle="modal">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{asset("assets")}}/js/jquery-3.4.1.min.js"></script>
<script src="{{asset("assets")}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset("assets")}}/js/owl.carousel.min.js"></script>
<script src="{{asset("assets")}}/js/nav.js"></script>
<script src="{{asset("assets")}}/js/main.js"></script>
