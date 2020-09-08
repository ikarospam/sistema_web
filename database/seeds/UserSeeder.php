<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'FRANCISCO',
            'apellidos' => 'SUAREZ PELAEZ',
            'usuario' => 'pancho',
            'email' => 'ikarospam@gmail.com',            
            'direccion' => 'SDFBSDIUBUB',
            'telefono' => '9332093882',
            'password' => bcrypt('123456'),
            'id_rol' => 1,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'FRANCISCO',
            'apellidos' => 'SUAREZ PELAEZ',
            'usuario' => 'pancho1',
            'email' => 'ikarospam1@gmail.com',            
            'direccion' => 'SDFBSDIUBUB',
            'telefono' => '9332093882',
            'password' => bcrypt('123456'),
            'id_rol' => 2,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
