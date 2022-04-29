@extends('layouts.app')

@section('content')
@extends('Components.sidebar')
<div id="mantenimientoProfesores" class="mantenimientoProfesores">
    <div class="jumbotromp"></div>
    <div class="p-2">
        <a class="btn btn-dark" href="{{route('alumno.index')}}"><i class="fas fa-arrow-left"></i> Atras</a>
    </div>
    <div class="card">
        <div class="card-header">
            <div id="h3Cursos" class="my-2 d-inline">
                <h3 class="text-center py-2">Alumnos en la Carrera de </h3>
            </div>
        </div>
        <div class="card-body">
            <div class="">
                <table id="example" class="tabla table table-hover datatable">
                    <thead class="py-3 theadCursos">
                        <tr class="text-center">
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Carrera</th>
                        </tr>
                    </thead>
                    @if($alumnos != 0)
                    <tbody>
                        <?php foreach ($alumnos as $alumno) : ?>
                            <tr class="text-center">
                                <td><?= $alumno->Cedula_Alumno ?></td>
                                <td><?= $alumno->Nombre ?></td>
                                <td><?= $alumno->Telefono ?></td>
                                <td><?= $alumno->Email ?></td>
                                <td><?= $alumno->Fecha_Nacimiento ?></td>
                                <td ">
                                    <?= $alumno->Carrera ?>
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