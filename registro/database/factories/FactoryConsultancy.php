<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\odel=Consultancy;
use Faker\Generator as Faker;

$factory->define(odel=Consultancy::class, function (Faker $faker) {
    return [
        "name"=> $faker->company, 
        "deegre"=> $faker->randomDigit,
        "logo"=> => $faker-> imageUrl($width = 640, $height = 480) // 'http://lorempixel.com/640/480/', 
    ];
});
