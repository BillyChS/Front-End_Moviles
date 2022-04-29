@extends('layouts.app')

@section('content')
@extends('Components.sidebar')
<div id="mantenimientoProfesores" class="mantenimientoProfesores">
    <div class="jumbotromp"></div>
    <div class="card">
        <div class="card-header">
            <div id="h3Cursos" class="my-2 d-inline">
                <h3 class="text-center py-2">Mantenimiento de Ciclos</h3>
            </div>
            <div class="d-none row input-group">
                <form class="form-inline mr-auto">
                    <div class="row">
                        <div class="col-4">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                        </div>
                        <div class="d-inline col-3">
                            <button class="btn btn-success" type="submit"> <i class="mx-3 fas fa-search"></i> </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="">
                <div class="py-2 accordion" id="accordionExample">
                    <div class="input-group py-3">
                        <div class="pr-2 form-outline">
                            <input placeholder="Buscar" id="search-input " type="search" id="form1" class="form-control d-inline" />
                        </div>
                        <button id="search-button" type="button" class="d-inline btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Agregar Ciclo
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Codigo Carrera</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="exampleInputPassword">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Titulo</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button class="btn btn-primary">Agregar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <table id="example" class="tabla table table-hover ">

                    <thead class="py-3 theadCursos">
                        <tr class="text-center">
                            <th>Año</th>
                            <th>Ciclo</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <?php foreach ($ciclos as $ciclo) : ?>
                        <tr class="text-center">
                            <td><?= $ciclo->Anio ?></td>
                            <td><?= $ciclo->Numero ?></td>
                            <td><?= $ciclo->Fecha_Inicio ?></td>
                            <td><?= $ciclo->Fecha_Fin ?></td>

                            <td class="text-center">
                                <button class="btn btn-primary"><i class=" fas fa-edit"></i> Editar</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@extends('Components.footer')

@endsection