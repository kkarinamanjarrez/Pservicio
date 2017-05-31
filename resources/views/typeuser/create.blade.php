@extends('layaut.main')

@section ('content')

<div class="row">
    <div class="col-md-7">
      <div class="panel-heading">
         Nuevo Recurso
      </div>

      <div class="panel-body">

			{!! Form::open(array('route' => 'Typeuser.store', 'class' => 'form')) !!}

				<div class="form-group">
   				 {!! Form::label('Tipo de Usuario') !!}
   				 {!! Form::text('name', null, 
      			 array('required', 
                 'class'=>'form-control', 
              	 'placeholder'=>'Tipo de Usuario')) !!}
				</div>

				<div class="form-group">
    			 {!! Form::submit('Guardar', 
      			 array('class'=>'btn btn-primary')) !!}
				</div>

				{!! Form::close() !!}

		</div>  
    </div>
</div>

@endsection