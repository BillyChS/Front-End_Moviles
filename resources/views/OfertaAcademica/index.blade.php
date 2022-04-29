@extends('layouts.app')

@section('content')
@extends('Components.sidebar')
<div id="mantenimientoProfesores" class="mantenimientoProfesores">
    <div class="jumbotromp"></div>
    <div class="card">
        <div class="card-header">

            <div id="h3Cursos" class="my-2 d-inline">
                <h3 class="text-center py-2">Oferta Academica</h3>
            </div>
            <div class="text-center justify-center row py-2">

                <form action="{{ route('oferta.show') }}" method="POST">
                    @csrf
                    <div class="text-center justify-center row py-2">
                        <div class="col-1 pt-2">
                            <label for="exampleInputPassword" class="d-inline form-label">Carrera</label>
                        </div>
                        <div class="col-3">
                            <select name="Carrera" class="form-select" aria-label="Default select example">
                                @foreach($carreras as $carrera)
                                <option value="{{$carrera->Codigo_Carrera}}">{{$carrera->Nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-1 pt-2">
                            <label for="exampleInputPassword" class="form-label">No Ciclo</label>
                        </div>
                        <div class="col-3">
                            <select name="No_Ciclo" class="form-select" aria-label="Default select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-primary">Buscar Cursos Disponibles</button>
                        </div>
                    </div>
                </form>
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
            <div class="row">

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
                    <tbody>

                    </tbody>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>


@extends('Components.footer')

@endsection