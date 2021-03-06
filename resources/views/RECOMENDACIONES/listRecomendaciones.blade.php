@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Recomendaciones/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<div class="form-group">
			<label for="exampleInputDescripcion">Descripcion</label>
			<input type="text" class="form-control" name = "Descripcion" >
		</div>
	
		<button type="submit" class="btn btn-default">Search</button>
		
		<a href="{{ route('Recomendaciones.index') }}" class="btn btn-primary">All</a>

		<a href="{{ route('Recomendaciones.create') }}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Descripcion</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Recomendaciones as $Recomendaciones)
				<tr>
					<td>{{ $Recomendaciones->Descripcion }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ route('Recomendaciones.edit',['id' => $Recomendaciones->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Recomendaciones/destroy',['id' => $Recomendaciones->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection