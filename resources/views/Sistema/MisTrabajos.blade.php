@extends('Plantilla/plantilla')
@section('titulo', 'Listado de Trabajos Registrados')
@section('headerpage')
    <section class="content-header">
        <h1 class="colorazul">
            SIS|TRAIN
            <small class="colorazul">Mis Trabajos</small>
        </h1>
    </section>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <div class="panel panel-default">
                    <div class="panel-heading">Mis Investigaciones Registradas</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Titulo</th>
                                <th>Tutor</th>
                                <th>Email Tutor</th>
                                <th>Linea de Investigacion</th>
                                <th>Fecha</th>
                                <th>Descargar</th>
                            </tr>
                            @foreach($trabajos as $t)
                                <tr>
                                    <td>
                                        <a href="{{url('sistema/trabajo/'.$t->id)}}">{{$t->titulo}}</a>

                                    </td>
                                    <td>{{$t->tutorfirst_name.' '.$t->tutorlast_name}}</td>
                                    <td>{{$t->tutor_email}}</td>
                                    <td>{{$t->Categoria}}</td>
                                    <td>{{$t->created_at}}</td>
                                    <td>
                                        <a href="{{url('sistema/storage/'.$t->nombreArchivo)}}">Descargar</a>
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
