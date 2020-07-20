<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostModel;
use Faker\Generator as Faker;

$factory->define(PostModel::class, function (Faker $faker) {
    return [
        'TITLE'=>$faker->sentence(),
        'SLUG'=> \Str::slug($faker->sentence()),
        'BODY'=>$faker->paragraph(10),
    ];
});
