<?php

namespace Database\Factories\Teams;

use App\Models\Teams\TeamType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TeamType>
 */
class TeamTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeamType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team' => fake()->name,
            'price' => fake()->randomDigit,
            'description' => fake()->word,
        ];
    }
}
