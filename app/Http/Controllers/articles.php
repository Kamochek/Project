<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articles extends Controller
{
    public function index() {
        return view('articles');
    }
}
