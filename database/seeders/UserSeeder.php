<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {

            $token = md5(uniqid(true));

            DB::table('users')->insert([
                'email' => $faker->email,
                'token' => $token,
                'name' => $faker->username,
                'image' => '1.png',
                'password' => 'Test1'
            ]);
            
        }
    }
}
