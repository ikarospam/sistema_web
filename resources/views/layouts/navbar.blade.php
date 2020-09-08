<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <span class="container" style="color: #fff;">
            {{ Auth::user()->name }} {{ Auth::user()->apellidos }}<ion-icon name="caret-down-sharp"></ion-icon>
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <img src="{{ asset('svg/engranaje.svg')}}" alt="" width="24px" height="24px"> &nbsp; Configuraciones

            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <img src="{{ asset('svg/apagar.svg')}}" alt="" width="24px" height="24px"> &nbsp; Cerrar Sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
</ul>