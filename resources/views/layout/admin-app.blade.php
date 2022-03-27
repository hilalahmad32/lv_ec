<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin-{{ $title }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('admins/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('admins/css/animate.min.css') }}" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('admins/css/paper-dashboard.css') }}" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('admins/css/demo.css') }}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('admins/css/themify-icons.css') }}" rel="stylesheet">
    @livewireStyles

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Virtual Vectory-Store
                    </a>
                </div>

                <ul class="nav">
                    <li class="{{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}">
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.category') ? 'active' : '' }}">
                        <a href="{{ route('admin.category') }}">
                            <p>Category</p>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.brand') ? 'active' : '' }}">
                        <a href="{{ route('admin.brand') }}">
                            <p>Brand</p>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.product') ? 'active' : '' }}">
                        <a href="{{ route('admin.product') }}">
                            <p>Product</p>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.review') ? 'active' : '' }}">
                        <a href="{{ route('admin.review') }}">
                            <p>Reviews</p>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.users') ? 'active' : '' }}">
                        <a href="{{ route('admin.users') }}">
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.order') ? 'active' : '' }}">
                        <a href="{{ route('admin.order') }}">
                            <p>Order</p>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.setting') ? 'active' : '' }}">
                        <a href="{{ route('admin.setting') }}">
                            <p>Setting</p>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('admin.contact') ? 'active' : '' }}">
                        <a href="{{ route('admin.contact') }}">
                            <p>Contact</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>{{ Auth::guard('admin')->user()->username }}</p>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="{{ Request::routeIs('admin.change-password') ? 'active' : '' }}"><a
                                            href="{{ route('admin.change-password') }}">Change Password</a></li>
                                    @livewire('admin.admin-logout')
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            {{ $slot }}


            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="fa fa-heart heart"></i> by <a
                            href="http://www.creative-tim.com">Hilal ahmad</a>
                    </div>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="{{ asset('admins/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('admins/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('admins/js/bootstrap-checkbox-radio.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('admins/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('admins/js/bootstrap-notify.js') }}"></script>


<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('admins/js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('admins/js/demo.js') }}"></script>
@livewireScripts


</html>
