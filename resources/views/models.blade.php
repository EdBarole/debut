<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Codex admin template</title>

    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/waves.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/nanoscroller.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu-light.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fixed-navbar fixed-sidebar">
    <!-- Static navbar -->
    <!-- Simple splash screen-->
    <div class="splash">
        <div class="splash-title">
            <div class="spinner">
                <img src="images/loading-new.gif" alt=""/>
            </div>
        </div>
    </div>
    <!--[if lt IE 7]>
    <p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <nav class="navbar navbar-default yamm navbar-fixed-top" id="header"> <div class="container-fluid padding-l-r">
            <div class="left-part">
                <button type="button" class="navbar-minimalize minimalize-styl-2  pull-left "><i class="fa fa-bars"></i></button>

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-bar-chart"></i>  Codex</a></div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="search" style="display: none;">
                    <form >
                        <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                        <span class="search-close"><i class="fa fa-times"></i></span>
                    </form>
                </div>

                <ul class="nav navbar-nav navbar-right navbar-top-drops">
                    <li> <span class="search-icon"><i class="fa fa-search"></i></span>

                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-envelope"></i> <span class="badge badge-xs badge-info">6</span></a>

                        <ul class="dropdown-menu dropdown-lg animated flipInX">

                            <li class="notify-title">
                                3 New messages
                            </li>
                            <li class="clearfix">
                                <a href="#">
                                    <span class="pull-left">
                                        <img src="images/avtar-1.jpg" alt="" class="img-circle" width="30">
                                    </span>
                                    <span class="block">
                                        John Doe
                                    </span>
                                    <span class="media-body">
                                        Lorem ipsum dolor sit amet
                                        <em>28 minutes ago</em>
                                    </span>
                                </a>
                            </li>
                            <li class="clearfix">
                                <a href="#">
                                    <span class="pull-left">
                                        <img src="images/avtar-2.jpg" alt="" class="img-circle" width="30">
                                    </span>
                                    <span class="block">
                                        John Doe
                                    </span>
                                    <span class="media-body">
                                        Lorem ipsum dolor sit amet
                                        <em>28 minutes ago</em>
                                    </span>
                                </a>
                            </li>
                            <li class="clearfix">
                                <a href="#">
                                    <span class="pull-left">
                                        <img src="images/avtar-3.jpg" alt="" class="img-circle" width="30">
                                    </span>
                                    <span class="block">
                                        John Doe
                                    </span>
                                    <span class="media-body">
                                        Lorem ipsum dolor sit amet
                                        <em>28 minutes ago</em>
                                    </span>
                                </a>
                            </li>
                            <li class="read-more"><a href="#">View All Messages <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="badge badge-xs badge-warning">6</span></a>

                        <ul class="dropdown-menu dropdown-lg animated flipInX">
                            <li class="notify-title">
                                3 New messages
                            </li>
                            <li class="clearfix">
                                <a href="#">
                                    <span class="pull-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>

                                    <span class="media-body">
                                        15 New Messages
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
                                        13 New Followers
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
                                        Download complete
                                        <em>2 hours ago</em>
                                    </span>
                                </a>
                            </li>
                            <li class="read-more"><a href="#">View All Alerts <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-user"></i></a>

                        <ul class="dropdown-menu dropdown-lg animated flipInX profile">

                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>My Inbox</a></li>
                            <li><a href="#"><i class="fa fa-barcode"></i>My Task</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-lock"></i>Screen lock</a></li>
                            <li><a href="#"><i class="fa fa-key"></i>Logout</a></li>

                        </ul>
                    </li>

                    <li><a href="#" class="button-wave right-sidebar-toggle waves-effect waves-button waves-light"><i class="fa fa-comment" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <section class="page">

        <nav class="navbar-aside navbar-static-side " id="menu">
            <div class="sidebar-collapse">

                <ul class="nav" id="side-menu">

                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard </span><span class="label label-rouded pull-right p1-bg note-icon">1</span></a>                           
                    </li>
                    <li>
                        <a href="widgets.html"><i class="fa fa-cog"></i> <span class="nav-label">Widgets </span><span class="label label-rouded pull-right p3-bg note-icon">New 40+</span></a>

                    </li>
                    <li>
                        <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="mailbox.html">Inbox</a></li>
                            <li><a href="mail_detail.html">Email view</a></li>
                            <li><a href="mail_compose.html">Compose email</a></li>
                        </ul>
                    </li><li class="nav-heading"><span>Components</span></li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart"></i> <span class="nav-label">Graphs</span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="flot_charts.html">Flot charts</a></li>
                            <li><a href="morris_js.html">Morris.js</a></li>
                            <li><a href="chart_js.html">Chart.js</a></li>
                            <li><a href="chartist.html">Chartist</a></li>
                            <li><a href="chart_sparkline.html">Sparkline</a></li>
                            <li><a href="pie_chart.html">PIE Chart</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="form_basic.html">Basic form</a></li>
                            <li><a href="form_advanced.html">Advanced form</a></li>
                            <li><a href="form_wizard.html">Wizard form</a></li>
                            <li><a href="form_masked.html">Masked form</a></li>
                            <li><a href="form_file_upload.html">File upload</a></li>
                            <li><a href="file_drop.html">File Dropzone</a></li>
                            <li><a href="form_text_editor.html">Text editor</a></li>
                            <li><a href="form_inline_edit.html">Inline edit</a></li>
                            <li><a href="form_validate.html">Form Validation</a></li>
                            <li><a href="form_tinymce.html">Tinymce Editor</a></li>
                            <li><a href="form_wysihtml5.html">WYSIHTML5 Editor</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="empty_page.html">Empty page</a></li>
                            <li><a href="gallery.html">gallery</a></li>
                            <li><a href="price_tables.html">Price tables</a></li>
                            <li><a href="page_contact.html">Contact Page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="orders.html">orders</a></li>
                            <li><a href="order-view.html">order View</a></li>
                            <li><a href="products.html">Products</a></li>


                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-hourglass-o"></i> <span class="nav-label">Icons</span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="weather-icon.html">Weather Icons</a></li>
                            <li><a href="themifyicons.html">Themify Icons</a></li>
                            <li><a href="linea_arrows.html">Linea Arrows Icons</a></li>
                            <li><a href="linea_basic.html">Linea Basic Icons</a></li>
                            <li><a href="linea_elaboration.html">Linea Basic Elaboration Icons</a></li>
                            <li><a href="linea_ecommerce.html">Linea Ecommerce Icons</a></li>
                        </ul>
                    </li>
                    <li   class="active">
                        <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="video.html">Video</a></li>
                            <li><a href="tabs_panels.html">Panels</a></li>
                            <li><a href="tabs.html">Tabs</a></li><li><a href="chat.html">Chat</a></li>
                            <li><a href="alert_notifications.html">Alert & notifications</a></li>
                            <li><a href="tree_view.html">Tree View</a></li>
                            <li><a href="timeline.html">Time Line</a></li>
                            <li><a href="progress_bar.html">Progress Bar</a></li>
                            <li><a href="sliders.html">OWL Carousel</a></li>
                            <li><a href="range_slider.html">Range Slider</a></li>
                            <li><a href="tooltip.html">Tooltip</a></li>
                            <li><a href="alert_popup.html">Alert Popup</a></li>
                            <li><a href="accordion.html">Accordion</a></li>
                            <li><a href="models.html">Modals Popup</a></li>
                            <li><a href="toastr_alert.html">Toastr Alert</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span><span class="label label-rouded pull-right p2-bg note-icon">New</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse"><li><a href="table_basic.html">Static Tables</a></li>
                            <li><a href="table_data_tables.html">Data Tables</a></li>
                            <li><a href="table_responsive.html">Responsive Tables</a></li>
                            <li><a href="table_editable.html">Editable Tables</a></li>
                            <li><a href="table_jsgrid.html">JSGrid Tables</a></li>

                        </ul>
                    </li><li class="nav-heading"><span>More</span></li>
                    <li>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users</span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="user_profile.html">profile</a></li>
                            <li><a href="user_list.html">User list</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-map-marker"></i> <span class="nav-label">maps</span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="google_maps.html">Google maps</a></li>
                            <li><a href="vector_maps.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">Blog</span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="blog_list.html">Blog list</a></li>
                            <li><a href="blog_post.html">Blog post</a></li>
                        </ul>
                    </li>
                    <li><a href="calendar.html"><i class="fa fa-calendar"></i>  <span class="nav-label">Calendar </span><span class="label label-rouded pull-right p2-bg note-icon">New</span></a></li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa fa-plus"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Third Level <span class="fa fa-plus"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li> <li><a href="#">Second Level Item</a></li>
                        </ul>
                    </li><li class="nav-heading"><span>Extra</span></li>
                </ul>
                <div class="row">
                    <div class="left-bar">


                        <div class="map_progress">
                            <h4>Unique Visitors</h4>
                            <span><small>Last Week Rise by 62%</small></span>
                            <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div></div>

                            <h4>Registrations</h4>
                            <span><small>Up by 57% last 7 days</small></span>
                            <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div></div>

                            <h4>Direct Sales</h4>
                            <span><small>Last Month Rise by 22%</small></span>
                            <div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div></div>
                        </div>
                    </div>
                </div>


            </div>
        </nav>

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>Modals<small></small> </h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">Modals</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- end .page title-->
                <div class="row">

                    <div class="col-md-6">
                        <div class="panel panel-card margin-b-30">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title"> Bootstrap Modals</h4>
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                            </div>
                            <div class="panel-body">


                                <div class="m-t-md">
                                    A rendered modal with header, body, and set of actions in the footer.

                                    Launch demo modal<br/><br/>

                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"> Launch demo modal</button>

                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h4 class="modal-title">Modal title</h4>
                                                    <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="m-t-none">Lorem Ipsum is simply</h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <small class="stat-label">Today</small>
                                                            <h4 class="m-t-xs">170,20 <i class="fa fa-level-up text-accent"></i></h4>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <small class="stat-label">Last month %</small>
                                                            <h4 class="m-t-xs">%20,20 <i class="fa fa-level-down c-white"></i></h4>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <small class="stat-label">Last year</small>
                                                            <h4 class="m-t-xs">246,40 <i class="fa fa-level-up text-accent"></i></h4>
                                                        </div>
                                                    </div>
                                                    <div class="progress m-t-xs full progress-small">
                                                        <div style="width: 65%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" role="progressbar" class=" progress-bar progress-bar-warning">
                                                            <span class="sr-only">65% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-accent">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-card margin-b-30">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title"> Optional Modals</h4>
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                            </div>
                            <div class="panel-body">

                                <div class="m-t-md">
                                    <ul>
                                        <li>Small Size</li>
                                        <li>Large Size</li>
                                    </ul>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1">
                                        Large Modal
                                    </button>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">
                                        Small Modal
                                    </button>

                                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h4 class="modal-title">Modal title</h4>
                                                    <small>Lorem Ipsum is simply dummy text.</small>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-accent">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h4 class="modal-title">Modal title</h4>
                                                    <small>Lorem Ipsum is simply dummy text.</small>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-accent">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>


            </div><div style="clear:both;"></div> </div>
    </section>

    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.threshold.js') }}"></script>
    <script src="{{ asset('js/jquery.flot.axislabels.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>

</body>
</html>
