<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Notification;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'notification' => $faker->numberBetween($min = 0, $max = 1),
        'keyword1' => $faker->word(10),
        'keyword2' => $faker->word(10),
        'keyword3' => $faker->word(10),
        'keyword4' => $faker->word(10),
        'keyword5' => $faker->word(10),
    ];
});
