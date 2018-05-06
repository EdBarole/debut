<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Melek Admin</title>

    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/waves.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/nanoscroller.css') }}" rel="stylesheet">
    <link href="{{ asset('css/morris-0.4.3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu-light.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">


    <link href="{{ asset('css/app.min.1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fullcalendar.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('js/c3/c3.min.css') }}" rel="stylesheet">
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
                <img src="{{ asset('images/loading-new.gif') }}" alt=""/>
            </div>
        </div>
    </div>
    <!--[if lt IE 7]>
    <p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @include('layout.header')
    
    <section class="page">
    
        @include('layout.menu')
        
        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>Dashboard<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- end .page title-->

                <div class="row row-md">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block  tile-2  widget-box clearfix height-auto">
                            <div class="t-icon right"><i class="ti-user"></i></div>
                            <div class="t-content">
                                <h1 class="m-b-1">1,325</h1>
                                <h6 class="text-uppercase">Users</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block  tile-2  widget-box clearfix height-auto">
                            <div class="t-icon right"><i class="ti-bar-chart"></i></div>
                            <div class="t-content">
                                <h1 class="m-b-1">$ 47,855</h1>
                                <h6 class="text-uppercase">Revenue</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block  tile-2  widget-box clearfix height-auto">
                            <div class="t-icon right"><i class="ti-package"></i></div>
                            <div class="t-content">
                                <h1 class="m-b-1">6,800</h1>
                                <h6 class="text-uppercase">Brands</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block  tile-2  widget-box clearfix height-auto">
                            <div class="t-icon right"><i class="ti-receipt"></i></div>
                            <div class="t-content">
                                <h1 class="m-b-1">1,682</h1>
                                <h6 class="text-uppercase">Sold</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-card recent-activites">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title">Total Money Spent</h4>
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                            </div>
                            <div class="panel-body text-center">
                                <div id="morris-bar-chart" ></div>
                            </div>
                        </div><!-- End .panel -->
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-card recent-activites">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title"> Analytic Record</h4>
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                            </div>
                            <div class="panel-body text-center">
                                <div id="morris-line-chart"></div>

                            </div>
                        </div><!-- End .panel -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-card margin-b-30">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title"> User Activity</h4>
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
                                </div>
                            </div>
                            <div class="panel-body">

                                <div class="feed-activity-list">

                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right text-navy">1m ago</small>
                                            <strong>Monica Smith</strong>
                                            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                            <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">2m ago</small>
                                            <strong>Jogn Angel</strong>
                                            <div>There are many variations of passages of Lorem Ipsum available</div>
                                            <small class="text-muted">Today 2:23 pm - 11.06.2014</small>
                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">5m ago</small>
                                            <strong>Jesica Ocean</strong>
                                            <div>Contrary to popular belief, Lorem Ipsum</div>
                                            <small class="text-muted">Today 1:00 pm - 08.06.2014</small>
                                        </div>
                                    </div>

                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">5m ago</small>
                                            <strong>Monica Jackson</strong>
                                            <div>The generated Lorem Ipsum is therefore </div>
                                            <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">5m ago</small>
                                            <strong>Anna Legend</strong>
                                            <div>All the Lorem Ipsum generators on the Internet tend to repeat </div>
                                            <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">5m ago</small>
                                            <strong>Damian Nowak</strong>
                                            <div>The standard chunk of Lorem Ipsum used </div>
                                            <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <div>
                                            <small class="pull-right">5m ago</small>
                                            <strong>Gary Smith</strong>
                                            <div>200 Latin words, combined with a handful</div>
                                            <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                    -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-card recent-activites">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title">Product Data</h4>
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                            </div>
                            <div class="panel-body text-center">
                                <div id="pdata" ></div>
                            </div>
                        </div><!-- End .panel -->
                    </div>

                </div>

                <!--
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget-box clearfix">
                            <div class="pull-center">
                                <h4>User Performance</h4>
                                <h2>17,50</h2>
                            </div>
                            <div class="text-center">
                                <i class="pe-7s-graph1 fa-4x"></i>

                                <h1 class="m-xs">$1 206,90</h1>

                                <h3 class="font-extra-bold no-margins text-success">
                                    All Income
                                </h3>
                                <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="widget-box clearfix">
                            <div>

                                <h4>Users Activity</h4>

                                <div class="m-t-xl">
                                    <h2>210</h2><br />
                                    <span class="font-bold no-margins">
                                        Social users
                                    </span>

                                    <div class="progress m-t-xs full progress-small">
                                        <div style="width: 55%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="55"
                                                role="progressbar" class=" progress-bar progress-bar-success">
                                            <span class="sr-only">35% Complete (success)</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stats-label">Pages / Visit</small>
                                            <h4>7.80</h4>
                                        </div>

                                        <div class="col-xs-6">
                                            <small class="stats-label">% New Visits</small>
                                            <h4>76.43%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget-box clearfix p3-bg">
                            <div>
                                <div class="pad-all">
                                    <h2> HDD Usage</h2><br/>
                                    <p class="mar-no">
                                        <span class="pull-right text-bold">132Gb</span>
                                        Free Space
                                    </p>
                                    <p class="mar-no">
                                        <span class="pull-right text-bold">1,45Gb</span>
                                        Used space
                                    </p>
                                </div>
                                <div class="pad-all text-center">
                                    <br/>
                                    <div id="demo-sparkline-area"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget-box clearfix">
                            <div>
                                <h2><i class="fa fa-tasks pull-right p4-color"></i></h2>
                                <h4>Pending Orders</h4>
                                <h2>256</h2>
                            </div>
                        </div>
                    </div>

                </div>
                -->

                <div class="row hide">
                    <div class="col-md-12">
                        <div class="panel panel-card ">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title">Visitors location</h4>
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div id="world-map" style="width: 100%; height: 280px"></div>
                                    </div>
                                    <div class="col-md-5">
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
                        </div><!-- End .panel -->
                    </div>
                </div>

            </div>
            <div style="clear:both;"></div>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('js/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('js/flot/curved-line-chart.js') }}"></script>
    <script src="{{ asset('js/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>
    <script src="{{ asset('js/morris_chart/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('js/morris_chart/morris.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- <script src="{{ asset('js/jquery.nanoscroller.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <!-- ChartJS-->
    <script src="{{ asset('js/chartjs/Chart.min.js') }}"></script>

    <!--page js-->
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/c3/d3.v3.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/c3/c3.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
