<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models;
use Faker\Generator as Faker;


$factory->define(\App\Models\User::class, function (Faker $faker) {
    //$crop=$faker->randomElement(['maize','rice','soya','beans','wheat']);
    $crop = \Illuminate\Support\Arr::random(['maize','rice','soya','beans','wheat']);
    $image = $crop.'jpg';
    $quantity=\Illuminate\Support\Arr::random([1,5,10,20,30,40,50,100]);
    $state=\Illuminate\Support\Arr::random(['oyo','lagos','abia','zamfara' ,'osun','akwa ibom', 'benue','edo','nassarawa',
        'ekiti','niger','rivers','sokoto','taraba','delta','ebonyi','kwara','kano','enugu']);
    return [
        'name'=>$faker->name(),
        'email'=>$faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'crop'=>$crop,
        'phone'=>$faker->phoneNumber,
        'type'=>$faker->randomElements(['dry','wet']),
        'quantity'=>$quantity,
        'state'=>$state,
        'image'=>$image


    ];
});


