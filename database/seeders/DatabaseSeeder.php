<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ユーザーシーダーを呼び出す
        $this->call(UserSeeder::class);
        // ポストシーダーを呼び出す
        $this->call(PostSeeder::class);
    }
}

