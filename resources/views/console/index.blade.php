<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/waves.min.css" type="text/css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nanoscroller.css') }}">
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
<body class="lockscreen">
    <div class="container">
        <div class="row">
            <div class="locksreen-col text-center">
                <img src="images/avtar-1.jpg" class="img-circle" alt="">
                <h3><small>Logged In As</small>David Villa</h3>
                <form class="m-t" role="form" action="http://psd2allconversion.com/templates/themeforest/html/codex/v1.1/html/index.html">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="******" required="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block full-width">Unlock</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
