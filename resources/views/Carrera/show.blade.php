@extends('layouts.app')

@section('content')
@extends('Components.sidebar')
<div id="mantenimientoProfesores" class="mantenimientoProfesores">
    <div class="jumbotromp"></div>
    <div class="card">
        <div class="p-2">
            <a class="btn btn-dark" href="{{route('alumno.index')}}"><i class="fas fa-arrow-left"></i> Atras</a>
        </div>
        <div class="card-header">
            <div id="h3Cursos" class="my-2 d-inline">
                <h3 class="text-center py-2">Carrera</h3>
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
                <table id="example" class="tabla table table-hover datatable">
                    <thead class="py-3 theadCursos">
                        <tr class="text-center">
                            <th>Codigo Carrera</th>
                            <th>Nombre</th>
                            <th>Titulo</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="text-center">
                            <td>{{ $carreras->Codigo_Carrera }}</td>
                            <td>{{ $carreras->Nombre }}</td>
                            <td>{{ $carreras->Titulo }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@extends('Components.footer')

@endsection