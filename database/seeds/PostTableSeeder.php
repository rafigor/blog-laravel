<?php

use App\Post;
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
        DB::statement('TRUNCATE POSTS CASCADE');
//        Post::truncate();
        factory('App\Post', 15)->create();
    }
}
