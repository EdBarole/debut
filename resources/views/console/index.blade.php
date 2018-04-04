<!DOCTYPE html>
<html ng-app="Melek" class="no-js css-menubar" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Console - Melek Portfolio</title>

    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-extend.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/site.min.css') }}" type="text/css" />

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animsition/animsition.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/asscrollable/asScrollable.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/switchery/switchery.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/intro-js/introjs.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/slidepanel/slidePanel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/flag-icon-css/flag-icon.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/waves/waves.min.css') }}" type="text/css" />

    <!-- Plugins For This Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables-bootstrap/dataTables.bootstrap.min.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/examples/css/advanced/lightbox.min.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-labelauty/jquery-labelauty.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-select/bootstrap-select.min.css') }}" type="text/css" />

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material-design/material-design.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/brand-icons/brand-icons.min.css') }}" type="text/css" />

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/font-awesome.min.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/ADM-dateTimePicker.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/buttons.dataTables.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/angular-datatables.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/ng-modal.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/summernote.css') }}" type="text/css" />

    <!--[if lt IE 9]>
        <script src="{{ asset('assets/vendor/html5shiv/html5shiv.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.2.0/es5-shim.js"></script>
        <script>
        document.createElement('ui-select');
        document.createElement('ui-select-match');
        document.createElement('ui-select-choices');
        </script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/css/select.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/select2/select2.css') }}" type="text/css" />
    <style>
        .ng-hide { display: none; }
        .select2 > .select2-choice.ui-select-match { height: 29px; }
        .selectize-control > .selectize-dropdown { top: 36px; }
        .select-box { background: #fff; position: relative; z-index: 1; }
    </style>

    <!--[if lt IE 10]>
        <script src="{{ asset('assets/vendor/media-match/media.match.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/respond/respond.min.js') }}"></script>
    <![endif]-->

    <style>
        .ng-hide { display: none; }
        .page-login:before{background-color: #615047;}
        .page-login form{width:300px;margin:30px 0}
        .page-login form a{margin-left:20px}
        .page-login .floating-label,.page-login .form-control,.page-login .form-control:focus+.floating-label{color:#bdbdbd}
        .page-login a{color:#f44336}
        @media (max-width:767px){
            .page-login form{width:auto}
        }
        .navbar-brand-logo { display: none; }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/modernizr/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/breakpoints/breakpoints.min.js') }}"></script>
    <script>
        Breakpoints();
    </script>

</head>

<body ng-controller="mainController" ng-class="{ 'page-login layout-full page-dark':!settings.authorized }">

<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div ng-hide="settings.authorized" class="page vertical-align text-center" style="background: none">
    <div class="page-content vertical-align-middle">
        <form ng-submit="submitForm()" autocomplete="off">
            <div>
                <div ng-show="notification.visible" class="alert dark alert-icon @{{ notification.class }} alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="icon @{{ notification.icon }}" aria-hidden="true"></i>
                    @{{ notification.message }}
                </div>
            </div>
            <div class="form-group form-material floating">
                <input type="text" class="form-control empty" id="inputEmail" ng-model="login.email">
                <label class="floating-label" for="inputEmail">Email Address</label>
            </div>
            <div class="form-group form-material floating">
                <input type="password" class="form-control empty" id="inputPassword" ng-model="login.password">
                <label class="floating-label" for="inputPassword">Password</label>
            </div>
            <div class="form-group clearfix">
                <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
                    <input type="checkbox" id="inputCheckbox" name="remember">
                    <label for="inputCheckbox">Remember me</label>
                </div>
                <a class="pull-right" href="#!/">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-danger btn-block">Sign in</button>
        </form>
    </div>
</div>

<div ng-show="settings.authorized" class="ng-hide">

    <nav class="site-navbar navbar navbar-inverse navbar-fixed-top navbar-mega" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
            data-toggle="menubar">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-bar"></span>
            </button>
            <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
            data-toggle="collapse">
                <i class="icon md-more" aria-hidden="true"></i>
            </button>
            <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                <img class="navbar-brand-logo" src="{{ asset('assets/images/logo.png') }}" title="Admin">
            </div>
        </div>

        <div class="navbar-container container-fluid">
            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                <!-- Navbar Toolbar -->
                <ul class="nav navbar-toolbar">
                    <li class="hidden-float" id="toggleMenubar">
                        <a data-toggle="menubar" role="button">
                            <i class="icon hamburger hamburger-arrow-left">
                                <span class="sr-only">Toggle menubar</span>
                                <span class="hamburger-bar"></span>
                            </i>
                        </a>
                    </li>
                    <li class="hidden-xs" id="toggleFullscreen">
                        <a class="icon icon-fullscreen" data-toggle="fullscreen" role="button">
                            <span class="sr-only">Toggle fullscreen</span>
                        </a>
                    </li>
                </ul>
                <!-- End Navbar Toolbar -->

                <!-- Navbar Toolbar Right -->
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                    <li class="dropdown">
                        <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
                        data-animation="scale-up" role="button">
                            <span style="font-size: 13px">
                                @{{ settings.user.firstName + ' ' + settings.user.lastName }}
                            </span>
                            <span class="avatar avatar-online">
                                <img ng-src="@{{ settings.user.profile_photo }}" alt="">
                            </span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation">
                                <a href="#!/edit-profile" role="menuitem">
                                    <i class="icon md-account" aria-hidden="true"></i>
                                    Edit profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#!/change-password" role="menuitem">
                                    <i class="icon md-settings" aria-hidden="true"></i>
                                    Change Password
                                </a>
                            </li>
                            <li class="divider" role="presentation"></li>
                            <li role="presentation">
                                <a ng-click="logout()" role="menuitem">
                                    <i class="icon md-power" aria-hidden="true"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- End Navbar Toolbar Right -->

                <div class="navbar-brand navbar-brand-center">
                    <a href="#!/dashboard">
                        <img class="navbar-brand-logo" src="{{ asset('assets/images/logo.png') }}" title="Admin">
                    </a>
                </div>
            </div>
            <!-- End Navbar Collapse -->

        </div>
    </nav>

    <div class="site-menubar">
        <div class="site-menubar-body">
            <div>
                <div>
                    <ul class="site-menu">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="#!/dashboard">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="#!/brands">
                                <i class="site-menu-icon md-account-box" aria-hidden="true"></i>
                                <span class="site-menu-title">Brands</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="#!/posts">
                                <i class="site-menu-icon md-account-box" aria-hidden="true"></i>
                                <span class="site-menu-title">Posts</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="#!/users">
                                <i class="site-menu-icon md-account-box" aria-hidden="true"></i>
                                <span class="site-menu-title">Users</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <ng-view></ng-view>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="site-footer-legal">
            &copy; {{ date('Y') }} <a href="#">Console - Melek Portfolio</a>
        </div>
    </footer>

</div>

<!-- Core  -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

<!-- Flot Charts  -->
<script src="{{ asset('assets/admin/js/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/admin/js/flot/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('assets/admin/js/flot/jquery.flot.tooltip.js') }}"></script>
<script src="{{ asset('assets/admin/js/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/admin/js/flot/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('assets/admin/js/flot/jquery.flot.crosshair.js') }}"></script>
<script src="{{ asset('assets/admin/js/flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/admin/js/flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/admin/js/flot/jquery.flot.categories.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/admin/js/flot/flot-init.js') }}"></script>

<script src="{{ asset('assets/admin/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/summernote.js') }}"></script>

<script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/buttons.print.min.js') }}"></script>

<!-- Angular -->
<script src="{{ asset('assets/admin/js/angular.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/angular-route.min.js') }}"></script>

<script src="{{ asset('assets/admin/js/angular-moment.js') }}"></script>
<script src="{{ asset('assets/admin/js/angular-flot.js') }}"></script>
<script src="{{ asset('assets/admin/js/ADM-dateTimePicker.js') }}"></script>
<script src="{{ asset('assets/admin/js/angular-ui-bootstrap-modal.js') }}"></script>
<script src="{{ asset('assets/admin/js/angular-file-upload.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/angular-datatables.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/angular-datatables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/ng-modal.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/angular-summernote.js') }}"></script>
<script src="{{ asset('assets/admin/js/angular-sanitize.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/select.min.js') }}"></script>

<script src="{{ asset('assets/admin/js/main.js') }}"></script>

<!--
<script src="{{ asset('assets/vendor/animsition/animsition.min.js') }}"></script>
-->
<script src="{{ asset('assets/vendor/asscroll/jquery-asScroll.min.js') }}"></script>
<script src="{{ asset('assets/vendor/mousewheel/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/asscrollable/jquery.asScrollable.all.min.js') }}"></script>
<script src="{{ asset('assets/vendor/ashoverscroll/jquery-asHoverScroll.min.js') }}"></script>
<script src="{{ asset('assets/vendor/waves/waves.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/vendor/switchery/switchery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/intro-js/intro.min.js') }}"></script>
<script src="{{ asset('assets/vendor/screenfull/screenfull.min.js') }}"></script>
<script src="{{ asset('assets/vendor/slidepanel/jquery-slidePanel.min.js') }}"></script>

<!-- Plugins For This Page -->
<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/vendor/asrange/jquery-asRange.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootbox/bootbox.js') }}"></script>

<script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('assets/vendor/jquery-labelauty/jquery-labelauty.js') }}"></script>

<!-- Scripts -->
<script src="{{ asset('assets/js/core.min.js') }}"></script>
<script src="{{ asset('assets/js/site.min.js') }}"></script>

<script src="{{ asset('assets/js/sections/menu.min.js') }}"></script>
<script src="{{ asset('assets/js/sections/menubar.min.js') }}"></script>
<script src="{{ asset('assets/js/sections/sidebar.min.js') }}"></script>

<script src="{{ asset('assets/js/configs/config-colors.min.js') }}"></script>
<script src="{{ asset('assets/js/configs/config-tour.min.js') }}"></script>

<script src="{{ asset('assets/js/components/asscrollable.min.js') }}"></script>
<!--
<script src="{{ asset('assets/js/components/animsition.min.js') }}"></script>
-->
<script src="{{ asset('assets/js/components/slidepanel.min.js') }}"></script>
<script src="{{ asset('assets/js/components/switchery.min.js') }}"></script>
<script src="{{ asset('assets/js/components/tabs.min.js') }}"></script>

<script src="{{ asset('assets/js/components/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/components/magnific-popup.min.js') }}"></script>

<script src="{{ asset('assets/examples/js/advanced/lightbox.min.js') }}"></script>

<script src="{{ asset('assets/examples/js/uikit/icon.min.js') }}"></script>

<script src="{{ asset('assets/js/components/jquery-placeholder.min.js') }}"></script>
<script src="{{ asset('assets/js/components/material.min.js') }}"></script>

<script type="text/javascript">
<!--
    $(document).ready(function () {
        //
        $('.animsition-link').on('click', function () {
            //
            $('body').removeClass('site-menubar-open');
            $('body').removeClass('site-menubar-fixed');
        });
    });
-->
</script>

</body>

</html>
