<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = ['Petroknowledge', 'Petronews', 'Paper Review'];
        return [
            'user_id'       => mt_rand(1, 5),
            'title'         => $this->faker->sentence(mt_rand(2, 5)),
            'slug'          => $this->faker->slug(),
            'image'         => 'article.jpg',
            'description'   => $this->faker->paragraph(),
            'body'          => $this->faker->paragraph(mt_rand(5, 10)),
            'reader'        => '0',
            'category'      => $category[mt_rand(0, count($category) - 1)],
        ];
    }
}
