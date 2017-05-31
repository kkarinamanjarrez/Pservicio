@extends('layaut.main')

@section('content')
<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-10">

				<!-- Alerta -->
				<div class="row">
					<div class="col-md-10">
						@include('partials.messages')
					</div>
				</div>

				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<h3>Listado de Recursos</h3>
								</div>
								<div class="col-md-4">
									<!-- boton nuevo -->
									<div class="panel panel-heading">
										<p class="navbar-text navbar-right">
											<button type="button" id="nuevo" name="nuevo" class="btn btn-warning navbar-btn">Nuevo</button>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- tabla -->
				    <div class="container-fluid">
					<div class="row">
						<div class="col-md-10">

							<table class="table" >
								<thead>
									<tr class="danger">
										<th>Id</th>
										<th>Recursos</th>
										<th align="center">Accion</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($means as $mean)
									<tr class="active">
										<td>{{$mean->id}}</td>
										<td>{{$mean->name}}</td>
									<td>
				                        <a class="btn btn-primary btn-xs" href="{{route('mean.edit', $mean->id)}}" >Edit</a> 
				                        <a class="btn btn-danger btn-xs" href="{{route('mean.show', $mean->id)}}" >Delete</a>
				                    </td>
				                    </tr>
								@endforeach
								</tbody>
							</table>
							<div class="text-center">
				                  {!! $means->links() !!}
							</div>
						</div>
					</div>
				</div>

				<script>
				      $("#nuevo").click(function(event)
				      {
				          document.location.href ="{{route('mean.create')}}";
				      });
				</script>

		</div>
		<div class="col-md-1">
		</div>
	</div>
</div>
@endsection