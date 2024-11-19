<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 存在するユーザーのIDをランダムに選択してポストを作成
        $userIds = User::all()->pluck('id')->toArray();

        Post::factory()->count(5)->create([
            'user_id' => $userIds[array_rand($userIds)],
        ]);
    }
}
