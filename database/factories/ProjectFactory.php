<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $project_name = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($project_name);
        return [
            'name' => $project_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(500),
            'image' => 'product_' .$this->faker->unique()->numberBetween(1,10).'.jpg',
            'category_id' => $this->faker->numberBetween(1,3)
        ];
    }
}