<?php

namespace Database\Factories;

use App\Models\Message; // 追記が必要
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $content = ['Web用', '機械学習用', 'フロントエンド用', '業務用', 'Unity用', 'iPhone用', 'Android用'];
        $title = ['PHP', 'Python', 'JavaScript', 'Java', 'C#', 'Swift', 'Kotlin'];

        $content = $content[rand(0, count($content) - 1)];
        $title = $title[rand(0, count($title) - 1)];
        return [
            'content' => $content,
            'title' => $title,
        ];
    }
}
