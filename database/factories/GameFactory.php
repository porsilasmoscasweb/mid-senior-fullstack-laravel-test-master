<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->words(100, true),
        'platform' => $faker->words(2, true),
        'image_url' => $faker->imageUrl(380, 600, 'games', true),
        'release_date' => $faker->date("d-m-Y"),
        'price' => $faker->randomFloat(2, 1, 100),
    ];
});
