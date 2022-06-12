<div class="pxp-preloader"><span>Loading...</span></div>

<div class="pxp-dashboard-side-panel d-none d-lg-block">
    <div class="pxp-logo">
        <a href="{{route('user.index')}}" class="pxp-animate"><span style="color: var(--pxpMainColor)">J</span>ob<span style="color: var(--pxpMainColor)">P</span>ortal</a>
    </div>

    <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
        <div class="pxp-dashboard-side-label">Admin tools</div>
        <ul class="list-unstyled">
            <li @if(basename($_SERVER['REQUEST_URI'])=="index" or basename($_SERVER['REQUEST_URI'])=="user") class="pxp-active" @endif><a href="{{route('user.index')}}"><span class="fa fa-home"></span>Dashboard</a></li>
            <li @if(basename($_SERVER['REQUEST_URI'])=="profile") class="pxp-active" @endif><a href="{{route('user.profile')}}"><span class="fa fa-pencil"></span>Edit Profile</a></li>
            <li><a href="candidate-dashboard-applications.html"><span class="fa fa-file-text-o"></span>Applications</a></li>
            <li @if(basename($_SERVER['REQUEST_URI'])=="comments") class="pxp-active" @endif><a href="{{route('user.comments')}}"><span class="fa fa-heart-o"></span>Comments</a></li>
            <li><a href="candidate-dashboard-password.html"><span class="fa fa-lock"></span>Change Password</a></li>
        </ul>
    </nav>

    <nav class="pxp-dashboard-side-user-nav-container pxp-is-candidate">
        <div class="pxp-dashboard-side-user-nav">
            <div class="dropdown pxp-dashboard-side-user-nav-dropdown dropup">
                <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                    <div class="pxp-dashboard-side-user-nav-avatar pxp-cover" style="background-image: url(@if(Auth::user()->profiles->image == null){{asset("assets/images/profile.png")}}@else {{Storage::url(Auth::user()->profiles->image)}}@endif);" ></div>
                    <div class="pxp-dashboard-side-user-nav-name">{{Auth::user()->name}}</div>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('user.index')}}">Dashboard</a></li>
                    <li><a class="dropdown-item" href="{{route('user.profile')}}">Edit profile</a></li>
                    <li><a class="dropdown-item" href="{{route('log-out')}}">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<nav class="pxp-user-nav pxp-on-light">
    <div class="dropdown pxp-user-nav-dropdown">
        <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
            <div class="pxp-user-nav-avatar pxp-cover" style="background-image: url(@if(Auth::user()->profiles->image == null){{asset("assets/images/profile.png")}}@else {{Storage::url(Auth::user()->profiles->image)}}@endif);"></div>
            <div class="pxp-user-nav-name d-none d-md-block">{{Auth::user()->name}}</div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{route('user.index')}}">Dashboard</a></li>
            <li><a class="dropdown-item" href="{{route('user.profile')}}">Edit profile</a></li>
            <li><a class="dropdown-item" href="{{route('log-out')}}">Logout</a></li>
        </ul>
    </div>
</nav>
</div>
