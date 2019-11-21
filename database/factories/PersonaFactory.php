<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Persona::class, function (Faker\Generator $faker) {
    $name = $faker->name;
    $last_name = $faker->lastName;
    return [
        'per_nombres' => $name,
        'per_apellido' => $last_name,
        'per_dni' => $faker->ean8,
        'per_email' => $faker->email,
        'per_telefono' => $faker->e164PhoneNumber,
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        'tipo_cliente_id' => \App\TipoCliente::all()->idtipo_cliente,
    ];
});
