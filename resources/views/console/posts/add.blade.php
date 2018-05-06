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
    <link href="{{ asset('css/select.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-slider.min.css') }}" rel="stylesheet">
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
                            <h1>Add brand <small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i></a></li>
                                <li>
                                    <a href="{{ url('admin/brands') }}">Brands</a>
                                </li>
                                <li class="active">Add new</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- end .page title-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-card recent-activites">
                            <!-- Start .panel -->
                            <div class="panel-body">
                                <form action="{{ action('BrandsController@store') }}" method="post" class="form-horizontal group-border stripped">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group form-group-lg">
                                        <label class="col-lg-2 col-md-3 control-label">Name</label>
                                        <div class="col-lg-10 col-md-9">
                                            <input type="text" name="yourname" placeholder="Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-3 control-label">Fancy select</label>
                                        <div class="col-lg-10 col-md-9">
                                            <select name="location" class="fancy-select form-control">
                                                <option value="Amsterdam">Amsterdam</option>
                                                <option value="Washington">Washington</option>
                                                <option value="Sydney">Sydney</option>
                                                <option value="Beijing">Beijing</option>
                                                <option value="Cairo">Cairo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-lg">
                                        <label class="col-lg-2 col-md-3 control-label">Phone number</label>
                                        <div class="col-lg-10 col-md-9">
                                            <input type="text" name="phone" data-masked="" data-inputmask="'mask': '(999) 999-9999'" placeholder="Phone number" class="form-control">
                                        </div>
                                    </div>
                                    <!-- End .form-group  -->
                                    <div class="form-group">
                                        <div class="col-sm-2">&nbsp;</div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button class="btn btn-link">Cancel</button>
                                        </div>
                                    </div>
                                </form>
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
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- <script src="{{ asset('js/jquery.nanoscroller.min.js') }}"></script>-->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <!--page plugins-->
    <script src="{{ asset('js/select/fancySelect.js') }}"></script>
    <script src="{{ asset('js/input-mask/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('js/select/select2.js') }}"></script>
    <script src="{{ asset('js/slider/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('js/custom-advanced-form.js') }}"></script>
</body>
</html>
