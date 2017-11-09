<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Track::class, function (Faker $faker) {
    return [
        'album_id' => function () {
            return factory('App\Album')->create()->id;
        },
        'name' => $faker->sentence(4),
        'track' => $faker->randomDigit(),
    ];
});
