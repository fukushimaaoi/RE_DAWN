<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'category' =>$faker->randomNumber(2),
        'post_title' => $faker->word(10),
        'post' => $faker->realText(50),
        'good_count' =>$faker->randomNumber(3),
    ];
});
