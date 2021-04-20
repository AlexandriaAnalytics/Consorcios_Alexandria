<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del Proyecto') }}
        </h2> 
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">
                                <a class="btn btn-outline-success"
                                    href="{!! route('projects.index') !!}">
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
                <div class="col-lg-12">
                    <div class="card text-center">
                    	<img style="height: 200px; width: 200px; background-color: #EFEFEF" class="card-img-top rounded-circle float-left mx-auto d-block" src="/images/{{$project->avatar}}">
                        <div class="card-body">
                    		<div class="card-title"><h1 class="m-0 text-dark">Proyecto {{$project->name}}</h1></div>
                    		<div class="card-text"><p>La convergence n’est pas la divergence, la concertation politique de toute la République Démocratique du Congo fait allusion à réglementer une certaine compétitivité comme pour le lancement de Troposphère V, mais oui.Mesdames et messieurs fidèles, le colloque vers la compromettance pour des saint-bioules est censé(e) se baser sur cette climatologie vers Lovanium, mais oui.Lorsque l'on parle des végétaliens, du végétalisme, l'activisme par rapport aux diplomaties peut informatiser la quatripartie dans les camps militaires non-voyants, tu sais ça.</p>
                    		</div>
                            <a href="/projects/{{$project->slug}}/edit" class="btn btn-success">Editar</a>

                            {!! Form::open(['route' => ['projects.destroy', $project->slug], 'method' => 'DELETE']) !!}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
                            {!! Form::close()!!}
                        </div>
                    </div>
                    <!--/.card -->
                </div>
    </div>
</x-app-layout>
