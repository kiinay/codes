<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->paragraph(4),
        'user_id' => rand(1,20),
        'category_id' => rand(1,2),
        'published_at' => $faker->dateTimeThisYear($max = 'now')
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'message' => $faker->sentence($nbWords = 12),
        'email' => $faker->email,
        'post_id' => rand(1,20)
    ];
});


