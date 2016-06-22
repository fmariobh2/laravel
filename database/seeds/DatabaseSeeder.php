<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsuariosTableSeeder::class);
         $this->command->info('Paises table seeded!');
    }
}

class UsuariosTableSeeder extends Seeder {

    public function run()
    {
        DB::table('usuarios')->insert(array(
            array(
                'id' => 1,
                'nombre' => 'Francisco',
                'email' => 'examen',
                'password' => \Hash::make('examen'),
                'nombre_usuario' => 'examen',
            ),
         ));
    }
}