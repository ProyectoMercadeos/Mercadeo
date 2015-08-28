@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Ciudades/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<div class="form-group">
			<label for="exampleInputNombre3">Nombre_ciudad</label>
			<input type="text" class="form-control" name = "Nombre_ciudad" >
		</div>
		<button type="submit" class="btn btn-default">Search</button>
		<a href="{{ route('Ciudades.index') }}" class="btn btn-primary">All</a>
		<a href="{{ route('Ciudades.create') }}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Nombre_ciudad</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Ciudades as $Ciudades)
				<tr>
					<td>{{ $Ciudades->Nombre_ciudad }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ route('Ciudades.edit',['id' => $Ciudades->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Ciudades/destroy',['id' => $Ciudades->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection