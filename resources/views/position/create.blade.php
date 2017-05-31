@extends('layaut.main')

@section ('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
          
          <div class="row">
            <!-- <div class="col-md-7"> -->
            <div class="panel-heading">
            @include('partials.messages')
            <a class="btn btn-primary btn-xs navbar-text navbar-right" href="{{route('mean.index')}}" >Listado</a>
               <h2>Nuevo Cargo</h2> 
            </div>    
             <div class="panel-body">

             {!! Form::open(array('route' => 'position.store', 'class' => 'form')) !!}

             <div class="form-group">
              {!! Form::label('Nombre del Cargo') !!}
              {!! Form::text('name', null, 
              array('required', 
                 'class'=>'form-control', 
                 'placeholder'=>'Nombre del Cargo')) !!}
             </div>

              <div class="form-group">
                 {!! Form::submit('Guardar', 
                   array('class'=>'btn btn-primary')) !!}
              </div>

              {!! Form::close() !!}

            </div>  
            </div>
          </div>

        </div>
        <div class="col-md-2">
        </div>
      </div>
    </div>
  </div>
</div>

@endsection