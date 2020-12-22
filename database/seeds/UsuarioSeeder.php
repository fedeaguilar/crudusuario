<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuarios')->insert([
            [
                'nombre'=>'Federico',
                'apellido'=>'Aguilar',
                'mail'=>'Fede_aguilar91@hotmail.com',
                'usuario'=>'fedeaguilar91'

            ],
        ]);
    }
}
