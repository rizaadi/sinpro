<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SINPRO</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="assets/main.css" rel="stylesheet">
    <link href="{{!!('assets/sb-admin-2.css')!!}}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <button class="close"></button>
                    </div>
                </div>

                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <h style="color:black;">{{ Auth::user()->name }} </style>

                                        </h>
                                    </div>

                                </div>

                                <div class="widget-content-right header-user-info ml-3">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li>
                                <a href="/home" class="mm-active">
                                    <i  class="pe-7s-display2" ><img class="gambar2" src="{!!('img/rumahku.png')!!}"></i>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>

                            <li class="app-sidebar__heading">Fitur</li>
                            <li>
                                <a href="{{ url('/kegiatan')}}" class="mm-active">
                                    <i class="pe-7s-display2"><img class="gambar2" src="{!!('img/images.png')!!}"></i>
                                    Kegiatan yang masuk
                                </a>

                            </li>
                            <li>
                                <a href="{{ url('/kegiatan')}}" class="mm-active">
                                    <i class="pe-7s-display2"><img class="gambar2" src="{!!('img/jadwal.png')!!}"></i>
                                   Kegiatan yang diterima
                                </a>

                            </li>
                            <li>
                                <a href="{{ url('/tambahuser')}}" class="mm-active">
                                    <i class="pe-7s-display2"><img class="gambar2" src="{!!('img/cari.png')!!}"></i>
                                    Tambah User
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/listuser')}}" class="mm-active">
                                    <i class="pe-7s-display2"><img class="gambar2" src="{!!('img/cari.png')!!}"></i>
                                    List User
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @section('konten')
            @show
        </div>

    </div>
    </div>
    </div>


    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>

	<title>JQuery UI Part 2 : Membuat form inputan tanggal dengan jquery ui</title>	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</body>

</html>
