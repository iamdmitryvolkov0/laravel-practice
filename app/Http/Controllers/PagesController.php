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
//            "title" => "read a book",
//            "note" => "from the page 99",
//        ]);
    /*
     * Получение всех полей из таблицы
     */
        $todos = Todo::all();

    /*
     * Изменение полей таблицы
     */
        $todo = Todo::find(1);

        return view('todo', [
            "todos" => $todos
        ]);
    }
}
