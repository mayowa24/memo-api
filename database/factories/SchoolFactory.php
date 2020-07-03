<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\School::class, function (Faker $faker) {
    return [
        'name'=>$faker->text(250)
        //
    ];
});
