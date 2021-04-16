<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Company;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a Dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       /*  if ($request->query('query')) {
            $user = User::all();
            $users = Auth::user();
            return view('admin.'.$request->query('query'), compact('users'), ['user'=> $user]);
            } */ if (Auth::user()->user) {
            $user = User::all();
            $users = Auth::user();
            return view('admin', compact('user'), ['user'=> $user,]);
            } else {
            $user = User::all();
            $users = Auth::user();
            return view('admin.dashboard', ['user'=> $user, 'users'=> $users]);
        }
    }

    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $user = User::all();
        $users = Auth::user();
        return view('admin.users', ['user'=> $user, 'users'=> $users]);
    }
    public function company()
    {
        $companies = Company::all();
        $users = Auth::user();
        $user = User::all();
        return view('admin.Company', compact('companies'), ['Company'=> $companies, 'user'=> $user, 'users'=> $users]);
    }
    public function companyunlock()
    {
        $companies = Company::all()->where('status', 1);
        $users = Auth::user();
        $user = User::all();
        return view('admin.Companyunlock', compact('companies'), ['Companyunlock'=> $companies, 'user'=> $user, 'users'=> $users]);
    }

    public function companylock()
    {
        $companies = Company::all()->where('status', 0);
        $users = Auth::user();
        $user = User::all();
        return view('admin.Companylock', compact('companies'), ['Companylock'=> $companies, 'user'=> $user, 'users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
