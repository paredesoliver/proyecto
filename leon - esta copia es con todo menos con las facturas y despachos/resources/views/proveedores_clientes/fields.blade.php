<div class="row">

<!-- Tipo Identificacion Field -->
<div class="col-sm-6">
    {!! Form::label('tipo_identificacion', 'Tipo Identificacion:') !!}
    {!! Form::text('tipo_identificacion', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Actividad Field -->
<div class="col-sm-6">
    {!! Form::label('actividad', 'Actividad:') !!}
    {!! Form::number('actividad', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Provedor Field -->
<div class="col-sm-6">
    {!! Form::label('tipo_provedor', 'Tipo Provedor:') !!}
    {!! Form::number('tipo_provedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Razon Social Field -->
<div class="col-sm-6">
    {!! Form::label('razon_social', 'Razon Social:') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Nombre Comercial Field -->
<div class="col-sm-6">
    {!! Form::label('nombre_comercial', 'Nombre Comercial:') !!}
    {!! Form::text('nombre_comercial', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Fec Nac Field -->
<div class="col-sm-6">
    {!! Form::label('fec_nac', 'Fec Nac:') !!}
    {!! Form::text('fec_nac', null, ['class' => 'form-control','id'=>'fec_nac']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#fec_nac').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Telefono Movil Field -->
<div class="col-sm-6">
    {!! Form::label('telefono_movil', 'Telefono Movil:') !!}
    {!! Form::text('telefono_movil', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Telefono Convencional Field -->
<div class="col-sm-6">
    {!! Form::label('telefono_convencional', 'Telefono Convencional:') !!}
    {!! Form::text('telefono_convencional', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Correo Field -->
<div class="col-sm-6">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::text('correo', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Direccion Field -->
<div class="col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Forma Pago Field -->
<div class="col-sm-6">
    {!! Form::label('forma_pago', 'Forma Pago:') !!}
    {!! Form::number('forma_pago', null, ['class' => 'form-control']) !!}
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