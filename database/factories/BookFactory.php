<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
            'name' => $this->faker->unique()->name(),
            'length' => $this->faker->randomNumber(),
            'isbn' => $this->faker->unique()->uuid(),
        ];
    }
}
