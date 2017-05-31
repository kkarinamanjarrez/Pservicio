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

use App\TypeUser;
use App\User;
use App\Position;
use App\Mean;
use App\Media;
use App\Cases;
use App\Official;
use App\Attention;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\TypeUser::class, function (Faker\Generator $faker) {

    return [
        'name' => str_random(10),
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Position::class, function (Faker\Generator $faker) {

    return [
        'name' => str_random(10),
    ];
});

$factory->define(App\Mean::class, function (Faker\Generator $faker) {

    return [
        'name' => str_random(10),
    ];
});

$factory->define(App\Media::class, function (Faker\Generator $faker) {

    return [
        'name' => str_random(10),
    ];
});

$factory->define(App\Cases::class, function (Faker\Generator $faker) {

    return [
        'date' => str_random(10),
        'medias_id' => $faker->randomElement([1, 2, 3, 4]),
    ];
});

$factory->define(App\Official::class, function (Faker\Generator $faker) {

    return [
        'name' => str_random(10),
        'address'=> str_random(10),
        'phone' => str_random(10),
        'positions_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7]),

    ];
});

$factory->define(App\Attention::class, function (Faker\Generator $faker) {

    return [
        'date' => str_random(10),
        'means_id' => $faker->randomElement([1, 2, 3, 4]),
        'cases_id' => $faker->randomElement([1, 2, 3, 4]),
        'officials_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9]),
    ];
});

