<footer class="pxp-main-footer mt-100">
    <div class="pxp-main-footer-top pt-100 pb-100" style="background-color: var(--pxpMainColorLight);">
        <div class="pxp-container">
            <div class="row">
                <div class="col-lg-6 col-xl-5 col-xxl-4 mb-4">
                    <div class="pxp-footer-logo">
                        <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">j</span>obster</a>
                    </div>
                    <div class="pxp-footer-section mt-3 mt-md-4">
                        <h3>Call us</h3>
                        <div class="pxp-footer-phone">(123) 456-7890</div>
                    </div>
                    <div class="mt-3 mt-md-4 pxp-footer-section">
                        <div class="pxp-footer-text">
                            90 Fifth Avenue, 3rd Floor<br>
                            San Francisco, CA 1980<br>
                            office@jobster.com
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 col-xxl-8">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                            <div class="pxp-footer-section">
                                <h3>For Candidates</h3>
                                <ul class="pxp-footer-list">
                                    <li><a href="jobs-list-1.html">Find Jobs</a></li>
                                    <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                                    <li><a href="candidate-dashboard-applications.html">My Applications</a></li>
                                    <li><a href="candidate-dashboard-fav-jobs.html">Favourite Jobs</a></li>
                                    <li><a href="candidate-dashboard-inbox.html">My inbox</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                            <div class="pxp-footer-section">
                                <h3>For Employers</h3>
                                <ul class="pxp-footer-list">
                                    <li><a href="candidates-list-1.html">Find Candidates</a></li>
                                    <li><a href="company-dashboard.html">Company Dashboard</a></li>
                                    <li><a href="company-dashboard-new-job.html">Post a Job</a></li>
                                    <li><a href="company-dashboard-jobs.html">Manage Jobs</a></li>
                                    <li><a href="company-dashboard-candidates.html">Candidates</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                            <div class="pxp-footer-section">
                                <h3>About Us</h3>
                                <ul class="pxp-footer-list">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="blog-list-1.html">Blog</a></li>
                                    <li><a href="blog-list-1.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                            <div class="pxp-footer-section">
                                <h3>Helpful Resources</h3>
                                <ul class="pxp-footer-list">
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="sign-in.html">Sign In</a></li>
                                    <li><a href="sign-up.html">Sign Up</a></li>
                                    <li><a href="404.html">404 Page</a></li>
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
                    <div class="pxp-footer-copyright pxp-text-light">© 2021 Jobster. All Right Reserved.</div>
                </div>
                <div class="col-lg-auto">
                    <div class="pxp-footer-social mt-3 mt-lg-0">
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
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
                <form class="mt-4">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="pxp-signin-email" placeholder="Email address">
                        <label for="pxp-signin-email">Email address</label>
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="pxp-signin-password" placeholder="Password">
                        <label for="pxp-signin-password">Password</label>
                        <span class="fa fa-lock"></span>
                    </div>
                    <a href="#" class="btn rounded-pill pxp-modal-cta">Continue</a>
                    <div class="mt-4 text-center pxp-modal-small">
                        <a href="#" class="pxp-modal-link">Forgot password</a>
                    </div>
                    <div class="mt-4 text-center pxp-modal-small">
                        New to Jobster? <a role="button" class="" data-bs-target="#pxp-signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Create an account</a>
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
                <form class="mt-4">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="pxp-signup-email" placeholder="Email address">
                        <label for="pxp-signup-email">Email address</label>
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="pxp-signup-password" placeholder="Create password">
                        <label for="pxp-signup-password">Create password</label>
                        <span class="fa fa-lock"></span>
                    </div>
                    <a href="#" class="btn rounded-pill pxp-modal-cta">Continue</a>
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
