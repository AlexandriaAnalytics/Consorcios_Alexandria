<x-app-layout>
    <x-slot name="header">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 my-auto">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight center">
                            {{ __('Listado de Presupuestos') }}
                        </h2> 
                    </div><!-- /.col -->
                    <div class="col">
                        <a class="btn btn-outline-success"
                            href="{!! route('quotes.create') !!}">
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
                                            <th>Edificio</th>
                                            <th>Proyecto</th>
                                            <th>Usuario</th>
                                            <th>amount</th>
                                            <th>duration</th>
                                            <th>¿Aprobado?</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    @foreach($quotes as $quote)
                                        <tbody>
                                            <tr>
                                                <td>-- Edificio --</td>
                                                <td>-- Proyecto --</td>
                                                <td>-- Usuario --</td>
                                                <td>{{$quote->amount}}</td>   
                                                <td>{{$quote->duration}}</td>
                                                <td>{{$quote->status}}</td>
                                                <td>
                                                    <a href="/quotes/{{$quote->slug}}" class="btn btn-success">Ver Detalles</a>
                                                    <a href="/quotes/{{$quote->slug}}/edit" class="btn btn-info">Editar</a>
                                                    {!! Form::open(['route' => ['quotes.destroy', $quote->slug], 'method' => 'DELETE']) !!}
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