@include('layouts/header')
<style>
    .alert-feedback{
        color: red;
    }
    th{
        font-family: bold;
    }

</style>
<noscript>
<div  align="center" class="alert alert-danger">

    <span style="color: #f45e41"><strong style="color: red">Notice: </strong> &nbsp; JavaScript is not enabled. !! <br> <a style="color: green" target="_blank" href="http://enable-javascript.com/" class="alert-link">Please Enable JavaScript Safley.</a></span>
</div>
<style>form,header,section,.card,.card-body,footer { display:none; }</style>
</noscript>

{{--<body oncontextmenu="return false;">--}}
<body>

<!-- Loader -->
{{--<div id="preloader"><div id="status"><div class="spinner"></div></div></div>--}}

<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <!-- Image Logo -->
                <a href="#" class="logo">
                    <h3>CARITAS JOB BANK</h3>
                </a>

            </div>
            <!-- End Logo container-->


            <div class="menu-extras topbar-custom">

                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input" type="search" placeholder="Search" />
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>

                <ul class="list-inline float-right mb-0">
                    <!-- Search -->
                    {{--<li class="list-inline-item dropdown notification-list">--}}
                        {{--<a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">--}}
                            {{--<i class="mdi mdi-magnify noti-icon"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <!-- Messages-->
                    {{--<li class="list-inline-item dropdown notification-list">--}}
                        {{--<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"--}}
                           {{--aria-haspopup="false" aria-expanded="false">--}}
                            {{--<i class="mdi mdi-email-outline noti-icon"></i>--}}
                            {{--<span class="badge badge-danger noti-icon-badge">3</span>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">--}}
                            {{--<!-- item-->--}}
                            {{--<div class="dropdown-item noti-title">--}}
                                {{--<h5><span class="badge badge-danger float-right">745</span>Messages</h5>--}}
                            {{--</div>--}}

                            {{--<!-- item-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                {{--<div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>--}}
                                {{--<p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>--}}
                            {{--</a>--}}

                            {{--<!-- item-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                {{--<div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>--}}
                                {{--<p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>--}}
                            {{--</a>--}}

                            {{--<!-- item-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                {{--<div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>--}}
                                {{--<p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>--}}
                            {{--</a>--}}

                            {{--<!-- All-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                {{--View All--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</li>--}}
                    <!-- notification-->
                    {{--<li class="list-inline-item dropdown notification-list">--}}
                        {{--<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"--}}
                           {{--aria-haspopup="false" aria-expanded="false">--}}
                            {{--<i class="mdi mdi-bell-outline noti-icon"></i>--}}
                            {{--<span class="badge badge-danger noti-icon-badge">3</span>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">--}}
                            {{--<!-- item-->--}}
                            {{--<div class="dropdown-item noti-title">--}}
                                {{--<h5>Notification (3)</h5>--}}
                            {{--</div>--}}

                            {{--<!-- item-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item notify-item active">--}}
                                {{--<div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>--}}
                                {{--<p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>--}}
                            {{--</a>--}}

                            {{--<!-- item-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                {{--<div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>--}}
                                {{--<p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>--}}
                            {{--</a>--}}

                            {{--<!-- item-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                {{--<div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>--}}
                                {{--<p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>--}}
                            {{--</a>--}}

                            {{--<!-- All-->--}}
                            {{--<a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                                {{--View All--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</li>--}}
                    <!-- User-->
                    <li class="list-inline-item dropdown notification-list">
                        <b style="color: white">{{Auth::user()->name}}</b>
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="{{url('public/assets/images/users/avatar-1.png')}}" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            {{--<a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>--}}
                            {{--<a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i>Team</a>--}}
                            <a class="dropdown-item" href="{{route('password')}}"><i class="dripicons-gear text-muted"></i>Change Password</a>

                            <div class="dropdown-divider"></div>
                            {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                               {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();"><i class="dripicons-gear text-muted"></i>Logout</a>--}}


                            {{--Logout Button--}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{csrf_field()}}
                            </form>
                        </div>
                    </li>
                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    @include('layouts/navbar')
</header>
<!-- End Navigation Bar-->






<div class="wrapper">

    <div id="wait" style="display:none;position:absolute;top:20%;left:50%;padding:2px;z-index: 9999">
        <img src='{{url('public/images/pleaseWait-1.gif')}}' />
    </div>

    <div class="container-fluid">



        @yield('content')

    </div> <!-- end container -->

</div>
<!-- end wrapper -->


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}

@include('layouts/footer')