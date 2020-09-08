<!-- inicio Sidebar Menu -->
@php
    $openmenucliente = $activeoptionCliente = $openmenuinmueble = $activeoptioninmueble = '';
@endphp
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column mainmenu" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header"><hr style="background:red; "></li>
        @if ( Auth::user()->id_rol == '1' )
            <li class="nav-item ">
                <a href="{{ url('/sistema/inicio')}}" class="nav-link {{ (request()->routeIs('inicio') ? 'active' : '' ) }}" id="inicio">
                    <img src="{{ asset('svg/pagina-de-inicio.svg')}}" alt="" width="24px" height="24px">
                    <p>&nbsp; Inicio</p>
                </a>
            </li>
            @if(request()->routeIs('nuevo.cliente')
                || request()->routeIs('lista.cliente')
            )
                <?php $openmenucliente = 'menu-open'?>
                <?php $activeoptionCliente = 'active'?>
            @endif
            <li class="nav-item {{ $openmenucliente }}">
                <a href="clientes" class="nav-link  {{ $activeoptionCliente }}" id="row_cliente">
                <img src="{{ asset('svg/cliente.svg')}}" alt="" width="24px" height="24px">
                <p>
                    &nbsp; Cliente &nbsp; <ion-icon name="caret-down-sharp"></ion-icon>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/sistema/cliente/nuevo_cliente')}}" class="nav-link {{ (request()->routeIs('nuevo.cliente') ? 'active' : '' ) }}" id="new_cliente">
                            <img src="{{ asset('svg/contacto.svg')}}" alt="" width="24px" height="24px">
                            <p> Nuevo Cliente</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('/sistema/cliente/lista_cliente')}}" class="nav-link {{ (request()->routeIs('lista.cliente') ? 'active' : '' ) }}" id="list_cliente">
                            <img src="{{ asset('svg/objetivo.svg')}}" alt="" width="24px" height="24px">
                            <p>Clientes</p>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        @if(request()->routeIs('lista.inmueble')
        )
            <?php $openmenuinmueble = 'menu-open'?>
            <?php $activeoptioninmueble = 'active'?>
        @endif
        <li class="nav-item {{ $openmenuinmueble }}">
            <a href="#" class="nav-link  {{ $activeoptioninmueble }}">
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
                    <a href="{{ url('/sistema/inmueble/lista_inmueble')}}" class="nav-link  {{ (request()->routeIs('lista.inmueble') ? 'active' : '' ) }}">
                        <img src="{{ asset('svg/hotel.svg')}}" alt="" width="24px" height="24px">
                        <p>Inmuebles</p>
                    </a>
                </li>
            </ul>
        </li>
        @if ( Auth::user()->id_rol == '1' )
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
        @endif
    </ul>
</nav>
<!-- fin Sidebar Menu -->