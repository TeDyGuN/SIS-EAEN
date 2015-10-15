@extends('Plantilla/plantilla')
@section('titulo', 'Panel de Control')
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
                        <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->first_name.' '.Auth::user()->father_last_name.' '.Auth::user()->mother_last_name}}</label>
                    </div>
                    <div class="col-md-10">
                        <label class="col-md-4  col-ls-4 control-label colorazul">Carnet de Identidad:</label>
                        <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->ci.' '.Auth::user()->exp }}</label>
                    </div>
                    <div class="col-md-10">
                        <label class="col-md-4  col-ls-4 control-label colorazul">Correo Electronico:</label>
                        <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->email }}</label>
                    </div>
                    @if(Auth::user()->profesion == "Militar")
                        <div class="col-md-10">
                            <label class="col-md-4  col-ls-4 control-label colorazul">Fuerza:</label>
                            <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->fuerza }}</label>
                        </div>
                        <div class="col-md-10">
                            <label class="col-md-4  col-ls-4 control-label colorazul">Grado:</label>
                            <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->grado }}</label>
                        </div>
                    @else
                        <div class="col-md-10">
                            <label class="col-md-4  col-ls-4 control-label colorazul">Profesion:</label>
                            <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->profesion }}</label>
                        </div>
                    @endif
                    <div class="col-md-10">
                        <label class="col-md-4  col-ls-4 control-label colorazul">Especialidad:</label>
                        <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->especialidad }}</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Tablon de Anuncios</h3>
                            <div class="box-tools">
                                <div class="input-group" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-primary">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-danger">Denied</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
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
