<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class video extends Controller
{
    public function index() {
        return view('video');
    }
}
