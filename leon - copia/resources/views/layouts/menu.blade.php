<li class="nav-item {{ Request::is('usuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('usuarios.index') }}">
        <i class="nav-icon icon-people"></i>
        <span>Usuarios</span>
    </a>
</li>
<li class="nav-item {{ Request::is('empresas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('empresas.index') }}">
        <i class="nav-icon icon-home"></i>
        <span>Empresa</span>
    </a>
</li>


