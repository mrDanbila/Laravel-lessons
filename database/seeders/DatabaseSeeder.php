<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
/**
    * Seed the application's database.
        *
        * @return void
     */
    public function run()
    {   
        DB::table('users')->insert([
        'name' => Str::random(10),
        'email' => Str::random(5), 
        'age' => rand(0,99), 
        'salary' => rand(30000, 240000), 
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('posts')->insert([
            'title' => Str::random(10),
            'slug' => Str::random(5), 
            'likes' => rand(30000, 240000),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"), 
            ]);
        // \App\Models\User::factory(10)->create();
    }
}
