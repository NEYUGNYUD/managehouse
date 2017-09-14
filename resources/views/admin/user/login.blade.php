<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{asset('public/admin')}}/images/logo.png">
        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/bootstrap.css" />
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/font-awesome.css" />
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/magnific-popup.css" />
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/datepicker3.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/theme-custom.css">

        <!-- Head Libs -->
        <script src="{{asset('public/admin')}}/js/modernizr.js"></script>

    </head>
    <body>
        <!-- start: page -->
        <section class="body-sign">
            <div class="center-sign">
                <a href="/" class="logo pull-left">
                    <img src="{{asset('public/admin')}}/images/logo.png" height="54" alt="Bất động sản 1k" />
                </a>

                <div class="panel panel-sign">
                    <div class="panel-title-sign mt-xl text-right">
                        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Đăng nhập</h2>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('flash_messages'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!! Session::get('flash_messages') !!}
                            </div>
                        @endif
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{!! $error !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group mb-lg">
                                <label>Username</label>
                                <div class="input-group input-group-icon">
                                    <input name="account" type="text" class="form-control input-lg" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <label class="pull-left">Password</label>
                                <div class="input-group input-group-icon">
                                    <input name="password" type="password" class="form-control input-lg" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                                </div>                                
                            </div>

                            <div class="row">

                                <div class="col-sm-8 text-right">
                                    <button type="submit" class="btn btn-primary hidden-xs">Đăng nhập</button>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Đăng nhập</button>
                                </div>
                            </div>
                            <br/>
                        </form>
                    </div>
                </div>

                <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2017. Mua Bán Bất Động Sản 1K.</p>
            </div>
        </section>
        <!-- end: page -->

        <!-- Vendor -->
        <script src="{{asset('public/admin')}}/js/jquery.js"></script>
        <script src="{{asset('public/admin')}}/js/jquery.browser.mobile.js"></script>
        <script src="{{asset('public/admin')}}/js/bootstrap.js"></script>
        <script src="{{asset('public/admin')}}/js/nanoscroller.js"></script>
        <script src="{{asset('public/admin')}}/js/bootstrap-datepicker.js"></script>
        <script src="{{asset('public/admin')}}/js/magnific-popup.js"></script>
        <script src="{{asset('public/admin')}}/js/jquery.placeholder.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{asset('public/admin')}}/js/theme.js"></script>

        <!-- Theme Custom -->
        <script src="{{asset('public/admin')}}/js/theme.custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="{{asset('public/admin')}}/js/theme.init.js"></script>

    </body>
</html>