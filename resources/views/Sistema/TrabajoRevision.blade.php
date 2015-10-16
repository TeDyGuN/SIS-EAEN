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
                        <label class="col-md-3  control-label colorazul" style="font-size: 1.2em">Cursante:</label>
                        <label class="col-md-9 control-label" style="font-size: 1.2em">{{ $trabajos[0]->uname.' '.$trabajos[0]->ulast_name  }}</label>
                    </div>
                    <div class="">
                        <label class="col-md-3  control-label colorazul" style="font-size: 1.2em">Correo Electronico Cursante:</label>
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
                <div class="panel-heading" style="text-align: center">Formulario de Revision</div><br/><br/>
                <div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Existen Problemas con tus Entradas.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('sistema/revision/guardar') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label colorazul">Tipo de Comentario</label>
                            <div class="col-md-6">
                                <select class="form-control" name="des">
                                    <option value="1">Falta Demasiado</option>
                                    <option value="2">Puede Mejorar</option>
                                    <option value="3">Aceptable</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="trabajo_id" value="{{ $trabajos[0]->id  }}"/>
                        <input type="hidden" name="usuario_id" value="{{$trabajos[0]->usuarioid}}"/>
                        <div class="form-group">
                            <label class="col-md-4 control-label colorazul">Comentario</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="texto" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary center-block">
                                Registrar Revision
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection