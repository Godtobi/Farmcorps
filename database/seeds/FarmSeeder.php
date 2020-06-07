<?php

use Illuminate\Database\Seeder;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 300;
        factory(\App\Models\User::class, $count)->create();

    }
}
