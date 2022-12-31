<?php

namespace App\Models\Tests\Factories;

use App\Enums\TaskStatusEnum;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'description' => $this->faker->text,
            'status' => $this->faker->randomElement(TaskStatusEnum::cases())
        ];
    }
}
