<div class="table-responsive-sm">
    <table class="table table-striped" id="proveedoresClientes-table">
        <thead>
            <tr>
        <th>Actividad</th>
        <th>Tipo Identificación</th>

        <th>Razón Social</th>
        <th>Nombre Comercial</th>
        <th>Correo</th>
        <th>Dirección</th>


                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($proveedoresClientes as $proveedoresClientes)
            <tr>
            @if($proveedoresClientes->actividad=='1')
            <td>Cliente</td>
            @endif
            @if($proveedoresClientes->actividad=='0')
            <td>Distribuidor</td>
            @endif 
            <td>{{ $proveedoresClientes->tipo_identificacion }}</td>
            <td>{{ $proveedoresClientes->razon_social }}</td>
            <td>{{ $proveedoresClientes->nombre_comercial }}</td>
            <td>{{ $proveedoresClientes->correo }}</td>
            <td>{{ $proveedoresClientes->direccion }}</td>

 
                <td>
                    {!! Form::open(['route' => ['proveedoresClientes.destroy', $proveedoresClientes->id_procli], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('proveedoresClientes.show', [$proveedoresClientes->id_procli]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('proveedoresClientes.edit', [$proveedoresClientes->id_procli]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>