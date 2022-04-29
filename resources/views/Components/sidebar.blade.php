<div class="d-flex">
    <div id="sidebar-container" class="d-fixed bg-primary">
        <div class="logo">
            <h4 class="text-light font-weight-bold">Mantenimientos</h4>
        </div>

        <div class="menu">
            <a href="{{route('cursos.index')}}" id="mantenimientoCurso" class="text-decoration-none d-block text-light p-3"><i class="mr-2 lead fas fa-book"></i> Cursos</a>
            <a href="{{route('carrera.index')}}" id="mantenimientoCarrera" class="text-decoration-none d-block text-light p-3"><i class="mr-2 lead fas fa-address-book"></i> Carreras</a>
            <a href="{{route('profesor.index')}}" class="text-decoration-none d-block text-light p-3"><i class=" mr-2 lead fas fa-chalkboard-teacher"></i> Profesores</a>
            <a href="{{route('alumno.index')}}" class="text-decoration-none d-block text-light p-3"><i class="mr-2 lead fas fa-user-graduate"></i> Alumnos</a>
            <a href="{{route('matricula.index')}}" class="text-decoration-none d-block text-light p-3"><i class="fas fa-book-open"></i> Matriculas</a>
            <a href="{{route('ciclo.index')}}" class="text-decoration-none d-block text-light p-3"><i class="mr-2 lead fas fa-calendar-alt"></i> Ciclos</a>
            <a href="{{route('oferta.index')}}" class="text-decoration-none d-block text-light p-3"><i class="mr-2 lead fab fa-buffer"></i> Oferta Academica</a>
        </div>
    </div>

    <div class="contenedor w-100">
        <div id="" class="container">
            <nav class="barraNav fixed-top navbar navbar-expand-lg navbar-light bg-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="" class="d-inline">
                    <h3>Modulo de Administracion</h3>
                </div>
                <div class="offset-7 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="pl-5  navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Administracion
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>