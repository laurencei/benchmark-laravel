<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create(['name' => 'Test', 'email' => 'test@test.com', 'password' => 'ewfikwejhfiowejfkpoew']);

        \App\Post::create(['item' => 'Example1']);
        \App\Post::create(['item' => 'Example2']);
        \App\Post::create(['item' => 'Example3']);
        \App\Post::create(['item' => 'Example4']);
        \App\Post::create(['item' => 'Example5']);

    }
}
