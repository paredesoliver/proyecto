<div class="table-responsive-sm">
    <table class="table table-striped" id="usuarios-table">
        <thead>
            <tr>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Telefono Móvil</th>
        <th>Email</th>
        <th>Cargo</th>
        <th>Usuario</th>
        <th>Estado</th>
        <th colspan="3">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuarios)
            <tr>
            <td>{{ $usuarios->apellidos }}</td>
            <td>{{ $usuarios->nombre }}</td>
            <td>{{ $usuarios->telefono_movil }}</td>
            <td>{{ $usuarios->email }}</td>

            @if($usuarios->cargo=='A')
            <td>Administrador</td>
            @endif
            @if($usuarios->cargo=='C')
            <td>Cliente</td>
            @endif
            @if($usuarios->cargo=='V')
            <td>Vendedor</td>
            @endif


            <td>{{ $usuarios->usuario }}</td>

            @if($usuarios->estado=='1')
            <td>Activo</td>
            @else
            <td>Inactivo</td>
            @endif
            
                <td>
                    {!! Form::open(['route' => ['usuarios.destroy', $usuarios->id_nomi], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('usuarios.edit', [$usuarios->id_nomi]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

