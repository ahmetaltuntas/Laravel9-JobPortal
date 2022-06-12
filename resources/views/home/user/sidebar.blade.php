<div class="pxp-dashboard-content">
    <div class="pxp-dashboard-content-header pxp-is-candidate">
        <div class="pxp-nav-trigger navbar pxp-is-dashboard d-lg-none">
            <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav" aria-controls="pxpMobileNav">
                <div class="pxp-line-1"></div>
                <div class="pxp-line-2"></div>
                <div class="pxp-line-3"></div>
            </a>
            <div class="offcanvas offcanvas-start pxp-nav-mobile-container pxp-is-dashboard pxp-is-candidate" tabindex="-1" id="pxpMobileNav">
                <div class="offcanvas-header">
                    <div class="pxp-logo">
                        <a href="index-2.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">J</span>ob<span style="color: var(--pxpMainColor)">P</span>ortal</a>
                    </div>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <nav class="pxp-nav-mobile">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="pxp-dropdown-header">Admin tools</li>
                            <li @if(basename($_SERVER['REQUEST_URI'])=="index" or basename($_SERVER['REQUEST_URI'])=="user") class="pxp-active" @endif><a href="{{route('user.index')}}"><span class="fa fa-home"></span>Dashboard</a></li>
                            <li @if(basename($_SERVER['REQUEST_URI'])=="profile") class="pxp-active" @endif><a href="{{route('user.profile')}}"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                            <li><a href="candidate-dashboard-applications.html"><span class="fa fa-file-text-o"></span>Apllications</a></li>
                            <li @if(basename($_SERVER['REQUEST_URI'])=="comments") class="pxp-active" @endif><a href="{{route('user.comments')}}"><span class="fa fa-heart-o"></span>Comments</a></li>
                            <li><a href="candidate-dashboard-password.html"><span class="fa fa-lock"></span>Change Password</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
