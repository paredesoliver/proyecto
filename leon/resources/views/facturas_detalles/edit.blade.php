@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('facturasDetalles.index') !!}">Facturas Detalles</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Facturas Detalles</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($facturasDetalles, ['route' => ['facturasDetalles.update', $facturasDetalles->id_facde], 'method' => 'patch']) !!}

                              @include('facturas_detalles.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection