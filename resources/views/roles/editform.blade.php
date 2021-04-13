<form id="contact-form" role="form">
	<div class="card text-center">
        <div class="card-body">
    		<div class="card-title"><h1 class="m-0 text-dark">{{$role->name}}</h1></div>
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
        {{-- fila encabezado de permisos --}}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('permission_id', 'Permisos')!!}
                </div>
            </div>
        </div>
        {{-- fila de permisos --}}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    @foreach($role->permissions as $permission)
					<div class="input-group mb-3">
				  		<div class="input-group-prepend">
				    		<div class="input-group-text">
				      			<input type="checkbox" aria-label="Checkbox for following text input"  value="{{ $permission->id }}">
				    		</div>
				  		</div>
				  	<input type="text" class="form-control" value="{{ $permission->name }}" readonly> {{-- falta mostrar actuales {{ $permission->id == $role->permission->id ? 'selected' : '' }}> --}}
					</div>
                    @endforeach
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