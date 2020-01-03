<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName ,
                'email' => $faker->unique()->safeEmail,
                'location' =>$faker->country,
                'company' =>$faker->Company,
                'website' =>$faker->url,
                'terms_condition' =>$faker->Boolean,
                
                'role'=>$faker->Boolean(1,2),
                'im' =>$faker->Company,
                'im_account'=>$faker->Company,
                 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
    ];
});
