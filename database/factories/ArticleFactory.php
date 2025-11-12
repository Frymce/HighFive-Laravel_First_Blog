<?php

namespace Database\Factories;

use Alirezasedghi\LaravelImageFaker\ImageFaker;
use Alirezasedghi\LaravelImageFaker\Services\Picsum;

use App\Models\Article;
use App\Models\User;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageFaker = new ImageFaker(new Picsum());

        return [
            'title' => fake()->sentence(15), // on veut 15 mots
            'body' => fake()->paragraph(50), // on veut 50 phrases
            'user_id' => function (){
                return User::inRandomOrder()->first()->id;
            },
            // 'image' => fake()->image('public/images'),
            'image' => $imageFaker->image(public_path("images"))
        ];
    }

}
