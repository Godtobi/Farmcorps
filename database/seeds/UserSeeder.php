<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Farmer;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $primaryResident = User::create([
            'name' => 'Admin',
            'email' => 'farm_admin@example.com',
            'phone'=>9038,
            'company'=>'none',
            'password' => bcrypt('password'),

        ]);

        $primaryResident->assignRole('admin');

        $primaryResident = User::create([
            'name' => 'food_company',
            'email' => 'food_company_admin@example.com',
            'phone'=>9038,
            'company'=>'none',
            'password' => bcrypt('password'),

        ]);

        $primaryResident->assignRole('food_company');

        $primaryResident = User::create([
            'name' => 'agro_dealer',
            'email' => 'agro_dealer_admin@example.com',
            'phone'=>9038,
            'company'=>'none',
            'password' => bcrypt('password'),

        ]);

        $primaryResident->assignRole('agro_dealer');

        $primaryResident = User::create([
            'name' => 'farmer',
            'email' => 'farmer_admin@example.com',
            'phone'=>9038,
            'company'=>'none',
            'password' => bcrypt('password'),

        ]);

        $primaryResident->assignRole('farmer');
    }
}
