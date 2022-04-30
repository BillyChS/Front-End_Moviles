@extends('layouts.app')

@section('content')
@extends('Components.sidebar')
<div id="mantenimientoProfesores" class="mantenimientoProfesores">
    <div class="jumbotromp"></div>
    <div class="p-2">
        <a class="btn btn-dark" href="{{route('oferta.index')}}"><i class="fas fa-arrow-left"></i> Atras</a>
    </div>
    <div class="card">
        <div class="card-header">

            <div id="h3Cursos" class="my-2 d-inline">
                <h3 class="text-center py-2">Oferta Academica</h3>
            </div>

        </div>

        <div class="card-body">
            <div class="row">

            </div>
            <div class="">
                <table id="example" class="tabla table table-hover datatable">
                    <thead class="py-3 theadCursos">
                        <tr class="text-center">
                            <th>Codigo</th>
                            <th>Codigo Carrera</th>
                            <th>No Ciclo</th>
                            <th>Nombre</th>
                            <th>Creditos</th>
                            <th>Horas Semanales</th>
                            <th>Acciones</th>
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
                                <td class="text-center">
                                    <a href="{{route('grupo.edit',$curso->Codigo_Curso)}}" class="px-3 py-2 btn btn-primary"><i class="fas fa-check-circle"></i></a>
                                </td>
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