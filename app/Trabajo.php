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
     * $table->string('titulo', 100);
            $table->string('nombreArchivo');
            $table->string('rutaArchivo');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('Cascade');
            $table->integer('tutor_id')->unsigned();
            $table->foreign('tutor_id')->references('id')->on('users');
            $table->integer('linea_id')->unsigned();
            $table->foreign('linea_id')->references('id')->on('lineaInvestigacion');
            $table->text('Descripcion')->nullable();
     */
}