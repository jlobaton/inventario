<?php

use Faker\Provider\es_VE\PhoneNumber;
use Faker\Provider\es_VE\Company;
use Faker\Provider\es_VE\Address;
use Faker\Provider\es_VE\Person;

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
$factory->define(App\Ordenes::class, function (Faker\Generator $faker){
	return [
		'nombre'	 	=> $faker->name,
		'apellido' 	 	=> $faker->lastName,
		'seudonimo'		=> $faker->userName,
		'correo' 		=> $faker->email,
		'cantidad' 		=> $faker->randomDigitNotNull,
		'inventario_id' => 1,
		'tipopago_id' 	=> 1,
		'bancorigen'	=> 'Venezuela',
		'banco_id'		=> 1,
		'fecha' 		=> $faker->date($format = 'Y-m-d', $max = 'now'),
		'monto' 		=> $faker->randomNumber($nbDigits = NULL),
		'obser' 		=> $faker->sentence($nbWords = 6),
		'envnombre' 	=> $faker->name,
		'envcedula' 	=> $faker->numerify('V- #######'), // 'Hello 609',
		'envtele' 		=> $faker->phoneNumber,
		'encomienda_id' => rand(1,2),
		'envdirec' 	=> $faker->address,
		'estado_id' 	=> 1,
		'ciudad_id' 	=> 1,
		'envobser' 		=> $faker->sentence($nbWords = 6),
		'estatus' 		=> 'Por Enviar',
	];
});
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' 			=> $faker->name,
        'email' 		=> $faker->email,
        'password' 		=> bcrypt(str_random(10)),
        'remember_token'=> str_random(10),
    ];
});
