<x-app-layout>
    <x-slot name="header">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 my-auto">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Detalles Rol') }}
                        </h2> 
                    </div><!-- /.col -->
                    <div class="col">
                        <a class="btn btn-outline-success"
                                    href="{!! route('roles.index') !!}">
                                    <i class="fa fa-plus"></i>
                                    <span class="d-none d-sm-inline">Regresar</span>
                                </a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="card-title">
                            <h3 class="m-0 text-dark">Datos de Roles</h3>
                        </div>
                        <div class="container">
                            <form id="contact-form" role="form">
                                <div class="controls">
                                    {{-- fila de nombre --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('name', 'Nombre')!!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" value="{{$role->name}}" class="form-control-plaintext" readonly> 
                                            </div>
                                        </div>
                                    </div>
                                    {{-- fila de email --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('description', 'Descripcion')!!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="description" value="{{$role->description}}" class="form-control-plaintext" readonly> 
                                            </div>
                                        </div>
                                    </div>
                                    {{-- fila encabezado de permisos --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {!! Form::label('permission', 'Permisos')!!}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- fila de rol --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <ul class="list-group list-group-flush">
                                                    @foreach($role->permissions as $permission)
                                                                <li class="list-group-item">
                                                                    <ion-icon name="add-outline"></ion-icon> 
                                                                    {{ $permission->name}}
                                                                </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- /.8 -->
            <div class="col-md-6">
                <div class="card mt-2 p-4 bg-light">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="card-title"><h1 class="m-0 text-dark">Transacciones</h1></div>
                            <div class="card-text"><p>La convergence n’est pas la divergence, la concertation politique de toute la République Démocratique du Congo fait allusion à réglementer une certaine compétitivité comme pour le lancement de Troposphère V, mais oui.Mesdames et messieurs </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row-->
        {{-- ================================================================================================================================= --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-2 p-4 bg-light">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="card-title"><h1 class="m-0 text-dark">Solicitudes</h1></div>
                            <div class="card-text"><p>La convergence n’est pas la divergence, la concertation politique de toute la République Démocratique du Congo fait allusion à réglementer une certaine compétitivité comme pour le lancement de Troposphère V, mais oui.Mesdames et messieurs </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row-->
    </div> 
</x-app-layout>
