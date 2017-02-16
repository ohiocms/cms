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

$factory->define(Belt\Spot\Address::class, function (Faker\Generator $faker) {

    $types = ['places'];

    // within continental US
    $lat = $faker->latitude(24.7433195, 49.3457868);
    $lng = $faker->longitude(-124.7844079, -66.9513812);
    $box = .005;

    return [
        'addressable_id' => $faker->randomDigit,
        'addressable_type' => $faker->randomElement($types),
        'name' => $faker->name(),
        'line1' => $faker->streetAddress,
        'locality' => $faker->city,
        'postcode' => $faker->postcode,
        'region' => $faker->stateAbbr,
        'lat' => $lat,
        'north_lat' => $lng + $box,
        'south_lat' => $lng - $box,
        'lng' => $lng,
        'east_lng' => $lng + $box,
        'west_lng' => $lng - $box,
        'delta' => 1,
    ];
});