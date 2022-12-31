<?php

namespace App\Http\Controllers;

use App\Actions\DoneTasksAction;
use App\Actions\NotDoneTasksAction;
use App\Actions\SearchTasksAction;

class TasksController extends Controller
{
    public function all(SearchTasksAction $action)
    {
        return view('todo', [
            "todos" => $action->execute()
        ]);
    }

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
