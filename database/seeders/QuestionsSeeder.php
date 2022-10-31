<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('questions')->insert([
                'title' => '命名の心得',
                'body' => '命名はデータを基準に考える',
                'image_path'=> 'http',
                'answer'=> 'aaaaa',
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('questions')->insert([
                'title' => '問題Ⅱ問題Ⅱ',
                'body' => '１+１＝',
                'image_path'=> 'http',
                'answer'=> '２２',
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
