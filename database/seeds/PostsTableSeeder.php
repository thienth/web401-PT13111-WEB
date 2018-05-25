<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// $table->string('title');
	 //    $table->string('slug')->unique();
	 //    $table->string('image')->nullable();
	 //    $table->text('short_desc')->nullable();
	 //    $table->text('content')->nullable();
	 //    $table->string('author')->nullable();
	 //    $table->integer('views')->default(0);
	 //    $table->datetime('publish_date')->nullable();
	 //    $table->integer('created_by')->default(-1);
        $faker = Faker\Factory::create();
        $posts = [];
        for ($i=0; $i < 2000; $i++) { 
        	$name = $faker->name;
        	$item = [
        		'title' => $name,
        		'slug' => str_slug($name),
        		'image' => $faker->imageUrl(800, 600, 'cats'),
        		'short_desc' => $faker->realText(
        								$faker->numberBetween(20,60)
        							),
    			'content' => $faker->realText($maxNbChars = 400, $indexSize = rand(2, 5)),
    			'author' => $faker->name,
    			'views' => rand(1, 5000),
    			'publish_date' => $faker->dateTime($max = 'now', $timezone = null),
    			'created_by' => rand(1, 3)
        	];
        	$posts[] = $item;
        }
        DB::table('posts')->insert($posts);
    }
}
