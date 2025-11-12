<?php

namespace Database\Factories;
use App\Models\Article;
use App\Models\User;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{

    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment' => fake()->text(50),
            'user_id' => function(){
                return User::inRandomOrder()->first()->id;
            },
            'article_id' => function(){
                return Article::inRandomOrder()->first()->id;
            },
        ];
    }
    
}
