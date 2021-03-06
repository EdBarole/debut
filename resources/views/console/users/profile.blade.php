<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/waves.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nanoscroller.css') }}">
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
                            <h1>My Profile <small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- end .page title-->


                <div class="col-md-4 margin-b-30">
                    <div class="profile-overview">
                        <div class="avtar text-center">
                            <img src="{{ asset('images/avtar-1.jpg') }}" alt="" class="img-thumbnail">
                            <h3>Peter Emrald</h3>
                            <hr>
                            <ul class="socials list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                            <hr>                               
                        </div>
                        <table class="table profile-detail table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th colspan="3">Contact Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>url</td>
                                    <td>
                                        <a href="#">
                                            www.example.com
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#panel_edit_account" class="show-tab">
                                            <i class="fa fa-pencil edit-user-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>email:</td>
                                    <td>
                                        <a href="#">
                                            peter@example.com
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#panel_edit_account" class="show-tab">
                                            <i class="fa fa-pencil edit-user-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>phone:</td>
                                    <td>(641)-734-4763</td>
                                    <td>
                                        <a href="#panel_edit_account" class="show-tab">
                                            <i class="fa fa-pencil edit-user-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>skye</td>
                                    <td>
                                        <a href="#">
                                            peterclark82
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#panel_edit_account" class="show-tab">
                                            <i class="fa fa-pencil edit-user-info"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table profile-detail table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th colspan="3">General information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Position</td>
                                    <td>UI Designer</td>
                                    <td>
                                        <a href="#panel_edit_account" class="show-tab">
                                            <i class="fa fa-pencil edit-user-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Logged In</td>
                                    <td>56 min</td>
                                    <td>
                                        <a href="#panel_edit_account" class="show-tab">
                                            <i class="fa fa-pencil edit-user-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Position</td>
                                    <td>Senior Marketing Manager</td>
                                    <td>
                                        <a href="#panel_edit_account" class="show-tab">
                                            <i class="fa fa-pencil edit-user-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Supervisor</td>
                                    <td>
                                        <a href="#">
                                            Kenneth Ross
                                        </a></td>
                                    <td>
                                        <a href="#panel_edit_account" class="show-tab">
                                            <i class="fa fa-pencil edit-user-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><span class="label label-sm label-info">Administrator</span></td>
                                    <td>
                                        <a href="#panel_edit_account" class="show-tab">
                                            <i class="fa fa-pencil edit-user-info"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="col-md-5 margin-b-30">
                    <div class="profile-edit">
                        <form class="form-horizontal" method="get">
                            <h4 class="mb-xlg">Personal Information</h4>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileFirstName">First Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileFirstName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileLastName">Last Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileLastName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileAddress">Address</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileAddress">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileCompany">Company</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileCompany">
                                    </div>
                                </div>
                            </fieldset>
                            <hr class="dotted tall">
                            <h4 class="mb-xlg">About Yourself</h4>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileBio">Biographical Info</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="3" id="profileBio"></textarea>
                                    </div>
                                </div>

                            </fieldset>

                            <h4 class="mb-xlg">Change Password</h4>
                            <fieldset class="mb-xl">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileNewPassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="profileNewPasswordRepeat">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="profile-states">
                        <h3>Sales States</h3>
                        <div class="sale-state-box">
                            <h3>654</h3>
                            <span>Lorem ipsum</span>
                        </div>
                        <div class="sale-state-box">
                            <h3>$9,45,5665.00</h3>
                            <span>Palem isuro</span>
                        </div>
                        <div class="sale-state-box">
                            <h3>16</h3>
                            <span>Adict asro</span>
                        </div>
                    </div>
                    <div class="recent-activities">
                        <h3>Recent Activities</h3>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="{{ asset('images/avtar-1.jpg') }}" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"> Adict pasans loria</h4>
                                Lorem ipsum dolor sit
                            </div>
                        </div><!--media-->
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="{{ asset('images/avtar-2.jpg') }}" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"> Adict pasans loria</h4>
                                Lorem ipsum dolor sit
                            </div>
                        </div><!--media-->
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="{{ asset('images/avtar-3.jpg') }}" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"> Adict pasans loria</h4>
                                Lorem ipsum dolor sit
                            </div>
                        </div><!--media-->
                    </div>
                </div>
            </div><div style="clear:both;"></div> </div>
    </section>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
