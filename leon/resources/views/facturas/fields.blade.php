<?php 
if (isset($facturas)) {
    $descuento=$facturas->descuento;
    $iva=$facturas->iva;
}else {
    
    $descuento=0;
    $iva=0;
    
}

?>



@section('scripts')
<script>

$(()=>{
    calculos();
})

    $(document).on("input","#descuento",function(){
        calculos();
    })

    $(document).on("click","#iva",function(){
        calculos();        
    })

    function calculos(){
        const descuento = $("#descuento").val();
        const subt=$("#subtotal").html();
        let iva=0;
        if( $("#iva").prop('checked') ){
            iva=(subt-descuento)*0.12;
        }
        $("#iva_valor").html(iva.toFixed(2));
        const total=(subt-descuento+iva);
        $('#total').html(total.toFixed(2));
    }
</script>

@endsection


<table width="80%" >
    <tr>
        <th colspan="6" class="text-center bg-primary">Datos Principales</th>
    </tr>
    <tr>
        <td>Empresa</td>
        <td>{!! Form::select('id_empr',$empresas ,null, ['class' => 'form-control']) !!}</td>
        <td>Clientes</td>
        <td>{!! Form::select('id_procli',$clientes, null, ['class' => 'form-control']) !!}</td>
        <td>Numero</td>
        <td>{!! Form::text('numfac',$numfac, ['class' => 'form-control']) !!}</td>
    </tr>


    <tr>
        <th colspan="6" class="text-center bg-primary">Detalle de la factura</th>
    </tr>

    <tr>

        <td>Cantidad</td>
        <td>Descripcion</td>
        <td>Precio Unitario</td>
        <td>Destino</td>
        <td></td>
        <td align="right">Valor Total</td>
    </tr>
    <tr>

        <td>{!! Form::number('cantidad',null, ['class' => 'form-control']) !!}</td>
        <td>{!! Form::select('descripcion',$producto,null, ['class' => 'form-control']) !!}</td>
        <td>{!! Form::number('precio_unitario',null, ['class' => 'form-control']) !!}</td>
        <td>{!! Form::text('destino',null, ['class' => 'form-control']) !!}</td>
        <td>
            <button class="btn btn-primary fa fa-floppy-o"></button>            
        </td>
    </tr>
    <?php $subt=0;$total=0 ?>

    @isset($facturasDetalles)

        @forelse($facturasDetalles as $fd)
        <?php $subt=$subt+($fd->cantidad*$fd->precio_unitario) ?>
        <tr>
            <td>{{$fd->cantidad}}</td>
            <td>{{$fd->nombre_descripcion}}</td>
            <td align="center">{{ number_format(($fd)->precio_unitario ,2)}} $</td>
            <td>{{ $fd->destino}}</td>
            <td></td>
            <td align="right">{{ number_format(($fd->cantidad*$fd->precio_unitario) ,2)}} $</td>
            <td>
                <a href="{{route('facturasDetalles.destroy',$fd->id_facde)}}" class="btn btn-ghost-danger btn-sm"> <i class="fa fa-trash"></i></a>        
                
            </td>
        </tr>
        @empty
        <tr><th colspan="4">No existen datos gil</th></tr>
        @endforelse

    @endisset
    <?php 
        $total=($subt-$descuento+$iva);
    ?>



    <tfoot>
        <tr>            
            <th style="text-align:right" colspan="5" >Subtotal</th>
            <th style="text-align:right" colspan="5" id="subtotal"> {{ number_format($subt,2)  }}</th>
        </tr>


        <tr>            
            <th style="text-align:right" colspan="5" >Descuento 
            </th>
            <th style="text-align:right" colspan="5" >
                <input type="Texto" name="descuento" id="descuento" value="{{$descuento}}">
            </th>
  
        </tr>


        <tr>            
            <th style="text-align:right" colspan="5" >IVA 
            @if($iva==1)
                <input type="checkbox" checked="true" name="iva" id="iva">
            @else
                <input type="checkbox" name="iva" id="iva">
            @endif
            </th>
            <th style="text-align:right" id="iva_valor" name="iva_valor">{{number_format($iva,2)}}</th>     
        </tr>


        <tr>            
            <th style="text-align:right" colspan="5" >Total</th>
            <th style="text-align:right" colspan="5" id="total" name="total"> {{ number_format($total,2)  }} </th>
        </tr>

    </tfoot>
</table>

    <div class="row">
        <button class="btn btn-primary">Finalizar</button>
    </div>




