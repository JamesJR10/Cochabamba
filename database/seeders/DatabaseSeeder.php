<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Rest;
use App\Models\Cochabamba;
use Illuminate\Database\Seeder;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(1)->create([
            "name" => "Alejandro",
            "email" => "aqm1290@gmail.com",
            "password" => bcrypt("quintana"),
            "role"=>"0"
        ]);
        User::factory()->times(1)->create([
            "name" => "ramiro",
            "email" => "ramiro@gmail.com",
            "password" => bcrypt("123456"),
            "role"=>"1"
        ]);
        
        /* Rest::factory()->times(10)->create();
        Cochabamba::factory()->times(10)->create(); */
    }
}
