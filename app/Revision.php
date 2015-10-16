<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $table = 'RecoTabla';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['reco', 'status', 'trabajo', 'user', 'revisor'];
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