<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com//polygon/adminty/default/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 11:25:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->

    <link rel="icon" href="https://colorlib.com//polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/advance-elements/css/bootstrap-datetimepicker.css')}}">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap-daterangepicker/css/daterangepicker.css')}}" />
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/datedropper/css/datedropper.min.css')}}" />
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/feather/css/feather.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="index.html">
                        <img class="img-fluid" src="{{asset('assets/images/logo.png')}}" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-pink">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-message-square"></i>
                                    <span class="badge bg-c-green">3</span>
                                </div>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                            <i class="feather icon-mail"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                            <i class="feather icon-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-normal-sign-in.html">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar chat start -->
        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="card card_main p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-inner-header">
                            <div class="back_chatBox">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat start-->
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-chevron-left"></i> Josephin Doe
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media-right photo-table">
                    <a href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                    </a>
                </div>
            </div>
            <div class="chat-reply-box p-b-20">
                <div class="right-icon-control">
                    <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                    <div class="form-icon">
                        <i class="feather icon-navigation"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">Navigation</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="index.html">
                                            <span class="pcoded-mtext">Default</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="dashboard-crm.html">
                                            <span class="pcoded-mtext">CRM</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dashboard-analytics.html">
                                            <span class="pcoded-mtext">Analytics</span>
                                            <span class="pcoded-badge label label-info ">NEW</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                    <span class="pcoded-mtext">Page layouts</span>
                                    <span class="pcoded-badge label label-warning">NEW</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-mtext">Vertical</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="menu-static.html">
                                                    <span class="pcoded-mtext" >Static Layout</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-header-fixed.html">
                                                    <span class="pcoded-mtext" >Header Fixed</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-compact.html">
                                                    <span class="pcoded-mtext" >Compact</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-sidebar.html">
                                                    <span class="pcoded-mtext">Sidebar Fixed</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-mtext" >Horizontal</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="menu-horizontal-static.html" target="_blank">
                                                    <span class="pcoded-mtext" >Static Layout</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-horizontal-fixed.html" target="_blank">
                                                    <span class="pcoded-mtext">Fixed layout</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-horizontal-icon.html" target="_blank">
                                                    <span class="pcoded-mtext">Static With Icon</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-horizontal-icon-fixed.html" target="_blank">
                                                    <span class="pcoded-mtext">Fixed With Icon</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-bottom.html">
                                            <span class="pcoded-mtext" >Bottom Menu</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-layout.html" target="_blank">
                                            <span class="pcoded-mtext">Box Layout</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-rtl.html" target="_blank">
                                            <span class="pcoded-mtext">RTL</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="navbar-light.html">
                                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                    <span class="pcoded-mtext">Navigation</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                    <span class="pcoded-mtext" >Widget</span>
                                    <span class="pcoded-badge label label-danger">100+</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="widget-statistic.html">
                                            <span class="pcoded-mtext" >Statistic</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="widget-data.html">
                                            <span class="pcoded-mtext" >Data</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="widget-chart.html">
                                            <span class="pcoded-mtext" >Chart Widget</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">UI Element</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                    <span class="pcoded-mtext" >Basic Components</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="alert.html">
                                            <span class="pcoded-mtext">Alert</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="breadcrumb.html">
                                            <span class="pcoded-mtext" >Breadcrumbs</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="button.html">
                                            <span class="pcoded-mtext" >Button</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-shadow.html">
                                            <span class="pcoded-mtext" >Box-Shadow</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="accordion.html">
                                            <span class="pcoded-mtext" >Accordion</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="generic-class.html">
                                            <span class="pcoded-mtext" >Generic Class</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="tabs.html">
                                            <span class="pcoded-mtext" >Tabs</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="color.html">
                                            <span class="pcoded-mtext" >Color</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="label-badge.html">
                                            <span class="pcoded-mtext">Label Badge</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="progress-bar.html">
                                            <span class="pcoded-mtext" >Progress Bar</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="preloader.html">
                                            <span class="pcoded-mtext" >Pre-Loader</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="list.html">
                                            <span class="pcoded-mtext" >List</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="tooltip.html">
                                            <span class="pcoded-mtext" >Tooltip And Popover</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="typography.html">
                                            <span class="pcoded-mtext" >Typography</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="other.html">
                                            <span class="pcoded-mtext" >Other</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-gitlab"></i></span>
                                    <span class="pcoded-mtext">Advance Components</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="draggable.html">
                                            <span class="pcoded-mtext" >Draggable</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="bs-grid.html">
                                            <span class="pcoded-mtext" >Grid Stack</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="light-box.html">
                                            <span class="pcoded-mtext" >Light Box</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="modal.html">
                                            <span class="pcoded-mtext" >Modal</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="notification.html">
                                            <span class="pcoded-mtext" >Notifications</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="notify.html">
                                            <span class="pcoded-mtext" >PNOTIFY</span>
                                            <span class="pcoded-badge label label-info">NEW</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="rating.html">
                                            <span class="pcoded-mtext" >Rating</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="range-slider.html">
                                            <span class="pcoded-mtext" >Range Slider</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="slider.html">
                                            <span class="pcoded-mtext" >Slider</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="syntax-highlighter.html">
                                            <span class="pcoded-mtext" >Syntax Highlighter</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="tour.html">
                                            <span class="pcoded-mtext" >Tour</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="treeview.html">
                                            <span class="pcoded-mtext" >Tree View</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="nestable.html">
                                            <span class="pcoded-mtext" >Nestable</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="toolbar.html">
                                            <span class="pcoded-mtext" >Toolbar</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="x-editable.html">
                                            <span class="pcoded-mtext" >X-Editable</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                                    <span class="pcoded-mtext" >Extra Components</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="session-timeout.html">
                                            <span class="pcoded-mtext" >Session Timeout</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="session-idle-timeout.html">
                                            <span class="pcoded-mtext" >Session Idle Timeout</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="offline.html">
                                            <span class="pcoded-mtext" >Offline</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class=" ">
                                <a href="animation.html">
                                    <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                    <span class="pcoded-mtext" >Animations</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="sticky.html">
                                    <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                                    <span class="pcoded-mtext" >Sticky Notes</span>
                                    <span class="pcoded-badge label label-danger">HOT</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-command"></i></span>
                                    <span class="pcoded-mtext" >Icons</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="icon-font-awesome.html">
                                            <span class="pcoded-mtext" >Font Awesome</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-themify.html">
                                            <span class="pcoded-mtext" >Themify</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-simple-line.html">
                                            <span class="pcoded-mtext" >Simple Line Icon</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-ion.html">
                                            <span class="pcoded-mtext" >Ion Icon</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-material-design.html">
                                            <span class="pcoded-mtext" >Material Design</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-icofonts.html">
                                            <span class="pcoded-mtext" >Ico Fonts</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-weather.html">
                                            <span class="pcoded-mtext" >Weather Icon</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-typicons.html">
                                            <span class="pcoded-mtext" >Typicons</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-flags.html">
                                            <span class="pcoded-mtext" >Flags</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Forms</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                    <span class="pcoded-mtext" >Form Components</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="form-elements-component.html">
                                            <span class="pcoded-mtext" >Form Components</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form-elements-add-on.html">
                                            <span class="pcoded-mtext" >Form-Elements-Add-On</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form-elements-advance.html">
                                            <span class="pcoded-mtext" >Form-Elements-Advance</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form-validation.html">
                                            <span class="pcoded-mtext" >Form Validation</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="form-picker.html">
                                    <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                                    <span class="pcoded-mtext" >Form Picker</span>
                                    <span class="pcoded-badge label label-warning">NEW</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-select.html">
                                    <span class="pcoded-micon"><i class="feather icon-feather"></i></span>
                                    <span class="pcoded-mtext" >Form Select</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-masking.html">
                                    <span class="pcoded-micon"><i class="feather icon-shield"></i></span>
                                    <span class="pcoded-mtext" >Form Masking</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-wizard.html">
                                    <span class="pcoded-micon"><i class="feather icon-tv"></i></span>
                                    <span class="pcoded-mtext" >Form Wizard</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                                    <span class="pcoded-mtext" >Ready To Use</span>
                                    <span class="pcoded-badge label label-danger">HOT</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="ready-cloned-elements-form.html">
                                            <span class="pcoded-mtext" >Cloned Elements Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-currency-form.html">
                                            <span class="pcoded-mtext" >Currency Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-form-booking.html">
                                            <span class="pcoded-mtext" >Booking Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-form-booking-multi-steps.html">
                                            <span class="pcoded-mtext" >Booking Multi Steps Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-form-comment.html">
                                            <span class="pcoded-mtext" >Comment Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-form-contact.html">
                                            <span class="pcoded-mtext" >Contact Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-job-application-form.html">
                                            <span class="pcoded-mtext" >Job Application Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-js-addition-form.html">
                                            <span class="pcoded-mtext" >JS Addition Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-login-form.html">
                                            <span class="pcoded-mtext" >Login Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-popup-modal-form.html" target="_blank">
                                            <span class="pcoded-mtext" >Popup Modal Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-registration-form.html">
                                            <span class="pcoded-mtext" >Registration Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-review-form.html">
                                            <span class="pcoded-mtext" >Review Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-subscribe-form.html">
                                            <span class="pcoded-mtext" >Subscribe Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-suggestion-form.html">
                                            <span class="pcoded-mtext" >Suggestion Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-tabs-form.html">
                                            <span class="pcoded-mtext" >Tabs Form</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Tables</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                    <span class="pcoded-mtext" >Bootstrap Table</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="bs-basic-table.html">
                                            <span class="pcoded-mtext" >Basic Table</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="bs-table-sizing.html">
                                            <span class="pcoded-mtext" >Sizing Table</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="bs-table-border.html">
                                            <span class="pcoded-mtext" >Border Table</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="bs-table-styling.html">
                                            <span class="pcoded-mtext" >Styling Table</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-inbox"></i></span>
                                    <span class="pcoded-mtext" >Data Table</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="dt-basic.html">
                                            <span class="pcoded-mtext" >Basic Initialization</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-advance.html">
                                            <span class="pcoded-mtext" >Advance Initialization</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-styling.html">
                                            <span class="pcoded-mtext" >Styling</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-api.html">
                                            <span class="pcoded-mtext" >API</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ajax.html">
                                            <span class="pcoded-mtext" >Ajax</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-server-side.html">
                                            <span class="pcoded-mtext" >Server Side</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-plugin.html">
                                            <span class="pcoded-mtext" >Plug-In</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-data-sources.html">
                                            <span class="pcoded-mtext" >Data Sources</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-server"></i></span>
                                    <span class="pcoded-mtext">Data Table Extensions</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="dt-ext-autofill.html">
                                            <span class="pcoded-mtext" >AutoFill</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-mtext" >Button</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="dt-ext-basic-buttons.html">
                                                    <span class="pcoded-mtext" >Basic Button</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-ext-buttons-html-5-data-export.html">
                                                    <span class="pcoded-mtext" >Html-5 Data Export</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-col-reorder.html">
                                            <span class="pcoded-mtext" >Col Reorder</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-fixed-columns.html">
                                            <span class="pcoded-mtext" >Fixed Columns</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-fixed-header.html">
                                            <span class="pcoded-mtext" >Fixed Header</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-key-table.html">
                                            <span class="pcoded-mtext" >Key Table</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-responsive.html">
                                            <span class="pcoded-mtext" >Responsive</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-row-reorder.html">
                                            <span class="pcoded-mtext" >Row Reorder</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-scroller.html">
                                            <span class="pcoded-mtext"  >Scroller</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-select.html">
                                            <span class="pcoded-mtext" >Select Table</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="foo-table.html">
                                    <span class="pcoded-micon"><i class="feather icon-hash"></i></span>
                                    <span class="pcoded-mtext" >FooTable</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-airplay"></i></span>
                                    <span class="pcoded-mtext" >Handson Table</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="handson-appearance.html">
                                            <span class="pcoded-mtext">Appearance</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-data-operation.html">
                                            <span class="pcoded-mtext">Data Operation</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-rows-cols.html">
                                            <span class="pcoded-mtext">Rows Columns</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-columns-only.html">
                                            <span class="pcoded-mtext">Columns Only</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-cell-features.html">
                                            <span class="pcoded-mtext">Cell Features</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-cell-types.html">
                                            <span class="pcoded-mtext">Cell Types</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-integrations.html">
                                            <span class="pcoded-mtext">Integrations</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-rows-only.html">
                                            <span class="pcoded-mtext">Rows Only</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-utilities.html">
                                            <span class="pcoded-mtext">Utilities</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="editable-table.html">
                                    <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                                    <span class="pcoded-mtext" >Editable Table</span>
                                </a>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Chart And Maps</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
                                    <span class="pcoded-mtext" >Charts</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="chart-google.html">
                                            <span class="pcoded-mtext" >Google Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-echart.html">
                                            <span class="pcoded-mtext" >Echarts</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-chartjs.html">
                                            <span class="pcoded-mtext" >ChartJs</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-list.html">
                                            <span class="pcoded-mtext" >List Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-float.html">
                                            <span class="pcoded-mtext" >Float Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-knob.html">
                                            <span class="pcoded-mtext" >Knob chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-morris.html">
                                            <span class="pcoded-mtext" >Morris Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-nvd3.html">
                                            <span class="pcoded-mtext" >Nvd3 Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-peity.html">
                                            <span class="pcoded-mtext" >Peity Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-radial.html">
                                            <span class="pcoded-mtext" >Radial Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-rickshaw.html">
                                            <span class="pcoded-mtext" >Rickshaw Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-sparkline.html">
                                            <span class="pcoded-mtext" >Sparkline Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-c3.html">
                                            <span class="pcoded-mtext" >C3 Chart</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                                    <span class="pcoded-mtext">Maps</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="map-google.html">
                                            <span class="pcoded-mtext" >Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="map-vector.html">
                                            <span class="pcoded-mtext" >Vector Maps</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="map-api.html">
                                            <span class="pcoded-mtext" >Google Map Search API</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="location.html">
                                            <span class="pcoded-mtext" >Location</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="https://colorlib.com//polygon/adminty/files/extra-pages/landingpage/index.html" target="_blank">
                                    <span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span>
                                    <span class="pcoded-mtext" >Landing Page</span>
                                </a>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Pages</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-unlock"></i></span>
                                    <span class="pcoded-mtext">Authentication</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="auth-normal-sign-in.html" target="_blank">
                                            <span class="pcoded-mtext" >Login With BG Image</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-sign-in-social.html" target="_blank">
                                            <span class="pcoded-mtext" >Login With Social Icon</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-sign-in-social-header-footer.html" target="_blank">
                                            <span class="pcoded-mtext" >Login Social With Header And Footer</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-normal-sign-in-header-footer.html" target="_blank">
                                            <span class="pcoded-mtext" >Login With Header And Footer</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-sign-up.html" target="_blank">
                                            <span class="pcoded-mtext" >Registration BG Image</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-sign-up-social.html" target="_blank">
                                            <span class="pcoded-mtext" >Registration Social Icon</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-sign-up-social-header-footer.html" target="_blank">
                                            <span class="pcoded-mtext" >Registration Social With Header And Footer</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-sign-up-header-footer.html" target="_blank">
                                            <span class="pcoded-mtext" >Registration With Header And Footer</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-multi-step-sign-up.html" target="_blank">
                                            <span class="pcoded-mtext" >Multi Step Registration</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-reset-password.html" target="_blank">
                                            <span class="pcoded-mtext" >Forgot Password</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-lock-screen.html" target="_blank">
                                            <span class="pcoded-mtext" >Lock Screen</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-modal.html" target="_blank">
                                            <span class="pcoded-mtext" >Modal</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                                    <span class="pcoded-mtext" >Maintenance</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="error.html">
                                            <span class="pcoded-mtext" >Error</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="comming-soon.html">
                                            <span class="pcoded-mtext" >Comming Soon</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="offline-ui.html">
                                            <span class="pcoded-mtext" >Offline UI</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu pcoded-trigger">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                    <span class="pcoded-mtext" >User Profile</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="timeline.html">
                                            <span class="pcoded-mtext" >Timeline</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="timeline-social.html">
                                            <span class="pcoded-mtext" >Timeline Social</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="user-profile.html">
                                            <span class="pcoded-mtext" >User Profile</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="user-card.html">
                                            <span class="pcoded-mtext" >User Card</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                                    <span class="pcoded-mtext" >E-Commerce</span>
                                    <span class="pcoded-badge label label-danger">NEW</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="product.html">
                                            <span class="pcoded-mtext" >Product</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-list.html">
                                            <span class="pcoded-mtext" >Product List</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-edit.html">
                                            <span class="pcoded-mtext" >Product Edit</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-detail.html">
                                            <span class="pcoded-mtext" >Product Detail</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-cart.html">
                                            <span class="pcoded-mtext" >Product Card</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-payment.html">
                                            <span class="pcoded-mtext" >Credit Card Form</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-mail"></i></span>
                                    <span class="pcoded-mtext" >Email</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="email-compose.html">
                                            <span class="pcoded-mtext" >Compose Email</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="email-inbox.html">
                                            <span class="pcoded-mtext" >Inbox</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="email-read.html">
                                            <span class="pcoded-mtext" >Read Mail</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-mtext" >Email Template</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="https://colorlib.com//polygon/adminty/files/extra-pages/email-templates/email-welcome.html">
                                                    <span class="pcoded-mtext" >Welcome Email</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="https://colorlib.com//polygon/adminty/files/extra-pages/email-templates/email-password.html">
                                                    <span class="pcoded-mtext"  >Reset Password</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="https://colorlib.com//polygon/adminty/files/extra-pages/email-templates/email-newsletter.html">
                                                    <span class="pcoded-mtext"  >Newsletter Email</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="https://colorlib.com//polygon/adminty/files/extra-pages/email-templates/email-launch.html">
                                                    <span class="pcoded-mtext" >App Launch</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="https://colorlib.com//polygon/adminty/files/extra-pages/email-templates/email-activation.html">
                                                    <span class="pcoded-mtext" >Activation Code</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">App</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class=" ">
                                <a href="chat.html">
                                    <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                                    <span class="pcoded-mtext" >Chat</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-globe"></i></span>
                                    <span class="pcoded-mtext" >Social</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="fb-wall.html">
                                            <span class="pcoded-mtext" >Wall</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="message.html">
                                            <span class="pcoded-mtext" >Messages</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                                    <span class="pcoded-mtext" >Task</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="task-list.html">
                                            <span class="pcoded-mtext" >Task List</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="task-board.html">
                                            <span class="pcoded-mtext" >Task Board</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="task-detail.html">
                                            <span class="pcoded-mtext" >Task Detail</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="issue-list.html">
                                            <span class="pcoded-mtext" >Issue List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
                                    <span class="pcoded-mtext" >To-Do</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="todo.html">
                                            <span class="pcoded-mtext" >To-Do</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="notes.html">
                                            <span class="pcoded-mtext">Notes</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-image"></i></span>
                                    <span class="pcoded-mtext">Gallery</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="gallery-grid.html">
                                            <span class="pcoded-mtext" >Gallery-Grid</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="gallery-masonry.html">
                                            <span class="pcoded-mtext" >Masonry Gallery</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="gallery-advance.html">
                                            <span class="pcoded-mtext" >Advance Gallery</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-search"></i><b>S</b></span>
                                    <span class="pcoded-mtext" >Search</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="search-result.html">
                                            <span class="pcoded-mtext" >Simple Search</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="search-result2.html">
                                            <span class="pcoded-mtext" >Grouping Search</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-award"></i></span>
                                    <span class="pcoded-mtext" >Job Search</span>
                                    <span class="pcoded-badge label label-danger">NEW</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="job-card-view.html">
                                            <span class="pcoded-mtext" >Card View</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="job-details.html">
                                            <span class="pcoded-mtext" >Job Detailed</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="job-find.html">
                                            <span class="pcoded-mtext" >Job Find</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="job-panel-view.html">
                                            <span class="pcoded-mtext" >Job Panel View</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Extension</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-file-plus"></i></span>
                                    <span class="pcoded-mtext" >Editor</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="ck-editor.html">
                                            <span class="pcoded-mtext" >CK-Editor</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="wysiwyg-editor.html">
                                            <span class="pcoded-mtext" >WYSIWYG Editor</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="ace-editor.html">
                                            <span class="pcoded-mtext" >Ace Editor</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="long-press-editor.html">
                                            <span class="pcoded-mtext" >Long Press Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-file-minus"></i></span>
                                    <span class="pcoded-mtext" >Invoice</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="invoice.html">
                                            <span class="pcoded-mtext" >Invoice</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="invoice-summary.html">
                                            <span class="pcoded-mtext" >Invoice Summary</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="invoice-list.html">
                                            <span class="pcoded-mtext" >Invoice List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                                    <span class="pcoded-mtext" >Event Calendar</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="event-full-calender.html">
                                            <span class="pcoded-mtext" >Full Calendar</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="event-clndr.html">
                                            <span class="pcoded-mtext" >CLNDER</span>
                                            <span class="pcoded-badge label label-info">NEW</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="image-crop.html">
                                    <span class="pcoded-micon"><i class="feather icon-scissors"></i></span>
                                    <span class="pcoded-mtext" >Image Cropper</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="file-upload.html">
                                    <span class="pcoded-micon"><i class="feather icon-upload-cloud"></i></span>
                                    <span class="pcoded-mtext" >File Upload</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="change-loges.html">
                                    <span class="pcoded-micon"><i class="feather icon-briefcase"></i><b>CL</b></span>
                                    <span class="pcoded-mtext" >Change Loges</span>
                                </a>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Other</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                                    <span class="pcoded-mtext">Menu Levels</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-mtext" >Menu Level 2.1</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-mtext" >Menu Level 2.2</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="javascript:void(0)">
                                                    <span class="pcoded-mtext" >Menu Level 3.1</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-mtext" >Menu Level 2.3</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)" class="disabled">
                                    <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                                    <span class="pcoded-mtext"  >Disabled Menu</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="sample-page.html">
                                    <span class="pcoded-micon"><i class="feather icon-watch"></i></span>
                                    <span class="pcoded-mtext" >Sample Page</span>
                                </a>
                            </li>
                        </ul>
                        <div class="pcoded-navigatio-lavel">Support</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="">
                                <a href="http://html.codedthemes.com/Adminty/doc" target="_blank">
                                    <span class="pcoded-micon"><i class="feather icon-monitor"></i></span>
                                    <span class="pcoded-mtext" >Documentation</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" target="_blank">
                                    <span class="pcoded-micon"><i class="feather icon-help-circle"></i></span>
                                    <span class="pcoded-mtext" >Submit Issue</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>User Profile</h4>
                                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">User Profile</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">User Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!--profile cover start-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="cover-profile">
                                                    <div class="profile-bg-img">
                                                        <img class="profile-bg-img img-fluid" src="../files/assets/images/user-profile/bg-img1.jpg" alt="bg-img">
                                                        <div class="card-block user-info">
                                                            <div class="col-md-12">
                                                                <div class="media-left">
                                                                    <a href="#" class="profile-image">
                                                                        <img class="user-img img-radius" src="../files/assets/images/user-profile/user-img.jpg" alt="user-img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body row">
                                                                    <div class="col-lg-12">
                                                                        <div class="user-title">
                                                                            <h2>Josephin Villa</h2>
                                                                            <span class="text-white">Web designer</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="pull-right cover-btn">
                                                                            <button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i> Follow</button>
                                                                            <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--profile cover end-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- tab header start -->
                                                <div class="tab-header card">
                                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">User's Services</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">User's Contacts</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#review" role="tab">Reviews</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- tab header end -->
                                                <!-- tab content start -->
                                                <div class="tab-content">
                                                    <!-- tab panel personal start -->
                                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                                        <!-- personal card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">About Me</h5>
                                                                <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                            <i class="icofont icofont-edit"></i>
                                        </button>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table m-0">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">Full Name</th>
                                                                                                        <td>Josephine Villa</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Gender</th>
                                                                                                        <td>Female</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Birth Date</th>
                                                                                                        <td>October 25th, 1990</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Marital Status</th>
                                                                                                        <td>Single</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Location</th>
                                                                                                        <td>New York, USA</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">Email</th>
                                                                                                        <td><a href="#!"><span class="__cf_email__" data-cfemail="e2a6878f8da2879a838f928e87cc818d8f">[email&#160;protected]</span></a></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Mobile Number</th>
                                                                                                        <td>(0123) - 4567891</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Twitter</th>
                                                                                                        <td>@xyz</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Skype</th>
                                                                                                        <td>demo.skype</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Website</th>
                                                                                                        <td><a href="#!">www.demo.com</a></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of general info -->
                                                                        </div>
                                                                        <!-- end of col-lg-12 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                                <!-- end of view-info -->
                                                                <div class="edit-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <table class="table">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                                                            <input type="text" class="form-control" placeholder="Full Name">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="form-radio">
                                                                                                            <div class="group-add-on">
                                                                                                                <div class="radio radiofill radio-inline">
                                                                                                                    <label>
                                                                                                <input type="radio" name="radio" checked><i class="helper"></i> Male
                                                                                            </label>
                                                                                                                </div>
                                                                                                                <div class="radio radiofill radio-inline">
                                                                                                                    <label>
                                                                                                <input type="radio" name="radio"><i class="helper"></i> Female
                                                                                            </label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date" />
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <select id="hello-single" class="form-control">
                                                                                    <option value="">---- Marital Status ----</option>
                                                                                    <option value="married">Married</option>
                                                                                    <option value="unmarried">Unmarried</option>
                                                                                </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
                                                                                                            <input type="text" class="form-control" placeholder="Address">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                    <div class="col-lg-6">
                                                                                        <table class="table">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
                                                                                                            <input type="text" class="form-control" placeholder="Mobile Number">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
                                                                                                            <input type="text" class="form-control" placeholder="Twitter Id">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                                                                    <input type="text" class="form-control" placeholder="Twitter Id">
                                                                                </div>
                                                                            </td>
                                                                        </tr> -->
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>
                                                                                                            <input type="email" class="form-control" placeholder="Skype Id">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-addon"><i class="icofont icofont-earth"></i></span>
                                                                                                            <input type="text" class="form-control" placeholder="website">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                                <div class="text-center">
                                                                                    <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                                                    <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end of edit info -->
                                                                        </div>
                                                                        <!-- end of col-lg-12 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                                <!-- end of edit-info -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-header-text">Description About Me</h5>
                                                                        <button id="edit-info-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                    <i class="icofont icofont-edit"></i>
                                                </button>
                                                                    </div>
                                                                    <div class="card-block user-desc">
                                                                        <div class="view-desc">
                                                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.</p>
                                                                        </div>
                                                                        <div class="edit-desc">
                                                                            <div class="col-md-12">
                                                                                <textarea id="description">
                                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.</p>
                                                        </textarea>
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a>
                                                                                <a href="#!" id="edit-cancel-btn" class="btn btn-default waves-effect m-t-20">Cancel</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- personal card end-->
                                                    </div>
                                                    <!-- tab pane personal end -->
                                                    <!-- tab pane info start -->
                                                    <div class="tab-pane" id="binfo" role="tabpanel">
                                                        <!-- info card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">User Services</h5>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="card b-l-success business-info services m-b-20">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h5 class="card-header-text">Shivani Hero</h5>
                                                                                    </a>
                                                                                </div>
                                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="card b-l-danger business-info services">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h5 class="card-header-text">Dress and Sarees</h5>
                                                                                    </a>
                                                                                </div>
                                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="card b-l-info business-info services">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h5 class="card-header-text">Shivani Auto Port</h5>
                                                                                    </a>
                                                                                </div>
                                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="card b-l-warning business-info services">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h5 class="card-header-text">Hair stylist</h5>
                                                                                    </a>
                                                                                </div>
                                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="card b-l-danger business-info services">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h5 class="card-header-text">BMW India</h5>
                                                                                    </a>
                                                                                </div>
                                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="card b-l-success business-info services">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h5 class="card-header-text">Shivani Hero</h5>
                                                                                    </a>
                                                                                </div>
                                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
                                         </span>
                                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-header-text">Profit</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div id="main" style="height:300px;width: 100%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- info card end -->
                                                    </div>
                                                    <!-- tab pane info end -->
                                                    <!-- tab pane contact start -->
                                                    <div class="tab-pane" id="contacts" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <!-- user contact card left side start -->
                                                                <div class="card">
                                                                    <div class="card-header contact-user">
                                                                        <img class="img-radius img-40" src="../files/assets/images/avatar-4.jpg" alt="contact-user">
                                                                        <h5 class="m-l-10">John Doe</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <ul class="list-group list-contacts">
                                                                            <li class="list-group-item active"><a href="#">All Contacts</a></li>
                                                                            <li class="list-group-item"><a href="#">Recent Contacts</a></li>
                                                                            <li class="list-group-item"><a href="#">Favourite Contacts</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="card-block groups-contact">
                                                                        <h4>Groups</h4>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item justify-content-between">
                                                                                Project
                                                                                <span class="badge badge-primary badge-pill">30</span>
                                                                            </li>
                                                                            <li class="list-group-item justify-content-between">
                                                                                Notes
                                                                                <span class="badge badge-success badge-pill">20</span>
                                                                            </li>
                                                                            <li class="list-group-item justify-content-between">
                                                                                Activity
                                                                                <span class="badge badge-info badge-pill">100</span>
                                                                            </li>
                                                                            <li class="list-group-item justify-content-between">
                                                                                Schedule
                                                                                <span class="badge badge-danger badge-pill">50</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h4 class="card-title">Contacts<span class="f-15"> (100)</span></h4>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="connection-list">
                                                                            <a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-1.jpg" alt="f-1" data-toggle="tooltip" data-placement="top" data-original-title="Airi Satou">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-2.jpg" alt="f-2" data-toggle="tooltip" data-placement="top" data-original-title="Angelica Ramos">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-3.jpg" alt="f-3" data-toggle="tooltip" data-placement="top" data-original-title="Ashton Cox">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-4.jpg" alt="f-4" data-toggle="tooltip" data-placement="top" data-original-title="Cara Stevens">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-5.jpg" alt="f-5" data-toggle="tooltip" data-placement="top" data-original-title="Garrett Winters">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-1.jpg" alt="f-6" data-toggle="tooltip" data-placement="top" data-original-title="Cedric Kelly">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-3.jpg" alt="f-7" data-toggle="tooltip" data-placement="top" data-original-title="Brielle Williamson">
                                                                            </a>
                                                                            <a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-5.jpg" alt="f-8" data-toggle="tooltip" data-placement="top" data-original-title="Jena Gaines">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- user contact card left side end -->
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <!-- contact data table card start -->
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5 class="card-header-text">Contacts</h5>
                                                                            </div>
                                                                            <div class="card-block contact-details">
                                                                                <div class="data_table_main table-responsive dt-responsive">
                                                                                    <table id="simpletable" class="table  table-striped table-bordered nowrap">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Name</th>
                                                                                                <th>Email</th>
                                                                                                <th>Mobileno.</th>
                                                                                                <th>Favourite</th>
                                                                                                <th>Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="87e6e5e4b6b5b4c7e0eae6eeeba9e4e8ea">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="18797a7b292a2b587f75797174367b7775">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="79181b1a484b4a391e14181015571a1614">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f1909392c0c3c2b1969c90989ddf929e9c">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="98f9fafba9aaabd8fff5f9f1f4b6fbf7f5">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d1b0b3b2e0e3e291b6bcb0b8bdffb2bebc">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="69080b0a585b5a290e04080005470a0604">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ccadaeaffdfeff8caba1ada5a0e2afa3a1">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82e3e0e1b3b0b1c2e5efe3ebeeace1edef">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bfdedddc8e8d8cffd8d2ded6d391dcd0d2">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2b4a49481a19186b4c464a424705484446">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1c0c3c2909392e1c6ccc0c8cd8fc2cecc">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f6979495c7c4c5b6919b979f9ad895999b">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4e2f2c2d7f7c7d0e29232f2722602d2123">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2647444517141566414b474f4a0845494b">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6a0b08095b58592a0d070b030644090507">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1677747527242556717b777f7a3875797b">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="44252627757677042329252d286a272b29">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a5c4c7c6949796e5c2c8c4ccc98bc6cac8">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d2b3b0b1e3e0e192b5bfb3bbbefcb1bdbf">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f8999a9bc9cacbb89f95999194d69b9795">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td>abc1<a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="52606112353f333b3e7c313d3f">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d7c7f7e2c2f2e5d7a707c7471337e7270">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star-o" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6b0a09085a59582b0c060a020745080406">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9b8bbbae8ebea99beb4b8b0b5f7bab6b4">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0766656436353447606a666e6b2964686a">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="79181b1a484b4a391e14181015571a1614">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a4b48491b18196a4d474b434604494547">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2746454416151467404a464e4b0944484a">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b4d5d6d7858687f4d3d9d5ddd89ad7dbd9">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0c6d6e6f3d3e3f4c6b616d6560226f6361">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aecfcccd9f9c9deec9c3cfc7c280cdc1c3">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ccadaeaffdfeff8caba1ada5a0e2afa3a1">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86e7e4e5b7b4b5c6e1ebe7efeaa8e5e9eb">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ffefdfcaeadacdff8f2fef6f3b1fcf0f2">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="64050607555657240309050d084a070b09">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5736353466656417303a363e3b7934383a">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="08696a6b393a3b486f65696164266b6765">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3051525301020370575d51595c1e535f5d">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9b8bbbae8ebea99beb4b8b0b5f7bab6b4">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c8a9aaabf9fafb88afa5a9a1a4e6aba7a5">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c3d3e3f6d6e6f1c3b313d3530723f3331">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7a1b18194b48493a1d171b131654191517">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bedfdcdd8f8c8dfed9d3dfd7d290ddd1d3">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aacbc8c99b9899eacdc7cbc3c684c9c5c7">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1c0c3c2909392e1c6ccc0c8cd8fc2cecc">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="28494a4b191a1b684f45494144064b4745">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c0a1a2a3f1f2f380a7ada1a9aceea3afad">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e5848786d4d7d6a58288848c89cb868a88">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cdacafaefcfffe8daaa0aca4a1e3aea2a0">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Garrett Winters</td>
                                                                                                <td><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="92f3f0f1a3a0a1d2f5fff3fbfebcf1fdff">[email&#160;protected]</a></td>
                                                                                                <td>9989988988</td>
                                                                                                <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                                                <td class="dropdown">
                                                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                                                    <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-eye"></i>Activity</a>
                                                                                                        <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                        <tfoot>
                                                                                            <tr>
                                                                                                <th>Name</th>
                                                                                                <th>Email</th>
                                                                                                <th>Mobileno.</th>
                                                                                                <th>Favourite</th>
                                                                                                <th>Action</th>
                                                                                            </tr>
                                                                                        </tfoot>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- contact data table card end -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- tab pane contact end -->
                                                    <div class="tab-pane" id="review" role="tabpanel">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Review</h5>
                                                            </div>
                                                            <div class="card-block">
                                                                <ul class="media-list">
                                                                    <li class="media">
                                                                        <div class="media-left">
                                                                            <a href="#">
                                                                                <img class="media-object img-radius comment-img" src="../files/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h6 class="media-heading">Sortino media<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                            <div class="stars-example-css review-star">
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                            </div>
                                                                            <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                            <div class="m-b-25">
                                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                            </div>
                                                                            <hr>
                                                                            <!-- Nested media object -->
                                                                            <div class="media mt-2">
                                                                                <a class="media-left" href="#">
                                                                                    <img class="media-object img-radius comment-img" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                                                </a>
                                                                                <div class="media-body">
                                                                                    <h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                                    <div class="stars-example-css review-star">
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                    </div>
                                                                                    <p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                                    <div class="m-b-25">
                                                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <!-- Nested media object -->
                                                                                    <div class="media mt-2">
                                                                                        <div class="media-left">
                                                                                            <a href="#">
                                                                                                <img class="media-object img-radius comment-img" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                                            <div class="stars-example-css review-star">
                                                                                                <i class="icofont icofont-star"></i>
                                                                                                <i class="icofont icofont-star"></i>
                                                                                                <i class="icofont icofont-star"></i>
                                                                                                <i class="icofont icofont-star"></i>
                                                                                                <i class="icofont icofont-star"></i>
                                                                                            </div>
                                                                                            <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                                            <div class="m-b-25">
                                                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <hr>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Nested media object -->
                                                                            <div class="media mt-2">
                                                                                <div class="media-left">
                                                                                    <a href="#">
                                                                                        <img class="media-object img-radius comment-img" src="../files/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h6 class="media-heading">Cedric Kelly<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                                    <div class="stars-example-css review-star">
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                    </div>
                                                                                    <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                                    <div class="m-b-25">
                                                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                                    </div>
                                                                                    <hr>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media mt-2">
                                                                                <a class="media-left" href="#">
                                                                                    <img class="media-object img-radius comment-img" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                                                                </a>
                                                                                <div class="media-body">
                                                                                    <h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                                    <div class="stars-example-css review-star">
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                    </div>
                                                                                    <p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                                    <div class="m-b-25">
                                                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <!-- Nested media object -->
                                                                                    <div class="media mt-2">
                                                                                        <div class="media-left">
                                                                                            <a href="#">
                                                                                                <img class="media-object img-radius comment-img" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                                            <div class="stars-example-css review-star">
                                                                                                <i class="icofont icofont-star"></i>
                                                                                                <i class="icofont icofont-star"></i>
                                                                                                <i class="icofont icofont-star"></i>
                                                                                                <i class="icofont icofont-star"></i>
                                                                                                <i class="icofont icofont-star"></i>
                                                                                            </div>
                                                                                            <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                                            <div class="m-b-25">
                                                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <hr>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="media mt-2">
                                                                                <div class="media-left">
                                                                                    <a href="#">
                                                                                        <img class="media-object img-radius comment-img" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h6 class="media-heading">Mark Doe<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                                    <div class="stars-example-css review-star">
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                        <i class="icofont icofont-star"></i>
                                                                                    </div>
                                                                                    <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                                    <div class="m-b-25">
                                                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                                    </div>
                                                                                    <hr>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Right addon">
                                                                    <span class="input-group-addon"><i class="icofont icofont-send-mail"></i></span>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- tab content end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="{{asset('bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/popper.js')}}/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/modernizr/js/css-scrollbars.js')}}"></script>

    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="{{asset('assets/pages/advance-elements/moment-with-locales.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/pages/advance-elements/bootstrap-datetimepicker.min.js')}}"></script>
    <!-- Date-range picker js -->
    <script type="text/javascript" src="{{asset('bower_components/bootstrap-daterangepicker/js/daterangepicker.js')}}"></script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="{{asset('bower_components/datedropper/js/datedropper.min.js')}}"></script>
    <!-- data-table js -->
    <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- ck editor -->
    <script src="{{asset('assets/pages/ckeditor/ckeditor.js')}}"></script>
    <!-- echart js -->
    <script src="{{asset('assets/pages/chart/echarts/js/echarts-all.js')}}" type="text/javascript"></script>
    <!-- i18next.min.js')}} -->
    <script type="text/javascript" src="{{asset('bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <script src="{{asset('assets/pages/user-profile.js')}}"></script>
    <script src="{{asset('assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('assets/js/vartical-layout.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>


<!-- Mirrored from colorlib.com//polygon/adminty/default/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 11:26:02 GMT -->
</html>
