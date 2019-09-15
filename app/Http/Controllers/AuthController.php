<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    Public function login ()
    {
        return view('auths.login');
    }

    Public function postlogin (Request $request)
    {
        dd($request->all());
    }
}
