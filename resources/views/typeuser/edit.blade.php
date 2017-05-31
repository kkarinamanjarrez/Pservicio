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
               <h2>Editar Producto</h2> 
            </div>    
             <div class="panel-body">

             {!! Form::model($positions,['route'=>['position.update',$positions->id],'method'=>'PUT']) !!}

                <div class="form-group">
                    {!! Form::label('Nombre') !!}
                    {!! Form::text('name', null, [
                    'id'=>'name',
                    'class'=>'form-control',
                    'placeholder'=>'Cargo']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Guardar', [
                    'name'=>'guardar',
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