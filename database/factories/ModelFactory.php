<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
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
$factory->defineAs(App\User::class, 'cursante',function (Faker\Generator $faker) {
    return [
        'profesion'         => 'Militar',
        'especialidad'      => 'DIM',
        'first_name'        => $faker->firstName,
        'father_last_name'  => $faker->lastName,
        'mother_last_name'  => $faker->lastName,
        'ci'                => $faker->numberBetween(100000, 500000),
        'exp'               => 'LP',
        'email'             => $faker->unique()->email,
        'birthday'          => $faker->date('Y-m-d'),
        'password'          => \Hash::make('secret'),
        'type'              => 'Cursante',
        'remember_token' => str_random(10),
    ];
});
$factory->defineAs(App\User::class, 'tutor',function (Faker\Generator $faker) {
    return [
        'profesion'         => 'Militar',
        'especialidad'      => 'DIM',
        'first_name'        => $faker->firstName,
        'father_last_name'  => $faker->lastName,
        'mother_last_name'  => $faker->lastName,
        'ci'                => $faker->numberBetween(100000, 500000),
        'exp'               => 'LP',
        'email'             => $faker->unique()->email,
        'birthday'          => $faker->date('Y-m-d'),
        'password'          => \Hash::make('secret'),
        'type'              => 'Tutor',
        'remember_token' => str_random(10),
    ];
});
/*$factory->defineAs(App\User::class, 'cuarto',function ($faker) {
    return [
        'first_name'=> $faker->firstName,
        'last_name' => $faker->lastName,
        'ci'        => $faker->unique()->randomNumber(7),
        'email'     => $faker->unique()->email,
        'type'      => 'Estudiante',
        'curso'     => 4,
        'password'  => \Hash::make('secret'),
    ];
});*/