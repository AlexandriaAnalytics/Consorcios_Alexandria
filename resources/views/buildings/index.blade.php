<x-app-layout>
    <x-slot name="header">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 my-auto">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Listado de Edificios') }}
                        </h2> 
                    </div>
                    <div>
                        <a class="btn btn-outline-success"
                            href="{!! route('buildings.create') !!}">
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
                				            <th>Direccion</th>
                				            <th>Unidades</th>
                				            <th>Acciones</th>
                				        </tr>
                				    </thead>
                            		@foreach($buildings as $building)
                					    <tbody>
                					        <tr>
                					            <td>{{$building->name}}</td>
                					            <td>{{$building->address}}</td>
                                                <td>{{$building->units}}</td>
                					            <td>
                                                    <a href="/buildings/{{$building->slug}}" class="btn btn-success">Ver detalles</a>
                                                    <a href="/buildings/{{$building->slug}}/edit" class="btn btn-info">Editar</a>
                                                    {!! Form::open(['route' => ['buildings.destroy', $building->slug], 'method' => 'DELETE']) !!}
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