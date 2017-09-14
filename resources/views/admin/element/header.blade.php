


<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>Mannager BDS 1K</title>

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
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/select2.css" />
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/datatables.css" />
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/bootstrap-colorpicker.css"/>
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/bootstrap-timepicker.css" />
        


        <!-- Upload file -->
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/bootstrap-fileupload.min.css" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/jquery-ui-1.10.4.custom.css" />
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/morris.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{asset('public/admin')}}/css/theme-custom.css">

        <!-- Head Libs -->
        <script src="{{asset('public/admin')}}/js/modernizr.js"></script>
        
        <!--
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        -->
        <script src="{{asset('public/admin')}}/js/jquery.js"></script>

    </head>
    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="../" class="logo">
                        <img src="{{asset('public/admin')}}/images/logo.png" height="35" alt="Hotel admin" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
                <?php

                ?>
                <!-- start: search & user box -->
                <div class="header-right">
                    <span class="separator"></span>
                    <span class="separetor-end"></span>
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="<?php echo @$_SESSION['InfoUser']['avatar']; ?> " alt="<?php echo @$_SESSION['InfoUser']['name'];?>" class="img-circle" data-lock-picture="<?php echo @$_SESSION['InfoUser']['avatar']; ?>" />
                            </figure>
                            <div class="profile-info" data-lock-name="<?php echo @$_SESSION['InfoUser']['name']; ?>" data-lock-email="<?php echo @$_SESSION['InfoUser']['email']; ?>">
                                <span class="name"><?php echo @$_SESSION['InfoUser']['name']; ?></span>
                                <span class="role">Quản trị viên</span>
                            </div>

                            <i class="fa custom-caret"></i>
                        </a>

                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>

                                <li>
                                    <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Khóa màn hình</a>
                                </li>

                                <li>
                                    <a role="menuitem" tabindex="-1" href="{{ asset('admin/logout') }}"><i class="fa fa-power-off"></i> Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->