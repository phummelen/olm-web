<?php

namespace Database\Factories\Litter\Categories;

use App\Models\Litter\Categories\Dogshit;
use Illuminate\Database\Eloquent\Factories\Factory;

class DogshitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dogshit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'poo_in_bag' => $this->faker->randomDigit,
        ];
    }
}
