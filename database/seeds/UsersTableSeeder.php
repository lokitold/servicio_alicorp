<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Rol;
use function GuzzleHttp\Psr7\str;

class UsersTableSeeder extends Seeder
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

            \DB::table('usuario')->insert(array(
                'usu_nombre' => $faker->name,
                'usu_usuario' => $faker->ean8,
                'usu_password' => bcrypt('123456'),
                'api_token' => $faker->name,
                'id_persona' => $contador++,
                'id_rol' => $faker->randomElement(['1','2', '3']),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'usu_preferencia' => $faker->randomElement(['0','1']),
            ));
        }
    }
}
