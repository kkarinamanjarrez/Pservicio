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
            <a class="btn btn-primary btn-xs navbar-text navbar-right" href="{{route('mean.index')}}" >Volver</a>
               <h2>Editar Producto</h2> 
            </div>    
             <div class="panel-body">

             {!! Form::model($cas,['route'=>['cases.update',$cas->id],'method'=>'PUT']) !!}

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