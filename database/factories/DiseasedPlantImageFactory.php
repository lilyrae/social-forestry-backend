<?php

use App\Models\DiseasedPlantImage;
use Faker\Generator as Faker;

$factory->define(DiseasedPlantImage::class, function (Faker $faker) {
    return [
		'image_path'    => 'diseased-plants/test.jpg',
		'address'       => $faker->address,
		'landmark'      => $faker->city,
		'geo_latitude'  => $faker->latitude,
		'geo_longitude' => $faker->longitude,
    ];
});