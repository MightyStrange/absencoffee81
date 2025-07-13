<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class CreateUserAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            "name"=>"admin",
            "email"=>"admin@admin.com",
            "password"=>Hash::make("admin9129283"),
            "role"=>"admin",
            "accept"=>"yes"
        ]);
        \App\User::create([
            "name"=>"admin",
            "email"=>"admin@second.com",
            "password"=>Hash::make("admin93382211"),
            "role"=>"admin",
            "accept"=>"yes"
        ]);
    }
}
