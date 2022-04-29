@extends('layouts.app')

@section('content')
@extends('Components.sidebar')
<div id="mantenimientoProfesores" class="mantenimientoProfesores">
    <div class="jumbotromp"></div>
    <div class="p-2">
        <a class="btn btn-dark" href="{{route('carrera.index')}}"><i class="fas fa-arrow-left"></i> Atras</a>
    </div>
    <div class="card">
        <div class="card-header">
            <div id="h3Cursos" class="my-2 d-inline">
                <h3 class="text-center py-2">Mantenimiento de Carreras</h3>
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
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Agregar Curso
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="{{ route('cursos.create') }}" method="POST">
                                    @csrf
                                    <div class="row">

                                        <div class="col-4 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Codigo Curso</label>
                                            <input name="Codigo_Curso" value="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-4 mb-3">
                                            <label for="exampleInputPassword" class="form-label">Codigo Carrera</label>
                                            <select name="Codigo_Carrera" class="form-select" aria-label="Default select example">
                                                <option value="{{$Codigo_Carrera}}" selected><?php echo $Codigo_Carrera ?> </option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label for="exampleInputPassword" class="form-label">No Ciclo</label>
                                            <select name="No_Ciclo" class="form-select" aria-label="Default select example">
                                                <?php
                                                foreach ($ciclos as $ciclo) : ?>
                                                    <option value="{{$ciclo->No_Ciclo}}" selected><?php echo $ciclo->No_Ciclo ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Nombre</label>
                                            <input name="Nombre" value="" type="text" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="col-4 mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Creditos</label>
                                            <input name="Creditos" type="text" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="col-4 mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Horas Semanales</label>
                                            <input name="Horas_Semanales" type="text" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Agregar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <table id="example" class="tabla table table-hover datatable">
                    <thead class="py-3 theadCursos">
                        <tr class="text-center">
                            <th>Codigo Curso</th>
                            <th>Codigo Carrera</th>
                            <th>No Ciclo</th>
                            <th>Nombre</th>
                            <th>Creditos</th>
                            <th>Horas Semanales</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <?php foreach ($cursos as $curso) : ?>
                        <?php foreach ($curso->Cursos as $c) : ?>
                            <?php if ($c->Codigo_Carrera == $Codigo_Carrera) : ?>
                                <tr class="text-center">
                                    <td><?= $c->Codigo_Curso ?></td>
                                    <td><?= $c->Codigo_Carrera ?></td>
                                    <td><?= $c->No_Ciclo ?></td>
                                    <td><?= $c->Nombre ?></td>
                                    <td><?= $c->Creditos ?></td>
                                    <td><?= $c->Horas_Semanales ?></td>
                                    <td class="text-center">
                                        <!-- <button class="btn btn-primary"><i class=" fas fa-edit"></i></button> -->
                                        <form action="{{ route('cursos.delete',$c->Codigo_Curso) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i class=" fas fa-minus-circle"></i></button>
                                        </form>

                                    </td>
                                </tr>
                            <?php endif ?>
                        <?php endforeach; ?>
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