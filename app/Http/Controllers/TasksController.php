<?php

namespace App\Http\Controllers;

use App\Actions\DoneTasksAction;
use App\Actions\NotDoneTasksAction;
use App\Actions\SearchTasksAction;
use App\Http\Requests\SearchTasksRequest;

class TasksController
{
    // Сделать фильтр и убрать done и notDone методы
    public function all(SearchTasksRequest $request, SearchTasksAction $action)
    {
        return view('task', [
            "todos" => $action->execute($request->validated()) //rename view and parameter
        ]);
    }

    // Использовать кавычки по назначению
    public function done(DoneTasksAction $action)
    {
        return view('todo_done', [
            "todos" =>  $action->execute()
        ]);
    }

    public function notDone(NotDoneTasksAction $action)
    {
        return view('todo_not_done', [
            "todos" => $action->execute()
        ]);
    }
}
