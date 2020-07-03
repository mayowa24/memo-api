<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Memo::class, function (Faker $faker) {
    return [
        'from'=>$faker->text(100),
        'title'=> $faker->text(100),
        'ref'=>$faker->text(50),
        'body'=>$faker->text(300)
    ];
});
