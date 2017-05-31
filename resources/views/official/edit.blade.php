@extends('layaut.main')

@section ('content')
<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
            <a class="btn btn-primary btn-xs navbar-text navbar-right" href="{{route('attention.index')}}" >Volver</a>
               <h2>Editar Funcionario</h2> 
            </div>    
             <div class="panel-body">

             {!! Form::model($officials,['route'=>['official.update',$officials->id],'method'=>'PUT']) !!}

                <div class="form-group">
                    {!! Form::label('Nombre') !!}
                    {!! Form::text('name', null, [
                    'id'=>'name',
                    'class'=>'form-control',
                    'placeholder'=>'Atencion']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Direccion') !!}
                    {!! Form::text('address', null, [
                    'id'=>'address',
                    'class'=>'form-control',
                    'placeholder'=>'Atencion']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Telefono') !!}
                    {!! Form::text('phone', null, [
                    'id'=>'phone',
                    'class'=>'form-control',
                    'placeholder'=>'Atencion']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Cargo') !!}
                    {!! Form::select('positions_id',$positions, null, [
                    'id'=>'positions_id',
                    'placeholder'=>'Cargo',
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
                    'class' =>'btn btn-warning btn-sm10']) !!}
                </div>

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