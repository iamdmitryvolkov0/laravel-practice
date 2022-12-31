<?php

namespace App\Actions;

use App\Enums\TaskStatusEnum;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

class DoneTasksAction
{
    public function execute(): Collection //получение задач со статусом  не DONE
    {
        return Task::query()->where('status',TaskStatusEnum::STATUS_DONE)->get();
    }
}
