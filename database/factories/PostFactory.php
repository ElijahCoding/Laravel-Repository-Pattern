<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\{Post, Topic};
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence(20),
        'user_id' => 1,
        'topic_id' => factory(Topic::class)->create()->id
    ];
});
