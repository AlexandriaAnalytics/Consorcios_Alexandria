<x-app-layout>
    <x-slot name="header">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 my-auto">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight center">
                            {{ __('Editar Edificio') }}
                        </h2> 
                    </div><!-- /.col -->
                    <div class="col">
                        <a class="btn btn-outline-success"
                            href="{!! route('buildings.index') !!}">
                            <span class="">Regresar</span>
                        </a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </x-slot>
    @include('common.errors')
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            {!! Form::model($building, ['route' => ['buildings.update', $building], 'method' => 'PUT', 'files' => true]) !!}
                                {{-- incluimos una subvista de formulario --}}
                                @include('buildings.form')
                            {!! Form::close()!!}
                        </div>
                    </div>
                </div> <!-- /.8 -->
            </div> <!-- /.row-->
        </div>
    </div>
</x-app-layout>