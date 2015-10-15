@extends('Plantilla/plantilla')
@section('titulo', 'Panel de Control')
@section('addsidebar')
@endsection
@section('content')
<div class="box-body pad table-responsive col-md-3">
    <table class="table table-bordered text-center">
        <tr>
            <th>Curso</th>
        </tr>
        <tr>
            <td><button class="btn btn-block btn-primary btn-flat">Todos los Semestres</button></td>
        </tr>
        <tr>
            <td><button class="btn btn-block btn-primary btn-flat">Tercero</button></td>
        </tr>
        <tr>
            <td><button class="btn btn-block btn-primary btn-flat">Cuarto</button></td>
        </tr>
        <tr>
            <td><button class="btn btn-block btn-primary btn-flat">Quinto</button></td>
        </tr>
        <tr>
            <td><button class="btn btn-block btn-primary btn-flat">Sexto</button></td>
        </tr>
        <tr>
            <td><button class="btn btn-block btn-primary btn-flat">Septimo</button></td>
        </tr>
        <tr>
            <td><button class="btn btn-block btn-primary btn-flat">Octavo</button></td>
        </tr>
        <tr>
            <td><button class="btn btn-block btn-primary btn-flat">Noveno</button></td>
        </tr>
        <tr>
            <td><button class="btn btn-block btn-primary btn-flat">Decimo</button></td>
        </tr>
    </table>
</div><!-- /.box -->
@endsection
