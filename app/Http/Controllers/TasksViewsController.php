<?php

namespace App\Http\Controllers;

use App\Actions\DoneTasksAction;
use App\Actions\NewTasksAction;
use App\Actions\NotDoneTasksAction;
use App\Actions\SearchTasksAction;
use App\Http\Requests\SearchTasksRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class TasksViewsController
{


    public function main()
    {
        return view('main');
    }

    // Сделать фильтр и убрать done и notDone методы
    public function all(SearchTasksRequest $request, SearchTasksAction $action)
    {
        return view('todo_all', [
            'todos' => $action->execute($request->validated()) //rename view and parameter
        ]);
    }

    // Использовать кавычки по назначению
    public function done(DoneTasksAction $action)
    {
        return view('todo_done', [
            'todos' => $action->execute()
        ]);
    }

    public function notDone(NotDoneTasksAction $action)
    {
        return view('todo_not_done', [
            'todos' => $action->execute()
        ]);
    }

    public function form()
    {
        return view('todo_create_form');
    }
}
