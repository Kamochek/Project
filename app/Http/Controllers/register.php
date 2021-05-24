<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class register extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function create(Request $request)
    {
        dump($request->all());

        Users::create(['login'=>$request->login,
            'password'=>Hash::make($request->password),
            'email_address'=>$request->email,
            'status' => 0,]);

    }
}
