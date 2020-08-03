<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
	$category = factory(Category::class)->create();
    return [
		'title' => $faker->name,
		'body' => $faker->paragraph,
		'user_id' => 1,
		'category_id' => $category->id,
		'is_published' => false,
    ];
});
