<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->words(100, true),
        'platform' => $faker->words(2, true),
        'image_url' => $faker->randomElement([
            'https://media.vandal.net/m/43030/the-legend-of-zelda-breath-of-the-wild-201732131429_1.jpg',
            'https://media.vandal.net/m/43395/super-mario-odyssey-2017102611035_25.jpg',
            'https://media.vandal.net/m/61486/pokemon-espada-y-escudo-201972612334165_18.jpg',
            'https://media.vandal.net/m/102188/mario-rabbids-sparks-of-hope-20216139202015_1.jpg',
            'https://media.vandal.net/m/70568/the-legend-of-zelda-links-awakening-2019612813232_1.jpg',
        ]),
        // 'image_url' => $faker->imageUrl(380, 600, 'games', true),
        'release_date' => $faker->date("d-m-Y"),
        'price' => $faker->randomFloat(2, 1, 100),
    ];
});
