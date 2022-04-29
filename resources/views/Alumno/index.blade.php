@extends('layouts.app')

@section('content')
@extends('Components.sidebar')
<div id="mantenimientoProfesores" class="mantenimientoProfesores">
    <div class="jumbotromp"></div>
    <div class="card">
        <div class="card-header">
            <div id="h3Cursos" class="my-2 d-inline">
                <h3 class="text-center py-2">Mantenimiento de Alumnos</h3>
            </div>
            <div class="row input-group">
                <form action="{{ route('alumno.show') }}" method="POST">
                    @csrf
                    <div class="row input-group">
                        <div class="col-4 d-inline">
                            <select name="Carrera" class="form-select" aria-label="Default select example">
                                @foreach($carreras as $carrera)
                                <option value="{{ $carrera->Nombre }}">{{$carrera->Nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-inline col-5">
                            <button class="btn btn-primary">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="">
                <table id="example" class="tabla table table-hover ">
                    <thead class="py-3 theadCursos">
                        <tr class="text-center">
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Carrera</th>
                            <th>Acciones</th>
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
                                <th class="text-decoration-none">
                                    <a href="{{route('carrera.show',$alumno->Carrera->Codigo_Carrera)}}"><?= $alumno->Carrera->Nombre ?></a>
                                </th>
                                <th class="px-3 text-center">
                                    <a href="{{ route('alumno.historial',$alumno->Cedula_Alumno)}}" class="btn btn-primary">Historial</a>
                                </th>
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