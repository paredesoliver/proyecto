<div class="table-responsive-sm">
    <table class="table table-striped" id="facturas-table">
        <thead>
            <tr>
                <th>Empresa</th>
        <th>Persona </th>
        <th>Cliente</th>
        <th>Nº Factura</th>
        <th>Total</th>
        <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php $gtotal=0?>
        @foreach($facturas as $facturas)
        <?php 
        if($facturas->iva==0){
            $total=($facturas->subt-$facturas->descuento);
        }else{
            $iva=($facturas->subt-$facturas->descuento)*0.12;
            $total=($facturas->subt-$facturas->descuento)+$iva;
        }

        $gtotal=$gtotal+$total;
        ?>
            <tr>
            <td>{{ $facturas->sitio_web}}</td>
            <td>{{ $facturas->nombre.' '.$facturas->apellidos  }}</td>
            <td>{{ $facturas->razon_social }}</td>
            <td>00000{{ $facturas->numfac }}</td>
            <td>{{ number_format($total,2) }} $</td>
                <td>
                    {!! Form::open(['route' => ['facturas.destroy', $facturas->id_fac], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturas.show', [$facturas->id_fac]) }}" target="_blank" class='btn btn-ghost-danger'><i class="fa fa-file-pdf-o"></i></a>
                        <a href="{{ route('facturas.edit', [$facturas->id_fac]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        <!-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!} -->
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
        <tr>
        <th colspan="4" class="text-right">TOTAL</th>
        <th>{{$gtotal}} $</th>
        </tr>
    </table>
</div>