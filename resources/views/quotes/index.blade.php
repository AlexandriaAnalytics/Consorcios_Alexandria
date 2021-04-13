<x-app-layout>
    <x-slot name="header">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 my-auto">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight center">
                            {{ __('Crear Nuevo Usuario') }}
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-8 lg:px-8">
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
                                            <th>Edificio</th>
                                            <th>Proyecto</th>
                                            <th>amount</th>
                                            <th>duration</th>
                                            <th>status</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    @foreach($services as $service)
                                        <tbody>
                                            <tr>
                                                <td>-- Edificio --</td>
                                                <td>-- Proyecto --</td>
                                                <td>{{$service->amount}}</td>   
                                                <td>{{$service->email_verified_at}}</td>
                                                <td>
                                                    <a href="/users/{{$service->slug}}" class="btn btn-success">Ver Detalles</a>
                                                    <a href="/users/{{$service->slug}}/edit" class="btn btn-info">Editar</a>
                                                    {!! Form::open(['route' => ['users.destroy', $service->slug], 'method' => 'DELETE']) !!}
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