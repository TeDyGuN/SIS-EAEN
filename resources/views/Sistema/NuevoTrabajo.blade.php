@extends('Plantilla/plantilla')
@section('titulo', 'Nuevo Trabajo')
@section('headerpage')
    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1 class="colorazul">
            SIS|TRAIN
            <small class="colorazul">Nuevo Trabajo de Investigacion</small>
        </h1>
    </section>
@endsection
@section('content')
            <!-- Small boxes (Stat box) -->
    <div class="container" ng-app="Trabajo">
        <div class="row" >
            <div class="">
                <div class="panel panel-default" id="headeremi">
                    <div class="panel-heading text-center ">Registro de Nuevo Trabajo de Investigacion</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Hay problemas con tus Entradas<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('sistema/guardar')  }}"  >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="titulo" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Titulo Trabajo</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                                    </div>
                                </div>
                                <div class="form-group" ng-controller="SearchCrtl">
                                    <label for="tutor" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Tutor</label>
                                    <div class="col-md-6">

                                        <input type="text" class="form-control" id="tutor" name="tutor" required ng-model="searchInput" ng-change="search()">
                                        <input name="idtutor"  id="idtutor" type="hidden"  value="">
                                        <div class="list-group" id="lista">
                                            <a href="#" class="list-group-item" ng-repeat="user in users" ng-click="removeTask(user);">
                                                <h4 class="list-group-item-heading" >
                                                    @{{ user.first_name + ' ' + user.father_last_name }}
                                                </h4>
                                                <p>
                                                    @{{ user.email }}
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label colorazul" style="font-size: 1.2em">Linea de Investigacion</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="type">
                                            @foreach($result as $valor)
                                                <option value="{{$valor->id}}">{{$valor->Categoria}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="equipo" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Descripcion</label>
                                    <div class="col-md-6">
                                        <textarea name="descripcion" class="form-control" rows="3" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="archivo" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Archivo</label>
                                    <div class="col-md-3">
                                        <input type="file" required name="archivo" id="archivo"/>
                                    </div>
                                    <label for="archivo" class="col-md-3 control-label colorazul">Solo Archivos: .doc .docx .pdf</label>
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-primary center-block">
                                        Registrar
                                    </button>
                                </div>
                            </form>
                        <br><br>
                        {{$success = Session::get('success')}}
                        @if ($success)
                            <div class="alert alert-success">
                                <strong>!!Felicidades!!</strong>Registraste tu Trabajo de Investigacion con Exito <br><br>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('addscripts')
    <script type="text/javascript">
        'use strict';
        var TrabajoApp = angular.module('Trabajo', []);
        TrabajoApp.controller('SearchCrtl', function($scope, $http){
            $scope.search = function() {
                $http.get('find',{
                    params: {nombre: $scope.searchInput}
                }).success(function (data){
                    $scope.users = data;
                    console.log('dddd');
                });
            };
            $scope.removeTask = function(user){
                var lista = $('#lista');
                lista.css({display: "none"});
                $('#tutor').attr('value', user.first_name +' '+user.father_last_name);
                $('#idtutor').attr('value', user.id);
                $('#tutor').attr('readonly', 'readonly');
            };

        });
        $('#tutor').click(function(){
            var lista = $('#lista');
            lista.css({display: "block"});
        });
    </script>
@endsection