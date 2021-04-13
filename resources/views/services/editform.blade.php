<form id="contact-form" role="form">
	<div class="card text-center">
        <div class="card-body">
    		<div class="card-title"><h1 class="m-0 text-dark">{{$service->name}}</h1></div>
        </div>
    </div>
	<div class="controls">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="form-group"> 
	            	{!! Form::label('name', 'Nombre *')!!}
	            	{!! Form::text('name', null, ['class' => 'form-control'])!!} 
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12">
	            <div class="form-group"> 
	            	{!! Form::label('description', 'Descripcion *')!!}
	            	{!! Form::text('description', null, ['class' => 'form-control'])!!} 
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12">
	            <div class="form-group"> 
	            	{!! Form::label('type', 'Tipo *')!!}
	            	{!! Form::text('type', null, ['class' => 'form-control'])!!} 
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12"> 
	        	{!! Form::submit('Actualizar', ['class' => 'btn btn-primary col-md-12'])!!} 
	        </div>
	    </div>
	</div>
</form>