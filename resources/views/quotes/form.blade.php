<form id="contact-form" role="form">
	<div class="controls">
		{{-- fila de Proyecto --}}
	    <div class="row">
	        <div class="col-md-12">
	            <div class="form-group"> 
	            	{!! Form::label('project_id', 'Proyecto')!!}
	            	<select id="project_id" name="project_id" class="form-control" required="required" data-error="Please specify the project">
						<option value="">-- Seleccione el proyecto --</option>
{{-- 						@foreach ($roles as $role)
							<option value="{{$role->id }}">{{ $role->name }}</option>
						@endforeach --}}
	                </select> 
	            </div>
	        </div>
	    </div>
        {{-- fila de usuario --}}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('user_id', 'Usuario')!!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" value="Usuario Activo" class="form-control-plaintext" readonly> {{-- value="{{$user->name}}" --}}
                </div>
            </div>
        </div>
        {{-- fila de monto --}}
	    <div class="row">
	        <div class="col-md-12">
	            <div class="form-group"> 
	            	{!! Form::label('amount', 'Monto *')!!}
	            	{!! Form::text('amount', null, ['class' => 'form-control'])!!} 
	            </div>
	        </div>
	    </div>
	    {{-- fila de duracion --}}
	    <div class="row">
	        <div class="col-md-12">
	            <div class="form-group"> 
	            	{!! Form::label('duration', 'Duracion *')!!}
	            	{!! Form::text('duration', null, ['class' => 'form-control'])!!}
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