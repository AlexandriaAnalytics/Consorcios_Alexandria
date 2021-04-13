<x-app-layout>
    <x-slot name="header">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 my-auto">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight center">
                            {{ __('Listado de Roles') }}
                        </h2> 
                    </div><!-- /.col -->
                    <div class="col">
                        <a class="btn btn-outline-success"
                            href="{!! route('roles.create') !!}">
                            <i class="fa fa-plus"></i>
                            <span class="d-none d-sm-inline">Agregar Nuevo</span>
                        </a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-max mx-auto sm:px-8 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    @include('common.success')
                    <!-- Main content -->
                    <div  class="container">
                        <div class="container-fluid">
                            <div class="row">
                            	<table class="table table-responsive table-hover table-bordered">
                				    <thead>
                				        <tr>
                                            <th>Nombre</th>
                				            <th>Descripcion</th>
                                            <th>Permisos</th>
                				            <th>Acciones</th>
                				        </tr>
                				    </thead>
                            		@foreach($roles as $role)
                					    <tbody>
                					        <tr>
                					            <td>{{$role->name}}</td>
                					            <td>{{$role->description}}</td>
                                                <td>
                                                    <ul class="list-group list-group-flush">
                                                        @foreach($role->permissions as $permission)
                                                            <li class="list-group-item">
                                                                <ion-icon name="add-outline"></ion-icon> 
                                                                {{ $permission->name }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </td>  
                					            <td>
                                                    <a href="/roles/{{$role->id}}" class="btn btn-success">Ver Detalles</a>
                                                    <a href="/roles/{{$role->id}}/edit" class="btn btn-info">Editar</a>
                                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
                                                        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
                                                    {!! Form::close()!!}
                                                </td>
                					        </tr>
                					    </tbody>
                					@endforeach
                				</table>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>