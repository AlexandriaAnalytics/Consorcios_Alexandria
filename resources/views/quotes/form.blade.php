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
	            	{!! Form::label('email', 'Email *')!!}
	            	{!! Form::text('email', null, ['class' => 'form-control'])!!}
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-6">
	            <div class="form-group"> 
	            	{!! Form::label('password', 'Password')!!} 
	            	{!! Form::password('password', null, ['class' => 'form-control'])!!} 
	            </div>
	        </div>
	        <div class="col-md-6">
	            <div class="form-group"> 
	            	{!! Form::label('password_confirmation', 'Confirmar Password')!!} 
	            	{!! Form::password('password_confirmation', null, ['class' => 'form-control'])!!} 
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12">
	            <div class="form-group"> 
	            	{!! Form::label('role_id', 'Rol')!!}
	            	<select id="role_id" name="role_id" class="form-control" required="required" data-error="Please specify your role.">
						<option value="">-- Seleccione el rol --</option>
						@foreach ($roles as $role)
							<option value="{{$role->id }}">{{ $role->name }}</option>
						@endforeach
	                </select> 
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-3">
	            <div class="form-group"> 
	            	{!! Form::label('avatar', 'Avatar')!!} 
	            </div>
	        </div>
	        <div class="col-md-6">
	            <div class="form-group">  
	            	{!! Form::file('avatar')!!}
	            </div>
	        </div>
	        <div class="col-md-12"> 
	        	{!! Form::submit('Guardar', ['class' => 'btn btn-primary col-md-12'])!!} 
	        </div>
	    </div>
	</div>
</form>