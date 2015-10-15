<?php namespace App\Http\Controllers\Cursante;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Asignaturas;
use Illuminate\Http\Request;
use Auth;

class CursanteController extends Controller{
    public function index()
    {
        return view('Cursante/index');
    }
}