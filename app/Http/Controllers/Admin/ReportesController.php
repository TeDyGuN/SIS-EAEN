<?php
/**
 * Created by PhpStorm.
 * User: TedyPc
 * Date: 17/10/2015
 * Time: 19:04
 */

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\LineaInvestigacion;
use App\Trabajo;
use Barryvdh\DomPDF;
use app\User;
use yajra\Datatables\Datatables;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;


class ReportesController extends Controller
{
    public function usuarios($op)
    {
        if($op == "1")
        {
            $result = User::select('id','first_name', 'father_last_name', 'mother_last_name' ,'type', 'email')
                ->orderBy('id', 'asc')
                ->get();
        }
        else
        {
            $result = User::select('id','first_name', 'father_last_name', 'mother_last_name','type','email')
                ->orderBy('father_last_name', 'asc')
                ->get();
        }
        $view =  \View::make('Admin.Reportes.usuarios', compact('result'))->render();
        $pdf = \App::make('dompdf.wrapper'); //Note: in 0.6.x this will be 'dompdf.wrapper'
        $pdf->loadHTML($view)->setPaper('letter')->setOrientation('portrait');
        $carbon = new Carbon;
        return $pdf->download('Reporte_Usuarios_'.$carbon->now(new \DateTimeZone('America/La_Paz'))->toDateTimeString().'.pdf');
    }
    public function saveUsuario(Request $request)
    {
        $st = '';
        dd($request);
        foreach($request as $r){
            $st->
        }
        $iristeamo['1'] = 'email';
        $iristeamo['3'] = 'type';
        return User::select('id', 'first_name', $iristeamo)->get();
    }
    public function trabajos($op)
    {
        ob_start();
        if($op == "1")
        {
            $result = \DB::table('trabajo')
                ->join('users', 'users.id', '=', 'user_id')
//            ->join('lineaInvestigacion', 'lineaInvestigacion.id', '=', 'linea_id')
                ->select('trabajo.id', 'trabajo.titulo', 'trabajo.Descripcion', 'users.first_name', 'users.last_name', 'users.email')
                ->orderBy('trabajo.id', 'asc')
                ->get();
        }
        else
        {
            $result = \DB::table('trabajo')
                ->join('users', 'users.id', '=', 'user_id')
//            ->join('lineaInvestigacion', 'lineaInvestigacion.id', '=', 'linea_id')
                ->select('trabajo.id', 'trabajo.titulo', 'trabajo.rutaArchivo', 'trabajo.Descripcion', 'users.first_name', 'users.last_name', 'users.email')
                ->orderBy('trabajo.titulo', 'asc')
                ->get();
        }
        extract($result);
        include('../resources/views/Reportes/trabajos.blade.php');
        $html = ob_get_clean();
        $pdf = App::make('dompdf.wrapper'); //Note: in 0.6.x this will be 'dompdf.wrapper'
        $pdf->loadHTML($html)->setPaper('letter')->setOrientation('landscape');
        return $pdf->stream('reporte.pdf');

    }
    public function lineas($op)
    {
        ob_start();
        if($op == "1")
        {
            $result = \DB::table('lineaInvestigacion')
                ->select('id','Categoria', 'Descripcion')
                ->orderBy('id', 'asc')
                ->get();
        }
        else
        {
            $result = \DB::table('lineaInvestigacion')
                ->select('id','Categoria', 'Descripcion')
                ->orderBy('Categoria', 'asc')
                ->get();
        }
        extract($result);
        include('../resources/views/Reportes/lineas.blade.php');
        $html = ob_get_clean();
        $pdf = App::make('dompdf.wrapper'); //Note: in 0.6.x this will be 'dompdf.wrapper'
        $pdf->loadHTML($html)->setPaper('letter')->setOrientation('portrait');
        return $pdf->stream('reporte.pdf');
    }
    public function index()
    {
        $usuarios = User::select('*')
                    ->orderBy('father_last_name')
                    ->get();
        $trabajos = Trabajo::join('users as u1', 'u1.id', '=', 'user_id')
                    ->join('users as t' , 't.id', '=', 'tutor_id')
                    ->join('LineaInvestigacion as l', 'l.id', '=', 'linea_id')
                    ->select('trabajo.id','titulo', 'u1.first_name as uname', 'u1.father_last_name as uf', 'u1.mother_last_name as um', 't.first_name as tname',
                        't.father_last_name as tf', 't.mother_last_name as tm', 'l.Categoria as cat', 'trabajo.Descripcion', 'trabajo.created_at as fecha')
                    ->get();
        $lineas = LineaInvestigacion::all();
        return view('Admin/Reportes/index', compact('usuarios', 'trabajos', 'lineas'));
    }
    public function buscar()
    {
        $data = '';
        $var = Input::get('tipo');
        $name = Input::get('nombre');
        if($var == '1')
        {
            $data = User::where('father_last_name', 'LIKE', $name . '%')->orderBy('father_last_name')->get();
        }
        if($var == '2')
        {
            $data = User::where('profesion', 'LIKE', $name . '%')->get();
        }
        if($var == '3')
        {
            $data = User::where('especialidad', 'LIKE', $name . '%')->get();
        }
        if($var == '4')
        {
            $data = User::where('fuerza', 'LIKE', $name . '%')->get();
        }
        if($var == '5')
        {
            $data = User::where('grado', 'LIKE', $name . '%')->get();
        }
        if($var == '6')
        {
            $data = User::where('ci', 'LIKE', $name . '%')->get();
        }
        if($var == '7')
        {
            $data = User::where('email', 'LIKE', $name . '%')->get();
        }
        if($var == '8')
        {
            $data = User::where('birthday', 'LIKE', $name . '%')->get();
        }
        if($var == '9')
        {
            $data = User::where('type', 'LIKE', $name . '%')->orderBy('father_last_name')->get();
        }
        return Response::json($data);
    }
}