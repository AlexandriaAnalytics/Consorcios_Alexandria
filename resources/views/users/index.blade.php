<x-app-layout>
    <x-slot name="header">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 my-auto">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight center">
                            {{ __('Listado de Usuarios') }}
                        </h2> 
                    </div><!-- /.col -->
                    <div class="col">
                        <a class="btn btn-outline-success"
                            href="{!! route('users.create') !!}">
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
                				            <th>Email</th>
                                            <th>Rol</th>
                                            <th>Permisos</th>
                				            <th>Email_verified_at</th>
                				            <th>Acciones</th>
                				        </tr>
                				    </thead>
                            		@foreach($users as $user)
                					    <tbody>
                					        <tr>
                					            <td>{{$user->name}}</td>
                					            <td>{{$user->email}}</td>
                                                <td>{{$user->role->name}}</td>  
                                                <td>
                                                    <ul class="list-group list-group-flush">
                                                        @foreach($user->role->permissions as $permission)
                                                            <li class="list-group-item">
                                                                <ion-icon name="add-outline"></ion-icon> 
                                                                {{ $permission->name}}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </td>  
                					            <td>
                                                    @if ($user->email_verified_at === null)
                                                        Null
                                                    @else
                                                        {{$user->email_verified_at}}
                                                    @endif

                                                </td>
                					            <td>
                                                    <a href="/users/{{$user->slug}}" class="btn btn-success">Ver Detalles</a>
                                                    <a href="/users/{{$user->slug}}/edit" class="btn btn-info">Editar</a>
                                                    {!! Form::open(['route' => ['users.destroy', $user->slug], 'method' => 'DELETE']) !!}
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