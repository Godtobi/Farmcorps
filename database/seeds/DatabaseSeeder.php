<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'admin'
            ],

            [
                'id' => 2,
                'name' => 'food_company'
            ],

            [
                'id' => 3,
                'name' => 'agro_dealer'
            ],

            [
                'id' => 4,
                'name' => 'none'
            ],

            [
                'id' => 5,
                'name' => 'farmer'
            ],
        ] ;


        foreach ($roles as $role) {
            Role::create($role);
        }

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
