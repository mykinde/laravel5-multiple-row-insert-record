<?php

use Faker\Generator as Faker;

$factory->define(App\tbl_student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
