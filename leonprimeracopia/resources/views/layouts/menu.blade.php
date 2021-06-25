<li class="nav-item {{ Request::is('usuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('usuarios.index') }}">
        <i class="nav-icon icon-people"></i>
        <span>Usuarios</span>
    </a>
</li>
