<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
		'title' => $faker->name,
		'body' => $faker->paragraph,
		'user_id' => 1,
		'category_id' => 1,
		'is_published' => false,
    ];
});
