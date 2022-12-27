<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Util\Str;
use App\Models\Todo;

class PagesController extends Controller
{

    public function helloPage()
    {
        return view('laravel', ["skills" => ["PHP", "JavaScript", "Python", "Kotlin"]]);
    }

    public function testPage()
    {
        return view('test');
    }

    public function todoPage()
    {
        /*
         * Внесение данных в таблицу
         */
//        $todo = Todo::create([
//            "title" => "cook a dinner ",
//            "note" => "chicken with potatoes",
//        ]);
        /*
         * Получение всех полей из таблицы
         */
        $todos = Todo::all();

        /*
         * Изменение полей таблицы, например статус задачи
         */

        $todo = Todo::find(12);

        if ($todo) {
            $todo->status = 1;
            $todo->save();
        }

        /*
         * Удаление данных
         */

//        if($todo){
//            $todo->delete();
//        }

        return view('todo', [
            "todos" => $todos
        ]);
    }

    public function todoDone()
    {
        $todos = Todo::where('status',1)->get();

        return view('todo_done', [
            "todos" => $todos
        ]);
    }

    public function todoNotDone()
    {
        $todos = Todo::where('status',0)->get();

        return view('todo_not_done', [
            "todos" => $todos
        ]);
    }
}
