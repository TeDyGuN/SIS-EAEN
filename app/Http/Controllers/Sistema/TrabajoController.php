<?php
/**
 * Created by PhpStorm.
 * User: TedyPc
 * Date: 14/10/2015
 * Time: 14:25
 */

namespace App\Http\Controllers\Sistema;

use App\Http\Controllers\Controller;
use App\Event;
use App\LineaInvestigacion;
use App\User;
use App\Trabajo;
use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Validator;


class TrabajoController extends Controller
{
    public function nuevotrabajo()
    {
        $result = LineaInvestigacion::select('id','Categoria')->get();
        return view('Sistema/NuevoTrabajo', compact('result'));
    }
    public function buscar()
    {
        $name = Input::get('nombre');
        $usuarios = User::where('father_last_name', 'LIKE', '%' . $name . '%')->take(3)->get();
        return Response::json($usuarios);
    }
    public function save(Request $request)
    {

        $titulo = $request->titulo;
        $idtutor = $request->idtutor;
        $idrevisor = $request->idrevisor;
        $idlinea = $request->type;
        $descripcion = $request->descripcion;
        //obtenemos el campo file definido en el formulario
        $file = $request->file('archivo');
        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
        $url = storage_path('app/').$nombre;
        $messages = [
            'mimes' => 'Solo se permiten Archivos .pdf, .doc, .docx.',
        ];
        $validator = Validator::make(
            [
                'titulo' => $titulo,
                'file' => $file,
                'nombre' => $nombre
            ],
            [
                'titulo' => 'required|max:255',
                'file' => 'mimes:doc,docx,pdf'
            ],
            $messages);
        $message = 'f';
        if ($validator->fails())
        {
            return redirect('sistema/nuevotrabajo')->withErrors($validator);
        }
        $carbon = new Carbon;
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));
        $nuevo_Trabajo = new Trabajo;
        $nuevo_Trabajo->titulo        = $titulo;
        $nuevo_Trabajo->nombreArchivo = $nombre;
        $nuevo_Trabajo->rutaArchivo   = $url;
        $nuevo_Trabajo->user_id       = Auth::user()->id;
        $nuevo_Trabajo->tutor_id      = $idtutor;
        $nuevo_Trabajo->linea_id      =  $idlinea;
        $nuevo_Trabajo->Descripcion   = $descripcion;
        $nuevo_Trabajo->fecha         = $carbon->now(new \DateTimeZone('America/La_Paz'));
        $nuevo_Trabajo->save();
        return redirect('sistema/nuevotrabajo')->with(['success' => ' ']);
    }
    public function listadoTrabajos()
    {

        $result = Trabajo::join('users', 'users.id', '=', 'user_id')
            ->join('users as u2', 'tutor_id', '=', 'u2.id')
//            ->join('lineaInvestigacion', 'lineaInvestigacion.id', '=', 'linea_id')
            ->select('trabajo.id', 'trabajo.titulo', 'trabajo.nombreArchivo', 'trabajo.created_at', 'users.first_name', 'users.father_last_name', 'users.email',
                    'u2.first_name as tutor_first_name', 'u2.father_last_name as tutor_last_name')
            ->get();
        return view('Sistema/ListadoTrabajos', compact('result'));
    }
    public function misTrabajos()
    {
        $trabajos = Trabajo::join('users as u1', 'tutor_id', '=', 'u1.id')
            ->join('lineaInvestigacion as li', 'linea_id', '=', 'li.id')
            ->select('trabajo.id','titulo', 'nombreArchivo','u1.father_last_name as tutorlast_name', 'u1.first_name as tutorfirst_name',
                    'u1.email as tutor_email', 'li.Categoria', 'trabajo.created_at')
            ->where('user_id', '=', Auth::user()->id)
            ->get();
        return view('Sistema/MisTrabajos',compact('trabajos'));
    }
}