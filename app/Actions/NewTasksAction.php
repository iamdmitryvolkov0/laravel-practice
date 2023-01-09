<?php

namespace App\Actions;

use App\Enums\TaskStatusEnum;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

class NewTasksAction
{
    public function execute(): Collection
    {
        return Task::query()->where('status',TaskStatusEnum::STATUS_DONE)->get();
    }
}
