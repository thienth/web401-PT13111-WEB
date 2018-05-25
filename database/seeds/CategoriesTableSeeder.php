<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->string('name');
        // $table->string('slug')->unique();
        $cates = [
        	['name' => 'Thể thao', 'slug' => 'the-thao'],
        	['name' => 'Văn hoá', 'slug' => 'van-hoa'],
        	['name' => 'Giáo dục', 'slug' => 'giao-duc'],
        	['name' => 'Bóng đá', 'slug' => 'bong-da'],
        	['name' => 'An ninh', 'slug' => 'an-ninh'],
        	['name' => 'Chính trị', 'slug' => 'chinh-tri']
        ];

        DB::table('categories')->insert($cates);
    }
}
