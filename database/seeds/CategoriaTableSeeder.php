<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
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
        for ($i=0; $i < 50; $i++) {

            \DB::table('categoria')->insert(array(
                'cat_nombre' => $faker->domainWord,
                'cat_estado' => $faker->randomElement(['1']),
                'cat_descripcion' => $faker->paragraph,
            ));
        }
    }
}
