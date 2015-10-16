@extends('Plantilla/plantilla')
@section('titulo', 'Perfil del Trabajo de Investigacion')
@section('headerpage')
    <section class="content-header">
        <h1 class="colorazul">
            SIS|TRAIN
            <small class="colorazul">Formulario de Revision de Trabajo</small>
        </h1>
    </section>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align: center">{{ $trabajos[0]->titulo  }}</h3>
                </div>
                <div class="panel-body">
                    <div class="">
                        <label class="col-md-3 control-label colorazul" style="font-size: 1.2em">Linea de Investigacion:</label>
                        <label class="col-md-9 control-label" style="font-size: 1.2em">{{ $trabajos[0]->Categoria  }}</label>
                    </div>
                    <div class="">
                        <label class="col-md-3  control-label colorazul" style="font-size: 1.2em">Tutor:</label>
                        <label class="col-md-9 control-label" style="font-size: 1.2em">{{ $trabajos[0]->uname.' '.$trabajos[0]->ulast_name  }}</label>
                    </div>
                    <div class="">
                        <label class="col-md-3  control-label colorazul" style="font-size: 1.2em">Correo Electronico Tutor:</label>
                        <label class="col-md-9 control-label" style="font-size: 1.2em">{{ $trabajos[0]->uemail  }}</label>
                    </div>
                    <div class="">
                        <label class="col-md-3  control-label colorazul" style="font-size: 1.2em">Descripcion:</label>
                        <label class="col-md-9 control-label" style="font-size: 1.2em">{{ $trabajos[0]->Descripcion}}</label>
                    </div>
                    <div class="">
                        <label class="col-md-3  control-label colorazul" style="font-size: 1.2em">Descargar:</label>
                        <label class="col-md-9 control-label">
                            <a href="{{url('sistema/storage/'.$trabajos[0]->nombreArchivo)}}">Descargar</a>
                        </label>
                    </div>
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align: center">Tablero de Observaciones</h3>
                </div>

                <div class="panel-body">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Nombre Revisor</th>
                                    <th>Observacion</th>
                                    <th>Estatus</th>
                                </tr>
                                @foreach($revision as $f)
                                    <tr>
                                        <td class="col-md-2">{{$f->fecha}}</td>
                                        <td class="col-md-2">{{ $f->first_name.' '.$f->father_last_name }}</td>
                                        <td class="col-md-6">{{ $f->reco }}</td>
                                        @if( $f->status === 1)

                                            <td class="col-md-2"><span class="label label-danger">Falta Mucho</span></td>
                                        @elseif( $f->status === 2)
                                            <td class="col-md-2"><span class="label label-warning">Falta</span></td>
                                        @else

                                            <td class="col-md-2"><span class="label label-success">Aceptable</span></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                        </div><!-- /.box-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection