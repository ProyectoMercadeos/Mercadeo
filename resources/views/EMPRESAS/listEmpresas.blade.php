@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Empresas/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<div class="form-group">
			<label for="exampleInputNombre3">Nombre</label>
			<input type="text" class="form-control" name = "Nom" >
		</div>
	
		<button type="submit" class="btn btn-default">Search</button>
		
		<a href="{{ route('Empresas.index') }}" class="btn btn-primary">All</a>

		<a href="{{ route('Empresas.create') }}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Fk_localidad</th>
					<th>Telfono</th>
					<th>Direccion</th>
					<th>Correo</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Empresas as $Empresas)
				<tr>
					<td>{{ $Empresas->Nombre }}</td>
					<td>{{ $Empresas->Fk_localidad }}</td>
                    <td>{{ $Empresas->Telefono }}</td>
					<td>{{ $Empresas->Direccion }}</td>
					<td>{{ $Empresas->Correo }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ route('Empresas.edit',['id' => $Empresas->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Empresas/destroy',['id' => $Empresas->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection