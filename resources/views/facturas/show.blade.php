<!-- <img src="{{ asset('img/leon.png')}}" style="width:75px"> -->
<h1>
<img class="navbar-brand-full" src="{{ asset('img/letras.png') }}" width="150" height="70" alt="InfyOm Logo">
</h1>
<strong>Direccion:  {{$facturas->direccion}}</strong><br>
<strong>Teléfono movil: {{$facturas->telefono_movil}}</strong><br>
<strong>Teléfono convencional:  {{$facturas->telefono_convencional}}</strong><br>
<strong>Correo empresarial:  {{$facturas->correoo}}</strong>

<div style="margin-left: 400px;">
    <div style="background:#230740;color:white;margin-top:10px;width: 300px;">
        <strong>Factura Nº</strong>
        <strong style="margin-left:100px;">Fecha</strong>
    </div>
    <div style="margin-top:10px;width: 300px;">
        <strong>000000 {{$facturas->numfac}}</strong>
        <strong style="margin-left:100px;">{{$facturas->fecha}}</strong>
    </div>
</div>

<div>
    <div style="background:#230740;color:white;margin-top:10px;width: 300px;text-align:center;">
        <strong>Datos del cliente</strong>
    </div>
    <div style="margin-top:10px;width: 300px;">
        <strong>Nombre del cliente:</strong>
        <strong>{{$facturas->razon_social}}</strong><br>
        <strong>Teléfono móvil:</strong>
        <strong>{{$facturas->telefono_movil}}</strong><br>
        <strong>Teléfono convencional:</strong>
        <strong>{{$facturas->telefono_convencional}}</strong><br>
        <strong>Correo:</strong>
        <strong>{{$facturas->correo}}</strong><br>
        
    </div>
</div>

<table style="margin-top:20px;width:100%;">
    <tr style="background:#230740;color:white">
        <th>Nº</th>
        <th>Cantidad</th>
        <th>Descripcion</th>
        <th>Valor Unitario</th>
        <th>Valor Total</th>
    </tr>

<?php $subt=0;$total=0 ?>


    @foreach ($detalle as $dt)

    <tr>
    <?php $subt=$subt+($dt->cantidad*$dt->precio_unitario) ?>
        <td>{{$loop->iteration}}</td>
        <td>{{$dt->cantidad}}</td>
        <td>{{$dt->nombre_descripcion}}</td>
        <td style="text-align:right">{{ number_format($dt->precio_unitario ,2) }} $</td>
        <td style="text-align:right">{{ number_format($dt->precio_unitario*$dt->cantidad ,2) }} $</td>
    </tr>
    @endforeach
    <?php
        $descuento=$facturas->descuento;
        $iva=($subt-$descuento)*0.12;   
        $total=($subt-$descuento+$iva);
    ?>

<tfoot>
        <tr>            
            <th style="text-align:right" colspan="4" >Subtotal</th>
            <th style="text-align:right" colspan="4" id="subtotal"> {{ number_format($subt,2)  }}</th>
        </tr>


        <tr>            
            <th style="text-align:right" colspan="4" >Descuento 
            </th>
            <th style="text-align:right" colspan="4" >
                <input type="Texto" name="descuento" id="descuento">{{ number_format($descuento,2)  }}</th>
  
        </tr>


        <tr>            
            <th style="text-align:right" colspan="4" >IVA</th>
            <th style="text-align:right" id="iva_valor" name="iva_valor">0.12%</th>     
        </tr>


        <tr>            
            <th style="text-align:right" colspan="4" >Total</th>
            <th style="text-align:right" colspan="4" id="total" name="total"> {{ number_format($total,2)  }} </th>
        </tr>

    </tfoot>

</table>
