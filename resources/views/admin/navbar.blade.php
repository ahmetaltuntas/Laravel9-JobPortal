<!--navigation-->
<ul class="metismenu" id="menu">
    <li>
        <a href="/admin">
            <div class="parent-icon"><i class='bx bx-home-circle'></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bx bx-category"></i>
            </div>
            <div class="menu-title">Job</div>
        </a>
        <ul>
            <li> <a href="{{route('admin.job.index')}}"><i class="bx bx-right-arrow-alt"></i>Job List</a>
            </li>
            <li> <a href="{{route('admin.job.create')}}"><i class="bx bx-right-arrow-alt"></i>New Job</a>
            </li>
            <li> <a href="app-file-manager.html"><i class="bx bx-right-arrow-alt"></i>Pending Jobs</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bx bx-category"></i>
            </div>
            <div class="menu-title">Category</div>
        </a>
        <ul>
            <li> <a href="{{route('admin.category.index')}}"><i class="bx bx-right-arrow-alt"></i>Category List</a>
            </li>
            <li> <a href="{{route('admin.category.create')}}"><i class="bx bx-right-arrow-alt"></i>New Category</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="/">
            <div class="parent-icon"><i class='bx bx-comment'></i>
            </div>
            <div class="menu-title">Comments</div>
        </a>
    </li>
    <li>
        <a href="{{route("admin.message.index")}}">
            <div class="parent-icon"><i class='bx bx-message'></i>
            </div>
            <div class="menu-title">Messages</div>
        </a>
    </li>
    <li>
        <a href="/">
            <div class="parent-icon"><i class='bx bx-user-circle'></i>
            </div>
            <div class="menu-title">Users</div>
        </a>
    </li>
    <li>
        <a href="/">
            <div class="parent-icon"><i class='bx bx-group'></i>
            </div>
            <div class="menu-title">Social</div>
        </a>
    </li>
    <li>
        <a href="{{route("admin.faq.index")}}">
            <div class="parent-icon"><i class='bx bx-help-circle'></i>
            </div>
            <div class="menu-title">FAQ</div>
        </a>
    </li>
    <li class="menu-label">Label</li>
    <li>
        <a href="{{route('admin.settings')}}">
            <div class="parent-icon"><i class='bx bx-category'></i>
            </div>
            <div class="menu-title">Settings</div>
        </a>
    </li>

</ul>
<!--end navigation-->
</div>
