<!DOCTYPE html>
<html lang="ES">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('titulo') </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/favicon.ico') }}"/>
    <meta name="description" content= @yield('descripcion')/>
    <link href="{{ asset('/Bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the pages via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default headeremi">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <figure>
                    <img src="{{ asset('/images/escudo2.png') }}" alt="">
                </figure>
            </a>
        </div>
        <div class="collapse navbar-collapse ">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sobre EAEN <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Misión, Visión y Valozres</a></li>
                        <li><a href="#">Director</a></li>
                        <li><a href="#">Reseña Historica</a></li>
                        <li><a href="#">Mapa EAEN</a></li>
                        <li><a href="#">Himno</a></li>
                    </ul>
                </li>
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academico <span class="caret"></span></a>
                    <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-sm-3"><a href="#"></a>
                            <div class="list-group">
                                <h4 href="#" class="list-group-item-active center-block">Cursos</h4>
                                <a href="#" class="list-group-item">Informacion de Cursos</a>
                            </div>
                        </li>
                        <li class="col-sm-3"><a href="#"></a>
                            <div class="list-group">
                                <h4 href="#" class="list-group-item-active center-block">Diplomados</h4>
                                <a href="#" class="list-group-item">Diplomados II-2015</a>
                                <a href="#" class="list-group-item">Formulario de Inscripcion</a>
                                <a href="#" class="list-group-item">Tutoriales</a>
                            </div>
                        </li>
                        <li class="col-sm-3"><a href="#"></a>
                            <div class="list-group">
                                <h4 href="#" class="list-group-item-active center-block">Maestrias</h4>
                                <a href="#" class="list-group-item">Requisitos para optar a Maestria</a>
                                <a href="#" class="list-group-item">Informacion de Maestria</a>
                                <a href="#" class="list-group-item">Perfil de Ingreso y Egreso</a>
                                <a href="#" class="list-group-item">Estructura Curricular</a>
                                <a href="#" class="list-group-item">Formulario de Datos</a>
                            </div>
                        </li>
                        <li class="col-sm-3"><a href="#"></a>
                            <div class="list-group">
                                <h4 href="#" class="list-group-item-active center-block">Doctorados</h4>
                                <a href="#" class="list-group-item">Requisitos para optar a Doctorado</a>
                                <a href="#" class="list-group-item">Informacion de Doctorado</a>
                                <a href="#" class="list-group-item">Perfil de Ingreso y Egreso</a>
                                <a href="#" class="list-group-item">Estructura Curricular</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Unidades Academicas<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Cochabamba</a></li>
                        <li><a href="#">Santa cruz</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CJFFA<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Cochambamba</a></li>
                        <li><a href="#">Santa cruz</a></li>
                    </ul>
                </li>
                <li><a href="" class="">Contacto</a></li>

            </ul>
            @if(Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#login" class="glyphicon glyphicon-user">Ingresar</a></li>
                </ul>
            @endif
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Iniciar Sesion</h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Hay Problemas con tus datos de entrada.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <script type="text/javascript">
                            jQuery(window).load(function() {

                                $('#login').modal('show');
                            });
                        </script>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Correo Electronico</label>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Contraseña</label>
                            <div class="col-md-6">
                                <input type="password" required="" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Ingresar al Sistema</button>

                                <a class="btn btn-link" href="{{ url('/password/email') }}">Olvido su Contreseña?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')
        <!-- Scripts -->
<script src="{{ asset('/Bootstrap/js/bootstrap.min.js') }}"></script>
<script>
    var x = document.getElementById("botonreg").value;
    $('#botonreg').click(function(){
        //console.log('232');

        $('#profesion').hide();
        $('#profesion').modal('toggle');
    });
    $('#botonreg1').click(function(){
        //console.log('232');

        $('#profesion').hide();
        $('#profesion').modal('toggle');
    });
</script>
</body>
<footer>
    Ted Carrasco Carrasco
</footer>
</html>
