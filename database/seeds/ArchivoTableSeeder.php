<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ArchivoTableSeeder extends Seeder
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

            \DB::table('archivo')->insert(array(
                'arch_nombre' => $faker->jobTitle,
                'arch_descripcion' => $faker->paragraph,
                'arch_url' => $faker->url,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'arch_icono' => 'fa fa-file1',
                'arch_extension' => $faker->fileExtension,
            ));
        }
    }
}
