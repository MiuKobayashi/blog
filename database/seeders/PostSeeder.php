<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Title',
            'body' => 'this is body',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'category_id' => '1',
        ]);
         DB::table('posts')->insert([
            'title' => 'Title2',
            'body' => 'this is body2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'category_id' => '1',
        ]);
    }
}
