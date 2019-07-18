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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\tailorclothes::class,function(Faker\Generator $faker)
{
	return[
		'name' => $faker->text(50),
		'color' => $faker->text(50),
		'texture' => $faker->text(50),
		'quality' => $faker->text(50),
		'price' => $faker->randomNumber(4),
		'material'=> $faker -> text(50),
		'photoBase' => $faker -> text(200),

			];
}


);