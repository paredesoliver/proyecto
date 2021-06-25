<li class="nav-item {{ Request::is('usuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('usuarios.index') }}">
        <i class="nav-icon icon-people"></i>
        <span>Nomina</span>
    </a>
</li>
<li class="nav-item {{ Request::is('empresas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('empresas.index') }}">
        <i class="nav-icon icon-home"></i>
        <span>Empresa</span>
    </a>
</li>


<li class="nav-item {{ Request::is('proveedoresClientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('proveedoresClientes.index') }}">
        <i class="nav-icon icon-plane"></i>
        <span>Proveedores Clientes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('productos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productos.index') }}">
        <i class="nav-icon icon-bag"></i>
        <span>Productos</span>
    </a>
</li>
