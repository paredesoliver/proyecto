<div class="row"> 



<div class="col-sm-6">
    {!! Form::label('apellidos', 'Apellido:') !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control','required'=>'required','maxlength' => 50,]) !!}
</div>


<div class="col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','required'=>'required','maxlength' => 50]) !!}
</div>


<div class="col-sm-6">
    {!! Form::label('telefono_movil', 'Telefono:') !!}
    {!! Form::text('telefono_movil', null, ['class' => 'form-control','required'=>'required','maxlength' => 15]) !!}
</div>

<div class="col-sm-6">
    {!! Form::label('cargo', 'Cargo:') !!}
    {!! Form::select('cargo',['A'=>'Administrador','C'=>'Cliente','V'=>'Vendedor'],null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<div class="col-sm-6">
    {!! Form::label('usuario', 'Usuario:') !!}
    {!! Form::text('usuario', null, ['class' => 'form-control','required'=>'required','maxlength' => 15]) !!}
</div>

<!-- Email Field -->
<div class="col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','required'=>'required','maxlength' => 30]) !!}
</div>


<!-- Password Field -->
<div class="col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','required'=>'required','maxlength' => 10]) !!}
</div>

</div>
<!-- Submit Field -->
<div class="col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('usuarios.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
