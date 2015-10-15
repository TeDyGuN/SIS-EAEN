@extends('app')
@section('titulo', 'Inicio')@endsection
@section('descripcion', 'Pagina de la Escuela de Altos Estudios Nacionales')@endsection
@section('content')
    <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" id="nolose" role="listbox">
            <div class="item active">
                <img src="{{ asset('images/carrusel/car4.jpg') }}" alt="1">
                <div class="carousel-caption">
                    <h3>Escuela de Altos Estudios Nacionales</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/carrusel/car1.jpg') }}" alt="2">
                <div class="carousel-caption">
                    <h3>Escuela de Postgrado Militar</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/carrusel/car3.JPG') }}" alt="3">
                <div class="carousel-caption">
                    <h3>Honor y Patriotismo</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/carrusel/car5.JPG') }}" alt="4">
                <div class="carousel-caption">
                    <h3>Excelencia Profesional</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/carrusel/car6.JPG') }}" alt="5">
                <div class="carousel-caption">
                    <h3>Seminarios y Talleres</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('images/carrusel/car7.JPG') }}" alt="0">
                <div class="carousel-caption">
                    <h3>Maestrias y Doctorados</h3>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="panel panel-default disquepanel">
        <div class="panel-body" id="rowbut">
            <h4 class="text-center" style="font-weight: bold;">Bienvenido al Sitio Oficial de la </br>Escuela de Altos Estudios Nacionales</h4>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="nosepass">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center">Videoteca</h4>
                    </div>
                    <div class="panel-body aynose">
                        <div class="col-sm-4">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/paUIFdK1qW4"></iframe>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/goR8GRPlLbE"></iframe>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/Rynp56GaJaE"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center">Servicios</h4>
                    </div>
                    <div class="panel-body aynose">
                        <div class="col-sm-6">
                            <img src="{{ asset('images/unnamed.png') }}" alt="Aula Virtual" class="img-rounded center-block imgg">
                            <h4 class="text-center">Aula Virtual</h4>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ asset('images/correo.jpg') }}" alt="Correo Institucional" class="img-rounded center-block imgg">
                            <h4 class="text-center">Correo Institucional</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center">Enlaces</h4>
                    </div>
                    <div class="panel-body aynose">
                        <div class="col-sm-4">
                            <img src="{{ asset('images/enlaces/diplomado_animado.gif') }}" alt="Diplomados" class="img-rounded center-block imgg">
                            <h4 class="text-center">Diplomados</h4>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('images/enlaces/maestria.png') }}" alt="Maestrias" class="img-rounded center-block imgg">
                            <h4 class="text-center">Maestrias</h4>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('images/enlaces/maestria.png') }}" alt="Doctorados" class="img-rounded center-block imgg">
                            <h4 class="text-center">Doctorados</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection