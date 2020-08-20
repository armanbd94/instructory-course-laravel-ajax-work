<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'role_id'           => rand(2,3),
        'name'              => $faker->name,
        'email'             => $faker->unique()->safeEmail,
        'mobile_no'         => '013'.rand(10000000,99999999),
        'district_id'       => 43,
        'upazila_id'        => rand(379,394),
        'postal_code'       => rand(4000,4500),
        'address'           => $faker->sentence,
        'email_verified_at' => now(),
        'password'          => 'Bb~!@#*123',                  // password hashed by mutator in model
        'remember_token'    => Str::random(10),
    ];
});
