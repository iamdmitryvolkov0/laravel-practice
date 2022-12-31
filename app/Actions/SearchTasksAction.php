<?php

namespace App\Actions;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

class SearchTasksAction
{
    /**
     * Получение всех полей из таблицы
     */
    public function execute(): Collection
    {
        // подумать о пагинации
        return Task::all();
    }
}
