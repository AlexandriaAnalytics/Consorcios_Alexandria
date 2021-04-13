<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Proyecto') }}
        </h2> 
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">
                                <a class="btn btn-outline-success"
                                    href="/projects/{{$project->slug}}">
                                    <i class="fa fa-plus"></i>
                                    <span class="d-none d-sm-inline">Regresar</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
        {!! Form::model($project, ['route' => ['projects.update', $project], 'method' => 'PUT', 'files' => true]) !!}
            {{-- incluimos una subvista de formulario --}}
            @include('projects.form')
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary'])!!}
        {!! Form::close()!!}
</x-app-layout>