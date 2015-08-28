@extends ('app')
@section('content')
<div class= "container">
	    <div class="row">
	    	<div class="col-md-10 cold-md-offset-1">
	    		{!! Form::model($Ciudades,['route' => 'Ciudades.update','method' => 'put', 'novalidate']) !!}
	    		{!! Form::hidden('id', $Ciudades->id) !!}

	    	<div class="form-group">
	    		{!! Form::label('full_nombre', 'Nombre_ciudad') !!}
	    		{!! Form::text('Nombre_ciudad', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	      	<div class="form-group">
	    		{!! Form::submit('Enviar', ['class' => 'btn btn-success ']) !!}
	    	</div>	
	    {!! Form::close() !!}
	</div>
 </div>
</div>
@endsection

