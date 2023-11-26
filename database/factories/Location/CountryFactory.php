<?php

namespace Database\Factories\Location;

use App\Models\Location\Country;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Country>
 */
class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_by' => User::factory()->create(),
            'country' => fake()->country,
            'shortcode' => fake()->countryCode,
            'slug' => fake()->slug,
        ];
    }
}
