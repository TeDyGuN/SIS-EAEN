@extends('Plantilla/plantilla')
@section('titulo', 'Listado de Trabajos a Revisar')
@section('headerpage')
    <section class="content-header"  xmlns="http://www.w3.org/1999/html">
        <h1 class="colorazul">
            SIS|TRAIN
            <small class="colorazul">Reportes</small>
        </h1>
    </section>
@endsection
@section('content')
    <div class="container-fluid" ng-app="Usuarios">
        <div class="row">
            <div class="table-responsive">
                <div class="panel panel-default">
                    <div class="panel-heading">Generacion de Reportes</div>
                    <div class="panel-body">
                        <!-- Tab panes -->
                        <div ng-controller="SearchCrtl">
                            <div>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" name="profesion" value="1" checked> Profesion
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" name="especialidad" value="1" checked> Especialidad
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" name="fuerza" value="1" checked> Fuerza
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox4" name="grado" value="1" checked> Grado
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox5" name="ci" value="1" checked> CI
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox6" name="email" value="1" checked> Email
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox7" name="date" value="1" checked> Fecha de Nacimiento
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox8" name="type" value="1" checked> Tipo de Usuario
                                </label>
                            </div>
                            <div class="form-group" style="margin-top: 20px">
                                <div class="col-md-2">
                                    <select class="form-control" ng-model="searchSelect">
                                        <option selected="selected" value="1">Apellidos</option>
                                        <option value="2">Profesion</option>
                                        <option value="3">Especialidad</option>
                                        <option value="4">Fuerza</option>
                                        <option value="5">Grado</option>
                                        <option value="6">CI</option>
                                        <option value="7">Email</option>
                                        <option value="8">Fecha de Nacimiento</option>
                                        <option value="9">Tipo de Usuario</option>
                                    </select>
                                </div>
                                <div class="input-group col-md-10">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </div>
                                    <div class="">
                                        <input type="text" class="form-control" id="buscar_id" placeholder="Buscar" ng-model="searchInput" ng-change="search()">
                                    </div>
                                </div>
                            </div>
                            <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('sistema/guardar')  }}"  >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="">
                                    <button type="submit" class="btn btn-primary center-block">
                                        Generar Reporte
                                    </button>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th id="nombres">Nombres</th>
                                        <th id="apellido">Apellidos</th>
                                        <th id="prof">Profesion</th>
                                        <th id="esp">Especialidad</th>
                                        <th id="fuerza">Fuerza</th>
                                        <th id="grado">Grado</th>
                                        <th id="ci">CI</th>
                                        <th id="email">Email</th>
                                        <th id="date">Fecha de Nacimiento</th>
                                        <th id="type">Tipo de Usuario</th>
                                    </tr>
                                    <tr ng-repeat="u in users">

                                        <td>@{{ u.first_name }}</td>
                                        <td>@{{ u.father_last_name + ' ' + u.mother_last_name }}</td>
                                        <td>@{{ u.profesion }}</td>
                                        <td>@{{ u.especialidad }}</td>
                                        <td>@{{ u.fuerza }}</td>
                                        <td>@{{ u.grado }}</td>
                                        <td>@{{ u.ci + ' ' + u.exp }}</td>
                                        <td>@{{ u.email }}</td>
                                        <td>@{{ u.birthday }}</td>
                                        <td>@{{ u.type }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('addscripts')
    <script type="text/javascript">
        'use strict';
        var UsuariosApp = angular.module('Usuarios', []);
        UsuariosApp.controller('SearchCrtl', function($scope, $http){
            $http.get('find',{
                params: {nombre: $scope.searchInput,
                        tipo: 1}
            }).success(function (data){
                $scope.users = data;
            });
            $scope.search = function() {
                $http.get('find',{
                    params: {nombre: $scope.searchInput,
                            tipo: $scope.searchSelect}
                }).success(function (data){
                    $scope.users = data;
                });
            };
        });
        $('#inlineCheckbox1').change(function(){
            if(!$('#inlineCheckbox1').attr('checked'))
            {
                $('th:nth-child(3)').hide();
                $('td:nth-child(3)').hide();
            }
            else
            {
                $('th:nth-child(3)').show();
                $('td:nth-child(3)').show();
            }
        });
        $('#inlineCheckbox2').change(function(){
            if(!$('#inlineCheckbox2').attr('checked'))
            {
                $('th:nth-child(4)').hide();
                $('td:nth-child(4)').hide();
            }
            else
            {
                $('th:nth-child(4)').show();
                $('td:nth-child(4)').show();
            }
        });
        $('#inlineCheckbox3').change(function(){
            if(!$('#inlineCheckbox3').attr('checked'))
            {
                $('th:nth-child(5)').hide();
                $('td:nth-child(5)').hide();
            }
            else
            {
                $('th:nth-child(5)').show();
                $('td:nth-child(5)').show();
            }
        });
        $('#inlineCheckbox4').change(function(){
            if(!$('#inlineCheckbox4').attr('checked'))
            {
                $('th:nth-child(6)').hide();
                $('td:nth-child(6)').hide();
            }
            else
            {
                $('th:nth-child(6)').show();
                $('td:nth-child(6)').show();
            }
        });
        $('#inlineCheckbox5').change(function(){
            if(!$('#inlineCheckbox5').attr('checked'))
            {
                $('th:nth-child(7)').hide();
                $('td:nth-child(7)').hide();
            }
            else
            {
                $('th:nth-child(7)').show();
                $('td:nth-child(7)').show();
            }
        });
        $('#inlineCheckbox6').change(function(){
            if(!$('#inlineCheckbox6').attr('checked'))
            {
                $('th:nth-child(8)').hide();
                $('td:nth-child(8)').hide();
            }
            else
            {
                $('th:nth-child(8)').show();
                $('td:nth-child(8)').show();
            }
        });
        $('#inlineCheckbox7').change(function(){
            if(!$('#inlineCheckbox7').attr('checked'))
            {
                $('th:nth-child(9)').hide();
                $('td:nth-child(9)').hide();
            }
            else
            {
                $('th:nth-child(9)').show();
                $('td:nth-child(9)').show();
            }
        });
        $('#inlineCheckbox8').change(function(){
            if(!$('#inlineCheckbox8').attr('checked'))
            {
                $('th:nth-child(10)').hide();
                $('td:nth-child(10)').hide();
            }
            else
            {
                $('th:nth-child(10)').show();
                $('td:nth-child(10)').show();
            }
        });
    </script>
@endsection