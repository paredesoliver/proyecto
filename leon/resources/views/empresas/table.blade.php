<div class="table-responsive-sm">
    <table class="table table-striped" id="empresas-table">
        <thead>
            <tr>
        <th>Nº</th>
        <th>Razon Social</th>
        <th>Ruc</th>
        <th>Nombre Comercial</th>
        <th>Telefono Convencional</th>
        <th>Telefono Movil</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Sitio Web</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $c=1; ?>
        @foreach($empresas as $empresas)
            <tr>            
            <td>{{$c++}}</td>
            <td>{{ $empresas->razon_social }}</td>
            <td>{{ $empresas->ruc }}</td>
            <td>{{ $empresas->nombre_comercial }}</td>
            <td>{{ $empresas->telefono_convencional }}</td>
            <td>{{ $empresas->telefono_movil }}</td>
            <td>{{ $empresas->correo }}</td>
            <td>{{ $empresas->direccion }}</td>
            <td>{{ $empresas->sitio_web }}</td>
                <td>
                    {!! Form::open(['route' => ['empresas.destroy', $empresas->id_empr], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('empresas.show', [$empresas->id_empr]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('empresas.edit', [$empresas->id_empr]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>