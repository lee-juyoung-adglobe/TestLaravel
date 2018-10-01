<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbcController extends Controller
{
    public function index () 
    {
        $hello = 'Hello,World!';
        // $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];
        $hello_array = [];

        return view('abc', compact('hello', 'hello_array'));
    }
}
