<?php
declare(strict_types=1);

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => \rand(1, 5),
            'image_id' => \rand(1, 5),
            'content' => $this->faker->realText(),
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}