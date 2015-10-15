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
    public function seguimiento($id)
    {
        Trabajo::join('users as u1', 'tutor_id', '=', 'u1.id')
            ->join('users as u2', 'revisor_id', '=', 'u2.id')
            ->join('lineaInvestigacion as li', 'linea_id', '=', 'li.id')
            ->select('titulo', 'rutaArchivo', 'trabajo.Descripcion', 'u1.last_name as tutorlast_name', 'u1.first_name as tutorfirst_name',
                'u1.email as tutoremail','u2.first_name as revfirst_name', 'u2.last_name as revlast_name',
                'u2.email as revemail','li.Categoria')
            ->where('trabajo.id', '=', $id)
            ->get();
        $revision = \DB::table('recotabla')
            ->join('users as u1', 'revisor', '=', 'u1.id')
            ->select('recotabla.id','reco', 'status', 'u1.first_name', 'u1.last_name')
            ->where('trabajo', '=', $id)
            ->get();
        return view('Sistema/Trabajo', compact('trabajos', 'revision'));
    }
/*    public function revision_seguimiento($id)
    {
        $trabajos = \DB::table('trabajo')
            ->join('users as u1', 'tutor_id', '=', 'u1.id')
            ->join('users as u2', 'revisor_id', '=', 'u2.id')
            ->join('users as u3', 'user_id', '=', 'u3.id')
            ->join('lineaInvestigacion as li', 'linea_id', '=', 'li.id')
            ->select('trabajo.id', 'u3.id as usuarioid','titulo', 'rutaArchivo', 'trabajo.Descripcion', 'u1.last_name as tutorlast_name', 'u1.first_name as tutorfirst_name',
                'u1.email as tutoremail','u2.first_name as revfirst_name', 'u2.last_name as revlast_name',
                'u2.email as revemail','li.Categoria')
            ->where('trabajo.id', '=', $id)
            ->get();
        return view('pages/trabajorevision', compact('eventos', 'datos', 'trabajos'));
    }
    public function saveRevision(Request $request)
    {

        \DB::insert('insert into recotabla (reco, status, revisor, trabajo, user)
                          values (?, ?, ?, ?, ?)', [$request->texto, $request->des, Auth::user()->id, $request->trabajo_id, $request->usuario_id]);
        $trabajos = \DB::table('users')
            ->select('email')
            ->where('id', '=', $request->usuario_id)
            ->get();
        Mail::raw('Revision de Documentacion', function($message) use($trabajos)
        {
            $message->from('postmaster@sandboxe9eec98fc4c74a2cbe92536ca3f40f20.mailgun.org', 'EAEN-TRABAJOS');
            $message->to($trabajos[0]->email)->subject('Revision de Trabajos');
        });
        return redirect('sistema/revision');
    }
*/
}