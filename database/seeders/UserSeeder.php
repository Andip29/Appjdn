<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name"=> "Admin",
            "email"=> "Admin@dwnet.id",
            "email_verified_at" => now(),
            "password" => Hash::make('wew12345'),
            "remember_token" => Str::random(10),
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
