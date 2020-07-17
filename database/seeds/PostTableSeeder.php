<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Post::truncate();
        Post::create(["title"=>"標題一","content"=>"內文一"]);
        Post::create(["title"=>"標題二","content"=>"內文二"]);
        Post::create(["title"=>"標題三","content"=>"內文三"]);
        Post::create(["title"=>"標題四","content"=>"內文四"]);
        Post::create(["title"=>"標題伍","content"=>"內文伍"]);
    }
}
