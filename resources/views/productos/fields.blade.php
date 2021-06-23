<div class="row">

<!-- Id Procli Field -->
<div class="col-sm-6">
    {!! Form::label('id_procli', 'Id Procli:') !!}
    {!! Form::select('id_procli',$clientes,null, ['class' => 'form-control']) !!}
</div>



<!-- Pvp Field -->
<div class="col-sm-6">
    {!! Form::label('pvp', 'Pvp:') !!}
    {!! Form::text('pvp', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20,'required'=>'required']) !!}
</div>

<!-- Nombre Descripcion Field -->
<div class="col-sm-6">
    {!! Form::label('nombre_descripcion', 'Nombre Descripcion:') !!}
    {!! Form::text('nombre_descripcion', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100,'required'=>'required']) !!}
</div>

<!-- Marca Field -->
<div class="col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    {!! Form::text('marca', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50,'required'=>'required']) !!}
</div>

<!-- Modelo Field -->
<div class="col-sm-6">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50,'required'=>'required']) !!}
</div>

<!-- Material Field -->
<div class="col-sm-6">
    {!! Form::label('material', 'Material:') !!}
    {!! Form::text('material', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50,'required'=>'required']) !!}
</div>


</div>

<!-- Submit Field -->
<div class="col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
