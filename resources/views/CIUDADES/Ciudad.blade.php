@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'Ciudades.store', 'method' => 'post', 'novalidate']) !!}
			<div class="form-group">
				{!! Form::label('full_nombre', 'Nombre_ciudad') !!}
				{!! Form::text('Nombre_ciudad', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Enviar',['class' => 'btn btn-succes']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection