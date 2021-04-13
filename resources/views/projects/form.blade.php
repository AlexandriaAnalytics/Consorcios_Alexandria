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
	            	{!! Form::label('building_id', 'Edificio')!!}
	            	<select id="building_id" name="building_id" class="form-control" required="required" data-error="Please specify your role.">
						<option value="">-- Seleccione el edificio --</option>
{{-- 						@foreach ($roles as $role)
							<option value="{{$role->id }}">{{ $role->name }}</option>
						@endforeach --}}
	                </select> 
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12">
	            <div class="form-group"> 
	            	{!! Form::label('service_id', 'Tipo de Servicio')!!}
	            	<select id="service_id" name="service_id" class="form-control" required="required" data-error="Please specify your role.">
						<option value="">-- Seleccione el servicio --</option>
{{-- 						@foreach ($roles as $role)
							<option value="{{$role->id }}">{{ $role->name }}</option>
						@endforeach --}}
	                </select> 
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-6">
	            <div class="form-group"> 
	            	{!! Form::label('password', 'Fecha de Inicio')!!} 
	            	{!! Form::date('password', null, ['class' => 'form-control'])!!} 
	            </div>
	        </div>
	        <div class="col-md-6">
	            <div class="form-group"> 
	            	{!! Form::label('password_confirmation', 'Fecha Fin')!!} 
	            	{!! Form::date('password_confirmation', null, ['class' => 'form-control'])!!} 
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12">
	            <div class="form-group"> 
	            	{!! Form::label('description', 'Descripción *')!!}
	            	{!! Form::textarea('description', null, ['class' => 'form-control'])!!}
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