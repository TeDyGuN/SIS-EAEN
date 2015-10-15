<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $curso = factory('App\User', 'cursante', 5)->create();
        $curso = factory('App\User', 'tutor', 5)->create();
    }
}
