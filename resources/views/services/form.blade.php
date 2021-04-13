<form id="contact-form" role="form">
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
	        	{!! Form::submit('Guardar', ['class' => 'btn btn-primary col-md-12'])!!} 
	        </div>
	    </div>
	</div>
</form>