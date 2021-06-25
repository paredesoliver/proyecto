@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('empresas.index') !!}">Empresas</a>
          </li>
          <li class="breadcrumb-item active">Editar Empresas</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Editar Empresas</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($empresas, ['route' => ['empresas.update', $empresas->id_empr], 'method' => 'patch']) !!}

                              @include('empresas.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection