<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::truncate();
        \App\Post::create([
            'user_id' => str_random(10),
            'title' => str_random(10).'@gmail.com',
            'body' => str_random(),
        ]);

        \App\Post::create([
            'user_id' => str_random(10),
            'title' => str_random(10).'@gmail.com',
            'body' => str_random(),
        ]);

        \App\Post::create([
            'user_id' => str_random(10),
            'title' => str_random(10).'@gmail.com',
            'body' => str_random(),
        ]);

        \App\Post::create([
            'user_id' => str_random(10),
            'title' => str_random(10).'@gmail.com',
            'body' => str_random(),
        ]);
    }
}
