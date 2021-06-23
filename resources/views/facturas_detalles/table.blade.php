<div class="table-responsive-sm">
    <table class="table table-striped" id="facturasDetalles-table">
        <thead>
            <tr>
                <th>Id Fac</th>
        <th>Id Prod</th>
        <th>Cantidad</th>
        <th>Descripcion</th>
        <th>Precio Unitario</th>
        <th>Descuento Producto</th>
        <th>Destino</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($facturasDetalles as $facturasDetalles)
            <tr>
                <td>{{ $facturasDetalles->id_fac }}</td>
            <td>{{ $facturasDetalles->id_prod }}</td>
            <td>{{ $facturasDetalles->cantidad }}</td>
            <td>{{ $facturasDetalles->descripcion }}</td>
            <td>{{ $facturasDetalles->precio_unitario }}</td>
            <td>{{ $facturasDetalles->descuento_producto }}</td>
            <td>{{ $facturasDetalles->destino }}</td>
                <td>
                    {!! Form::open(['route' => ['facturasDetalles.destroy', $facturasDetalles->id_facde], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturasDetalles.show', [$facturasDetalles->id_facde]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('facturasDetalles.edit', [$facturasDetalles->id_facde]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>