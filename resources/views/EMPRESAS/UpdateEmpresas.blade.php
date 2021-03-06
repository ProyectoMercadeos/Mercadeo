@extends ('app')
@section('content')
<div class= "container">
	    <div class="row">
	    	<div class="col-md-10 cold-md-offset-1">
	    		{!! Form::model($Encuestas,['route' => 'Empresas.update','method' => 'put', 'novalidate']) !!}

	    	{!! Form::hidden('id', $Encuestas->id) !!}

	    	<div class="form-group">
	    		{!! Form::label('full_Nombre', 'Nombre') !!}
	    		{!! Form::text('Nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	        <div class="form-group">
	    		{!! Form::label('full_fk_localidad','Fk_localidad') !!}
	    		{!! Form::text('Fk_localidad', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	        <div class="form-group">
	    		{!! Form::label('full_correo','Fk_Correo') !!}
	    		{!! Form::text('Fk_Correo', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('full_Telefono','Telefono') !!}
	    		{!! Form::text('Fecha', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('full_Direccion','Direccion') !!}
	    		{!! Form::text('Direccion', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    	
	    	<div class="form-group">
	    		{!! Form::submit('Enviar', ['class' => 'btn btn-success ']) !!}
	    	</div>	
	    {!! Form::close() !!}
	</div>
 </div>
</div>
@endsection

