<nav class="navbar navbar-default yamm navbar-fixed-top" id="header">
    <div class="container-fluid padding-l-r">
        <div class="left-part">
            <button type="button" class="navbar-minimalize minimalize-styl-2  pull-left">
                <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('admin') }}">Admin</a>
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right navbar-top-drops">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-xs badge-warning">6</span>
                    </a>
                    <ul class="dropdown-menu dropdown-lg animated flipInX">
                        <li class="clearfix">
                            <a href="#">
                                <span class="pull-left">
                                    <i class="fa fa-envelope"></i>
                                </span>

                                <span class="media-body">
                                    Jane Doe created a new account
                                    <em>20 Minutes ago</em>
                                </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="#">
                                <span class="pull-left">
                                    <i class="fa fa-twitter"></i>
                                </span>

                                <span class="media-body">
                                    Michelle made a deposit of $200
                                    <em>2 hours ago</em>
                                </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="#">
                                <span class="pull-left">
                                    <i class="fa fa-download"></i>
                                </span>

                                <span class="media-body">
                                    Samuel invested $20 in Blue Chips
                                    <em>2 hours ago</em>
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-lg animated flipInX profile">
                        <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                        <li><a href="#"><i class="fa fa-lock"></i>Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-key"></i>Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
