<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

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

    <style type="text/css">
        .table tbody tr:hover { background-color: #666; cursor: pointer; }
    </style>
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
                            <h1>
                                Posts
                                <small>/ {{ count($posts) }} results</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">Posts</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- end .page title-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-card ">
                            <!-- Start .panel -->
                            <div class="panel-body">
                                <div>
                                    <table id="basic-datatables" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Created at</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Created at</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($posts as $post)
                                            <tr data-toggle="modal" data-target="#myModal"
                                                data-json='{ "id": {{ $post->id }}, "title": "{{ $post->title }}", "status": "{{ $post->published }}", "created_at": "{{ $post->created_at }}" }'>
                                                <td>{{ $post->title }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-xs {{ $post->published ? 'btn-warning' : 'btn-danger' }}">
                                                        {{ $post->published ? 'Published' : 'Draft' }}
                                                    </button>
                                                </td>
                                                <td>{{ $post->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- End .panel -->  
                    </div><!--end .col-->
                </div><!--end .row-->
            </div>
            <div style="clear:both;"></div>
        </div>

    </section>

    <!-- Edit modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!--
                <div class="modal-header text-center">
                    <h4 id="myModalTitle" class="modal-title">Sebastian Njose</h4>
                </div>
                -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4 text-right">Title</div>
                        <div id="myModalTitle" class="col-sm-8">sebastian@njose.com</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-right">Status</div>
                        <div id="myModalStatus" class="col-sm-8">+256712177278</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-right">Created at</div>
                        <div id="myModalCreatedAt" class="col-sm-8">2018-05-05 12:32:05</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    <!--
                    <a id="modalViewProfile" href="#">
                        <button type="button" class="btn btn-accent" style="width: 100%">View profile</button>
                    </a>
                    <div style="height: 10px"></div>
                    -->
                    <button type="button" class="btn btn-danger" style="width: 100%">Delete</button>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('js/data-tables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/data-tables/dataTables.tableTools.js') }}"></script>
    <script src="{{ asset('js/data-tables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('js/data-tables/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <!--
    <script src="{{ asset('js/data-tables/tables-data.js') }}"></script>
    -->
    <script type="text/javascript">
        $(function(){
            $('.table tbody tr').on('click', function(){
                var obj = $(this).data('json');
                // console.log(obj);
                var status = obj.status ? 'Published' : 'Draft';
                $('#myModalTitle').html(obj.title);
                $('#myModalStatus').html(status);
                $('#myModalCreatedAt').html(obj.created_at);
                // $('#modalViewProfile').attr('href', 'brands/' + obj.id + '/profile');
            });
        });
    </script>

</body>
</html>
