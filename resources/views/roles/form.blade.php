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
        {{-- fila de permisos --}}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    @foreach($permissions as $permission)
					<div class="input-group mb-3 form-control">
				  		<div class="input-group-prepend">
				    		<div class="input-group-text form-control">
				      			<input type="checkbox" aria-label="Checkbox for following text input" id="permission_id" name="permission_id[]" value="{{ $permission->id }}">
				    		</div>
				  		</div>
				  				<input type="text"  value="{{ $permission->name }}" readonly> {{-- falta mostrar actuales {{ $permission->id == $role->permission->id ? 'selected' : '' }}> --}}
					</div>
                    @endforeach
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