<?php

namespace Database\Factories\Litter\Categories;

use App\Models\Litter\Categories\Dumping;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Dumping>
 */
class DumpingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dumping::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'small' => fake()->randomDigit,
        ];
    }
}
