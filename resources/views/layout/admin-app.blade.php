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
                    <li class="active">
                        <a href="{{ route('dashboard') }}">
                            <i class="ti-panel"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('category') }}">
                            <i class="ti-user"></i>
                            <p>Category</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('brand') }}">
                            <i class="ti-view-list-alt"></i>
                            <p>Brand</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('product') }}">
                            <i class="ti-text"></i>
                            <p>Product</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('review') }}">
                            <i class="ti-pencil-alt2"></i>
                            <p>Reviews</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users') }}">
                            <i class="ti-map"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
                        <a href="notifications.html">
                            <i class="ti-bell"></i>
                            <p>Orders</p>
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
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p>Stats</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
                                    <p>Notifications</p>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Notification 1</a></li>
                                    <li><a href="#">Notification 2</a></li>
                                    <li><a href="#">Notification 3</a></li>
                                    <li><a href="#">Notification 4</a></li>
                                    <li><a href="#">Another notification</a></li>
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