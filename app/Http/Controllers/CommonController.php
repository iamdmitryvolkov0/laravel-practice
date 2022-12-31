<?php

namespace App\Http\Controllers;

class CommonController
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
