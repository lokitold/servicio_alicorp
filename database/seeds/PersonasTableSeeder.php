<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\TipoCliente;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 1000; $i++) {
            \DB::table('persona')->insert(array(
                'per_nombres' => $faker->name,
                'per_apellido' => $faker->lastName,
                'per_dni' => $faker->ean8,
                'per_email' => $faker->email,
                'per_telefono' => $faker->e164PhoneNumber,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'tipo_cliente_id' => $faker->randomElement(['1','2']),
            ));
        }
    }
}
