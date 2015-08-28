@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Localidades/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<div class="form-group">
			<label for="exampleInputNombre3">Nombre</label>
			<input type="text" class="form-control" name = "Nom" >
		</div>
	
		<button type="submit" class="btn btn-default">Search</button>
		
		<a href="{{ route('Localidades.index') }}" class="btn btn-primary">All</a>

		<a href="{{ route('Localidades.create') }}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Fk_ciudad</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Localidades as $Localidades)
				<tr>
					<td>{{ $Localidades->Nombre }}</td>
					<td>{{ $Localidades->Fk_ciudad }}</td>
                    <td>
						<a class="btn btn-primary btn-xs" href="{{ route('Localidades.edit',['id' => $Localidades->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Localidades/destroy',['id' => $Localidades->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection