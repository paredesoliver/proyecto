<div class="row">
<!-- Razon Social Field -->
<div class=" col-sm-6">
    {!! Form::label('razon_social', 'Razon Social:') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control','maxlength' => 200,'required'=>'required']) !!}
</div>

<!-- Ruc Field -->
<div class=" col-sm-6">
    {!! Form::label('ruc', 'Ruc:') !!}
    {!! Form::text('ruc', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15,'required'=>'required']) !!}
</div>

<!-- Nombre Comercial Field -->
<div class=" col-sm-6">
    {!! Form::label('nombre_comercial', 'Nombre Comercial:') !!}
    {!! Form::text('nombre_comercial', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200,'required'=>'required']) !!}
</div>

<!-- Telefono Convencional Field -->
<div class="col-sm-6">
    {!! Form::label('telefono_convencional', 'Telefono Convencional:') !!}
    {!! Form::text('telefono_convencional', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20,'required'=>'required']) !!}
</div>

<!-- Telefono Movil Field -->
<div class="col-sm-6">
    {!! Form::label('telefono_movil', 'Telefono Movil:') !!}
    {!! Form::text('telefono_movil', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20,'required'=>'required']) !!}
</div>

<!-- Correo Field -->
<div class="col-sm-6">
    {!! Form::label('correoo', 'Correo:') !!}
    {!! Form::text('correoo', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50,'required'=>'required']) !!}
</div>

<!-- Direccion Field -->
<div class="col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200,'required'=>'required']) !!}
</div>

<!-- Sitio Web Field -->
<div class="col-sm-6">
    {!! Form::label('sitio_web', 'Sitio Web:') !!}
    {!! Form::text('sitio_web', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200,'required'=>'required']) !!}
</div>

</div>

<div class="row">
<!-- Submit Field -->

<div class="col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empresas.index') }}" class="btn btn-danger pull-right">Cancerlar</a>
</div>

</div>
