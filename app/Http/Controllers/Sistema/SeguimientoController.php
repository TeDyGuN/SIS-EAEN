<?php
/**
 * Created by PhpStorm.
 * User: TedyPc
 * Date: 15/10/2015
 * Time: 17:59
 */

namespace App\Http\Controllers\Sistema;



use App\Http\Controllers\Controller;
use App\Trabajo;
use App\Revision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
class SeguimientoController extends Controller
{
    public function listaRevision()
    {
        $trabajos = Trabajo::join('users as u1', 'tutor_id', '=', 'u1.id')
            ->join('users as u2', 'user_id', '=', 'u2.id')
            ->join('lineaInvestigacion as li', 'linea_id', '=', 'li.id')
            ->select('trabajo.id','titulo', 'nombreArchivo','u2.father_last_name as flast_name', 'u2.first_name as fname',
                'u2.email as femail','trabajo.created_at','li.Categoria')
            ->where('u1.id', '=', Auth::user()->id)
            ->get();
        return view('Sistema/ListaRevision', compact('trabajos'));
    }
    public function seguimientoTutor($id)
    {
        $trabajos = Trabajo::join('users as u1', 'tutor_id', '=', 'u1.id')
            ->join('users as u2', 'user_id', '=', 'u2.id')
            ->join('lineaInvestigacion as li', 'linea_id', '=', 'li.id')
            ->select('trabajo.id','titulo','nombreArchivo', 'trabajo.Descripcion','u2.first_name as uname', 'u2.father_last_name as ulast_name',
                'u2.id as usuarioid','u2.email as uemail','li.Categoria')
            ->where('trabajo.id', '=', $id)
            ->get();
        $revision = Revision::join('users as u1', 'revisor', '=', 'u1.id')
            ->select('recotabla.id','reco', 'status', 'u1.first_name', 'u1.father_last_name', 'recotabla.created_at as fecha')
            ->where('trabajo', '=', $id)
            ->orderBy('fecha', 'DESC')
            ->get();
        return view('Sistema/TrabajoRevision', compact('trabajos', 'revision'));
    }
    public function seguimientoCursante($id)
    {
        $trabajos = Trabajo::join('users as u1', 'tutor_id', '=', 'u1.id')
            ->join('users as u2', 'user_id', '=', 'u2.id')
            ->join('lineaInvestigacion as li', 'linea_id', '=', 'li.id')
            ->select('trabajo.id','titulo','nombreArchivo', 'trabajo.Descripcion','u1.first_name as uname', 'u1.father_last_name as ulast_name',
                'u1.email as uemail','li.Categoria')
            ->where('trabajo.id', '=', $id)
            ->get();
        $revision = Revision::join('users as u1', 'revisor', '=', 'u1.id')
            ->select('recotabla.id','reco', 'status', 'u1.first_name', 'u1.father_last_name', 'recotabla.created_at as fecha')
            ->where('trabajo', '=', $id)
            ->orderBy('fecha', 'DESC')
            ->get();
        return view('Sistema/CursanteRevision', compact('trabajos', 'revision'));
    }
    public function saveRevision(Request $request)
    {
        $revision = new Revision;
        $revision->reco = $request->texto;
        $revision->status = $request->des;
        $revision->revisor = Auth::user()->id;
        $revision->trabajo = $request->trabajo_id;
        $revision->user = $request->usuario_id;
        $revision->save();
        /*$trabajos = User::select('email')
            ->where('id', '=', $request->usuario_id)
            ->get();
        Mail::raw('Revision de Documentacion', function($message) use($trabajos)
        {
            $message->from('postmaster@sandboxe9eec98fc4c74a2cbe92536ca3f40f20.mailgun.org', 'EAEN-TRABAJOS');
            $message->to($trabajos[0]->email)->subject('Revision de Trabajos');
        });*/
        return redirect('sistema/revision/tutor/'.$request->trabajo_id);
    }
}