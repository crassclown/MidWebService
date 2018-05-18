<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('books')->insert([
            'title' => str_random(20),
            'description' => str_random(30),
            'writer' => str_random(20),
            'publisher' => str_random(20),
            'category_id' => 6,
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s')
        ]);
        \DB::table('books')->insert([
            'title' => str_random(20),
            'description' => str_random(30),
            'writer' => str_random(20),
            'publisher' => str_random(20),
            'category_id' => 6,
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s')
        ]);
        \DB::table('books')->insert([
            'title' => str_random(20),
            'description' => str_random(30),
            'writer' => str_random(20),
            'publisher' => str_random(20),
            'category_id' => 7,
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s')
        ]);
        \DB::table('books')->insert([
            'title' => str_random(20),
            'description' => str_random(30),
            'writer' => str_random(20),
            'publisher' => str_random(20),
            'category_id' => 8,
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s')
        ]);
        \DB::table('books')->insert([
            'title' => str_random(20),
            'description' => str_random(30),
            'writer' => str_random(20),
            'publisher' => str_random(20),
            'category_id' => 8,
            'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
