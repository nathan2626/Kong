<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 60; $i++) {

            $token = md5(uniqid(true));

            DB::table('likes')->insert([
                'user_id' => User::all()->random(1)->first()->id,
                'post_id' => Post::all()->random(1)->first()->id,
            ]);
            
        }
    }
}
