
<!DOCTYPE html>
<html>
<head>

    <!-- Title -->
    <title>{{config('temail.app_name')}} | Mailbox</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="{{asset('vendor/tyondo/temail/assets/plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
    <link href="{{asset('vendor/tyondo/temail/assets/plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('vendor/tyondo/temail/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/tyondo/temail/assets/plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/tyondo/temail/assets/plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/tyondo/temail/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/tyondo/temail/assets/plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/tyondo/temail/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/tyondo/temail/assets/plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/tyondo/temail/assets/plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="{{asset('vendor/tyondo/temail/assets/css/modern.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/tyondo/temail/assets/css/themes/green.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/tyondo/temail/assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('vendor/tyondo/temail/assets/plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
    <script src="{{asset('vendor/tyondo/temail/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="page-header-fixed page-sidebar-fixed compact-menu">
<div class="overlay"></div>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
    <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
    <div class="slimscroll">
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
    </div>
</nav>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
    <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
    <div class="slimscroll chat">
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="assets/images/avatar2.png" alt="">
            </div>
            <div class="chat-message">
                Hi There!
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                Hi! How are you?
            </div>
        </div>
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="assets/images/avatar2.png" alt="">
            </div>
            <div class="chat-message">
                Fine! do you like my project?
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                Yes, It's clean and creative, good job!
            </div>
        </div>
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="assets/images/avatar2.png" alt="">
            </div>
            <div class="chat-message">
                Thanks, I tried!
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                Good luck with your sales!
            </div>
        </div>
    </div>
    <div class="chat-write">
        <form class="form-horizontal" action="javascript:void(0);">
            <input type="text" class="form-control" placeholder="Say something">
        </form>
    </div>
</nav>
<div class="menu-wrap">
    <nav class="profile-menu">
        <div class="profile"><img src="assets/images/profile-menu-image.png" width="60" alt="David Green"/><span>David Green</span></div>
        <div class="profile-menu-list">
            <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
            <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
            <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
            <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
        </div>
    </nav>
    <button class="close-button" id="close-button">Close Menu</button>
</div>
<form class="search-form" action="#" method="GET">
    <div class="input-group">
        <input type="text" name="search" class="form-control search-input" placeholder="Search...">
        <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
    </div><!-- Input Group -->
</form><!-- Search Form -->
<main class="page-content content-wrap">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="sidebar-pusher">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="logo-box">
                <a href="index-2.html" class="logo-text"><span>{{config('temail.app_name')}}</span></a>
            </div><!-- Logo Box -->
            <div class="search-button">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
            </div>
            <div class="topmenu-outer">
                <div class="top-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                        </li>
                        <li>
                            <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                <i class="fa fa-cogs"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            Fixed Header
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            Fixed Sidebar
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right fixed-sidebar-check" checked>
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            Horizontal bar
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            Toggle Sidebar
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            Compact Menu
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right compact-menu-check" checked>
                                            </div>
                                        </li>
                                        <li class="no-link" role="presentation">
                                            Hover Menu
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            Boxed Layout
                                            <div class="ios-switch pull-right switch-md">
                                                <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="li-group">
                                    <ul class="list-unstyled">
                                        <li class="no-link" role="presentation">
                                            Choose Theme Color
                                            <div class="color-switcher">
                                                <a class="colorbox color-blue" href="inbox-altca00.html?theme=blue" title="Blue Theme" data-css="blue"></a>
                                                <a class="colorbox color-green" href="inbox-altaf91.html?theme=green" title="Green Theme" data-css="green"></a>
                                                <a class="colorbox color-red" href="inbox-alt0e99.html?theme=red" title="Red Theme" data-css="red"></a>
                                                <a class="colorbox color-white" href="inbox-alt13d4.html?theme=white" title="White Theme" data-css="white"></a>
                                                <a class="colorbox color-purple" href="inbox-alt938c.html?theme=purple" title="purple Theme" data-css="purple"></a>
                                                <a class="colorbox color-dark" href="inbox-alt4965.html?theme=dark" title="Dark Theme" data-css="dark"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">4</span></a>
                            <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                <li><p class="drop-title">You have 4 new  messages !</p></li>
                                <li class="dropdown-menu-list slimscroll messages">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                <p class="msg-name">Sandra Smith</p>
                                                <p class="msg-text">Hey ! I'm working on your project</p>
                                                <p class="msg-time">3 minutes ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                <p class="msg-name">Amily Lee</p>
                                                <p class="msg-text">Hi David !</p>
                                                <p class="msg-time">8 minutes ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar3.png" alt=""></div>
                                                <p class="msg-name">Christopher Palmer</p>
                                                <p class="msg-text">See you soon !</p>
                                                <p class="msg-time">56 minutes ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar5.png" alt=""></div>
                                                <p class="msg-name">Nick Doe</p>
                                                <p class="msg-text">Nice to meet you</p>
                                                <p class="msg-time">2 hours ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                <p class="msg-name">Sandra Smith</p>
                                                <p class="msg-text">Hey ! I'm working on your project</p>
                                                <p class="msg-time">5 hours ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                <p class="msg-name">Amily Lee</p>
                                                <p class="msg-text">Hi David !</p>
                                                <p class="msg-time">9 hours ago</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">3</span></a>
                            <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                <li><p class="drop-title">You have 3 pending tasks !</p></li>
                                <li class="dropdown-menu-list slimscroll tasks">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                                <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                                <p class="task-details">New user registered.</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="task-icon badge badge-danger"><i class="icon-energy"></i></div>
                                                <span class="badge badge-roundless badge-default pull-right">24min ago</span>
                                                <p class="task-details">Database error.</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="task-icon badge badge-info"><i class="icon-heart"></i></div>
                                                <span class="badge badge-roundless badge-default pull-right">1h ago</span>
                                                <p class="task-details">Reached 24k likes</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                <span class="user-name">David<i class="fa fa-angle-down"></i></span>
                                <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-list" role="menu">
                                <li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                <li role="presentation"><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a></li>
                                <li role="presentation"><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock screen</a></li>
                                <li role="presentation"><a href="login.html"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="login.html" class="log-out waves-effect waves-button waves-classic">
                                <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>
                    </ul><!-- Nav -->
                </div><!-- Top Menu -->
            </div>
        </div>
    </div><!-- Navbar -->
    <div class="page-sidebar sidebar">
        <div class="page-sidebar-inner slimscroll">
            <div class="sidebar-header">
                <div class="sidebar-profile">
                    <a href="javascript:void(0);" id="profile-menu-link">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                        </div>
                        <div class="sidebar-profile-details">
                            <span>David Green<br><small>Art Director</small></span>
                        </div>
                    </a>
                </div>
            </div>
            <ul class="menu accordion-menu">
                <li><a href="compose-alt.html"><span class="fa fa-pencil menu-icon"></span><p>Compose</p></a></li>
                <li class="active refreshMails"><a href="{{route('tyondo.mail.index')}}"><span class="fa fa-inbox menu-icon"></span><p>Inbox</p> <span class="badge badge-success pull-right">{{$data['mailbox_details']['unseen_emails']}}</span></a></li>
                <li><a href="#"><span class="fa fa-sign-out menu-icon"></span><p>Sent</p></a></li>
                <li><a href="#"><span class="fa fa-file-text-o menu-icon"></span><p>Draft</p></a></li>
                <li><a href="#"><span class="fa fa-exclamation-circle menu-icon"></span><p>Spam</p></a></li>
                <li><a href="#"><span class="fa fa-trash menu-icon"></span><p>Trash</p></a></li>
            </ul>
        </div><!-- Page Sidebar Inner -->
    </div><!-- Page Sidebar -->
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row m-t-md">
                <div class="col-md-12">
                    <div class="row mailbox-header">
                        <div class="col-md-8">
                            <h2>Inbox</h2>
                        </div>
                        <div class="col-md-4">
                            <form action="#" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control input-search" placeholder="Search...">
                                    <span class="input-group-btn">
                                                <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                                            </span>
                                </div><!-- Input Group -->
                            </form>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <div class="row">
                <div class="col-xs-4"><p class="no-s">Stats: {{$data['mailbox_details']['disk_usage']}} of {{$data['mailbox_details']['disk_allocation']}} used  </p></div>
                <div class="col-xs-4"><p class="no-s">{{date('Y')}} &copy; {{config('temail.app_name')}} by Tyondo Enterprise.</p></div>
                <div class="col-xs-4"><p class="no-s">{{date('Y')}} &copy; {{config('temail.app_name')}} by Tyondo Enterprise.</p></div>
            </div>


        </div>
    </div><!-- Page Inner -->
</main><!-- Page Content -->
<nav class="cd-nav-container" id="cd-nav">
    <header>
        <h3>Navigation</h3>
        <a href="#0" class="cd-close-nav">Close</a>
    </header>
    <ul class="cd-nav list-unstyled">
        <li class="cd-selected" data-menu="index">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                <p>Dashboard</p>
            </a>
        </li>
        <li data-menu="profile">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                <p>Profile</p>
            </a>
        </li>
        <li data-menu="inbox">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                <p>Mailbox</p>
            </a>
        </li>
        <li data-menu="#">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                <p>Tasks</p>
            </a>
        </li>
        <li data-menu="#">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                <p>Settings</p>
            </a>
        </li>
        <li data-menu="calendar">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                <p>Calendar</p>
            </a>
        </li>
    </ul>
</nav>
<div class="cd-overlay"></div>


<!-- Javascripts -->
<script src="{{asset('vendor/tyondo/temail/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/plugins/pace-master/pace.min.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/plugins/uniform/jquery.uniform.min.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/plugins/offcanvasmenueffects/js/classie.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/plugins/offcanvasmenueffects/js/main.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/plugins/waves/waves.min.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/plugins/3d-bold-navigation/js/main.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/js/modern.min.js')}}"></script>
<script src="{{asset('vendor/tyondo/temail/assets/js/pages/inbox-alt.js')}}"></script>
@yield('page-scripts')
</body>
</html>