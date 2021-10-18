<?php
declare(strict_types=1);

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => \rand(1, 5),
            'author_id' => \rand(1, 5),
            'content' => $this->faker->realText(),
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}