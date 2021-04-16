<x-app-layout>
    <x-slot name="header">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 my-auto">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight center">
                            {{ __('Listado de Proyectos') }}
                        </h2> 
                    </div><!-- /.col -->
                    <div class="col">
                        <a class="btn btn-outline-success"
                            href="{!! route('projects.create') !!}">
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
                				            <th>Descripción</th>
                				            <th>Tipo de Servicio</th>
                                            <th>Edificio</th>
                                            <th>Estado</th>
                                            <th>Fecha de Inicio</th>
                                            <th>Fecha Fin</th>
                				            <th>Acciones</th>
                				        </tr>
                				    </thead>
                            		@foreach($projects as $project)
                					    <tbody>
                					        <tr>
                					            <td>{{$project->name}}</td>
                					            <td>{{$project->description}}</td>
                					            <td>Tipo de Servicio</td>
                                                <td>Edificio</td>
                                                <td>Estado del proyecto</td>
                                                <td>Fecha de inicio
                                                    @if ($project->start_date === null)
                                                        Null
                                                    @else
                                                        {{$project->start_date}}
                                                    @endif
                                                </td>
                                                <td>Fecha fin
                                                    @if ($project->end_date === null)
                                                        Null
                                                    @else
                                                        {{$project->end_date}}
                                                    @endif
                                                </td>
                					            <td>
                                                    <a href="/proyects/{{$project->slug}}" class="btn btn-success">Ver Detalles</a>
                                                    <a href="/proyects/{{$project->slug}}/edit" class="btn btn-info">Editar</a>
                                                    {!! Form::open(['route' => ['proyects.destroy', $project->slug], 'method' => 'DELETE']) !!}
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