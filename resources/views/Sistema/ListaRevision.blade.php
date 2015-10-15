@extends('Plantilla/plantilla')
@section('titulo', 'Listado de Trabajos a Revisar')
@section('headerpage')
    <section class="content-header">
        <h1 class="colorazul">
            SIS|TRAIN
            <small class="colorazul">Trabajos a Revisar</small>
        </h1>
    </section>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <div class="panel panel-default">
                    <div class="panel-heading">Trabajos de Investigacion para Revisar</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Titulo</th>
                                <th>Autor</th>
                                <th>Email Autor</th>
                                <th>Linea de Investigacion</th>
                                <th>Fecha</th>
                                <th>Descargar</th>
                            </tr>
                            @foreach($trabajos as $t)
                                <tr>
                                    <td>
                                        <a href="{{url('sistema/trabajo/'.$t->id)}}">{{$t->titulo}}</a>

                                    </td>
                                    <td>{{$t->fname.' '.$t->flast_name}}</td>
                                    <td>{{$t->femail}}</td>
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
