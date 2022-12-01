<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 一件だけinsertする
        DB::table('tasks')->insert([
            'title' => 'テストテキスト１',
            'body' => 'テスト用のテキスト１です。',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $param = [
            [
                'title' => 'テストテキスト２',
                'body' => 'テスト用のテキスト２です。',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'title' => 'テストテキスト３',
                'body' => 'テスト用のテキスト３です。',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
            ];
        DB::table('tasks')->insert($param);
    }
}
