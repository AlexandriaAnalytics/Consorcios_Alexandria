<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nuevo Edificio') }}
        </h2> 
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">
                                <a class="btn btn-outline-success"
                                    href="{!! route('buildings.index') !!}">
                                    <i class="fa fa-plus"></i>
                                    <span class="d-none d-sm-inline">Regresar</span>
                                </a>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </x-slot>
	@include('common.errors')
	{!! Form::open(['route' => 'buildings.store', 'method' => 'POST', 'files' => true ]) !!}
		{{-- incluimos una subvista de formulario --}}
		@include('buildings.form')

		{!! Form::submit('Guardar', ['class' => 'btn btn-primary'])!!}
	{!! Form::close()!!}
</x-app-layout>
