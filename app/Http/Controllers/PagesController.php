<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Util\Str;

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
}
