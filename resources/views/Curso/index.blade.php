@extends('layouts.app')

@section('content')
@extends('Components.sidebar')
<div id="mantenimientoProfesores" class="mantenimientoProfesores">
    <div class="jumbotromp"></div>
    <div class="card">
        <div class="card-header">
            <div id="h3Cursos" class="my-2 d-inline">
                <h3 class="text-center py-2">Cursos</h3>
            </div>
            <form action="{{ route('cursos.show') }}" method="POST">
                @csrf
                <div class="row input-group">
                    <div class="col-4 d-inline">
                        <select name="Carrera" class="form-select" aria-label="Default select example">
                            @foreach($carreras as $carrera)
                            <option value="{{$carrera->Codigo_Carrera}}">{{$carrera->Nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-inline col-5">
                        <button class="btn btn-primary">Buscar</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="card-body">
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
                        </tr>
                    </thead>
                    @if($cursos != 0)
                    <tbody>
                        <?php foreach ($cursos as $curso) : ?>
                            <tr class="text-center">
                                <td><?= $curso->Codigo_Curso ?></td>
                                <td><?= $curso->Codigo_Carrera ?></td>
                                <td><?= $curso->No_Ciclo ?></td>
                                <td><?= $curso->Nombre ?></td>
                                <td><?= $curso->Creditos ?></td>
                                <td><?= $curso->Horas_Semanales ?></td>
                            </tr>
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