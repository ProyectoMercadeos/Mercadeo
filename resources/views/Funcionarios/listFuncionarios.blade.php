@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Funcionarios/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<div class="form-group">
			<label for="exampleInputNombre7">Nombre</label>
			<input type="text" class="form-control" name = "Nombre" >
		</div>
		
		<button type="submit" class="btn btn-default">Search</button>
		
		<a href="{{ route('Funcionarios.index') }}" class="btn btn-primary">All</a>

		<a href="{{ route('Funcionarios.create') }}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Funcionarios as $Funcionarios)
				<tr>
					<td>{{ $Funcionarios->Nombre }}</td>
					<td>{{ $Funcionarios->Correo }}</td>
                    <td>
						<a class="btn btn-primary btn-xs" href="{{ route('Funcionarios.edit',['id' => $Funcionarios->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Funcionarios/destroy',['id' => $Funcionarios->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection