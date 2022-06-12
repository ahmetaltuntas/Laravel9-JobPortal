<div class="pxp-preloader"><span>Loading...</span></div>
<header class="pxp-header fixed-top">
    <div class="pxp-container">
        <div class="pxp-header-container">
            <div class="pxp-logo">
                <a href="/" class="pxp-animate"><span style="color: var(--pxpMainColor)">J</span>ob<span style="color: var(--pxpMainColor)">P</span>ortal</a>
            </div>
            <div class="pxp-nav-trigger navbar d-xl-none flex-fill">
                <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav" aria-controls="pxpMobileNav">
                    <div class="pxp-line-1"></div>
                    <div class="pxp-line-2"></div>
                    <div class="pxp-line-3"></div>
                </a>
                <div class="offcanvas offcanvas-start pxp-nav-mobile-container" tabindex="-1" id="pxpMobileNav">
                    <div class="offcanvas-header">
                        <div class="pxp-logo">
                            <a href="/" class="pxp-animate"><span style="color: var(--pxpMainColor)">J</span>ob<span style="color: var(--pxpMainColor)">P</span>ortal</a>
                        </div>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <nav class="pxp-nav-mobile">
                            <ul class="navbar-nav justify-content-end flex-grow-1">
                                <li class="nav-item dropdown">
                                    <a href="/" class="nav-link dropdown-toggle">Home</a>

                                </li>
                                <li class="nav-item dropdown">
                                    <a role="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Find Jobs</a>
                                    <ul class="dropdown-menu">
                                        <li class="pxp-dropdown-header">Job Listings</li>
                                        <li class="nav-item"><a href="{{route('joblist')}}">Top Search</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a role="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                        <li class="nav-item"><a href="pricing.html">Pricing</a></li>
                                        <li class="nav-item"><a href="faqs.html">FAQs</a></li>
                                        <li class="nav-item"><a href="contact-us.html">Contact Us</a></li>
                                        <li class="nav-item"><a href="sign-in.html">Sign In</a></li>
                                        <li class="nav-item"><a href="sign-up.html">Sign Up</a></li>
                                        <li class="nav-item"><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <nav class="pxp-nav dropdown-hover-all d-none d-xl-block">
                <ul>
                    <li class="dropdown">
                        <a href="/" class="dropdown-toggle">Home</a>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Find Jobs</a>
                        <ul class="dropdown-menu">
                            <li class="pxp-dropdown-body">
                                <div class="pxp-dropdown-layout">
                                    <div class="row gx-5 pxp-dropdown-lists">
                                        <div class="col-auto pxp-dropdown-list">
                                            <div class="pxp-dropdown-header">Job Listings</div>
                                            <ul>
                                                <li>
                                                    <a href="/joblist" class="pxp-has-icon-small">
                                                        <div class="pxp-dropdown-icon">
                                                            <span class="fa fa-th-large"></span>
                                                        </div>
                                                        <div class="pxp-dropdown-text">
                                                            Top Search
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{route('aboutus')}}" class="dropdown-toggle">About Us</a>

                    </li>
                    <li class="dropdown">
                        <a href="{{route('faqs')}}" class="dropdown-toggle">FAQs</a>

                    </li>
                    <li class="dropdown">
                        <a href="{{route('references')}}" class="dropdown-toggle">References</a>

                    </li>
                    <li class="dropdown">
                        <a href="{{route('contactus')}}" class="dropdown-toggle">Contact Us</a>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('notfound')}}">404 Page</a></li>
                            <li><a class="dropdown-item" href="{{route('sign-in')}}">Sign In</a></li>
                            <li><a class="dropdown-item" href="{{route('sign-up')}}">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <nav class="pxp-user-nav pxp-on-light">
                @auth
                    <div class="dropdown pxp-user-nav-dropdown">
                        <a href="index-2.html" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="pxp-user-nav-avatar pxp-cover" style="background-image: url(@if(Auth::user()->profiles->image == null) {{asset("assets/images/profile.png")}} @else {{Storage::url(Auth::user()->profiles->image)}} @endif);"></div>
                            <div class="pxp-user-nav-name d-none d-md-block">{{Auth::user()->name}}</div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            @if(Auth::user()->roles->pluck('name')->contains('admin'))
                                <li><a class="dropdown-item" href="{{route('admin.index')}}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{route('showprofile',['id'=>Auth::id()])}}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{route('user.profile')}}">Edit profile</a></li>
                                <li><a class="dropdown-item" href="{{route('log-out')}}">Logout</a></li>

                             @elseif(Auth::user()->roles->pluck('name')->contains('user'))
                                <li><a class="dropdown-item" href="{{route('user.index')}}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{route('showprofile',['id'=>Auth::id()])}}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{route('user.profile')}}">Edit profile</a></li>
                                <li><a class="dropdown-item" href="{{route('log-out')}}">Logout</a></li>

                             @elseif(Auth::user()->roles->pluck('name')->contains('company'))
                                <li><a class="dropdown-item" href="{{route('companycp.index')}}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{route('showprofile',['id'=>Auth::id()])}}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{route('companycp.profile')}}">Edit profile</a></li>
                                <li><a class="dropdown-item" href="{{route('log-out')}}">Logout</a></li>

                            @endif
                        </ul>
                    </div>
                @endauth
                @guest
                    <a class="btn rounded-pill pxp-user-nav-trigger pxp-on-light" data-bs-toggle="modal" href="#pxp-signin-modal" role="button">Sign in</a>
                @endguest
            </nav>
        </div>
    </div>
</header>
