<!doctype html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52115242-14"></script>
        {{--  <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'UA-52115242-14');
        </script>  --}}
        <meta charset="utf-8">
        <title>Quản lý tài khoản</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A project management Bootstrap theme by Medium Rare">
        <link href="{{asset('user/img/favicon')}}" rel="icon" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
        <link href="{{asset('user/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
        @yield('css')
    </head>
    <body>
        <div class="layout layout-nav-side">
            <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
                <a class="navbar-brand" href="index.html">
                {{-- <img alt="Pipeline" src="" /> --}}
                </a>
                <h5 style='color: #fff'>Quản lý tài khoản</h5>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="d-block d-lg-none ml-2">
                        <div class="dropdown">
                            <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img alt="Image" src="{{asset('user/img/avatar-male-4')}}" class="avatar" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="nav-side-user.html" class="dropdown-item">Profile</a>
                                <a href="utility-account-settings.html" class="dropdown-item">Account Settings</a>
                                <a href="#" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse flex-column" id="navbar-collapse">
                    <ul class="navbar-nav d-lg-block">
                        <li class="nav-item">
                            <a class="nav-link" href="/account">Thông tin đơn hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('get.user.update_info')}}">Cập nhật thông tin</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('get.user.transaction')}}">Quản lý đơn hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('get.user.favourite') }}">Sản phẩm yêu thích</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Quay lại cửa hàng</a>
                        </li>
                    </ul>
                    <hr>
                  
                </div>
                <div class="d-none d-lg-block">
                    <div class="dropup">
                        <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{-- <img alt="Image" src="{{asset('user/img/avatar-male-4')}}" class="avatar" /> --}}
                        </a>
                        <div class="dropdown-menu">
                            <a href="nav-side-user.html" class="dropdown-item">Profile</a>
                            <a href="utility-account-settings.html" class="dropdown-item">Account Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-container">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-xl-9">
                            <section class="py-4 py-lg-5">
                                @yield('content')
                                
                              
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Required vendor scripts (Do not remove) -->
        <script type="text/javascript" src="{{asset('user/js/jquery.min')}}"></script>
        <script type="text/javascript" src="{{asset('user/js/popper.min')}}"></script>
        <script type="text/javascript" src="{{asset('user/js/bootstrap')}}"></script>
        <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index')}} if site does not use that feature) -->
        <!-- Autosize - resizes textarea inputs as user types -->
        <script type="text/javascript" src="{{asset('user/js/autosize.min')}}"></script>
        <!-- Flatpickr (calendar/date/time picker UI) -->
        <script type="text/javascript" src="{{asset('user/js/flatpickr.min')}}"></script>
        <!-- Prism - displays formatted code boxes -->
        <script type="text/javascript" src="{{asset('user/js/prism')}}"></script>
        <!-- Shopify Draggable - drag, drop and sort items on page -->
        <script type="text/javascript" src="{{asset('user/js/draggable.bundle.legacy')}}"></script>
        <script type="text/javascript" src="{{asset('user/js/swap-animation')}}"></script>
        <!-- Dropzone - drag and drop files onto the page for uploading -->
        <script type="text/javascript" src="{{asset('user/js/dropzone.min')}}"></script>
        <!-- List')}} - filter list elements -->
        <script type="text/javascript" src="{{asset('user/js/list.min')}}"></script>
        <!-- Required theme scripts (Do not remove) -->
        <script type="text/javascript" src="{{asset('user/js/theme')}}"></script>
        <!-- This appears in the demo only - demonstrates different layouts -->
        <style type="text/css">
            .layout-switcher{ position: fixed; bottom: 0; left: 50%; transform: translateX(-50%) translateY(73px); color: #fff; transition: all .35s ease; background: #343a40; border-radius: .25rem .25rem 0 0; padding: .75rem; z-index: 999; }
            .layout-switcher:not(:hover){ opacity: .95; }
            .layout-switcher:not(:focus){ cursor: pointer; }
            .layout-switcher-head{ font-size: .75rem; font-weight: 600; text-transform: uppercase; }
            .layout-switcher-head i{ font-size: 1.25rem; transition: all .35s ease; }
            .layout-switcher-body{ transition: all .55s ease; opacity: 0; padding-top: .75rem; transform: translateY(24px); text-align: center; }
            .layout-switcher:focus{ opacity: 1; outline: none; transform: translateX(-50%) translateY(0); }
            .layout-switcher:focus .layout-switcher-head i{ transform: rotateZ(180deg); opacity: 0; }
            .layout-switcher:focus .layout-switcher-body{ opacity: 1; transform: translateY(0); }
            .layout-switcher-option{ width: 72px; padding: .25rem; border: 2px solid rgba(255,255,255,0); display: inline-block; border-radius: 4px; transition: all .35s ease; }
            .layout-switcher-option.active{ border-color: #007bff; }
            .layout-switcher-icon{ width: 100%; border-radius: 4px; }
            .layout-switcher-body:hover .layout-switcher-option:not(:hover){ opacity: .5; transform: scale(0.9); }
            @media all and (max-width: 990px){ .layout-switcher{ min-width: 250px; } }
            @media all and (max-width: 767px){ .layout-switcher{ display: none; } }
        </style>
        <div class="layout-switcher" tabindex="1">
            <div class="layout-switcher-head d-flex justify-content-between">
                <span>Select Layout</span>
                <i class="material-icons">arrow_drop_up</i>
            </div>
            <div class="layout-switcher-body">
            </div>
        </div>
    </body>
</html>