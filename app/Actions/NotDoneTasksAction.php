<?php

namespace App\Actions;

use App\Enums\TaskStatusEnum;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

class NotDoneTasksAction
{
    public function execute(): Collection //получение задач со статусом DONE
    {
        return Task::query()->whereNot('status', TaskStatusEnum::STATUS_DONE)->get();
    }
}
