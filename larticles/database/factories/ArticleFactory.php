<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        // where we can create fake data
        'title' => $faker->text(50), // 50 charaters
        'body' => $faker->text(200)
    ];
});
