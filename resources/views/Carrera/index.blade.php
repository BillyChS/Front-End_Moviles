@extends('layouts.app')

@section('content')
@extends('Components.sidebar')
<div id="mantenimientoProfesores" class="mantenimientoProfesores">
    <div class="jumbotromp"></div>
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
                                Agregar Carrera
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <form action="{{ route('carrera.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Codigo Carrera</label>
                                        <input name="Codigo_Carrera" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword" class="form-label">Nombre</label>
                                        <input name="Nombre" type="text" class="form-control" id="exampleInputPassword">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Titulo</label>
                                        <input name="Titulo" type="text" class="form-control" id="exampleInputPassword1">
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
                            <th>Codigo Carrera</th>
                            <th>Nombre</th>
                            <th>Titulo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($carreras as $carrera)
                        <tr class="text-center">
                            <td>{{ $carrera->Codigo_Carrera }}</td>
                            <td>{{ $carrera->Nombre }}</td>
                            <td>{{ $carrera->Titulo }}</td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="{{ route('carrera.edit',$carrera->Codigo_Carrera) }}"><i class=" fas fa-edit"></i></a>
                                <form class="d-inline" action="{{ route('carrera.delete',$carrera->Codigo_Carrera) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class=" fas fa-minus-circle"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@extends('Components.footer')

@endsection