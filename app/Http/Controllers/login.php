<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class login extends Controller

{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $fillable = $request->only(['login', 'password']);

        if (Auth::attempt($fillable)) {
            return redirect('/');
        }
    }
}
