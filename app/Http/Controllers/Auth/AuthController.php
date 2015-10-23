<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        /*
         * $table->increments('id');
            $table->string('profesion')->nullable();
            $table->string('especialidad');
            $table->string('first_name');
            $table->string('father_last_name');
            $table->string('mother_last_name')->nullable();
            $table->string('fuerza')->nullable();
            $table->string('ci')->unique();
            $table->string('exp');
            $table->string('email')->unique();
            $table->date('birthday');
            $table->string('password', 60);
            $table->enum('type', ['Admin', 'Cursante','Docente', 'Tutor']);
            $table->string('grado')->nullable();
         */
        if($data['tipo'] == 'militar')
        {
            return User::create([
                'profesion'         => 'Militar',
                'especialidad'      => $data['esp'],
                'first_name'        => $data['first_name'],
                'father_last_name'  => $data['last_patern_name'],
                'mother_last_name'  => $data['last_mother_name'],
                'fuerza'            => $data['fuerza'],
                'ci'                => $data['ci'],
                'exp'               => $data['exp'],
                'email'             => $data['email'],
                'birthday'          => $data['bday'],
                'type'              => $data['type'],
                'grado'             => $data['grado'],
                'password'          => bcrypt($data['password'])
            ]);
        }
        if($data['tipo'] == 'civil')
        {
            return User::create([
                'profesion'         => $data['profesion'],
                'especialidad'      => $data['esp'],
                'first_name'        => $data['first_name'],
                'father_last_name'  => $data['last_patern_name'],
                'mother_last_name'  => $data['last_mother_name'],
                'fuerza'            => null,
                'ci'                => $data['ci'],
                'exp'               => $data['exp'],
                'email'             => $data['email'],
                'birthday'          => $data['bday'],
                'type'              => $data['type'],
                'grado'             => null,
                'password'          => bcrypt($data['password'])
            ]);
        }

    }
}