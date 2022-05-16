<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Praticando</title>
    <link href="{{ asset('templates/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('templates/dist/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/assets/libs/select2/dist/css/select2.min.css') }}">
    <link href="{{ asset('templates/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="200x200" href="">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script type="text/javascript" src="{{ asset('templates/dist/js/aplicjava.js') }}"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    
    
</head>
<body>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <b class="logo-icon">
                            Home
                        </b>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">MENU DE NAVEGAÇÃO</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('problema-um') }}" aria-expanded="false">
                                <i class="mdi mdi mdi-arrow-compress-all"></i><span class="hide-menu">Problema 1*</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false">
                                <i class="mdi mdi mdi-arrow-compress-all"></i><span class="hide-menu">Problema 2*</span>
                            </a>
                        </li> -->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('problema-tres') }}" aria-expanded="false">
                                <i class="mdi mdi mdi-arrow-compress-all"></i><span class="hide-menu">Problema 3*</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('problema-quatro') }}" aria-expanded="false">
                                <i class="mdi mdi mdi-arrow-compress-all"></i><span class="hide-menu">Problema 4*</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-account-multiple"></i>
                                <span class="hide-menu">0</span>
                            </a>

                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="" class="sidebar-link">
                                        <i class="mdi mdi-account-multiple"></i>
                                        <span class="hide-menu">1</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu">2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu">3</span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                    <br>
                </nav>
            </div>
        </aside>

        @yield('content')
        
        <footer class="footer text-center">
        Todos Direitos reservados <a href="https://github.com/DevHiuryLima" target="_blank">@DevHiuryLima</a> {{date('Y', time()) }}.
        </footer>


    </div>
</body>
</html>