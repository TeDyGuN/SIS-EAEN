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

        /*
         * Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');

            $table->enum('type', ['Admin', 'Cursante', 'Tutor']);

            $table->string('first_name');
            $table->string('father_last_name');
            $table->string('mother_last_name')->nullable();

            $table->string('ci')->unique();
            $table->string('exp');
            $table->date('birthday');
            $table->string('email')->unique();
            

            $table->string('profesion')->nullable();
            $table->string('especialidad');
            $table->string('grado')->nullable();
            $table->string('fuerza')->nullable();

            $table->string('password', 60);
            
            $table->rememberToken();
            $table->timestamps();
        });
         */


//              USUARIO CURSANTE

        \DB::table('users')->insert(array(

            //       TIPO MILITAR
            'type'              => 'Cursante',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Carlos',
            'father_last_name'  => 'Castellanos',
            'mother_last_name'  => 'Caceres',

            'ci'                => '1111111',
            'exp'               => 'LP',
            'birthday'          => '1960-07-08',// 'YEAR - MONTH - DAY'
            'email'             => 'ccaceresc@gmail.com',

            'profesion'         => 'Militar',
            'fuerza'            => 'Ejercito',
            //'fuerza'            => 'Armada',
            //'fuerza'            => 'Fuerza Aerea',
            'grado'             => 'Coronel',
            //'grado'             => 'Mayor',
            //'grado'             => 'Capitan',
            //'grado'             => 'Teniente',
            'especialidad'      => 'DIM',
            //'especialidad'      => 'DEM',
            
                        
            'password'  => \Hash::make('secret'),

        ));

        \DB::table('users')->insert(array(

            //       TIPO LICENCIADO
            'type'              => 'Cursante',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Juan',
            'father_last_name'  => 'Jara',
            'mother_last_name'  => 'Justiniano',

            'ci'                => '2222222',
            'exp'               => 'CBBA',
            'birthday'          => '1970-07-08',// 'YEAR - MONTH - DAY'
            'email'             => 'jjaraj@gmail.com',

            'profesion'         => 'Licenciatura',
            //'profesion'         => 'Abogado',
            //'profesion'         => 'Ingeniero',
            //'profesion'         => 'Medico',
            //'profesion'         => 'Licenciatura',
            'especialidad'      => 'Diplomado',
            //'especialidad'      => 'Magister',
            //'especialidad'      => 'Doctorado',

            
                        
            'password'  => \Hash::make('secret'),

        ));

        \DB::table('users')->insert(array(

            //       TIPO MILITAR
            'type'              => 'Cursante',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Rodrigo',
            'father_last_name'  => 'Rosales',
            'mother_last_name'  => 'Rincon',

            'ci'                => '3333333',
            'exp'               => 'SC',
            'birthday'          => '1965-09-10',// 'YEAR - MONTH - DAY'
            'email'             => 'rrosalesr@gmail.com',

            'profesion'         => 'Militar',
            'fuerza'            => 'Armada',
            //'fuerza'            => 'Armada',
            //'fuerza'            => 'Fuerza Aerea',
            'grado'             => 'Teniente',
            //'grado'             => 'Mayor',
            //'grado'             => 'Capitan',
            //'grado'             => 'Teniente',
            //'especialidad'      => 'DIM',
            //'especialidad'      => 'DEM',
            
                        
            'password'  => \Hash::make('secret'),

        ));

        \DB::table('users')->insert(array(

            //       TIPO LICENCIADO
            'type'              => 'Cursante',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Luis',
            'father_last_name'  => 'Lugano',
            'mother_last_name'  => 'Lee',

            'ci'                => '4444444',
            'exp'               => 'BN',
            'birthday'          => '1970-11-12',// 'YEAR - MONTH - DAY'
            'email'             => 'lluganol@gmail.com',

            'profesion'         => 'Abogado',
            //'profesion'         => 'Abogado',
            //'profesion'         => 'Ingeniero',
            //'profesion'         => 'Medico',
            //'profesion'         => 'Licenciatura',
            'especialidad'      => 'Magister',
            //'especialidad'      => 'Magister',
            //'especialidad'      => 'Doctorado',

            
                        
            'password'  => \Hash::make('secret'),

        ));




        \DB::table('users')->insert(array(

            //       TIPO MILITAR
            'type'              => 'Cursante',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Fernando',
            'father_last_name'  => 'Farid',
            'mother_last_name'  => 'Fortun',

            'ci'                => '5555555',
            'exp'               => 'LP',
            'birthday'          => '1960-04-26',// 'YEAR - MONTH - DAY'
            'email'             => 'ffaridf@gmail.com',

            'profesion'         => 'Militar',
            'fuerza'            => 'Fuerza Aerea',
            //'fuerza'            => 'Armada',
            //'fuerza'            => 'Fuerza Aerea',
            'grado'             => 'Coronel',
            //'grado'             => 'Mayor',
            //'grado'             => 'Capitan',
            //'grado'             => 'Teniente',
            //'especialidad'      => 'DIM',
            //'especialidad'      => 'DEM',
            
                        
            'password'  => \Hash::make('secret'),

        ));

        \DB::table('users')->insert(array(

            //       TIPO LICENCIADO
            'type'              => 'Cursante',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Gabriel',
            'father_last_name'  => 'Garcia',
            'mother_last_name'  => 'Gonzales',

            'ci'                => '6666666',
            'exp'               => 'LP',
            'birthday'          => '1978-06-16',// 'YEAR - MONTH - DAY'
            'email'             => 'ggarciag@gmail.com',

            'profesion'         => 'Ingeniero',
            //'profesion'         => 'Abogado',
            //'profesion'         => 'Ingeniero',
            //'profesion'         => 'Medico',
            //'profesion'         => 'Licenciatura',
            'especialidad'      => 'Doctorado',
            //'especialidad'      => 'Magister',
            //'especialidad'      => 'Doctorado',

            
                        
            'password'  => \Hash::make('secret'),

        ));





        \DB::table('users')->insert(array(

            //       TIPO MILITAR
            'type'              => 'Cursante',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Hugo',
            'father_last_name'  => 'Heinz',
            'mother_last_name'  => 'Heart',

            'ci'                => '7777777',
            'exp'               => 'SC',
            'birthday'          => '1967-02-05',// 'YEAR - MONTH - DAY'
            'email'             => 'hheinzh@gmail.com',

            'profesion'         => 'Militar',
            'fuerza'            => 'Ejercito',
            //'fuerza'            => 'Armada',
            //'fuerza'            => 'Fuerza Aerea',
            'grado'             => 'Mayor',
            //'grado'             => 'Mayor',
            //'grado'             => 'Capitan',
            //'grado'             => 'Teniente',
            //'especialidad'      => 'DIM',
            //'especialidad'      => 'DEM',
            
                        
            'password'  => \Hash::make('secret'),

        ));

        \DB::table('users')->insert(array(

            //       TIPO LICENCIADO
            'type'              => 'Cursante',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Bruno',
            'father_last_name'  => 'Burgos',
            'mother_last_name'  => 'Bejarano',

            'ci'                => '8888888',
            'exp'               => 'LP',
            'birthday'          => '1974-03-17',// 'YEAR - MONTH - DAY'
            'email'             => 'bburgosb@gmail.com',

            'profesion'         => 'Medico',
            //'profesion'         => 'Abogado',
            //'profesion'         => 'Ingeniero',
            //'profesion'         => 'Medico',
            //'profesion'         => 'Licenciatura',
            'especialidad'      => 'Diplomado',
            //'especialidad'      => 'Magister',
            //'especialidad'      => 'Doctorado',

            
                        
            'password'  => \Hash::make('secret'),

        ));


//                  USUARIO TUTOR

        \DB::table('users')->insert(array(

            //       TIPO MILITAR
            'type'              => 'Tutor',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Diego',
            'father_last_name'  => 'Dominguez',
            'mother_last_name'  => 'Dormunt',

            'ci'                => '9999999',
            'exp'               => 'CBBA',
            'birthday'          => '1958-08-30',// 'YEAR - MONTH - DAY'
            'email'             => 'ddominguezd@gmail.com',

            'profesion'         => 'Militar',
            'fuerza'            => 'Ejercito',
            //'fuerza'            => 'Armada',
            //'fuerza'            => 'Fuerza Aerea',
            'grado'             => 'Coronel',
            //'grado'             => 'Mayor',
            //'grado'             => 'Capitan',
            //'grado'             => 'Teniente',
            'especialidad'      => 'DEM',
            //'especialidad'      => 'DEM',
            
                        
            'password'  => \Hash::make('secret'),

        ));

        \DB::table('users')->insert(array(

            //       TIPO LICENCIADO
            'type'              => 'Tutor',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Eliana',
            'father_last_name'  => 'Enriquez',
            'mother_last_name'  => 'Estrada',

            'ci'                => '1010101',
            'exp'               => 'SC',
            'birthday'          => '1979-03-14',// 'YEAR - MONTH - DAY'
            'email'             => 'eenriqueze@gmail.com',

            'profesion'         => 'Licenciatura',
            //'profesion'         => 'Abogado',
            //'profesion'         => 'Ingeniero',
            //'profesion'         => 'Medico',
            //'profesion'         => 'Licenciatura',
            'especialidad'      => 'Doctorado',
            //'especialidad'      => 'Magister',
            //'especialidad'      => 'Doctorado',

            
                        
            'password'  => \Hash::make('secret'),

        ));
        

        \DB::table('users')->insert(array(

            //       TIPO MILITAR
            'type'              => 'Tutor',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Martin',
            'father_last_name'  => 'Mendoza',
            'mother_last_name'  => 'Merida',

            'ci'                => '2020202',
            'exp'               => 'LP',
            'birthday'          => '1976-02-05',// 'YEAR - MONTH - DAY'
            'email'             => 'mmendozam@gmail.com',

            'profesion'         => 'Militar',
            'fuerza'            => 'Armada',
            //'fuerza'            => 'Armada',
            //'fuerza'            => 'Fuerza Aerea',
            'grado'             => 'Capitan',
            //'grado'             => 'Mayor',
            //'grado'             => 'Capitan',
            //'grado'             => 'Teniente',
            //'especialidad'      => 'DEM',
            //'especialidad'      => 'DEM',
            
                        
            'password'  => \Hash::make('secret'),

        ));

        \DB::table('users')->insert(array(

            //       TIPO LICENCIADO
            'type'              => 'Tutor',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Karla',
            'father_last_name'  => 'Kano',
            'mother_last_name'  => 'Kyra',

            'ci'                => '3030303',
            'exp'               => 'CBBA',
            'birthday'          => '1973-01-19',// 'YEAR - MONTH - DAY'
            'email'             => 'kkanok@gmail.com',

            'profesion'         => 'Abogado',
            //'profesion'         => 'Abogado',
            //'profesion'         => 'Ingeniero',
            //'profesion'         => 'Medico',
            //'profesion'         => 'Licenciatura',
            'especialidad'      => 'Diplomado',
            //'especialidad'      => 'Magister',
            //'especialidad'      => 'Doctorado',

            
                        
            'password'  => \Hash::make('secret'),

        ));




        \DB::table('users')->insert(array(

            //       TIPO MILITAR
            'type'              => 'Tutor',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Nestor',
            'father_last_name'  => 'Navarro',
            'mother_last_name'  => 'Noriega',

            'ci'                => '4040404',
            'exp'               => 'SC',
            'birthday'          => '1976-08-30',// 'YEAR - MONTH - DAY'
            'email'             => 'nnavarron@gmail.com',

            'profesion'         => 'Militar',
            'fuerza'            => 'Fuerza Aerea',
            //'fuerza'            => 'Armada',
            //'fuerza'            => 'Fuerza Aerea',
            'grado'             => 'Coronel',
            //'grado'             => 'Mayor',
            //'grado'             => 'Capitan',
            //'grado'             => 'Teniente',
            //'especialidad'      => 'DEM',
            //'especialidad'      => 'DEM',
            
                        
            'password'  => \Hash::make('secret'),

        ));

        \DB::table('users')->insert(array(

            //       TIPO LICENCIADO
            'type'              => 'Tutor',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Oliver',
            'father_last_name'  => 'Osorio',
            'mother_last_name'  => 'Oliveira',

            'ci'                => '5050505',
            'exp'               => 'LP',
            'birthday'          => '1960-08-12',// 'YEAR - MONTH - DAY'
            'email'             => 'ososrioo@gmail.com',

            'profesion'         => 'Medico',
            //'profesion'         => 'Abogado',
            //'profesion'         => 'Ingeniero',
            //'profesion'         => 'Medico',
            //'profesion'         => 'Licenciatura',
            'especialidad'      => 'Cardiología',
            //'especialidad'      => 'Magister',
            //'especialidad'      => 'Doctorado',

            
                        
            'password'  => \Hash::make('secret'),

        ));



        \DB::table('users')->insert(array(

            //       TIPO MILITAR
            'type'              => 'Tutor',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Pedro',
            'father_last_name'  => 'Perez',
            'mother_last_name'  => 'Prieto',

            'ci'                => '6060606',
            'exp'               => 'TDD',
            'birthday'          => '1973-03-15',// 'YEAR - MONTH - DAY'
            'email'             => 'pperezp@gmail.com',

            'profesion'         => 'Militar',
            'fuerza'            => 'Armada',
            //'fuerza'            => 'Armada',
            //'fuerza'            => 'Fuerza Aerea',
            'grado'             => 'Capitan',
            //'grado'             => 'Mayor',
            //'grado'             => 'Capitan',
            //'grado'             => 'Teniente',
            //'especialidad'      => 'DEM',
            //'especialidad'      => 'DEM',
            
                        
            'password'  => \Hash::make('secret'),

        ));

        \DB::table('users')->insert(array(

            //       TIPO LICENCIADO
            'type'              => 'Tutor',
            //'type'              => 'Tutor',
            
            'first_name'        => 'Silvia',
            'father_last_name'  => 'Sanchez',
            'mother_last_name'  => 'Suarez',

            'ci'                => '7070707',
            'exp'               => 'LP',
            'birthday'          => '1979-07-19',// 'YEAR - MONTH - DAY'
            'email'             => 'ssanchezs@gmail.com',

            'profesion'         => 'Ingeniero',
            //'profesion'         => 'Abogado',
            //'profesion'         => 'Ingeniero',
            //'profesion'         => 'Medico',
            //'profesion'         => 'Licenciatura',
            'especialidad'      => 'Magister',
            //'especialidad'      => 'Magister',
            //'especialidad'      => 'Doctorado',

            
                        
            'password'  => \Hash::make('secret'),

        ));



      
        


    }
}
