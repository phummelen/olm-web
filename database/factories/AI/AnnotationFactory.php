<?php

namespace Database\Factories\AI;

use App\Models\AI\Annotation;
use App\Models\Photo;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Annotation>
 */
class AnnotationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Annotation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo_id' => Photo::factory()->create(),
            'category' => fake()->name,
            'category_id' => fake()->randomDigit,
            'supercategory_id' => fake()->randomDigit,
            'tag' => fake()->name,
            'tag_id' => fake()->randomDigit,
            'brand' => fake()->name,
            'brand_id' => fake()->randomDigit,
            'bbox' => fake()->sentence,
            'segmentation' => fake()->sentence,
            'is_crowd' => 0,
            'area' => 1,
            'added_by' => User::factory()->create(),
            'verified_by' => User::factory()->create(),
        ];
    }
}
