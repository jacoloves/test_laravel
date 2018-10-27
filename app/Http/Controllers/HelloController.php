<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function rest(Request $request)
    {
        return view('hello.rest');
    }
}
