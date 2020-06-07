<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

//$factory->define(User::class, function (Faker $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'email_verified_at' => now(),
//        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//        'remember_token' => Str::random(10),
//    ];
//});

$factory->define(\App\Models\User::class, function (Faker $faker) {
    //$crop=$faker->randomElement(['maize','rice','soya','beans','wheat']);
    $crop = \Illuminate\Support\Arr::random(['maize','rice','soya','beans','wheat']);
    $image = $crop.'jpg';
    $quantity=\Illuminate\Support\Arr::random([1,5,10,20,30,40,50,100]);
    $state=\Illuminate\Support\Arr::random(['oyo','lagos','abia','zamfara' ,'osun','akwa ibom', 'benue','edo','nassarawa',
        'ekiti','niger','rivers','sokoto','taraba','delta','ebonyi','kwara','kano','enugu']);
    $type = \Illuminate\Support\Arr::random(['dry','wet']);
    $phone = \Illuminate\Support\Arr::random(['090343322','09034543234','09034017984']);
    return [
        'name'=>$faker->name(),
        'email'=>$faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'crop'=>$crop,
        'phone'=>$phone,
        'type'=>$type,
        'quantity'=>$quantity,
        'state'=>$state,
        'image'=>$image


    ];
});
