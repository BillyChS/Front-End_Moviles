@extends('layouts.app')

@section('content')
@extends('Components.sidebar')
<div id="mantenimientoProfesores" class="mantenimientoProfesores">
    <div class="jumbotromp"></div>
    <div class="card">
        <div class="card-header">

            <div id="h3Cursos" class="my-2 d-inline">
                <h3 class="text-center py-2">Agregar Grupo</h3>
            </div>

            <div class="accordion-body">
                <form action="{{ route('grupo.create') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-4 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Numero de Grupo</label>
                            <select name="Numero_Grupo" class="form-select" aria-label="Default select example">
                                @foreach($grupo as $g)
                                <option value="{{$g->Numero_Grupo}}" selected><?php echo $g->Numero_Grupo ?> </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="exampleInputPassword" class="form-label">No Ciclo</label>
                            <select name="No_Cic" class="form-select" aria-label="Default select example">
                                <option value="1" selected>1</option>
                                <option value="2" selected>2</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="exampleInputPassword" class="form-label">Nombre del Curso</label>
                            <select name="Codigo_Curso" class="form-select" aria-label="Default select example">
                                @foreach($cursos as $curso)
                                <option value="{{$curso->Codigo_Curso}}" selected>{{$curso->Nombre}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Cedula_Profesor</label>
                            <select name="Cedula_Profesor" class="form-select" aria-label="Default select example">
                                @foreach($profesores as $profesor)
                                <option value="{{$profesor->Cedula_Profesor}}" selected>{{$profesor->Cedula_Profesor}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="exampleInputPassword1" class="form-label">Horario</label>
                            <input name="Creditos" type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>
                    <button class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>

        <div class="card-body">
            <div class="row">

            </div>
            <div class="">
                <table id="example" class="tabla table table-hover datatable">
                    <thead class="py-3 theadCursos">
                        <tr class="text-center">
                            <th>Numero Grupo</th>
                            <th>No Ciclo</th>
                            <th>Codigo_Curso</th>
                            <th>Cedula Profesor</th>
                            <th>Horario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    @if($grupos != 0)
                    <tbody>
                        <?php foreach ($grupo as $grupo) : ?>
                            @if($grupo->Codigo_Curso == $Codigo_Curso)
                            <tr class="text-center">
                                <td><?= $grupo->Numero_Grupo ?></td>
                                <td><?= $grupo->No_Ciclo ?></td>
                                <td><?= $grupo->Codigo_Curso ?></td>
                                <td><?= $grupo->Cedula_Profesor ?></td>
                                <td><?= $grupo->Horario ?></td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('grupo.edit',$grupo->Numero_Grupo) }}"><i class=" fas fa-edit"></i></a>
                                </td>
                            </tr>
                            @endif
                        <?php endforeach; ?>
                    </tbody>
                    @else
                    <tbody>

                    </tbody>
                    @endif

                </table>
            </div>
        </div>
    </div>
</div>


@extends('Components.footer')

@endsection