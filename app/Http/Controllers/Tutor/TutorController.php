<?php namespace App\Http\Controllers\Tutor;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TutorController extends Controller{
    public function index()
    {
        return view('Tutor/index');
    }
}