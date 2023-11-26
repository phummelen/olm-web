<?php

namespace Database\Factories\Litter\Categories;

use App\Models\Litter\Categories\Industrial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Industrial>
 */
class IndustrialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Industrial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'oil' => fake()->randomDigit,
        ];
    }
}
