<div class="table-responsive-sm">
    <table class="table table-striped" id="proveedoresClientes-table">
        <thead>
            <tr>
                <th>Id Nomi</th>
        <th>Tipo Identificacion</th>
        <th>Actividad</th>
        <th>Tipo Provedor</th>
        <th>Razon Social</th>
        <th>Nombre Comercial</th>
        <th>Fec Nac</th>
        <th>Telefono Movil</th>
        <th>Telefono Convencional</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Forma Pago</th>

        <th>Observaciones</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($proveedoresClientes as $proveedoresClientes)
            <tr>
                <td>{{ $proveedoresClientes->id_nomi }}</td>
            <td>{{ $proveedoresClientes->tipo_identificacion }}</td>
            <td>{{ $proveedoresClientes->actividad }}</td>
            <td>{{ $proveedoresClientes->tipo_provedor }}</td>
            <td>{{ $proveedoresClientes->razon_social }}</td>
            <td>{{ $proveedoresClientes->nombre_comercial }}</td>
            <td>{{ $proveedoresClientes->fec_nac }}</td>
            <td>{{ $proveedoresClientes->telefono_movil }}</td>
            <td>{{ $proveedoresClientes->telefono_convencional }}</td>
            <td>{{ $proveedoresClientes->correo }}</td>
            <td>{{ $proveedoresClientes->direccion }}</td>
            <td>{{ $proveedoresClientes->forma_pago }}</td>
 
            <td>{{ $proveedoresClientes->observaciones }}</td>
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