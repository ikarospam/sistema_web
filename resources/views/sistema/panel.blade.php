@extends('layouts.sistema.cuerpo')
@section('title','Inicio')

@section('op_usuario')

    <ul class="navbar-nav ml-auto">


      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <span class="container" style="color: #fff;">
          	Francisco Suarez Pelaez <ion-icon name="caret-down-sharp"></ion-icon>
          </span>

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <img src="{{ asset('svg/engranaje.svg')}}" alt="" width="24px" height="24px"> &nbsp; Configuraciones

          </a>
          <div class="dropdown-divider"></div>
          <a href="index.php" class="dropdown-item">
            <img src="{{ asset('svg/apagar.svg')}}" alt="" width="24px" height="24px"> &nbsp; Cerrar Sesión

          </a>
        </div>
      </li>


    </ul>
    <!-- fin del usuario -->
@stop


@section('modulos')

<!-- inicio Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

				<li class="nav-header"><hr style="background:red; "></li>
          <li class="nav-item ">
            <a href="{{ url('/sistema/inicio')}}" class="nav-link active" id="inicio">
              <img src="{{ asset('svg/pagina-de-inicio.svg')}}" alt="" width="24px" height="24px">
              <p>
               &nbsp; Inicio

              </p>
            </a>
          </li>




          <li class="nav-item">
            <a href="clientes" class="nav-link" id="row_cliente">
             <img src="{{ asset('svg/cliente.svg')}}" alt="" width="24px" height="24px">
              <p>
                &nbsp; Cliente &nbsp; <ion-icon name="caret-down-sharp"></ion-icon>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/sistema/cliente/nuevo_cliente')}}" class="nav-link" id="new_cliente">
                  <img src="{{ asset('svg/contacto.svg')}}" alt="" width="24px" height="24px">
                   <p> Nuevo Cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/sistema/cliente/lista_cliente')}}" class="nav-link" id="list_cliente">
                  <img src="{{ asset('svg/objetivo.svg')}}" alt="" width="24px" height="24px">
                  <p>Clientes</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
             <img src="{{ asset('svg/urbano.svg')}}" alt="" width="24px" height="24px">
              <p>
                &nbsp; Inmueble  &nbsp; <ion-icon name="caret-down-sharp"></ion-icon>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img src="{{ asset('svg/construccion.svg')}}" alt="" width="24px" height="24px">
                   <p>Nuevo Inmueble </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img src="{{ asset('svg/hotel.svg')}}" alt="" width="24px" height="24px">
                  <p>Inmuebles</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
             <img src="{{ asset('svg/calendario.svg')}}" alt="" width="24px" height="24px">
              <p>
                &nbsp; Cita  &nbsp; <ion-icon name="caret-down-sharp"></ion-icon>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img src="{{ asset('svg/calendario (1).svg')}}" alt="" width="24px" height="24px">
                   <p>Nueva Cita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img src="{{ asset('svg/calendario (2).svg')}}" alt="" width="24px" height="24px">
                  <p>Citas </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="row_user">
             <img src="{{ asset('svg/usuario.svg')}}" alt="" width="24px" height="24px">
              <p>
                &nbsp; Usuario   &nbsp; <ion-icon name="caret-down-sharp"></ion-icon>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" id="new_usuario">
                  <img src="{{ asset('svg/cancelar.svg')}}" alt="" width="24px" height="24px">
                   <p>Nuevo Usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" id="list_usuario">
                  <img src="{{ asset('svg/equipo.svg')}}" alt="" width="24px" height="24px">
                  <p>Usuarios</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
   <!-- fin Sidebar Menu -->
@stop




@section('todo')
<div class="content-wrapper">

    <div class="content-header">
    <div class="container-fluid" id="contenido">
        <div class="container">
            <div class="row">
                <h1>contenido inicio</h1>
            </div>
        </div>
    </div>
    </div>

</div>
@stop
