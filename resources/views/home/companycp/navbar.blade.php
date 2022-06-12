<body style="background-color: var(--pxpMainColorLight);">
<div class="pxp-preloader"><span>Loading...</span></div>

<div class="pxp-dashboard-side-panel d-none d-lg-block">
    <div class="pxp-logo">
        <a href="{{route('companycp.index')}}" class="pxp-animate"><span style="color: var(--pxpMainColor)">J</span>ob<span style="color: var(--pxpMainColor)">P</span>ortal</a>
    </div>

    <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
        <div class="pxp-dashboard-side-label">Admin tools</div>
        <ul class="list-unstyled">
            <li  @if(basename($_SERVER['REQUEST_URI'])=="index" or basename($_SERVER['REQUEST_URI'])=="companycp") class="pxp-active" @endif><a href="{{route('companycp.index')}}"><span class="fa fa-home"></span>Dashboard</a></li>
            <li @if(basename($_SERVER['REQUEST_URI'])=="companyprofile") class="pxp-active" @endif><a href="{{route('companycp.profile')}}"><span class="fa fa-pencil"></span>Edit Profile</a></li>
            <li @if(basename($_SERVER['REQUEST_URI'])=="newjob") class="pxp-active" @endif><a href="{{route('companycp.newjob')}}"><span class="fa fa-file-text-o"></span>New Job Offer</a></li>
            <li @if(basename($_SERVER['REQUEST_URI'])=="jobs") class="pxp-active" @endif><a href="{{route('companycp.jobs')}}"><span class="fa fa-briefcase"></span>Manage Jobs</a></li>
            <li @if(basename($_SERVER['REQUEST_URI'])=="candidates") class="pxp-active" @endif><a href="{{route('companycp.candidates')}}"><span class="fa fa-user-circle-o"></span>Candidates</a></li>
            <li><a href="company-dashboard-password.html"><span class="fa fa-lock"></span>Change Password</a></li>
        </ul>
    </nav>

    <nav class="pxp-dashboard-side-user-nav-container">
        <div class="pxp-dashboard-side-user-nav">
            <div class="dropdown pxp-dashboard-side-user-nav-dropdown dropup">
                <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                    <div class="pxp-dashboard-side-user-nav-avatar pxp-cover" style="background-image: url(@if(Auth::user()->profiles->image == null){{asset("assets/images/profile.png")}}@else {{Storage::url(Auth::user()->profiles->image)}}@endif);"></div>
                    <div class="pxp-dashboard-side-user-nav-name">{{Auth::user()->name}}</div>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('companycp.index')}}">Dashboard</a></li>
                    <li><a class="dropdown-item" href="{{route('companycp.profile')}}">Edit profile</a></li>
                    <li><a class="dropdown-item" href="{{route('log-out')}}">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
