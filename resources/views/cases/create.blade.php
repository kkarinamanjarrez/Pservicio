@extends('layaut.main')

@section ('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-6">

          
          <div class="row">
            <!-- <div class="col-md-7"> -->
            <div class="panel-heading">
            @include('partials.messages')
            <a class="btn btn-primary btn-xs navbar-text navbar-right" href="{{route('mean.index')}}" >Listado</a>
               <h2>Nuevo Caso</h2> 
            </div>    
             <div class="panel-body">

                {!! Form::open(['route' => 'cases.store', 'method'=>'POST']) !!}

                <div class="form-group">
                    {!! Form::label('Fecha') !!}
                    {!! Form::date('date', null, [
                    'id'=>'date',
                    'class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Medio de Comunicacion') !!}
                    {!! Form::select('medias_id',$medias, null, [
                    'id'=>'medias_id',
                    'class'=>'form-control',
                    ]) !!}
                </div>


                <div class="form-group">
                    {!! Form::submit('Guardar', [
                    'date'=>'guardar',
                    'id'=>'guardar',
                    'content'=>'<span> Guardar</span>',
                    'placeholder'=>'Medio de Comunicacion',
                    'class' =>'btn btn-warning btn-sm10']) !!}
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