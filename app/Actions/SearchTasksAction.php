<?php

namespace App\Actions;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

class SearchTasksAction
{
    /**
     * Получение всех полей из таблицы
     */
    public function execute(array $fields): Collection
    {
        $query = Task::query();

        switch (true) {
            case isset($fields['status']):
                $query->where('status', $fields['status']);
            case isset($fields['title']):
                $query->where('title', $fields['title']);
            default:
        };

        // подумать о пагинации
        return $query->get();
    }
}
