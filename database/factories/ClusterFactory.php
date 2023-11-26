<?php

namespace Database\Factories;

use App\Models\Cluster;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cluster>
 */
class ClusterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cluster::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $pointCount = fake()->randomDigitNotNull;

        return [
            'lat' => fake()->latitude,
            'lon' => fake()->longitude,
            'point_count' => $pointCount * 1000,
            'point_count_abbreviated' => "{$pointCount}k",
            'geohash' => 'gcpvn219nm0ughyj8uemwkpb',
            'zoom' => fake()->randomElement(range(6, 18)),
        ];
    }
}
