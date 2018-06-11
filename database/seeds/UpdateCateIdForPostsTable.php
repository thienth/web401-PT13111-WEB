<?php

use Illuminate\Database\Seeder;
use App\Post;
class UpdateCateIdForPostsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        foreach ($posts as $p) {
        	$p->cate_id = rand(1, 6);
        	$p->save();
        }
    }
}
