<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeders extends Seeder
{
    /**
     * Run the database seeds.
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

    }

}
