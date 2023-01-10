<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksDataController
{
    public function store(Request $request)
    {
        $data = $request->only('title', 'description');
        $result = Task::create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);

        if ($result) {
            return redirect('/todo');
        }
    }

    public function destroy(Request $request)
    {
        $todo = Task::find($request->id);

        if (!$todo) {
            return abort('404');
        }

        $todo->delete();

        return redirect()->back();
    }

    public function statusUpdate(Request $request)
    {
        $todo = Task::find($request->id);

        if (!$todo) {
            return abort('404');
        }

        $todo -> status = 2;
        $todo ->save();
        return redirect()->back();
    }
}
