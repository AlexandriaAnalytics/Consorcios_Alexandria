<x-postreg>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="card-title">
                            <h3 class="m-0 text-dark">¡Bienvenido!</h3>
                        </div>
                        <div class="container">
                            <form id="contact-form" role="form">
                                <div class="controls">
                                    {{-- fila de Avatar --}}
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="card-title">
                                                <img style="height: 200px; width: 200px; background-color: #EFEFEF" class="card-img-top rounded-circle mx-auto d-block" src="/images/default.svg{{-- {{$user->avatar}} --}}">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- fila de nombre --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {{-- {!! Form::label('name', 'Nombre')!!} --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" value="{{-- {{$user->name}} --}}" class="form-control-plaintext" readonly> 
                                            </div>
                                        </div>
                                    </div>
                                    {{-- fila de email --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {{-- {!! Form::label('name', 'Email')!!} --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" value="{{-- {{$user->email}} --}}" class="form-control-plaintext" readonly> 
                                            </div>
                                        </div>
                                    </div>
                                    {{-- fila de rol --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {{-- {!! Form::label('name', 'Rol')!!} --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" value="{{-- {{$user->role->name}} --}}" class="form-control-plaintext" readonly> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- /.8 -->
</x-postreg>
