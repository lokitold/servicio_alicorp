<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsuarioSubcategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $contador= 125;
        for ($i=0; $i < 500; $i++) {

            \DB::table('usuario_subcategoria')->insert(array(
                'usuario_id' => $contador++,
                'subcategoria_id' => $faker->randomElement(['98', '99', '100', '101', '102', '103', '104', '105', '106', '107', '108',
                    '109', '110', '111', '112', '112', '113', '114', '115', '116', '117', '118', '119', '120', '121', '122', '123'
                    ,'124','125', '126','127']),
                'fecha_registro' => date('Y-m-d H:m:s'),
            ));
        }
    }
}
