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
               <h2>Nuevo Fucionario</h2> 
            </div>    
             <div class="panel-body">

                {!! Form::open(['route' => 'official.store', 'method'=>'POST']) !!}

                <div class="form-group">
                    {!! Form::label('Nombre') !!}
                    {!! Form::text('name', null, [
                    'id'=>'name',
                    'class'=>'form-control',
                    'placeholder'=>'Nombre']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Direccion') !!}
                    {!! Form::text('address', null, [
                    'id'=>'address',
                    'class'=>'form-control',
                    'placeholder'=>'Direccion']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Celular') !!}
                    {!! Form::text('phone', null, [
                    'id'=>'phone',
                    'class'=>'form-control',
                    'placeholder'=>'Celular']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Cargo') !!}
                    {!! Form::select('positions_id',$positions, null, [
                    'id'=>'positions_id',
                    'class'=>'form-control',
                    ]) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Guardar', [
                    'name'=>'guardar',
                    'address'=>'guardar',
                    'phone'=>'guardar',
                    'id'=>'guardar',
                    'content'=>'<span> Guardar</span>',
                    'placeholder'=>'Cargo',
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