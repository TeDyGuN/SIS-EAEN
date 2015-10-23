<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
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
            $table->date('birthday');//Y-M-D
            $table->string('password', 60);//secret
            $table->enum('type', ['Admin', 'Cursante', 'Tutor']); //10 tutores  10 cursantes
            $table->string('grado')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
