@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Encuestas/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<div class="form-group">
			<label for="exampleInputDescripcion7">Descripcion</label>
			<input type="text" class="form-control" name = "Descripcion" >
		</div>
	
		<button type="submit" class="btn btn-default">Search</button>
		
		<a href="{{ route('Encuestas.index') }}" class="btn btn-primary">All</a>

		<a href="{{ route('Encuestas.create') }}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Descripcion</th>
					<th>Fk_empresa</th>
					<th>Fk_funcionario</th>
					<th>Fecha</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Encuestas as $Encuestas)
				<tr>
					<td>{{ $Encuestas->Descripcion }}</td>
					<td>{{ $Encuestas->Fk_empresa }}</td>
                    <td>{{ $Encuestas->Fk_funcionario }}</td>
					<td>{{ $Encuestas->Fecha }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ route('Encuestas.edit',['id' => $Encuestas->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Encuestas/destroy',['id' => $Encuestas->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection