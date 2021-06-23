<div class="table-responsive-sm">
    <table class="table table-striped" id="productos-table">
        <thead>
            <tr>
        <th>Pvp</th>
        <th>Nombre Descripción</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Material</th>
        <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $productos)
            <tr>
            <td>{{ $productos->pvp }}</td>
            <td>{{ $productos->nombre_descripcion }}</td>
            <td>{{ $productos->marca }}</td>
            <td>{{ $productos->modelo }}</td>
            <td>{{ $productos->material }}</td>

 
                <td>
                    {!! Form::open(['route' => ['productos.destroy', $productos->id_prod], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$productos->id_prod]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('productos.edit', [$productos->id_prod]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>