<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
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
            $table->enum('type', ['Admin', 'Cursante', 'Tutor']);
            $table->string('grado')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
         */
        \DB::table('users')->insert(array(
            'first_name'        => 'Admin',
            'father_last_name'  => ' ',
            'mother_last_name'  => ' ',
            'ci'                => '000000',
            'especialidad'      => 'Admin',
            'exp'               => 'LP',
            'type'              => 'Admin',
            'email'             => 'admin@admin.com',
            'birthday'          => '1999-01-01',
            'password'  => \Hash::make('EAEN2015'),
        ));
    }
}
