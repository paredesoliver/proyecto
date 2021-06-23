@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('proveedoresClientes.index') !!}">Proveedores Clientes</a>
      </li>
      <li class="breadcrumb-item active">Crear</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Crear</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'proveedoresClientes.store']) !!}

                                   @include('proveedores_clientes.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
