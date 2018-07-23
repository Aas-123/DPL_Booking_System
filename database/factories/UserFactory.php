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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Result::class, function (Faker $faker) {
    return [
        'team1' => $faker->name,
        'team2' => $faker->name,
        'result_detail' => $faker->paragraph,
        'admin_id' =>  function () {
            return factory(App\User::class)->create()->id;
        },
    ];
});

$factory->define(App\Point::class, function (Faker $faker) {
    return [
        'teams' => $faker->name,
        'played' => 1,
        'won' => 1,
        'draw'=> 0,
        'lost'=> 0,
        'point'=> 3,
        'admin_id' =>  function () {
            return factory(App\User::class)->create()->id;
        },
    ];
});

$factory->define(App\NewsFeed::class, function (Faker $faker) {
    return [
        'feed_title' => $faker->title,
        'news_feed' => $faker->paragraph,
        'feed_image' => $faker->name,
        'admin_id' =>  function () {
            return factory(App\User::class)->create()->id;
        },
    ];
});

$factory->define(App\Booking::class, function (Faker $faker) {
    return [
        'Adderess' => 'Kathmandu',
        'Phone_Number' => '983735353',
        'seat_number' => '4,5,',
        'no_of_seat' =>'2',
        'total_price' =>'1200',
        'status'=>0,
        'email' => $faker->unique()->safeEmail,
        'customer_id' =>  function () {
            return factory(App\Customer::class)->create()->id;
        },
    ];
}); 

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        ];
        });