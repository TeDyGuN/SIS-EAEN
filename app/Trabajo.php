<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $table = 'Trabajo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['titulo', 'nombreArchivo', 'rutaArchivo', 'user_id', 'tutor_id', 'linea_id', 'Descripcion'];
    /*
     * $table->increments('id');
            $table->text('reco')->nullable();
            $table->integer('status');
            $table->integer('trabajo')->unsigned();
            $table->foreign('trabajo')->references('id')->on('trabajo');
            $table->integer('user')->unsigned();
            $table->foreign('user')->references('id')->on('users');
            $table->integer('revisor')->unsigned();
            $table->foreign('revisor')->references('id')->on('users');
            $table->timestamps();
     */
}