<?php

/**
 * Created by PhpStorm.
 * User: TedyPc
 * Date: 14/10/2015
 * Time: 17:55
 */
use Illuminate\Database\Seeder;
class LineaInvestigacionTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('LineaInvestigacion')->insert([
            ['Categoria' => 'Seguridad Informatica'],
            ['Categoria' => 'Desarrollo de Software'],
            ['Categoria' => 'Sistemas Expertos'],
            ['Categoria' => 'Sistemas Operativos'],
            ['Categoria' => 'Modelado de Sistemas'],
            ['Categoria' => 'Robotica'],
            ['Categoria' => 'Inteligencia Artificial'],
            ['Categoria' => 'Redes de Comunicacion'],
            ['Categoria' => 'Otros']
        ]);

    }
}