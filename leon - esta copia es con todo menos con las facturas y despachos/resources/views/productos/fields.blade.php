<!-- Id Procli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_procli', 'Id Procli:') !!}
    {!! Form::select('id_procli',$clientes,null, ['class' => 'form-control']) !!}
</div>



<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Pvp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pvp', 'Pvp:') !!}
    {!! Form::text('pvp', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Nombre Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_descripcion', 'Nombre Descripcion:') !!}
    {!! Form::text('nombre_descripcion', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    {!! Form::text('marca', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Material Field -->
<div class="form-group col-sm-6">
    {!! Form::label('material', 'Material:') !!}
    {!! Form::text('material', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Nivel Proteccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel_proteccion', 'Nivel Proteccion:') !!}
    {!! Form::text('nivel_proteccion', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Tamano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tamano', 'Tamano:') !!}
    {!! Form::text('tamano', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Capacidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacidad', 'Capacidad:') !!}
    {!! Form::text('capacidad', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Accesos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accesos', 'Accesos:') !!}
    {!! Form::text('accesos', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Aplicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aplicacion', 'Aplicacion:') !!}
    {!! Form::text('aplicacion', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Tipo Conector Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_conector', 'Tipo Conector:') !!}
    {!! Form::text('tipo_conector', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Estandar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estandar', 'Estandar:') !!}
    {!! Form::text('estandar', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Numero Hilos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_hilos', 'Numero Hilos:') !!}
    {!! Form::text('numero_hilos', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Vanos Span Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vanos_span', 'Vanos Span:') !!}
    {!! Form::text('vanos_span', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Unidad Medida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidad_medida', 'Unidad Medida:') !!}
    {!! Form::text('unidad_medida', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
