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
               <h2>Eliminar Cargo</h2> 
            </div>    
             <div class="panel-body">

             {!! Form::open(['route'=>['position.destroy',$positions->id],'method'=>'DELETE']) !!}

                    <div class="form-group">
                        <label form="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO</label>
                    </div>

                    <div class="form-group">
                        {!! form::label('Cargo') !!}
                        {!! $positions->name !!}
                    </div>

                    {!! form::submit('Aceptar',['name'=>'guardar', 
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-primary btn-sm m-t-10']) !!}

                    <button type="button" id="cancelar" name="cancelar" class="btn btn-warning btn-sm m-t-10"
                            onClick="location.href='{{route('position.index')}}'"
                    >Cancelar</button>
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