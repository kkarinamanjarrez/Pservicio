@extends('layaut.main')

@section('content')

<!-- boton nuevo -->
<div class="col-md-10">
<div class="panel panel-heading">
	Listado de Usuario
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
						<th>id</th>
						<th>Nombre</th>
						<th>E-MAIL</th>
						<th>Contraseña</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($users as $user)
					
					<tr class="active">
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->password}}</td>
					</tr>

				@endforeach
				</tbody>
			</table>
			<div class="text-center">
                  {!! $users->links() !!}
			</div>
		</div>
	</div>
</div>
<script>
      $("#nuevo").click(function(event)
      {
          document.location.href ="{{route('user.create')}}";
      });
</script>

@endsection