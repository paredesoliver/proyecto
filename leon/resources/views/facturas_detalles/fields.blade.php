<!-- Id Fac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_fac', 'Id Fac:') !!}
    {!! Form::number('id_fac', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Prod Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_prod', 'Id Prod:') !!}
    {!! Form::number('id_prod', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Precio Unitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio_unitario', 'Precio Unitario:') !!}
    {!! Form::text('precio_unitario', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Descuento Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descuento_producto', 'Descuento Producto:') !!}
    {!! Form::text('descuento_producto', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destino', 'Destino:') !!}
    {!! Form::text('destino', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('facturasDetalles.index') }}" class="btn btn-secondary">Cancel</a>
</div>
