@extends('Plantilla/plantilla')
@section('titulo', 'Panel de Control')
@section('addsidebar')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" style="text-align: center">{{ Auth::user()->type }}</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-2 hidden-xs">
                    <img src="{{ asset("/dist/img/user2-160x160.png") }}" alt="Foto" class="img-thumbnail img-responsive">
                </div>
                <div class="col-md-10">
                    <div class="col-md-10">
                        <label class="col-md-4 col-ls-4 control-label colorazul">Nombre y Apellidos:</label>
                        <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->first_name.' '.Auth::user()->father_last_name  }}</label>
                    </div>
                    <div class="col-md-10">
                        <label class="col-md-4  col-ls-4 control-label colorazul">Carnet de Identidad:</label>
                        <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->ci }}</label>
                    </div>
                    <div class="col-md-10">
                        <label class="col-md-4  col-ls-4 control-label colorazul">Correo Electronico:</label>
                        <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->email }}</label>
                    </div>
                </div>
            </div>
            <div class="panel-heading">
                <h3 class="panel-title" style="text-align: center">Asignaturas de Curso</h3>
            </div>

            <div class="panel-body">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>Materia</th>
                                    <th>Docente</th>
                                </tr>

                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
