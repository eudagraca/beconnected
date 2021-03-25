<?php

namespace App\Http\Controllers;

use App\Company;
use App\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $provincia = Provincia::all();
        $companies = Company::all();
        return view('home', compact('companies'), [ 'provincias_list' => $provincia,
        ]);
        // if (Auth::check()) {
        //     return view('home');
        // } else {
        //     return abort(404);
        // }
    }

    public function login()
    {
        return view('loginCSS');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chooseAccountType()
    {
        return view('auth.choose_accout_type');
    }
}
