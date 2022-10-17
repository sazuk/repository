<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class user_answersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('user_answers')->insert([
                'user_id' => 1,
                'question_id' => 1,
                'answer'=> 'bbbbbbb',
                'correct'=> 'bbbbbbb',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
