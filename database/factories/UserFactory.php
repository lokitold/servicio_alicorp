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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'usu_nombre' => $faker->name,
        'usu_usuario' => $faker->unique()->ean8,
        'usu_password' => bcrypt('123456'),
        'api_token' => str_random(64),
        'id_persona' => \App\Persona::all()->id_persona,
        'id_rol' => \App\Rol::all()->idrol,
        'created_at' => date('Y-m-d H:m:s'),
        'updated_at' => date('Y-m-d H:m:s'),
        'usu_preferencia' => $faker->randomElement(['0','1']),
    ];
});
