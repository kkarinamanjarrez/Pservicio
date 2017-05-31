@extends('layaut.main')

@section('content')

<!-- boton nuevo -->
<div class="col-md-10">
<div class="panel panel-heading">
	Listado de Tipo de Usuario
	<p class="navbar-text navbar-right">
		<button type="button" id="nuevo" name="nuevo" class="btn btn-warning navbar-btn">Nuevo</button>
	</p>
</div>
</div>

<!-- tabla -->
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-10">
			<table class="table">
				<thead>
					<tr class="danger">
						<th>Id</th>
						<th>Nombre</th>

					</tr>
				</thead>
				<tbody>
				@foreach ($typeusers as $typeuser)
				
					<tr class="active">
						<td>{{$typeuser->id}}</td>
						<td>{{$typeuser->name}}</td>
					</tr>

				@endforeach	
				</tbody>
			</table>
			<div class="text-center">
                  {!! $typeusers->links() !!}
			</div>
		</div>
	</div>
</div>
<script>
      $("#nuevo").click(function(event)
      {
          document.location.href ="{{route('typeuser.create')}}";
      });
</script>

@endsection