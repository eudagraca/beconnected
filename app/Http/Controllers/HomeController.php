<?php

namespace App\Http\Controllers;

use App\Company;
use App\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\PostDec;

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
    public function index(Request $request)
    {
        $provincia = Provincia::all();
        $companies = Company::all()->where('status', 1);
        /* return view('home', compact('companies'), [ 'provincias_list' => $provincia,
        ]);*/
        $data = Company::get();
        
        /*return response()->json(['provincias_list' => $provincia, 'companies' => $companies, 'data' => $data]);
         */
        if($request->ajax()){
            return response()->json($data);
       }
       return view('home', compact('companies'), [ 'provincias_list' => $provincia,
        ]);
    }

    public function carousel(Request $request)
    {
        $data = Company::get();
        return response()->json($data);
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
