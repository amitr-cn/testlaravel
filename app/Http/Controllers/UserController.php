<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request) {

        $sesdata = $request->session()->all();
        // dd(Auth::user());
        return view('home')->with('sesdata', $sesdata);
    }
}
