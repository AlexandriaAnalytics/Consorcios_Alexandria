<form id="contact-form" role="form">
	<div class="card text-center">
        <img style="height: 200px; width: 200px; background-color: #EFEFEF" class="card-img-top rounded-circle float-left mx-auto d-block" src="/images/{{$user->avatar}}">
        <div class="card-body">
    		<div class="card-title"><h1 class="m-0 text-dark">{{$user->name}}</h1></div>
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
	            	{!! Form::label('email', 'Email *')!!}
	            	<input type="text" name="email" value="{{$user->email}}" class="form-control-plaintext" readonly>
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
	            	<select id="role_id" name="role_id" class="form-control">
						<option value="">-- Seleccione el rol --</option>
						@foreach ($roles as $role)
							<option value="{{$role->id }}" {{ $role->id == $user->role_id ? 'selected' : '' }}>
								{{ $role->name }}
							</option>
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
	        	{!! Form::submit('Actualizar', ['class' => 'btn btn-primary col-md-12'])!!} 
	        </div>
	    </div>
	</div>
</form>