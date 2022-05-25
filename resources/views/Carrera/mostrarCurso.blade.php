@extends('layouts.app')

@section('content')
@extends('Components.sidebar')
<div id="mantenimientoProfesores" class="mantenimientoProfesores">
    <div class="jumbotromp"></div>
    <div class="p-2">
        <a class="btn btn-dark" href="{{ route('carrera.edit',$curso->Codigo_Carrera) }}"><i class="fas fa-arrow-left"></i> Atras</a>
    </div>
    <div class="card">
        <div class="card-header">
            <div id="h3Cursos" class="my-2 d-inline">
                <h3 class="text-center py-2">Curso</h3>
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
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="{{ route('cursos.edit') }}" method="POST">
                                    @csrf
                                    <div class="row">

                                        <div class="col-4 mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Codigo de Curso</label>
                                            <select name="Codigo_Curso" class="form-select" aria-label="Default select example">
                                                <option value="{{$curso->Codigo_Curso}}" selected><?php echo $curso->Codigo_Curso ?> </option>
                                            </select>
                                        </div>
                                        <div class="col-4 mb-3">
                                            <label for="exampleInputPassword" class="form-label">Nombre de la Carrera</label>
                                            <select name="Codigo_Carrera" class="form-select" aria-label="Default select example">
                                                @foreach($carreras as $carrera)
                                                <option value="{{$carrera->Codigo_Carrera}}" selected><?php echo $carrera->Nombre ?> </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label for="exampleInputPassword" class="form-label">No Ciclo</label>
                                            <select name="No_Ciclo" class="form-select" aria-label="Default select example">
                                                <option value="1" selected>1 </option>
                                                <option value="2" selected>2 </option>
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
                                    <button class="btn btn-primary">Editar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
            </div>
        </div>
    </div>
</div>


@extends('Components.footer')

@endsection