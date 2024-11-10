<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            'complete' => $this->faker->boolean,
            'stack' => $this->faker->word,
            'title' => $this->faker->sentence,
        ];
    }
}
