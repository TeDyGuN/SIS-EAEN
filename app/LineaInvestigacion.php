<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaInvestigacion extends Model
{
    protected $table = 'LineaInvestigacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Categoria', 'Descripcion'];
}