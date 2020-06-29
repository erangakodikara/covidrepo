<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\DeviceActivitie;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(DeviceActivitie::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'device_token' => Str::random(10),
    ];
});
