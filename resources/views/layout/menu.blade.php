<nav class="navbar-aside navbar-static-side " id="menu">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu" style="height: 800px">

            <li>
                <a href="dashboard">
                    <i class="fa fa-th-large"></i>&nbsp;
                    <span class="nav-label">Dashboard</span>
                    <span class="label label-rouded pull-right p1-bg note-icon">1</span>
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <i class="fa fa-cog"></i>&nbsp;
                    <span class="nav-label">Brands</span>
                    <span class="fa fa-plus"></span></a>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('admin/brands') }}">All brands</a></li>
                    <li><a href="{{ url('admin/brands/add') }}">Add new brand</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-files-o"></i>&nbsp;
                    <span class="nav-label">Posts</span>
                    <span class="fa fa-plus"></span></a>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('admin/posts') }}">All posts</a></li>
                    <li><a href="{{ url('admin/posts/add') }}">Add new post</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                <i class="fa fa-envelope"></i>&nbsp;
                <span class="nav-label">Reports</span>
                <span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Audit Trail</a></li>
                    <li><a href="#">Deposits</a></li>
                    <li><a href="#">Withdrawals</a></li>
                </ul>
            </li>
            <li class="nav-heading"><span>More</span></li>
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>&nbsp;
                    <span class="nav-label">Users</span>
                    <!-- <span class="fa fa-plus"></span> -->
                    <span class="label label-rouded pull-right p3-bg note-icon">New 40+</span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('admin/users') }}">All users</a></li>
                    <li><a href="{{ url('admin/users/add') }}">Add new user</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-lock"></i>&nbsp;
                    <span class="nav-label">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
