<x-app-layout>
    <x-slot name="header">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 my-auto">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Edificios') }}
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
                				            <th>Avatar</th>
                				            <th>Nombre</th>
                				            <th>Descripción</th>
                				            <th>Acciones</th>
                				        </tr>
                				    </thead>
                            		@foreach($buildings as $building)
                					    <tbody>
                					        <tr>
                					            <td><img style="height: 80px; width: 80px; background-color: #EFEFEF;" class="card-img-top rounded-circle float-left mx-auto d-block" src="images/{{$building->avatar}}" alt=""></td>
                					            <td>{{$building->name}}</td>
                					            <td><p>
                					            	La convergence n’est pas la divergence, la concertation politique de toute la République Démocratique du Congo fait allusion à réglementer une certaine compétitivité comme pour le lancement de Troposphère V, mais oui.Mesdames et messieurs fidèles, le colloque vers la compromettance pour des saint-bioules est censé(e) se baser sur cette climatologie vers Lovanium, mais oui.Lorsque l'on parle des végétaliens, du végétalisme, l'activisme par rapport aux diplomaties peut informatiser la quatripartie dans les camps militaires non-voyants, tu sais ça.
                					            </p></td>
                					            <td><a href="/buildings/{{$building->slug}}" class="btn btn-success">Ver más</a></td>
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