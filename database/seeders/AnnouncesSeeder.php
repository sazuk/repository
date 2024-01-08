<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AnnouncesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announces')->insert([
                'title' => 'お知らせ',
                'body' => '流れ図学習ツールを公開しました',
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
