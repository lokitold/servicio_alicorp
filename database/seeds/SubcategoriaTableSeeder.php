<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SubcategoriaTableSeeder extends Seeder
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
        for ($i=0; $i < 30; $i++) {

            \DB::table('subcategoria')->insert(array(
                'sub_nombre' => $faker->lastName,
                'sub_estado' => $faker->randomElement(['1']),
                'sub_descripcion' => $faker->paragraph,
                'idcategoria' => $faker->randomElement(['6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
                    '17', '8', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29']),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'sub_icono' => $faker->randomElement(['fa fa-paper', 'fa fa-test', 'fa fa-man', 'fa fa-cove']),

            ));
        }
    }
}
