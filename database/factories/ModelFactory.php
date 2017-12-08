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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
        'state_id' => $faker->numberBetween($min = 1, $max = 17),
        'gender_id'=> $faker->numberBetween($min = 1, $max = 2),
        'age'=> $faker->numberBetween($min = 20, $max = 40),
        'status_id'=> $faker->numberBetween($min = 1, $max = 3),
        'race_id'=> $faker->numberBetween($min = 1, $max = 4),
        'religion_id'=> $faker->numberBetween($min = 1, $max = 5)
    ];
});

$factory->define(App\Lesson::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'body' => $faker->text,
        'image' => $faker->imageUrl(640, 840, null, true, 'Faker', true),
        'some_bool' => $faker->numberBetween($min = 0, $max = 1)
    ];
});
