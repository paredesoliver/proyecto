<div class="row">

<!-- Tipo Identificacion Field -->
<div class="col-sm-6">
    {!! Form::label('tipo_identificacion', 'Tipo Identificacion:') !!}
    {!! Form::text('tipo_identificacion', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15,'required'=>'required']) !!}
</div>

<!-- Actividad Field -->
<div class="col-sm-6">
    {!! Form::label('actividad', 'Actividad:') !!}
    {!! Form::select('actividad', ['0'=>'Cliente','1'=>'Distribuidor'] ,null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Tipo Provedor Field -->
<div class="col-sm-6">
    {!! Form::label('tipo_provedor', 'Ubicacion:') !!}
    {!! Form::select('tipo_provedor', ['0'=>'Local','1'=>'Internacional'],null, ['class' => 'form-control']) !!}
</div>

<!-- Razon Social Field -->
<div class="col-sm-6">
    {!! Form::label('razon_social', 'Razon Social:') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100,'required'=>'required']) !!}
</div>

<!-- Nombre Comercial Field -->
<div class="col-sm-6">
    {!! Form::label('nombre_comercial', 'Nombre Comercial:') !!}
    {!! Form::text('nombre_comercial', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100,'required'=>'required']) !!}
</div>


<!-- Telefono Movil Field -->
<div class="col-sm-6">
    {!! Form::label('telefono_movil', 'Telefono Movil:') !!}
    {!! Form::text('telefono_movil', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20,'required'=>'required']) !!}
</div>


<!-- Correo Field -->
<div class="col-sm-6">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::email('correo', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100,'required'=>'required']) !!}
</div>

<!-- Direccion Field -->
<div class="col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200,'required'=>'required']) !!}
</div>

<!-- Forma Pago Field -->
<div class="col-sm-6">
    {!! Form::label('forma_pago', 'Forma Pago:') !!}
    {!! Form::select('forma_pago', ['0'=>'Efectivo','1'=>'Crédito'] , null, ['class' => 'form-control']) !!}
</div>



<!-- Observaciones Field -->
<div class="col-sm-6">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::text('observaciones', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Submit Field -->
<div class="col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('proveedoresClientes.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>

</div>