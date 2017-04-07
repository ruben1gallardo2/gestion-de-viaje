<?php

$factory->define(App\Vuelo::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->name,
		'sits' => $faker->numberBetween(1,255),
		'cities' => $faker->unique()->country(),
    'created_at'=>$faker->unique()->DateTime(),
		'updated_at'=>$faker->unique()->DateTime() 
	];
});
