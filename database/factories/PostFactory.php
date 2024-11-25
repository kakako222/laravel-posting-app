<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory; // Faker をインポート

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        // Fakerの日本語ロケールを指定
        $faker = FakerFactory::create('ja_JP');

        return [
            'user_id' => 6, // usersテーブルにidカラムの値が1のユーザーが存在することが前提
            'title' => fake()->realText(20, 5),
            'content' => fake()->realText(200, 5)
        ];
    }
}
