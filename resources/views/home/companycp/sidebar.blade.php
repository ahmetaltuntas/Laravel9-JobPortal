<div class="pxp-dashboard-content">
    <div class="pxp-dashboard-content-header">
        <div class="pxp-nav-trigger navbar pxp-is-dashboard d-lg-none">
            <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav" aria-controls="pxpMobileNav">
                <div class="pxp-line-1"></div>
                <div class="pxp-line-2"></div>
                <div class="pxp-line-3"></div>
            </a>
            <div class="offcanvas offcanvas-start pxp-nav-mobile-container pxp-is-dashboard" tabindex="-1" id="pxpMobileNav">
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
                            <li class="nav-item"><a href="{{route('companycp.index')}}"><span class="fa fa-home"></span>Dashboard</a></li>
                            <li class="nav-item"><a href="{{route('companycp.profile')}}"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                            <li class="nav-item"><a href="company-dashboard-new-job.html"><span class="fa fa-file-text-o"></span>New Job Offer</a></li>
                            <li class="nav-item"><a href="company-dashboard-jobs.html"><span class="fa fa-briefcase"></span>Manage Jobs</a></li>
                            <li class="nav-item"><a href="company-dashboard-candidates.html"><span class="fa fa-user-circle-o"></span>Candidates</a></li>
                            <li class="nav-item"><a href="company-dashboard-password.html"><span class="fa fa-lock"></span>Change Password</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <nav class="pxp-user-nav pxp-on-light">
            <div class="dropdown pxp-user-nav-dropdown">
                <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                    <div class="pxp-user-nav-avatar pxp-cover" style="background-image: url(@if(Auth::user()->profiles->image == null){{asset("assets/images/profile.png")}}@else {{Storage::url(Auth::user()->profiles->image)}}@endif);"></div>
                    <div class="pxp-user-nav-name d-none d-md-block">{{Auth::user()->name}}</div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{route('companycp.index')}}">Dashboard</a></li>
                    <li><a class="dropdown-item" href="{{route('companycp.profile')}}">Edit profile</a></li>
                    <li><a class="dropdown-item" href="{{route('log-out')}}">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
