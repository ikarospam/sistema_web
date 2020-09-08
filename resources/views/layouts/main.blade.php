<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @yield('contenido')
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><img src="{{ asset('svg/lista.svg')}}" alt="munu" width="30px" height="30px"></i></a>
                </li>
            </ul>
            <!-- BEGIN NAVBAR -->
            @include('layouts.navbar')
            <!-- END NAVBAR -->
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="sidebar">
                <section style="background: #28a745bf;width: 103%; height: 140px;">
                    <!-- Sidebar user panel (optional) -->
                    <br>
                    <div class="">
                        <div class="text-center">
                            <div class="image">
                            <a href="#">
                                <img src="{{ asset('img/logo-inmobiliaria.png')}}" class="img-circle elevation-2" alt="User Image" width="67px" height="67px">
                            </a>
                        </div>
                    </div>
                </section>
                <!-- BEGIN MENU -->
                @include('layouts.menu')
                <!-- END MENU -->
            </div>
        </aside>
    </div>
    {{-- inicio del contenido de todo --}}
        @yield('todo')
    {{-- fin del contenido de todo --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery-ui.min.js ') }}"></script>
    <script src="{{ asset('js/jquery.overlayScrollbars.min.js ') }}"></script>
    <script src="{{ asset('js/adminlte.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/funciones.js') }}" type="text/javascript"></script>
</body>

</html>