<?php

namespace Database\Factories\Litter\Categories;

use App\Models\Litter\Categories\TrashDog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TrashDog>
 */
class TrashDogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TrashDog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'trashdog' => fake()->randomDigit,
        ];
    }
}
