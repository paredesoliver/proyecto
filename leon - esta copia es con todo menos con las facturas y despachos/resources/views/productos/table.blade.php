<div class="table-responsive-sm">
    <table class="table table-striped" id="productos-table">
        <thead>
            <tr>
                <th>Id Cliente</th>
        <th>Id Persona</th>

        <th>Pvp</th>
        <th>Nombre Descripcion</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Material</th>
        <th>Nivel Proteccion</th>
        <th>Tamano</th>
        <th>Capacidad</th>


        <th>Tipo Conector</th>

        <th>Numero Hilos</th>
        <th>Vanos Span</th>
        <th>Unidad Medida</th>
        <th>Cantidad</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $productos)
            <tr>
                <td>{{ $productos->id_procli }}</td>
            <td>{{ $productos->id_nomi }}</td>

            <td>{{ $productos->pvp }}</td>
            <td>{{ $productos->nombre_descripcion }}</td>
            <td>{{ $productos->marca }}</td>
            <td>{{ $productos->modelo }}</td>
            <td>{{ $productos->material }}</td>
            <td>{{ $productos->nivel_proteccion }}</td>
            <td>{{ $productos->tamano }}</td>
            <td>{{ $productos->capacidad }}</td>

            <td>{{ $productos->tipo_conector }}</td>

            <td>{{ $productos->numero_hilos }}</td>
            <td>{{ $productos->vanos_span }}</td>
            <td>{{ $productos->unidad_medida }}</td>
            <td>{{ $productos->cantidad }}</td>
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