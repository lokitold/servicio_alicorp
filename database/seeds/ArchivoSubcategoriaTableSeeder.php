<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ArchivoSubcategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $contador= 1;
        for ($i=0; $i < 1000; $i++) {

            \DB::table('archivo_subcategoria')->insert(array(
                'subcategoria_id' => $faker->randomElement(['98', '99', '100', '101', '102', '103', '104', '105', '106', '107', '108',
                    '109', '110', '111', '112', '112', '113', '114', '115', '116', '117', '118', '119', '120', '121', '122', '123'
                ,'124','125', '126','127']),
                'archivo_id' => $contador++,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),

            ));
        }
    }
}
