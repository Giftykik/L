<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    
    $title = $faker->realText(rand(10,40));
    //$short_title = \Illuminate\Support\Str::length($title)>30 ? mb_substr($title,0,30).'...':$title;
    $short_title = mb_strlen($title)>30 ? mb_substr($title,0,30).'...':$title;
    $created = $faker->dateTimeBetween('-30 days', '-1 days');
    
    return [
        'title' => $title,
        'short_title' => $short_title,
        'author_id' => rand(1,4),
        'descr' => $faker->realText(rand(100,500)),
        'created_at'=> $created,
        'updated_at'=> $created,
    ];
});
