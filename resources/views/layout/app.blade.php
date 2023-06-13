<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="my_jquery_functions.js"></script>
    <title>@yield('title')</title>
    <style>
        .nav-pills>li>a {
            border-radius: 0;
        }

        #wrapper {
            padding-left: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
            overflow: hidden;
        }

        #wrapper.toggled {
            padding-left: 250px;
            overflow: hidden;
        }

        #sidebar-wrapper {
            z-index: 1000;
            position: absolute;
            left: 250px;
            width: 0;
            height: 100%;
            margin-left: -250px;
            overflow-y: auto;
            background: #000;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }

        #page-content-wrapper {
            position: absolute;
            padding: 15px;
            width: 100%;
            overflow-x: hidden;
        }

        .xyz {
            min-width: 360px;
        }

        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0px;
        }

        .fixed-brand {
            width: auto;
        }

        /* Sidebar Styles */

        .sidebar-nav {
            position: absolute;
            top: 0;
            width: 250px;
            margin: 0;
            padding: 0;
            list-style: none;
            margin-top: 2px;
        }

        .sidebar-nav li {
            text-indent: 15px;
            line-height: 40px;
        }

        .sidebar-nav li a {
            display: block;
            text-decoration: none;
            color: #999999;
        }

        .sidebar-nav li a:hover {
            text-decoration: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
            border-left: red 2px solid;
        }

        .sidebar-nav li a:active,
        .sidebar-nav li a:focus {
            text-decoration: none;
        }

        .sidebar-nav>.sidebar-brand {
            height: 65px;
            font-size: 18px;
            line-height: 60px;
        }

        .sidebar-nav>.sidebar-brand a {
            color: #999999;
        }

        .sidebar-nav>.sidebar-brand a:hover {
            color: #fff;
            background: none;
        }

        .no-margin {
            margin: 0;
        }

        @media (min-width: 768px) {
            #wrapper {
                padding-left: 250px;
            }

            .fixed-brand {
                width: 250px;
            }

            #wrapper.toggled {
                padding-left: 0;
            }

            #sidebar-wrapper {
                width: 250px;
            }

            #wrapper.toggled #sidebar-wrapper {
                width: 250px;
            }

            #wrapper.toggled-2 #sidebar-wrapper {
                width: 50px;
            }

            #wrapper.toggled-2 #sidebar-wrapper:hover {
                width: 250px;
            }

            #page-content-wrapper {
                padding: 20px;
                position: relative;
                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                -o-transition: all 0.5s ease;
                transition: all 0.5s ease;
            }

            #wrapper.toggled #page-content-wrapper {
                position: relative;
                margin-right: 0;
                padding-left: 250px;
            }

            #wrapper.toggled-2 #page-content-wrapper {
                position: relative;
                margin-right: 0;
                margin-left: -200px;
                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                -o-transition: all 0.5s ease;
                transition: all 0.5s ease;
                width: auto;
            }
        }
    </style>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                <li>
                    <a href="dasboard"><span class="fa-stack fa-lg pull-left"><i
                                class="fa fa-cloud-download fa-stack-1x "></i></span>Dasboard</a>
                </li>
                <li>
                    <a href="/user"> <span class="fa-stack fa-lg pull-left"><i
                                class="fa fa-cart-plus fa-stack-1x "></i></span>User</a>
                </li>
                <li>
                    <a href="/product"><span class="fa-stack fa-lg pull-left"><i
                                class="fa fa-youtube-play fa-stack-1x "></i></span>Product</a>
                </li>
                <li>
                    <a href="/supplier"><span class="fa-stack fa-lg pull-left"><i
                                class="fa fa-wrench fa-stack-1x "></i></span>Supplier</a>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i
                                class="fa fa-server fa-stack-1x "></i></span>Import</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <div class="container">
            @yield('content')
        </div>
    </div>
    </body>
    <script>
        @yield('scripy')
    </script>

</html>
