<?php

namespace App\Http\Controllers;

class CommonController
{
    public function hello()
    {
        return view('laravel', ["skills" => ["PHP", "JavaScript", "Python", "Kotlin"]]);
    }

    public function test()
    {
        return view('test');
    }
}
