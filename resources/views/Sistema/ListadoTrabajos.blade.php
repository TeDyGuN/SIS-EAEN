@extends('Plantilla/plantilla')
@section('titulo', 'Listado de Trabajos Registrados')
@section('headerpage')
    <section class="content-header">
        <h1 class="colorazul">
            SIS|TRAIN
            <small class="colorazul">Listado de Trabajos Registrados</small>
        </h1>
    </section>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <div class="panel panel-default">
                    <div class="panel-heading">Trabajos de Investigacion Registrados</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Titulo</th>
                                <th class="text-center">Autor</th>
                                <th class="text-center">Correo Electronico</th>
                                <th class="text-center">Tutor</th>
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Descargar</th>
                            </tr>
                            @foreach($result as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->titulo }}</td>
                                    <td>{{ $user->first_name.' '.$user->father_last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->tutor_first_name.' '.$user->tutor_last_name }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="{{url('sistema/storage/'.$user->nombreArchivo)}}">Descargar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
