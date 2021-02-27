<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {

        if (is_null(Auth::user()->company)) {
            return view('auth.profile.user');
        } else {
            return view('auth.profile.company')->with('company', Auth::user()->company);
        }
    }
}
