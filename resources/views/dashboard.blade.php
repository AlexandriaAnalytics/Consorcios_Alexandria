<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> 
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Dashboard del usuario!
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="card-title">
                            <h3 class="m-0 text-dark">Datos de Usuario</h3>
                        </div>
                        <div class="container">
                            <form id="contact-form" role="form">
                                <div class="controls">
                                    {{-- fila de Avatar --}}
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="card-title">
                                                <p>Avatar del Usuario</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- fila de nombre --}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Nombre</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" name="name" value="Nombre" class="form-control-plaintext" readonly> 
                                            </div>
                                        </div>
                                    </div>
                                    {{-- fila de email --}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Email</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" name="name" value="email@email.com" class="form-control-plaintext" readonly> 
                                            </div>
                                        </div>
                                    </div>
                                    {{-- fila de rol --}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Rol</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" name="name" value="Rol" class="form-control-plaintext" readonly> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- /.8 -->
            <div class="col-md-7">
                <div class="card mt-2 p-4 bg-light">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="card-title"><h1 class="m-0 text-dark">Transacciones</h1></div>
                            <div class="card-text"><p>La convergence n’est pas la divergence, la concertation politique de toute la République Démocratique du Congo fait allusion à réglementer une certaine compétitivité comme pour le lancement de Troposphère V, mais oui.Mesdames et messieurs Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores provident culpa asperiores ipsum possimus aspernatur iure aperiam blanditiis illum natus sunt voluptas veniam optio exercitationem soluta odit nostrum modi, quae.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row-->
        {{-- ================================================================================================================================= --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-2 p-4 bg-light">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="card-title"><h1 class="m-0 text-dark">Solicitudes</h1></div>
                            <div class="card-text"><p>La convergence n’est pas la divergence, la concertation politique de toute la République Démocratique du Congo fait allusion à réglementer une certaine compétitivité comme pour le lancement de Troposphère V, mais oui.Mesdames et messieurs </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row-->
    </div> 
</x-app-layout>
