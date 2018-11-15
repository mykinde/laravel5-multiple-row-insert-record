<?php

use Faker\Generator as Faker;

$factory->define(App\tbl_subject::class, function (Faker $faker) {
    return [
        'title' => $faker->domainWord,                     //  $faker->tld    ='biz'
    ];
});
