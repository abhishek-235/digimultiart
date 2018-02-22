<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin - Login</title>
        <link href="{{ asset('/public/backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/public/backend/bootstrap/css/bootstrap-responsive.min.css') }}" />
        <!-- theme color-->
            <link rel="stylesheet" href="{{ asset('/public/backend/css/blue.css') }}" />
        <!-- tooltip -->    
            <link rel="stylesheet" href="{{ asset('/public/backend/lib/qtip2/jquery.qtip.min.css') }}" />
        <!-- main styles -->
            <link rel="stylesheet" href="{{ asset('/public/backend/css/style.css') }}" />

        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    </head>
<body class="login_page">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="login_box">
                <div class="top_b">Sign in to Admin</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/seller_login') }}">
                        {{ csrf_field() }}
                        <div class="cnt_b">
                            <div class="formRow">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-user"></i></span><input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="formRow">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-lock"></i></span><input type="password" id="password" name="password" placeholder="Password" value="" />
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>                  
                        </div>
                        <div class="btm_b clearfix">
                            <button class="btn btn-inverse pull-right" type="submit">Sign In</button>                   
                        </div>
                    </form>

                    

                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('/public/backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('/public/backend/js/jquery.actual.min.js') }}"></script>
<script src="{{ asset('/public/backend/lib/validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/public/backend/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>