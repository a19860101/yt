<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        "title"     =>$faker->word,
        "content"   =>$faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
