<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create(),
            'filename' => fake()->name.fake()->fileExtension,
            'model' => 'Unknown',
            'datetime' => fake()->dateTime,
            'lat' => fake()->latitude,
            'lon' => fake()->longitude,
        ];
    }
}
